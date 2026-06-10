<?php
$host = getenv('DB_HOST') ?: '127.0.0.1';
$db   = getenv('DB_DATABASE') ?: 'digitara_ijen';
$user = getenv('DB_USERNAME') ?: 'root';
$pass = getenv('DB_PASSWORD') !== false ? getenv('DB_PASSWORD') : '';
$port = getenv('DB_PORT') ?: '3306';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     die("Koneksi database gagal: " . $e->getMessage());
}

// Database session handler for stateless platforms like Vercel
class DatabaseSessionHandler implements SessionHandlerInterface {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function open(string $path, string $name): bool {
        return true;
    }

    public function close(): bool {
        return true;
    }

    public function read(string $id): string|false {
        try {
            $stmt = $this->pdo->prepare("SELECT data FROM sessions WHERE id = ?");
            $stmt->execute([$id]);
            $row = $stmt->fetch();
            return $row ? (string)$row['data'] : '';
        } catch (PDOException $e) {
            return '';
        }
    }

    public function write(string $id, string $data): bool {
        try {
            $stmt = $this->pdo->prepare("REPLACE INTO sessions (id, data, last_access) VALUES (?, ?, ?)");
            $stmt->execute([$id, $data, time()]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function destroy(string $id): bool {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM sessions WHERE id = ?");
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function gc(int $max_lifetime): int|false {
        try {
            $old = time() - $max_lifetime;
            $stmt = $this->pdo->prepare("DELETE FROM sessions WHERE last_access < ?");
            $stmt->execute([$old]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}

if (session_status() === PHP_SESSION_NONE) {
    $handler = new DatabaseSessionHandler($pdo);
    session_set_save_handler($handler, true);
    
    // Explicitly configure session cookie parameters
    $secure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';
    if (isset($_SERVER['HTTP_HOST']) && (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false)) {
        $secure = false;
    }
    
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Lax'
    ]);
    
    session_start();
}
// Prevent page caching for dynamic session states
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

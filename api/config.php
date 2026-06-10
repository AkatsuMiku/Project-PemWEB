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

    public function open($savePath, $sessionName) {
        return true;
    }

    public function close() {
        return true;
    }

    public function read($id) {
        try {
            $stmt = $this->pdo->prepare("SELECT data FROM sessions WHERE id = ?");
            $stmt->execute([$id]);
            $row = $stmt->fetch();
            return $row ? $row['data'] : '';
        } catch (PDOException $e) {
            return '';
        }
    }

    public function write($id, $data) {
        try {
            $stmt = $this->pdo->prepare("REPLACE INTO sessions (id, data, last_access) VALUES (?, ?, ?)");
            $stmt->execute([$id, $data, time()]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function destroy($id) {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM sessions WHERE id = ?");
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function gc($maxlifetime) {
        try {
            $old = time() - $maxlifetime;
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
    session_start();
}
?>

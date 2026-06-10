<?php
require_once __DIR__ . '/config.php';
/** @var PDO $pdo */


$error = '';
$success = false;
$username = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($email) || empty($password)) {
        $error = 'Semua field wajib diisi!';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Format email tidak valid!';
    } elseif (strlen($password) < 6) {
        $error = 'Password minimal harus 6 karakter!';
    } else {
        // Check if username already exists
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $stmt->execute([$username, $email]);
        if ($stmt->fetch()) {
            $error = 'Username atau Email sudah terdaftar!';
        } else {
            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            
            // Insert user
            $stmtInsert = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            if ($stmtInsert->execute([$username, $email, $hashedPassword])) {
                $success = true;
            } else {
                $error = 'Terjadi kesalahan, gagal mendaftarkan akun.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/BOOTSRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/index/style.css">
    <title>Sign Up - DIGITARA IJEN EXPLORER</title>
    <style>
        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            padding: 20px;
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            padding: 40px;
            animation: cardFadeIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        }
        @keyframes cardFadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .auth-logo {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 1.6rem;
            color: #0f172a;
            text-decoration: none;
            display: block;
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: -0.5px;
        }
        .form-control {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #cbd5e1;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }
        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.15);
            border-color: #0d6efd;
        }
        .form-label {
            font-weight: 600;
            color: #334155;
            font-size: 0.9rem;
            margin-bottom: 8px;
        }
        .input-group-text {
            background: none;
            border-radius: 12px 0 0 12px;
            border-right: none;
            color: #64748b;
        }
        .input-group .form-control {
            border-radius: 0 12px 12px 0;
            border-left: none;
        }
        .input-group:focus-within .input-group-text {
            border-color: #0d6efd;
        }
    </style>
</head>
<body>
    <?php if ($success): ?>
        <script>
            alert("Akun berhasil dibuat! Anda akan dialihkan ke halaman login.");
            window.location.href = "login.php";
        </script>
    <?php endif; ?>

    <div class="auth-container">
        <div class="auth-card">
            <a href="/api/index.php" class="auth-logo text-primary">DIGITARA IJEN</a>
            
            <h4 class="fw-bold text-center text-dark mb-4">Buat Akun Baru</h4>
            
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger border-0 rounded-3 text-center py-2" role="alert" style="font-size: 0.9rem;">
                    <i class="fas fa-exclamation-circle me-2"></i><?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <!-- Username -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" value="<?php echo htmlspecialchars($username); ?>" required autocomplete="off">
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="contoh@domain.com" value="<?php echo htmlspecialchars($email); ?>" required autocomplete="off">
                    </div>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Minimal 6 karakter" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 rounded-pill py-2.5 fw-bold mb-3">Daftar Sekarang</button>
            </form>

            <div class="text-center mt-3">
                <p class="text-muted mb-0" style="font-size: 0.9rem;">
                    Sudah punya akun? <a href="login.php" class="text-primary fw-bold text-decoration-none">Masuk</a>
                </p>
            </div>
        </div>
    </div>

    <script src="/assets/BOOTSRAP/js/bootstrap.bundle.min.js"></script>
</body>
</html>

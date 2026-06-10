<?php
require_once __DIR__ . '/config.php';
/** @var PDO $pdo */

$booking_success = false;
$booking_error = '';
$booking_info = [];

// Handle ticket booking post
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book_ticket'])) {
    $ticket_id = intval($_POST['ticket_id'] ?? 0);
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $tanggal = $_POST['tanggal_kunjungan'] ?? '';
    $jumlah = intval($_POST['jumlah_tiket'] ?? 1);

    if (empty($nama) || empty($email) || empty($tanggal) || $jumlah < 1) {
        $booking_error = 'Semua field wajib diisi!';
    } else {
        $stmt = $pdo->prepare("SELECT * FROM tiket WHERE id = ?");
        $stmt->execute([$ticket_id]);
        $ticket = $stmt->fetch();

        if ($ticket && $ticket['status'] === 'tersedia') {
            $total_harga = $ticket['harga'] * $jumlah;
            $stmtInsert = $pdo->prepare("INSERT INTO pemesanan (tiket_id, nama, email, tanggal_kunjungan, jumlah_tiket, total_harga) VALUES (?, ?, ?, ?, ?, ?)");
            if ($stmtInsert->execute([$ticket_id, $nama, $email, $tanggal, $jumlah, $total_harga])) {
                $booking_success = true;
                $booking_info = [
                    'id' => $pdo->lastInsertId(),
                    'nama' => $nama,
                    'email' => $email,
                    'tanggal' => $tanggal,
                    'jumlah' => $jumlah,
                    'total' => $total_harga,
                    'kategori' => $ticket['kategori'],
                    'kelas' => $ticket['kelas']
                ];
            } else {
                $booking_error = 'Gagal memproses pemesanan tiket.';
            }
        } else {
            $booking_error = 'Tiket tidak tersedia!';
        }
    }
}

// Fetch tickets
try {
    $stmtTickets = $pdo->query("SELECT * FROM tiket");
    $tickets = $stmtTickets->fetchAll();
} catch (PDOException $e) {
    $tickets = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/BOOTSRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/FONTAWESOME/css/all.css">
    <link rel="stylesheet" href="/tiket/tiket.css">
    <title>Beli Tiket - DIGITARA IJEN EXPLORER</title>
</head>

<body>
    <div class="container-fluid">
        <!-- NAVBAR -->
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg sticky-top">
                    <div class="container">
                        <a class="navbar-brand" href="/api/index.php">DIGITARA IJEN EXPLORER</a>
                        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto align-items-center">
                                <li class="nav-item"><a class="nav-link" href="/api/index.php">Utama</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static">
                                        Sosial Media Pengembang
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" aria-labelledby="navbarDropdown" style="border-radius: 12px; min-width: 200px;">
                                        <li><a class="dropdown-item py-2" href="https://www.instagram.com/h3ru4ever?igsh=MXF6dGMxYmtzZGhjeQ==" target="_blank"><i class="fab fa-instagram me-2 text-danger"></i>Instagram</a></li>
                                        <li><a class="dropdown-item py-2" href="https://www.tiktok.com/@akatsumiku?_r=1&_t=ZS-96zoy9IpkSi" target="_blank"><i class="fab fa-tiktok me-2 text-dark"></i>TikTok</a></li>
                                        <li><a class="dropdown-item py-2" href="https://github.com/AkatsuMiku" target="_blank"><i class="fab fa-github me-2 text-dark"></i>GitHub</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Bantuan</a></li>
                                <li class="nav-item ms-lg-3 d-flex align-items-center flex-column flex-lg-row">
                                    <?php if (isset($_SESSION['username'])): ?>
                                        <span class="navbar-text me-lg-3 mb-2 mb-lg-0 fw-bold text-dark"><i class="fas fa-user-circle me-1"></i>Halo, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                                        <a href="/api/logout.php" class="btn btn-outline-danger rounded-pill px-4">Sign out</a>
                                    <?php else: ?>
                                        <a href="/api/login.php" class="btn btn-outline-primary rounded-pill px-4 me-2 mb-2 mb-lg-0">Sign in</a>
                                        <a href="/api/register.php" class="btn btn-primary rounded-pill px-4">Sign up</a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- TOMBOL BACK -->
        <div class="row">
            <div class="col text-center mt-5 mb-3">
                <h2>Pemesanan Tiket Kawah Ijen</h2>
                <p>Tekan tombol dibawah ini jika ingin kembali ke menu utama :v </p>
                <a href="/api/index.php" class="btn btn-primary rounded-pill px-4 mt-3">Kembali ke Utama</a>
            </div>
        </div>
        <!-- TABEL -->
        <div class="row">
            <div class="col">
                <div class="container mt-2 mb-5">
                    <h2 class="mb-4 text-center"></h2>
                    <div class="table-responsive">
                        <table class="table custom-table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 5%;">No</th>
                                    <th scope="col" style="width: 40%;">Kategori</th>
                                    <th scope="col" style="width: 15%;" class="text-center">Kelas</th>
                                    <th scope="col" style="width: 15%;">Harga</th>
                                    <th scope="col" style="width: 10%;" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($tickets)): ?>
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">Tidak ada tiket tersedia saat ini.</td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($tickets as $idx => $t): ?>
                                        <tr>
                                            <td>
                                                <strong><?php echo $idx + 1; ?></strong><br>
                                            </td>
                                            <td>
                                                <h6 class="mb-1 text-dark"><?php echo htmlspecialchars($t['kategori']); ?></h6>
                                                <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>
                                                    <?php 
                                                    if ($t['kategori'] === 'Lokal') echo 'For Local Tourist';
                                                    elseif ($t['kategori'] === 'Mancanegara') echo 'For Foreign Tourist';
                                                    else echo 'If you need a guide';
                                                    ?>
                                                </small>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge-custom <?php 
                                                    if ($t['kelas'] === 'VIP') echo 'badge-vip';
                                                    elseif ($t['kelas'] === 'REGULER') echo 'badge-reguler';
                                                    else echo 'badge-festival';
                                                ?>"><?php echo htmlspecialchars($t['kelas']); ?></span>
                                            </td>
                                            <td><strong class="<?php echo $t['status'] === 'habis' ? 'text-muted' : 'text-primary'; ?>">
                                                Rp <?php echo number_format($t['harga'], 0, ',', '.'); ?>
                                            </strong></td>
                                            <td class="text-center">
                                                <?php if ($t['status'] === 'habis'): ?>
                                                    <button class="btn-soldout" disabled>Habis</button>
                                                <?php else: ?>
                                                    <button type="button" class="btn-book border-0" 
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#bookingModal"
                                                            data-id="<?php echo $t['id']; ?>"
                                                            data-category="<?php echo htmlspecialchars($t['kategori']); ?>"
                                                            data-class="<?php echo htmlspecialchars($t['kelas']); ?>"
                                                            data-price="<?php echo $t['harga']; ?>">Pesan</button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="bookingModalLabel"><i class="fas fa-ticket-alt me-2 text-primary"></i>Pemesanan Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="">
                    <input type="hidden" name="ticket_id" id="modal_ticket_id">
                    <input type="hidden" id="modal_ticket_price_raw">
                    <div class="modal-body py-4">
                        <!-- Ticket Info Summary -->
                        <div class="bg-light p-3 rounded-4 mb-4 border border-light d-flex justify-content-between align-items-center">
                            <div>
                                <small class="text-muted d-block">Kategori & Kelas</small>
                                <span class="fw-bold text-dark" id="modal_category"></span> - <span class="badge bg-primary text-white" id="modal_class"></span>
                            </div>
                            <div class="text-end">
                                <small class="text-muted d-block">Harga per Tiket</small>
                                <span class="fw-bold text-primary" id="modal_price"></span>
                            </div>
                        </div>

                        <!-- Form Fields -->
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama Pemesan</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" 
                                   value="<?php echo htmlspecialchars(isset($_SESSION['username']) ? $_SESSION['username'] : ''); ?>" required style="border-radius: 12px;">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="contoh@domain.com" 
                                   value="<?php echo htmlspecialchars(isset($_SESSION['email']) ? $_SESSION['email'] : ''); ?>" required style="border-radius: 12px;">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="tanggal_kunjungan" class="form-label fw-bold">Tanggal Kunjungan</label>
                                <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" required style="border-radius: 12px;" min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="col-6">
                                <label for="jumlah_tiket" class="form-label fw-bold">Jumlah Tiket</label>
                                <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" value="1" min="1" max="10" required style="border-radius: 12px;" oninput="calculateTotal()">
                            </div>
                        </div>

                        <!-- Total Section -->
                        <div class="border-top pt-3 d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-dark fs-5">Total Bayar:</span>
                            <span class="fw-bold text-success fs-4" id="modal_total_price">Rp 0</span>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="book_ticket" class="btn btn-primary rounded-pill px-4">Proses Pemesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Booking Success Modal -->
    <?php if ($booking_success && !empty($booking_info)): ?>
        <div class="modal fade" id="receiptModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow-lg" style="border-radius: 24px; overflow: hidden;">
                    <div class="bg-success text-white text-center py-4">
                        <i class="fas fa-check-circle fa-4x mb-2 animate-bounce"></i>
                        <h4 class="fw-bold mb-0">Pemesanan Berhasil!</h4>
                    </div>
                    <div class="modal-body p-4">
                        <p class="text-muted text-center mb-4">Terima kasih atas pemesanan Anda. Berikut adalah detail tiket Anda:</p>
                        
                        <div class="border border-dashed p-3 rounded-4 mb-3 bg-light">
                            <div class="row mb-2">
                                <div class="col-5 text-muted">ID Booking:</div>
                                <div class="col-7 fw-bold text-end">#DG-<?php echo str_pad($booking_info['id'], 5, '0', STR_PAD_LEFT); ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-5 text-muted">Nama:</div>
                                <div class="col-7 text-end"><?php echo htmlspecialchars($booking_info['nama']); ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-5 text-muted">Email:</div>
                                <div class="col-7 text-end"><?php echo htmlspecialchars($booking_info['email']); ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-5 text-muted">Kategori / Kelas:</div>
                                <div class="col-7 text-end"><?php echo htmlspecialchars($booking_info['kategori']); ?> (<?php echo htmlspecialchars($booking_info['kelas']); ?>)</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-5 text-muted">Tanggal:</div>
                                <div class="col-7 text-end"><?php echo date('d F Y', strtotime($booking_info['tanggal'])); ?></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-5 text-muted">Jumlah:</div>
                                <div class="col-7 text-end fw-bold"><?php echo $booking_info['jumlah']; ?> Tiket</div>
                            </div>
                            <hr class="my-2 border-muted">
                            <div class="row">
                                <div class="col-5 text-dark fw-bold">Total Bayar:</div>
                                <div class="col-7 text-success text-end fw-bold fs-5">Rp <?php echo number_format($booking_info['total'], 0, ',', '.'); ?></div>
                            </div>
                        </div>
                        <div class="alert alert-info border-0 rounded-3 text-center py-2" style="font-size: 0.88rem;">
                            <i class="fas fa-info-circle me-1"></i> Harap tunjukkan receipt ini di gerbang masuk Ijen.
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0 justify-content-center">
                        <button type="button" class="btn btn-success rounded-pill px-5 py-2 fw-bold" data-bs-dismiss="modal">Selesai</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const receiptModal = new bootstrap.Modal(document.getElementById('receiptModal'));
                receiptModal.show();
            });
        </script>
    <?php endif; ?>

    <?php if (!empty($booking_error)): ?>
        <script>
            alert("Error: <?php echo $booking_error; ?>");
        </script>
    <?php endif; ?>

    <script src="/assets/BOOTSRAP/js/bootstrap.bundle.min.js"></script>
    <script>
        const bookingModal = document.getElementById('bookingModal');
        if (bookingModal) {
            bookingModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const ticketId = button.getAttribute('data-id');
                const category = button.getAttribute('data-category');
                const className = button.getAttribute('data-class');
                const price = button.getAttribute('data-price');
                
                document.getElementById('modal_ticket_id').value = ticketId;
                document.getElementById('modal_category').innerText = category;
                document.getElementById('modal_class').innerText = className;
                document.getElementById('modal_price').innerText = 'Rp ' + Number(price).toLocaleString('id-ID');
                document.getElementById('modal_ticket_price_raw').value = price;
                
                // Reset qty to 1
                document.getElementById('jumlah_tiket').value = 1;
                calculateTotal();
            });
        }

        function calculateTotal() {
            const qtyInput = document.getElementById('jumlah_tiket');
            let qty = parseInt(qtyInput.value) || 1;
            if (qty < 1) {
                qty = 1;
                qtyInput.value = 1;
            }
            const price = parseFloat(document.getElementById('modal_ticket_price_raw').value) || 0;
            const total = qty * price;
            document.getElementById('modal_total_price').innerText = 'Rp ' + total.toLocaleString('id-ID');
        }
    </script>
</body>

</html>
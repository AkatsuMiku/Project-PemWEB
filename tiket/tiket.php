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
                                <li class="nav-item"><a class="nav-link" href="/tiket/tiket.php">Beli Tiket</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Bantuan</a></li>
                                <li class="nav-item ms-lg-3">
                                    <a href="" class="btn btn-outline-primary rounded-pill px-4 me-2 mb-2 mb-lg-0">Sign
                                        in</a>
                                    <a href="" class="btn btn-primary rounded-pill px-4">Sign up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="container mt-5">
                    <h2 class="mb-4 text-center">Jadwal Acara & Pemesanan Tiket</h2>
                    <div class="table-responsive">
                        <table class="table custom-table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 20%;">Tanggal & Waktu</th>
                                    <th scope="col" style="width: 40%;">Nama Acara / Rute</th>
                                    <th scope="col" style="width: 15%;">Kategori / Kelas</th>
                                    <th scope="col" style="width: 15%;">Harga</th>
                                    <th scope="col" style="width: 10%;" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>12 Jun 2026</strong><br>
                                        <small class="text-muted">19:30 WIB</small>
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-dark">Konser Musik Seni Rock Kebangsaan</h6>
                                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>Stadion
                                            Utama Gelora Bung Karno</small>
                                    </td>
                                    <td><span class="badge-custom badge-vip">VIP Frontrow</span></td>
                                    <td><strong class="text-primary">Rp 1.500.000</strong></td>
                                    <td class="text-center">
                                        <a href="#" class="btn-book">Pesan</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>15 Jun 2026</strong><br>
                                        <small class="text-muted">13:00 WIB</small>
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-dark">Seminar Teknologi Masa Depan AI</h6>
                                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>Auditorium
                                            Menara Merdeka</small>
                                    </td>
                                    <td><span class="badge-custom badge-reguler">Reguler</span></td>
                                    <td><strong class="text-dark">Rp 250.000</strong></td>
                                    <td class="text-center">
                                        <button class="btn-soldout" disabled>Habis</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>20 Jun 2026</strong><br>
                                        <small class="text-muted">20:00 WIB</small>
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-dark">Pertunjukan Teater Musikal Nusantara</h6>
                                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>Gedung
                                            Kesenian Jakarta</small>
                                    </td>
                                    <td><span class="badge-custom badge-festival">Festival (Berdiri)</span></td>
                                    <td><strong class="text-primary">Rp 450.000</strong></td>
                                    <td class="text-center">
                                        <a href="#" class="btn-book">Pesan</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center my-5">
            <h2>Pemesanan Tiket Kawah Ijen</h2>
            <p class="text-muted">Formulir pemesanan tiket masuk Kawah Ijen akan segera hadir di sini.</p>
            <a href="../api/index.php" class="btn btn-primary rounded-pill px-4 mt-3">Kembali ke Utama</a>
        </div>
    </div>
    <script src="/assets/BOOTSRAP/js/bootstrap.bundle.min.js"></script>
</body>

</html>
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
                                <tr>
                                    <td>
                                        <strong>1</strong><br>
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-dark">Mancanegara</h6>
                                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>For
                                            Mancanegara Tourist</small>
                                    </td>
                                    <td class="text-center"><span class="badge-custom badge-vip">VIP</span></td>
                                    <td><strong class="text-primary">Rp 2.500.000</strong></td>
                                    <td class="text-center">
                                        <a href="#" class="btn-book">Pesan</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>2</strong><br>
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-dark">Lokal</h6>
                                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>For Local
                                            Tourist</small>
                                    </td>
                                    <td class="text-center"><span class="badge-custom badge-vip">VIP</span></td>
                                    <td><strong class="text-dark">Rp 250.000</strong></td>
                                    <td class="text-center">
                                        <button class="btn-soldout" disabled>Habis</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>3</strong><br>
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-dark">Mancanegara</h6>
                                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>For
                                            Mancanegara Tourist</small>
                                    </td>
                                    <td class="text-center"><span class="badge-custom badge-reguler">REGULER</span></td>
                                    <td><strong class="text-primary">Rp 450.000</strong></td>
                                    <td class="text-center">
                                        <a href="#" class="btn-book">Pesan</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>4</strong><br>
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-dark">Lokal</h6>
                                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>For
                                            Lokal Tourist</small>
                                    </td>
                                    <td class="text-center"><span class="badge-custom badge-reguler">REGULER</span></td>
                                    <td><strong class="text-primary">Rp 50.000</strong></td>
                                    <td class="text-center">
                                        <a href="#" class="btn-book">Pesan</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>5</strong><br>
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-dark">Guide</h6>
                                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i>If you need
                                            a guide</small>
                                    </td>
                                    <td class="text-center"><span class="badge-custom badge-festival">Add-on</span></td>
                                    <td><strong class="text-primary">Rp 500.000</strong></td>
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
    <script src="/assets/BOOTSRAP/js/bootstrap.bundle.min.js"></script>
</body>

</html>
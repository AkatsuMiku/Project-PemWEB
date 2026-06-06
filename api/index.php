<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/BOOTSRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/index/style.css">
    <title>Explore Kawah Ijen</title>
</head>
<body>
    <?php
    $wisata_kawahijen = [
        [
            "title" => "Melihat Keindahan kawah ijen",
            "deskripsi" => "Nikmati pemandangan kawah vulkanik dengan danau asam berwarna toska yang memukau.",
            "img" => "/PHOTO/ijen_volcano.jpg",
        ],
        [
            "title" => "Exploring the Blue Fire",
            "deskripsi" => "Saksikan fenomena langka api biru yang hanya ada dua di dunia saat malam hari.",
            "img" => "/PHOTO/ijen_night_sky.png",
        ],
        [
            "title" => "Experience the Sunrise",
            "deskripsi" => "Sambut pagi dengan pemandangan matahari terbit yang spektakuler dari puncak Ijen.",
            "img" => "/PHOTO/ijen_trail.png",
        ],
        [
            "title" => "Enjoy the Night View",
            "deskripsi" => "Rasakan suasana malam yang magis dengan langit penuh bintang di atas kawah.",
            "img" => "/PHOTO/kawah_ijen_premium.png",
        ]
    ];
    ?>

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
                                <a href="" class="btn btn-outline-primary rounded-pill px-4 me-2 mb-2 mb-lg-0">Sign in</a>
                                <a href="" class="btn btn-primary rounded-pill px-4">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            </div>
        </div>

        <!-- CAROUSEL -->
        <div class="row">
            <div class="col">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/PHOTO/kawah_ijen_sunrise.png" class="d-block w-100" alt="FOTO KAWAH IJEN">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Kawah Ijen from Puncak</h5>
                                <p>Keindahan Kawah Ijen saat matahari terbit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/PHOTO/ijen_blue_fire.png" class="d-block w-100" alt="FOTO BLUE FIRE">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Blue Fire Kawah Ijen</h5>
                                <p>Fenomena langka Blue Fire di Kawah Ijen.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/PHOTO/ijen_crater_day.png" class="d-block w-100" alt="FOTO SUNRISE">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Pemandangan Kawah Ijen</h5>
                                <p>Keindahan spektakuler kaldera Kawah Ijen.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- CARDS -->
        <div class="container my-5">
            <div class="row justify-content-center g-4">
                <?php foreach ($wisata_kawahijen as $wisata) : ?>
                    <div class="col-auto">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo htmlspecialchars($wisata["img"]); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($wisata["title"]); ?>">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?php echo htmlspecialchars($wisata["title"]); ?></h5>
                                <p class="card-text"><?php echo htmlspecialchars($wisata["deskripsi"]); ?></p>
                                <a href="/tiket/tiket.php" class="btn btn-primary mt-auto">Beli Tiket</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="bg-light text-dark mt-5 py-5 border-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5>DIGITARA IJEN EXPLORER</h5>
                        <p>Jelajahi keindahan Kawah Ijen dengan panduan digital kami. Temukan pengalaman tak terlupakan di salah satu keajaiban alam Indonesia.</p>
                        <div class="social-icons">
                            <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5>Link Cepat</h5>
                        <ul class="list-unstyled">
                            <li><a href="/api/index.php" class="text-dark text-decoration-none">Utama</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Tentang Kami</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Galeri</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Bantuan</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5>Kontak Kami</h5>
                        <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Kawah Ijen No. 1, Banyuwangi, Jawa Timur</p>
                        <p><i class="fas fa-envelope me-2"></i>heru@gmail.com</p>
                        <p><i class="fas fa-phone me-2"></i>+62 123 456 789</p>
                        <p><i class="fas fa-clock me-2"></i>Jam Operasional: 24/7</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5>Berlangganan Newsletter</h5>
                        <p>Dapatkan update terbaru tentang Kawah Ijen.</p>
                        <form class="d-flex">
                            <input class="form-control me-2" type="email" placeholder="Email Anda">
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2026 DIGITARA IJEN EXPLORER. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="text-dark text-decoration-none me-3">Kebijakan Privasi</a>
                        <a href="#" class="text-dark text-decoration-none">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/assets/BOOTSRAP/js/bootstrap.bundle.min.js"></script>
</body>
</html>

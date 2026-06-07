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
            "popup_title" => "Detail: Keindahan & Geologi Kawah Ijen",
            "popup_content" => "Kawah Ijen merupakan salah satu keajaiban geologi Indonesia yang berupa danau kawah bersifat asam terbesar di dunia. Terletak di ketinggian 2.386 mdpl, danau ini memiliki diameter sekitar 951 meter dengan kedalaman mencapai 200 meter. Keunikan utamanya terletak pada warna airnya yang hijau toska pekat yang sangat memukau, yang terjadi akibat tingginya konsentrasi asam sulfat, air raksa, dan berbagai material vulkanik terlarut di dalamnya. Selain menikmati pemandangan danau yang megah dari bibir kaldera, pengunjung juga dapat menyaksikan langsung aktivitas luar biasa dari para penambang belerang tradisional yang naik-turun kawah sambil memikul beban hingga 80-100 kg batu belerang murni.",
            "tips" => [
                "Sangat direkomendasikan memakai masker respirator (bukan masker kain biasa) karena embusan angin sering kali membawa gas belerang yang pekat dan menyengat.",
                "Jaga jarak aman dari bibir kawah and selalu utamakan jalan bagi para penambang belerang yang sedang melintas demi keselamatan bersama.",
                "Gunakan sepatu gunung atau sepatu olahraga dengan sol yang tidak licin karena jalur trekking menuju bibir kawah didominasi oleh pasir dan batuan kerikil yang cukup curam."
            ]
        ],
        [
            "title" => "Exploring the Blue Fire",
            "deskripsi" => "Saksikan fenomena langka api biru yang hanya ada dua di dunia saat malam hari.",
            "img" => "/PHOTO/ijen_night_sky.png",
            "popup_title" => "Detail: Eksplorasi Fenomena Langka Blue Fire",
            "popup_content" => "Fenomena Api Biru atau \"Blue Fire\" di Kawah Ijen adalah daya tarik kelas dunia yang sangat langka, karena hanya dapat ditemukan di dua lokasi di seluruh planet Bumi—yaitu di Islandia dan di Gunung Ijen, Indonesia. Banyak orang salah mengira bahwa ini adalah lava berwarna biru, namun secara ilmiah fenomena ini terjadi karena adanya gas belerang bertekanan tinggi yang keluar dari retakan tanah dengan suhu ekstrem mencapai 600°C. Ketika gas super panas ini bertemu dan bereaksi langsung dengan oksigen di udara bebas, gas tersebut memicu percikan api berwarna biru elektrik yang menyala di kegelapan malam. Fenomena magis ini berangsur-angsur memudar dan hilang seiring munculnya cahaya matahari pagi.",
            "tips" => [
                "Untuk menyembunyikan atau melihat Blue Fire dengan sempurna, pendakian dari Pos Paltuding harus dimulai sekitar jam 01.00 atau 02.00 dini hari.",
                "Jika Anda berniat turun ke dasar kawah untuk melihat Blue Fire dari dekat, Anda wajib menyewa pemandu lokal (guide) karena medannya sangat curam, berbatu besar, dan minim pencahayaan.",
                "Bawa kacamata pelindung (goggles) untuk mencegah mata Anda perih dan berair akibat paparan asap belerang yang tebal di dasar kawah."
            ]
        ],
        [
            "title" => "Experience the Sunrise",
            "deskripsi" => "Sambut pagi dengan pemandangan matahari terbit yang spektakuler dari puncak Ijen.",
            "img" => "/PHOTO/ijen_trail.png",
            "popup_title" => "Detail: Menyambut Sunrise Spektakuler di Puncak Ijen",
            "popup_content" => "Momen matahari terbit (sunrise) di puncak Gunung Ijen menyajikan salah satu panorama fajar paling dramatis di Indonesia. Setelah melewati dinginnya malam, pengunjung akan disuguhkan perubahan warna langit yang luar biasa, mulai dari biru gelap, ungu, hingga gradasi oranye dan kuning keemasan yang hangat. Sinar matahari pagi yang perlahan menyentuh permukaan Kawah Ijen akan mempertegas warna hijau toska air danau dan memunculkan siluet megah dari gunung-gunung di sekitarnya, seperti Gunung Raung, Gunung Suket, dan Gunung Baluran. Menyaksikan kabut tipis yang melayang di atas permukaan kawah berlatar belakang matahari terbit memberikan sensasi kedamaian yang tidak terlupakan.",
            "tips" => [
                "Suhu udara di puncak Ijen menjelang pagi hari bisa sangat ekstrem drops hingga mencapai 5°C sampai 10°C. Pastikan Anda mengenakan jaket windproof tebal, kupluk, masker, dan sarung tangan.",
                "Cari spot foto terbaik di sekitar area \"Pohon Mati\" (kompleks pepohonan kering eksotis) agak ke sebelah kanan dari jalur utama bibir kawah untuk mendapatkan sudut pandang terbaik berlatar matahari terbit.",
                "Jangan terburu-buru turun setelah matahari terbit, karena pencahayaan terbaik untuk berfoto dengan latar belakang danau kawah justru terjadi antara jam 06.00 - 07.30 pagi saat sinar matahari menyinari seluruh permukaan air."
            ]
        ],
        [
            "title" => "Enjoy the Night View",
            "deskripsi" => "Rasakan suasana malam yang magis dengan langit penuh bintang di atas kawah.",
            "img" => "/PHOTO/kawah_ijen_premium.png",
            "popup_title" => "Detail: Pesona Langit Malam & Astrofotografi Ijen",
            "popup_content" => "Selain pesona kawahnya, Gunung Ijen adalah surga tersembunyi bagi para pencinta keindahan langit malam (stargazing). Karena letaknya yang jauh dari polusi cahaya perkotaan besar dan berada di dataran tinggi, langit di sekitar kawasan Ijen sangat bersih dan jernih pada malam hari yang cerah. Pengunjung yang melakukan pendakian dini hari dapat menyaksikan hamparan miliaran bintang yang membentuk galaksi Bima Sakti (Milky Way) membentang luas tepat di atas kaldera. Kombinasi antara siluet pegunungan yang kokoh, kepulan asap solfatara yang samar, dan gemerlap bintang di langit menciptakan atmosfer yang sangat magis, puitis, dan fotogenik.",
            "tips" => [
                "Pastikan Anda membawa headlamp (senter kepala) berkualitas dengan baterai cadangan yang cukup karena sepanjang jalur pendakian sama sekali tidak ada lampu penerangan jalan.",
                "Bagi pencinta fotografi yang ingin memburu foto Milky Way, waktu terbaik adalah saat musim kemarau (antara bulan Mei hingga September) ketika langit cenderung bersih tanpa awan.",
                "Gunakan pengaturan kamera manual (Pro Mode) dengan tripod yang sangat kokoh, bukaan lensa terbesar (f/1.8 - f/2.8), ISO tinggi (1600 - 3200), dan shutter speed sekitar 15-25 detik untuk menangkap detail bintang dengan sempurna."
            ]
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

        <!-- DOCK SECTION: INTERESTED IN KAWAH IJEN -->
        <div class="row justify-content-center my-4">
            <div class="col-11 col-md-8 col-lg-7">
                <div class="interest-dock d-flex justify-content-between align-items-center gap-2 px-4 py-3">
                    <span class="interest-text m-0">Tertarik dengan Kawah Ijen?</span>
                    <a href="/api/tiket.php" class="btn btn-primary btn-dock-action">Beli Tiket</a>
                </div>
            </div>
        </div>

        <!-- CARDS -->
        <div class="container my-5">
            <div class="row justify-content-center g-4">
                <?php foreach ($wisata_kawahijen as $index => $wisata) : ?>
                    <div class="col-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                        <div class="card w-100 card-clickable" data-index="<?php echo $index; ?>" style="cursor: pointer;">
                            <img src="<?php echo htmlspecialchars($wisata["img"]); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($wisata["title"]); ?>">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?php echo htmlspecialchars($wisata["title"]); ?></h5>
                                <p class="card-text mb-0"><?php echo htmlspecialchars($wisata["deskripsi"]); ?></p>
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

    <!-- Custom Modal -->
    <div class="custom-modal-overlay" id="attractionModal">
        <div class="custom-modal-container">
            <button class="custom-modal-close" id="closeModalBtn">&times;</button>
            <div class="custom-modal-body">
                <h3 class="modal-title-custom" id="modalTitle"></h3>
                <p class="modal-content-custom" id="modalContent"></p>
                <div class="modal-tips-container">
                    <h5 class="tips-heading"><i class="fas fa-lightbulb me-2 text-warning"></i>Tips Praktis</h5>
                    <ul class="tips-list" id="modalTips"></ul>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/BOOTSRAP/js/bootstrap.bundle.min.js"></script>
    <script>
        const wisataData = <?php echo json_encode($wisata_kawahijen); ?>;
        
        document.addEventListener("DOMContentLoaded", () => {
            const modal = document.getElementById("attractionModal");
            const container = modal.querySelector(".custom-modal-container");
            const modalTitle = document.getElementById("modalTitle");
            const modalContent = document.getElementById("modalContent");
            const modalTips = document.getElementById("modalTips");
            const closeBtn = document.getElementById("closeModalBtn");
            const cards = document.querySelectorAll(".card-clickable");

            cards.forEach(card => {
                card.addEventListener("click", () => {
                    const index = card.getAttribute("data-index");
                    const data = wisataData[index];
                    if (data) {
                        modalTitle.textContent = data.popup_title;
                        modalContent.textContent = data.popup_content;
                        
                        // Populate tips
                        modalTips.innerHTML = "";
                        data.tips.forEach(tip => {
                            const li = document.createElement("li");
                            li.textContent = tip;
                            modalTips.appendChild(li);
                        });

                        // Reset scroll position of the modal body
                        const modalBody = modal.querySelector(".custom-modal-body");
                        if (modalBody) {
                            modalBody.scrollTop = 0;
                        }

                        // Calculate spatial position and dimensions of the popup relative to the card
                        const rect = card.getBoundingClientRect();
                        const cardX = rect.left + rect.width / 2;
                        const cardY = rect.top + rect.height / 2;

                        // Calculate optimal width based on device screen
                        let targetWidth;
                        if (window.innerWidth < 576) {
                            targetWidth = window.innerWidth * 0.92;
                        } else {
                            targetWidth = Math.max(320, Math.min(420, rect.width * 1.35));
                        }

                        // Apply styles before measuring offsetHeight so layout is calculated correctly
                        container.style.position = "absolute";
                        container.style.width = `${targetWidth}px`;
                        container.style.maxWidth = "100%";

                        // Measure layout height of the container with the new content and width
                        const containerHeight = container.offsetHeight;

                        // Calculate left position (centered relative to the card, clamped inside viewport)
                        let left = rect.left + (rect.width - targetWidth) / 2;
                        left = Math.max(10, Math.min(left, window.innerWidth - targetWidth - 10));

                        // Calculate top position (aligned with top of card, or shifting up if space is limited)
                        let top;
                        const spaceBelow = window.innerHeight - rect.top;
                        if (spaceBelow >= containerHeight + 20 || spaceBelow > rect.bottom) {
                            top = rect.top;
                        } else {
                            top = rect.bottom - containerHeight;
                        }
                        top = Math.max(10, Math.min(top, window.innerHeight - containerHeight - 10));

                        // Apply position coordinates
                        container.style.left = `${left}px`;
                        container.style.top = `${top}px`;

                        // Set transform origin relative to the container itself
                        const originX = cardX - left;
                        const originY = cardY - top;
                        container.style.transformOrigin = `${originX}px ${originY}px`;

                        // Show modal
                        modal.classList.add("active");
                        document.body.style.overflow = "hidden"; // Prevent background scroll
                    }
                });
            });

            // Close modal functions
            const closeModal = () => {
                modal.classList.remove("active");
                document.body.style.overflow = ""; // Enable background scroll
            };

            closeBtn.addEventListener("click", closeModal);
            
            // Close when clicking outside container
            modal.addEventListener("click", (e) => {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Close with Escape key
            document.addEventListener("keydown", (e) => {
                if (e.key === "Escape" && modal.classList.contains("active")) {
                    closeModal();
                }
            });
        });
    </script>
</body>
</html>

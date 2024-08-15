<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative School</title>
    <!-- Setting Icon website -->
    <link rel="icon" href="../assets/images/logo.png" type="image/png">
    <!-- Link ke Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/mycss.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Memuat jQuery dari CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/validate.js" defer></script>


</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <img src="../assets/images/logo.png" class="rounded-img" alt="" srcset="">
        <!-- Burger button ketika responsive -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- List menu website -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#activities">Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>

            </ul>
        </div>
    </nav>


    <!-- Home Section -->
    <section id="home" class="home-section">
        <div class="container text-center">
            <h1>Selamat datang di Creative School</h1>
            <p>Sekolah Kreativitas Membangun Negeri</p>
            <div class="container text-center mt-5">
                <div class="button-group">
                    <a href="#about" class="btn btn-started">Getting Started</a>
                    <a href="login.php" class="btn btn-custom btn-login">Login</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about-section">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Sekolah kami berdedikasi untuk menyediakan lingkungan yang mendukung di mana siswa dapat belajar dan
                berkembang. Kami menekankan keunggulan akademik dan pertumbuhan pribadi, memastikan bahwa setiap siswa
                mencapai potensi penuh mereka.</p>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="activities-section">
        <div class="container">
            <h2>Kegiatan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="activity1.jpg" class="card-img-top" alt="Activity 1">
                        <div class="card-body">
                            <h5 class="card-title">Sports</h5>
                            <p class="card-text">Engage in a variety of sports activities that promote teamwork and
                                physical fitness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="activity2.jpg" class="card-img-top" alt="Activity 2">
                        <div class="card-body">
                            <h5 class="card-title">Arts & Crafts</h5>
                            <p class="card-text">Explore your creativity with our arts and crafts programs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="activity3.jpg" class="card-img-top" alt="Activity 3">
                        <div class="card-body">
                            <h5 class="card-title">Science Club</h5>
                            <p class="card-text">Join our Science Club to experiment and learn more about the wonders of
                                science.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="news-section">
        <div class="container">
            <h2>Berita Terbaru</h2>
            <ul class="list-group" id="news-list">
                <!-- Daftar berita akan diisi oleh AJAX -->
            </ul>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2>Kontak Kami</h2>
            <form name="feedbackForm" action="../controller/feedback/insert.php" method="post"
                onsubmit="return validateFormFeedback()">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email">
                </div>
                <div class="form-group">
                    <label for="telp">No. Handphone:</label>
                    <input type="tel" class="form-control" name="telp" id="telp" placeholder="Masukan No Handphone">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="4"
                        placeholder="Masukan Alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="ulasan">Ulasan:</label>
                    <textarea class="form-control" id="ulasan" name="feedback" rows="4"
                        placeholder="Masukan Ulasan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light text-center">
        <div class="container">
            <p>&copy; 2024 Creative School. All rights reserved.</p>
        </div>
    </footer>
    <script src="../assets/js/getDataBeritaAjax.js" defer></script>

    <!-- fungsi untuk scrolling smooth saat klik menu -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                document.querySelector(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomku - Peminjaman Ruangan</title>
    <link rel="icon" href="https://via.placeholder.com/32x32.png?text=R">
    <style>
        /* General Reset */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        .container {
            width: 90%;
            margin: 0 auto;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            background: url('assets/img/walisongo.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 80px 0;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                rgba(0, 0, 0, 0.6),
                rgba(0, 0, 0, 0.3)
            ); /* Gradasi overlay */
            z-index: 1;
        }


        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-content .btn-primary {
            background-color: #4a90e2;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .hero-content .btn-primary:hover {
            background-color: #357abd;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            position: relative; /* Agar elemen di atas hero section */
            z-index: 3; /* Tetap di atas overlay */
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: #fff; /* Warna putih agar kontras dengan hero section */
            text-decoration: none;
            font-weight: bold;
            font-size: 1rem; /* Ukuran font agar lebih terlihat */
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #f5a623; /* Warna hover oranye */
        }

        .nav-links .btn {
            background-color: transparent; /* Tanpa background */
            color: #fff; /* Warna putih */
            padding: 8px 12px;
            border: 2px solid #f5a623; /* Garis border oranye */
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .nav-links .btn:hover {
            background-color: #f5a623; /* Background berubah oranye */
            color: #fff;
            border-color: #d48821;
        }

        /* Section */
        .section {
            padding: 60px 0;
            text-align: center;
        }
        .section-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #4a90e2;
        }

        /* Services Section */
        .services-grid {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .service-card {
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 300px;
        }
        .service-card img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .service-card h3 {
            color: #4a90e2;
            margin-bottom: 10px;
        }

        /* Footer */
        footer {
            background-color: #4a90e2;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

    </style>
</head>
<body>
    <header class="hero-section">
        <div class="container">
            <nav class="navbar">
                <h1 class="logo">Roomku</h1>
                <ul class="nav-links">
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li><a href="login.php" class="btn">Masuk</a></li>
                </ul>
            </nav>
            <div class="hero-content">
                <h1>Platform Peminjaman Ruangan <br> di UIN Walisongo Semarang</h1>
                <p>Mudah, Cepat, dan Praktis untuk Keperluan Akademik atau Acara Kampus.</p>
                <a href="login.php" class="btn btn-primary">Pinjam Sekarang</a>
            </div>
        </div>
    </header>

    <main>
        <!-- About Section -->
        <section id="about" class="section about">
            <div class="container">
                <h2 class="section-title">Tentang Roomku</h2>
                <p>Roomku adalah platform digital yang dirancang untuk memudahkan mahasiswa, dosen, dan pihak kampus dalam memesan ruangan untuk kegiatan akademik maupun acara lainnya di lingkungan UIN Walisongo Semarang.</p>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="section services">
            <div class="container">
                <h2 class="section-title">Layanan Kami</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <img src="assets/img/fst.jpeg" alt="Ruangan Theater ISDB">
                        <h3>Ruangan Kelas</h3>
                        <p>Pemesanan ruang kelas untuk kuliah, seminar, atau kegiatan akademik lainnya.</p>
                    </div>
                    <div class="service-card">
                        <img src="assets/img/audit2.png" alt="Gedung Auditorium">
                        <h3>Ruangan Aula</h3>
                        <p>Booking aula besar untuk acara seperti wisuda, pertemuan, atau kegiatan organisasi.</p>
                    </div>
                    <div class="service-card">
                        <img src="assets/img/gsg.jpeg" alt="Gedung Serba Guna">
                        <h3>Laboratorium</h3>
                        <p>Pemesanan ruang GSG unutk acara kegiatan olahraga, kesenian dan lainnya.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section contact">
            <div class="container">
                <h2 class="section-title">Kontak Kami</h2>
                <p>Jika Anda memiliki pertanyaan, silakan hubungi kami melalui kontak berikut:</p>
                <p>Email: <a href="mailto:support@roomku.com">support@roomku.com</a></p>
                <p>Telepon: +62 857-1234-5678</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Roomku - UIN Walisongo Semarang. All Rights Reserved.</p>
    </footer>
</body>
</html>

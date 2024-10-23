<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><b>Quicksales</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-3" href="{{ url('/login') }}">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-dark text-white text-center d-flex align-items-center"
        style="height: 100vh; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/1600x900/?store,technology'); background-size: cover;">
        <div class="container">
            <h1 class="display-4"><b>QuickSales</b></h1>
            <p class="lead">Kelola Inventaris dan Transaksi dengan lebih cepat</p>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 text-center">
        <div class="container">
            <h2 class="mb-5">Fitur</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <i class="bi bi-speedometer2 display-4 text-primary"></i>
                    </div>
                    <h4>Cepat dan Efisien</h4>
                    <p>Percepat proses penjualan Anda dan buat pelanggan Anda senang dengan checkout yang cepat.</p>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <i class="bi bi-bar-chart display-4 text-primary"></i>
                    </div>
                    <h4>Analitik Mendetail</h4>
                    <p>Dapatkan laporan dan wawasan real-time untuk membuat keputusan bisnis yang tepat.</p>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <i class="bi bi-cart display-4 text-primary"></i>
                    </div>
                    <h4>Manajemen Inventaris</h4>
                    <p>Kelola inventaris Anda dengan mudah dan pantau stok secara otomatis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 text-center bg-white">
        <div class="container">
            <h2 class="mb-5">Hubungi Kami</h2>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Lokasi Kami</h3>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.750029575299!2d112.63153367475358!3d-7.979192694368014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79ef37bc5dce09%3A0xd0ef18e5e89162a0!2sPoliteknik%20Negeri%20Malang!5e0!3m2!1sen!2sid!4v1633010134544!5m2!1sen!2sid"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Informasi Kontak</h3>
                            <p><strong>Alamat:</strong> Jl. Soekarno-Hatta No.9, Tlogomas, Malang, Jawa Timur 65144</p>
                            <p><strong>Telepon:</strong> (0341) 552393</p>
                            <p><strong>Email:</strong> support@possystem.com</p>
                            <p><strong>Jam Operasional:</strong></p>
                            <ul class="list-unstyled">
                                <li>Senin - Jumat: 09:00 - 17:00</li>
                                <li>Sabtu: 10:00 - 14:00</li>
                                <li>Minggu: Tutup</li>
                            </ul>
                            <p>Ada pertanyaan? Hubungi tim dukungan kami!</p>
                            <a href="mailto:support@possystem.com" class="btn btn-warning rounded-pill mb-4">Email
                                Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center bg-dark text-white py-3">
        <p><b>Copyright &copy; 2024 Quicksales</b></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

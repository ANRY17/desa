<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Blog Home - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/header.css">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Set semua gambar pada carousel memiliki lebar dan tinggi yang sama */
        .carousel-item img {
            width: 100%;
            height: 500px;
            /* Atur tinggi gambar sesuai kebutuhan Anda */
            object-fit: cover;
            /* Pastikan gambar terisi sepenuhnya */
        }

        /* Custom CSS for the widget */
        .news-widget {
            margin-top: 20px;
        }

        .news-category {
            margin-bottom: 10px;
        }

        .news-category h2 {
            margin-bottom: 10px;
            cursor: pointer;
            /* Cursor pointer to indicate clickable */
        }

        .news-list {
            list-style: none;
            padding: 0;
        }

        .news-list li {
            display: none;
            /* Hide news items by default */
            margin-bottom: 10px;
        }

        .nav-link {
            width: 100%;
            /* Setiap tab mengambil lebar yang sama */
            border: 1px solid transparent;
            /* Tambahkan border yang transparan secara default */
        }

        .nav-link.active {
            border-color: #dee2e6 #dee2e6 #fff;
            /* Sesuaikan border saat tab aktif */
        }

        .trapezoid {
            position: relative;
            width: 200px;
            /* Sesuaikan ukuran sesuai kebutuhan */
            height: 40px;
            /* Sesuaikan ukuran sesuai kebutuhan */
            background-color: #007bff;
            /* Warna background */
            clip-path: polygon(0% 0%, 100% 0%, 80% 100%, 0% 100%);
            margin-bottom: 10px;
            padding: 10px;
        }

        .trapezoid span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            /* Warna teks */
        }

        .embed-responsive-4by3 {
            position: relative;
            height: 0;
            padding-bottom: calc(65% + 10px);
            /* Ubah 75% sesuai dengan aspek rasio yang diinginkan */
        }

        .embed-responsive-4by3 iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    @include('partials.header')
    @include('partials.navbar')
    <div class="px-2 bg-light">
        <div class="d-flex align-items-center">
            <div class="trapezoid"><span>Berita:</span></div>
            <marquee class="py-3 ml-2" direction="left" onmouseover="this.stop()" onmouseout="this.start()"
                scrollamount="10" behavior="scroll">
                Selamat datang di website kami teknologi.visitklaten.com - Sharing Teknologi - Berbagi Ilmu Tentang
                Teknologi ## Selamat datang di website kami teknologi.visitklaten.com - Sharing Teknologi - Berbagi Ilmu
                Tentang Teknologi
            </marquee>
        </div>
    </div>



    <div class="container-fluid">
        @yield('container')
    </div>

    @include('partials.footer')


    <!-- Core theme JS-->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="{{ asset('js/time.js') }}"></script>
    <script src="js/scripts.js"></script>
</body>

</html>

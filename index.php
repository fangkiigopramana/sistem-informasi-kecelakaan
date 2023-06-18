<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Penanganan Kecelakaan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/sb-admin-2.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="/">Penanganan Kecelakaan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold" style="margin-right: 30px;">
                        <li class="nav-item"><a class="nav-link" href="#header">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pemicu">Pemicu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#penanganan">Penanganan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#faq">QnA</a></li>
                    </ul>
                    <!-- <a href="admin/login.php">
                        <button class="btn btn-outline-light me-2" type="button">Login Admin</button>
                    </a> -->
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header style="background-image: url('assets/bg-lalu-lintas.jpg')" id="header">
            <div class="bg-dark  bg-opacity-75 py-5">
                <div class="container px-5 opacity-100">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">
                                    Perbanyak Pengetahuan, Kurangi Kecelakaan
                                </h1>
                                <p class="lead fw-normal text-white-50 mb-4">Menyediakan berbagai informasi tentang
                                    kecelakaan dan cara mencegahnya, sehinggak kamu dapat meningkatkan pengetahuan dan
                                    mengurangi risiko terjadinya kecelakaan.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-warning btn-lg px-4 me-sm-3" href="#features">Lihat Statistik</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <img class="img-fluid rounded-3 my-5" src="assets/icon-kendaraan.png"
                                alt="..." />
                        </div>
                    </div>
                </div>
        </header>

        <?php include 'user/pemicu.php' ?>

        <!-- Quotes section-->
        <div class="py-5 bg-warning bg-opacity-25">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/T6q7t8DeKiY" frameborder="0" allowfullscreen></iframe>
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"Kecelakaan bukanlah suatu kejadian yang terjadi pada
                                orang lain, tapi bisa terjadi pada siapa saja. Oleh karena itu, waspada dan hati-hati
                                selalu saat berkendara."
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Penanganan section-->
        <?php include 'user/penanganan.php' ?>

        <!-- Statistik section -->
        <?php include 'user/faq.php' ?>
        
    </main>

    <!-- Footer-->
    <footer class="py-4 mt-auto bg-dark">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white"><span class="fw-bold">Penanganan Kecelakaan</span> &copy; 2023</div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Data AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SehatKU</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-family: 'Playfair Display'" ;>
        <div class="container">
            <a class="navbar-brand" href="#">ApoteKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Obat
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/addobat">Catat</a></li>
                            <li><a class="dropdown-item" href="/showobat" name="showobat">Tampil</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transaksi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('tampil')}}">Pembelian</a></li>
                            <li><a class="dropdown-item" href="{{route('index')}}">Lihat Pembelian</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--END NAVBAR-->

    <!--HEADER-->
    <div class="container">
        <div class="row">
            <div class="col-5" style="margin-top: 10em;">
                <h2 style="font-family: 'Playfair Display';font-size: 50px">Solusi Terpercaya Untuk Kesehatan Anda</h2>
                <p style="font-family: 'Poppins'; font-size: 20px; padding-top:20px;">Hidup Sehat Dimulai Disini!</p>
                <button type="button" class="btn btn-primary mt-5 px-5 py-2" style="font-size: 15px;">Start Here</button>
            </div>
            <div class="col-7">
                <img src="assets/home.jpg" style="width: 40em; margin-left: 10em;">
            </div>
        </div>
    </div>
    <!--END HEADER-->

    <!-- MAIN CONTENT -->
    <div class="container">
        <div class="row">
            <h2 class="text-center" style="font-family: 'Playfair Display'; margin-top:100px;">HEALTHCARE SERVICES</h2>
            <p class="text-center" style="font-family: 'Poppins';">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus veritatis error in hic necessitatibus ipsam commodi soluta molestias, ratione totam?</p>
        </div>

        <!-- END MAIN -->

        <!-- MAIN CONTENT 2 -->
        <div class="container" style="margin-top: 5em;">
            <div class="row d-flex justify-content-around" data-aos="fade-up-right" data-aos-duration="3000">
                <img src="assets/health.jpg" style="width:30%;">
                <div class="col-6" style="margin-top: 5em; font-family: 'Poppins'">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ipsa vero veritatis culpa ipsam sint voluptatibus facere nulla dolor rem.</div>
            </div>
            <!-- END MAIN CONTENT 2 -->

            <!-- MAIN CONTENT 3 -->
            <div class="row d-flex justify-content-around" data-aos="fade-up-left" data-aos-duration="3000">
                <div class="col-6" style="margin-top: 5em; font-family: 'Poppins'">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ipsa vero veritatis culpa ipsam sint voluptatibus facere nulla dolor rem.</div>
                <img src="assets/doc.png" style="width: 30%;">
            </div>
            <!-- END MAIN CONTENT 3 -->

            <!-- MAIN CONTENT 4 -->
            <div class="row d-flex justify-content-around" data-aos="fade-up-right" data-aos-duration="3000">
                <img src="assets/obat.jpg" style="width:30%;">
                <div class="col-6" style="margin-top: 5em; font-family: 'Poppins'">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ipsa vero veritatis culpa ipsam sint voluptatibus facere nulla dolor rem.</div>
            </div>
        </div>
        <!-- END MAIN CONTENT 4 -->

        <!-- Footer -->
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted" style="font-family: 'Poppins'">&copy; Apotek, Inc</p>
                <ul class="nav col-md-4 justify-content-end" style="font-family: 'Poppins'">
                    <li class="nav-item"><i href="#" class="fab fa-facebook-f p-3"></i></li>
                    <li class="nav-item"><i href="#" class="fab fa-instagram p-3"></i></li>
                    <li class="nav-item"><i href="#" class="fab fa-twitter p-3"></i></li>
                </ul>
            </footer>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>

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
            <a class="navbar-brand" href="#">SehatKU</a>
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
                            <li><a class="dropdown-item" href="/showobat"name="showobat">Tampil</a></li>
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
                <span class="navbar-text">
                    iniLogo
                </span>
            </div>
        </div>
    </nav>
    <!--END NAVBAR-->

    <!--HEADER-->
    <div class="container">
        <div class="row">
            <h2 class="text-center" style="font-family: 'Playfair Display'; margin-top:50px;">Transaksi Obat</h2>
            <h2 class="text-center fs-5" style="font-family: 'Poppins'; margin-top:20px;">Masukkan Transaksi Obat Disini</h2>
            <div class="container mt-5">
                <div class="row g-2">
                    <form action="/tambah" method="post">
                        @csrf
                        <div class="col-6">
                            <div class="mt-3">
                                <label class="form-label">Nama Pembeli</label>
                                <input class="form-control mt-2" name="nama_pembeli">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mt-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat Pembeli</label>
                                <input class="form-control mt-2" name="alamat_pembeli">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mt-3">
                                <select class="form-select" aria-label="nama_obat" name="nama_obat">
                                                <option selected disabled>Nama Obat</option>
                                                @foreach ($data1 as $obat)
                                                    <option value={{ $obat->id }}>{{ $obat->nama_obat }}</option>
                                                @endforeach
                                            </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mt-3">
                                <label for="exampleInputEmail1" class="form-label">Harga</label>
                                <input class="form-control mt-2" name="total">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--END HEADER-->

    <!-- MAIN CONTENT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profil-style.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profil | Universitas Muhamadiyah Surabaya</title>
</head>

<body>
    <!-- START NAVIGATION  -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top pt-2 pb-2 background-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../image/logo-um-surabaya.png" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item text-white">
                        <a class="nav-link  text-white" aria-current="page" href="home.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle active" id="navDropdownProfil" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" href="#">Profil</a>
                        <ul class="dropdown-menu" aria-labelledby="navDropdownProfil">
                            <li><a class="dropdown-item" href="profil_sejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="profil_visi_misi.php">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="profil_tujuan.php">Tujuan</a></li>
                            <li><a class="dropdown-item" href="profil_keunggulan.php">Keunggulan</a></li>
                            <li><a class="dropdown-item" href="profil_struktur_organisasi.php">Struktur Organisasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#">Program Studi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Biaya Kuliah</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Penerimaan / Pendaftaran <br> Mahasiswa Baru</a></li>
                            <li><a class="dropdown-item" href="#">Download Brosur</a></li>
                            <li><a class="dropdown-item" href="#">Beasiswa Pendidikan</a></li>
                            <li><a class="dropdown-item" href="#">Biaya Kuliah</a></li>
                            <li><a class="dropdown-item" href="#">Sistem Pendidikan dan <br>Status</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END : NAVIGATION  -->

    <!-- START : BREADCRUMB -->
    <div class="pt-4 pb-4 bg-light mt-4" style="margin-top: 100px !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fs-5 fw-bolder">Struktur Organisasi Universitas Muhamadiyah Surabaya</div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item"><a href="home.php" class="text-decoration-none">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- END : BREADCRUMB -->

    <!-- START SECTION : ONE -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <nav>
                        <div class="nav-item ">
                            <a href="profil_sejarah.php"
                                class="nav-link text-dark border-top border-bottom pt-3 pb-3">Sejarah Singkat</a>
                        </div>
                        <div class="nav-item">
                            <a href="profil_visi_misi.php" class="nav-link  text-dark border-bottom pt-3 pb-3">Visi dan
                                Misi</a>
                        </div>
                        <div class="nav-item">
                            <a href="profil_tujuan.php" class="nav-link text-dark border-bottom pt-3 pb-3">Tujuan</a>
                        </div>
                        <div class="nav-item">
                            <a href="profil_keunggulan.php"
                                class="nav-link text-dark border-bottom pt-3 pb-3">Keunggulan</a>
                        </div>
                        <div class="nav-item">
                            <a href="profil_struktur_organisasi.php"
                                class="nav-link active-link text-dark border-bottom pt-3 pb-3">Struktur Organisasi</a>
                        </div>
                    </nav>
                </div>
                <div class="col-md-8">
                    <h1 class="heading-title mb-3">
                        Keunggulan
                    </h1>
                    <div class="main-content d-flex justify-content-start ">
                        <ul>
                            <li class="text-navy"><span class="text-dark">Rektor = Dr. dr. Sukadiono, MM</span></li>
                            <li class="text-navy"><span class="text-dark">Wakil Rektor 1 = Dr. M. Ridwan M. Pd</span>
                            </li>
                            <li class="text-navy"><span class="text-dark">Wakil Rektor 2 = Dr. Endah Hendarwati, S.E.,
                                    M.Pd</span></li>
                            <li class="text-navy"><span class="text-dark">Wakil Rektor 3 = Ma'ruf Sya'ban, ST., SE.,
                                    M.AK</span></li>
                            <li class="text-navy"><span class="text-dark">Wakil Rektor 4 = Dr. Mundakir, S.Kep., M.Kep,.
                                    Ns</span></li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
    <!-- END : SECTION ONE -->

    <!-- START : FOOTER  -->
    <footer class="background-primary text-white text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="fs-5 fw-bolder">Alamat Kami</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <div class="text-white">Jl. Sutorejo No 59, Surabaya, Jawa Timur, Indonesia 60113</div>
                        </li>
                        <li class="mt-2">
                            <a href="#" target="_blank" class="text-white text-decoration-none ">
                                <i class="text-warning fa-solid fa-phone me-2"></i>
                                <Span>08001234000</Span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="https://api.whatsapp.com/send?phone=6281295262009&text=Hi%20Admin%20Program%20Perkuliahan%20Karyawan,%20saya%20ingin%20tanya%20"
                                target="_blank" class="text-white text-decoration-none mt-3">
                                <i class="fa-brands text-warning fa-whatsapp me-2"></i>
                                <Span>081295262009</Span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-white text-decoration-none mt-3">
                                <i class="text-warning fa-solid fa-fax me-2"></i>
                                <Span>(021) 8762004, 8762002</Span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="fs-5 fw-bolder">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Beranda</Span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Program Studi</Span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Biaya Kuliah</Span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Galeri</Span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Kontak</Span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="fs-5 fw-bolder">Informasi</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Pendaftaran / Registrasi</Span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Biaya Pendaftaran</Span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Sistem Perkuliahan</Span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-white text-decoration-none"><i
                                    class="fa-solid me-2 fa-angle-right"></i><Span>Beasiswa Pendidikan</Span></a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="fs-5 fw-bolder mb-0">Lokasi Kampus</h5>
                    <a href="https://www.google.com/maps/d/u/0/viewer?msa=0&ll=-7.258062007495857%2C112.789185&spn=0.005194%2C0.010568&iwloc=0004de665ebea73e2c4b8&mid=1viyZhqtEarcpsBeyR-zqD5yIoBs&z=16"
                        target="_blank">
                        <img src="../image/maps-um-surabaya.png" alt="" class="img-fluid mt-3">
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center p-2 bg-white">
            <a class="text-dark text-decoration-none" href="#">© 2022 Copyright Universitas Muhamadiyah Surabaya</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- END : FOOTER -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous ">
    </script>
</body>

</html>
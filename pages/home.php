<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/home-style.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Beranda | Universitas Muhamadiyah Surabaya</title>
</head>

<body>
    <!-- START NAVIGATION  -->
    <nav class="navbar navbar-expand-lg navbar-light pt-2 pb-2 background-primary fixed-top mb-5">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../image/logo-um-surabaya.png" class="img-fluid" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item text-white">
                        <a class="nav-link active text-white" aria-current="page" href="home.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" id="navDropdownProfil" role="button"
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

    <!-- START : SECTION ONE  -->
    <section class="img-bg d-flex align-items-center" style="margin-top: 80px !important;">
        <div class="container">
            <!-- <div class="position-absolute" style="top: 0;"> -->
            <div class="fs-5 text-white fw-bold">Selamat Datang di</div>
            <div class="fs-2 text-white fw-bold">Universitas Muhamadiyah Surabaya</div>
            <!-- </div> -->
        </div>
        <!-- <img src="../image/bg-image-kampus.png" class="img-fluid" alt=""> -->
    </section>
    <!-- END : SECTION ONE  -->

    <!-- START : SECTION TWO  -->
    <section class="bg-light pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0" style="height: 200px;">
                        <h1 class="card-title text-white bg-navy text-center heading-title pt-3 pb-3">Info PMB</h1>
                        <div class="card-body pt-2">
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <i class="fa-solid fa-caret-right text-navy me-3"></i>
                                <a href="#" class="text-decoration-none text-dark">Penerimaan / Pendaftaran Mahasiswa
                                    Baru</a>
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <i class="fa-solid fa-caret-right text-navy me-3"></i>
                                <a href="#" class="text-decoration-none text-dark">Download Brosur</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="card border-0" style="height: 200px;">
                        <h1 class="card-title text-white background-primary text-center heading-title pt-3 pb-3">Info
                            Akademik
                        </h1>
                        <div class="card-body pt-2">
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <i class="fa-solid fa-caret-right text-navy me-3"></i>
                                <a href="#" class="text-decoration-none text-dark">Beasiswa Pendidikan</a>
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <i class="fa-solid fa-caret-right text-navy me-3"></i>
                                <a href="#" class="text-decoration-none text-dark">Biaya Kuliah</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <div class="card border-0" style="height: 200px;">
                        <h1 class="card-title text-white bg-danger text-center heading-title pt-3 pb-3">Info Akademik
                        </h1>
                        <div class="card-body pt-2 " style="height: '120px;'">
                            <div class="d-flex justify-content-start align-items-center mb-1">
                                <i class="fa-solid fa-caret-right text-navy me-3"></i>
                                <a href="#" class="text-decoration-none text-dark">Sistem Pendidikan dan Status</a>
                            </div>
                            <div class="d-flex justify-content-start align-items-center">
                                <i class="fa-solid fa-caret-right text-navy me-3"></i>
                                <a href="#" class="text-decoration-none text-dark">Beban dan Masa Studi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- END : SECTION TWO  -->

    <!-- START : SECTION THEREE  -->
    <section class=" pt-5 pb-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="../image/icon-toga.svg" alt="">
                <div class="heading-title ms-3">Program Studi</div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 ">
                    <div class="text-center card-body bg-light pt-4 pb-4 style-border-red">
                        <div class="">S1 - Manajemen</div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="text-center bg-light pt-4 pb-4 style-border-navy  ">
                        <div class="">S1 - Akuntansi</div>
                    </div>
                </div>
                <div class="col-md-3  mt-3 mt-md-0">
                    <div class="text-center bg-light pt-4 pb-4 style-border-yellow  ">
                        <div class="">S1 - Teknik Mesin</div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="text-center  bg-light pt-4 pb-4 style-border-green  ">
                        <div class="">S1 - Teknik Elektro</div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3 ">
                    <div class="text-center card-body bg-light pt-4 pb-4 style-border-yellow">
                        <div class="">S1 - Teknik Sipil</div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="text-center bg-light pt-4 pb-4 style-border-red  ">
                        <div class="">S1 - Ilmu Hukum</div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="text-center bg-light pt-4 pb-4 style-border-green  ">
                        <div class="">S1 - Psikologi</div>
                    </div>
                </div>
            </div>
            <a href="" class="text-decoration-none align-items-center btn bg-navy text-white btn-sm mt-4">Lihat
                Selengkapnya <i class="fa-solid fa-arrow-right ms-3"></i></a>
        </div>
    </section>
    <!-- END : SECTION THEREE  -->

    <!-- START : SECTION FOUR  -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <div class="card border-0 bg-navy h-100 pt-4 pb-4" style="border-radius: 0px !important;">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 col-6">
                                    <img src="../image/img-rektor-um-surabaya.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-6 col-6">
                                    <div class="text-white"><strong>Rektor</strong></div>
                                    <div class="text-white mt-2"><strong>Dr. dr. Sukadiono, M.M.</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-3 mt-md-0 ">
                    <div class="container bg-light pt-4 pb-4">
                        <div class="fs-2 text-navy fw-bolder">Pendaftaran / Penerimaan Mahasiswa Baru</div>
                        <div class="mt-3 mb-2"><strong>Jadwal PMB (Penerimaan/Pendaftaran Mahasiswa Baru)</strong>
                            Program Kuliah Karyawan, Kuliah Online / Daring / Blended, dan Program Kelas Malam di
                            <strong>Universitas Muhamadiyah Surabaya</strong> seperti berikut ini
                        </div>
                        <div>Gelombang I = 1 Maret - 3 Mei 2022</div>
                        <div class="text-danger fw-bolder">Gelombang II = 4 Mei - 5 Juli 2022</div>
                        <div>Gelombang III = 6 Juli - 11 September 2022</div>
                        <div class="mt-2 mb-2 fw-bolder">Awal Kuliah = Sabtu, 17 Sept 2022</div>
                        <div>
                            <a href="#" class="text-decoration-none text-navy fw-bolder">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- START : SECTION FIVE  -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="d-flex  align-items-stretch">
                <img src="../image/icon-news.svg" alt="">
                <div class="heading-title ms-3">Informasi</div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card">
                        <img src="../image/img-solusi-cerdas.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <div class="card-title" style="color: #727272; font-weight: 500;">20 April 2022</div>
                            <p class="card-text" style="text-align: justify;"><strong>Solusi Cerdas</strong> Bagi yang
                                <strong>BELUM BEKERJA</strong> , mengikuti Program Kuliah Karyawan dan Kelas Malam...
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none text-navy">Selengkapnya</a>
                                <i class="fa-solid fa-arrow-right ms-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="card">
                        <img src="../image/img-pendaftaran.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <div class="card-title" style="color: #727272; font-weight: 500;">14 Maret 2022</div>
                            <p class="card-text" style="text-align: justify;">Daftar di bawah ini adalah
                                <strong>Angkutan/kendaraan umum (beserta jalur) dan stasiun kereta</strong>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none text-navy">Selengkapnya</a>
                                <i class="fa-solid fa-arrow-right ms-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="card">
                        <img src="../image/img-transportasi.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <div class="card-title" style="color: #727272; font-weight: 500;">10 Maret 2022</div>
                            <p class="card-text" style="text-align: justify;"><strong>Penerimaan/Pendaftaran</strong>
                                Mahasiswa Baru, Program Kuliah Karyawan, Perkuliahan Online...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none text-navy">Selengkapnya</a>
                                <i class="fa-solid fa-arrow-right ms-3"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="card">
                        <img src="../image/img-waktu-kuliah.png" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <div class="card-title" style="color: #727272; font-weight: 500;">10 Februari 2022</div>
                            <p class="card-text " style="text-align: justify;"><strong>Waktu Kuliah</strong> ( Jadwal
                                Kuliah ) dan <strong>Daftar Dosen</strong> ( Tenaga Pengajar ) di Universitas
                                Muhamadiyah Surabaya...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none text-navy">Selengkapnya</a>
                                <i class="fa-solid fa-arrow-right ms-3"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END : SECTION FIVE  -->

    <!-- START : SECTION SIX  -->
    <section class="pt5 pb-5">
        <div class="container">
            <div class="d-flex align-items-center">
                <img src="../image/icon-gallery.svg" alt="">
                <h1 class="heading-title ms-3">Galeri Kegiatan</h1>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="card border-0">
                        <img src="../image/galeri-um-surabaya.png" alt="img-fluid">
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="card border-0">
                        <img src="../image/galeri-um-surabaya-2.png" alt="img-fluid">
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="card border-0">
                        <img src="../image/galeri-um-surabaya-3.png" alt="img-fluid">
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <div class="card border-0">
                        <img src="../image/galeri-um-surabaya-4.png" alt="img-fluid">
                    </div>
                </div>
            </div>
            <a href="" class="text-decoration-none align-items-center btn bg-navy text-white btn-sm mt-4">Lihat
                Selengkapnya <i class="fa-solid fa-arrow-right ms-3"></i></a>
        </div>
    </section>
    <!-- END : SECTION SIX  -->

    <!-- START : SECTION SEVEN  -->
    <section class="">
        <div class="container bg-light pt-5 ps-5 pe-5 pb-5 ">
            <div class="row ">
                <div class="col-md-6 ">
                    <div class="card border-0 position-relative ">
                        <a href="https://www.youtube.com/watch?v=jbk22zARVBg" target="_blank">
                            <img src="../image/youtube-um-surabaya 1.png" alt="" class="img-fluid">
                        </a>
                        <a href="https://www.youtube.com/watch?v=jbk22zARVBg" class="position-absolute link-youtube ">
                            <img src="../image/icon-youtube.svg" alt="" class="img-fluid ">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="d-flex align-items-center">
                        <img src="../image/icon-layanan-informasi.svg" alt="">
                        <div class="fs-6 fw-bolder ms-3">Layanan Informasi</div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-md-6 ">
                            <a href="http://gillandgroup.co.id/_khusus_p2k.php?_i=pendaftaran-online&asal_kontak=www.um-surabaya.web.id"
                                target="_blank">
                                <img src="../image/icon-regis.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <a href="#" class="align-items-center text-decoration-none d-flex">
                                <img src="../image/icon-cs.svg" alt="" class="img-fluid me-2">
                                <span class="text-dark">Bebas Pulsa : 0800 1234 000</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <img src="../image/icon-social-media.svg" alt="">
                        <div class="fs-6 fw-bolder ms-3">Social Media</div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-md-6">
                            <a href="https://api.whatsapp.com/send?phone=6281295262009&text=Hi%20Admin%20Program%20Perkuliahan%20Karyawan,%20saya%20ingin%20tanya%20"
                                target="_blank" class="align-items-center text-decoration-none d-flex">
                                <img src="../image/icon-whatsapp.svg" alt="" class="img-fluid me-2">
                                <span class="text-dark">0812 9526 2009</span>
                            </a>
                        </div>
                        <div class="col-md-6 mt-3 mt-md-0">
                            <a href="https://www.facebook.com/KuliahKaryawan.FanPage" target="_blank"
                                class="align-items-center text-decoration-none d-flex">
                                <img src="../image/icon-facebook.svg" alt="" class="img-fluid me-2">
                                <span class="text-dark">Kuliah Karyawan</span>
                            </a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a href="https://plus.google.com/u/1/115573353743720115885/posts" target="_blank"
                                class="align-items-center text-decoration-none d-flex">
                                <img src="../image/icon-google-plus.svg" alt="" class="img-fluid me-2">
                                <span class="text-dark">Kuliah Karyawan</span>
                            </a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a href="https://twitter.com/kuliahkaryawan" target="_blank"
                                class="align-items-center text-decoration-none d-flex">
                                <img src="../image/icon-twitter.svg" alt="" class="img-fluid me-2">
                                <span class="text-dark">Kuliah Karyawan</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END : SECTION SEVEN  -->

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
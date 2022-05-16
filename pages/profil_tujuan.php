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
    <?php include '../template/navbar.php'; ?>
    <!-- END : NAVIGATION  -->

    <!-- START : BREADCRUMB -->
    <div class="pt-4 pb-4 bg-light mt-4" style="margin-top: 100px !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fs-5 fw-bolder">Tujuan Universitas Muhamadiyah Surabaya</div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item"><a href="home.php" class="text-decoration-none">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            <li class="breadcrumb-item active" aria-current="page">Tujuan</li>
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
                            <a href="profil_tujuan.php"
                                class="nav-link active-link text-dark border-bottom pt-3 pb-3">Tujuan</a>
                        </div>
                        <div class="nav-item">
                            <a href="profil_keunggulan.php"
                                class="nav-link text-dark border-bottom pt-3 pb-3">Keunggulan</a>
                        </div>
                        <div class="nav-item">
                            <a href="profil_struktur_organisasi.php"
                                class="nav-link text-dark border-bottom pt-3 pb-3">Struktur Organisasi</a>
                        </div>
                    </nav>
                </div>
                <div class="col-md-8">
                    <h1 class="heading-title mb-3">
                        Tujuan
                    </h1>
                    <div class="main-content">
                        <ol>
                            <li style="text-align: justify;">Menghasilkan lulusan yang beriman, berahlak, memiliki
                                kompetensi profesional yang
                                tinggi, serta unggul dalam inovasi dan berjiwa entrepreneu</li>
                            <li style="text-align: justify;">Menghasilkan produk penelitian dan publikasi yang
                                berkontribusi pada IPTEK dan inovasi
                            </li>
                            <li style="text-align: justify;"> Menghasilkan produk pengabdian kepada mayarakat yang
                                berbasis riset dan inovasi</li>
                            <li style="text-align: justify;">Menghasilkan civitas akademika yang menjadi teladan, serta
                                berpirnsip pada nilai Al
                                Islam dana Kemuhammadiyahan melalui dakwah islam dengan menegakkan amar makruf nahi
                                munkar</li>
                            <li style="text-align: justify;">Mewujudkan kerja sama dan pengelolaan universitas yang
                                terencana, terorganisasi,
                                produktif dan berkelanjutan Nilai yang dikembangkan Akhlakul karimah, Kebangsaan dan
                                Keteladanan.</li>
                            <li style="text-align: justify;">Budaya riset, inovasi, dan penerapan teknologi yang
                                diabdikan bagi kemaslahatan umat.
                            </li>
                            <li style="text-align: justify;">Tanggap dan tanggung jawab untuk meningkatkan pelayanan
                                kepada masyarakat</li>
                            <li style="text-align: justify;">Penguatan sivitas akademika sebagai warga negara dan warga
                                dunia yang mampu
                                mengantisipasi perubahan yang cepat, dan berpandangan global</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END : SECTION ONE -->

    <!-- START : FOOTER  -->
    <?php include '../template/footer.php'; ?>
    <!-- END : FOOTER -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous ">
    </script>
</body>

</html>
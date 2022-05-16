<?php
	$page = "Prodi";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Galeri | Universitas Muhamadiyah Surabaya</title>
</head>

<body>
    <!-- START NAVIGATION  -->
    <?php include '../template/navbar.php'; ?>
    <!-- END : NAVIGATION  -->

    <!-- START : BREADCRUMB -->
    <div class="pt-4 pb-4 bg-light" style="margin-top: 100px !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fs-5 fw-bolder">Galeri Kegiatan</div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item"><a href="home.php" class="text-decoration-none">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
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
            <div class="">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="nav-item">
                        <a href="#galeri" class="nav-link active" data-bs-toggle="tab">
                            <img src="../image/icon-gallery.svg" alt="" class="img-fluid me-3">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages" class="nav-link" data-bs-toggle="tab">
                            <img src="../image/icon-vidoe.svg" alt="" class="img-fluid me-3"> Video
                        </a>
                    </li>
                </ul>
                <div class="tab-content mt-5">
                    <div class="tab-pane fade show active" id="galeri">
                        <div class="row">
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
                        <div class="row mt-5">
                            <div class="col-md-3 mt-3 mt-md-0">
                                <div class="card border-0">
                                    <img src="../image/galeri-um-surabaya-5.png" alt="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0">
                                <div class="card border-0">
                                    <img src="../image/galeri-um-surabaya-6.png" alt="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0">
                                <div class="card border-0">
                                    <img src="../image/galeri-um-surabaya-7.png" alt="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3 mt-3 mt-md-0">
                                <div class="card border-0">
                                    <img src="../image/galeri-um-surabaya-8.png" alt="img-fluid">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="messages">
                        <h4 class="mt-2">Video tab content</h4>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END : SECTION ONE -->

    <!-- START : FOOTER  -->
    <?php include '../template/footer.php'; ?>
    <!-- END : FOOTER -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM " crossorigin="anonymous ">
    </script>
</body>

</html>
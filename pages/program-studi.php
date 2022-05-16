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
    <title>Program Studi | Universitas Muhamadiyah Surabaya</title>
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
                    <div class="fs-5 fw-bolder">Program Studi</div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item"><a href="home.php" class="text-decoration-none">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Program Studi</li>
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
            <div class="accordion" id="accordionExample">
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button text-decoration-none text-dark bg-light" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">
                                    S1 - Manajemen
                                </a>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    S1 - Akuntansi
                                </a>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    S1 - Teknik Mesin
                                </a>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    S1 - Teknik Elektro
                                </a>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    S1 - Teknik Sipil
                                </a>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                    aria-controls="collapseTSix">
                                    S1 - Ilmu Hukum
                                </a>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    S1 - Pendidikan Agama Islam
                                </a>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                    aria-controls="collapseEight">
                                    S1 - Psikologi
                                </a>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                                    aria-controls="collapseNine">
                                    S1 - Pendidikan Guru Sekolah Dasar
                                </a>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                                    aria-controls="collapseTen">
                                    S1 - Teknik Industri
                                </a>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEleven">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false"
                                    aria-controls="collapseEleven">
                                    S1 - Pendidikan Guru Anak Usia Dini
                                </a>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwelve">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false"
                                    aria-controls="collapseTwelve">
                                    S1 - Pendidikan Bahasa dan Sastra Indonesia
                                </a>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTherteen">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTherteen" aria-expanded="false"
                                    aria-controls="collapseTherteen">
                                    S2 - Pendidikan Bahasa dan Sastra Indonesia
                                </a>
                            </h2>
                            <div id="collapseTherteen" class="accordion-collapse collapse"
                                aria-labelledby="headingTherteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFourteen">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false"
                                    aria-controls="collapseFourteen">
                                    S2 - Pendidikan Islam
                                </a>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse"
                                aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFiveteen">
                                <a style="font-weight: 400 !important;"
                                    class="accordion-button collapsed bg-light text-decoration-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFiveteen" aria-expanded="false"
                                    aria-controls="collapseFiveteen">
                                    S2 - Hukum Ekonomi Syariah
                                </a>
                            </h2>
                            <div id="collapseFiveteen" class="accordion-collapse collapse"
                                aria-labelledby="headingFiveteen" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <button class="btn btn-danger">Daftar</button>
                                    <button class="btn bg-navy text-white ms-sm-3">Prospek</button>
                                </div>
                            </div>
                        </div>
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
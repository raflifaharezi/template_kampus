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
    <title>Beban dan Masa | Universitas Muhamadiyah Surabaya</title>
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
                    <div class="fs-5 fw-bolder">Beban dan Masa Studi</div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item"><a href="home.php" class="text-decoration-none">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Informasi</li>
                            <li class="breadcrumb-item active" aria-current="page">Beban dan Masa Studi</li>
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
                <div class="col-md-8">
                    <h1 class="heading-title text-navy">Beban dan Masa Studi</h1>
                    <p style="font-weight: 600;">Universitas Muhamadiyah Surabaya</p>
                    <!-- <h1 class="heading-title mt-4">Beban studi dan masa studi yang harus ditempuh mahasiswa
                        Program Kuliah Reguler, Kuliah Online / Daring / Blended, Program
                        Kuliah Karyawan, dan Program Kelas Malam, mengikuti standar yang sudah ditetapkan pemerintah,
                        yaitu</h1> -->
                    <p style="text-align: justify;"><strong>Beban studi dan masa studi yang harus ditempuh mahasiswa
                            Program Kuliah Reguler, Kuliah Online / Daring / Blended, Program
                            Kuliah Karyawan, dan Program Kelas Malam, mengikuti standar yang sudah ditetapkan
                            pemerintah,
                            yaitu</strong>
                    </p>
                    <p class="text-navy"><strong>Peraturan Mendikbud No.49 Tahun
                            2014</strong></p>
                    <P><strong>Tentang Standar Nasional Pendidikan Tinggi.</strong></P>
                    <div class="mt-5 " style="overflow-x:auto; ">
                        <table class="table table table-bordered ">
                            <thead class="bg-navy text-white ">
                                <tr class="align-middle text-center">
                                    <th class="">Untuk</th>
                                    <th>Beban Studi ( SKS yang ditempuh )</th>
                                    <th>Masa Studi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>Lulusan SMA/SMU, SMK, sederajat
                                        melanjutkan ke S1</td>
                                    <td>Beban Studi = 144 - 152 sks</td>
                                    <td>8 semester</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Lulusan SMA/SMU, SMK, sederajat
                                        melanjutkan ke D-III</td>
                                    <td>Beban Studi = 110 - 114 sk</td>
                                    <td>6 semester</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Lulusan D3, Politeknik, sederajat
                                        melanjutkan ke S1
                                    </td>
                                    <td>Beban Studi = 40 - 46 sks
                                        (Bila tidak sebidang ilmu ada Tambahan 2 - 21 sks)</td>
                                    <td>3 semester</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Lulusan D2, S1, D1, Pindahan
                                        melanjutkan ke S1
                                    </td>
                                    <td>Dihitung dari sisa sks</td>
                                    <td>Dihitung sisa sks</td>
                                </tr>
                                <tr class="text-center">
                                    <td>Lulusan D1, D2, Pindahan
                                        melanjutkan ke D3 (D-III)
                                    </td>
                                    <td>Dihitung dari sisa sks </td>
                                    <td>Dihitung sisa sks</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-5 p-5 bg-navy" style="border-radius: 4px;">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 class="text-white ">PMB ONLINE</h2>
                                <div class="text-white">Penerimaan Mahasiswa Baru</div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-end mt-4 mt-md-0">
                                <a href="http://gillandgroup.co.id/_khusus_p2k.php?_i=pendaftaran-online&asal_kontak=www.um-surabaya.web.id"
                                    target="_blank" class="btn btn-sm pt-3 pb-3 w-100 text-white"
                                    style="background-color: #04A413;">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-md-0 mt-5">
                    <?php include '../template/sidebar_info.php'; ?>
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
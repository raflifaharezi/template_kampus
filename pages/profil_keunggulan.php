<?php
	$page = "Profile";
?>

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
    <div class="pt-4 pb-4 bg-light" style="margin-top: 100px !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fs-5 fw-bolder">Keunggulan Universitas Muhamadiyah Surabaya</div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-md-end">
                            <li class="breadcrumb-item"><a href="home.php" class="text-decoration-none">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profil</li>
                            <li class="breadcrumb-item active" aria-current="page">Keunggulan</li>
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
                                class="nav-link active-link text-dark border-bottom pt-3 pb-3">Keunggulan</a>
                        </div>
                        <div class="nav-item">
                            <a href="profil_struktur_organisasi.php"
                                class="nav-link text-dark border-bottom pt-3 pb-3">Struktur Organisasi</a>
                        </div>
                    </nav>
                </div>
                <div class="col-md-8">
                    <h1 class="heading-title mb-3">
                        Keunggulan
                    </h1>
                    <div class="main-content d-flex justify-content-start ">
                        <img src="../image/icon-ceklis.svg"></img>
                        <div class="ms-3" style="text-align: justify;">Seluruh jurusan/program studi tidak ada ujian
                            negara (sama dengan PTN)
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            <strong>Terpercaya</strong> dalam penyelenggaraan Program Kuliah Karyawan dan Program Kelas
                            Sore/Malam, karena <strong>telah memenuhi
                                dua syarat mutlak penyelenggaraan PKSM / P2K,</strong> yaitu :
                        </div>
                    </div>
                    <ul class="ms-3 mt-2" style="text-align: justify;">
                        <li>Penyelenggaraannya sesuai dengan norma dan kaidah akademik (sesuai dengan peraturan
                            perundang-undangan).</li>
                        <li>Penyelenggaraannya sesuai dengan tuntutan dunia kerja (kurikulum, waktu kuliah, jadwal
                            kuliah, dosen, sistem
                            pendidikan, dsb).</li>
                    </ul>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            <strong>Disediakan beasiswa (tanpa ikatan) bagi yang benar-benar membutuhkan.</strong>
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Bagi mahasiswa yang bekerja dengan sistem shift (pergantian waktu), tetap dapat mengikuti
                            kuliah dengan baik. Karena
                            sistem pendidikannya dilaksanakan secara profesional <strong>dengan mengintegrasikan Program
                                Perkuliahan Karyawan,
                                Program Reguler, dan Program Kelas Sore / Malam, sehingga mahasiswa yang bekerja dengan
                                sistem shift (pergantian
                                waktu) dapat mengikuti kuliah di program lainnya</strong> dengan mekanisme tertentu
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Lulusan dan Mahasiswa Program Reguler serta Program Perkuliahan Karyawan (P2K) dan Program
                            Kelas Sore/Malam (PKSM) mempunyai STATUS, KUALITAS, HAK AKADEMIK, IJAZAH, dan GELAR YANG
                            SAMA
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Diselenggarakan oleh Perguruan Tinggi Terbaik yang selain telah TERAKREDITASI juga memiliki
                            jaringan yang luas di dunia
                            kerja. Walaupun kualitasnya terbaik, Universitas Muhamadiyah Surabaya tetap memiliki
                            Komitmen Sosial dalam membantu masyarakat.
                            Antara lain memberikan fasilitas kredit biaya pendidikan tanpa bunga dan tanpa agunan,
                            sehingga <strong>dapat diangsur bulanan sesuai kemampuan mahasiswa.</strong>
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Kurikulum serta proses belajar-mengajarnya didesain sedemikian rupa menggunakan Sistem SKS
                            yang dilaksanakan
                            secara profesional dan sesuai untuk karyawan, sehingga mahasiswa yang sibuk bekerja
                            <strong>tetap
                                dapat menyelesaikan studi tepat pada waktunya.</strong>
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Mahasiswa yang tidak lulus suatu mata kuliah, dapat mengulang di semester / tahun / periode
                            berikutnya <strong>tanpa dipungut biaya tambahan.</strong>
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Fasilitas lengkap, terdiri dari berbagai laboratorium (lengkap), studio, bengkel, tempat
                            ibadah, sarana olah raga, Computer Centre, kerjasama dengan perusahaan/lembaga/instansi,
                            dsb.
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Lokasi kampus sangat mudah dicapai, baik menggunakan kendaraan pribadi maupun kendaraan
                            umum.
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 ">
                            Dosen (tenaga pengajar) profesional dibidangnya.
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Tersedia penginapan/kost-kostan di sekitar Kampus Universitas Muhamadiyah Surabaya.
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            Lulusan Program S1 PKSM / P2K <strong>Universitas Muhamadiyah Surabaya</strong> dipersiapkan
                            menjadi Sarjana
                            (S1) sesuai
                            dengan jurusan/program studinya, yang dapat mengembangkan jati dirinya dengan bekal ilmu
                            pengetahuan, teknologi,
                            dan seni, sehingga <strong>mampu menyelesaikan/memecahkan persoalan sekaligus mengembangkan
                                ilmunya</strong>.
                            Serta memiliki kemampuan penguasaan teori yang kuat sekaligus aplikasinya, dan
                            <strong>kemampuan
                                profesional serta cara
                                pandang yang komprehensif; mengembangkan sikap mental profesional yang berorientasi pada
                                pemecahan masalah
                                berdasarkan alur berpikir-sistem</strong>; mampu mengembangkan kajian-kajian teoritis
                            konsepsional
                            terkini; memiliki
                            kemampuan melakukan berbagai penelitian dasar maupun terapan
                            Lulusannya juga dibekali dengan pengetahuan, etika akademik dan profesi, kemampuan dan
                            ketrampilan untuk
                            mengelola tim/organisasi secara komprehensif dalam bidang yang sesuai dengan bidang ilmunya;
                            kemampuan
                            berkerjasama dalam tim, kemampuan memahami pengetahuan terhadap etika, kemampuan memahami
                            pengetahuan
                            sesuai bidang ilmunya sekaligus dibekali dengan <strong>kemampuan untuk memanfaatkan
                                teknologi
                                informasi dan komunikasi</strong>.
                        </div>
                    </div>
                    <div class="main-content d-flex mt-2 ">
                        <span><img src="../image/icon-ceklis.svg"></img></span>
                        <div class="ms-3 " style="text-align: justify;">
                            <strong>Kompetensi dasar Lulusan Program Kuliah Karyawan, dan Program Kelas Reguler Malam di
                                Universitas Muhamadiyah Surabaya</strong> adalah memiliki kualitas dan integritas
                            intelektual;
                            berdaya saing tinggi baik secara akademis maupun
                            moral; mampu menyesuaikan diri dengan perubahan-perubahan; menyadari bahwa ilmu pengetahuan
                            selalu maju dan
                            berkembang; mampu menelusuri dan mendapatkan informasi ilmiah; mengetahui cara dan dapat
                            terus-menerus belajar;
                            dalam menangani tiap masalah, mampu mengungkap struktur dan inti persoalan serta menetapkan
                            prioritas tahapantahapan penyelesaiannya; mengetahui dan dapat memanfaatkan kegunaan
                            teknologi informasi; dapat menerapkan ilmu
                            dan pengetahuan; cakap dan terampil sesuai bidang ilmunya; dapat menyelesaikan masalah
                            secara logika, memanfaatkan
                            data/informasi yang tersedia; dapat menggunakan konsep-konsep untuk menerangkan hal-hal yang
                            tidak/kurang jelas;
                            mampu mandiri dalam kerja dan upaya; mampu aktif berperan-serta dalam kelompok kerja; mampu
                            berkomunikasi
                            dengan para pakar dalam bidang keahlian lain dan memanfaatkan bantuan mereka; mampu
                            memanfaatkan secara efektif sumber-sumber daya yang ada; mampu memulai rintisan pembentukan
                            unit wirausaha sesuai bidang ilmunya, mampu
                            mengikuti perkembangan baru pada bidang ilmunya, melaksanakan penelitian, atau mengikuti
                            program studi di tingkat
                            lebih lanjut
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
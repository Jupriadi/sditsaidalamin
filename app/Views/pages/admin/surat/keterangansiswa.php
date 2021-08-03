<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="/assets/fonts/googlefont.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://technext.github.io/mazer/assets/css/bootstrap.css"> -->
    <link rel="stylesheet" href="/assets/css/bold.css">
    <link rel="stylesheet" href="/assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <!-- <link rel="stylesheet" href="/assets/css/styles.css"> -->
    <link rel="stylesheet" href="/assets/cropper/cropper.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.min.css" />
    <script src="/assets/js/jquery.min.js"></script>
    <style>
        p{
            text-align:justify;
        }
    </style>
</head>
<body>
    
<div class="mb-4">
    <img src="/assets/img/kopsurat.png" class="w-100" alt="">
</div>
<div class="px-5">
    <h3 class="text-center">SURAT KETERANGAN</h3>
    <h6 class="text-center">NO : &nbsp &nbsp &nbsp/SDIT.Sem/YPP-NA.NW/  &nbsp &nbsp &nbsp /VII/2021</h6>
    <p class="py-4 px-md-5 px-0">
        Yang bertanda tangan dibawah ini kepala Sekolah Dasar Islam Terpadu (SDIT) Nuril Alamin Nahdlatul Wathan (NW) Sembalun Bumbung Kecamatan Sembalun, dengan ini menyatakan dengan sebenarnya bahwa:
    </p>

    <div class="row px-md-5 px-3 justify-content-center">
        <div class="p-0 col-4 position-relative">
            Nama Lengkap 
            <span class="position-absolute end-0">: &nbsp</span>
        </div>
        <div class="p-0 col-6">
            <span id="namasiswa"><?= ucwords($siswa['namasiswa']) ?></span>
        </div>
        <div class="p-0 col-4 position-relative">
            NIK
            <span class="position-absolute end-0">: &nbsp</span>
        </div>
        <div class="p-0 col-6">
            <span id="nik"><?= ucwords($siswa['nik']) ?></span>
        </div>
        <div class="p-0 col-4 position-relative">
            NIS
            <span class="position-absolute end-0">: &nbsp</span>
        </div>
        <div class="p-0 col-6">
             <span id="nis"><?= $nis ?></span>
        </div>
        <div class="p-0 col-4 position-relative">
            Tempat Tanggal Lahir 
            <span class="position-absolute end-0">: &nbsp</span>
        </div>
        <div class="p-0 col-6">
             <span id="ttl"><?= $siswa['tmptlahir'].", ".$siswa['tgllahir'] ?></span>
        </div>
        <div class="p-0 col-4 position-relative">
            Kelas 
            <span class="position-absolute end-0">: &nbsp</span>
        </div>
        <div class="p-0 col-6">
             <span id="kelas">1</span>
        </div>
        <div class="p-0 col-4 position-relative">
            Nama Orang Tua/Wali 
            <span class="position-absolute end-0">: &nbsp</span>
        </div>
        <div class="p-0 col-6">
             <span id="namaAyah"><?= ucwords($wali) ?></span>
        </div>
        <div class="p-0 col-4 position-relative">
            Alamat 
            <span class="position-absolute end-0">: &nbsp</span>
        </div>
        <div class="p-0 col-6">
            <span id="alamat">Dusun Lauk Rurung Timuk, Sembalun Bumbung</span>
        </div>

    </div>
    <p class=" px-md-5 px-0 mt-3">
        Benar aktif sebagai peserta didik kami di kelas 1 (satu) Sekolah Dasar Islam Terpadu (SDIT) Nuril Alamin Nahdlatul Wathan (NW) Sembalun Bumbung, demikian surat keterangan ini kami buat semoga dapat digunakan sebagaimana mestiinya.
    </p>
    <div class="row">
        <div class="col-8">

        </div>
        <div class="col-4">
            <p class="text-center">
                <?= "Sembalun , ".date("d m Y"); ?><br>
                Kepala Sekolah
                <br> <br> <br> <br>
                Junaidi, S.H
            </p>
        </div>
    </div>
</div>
<script>
    // window.print()
</script>

</body>
</html>
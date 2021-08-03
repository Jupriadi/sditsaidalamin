<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
    //  $(".sidebar-item").removeClass("active");
     $("#surat").addClass("active");
</script>

<div class="container bg-white p-3 shadow-lg mb-5">
    <form action="/surat/cetaksurat" id="formcetak" target="_blank" method="post">
    <input type="hidden" name="jenis" value="keterangansiswa">
        <div class="row py-4 justify-content-center">
            <div class="col-md-4 col-9">
                <select class="form-select rounded-pill" id="siswa" onchange="getsiswa(this)" name="siswa">
                    <option value="">--Pilih Siswa</option>
                    <?php foreach($siswa as $s) : ?>
                        <option value="<?= $s['idSiswa'] ;?>"><?= $s['namasiswa'] ;?></option>
                    <?php endforeach ;?>
                </select>
            </div>
            <div class="col-md-4 col-3">
                <button id="btncetak" href="" class="btn btn-primary"><i class="bi bi-printer-fill"></i> Cetak</button>
            </div>
        </div>
    </form>
    <div class="preview px-0 px-md-5">
        <hr>
        <div class="mb-4 position-relative">
            <img src="/assets/img/kopsurat.png" class="w-100" alt="">
            <label for="kopsurat" class="position-absolute start-0 bottom-0 mb-3 ms-4">
                <a  class="btn btn-sm shadow rounded-circle  btn-primary"><i class="bi bi-back"></i> </a>
            </label>
            <input type="file" name="kopsurat" class="d-none" id="kopsurat" accept=".jpg, .png, .jpeg">
        </div>
        <h3 class="text-center">SURAT KETERANGAN</h3>
        <h6 class="text-center">NO : 005/SDIT.Sem/YPP-NA.NW/ /VII/2021</h6>
        <p class="py-4 px-md-5 px-0">
            Yang bertanda tangan dibawah ini kepala Sekolah Dasar Islam Terpadu (SDIT) Nuril Alamin Nahdlatul Wathan (NW) Sembalun Bumbung Kecamatan Sembalun, dengan ini menyatakan dengan sebenarnya bahwa:
        </p>

        <div class="row px-md-5 px-0">
            <div class="col-5">
                Nama Lengkap 
            </div>
            <div class="col-6">
                : <span id="namasiswa">Jupriadi</span>
            </div>
            <div class="col-5">
                Nomor Induk Siswa 
            </div>
            <div class="col-6">
                : <span id="nis">736474837</span>
            </div>
            <div class="col-5">
                Tempat Tanggal Lahir 
            </div>
            <div class="col-6">
                : <span id="ttl">sembalun, 31-12-1995</span>
            </div>
            <div class="col-5">
                Kelas 
            </div>
            <div class="col-6">
                : <span id="kelas">1</span>
            </div>
            <div class="col-5">
                Nama Orang Tua/Wali 
            </div>
            <div class="col-6">
                : <span id="namaAyah">Zainuddin</span>
            </div>
            <div class="col-5">
                Alamat 
            </div>
            <div class="col-6">
                : <span id="alamat">Dusun Lauk Rurung Timuk, Sembalun Bumbung</span>
            </div>

        </div>
        <p class=" px-md-5 px-0 mt-3">
            Benar aktif sebagai peserta didik kami di kelas 1 (satu) Sekolah Dasar Islam Terpadu (SDIT) Nuril Alamin Nahdlatul Wathan (NW) Sembalun Bumbung, demikian surat keterangan ini kami buat semoga dapat digunakan sebagaimana mestiinya.
        </p>
    </div>
</div>
<script>
    // function getsiswabykelas(kel){
    //     // var siswa = document.getElementById("siswa").val();
    //     var kelas = kel.value;
    //     // alert(kelas);

    //     $.ajax({
    //         type    : "GET",
    //         url     : "/surat/getsiswabykelas",
    //         data    : {'kelas':kelas},
    //         dataType : 'json',
    //         success : function(data){
    //             alert("berhasil");
    //         }
    //     })
    // }
    function getsiswa(sis){
        var idsiswa = sis.value;

        $.ajax({
            type    : "GET",
            url     : "/surat/getsiswa",
            data    : {'siswa':idsiswa},
            dataType : 'json',
            success : function(data){
                let tgllahir = data.tgllahir;
                $("#namasiswa").html(data.namasiswa);
                $("#nis").html( data.idSiswa + tgllahir.substring(0,4));
                $("#kelas").html(data.kelas);
                if (data.namaAyah == "-"){
                    var wali = data.namaIbu;
                }else if(data.namaAyah == ""){
                    var wali = data.namaIbu;
                }else{
                    var wali = data.namaAyah;
                }
                $("#namaAyah").html(wali)
                $("#ttl").html(data.tmptlahir+", "+ data.tgllahir)

            }
        })
    }

    
</script>
<?= $this->endSection(); ?>
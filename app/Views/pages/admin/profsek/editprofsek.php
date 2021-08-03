<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  

<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#profsek").addClass("active");
</script>
<hr>
<form action="/progres/ubahprofil" enctype="multipart/form-data" method="post">
<input value="<?= $profil['id'] ?>" name="id"  type="hidden" >
<div class="container">
    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Logo Sekolah</h4>
                </div>
                <div class="card-body"> 
                    <div class="logo-box mx-auto" style="width:150px">
                        
                        <label for="logo" class="form-label logoLabel d-none"></label>
                        <div class="fileUpload" width="80%;overflow:hidden;">
                            <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="logo">
                            <img src="/assets/img/<?= $profil['logo'] ?>" class="img-thumbnail img-preview img-fluid" style="width:100%" alt="Logo">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Icon Sidebar</h4>
                </div>
                <div class="card-body"> 
                    <div class="logo-box mx-auto" style="width:150px">
                        
                        <label for="logo" class="form-label logoLabel d-none"></label>
                        <div class="fileUpload" width="80%;overflow:hidden;">
                            <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="logo">
                            <img src="/assets/img/<?= $profil['logo'] ?>" class="img-thumbnail img-preview img-fluid" style="width:100%" alt="Logo">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Kontak Sekolah</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><i class="bi bi-whatsapp"></i> HP / WA</label>
                        <div>
                            <input value="<?= $profil['hp'] ?>" name="hp"  type="text" class="form-control rounded-pill">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><i class="bi bi-envelope-fill"></i> Email</label>
                        <div>
                            <input value="<?= $profil['email'] ?>" name="email"  type="text" class="form-control rounded-pill">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><i class="bi bi-globe"></i> Website</label>
                        <div>
                            <input  value="<?= $profil['website'] ?>" name="website"  type="text" class="form-control rounded-pill">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-light mb-3">
                    <span class="fs-5 ps-4"><strong>Detail Sekolah</strong></span>

                    <span class="position-absolute rounded-pill end-0 me-5 d-none d-md-inline">

                        <a href="/panel/profsek" class="me-3 text-light ">  <i class="bi bi-arrow-left"></i> Kembali</a>

                        <button type="submit" class="btn  btn-light btn-sm rounded-pill px-3 py-1"><i class="bi bi-save-fill"></i> Simpan</button>
                    </span>
                </div>
                <div class="card-body">
                    <div class="container">
                  
                        <div class="row">
                            <div class="col-md-4">
                                Nama Sekolah
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="namasekolah" value="<?= $profil['namasekolah'] ?>" class="form-control rounded-pill">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Nomor Pokok Sekolah Nasional
                            </div>
                            <div class="col-md-8">
                                <input value="<?= $profil['npsn'] ?>" name="npsn" type="text" class="form-control rounded-pill">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Nomor Induk Sekolah
                            </div>
                            <div class="col-md-8">
                                <input type="text"  value="<?= $profil['nis'] ?>" name="nis"  class="form-control rounded-pill">
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Nomor Statistik Sekolah
                            </div>
                            <div class="col-md-8">
                                <input type="text"  value="<?= $profil['nss'] ?>" name="nss"  class="form-control rounded-pill">
                            </div>
                        </div>
                        <hr>
                        <strong>Alamat Sekolah</strong>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Provinsi
                            </div>
                            <div class="col-md-8">
                                <input type="text"  value="<?= $profil['provinsi'] ?>" name="provinsi"  class="form-control rounded-pill">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kabupaten /Kota
                            </div>
                            <div class="col-md-8">
                                <input value="<?= $profil['kabupaten'] ?>" name="kabupaten"  type="text" class="form-control rounded-pill">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kecamatan
                            </div>
                            <div class="col-md-8">
                                <input  value="<?= $profil['kecamatan'] ?>" name="kecamatan"  type="text" class="form-control rounded-pill">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kelurahan / Desa
                            </div>
                            <div class="col-md-8">
                                <input  value="<?= $profil['desa'] ?>" name="desa"  type="text" class="form-control rounded-pill">
                            </div>
                        </div>
                        <hr>
                        <div class="row text-center d-md-none d-flex">
                            <button type="submit" class="btn btn-success rounded-pill py-2" name="simpan">  Simpan</button>

                            <a class="mt-3" href="/panel/profsek">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>


<?= $this->endSection() ?>
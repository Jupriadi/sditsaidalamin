<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  

<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#profsek").addClass("active");
</script>
<hr>
<div class="container">
    <?php if($profil==null): ?>
        <h4>Data Profil Sekolah Msih Kosong</h4>
        <p>Jalankan <strong>php spark db:seed Profsek</strong> di terminal</p>
    <?php else: ?>
    <div class="row">
        <div class="col-12 col-xl-4 px-0 px-md-3">
            <div class="card shadow-sm">
                <div class="card-header bg-primary py-3">
                    <strong class=" text-light">Logo Sekolah</strong>
                </div>
                <div class="card-body mt-2">
                    <div class="logo-box mx-auto" style="width:150px">
                        <img width="100%" src="/assets/img/<?= $profil['logo'] ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="card shadow-sm">
            <div class="card-header bg-primary py-3">
                    <strong class=" text-light">Logo Sidebar</strong>
                </div>
                <div class="card-body mt-3">
                    <div class="logo-box mx-auto" style="width:200px">
                        <img style="width:100%" src="/assets/img/saidalamin.png" alt="">
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Kontak Sekolah</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><i class="bi bi-whatsapp"></i> HP / WA</label>
                        <div>
                            <?= $profil['hp'] ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><i class="bi bi-envelope-fill"></i> Email</label>
                        <div>
                        <?= $profil['email'] ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for=""><i class="bi bi-globe"></i> Website</label>
                        <div>
                        <?= $profil['website'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8  px-0 px-md-3">
            <div class="card shadow-sm">
                <div class="card-header mb-3 bg-primary text-light">

                    <span class="fs-5 ps-4"><strong>Detail Sekolah</strong></span>

                    <a href="/panel/profsek/<?= $profil['id'] ?>" class="btn d-none d-md-inline btn-light btn-sm end-0 me-4 position-absolute rounded-pill px-3"><i class="bi bi-pen"></i> Edit</a>

                   
                </div>
                <div class="card-body  px-0 px-md-4">
                    <div class="container">
                  
                        <div class="row">
                            <div class="col-md-4">
                                Nama Sekolah
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['namasekolah'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Nomor Pokok Sekolah Nasional
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['npsn'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Nomor Induk Sekolah
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['nis'] ?>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                Nomor Statistik Sekolah
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['nss'] ?>
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
                                : <?= $profil['provinsi'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kabupaten /Kota
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['kabupaten'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kecamatan
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['kecamatan'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                               Kelurahan / Desa
                            </div>
                            <div class="col-md-8">
                                : <?= $profil['desa'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="postion-absolute shadow d-md-none position-fixed me-4 mb-4 bg-success rounded-circle end-0 bottom-0"  style="width: 50px;height: 50px;">
    <div class="positon-relative">
        <a href="/panel/profsek/<?= $profil['id'] ?>" class="text-light fs-3 position-absolute top-50 start-50 translate-middle">
            <i class="bi bi-pencil-square"></i>
        </a>
    </div>
</div>
<?php endif; ?>
<?= $this->endSection() ?>
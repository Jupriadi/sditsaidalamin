<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#guru").addClass("active");
</script>
<hr>
<form method="post" action="/controlguru/simpan/<?= $edit>0 ? $guru['idGuru'] : '' ;?>" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>Photo Guru</h4>
                    </div>
                    <div class="card-body"> 
                            
                        <label for="logo" class="form-label logoLabel  d-none"></label>
                        <div class="fileUpload logo-box p-0 mx-auto rounded-circle">
                            <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="photo">
                            <img src="/assets/photoguru/<?= $edit>0 ? $guru['photo'] : 'guru.png' ;?>" class="img-thumbnail img-preview img-fluid" style="width:100%;min-height:100%" alt="Logo">
                            <span></span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-xl-8">
                <div class="card shadow-sm">
                    <div class="card-header">

                        <span class="fs-5 ps-4"><strong>Detail Guru</strong></span>

                    </div>
                    <div class="card-body p-0 p-md-3">
                        <div class="container">
                            <div class="form-group">
                                <label for="">Nama Guru <small>*tanpa gelar</small></label>
                                <input value="<?= $edit>0 ? $guru['namaguru'] : old('namaguru') ;?>" type="text" class="form-control rounded-pill" name="namaguru">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Induk Yayasan</label>
                                <input type="text" value="<?= $edit>0 ? $guru['niy'] : old('niy') ;?>"  class="form-control rounded-pill" name="niy">
                            </div>
                            <div class="form-group">
                                <label for="">Satus Kepegawaian</label>
                                <select name="status" class="form-control rounded-pill" id="">
                                    <?php if($edit == 1): ?>
                                        <option value="<?= $guru['status'] ?>"><?= $guru['status'] ?></option>
                                    <?php else: ?>
                                        <option value="GTT">--Pilih Status</option>
                                    <?php endif; ?>
                                    <option value="GTY">Guru Tetap Yayasan</option>
                                    <option value="GTT">Guru Tidak Tetap</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="kelamin" class="form-control rounded-pill" id="">
                                    <?php if($edit == 1): ?>
                                        <option value="<?= $guru['kelamin'] ?>"><?= $guru['kelamin'] ?></option>
                                    <?php else: ?>
                                        <option value="Laki laki">--Pilih Jenis Kelmin</option>
                                    <?php endif; ?>
                                    <option value="Laki laki">1. Laki laki</option>
                                    <option value="Perempuan">2. Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" value="<?= $edit>0 ? $guru['alamat'] : old('alamat') ;?>" class="form-control rounded-pill" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="text"value="<?= $edit>0 ? $guru['tgllahir'] : old('tgllahir') ;?>" class="form-control rounded-pill" name="tgllahir" id="date">
                            </div>
                            <div class="form-group">
                                <label for="">HP / Whatsapp</label>
                                <input value="<?= $edit>0 ? $guru['hp'] : old('hp') ;?>" type="text" class="form-control rounded-pill" name="hp">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input value="<?= $edit>0 ? $guru['email'] : old('email') ;?>" type="email" class="form-control rounded-pill" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">Pendidikan Terahir</label>
                                <select name="pendidikan" class="form-control rounded-pill" id="">
                                    <?php if($edit == 1): ?>
                                        <option value="<?= $guru['pendidikan'] ?>"><?= $guru['pendidikan'] ?></option>
                                    <?php else: ?>
                                        <option value="">--Pilih Pendidikan Terahir</option>
                                    <?php endif; ?>
                                    <option value="SLTA">SLTA</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">jurusan</label>
                                <input value="<?= $edit>0 ? $guru['jurusan'] : old('jurusan') ;?>" type="text" class="form-control rounded-pill" name="jurusan">
                            </div>
                            <div class="form-group">
                                <label for="">Gelar</label>
                                <input value="<?= $edit>0 ? $guru['gelar'] : old('gelar') ;?>" type="text" class="form-control rounded-pill" name="gelar">
                            </div>
                            <div class="form-group">
                                <label for="">Perguruan Tinggi <small>*isi sekolah untuk SLTA</small></label>
                                <input value="<?= $edit>0 ? $guru['pt'] : old('pt') ;?>" type="text" class="form-control rounded-pill" name="pt">
                            </div>

                            <hr>
                            <div class="row text-center  my-3">
                                <button type="submit" class="btn btn-success rounded-pill py-2">  Simpan</button>

                                <a class="mt-3" href="/panel/guru">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>
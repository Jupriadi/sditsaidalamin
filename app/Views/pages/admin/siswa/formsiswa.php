<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#siswa").addClass("active");
</script>
<hr>
<form method="post" action="/controlsiswa/simpan/<?= $edit>0 ? $siswa['idSiswa'] : '' ;?>" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <div class="container">
        <div class="row">
            <!-- <div class="col-12 col-xl-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>Photo Siswa</h4>
                    </div>
                    <div class="card-body"> 
                        <div class="logo-box mx-auto">
                            <label for="logo" class="form-label logoLabel d-none"></label>
                            <div class="fileUpload rounded-circle">
                                <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="photo">
                                <img src="/assets/photosiswa/<?= $edit>0 ? $siswa['photo'] : 'siswa.png' ;?>" class="img-thumbnail img-preview img-fluid" style="width:100%;min-height:100%" alt="Logo">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
            <div class="col-12 col-md-6">
                <div style="height:95%" class="card shadow-sm">
                    <div class="card-header">

                        <span class="fs-5 ps-4"><strong><i class="bi bi-person-fill"></i> Data Siswa</strong></span>

                    </div>
                    <div class="card-body p-0 p-md-3">
                        <div class="container">

                            <?php if($edit>0) : ?>
                                <div class="form-group">
                                    <label for="">Nomor Induk Siswa</label>
                                    <input value="<?= $edit>0 ? $siswa['nis'] : old('nis') ;?>" type="text" class="form-control rounded-pill" name="nis" readonly>
                                </div>
                            <?php endif ;?>
                            <div class="form-group">
                                <label for="">Nama Lengkap Siswa </label>
                                <input value="<?= $edit>0 ? $siswa['namasiswa'] : old('namasiswa') ;?>" type="text" class="form-control rounded-pill" name="namasiswa">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Induk Kependudukan (NIK) </label>
                                <input value="<?= $edit>0 ? $siswa['nik'] : old('nik') ;?>" type="text" class="form-control rounded-pill" name="nik">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" value="<?= $edit>0 ? $siswa['tmptlahir'] : old('tmptlahir') ;?>" class="form-control rounded-pill" name="tmptlahir">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <div class="row">
                                    <div class="col-4 p-1">
                                        <!-- tanggal -->
                                        <select name="tgl" id="" class="form-select rounded-pill">
                                            <?php if($edit == 1): ?>
                                                <option value="<?= substr($siswa['tgllahir'], 8) ?>"><?= substr($siswa['tgllahir'], 8) ?></option>
                                            <?php else: ?>
                                                <option value="-">--Tanggal</option>
                                            <?php endif; ?>
                                            
                                            <?php for($tgl=1;$tgl<=31;$tgl++) :?>
                                                <option value="<?= $tgl?>"><?= $tgl?></option>
                                            <?php endfor;?>
                                        </select>
                                    </div>
                                    <div class="col-4 p-1">
                                        <!-- tanggal -->
                                        <select name="bln" id="" class="form-select rounded-pill">
                                            <?php if($edit == 1): ?>
                                                <option value="<?= substr($siswa['tgllahir'], 5,2) ?>"><?= substr($siswa['tgllahir'], 5,2) ?></option>
                                            <?php else: ?>
                                                <option value="-">--Bulan</option>
                                            <?php endif; ?>

                                            <?php for($bln=1;$bln<=12;$bln++) :?>
                                                <option value="<?= $bln?>"><?= $bln?></option>
                                            <?php endfor;?>
                                        </select>
                                    </div>
                                    <div class="col-4 p-1">
                                        <!-- tanggal -->
                                        <select name="thn" id="" class="form-select rounded-pill">
                                            <?php if($edit == 1): ?>
                                                <option value="<?= substr($siswa['tgllahir'], 0,4) ?>"><?= substr($siswa['tgllahir'], 0,4) ?></option>
                                            <?php else: ?>
                                                <option value="-">--Bulan</option>
                                            <?php endif; ?>

                                            <?php for($thn=2005;$thn<=2020;$thn++) :?>
                                                <option value="<?= $thn?>"><?= $thn?></option>
                                            <?php endfor;?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Anak Ke</label>
                                        <input type="number" value="<?= $edit>0 ? $siswa['anakKe'] : old('anakKe') ;?>" name="anakKe" class="form-control rounded-pill">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Jumlah Saudara</label>
                                        <input type="number" value="<?= $edit>0 ? $siswa['jumSaudara'] : old('jumSaudara') ;?>" name="jumSaudara" class="form-control rounded-pill">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Nomor Induk Siswa</label>
                                <input type="text" value="<?= $edit>0 ? $siswa['nis'] : old('nis') ;?>"  class="form-control rounded-pill" name="nis">
                            </div> -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Diterima Di Kelas</label>
                                        <select name="kelas" class="form-select form-control rounded-pill" id="">
                                            <?php if($edit == 1): ?>
                                                <option value="<?= $siswa['kelas'] ?>"><?= $siswa['kelas'] ?></option>
                                            <?php else: ?>
                                                <option value="Laki laki">--Pilih Kelas</option>
                                            <?php endif; ?>
                                            <?php for($kls=1;$kls<=6;$kls++) :?>
                                                <option value="<?= $kls ?>"><?= $kls ?></option>
                                            <?php endfor ;?>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="">Jenis Kelamin</label>
                                        <select name="kelamin" class="form-control rounded-pill" id="">
                                            <?php if($edit == 1): ?>
                                                <option value="<?= $siswa['kelamin'] ?>"><?= $siswa['kelamin'] ?></option>
                                            <?php else: ?>
                                                <option value="Laki laki">--Pilih Jenis Kelmin</option>
                                            <?php endif; ?>
                                            <option value="Laki laki">1. Laki laki</option>
                                            <option value="Perempuan">2. Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Siswa</label>
                                <input type="text" value="<?= $edit>0 ? $siswa['alamat'] : old('alamat') ;?>" class="form-control rounded-pill" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="">Sekolah Asal <small> *TK / PAUD</small></label>
                                <input value="<?= $edit>0 ? $siswa['sekolahasal'] : old('sekolahasal') ;?>" type="text" class="form-control rounded-pill" name="sekolahasal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header">

                        <span class="fs-5 ps-4"><strong><i class="bi bi-people"></i> Data Orang Tua</strong></span>

                    </div>
                    <div class="card-body p-0 p-md-3">
                        <div class="container">
                            <div class="form-group">
                                <label for="">Nama Orang Tua </label>
                                <div class="row">
                                    <div class="col-md-6 col-12 p-1">
                                        <input value="<?= $edit>0 ? $siswa['namaAyah'] : old('namaAyah') ;?>" type="text" class="form-control rounded-pill" name="namaAyah" placeholder="Ayah">
                                    </div>
                                    <div class="col-md-6 col-12 p-1">
                                        <input value="<?= $edit>0 ? $siswa['namaIbu'] : old('namaIbu') ;?>" type="text" class="form-control rounded-pill" name="namaIbu" placeholder="ibu">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Pendidikan Orang Tua</label>
                                <div class="row">
                                    <div class="col-6 p-1">
                                        <select name="pendAyah" id="" class="form-select rounded-pill">
                                            <?php if($edit == 1): ?>
                                                <option value="<?= $siswa['pendAyah'] ?>"><?= $siswa['pendAyah'] ?></option>
                                            <?php else: ?>
                                                <option value="">--Ayah</option>
                                            <?php endif; ?>
                                            <option value="">Ayah</option>
                                            <option value="SD">SD</option>
                                            <option value="SLTP">SMP/Sederaja</option>
                                            <option value="SLTA">SMA/Sederajat</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                    <div class="col-6 p-1">
                                        <select name="pendIbu" id="" class="form-select rounded-pill">
                                            <?php if($edit == 1): ?>
                                                <option value="<?= $siswa['pendIbu'] ?>"><?= $siswa['pendIbu'] ?></option>
                                            <?php else: ?>
                                                <option value="">--Ibu</option>
                                            <?php endif; ?>
                                            <option value="">Ibu</option>
                                            <option value="SD">SD</option>
                                            <option value="SLTP">SMP/Sederaja</option>
                                            <option value="SLTP">SMA/Sederajat</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Pekerjaan Orang Tua</label>
                                <div class="row">
                                    <div class="col-6 p-1">
                                        <input value="<?= $edit>0 ? $siswa['pekAyah'] : old('pekAyah') ;?>" type="text" class="form-control rounded-pill" name="pekAyah" placeholder="Pekerjaan Ayah">
                                    </div>
                                    <div class="col-6 p-1">
                                        <input value="<?= $edit>0 ? $siswa['pekIbu'] : old('pekIbu') ;?>" type="text" class="form-control rounded-pill" name="pekIbu" placeholder="Pekerjaan Ibu">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Agama Orang Tua</label>
                                <div class="row">
                                    <div class="col-6 p-1">
                                        <input value="<?= $edit>0 ? $siswa['agamaAyah'] : old('agamaAyah') ;?>" type="text" class="form-control rounded-pill" name="agamaAyah" placeholder="Agama Ayah">
                                    </div>
                                    <div class="col-6 p-1">
                                        <input value="<?= $edit>0 ? $siswa['agamaIbu'] : old('agamaIbu') ;?>" type="text" class="form-control rounded-pill" name="agamaIbu" placeholder="Agama Ibu">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat Orang Tua</label>
                                <div class="row">
                                    <div class="col-6 p-1">
                                        <input value="<?= $edit>0 ? $siswa['alamatAyah'] : old('alamatAyah') ;?>" type="text" class="form-control rounded-pill" name="alamatAyah" placeholder="Alamat Ayah">
                                    </div>
                                    <div class="col-6 p-1">
                                        <input value="<?= $edit>0 ? $siswa['alamatIbu'] : old('alamatIbu') ;?>" type="text" class="form-control rounded-pill" name="alamatIbu" placeholder="Alamat Ibu">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor HP</label>
                                <input value="<?= $edit>0 ? $siswa['hpOrtu'] : old('hpOrtu') ;?>" type="text" class="form-control rounded-pill" name="hpOrtu" placeholder="Nomor HP Orang Tua">
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Nomor Induk Siswa</label>
                                <input type="text" value="<?= $edit>0 ? $siswa['nis'] : old('nis') ;?>"  class="form-control rounded-pill" name="nis">
                            </div> -->
                            <hr>
                            <div class="row text-center  my-3">
                                <div class="col-6">
                                    <div class="card shadow-lg">
                                        <div class="card-header bg-primary ">
                                            <h4 class="text-light">Photo Siswa</h4>
                                        </div>
                                        <div class="card-body"> 
                                                
                                            <label for="logo" class="form-label logoLabel  d-none"></label>
                                            <div class="fileUpload logo-box p-0 mx-auto rounded-circle border-2 border-primary">
                                                <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="photosiswa">
                                                <img src="/assets/photosiswa/<?= $edit>0 ? $siswa['photo'] : 'siswa.png' ;?>" class="img-thumbnail img-preview img-fluid " style="width:100%;min-height:100%" alt="Logo">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6 p-0 position-relative">
                                     <div class="top-50 position-absolute p-0">
                                         <button type="submit" class="btn btn-success form-control rounded-pill py-2">  Simpan</button>
         
                                         <a class="mt-3" href="/siswa">Kembali</a>
                                     </div>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>
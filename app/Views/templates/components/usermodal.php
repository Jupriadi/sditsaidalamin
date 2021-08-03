
<!-- Modal -->
<div class="modal fade" data-bs-backdrop="static" id="daftar" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-body">
        <h3 class="text-center py-3">Form Daftar Siswa Baru</h3>
          <form name="user" action="/controlsiswa/simpan" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card shadow-sm">
                    <div class="card-header  bg-success text-light">
                        <h4>  Photo Siswa</h4>
                    </div>
                    <div class="card-body"> 
                        <div class="logo-box mx-auto">
                            <label for="logo" class="form-label logoLabel d-none"></label>
                            <div class="fileUpload mx-auto rounded-circle bg-primary">
                                <input class="upload" style="height:100%" type="file" onchange="preview()" id="logo" name="photo">
                                <img src="/assets/photosiswa/siswa.png" class="img-preview img-fluid" style="width:100%;min-height:100%" alt="Logo">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-light">
                        <span class="fs-5 ps-4"><strong>Detail Siswa</strong></span>
                    </div>
                    <div class="card-body p-0 p-md-3">
                        <div class="container">
                            <div class="form-group">
                                <label for="">Nama Siswa </label>
                                <input type="text" class="form-control rounded-pill" name="namasiswa">
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Nomor Induk Siswa</label>
                                <input type="text" class="form-control rounded-pill" name="nis">
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="kelas" class="form-select form-control rounded-pill" id="">
                                      <option value="Laki laki">--Pilih Kelas</option>
                                    <option value="1">1. VII</option>
                                    <option value="2">2. VIII</option>
                                    <option value="3">3. IX</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="kelamin" class="form-control rounded-pill" id="">
                                    <option value="Laki laki">--Pilih Jenis Kelmin</option>
                                    <option value="Laki laki">1. Laki laki</option>
                                    <option value="Perempuan">2. Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" class="form-control rounded-pill" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control rounded-pill" name="tmptlahir">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="text"class="form-control rounded-pill" name="tgllahir" id="date">
                            </div>
                            <div class="form-group">
                                <label for="">Seklah Asal</label>
                                <input type="text" class="form-control rounded-pill" name="sekolahasal">
                            </div>
                            <hr>
                            <div class="row text-center  my-3">
                                <button name="daftar" type="submit" class="btn btn-success rounded-pill py-2" value="user">  Simpan</button>

                                <a class="mt-3" href="" data-bs-dismiss="modal" >Batal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
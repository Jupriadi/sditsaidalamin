<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#guru").addClass("active");
</script>
<hr>
<div class="container">
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card shadow ">
                    <div class="card-header bg-primary text-light mb-3">
                        <strong class="card-title"> <i class="bi bi-person-fill"></i> Tabel Data Guru</strong>
                        <a href="/guru/formguru" class="btn  btn-sm btn-light position-absolute end-0 me-4 top-0 mt-4 rounded-pill d-none d-md-block"><i class="bi bi-plus-circle-fill"></i> Tambah Data</a>
                    </div>
                    <div class="row container mt-3">
                        <div class="col-8 col-7 px-2 px-md-2 col-md-5 mb-3">
                            <div class="input-group mb-2 position-relative">
                                <form action="" method="get" class="w-100">
                                    <input name="q" type="text" class="form-control rounded-pill" placeholder="Cari">
                                </form>
                                <span class="position-absolute translate-middle me-2 top-50 end-0"><i class="bi bi-search"></i></span>
                            </div>
                        </div>
                        <div class="col-4 p-0 col-md-3 col-md-2">
                            <select name="q" class="form-select form-control" id="">
                                <option value="">Jenis Kelamin</option>
                                <option value="Laki laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <hr>
                    </div>
                    <div class="card-content container pb-3">
                        <div class="d-md-none d-block">

                            <?php foreach($dataguru as $guru) : ?>
                            <div class="row" data-bs-toggle="collapse"  id="accordionFlushExample" data-bs-target="#col-<?= $guru['idGuru'] ?>">
                                <div class="col-2 fs-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="col-10">
                                    <?= $guru['namaguru'] ?>
                                    <hr>
                                </div>
                            </div>
                            <div id="col-<?= $guru['idGuru'] ?>" class="row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="col-2"></div>
                                <div class="col-10">
                                    <div class="accordion-body">
                                        <strong for="">NIY</strong>
                                        <div class="mb-2">
                                            <?= $guru['niy'] ?>
                                        </div>
                                        <strong >HP / WA</strong>
                                        <div class="mb-4">
                                            <?= $guru['hp'] ?>
                                        </div>
                                     </div>
                                     <div>
                                        <a href="/guru/formguru/<?= $guru['idGuru'] ?>" class="btn bg-primary btn-sm text-light rounded-circle"><i class="bi bi-pencil-fill"></i></a>

                                        <a href="#confirmhapus" data-bs-toggle="modal" class="hapusguru btn bg-warning btn-sm text-light rounded-circle" data-id="$guru['idGuru"><i class="bi bi-trash-fill"></i></a>
                                     </div>
                                     <hr>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                            
                             <!-- .alert-primary, .alert-secondary, .alert-success, .alert-danger, .alert-warning, .alert-info, .alert-light, .alert-dark -->
                            
                        <!-- Button trigger modal -->
                      
                        <div class="table-responsive d-none d-md-block">
                            <table class="table table-hover table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>PHOTO</th>
                                        <th>NAMA</th>
                                        <th>ALAMAT</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>HP / Whatsapp</th>
                                        <th>PENDIDIKAN</th>
                                        <th>PILIHAN</th>
                                    </tr>
                                </thead>
                                
                                <tbody style="font-size:10pt"> 
                                    <?php foreach($dataguru as $guru): ?>
                                      
                                    <tr>  
                                        <td>
                                            <div class="mx-auto" style="width:50px;height:60px;overflow:hidden">
                                                <img style="width:100%" src="/assets/photoguru/<?= $guru['photo'] ?>" alt="PHoto Guru">
                                            </div>
                                        </td>
                                        <td><?= $guru['namaguru'] ?></td>
                                        <td><?= $guru['alamat'] ?></td>
                                        <td><?= $guru['kelamin'] ?></td>
                                        <td><?= $guru['hp'] ?></td>
                                        <td><?= $guru['pendidikan']." ".$guru['jurusan'] ?></td>
                                        
                                        <td class="">
                                            <a href="/guru/formguru/<?= $guru['idGuru'] ?>">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <a href="#confirmhapus" class="hapusguru" data-bs-toggle="modal" data-id="<?= $guru['idGuru'] ?>">
                                                <i class="bi bi-trash-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php if($dataguru == null): ?>
                           <div class="text-center">
                                <!-- <img  src="/assets/img/empty.gif" class="mx-auto" style="width:300px" alt=""> -->
                                <br>
                                <span>Tidak Ada Data Untuk Ditampilkan</span>
                                <br> <a href="">Tampilkan Semua</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Striped rows end -->
</div>

<div class="postion-absolute shadow d-md-none position-fixed me-4 mb-4 bg-success rounded-circle end-0 bottom-0"  style="width: 50px;height: 50px;">
    <div class="positon-relative">
        <a href="/guru/formguru" class="text-light fs-1 position-absolute top-50 start-50 translate-middle">
            <i class="bi bi-plus-circle-dotted"></i>
        </a>
    </div>
</div>

<script>
$(".hapusguru").click(function(){
    const id = $(this).data('id');
    $('#hapus').attr('href','controlguru/hapus/'+id);
})

</script>
<?= $this->endSection(); ?>
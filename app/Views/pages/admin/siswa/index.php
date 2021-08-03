    <?= $this->extend('templates/layout/layout'); ?>

    <?= $this->section('content') ?>
    
    <script type="text/javascript">
        $(".sidebar-item").removeClass("active");
        $("#siswa").addClass("active");
    </script>
    <hr>
    <div class="container">
        <section class="section">
            <div class="row" id="table-striped">
                <div class="col-12 p-0">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-light">
                            <strong class="card-title"><i class="bi bi-people"></i> Tabel Data Siswa</strong>
                            <a href="/siswa/formsiswa" class="btn  btn-sm bg-light text-primary position-absolute end-0 me-4 top-0 mt-4 rounded-pill d-none d-md-block"><i class="bi bi-plus-circle-fill"></i> Tambah Data</a>
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
                                <select name="kelas" class="form-select form-control" id="">
                                    <option value="">Kelas</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <hr>
                        </div>
                        <div class="card-content container pb-3">
                            <!-- mobile view -->
                            <div class="d-md-none d-block">
                                <?php foreach($datasiswa as $siswa) : ?>
                                <div class="row" data-bs-toggle="collapse"  id="accordionFlushExample" data-bs-target="#col-<?= $siswa['idSiswa'] ?>">
                                    <div class="col-2 fs-3">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="col-10">
                                        <?= $siswa['namasiswa'] ?>
                                        <hr>
                                    </div>
                                </div>
                                <div id="col-<?= $siswa['idSiswa'] ?>" class="row accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="col-2"></div>
                                    <div class="col-10">
                                        <div class="accordion-body">
                                            <strong for="">NIY</strong>
                                            <div class="mb-2">
                                                <?= $siswa['nis'] ?>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="/siswa/formsiswa/<?= $siswa['idSiswa'] ?>" class="btn bg-primary btn-sm text-light rounded-circle"><i class="bi bi-pencil-fill"></i></a>

                                            <a href="#confirmhapus" data-bs-toggle="modal" class="hapussiswa btn bg-warning btn-sm text-light rounded-circle" data-id="<?= $siswa['idSiswa'] ?>"><i class="bi bi-trash-fill"></i></a>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                
                                <?php endforeach; ?>
                            </div>
                            <!-- Button trigger modal -->
                                
                            <!-- desktop view   -->
                            <div class="table-responsive d-none d-md-block">
                                <table class="table table-hover table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIS</th>
                                            <th>PHOTO</th>
                                            <th>NAMA</th>
                                            <th>ALAMAT</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>PILIHAN</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody style="font-size:10pt"> 
                                    <?php 
                                            $no = (10*($currentPage-1)+1);
                                    ?>
                                        <?php  foreach($datasiswa as $siswa): ?>
                                        
                                        <tr> 
                                            <td><?=  $no++; ?></td>
                                            <td><?= $siswa['nis'] ?></td>
                                            <td>
                                                <div class="mx-auto" style="width:50px;height:60px;overflow:hidden">
                                                    <img style="width:100%" src="/assets/photosiswa/<?= $siswa['photo'] ?>" alt="PHoto siswa">
                                                </div>
                                            </td>
                                            <td class="cursor-pointer"  onclick="detailsiswa(<?= $siswa['idSiswa'] ?>)"><?= $siswa['namasiswa'] ?></td>
                                            <td><?= $siswa['alamat'] ?></td>
                                            <td><?= $siswa['kelamin'] ?></td>
                                            
                                            <td class="">
                                                <a href="/siswa/formsiswa/<?= $siswa['idSiswa'] ?>">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </a>
                                                <a href="#confirmhapus" class="hapussiswa" data-bs-toggle="modal" data-id="<?= $siswa['idSiswa'] ?>">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?= $pager->links() ?>
                            </div>
                            <?php if($datasiswa == null): ?>
                            <div class="text-center">
                                    <!-- <img  src="/assets/img/empty.gif" class="mx-auto" style="width:300px" alt=""> -->
                                    <br><span>Tidak Ada Data Untuk Ditampilkan</span>

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
            <a href="/siswa/formsiswa" class="text-light fs-1 position-absolute top-50 start-50 translate-middle">
                <i class="bi bi-plus-circle-dotted"></i>
            </a>
        </div>
    </div>


    <script>
    $(".hapussiswa").click(function(){
        const id = $(this).data('id');
        $('#hapus').attr('href','controlsiswa/hapus/'+id);
    })

    function detailsiswa(id)
    {
        $.ajax({
            type: "POST",
            url: "/controlsiswa/siswaAjax",
            data: {'idSiswa':id},
            dataType: 'json',
            success: function(data){
                alert(data.idSiswa)
            }
        });
    }
    </script>
    <?= $this->endSection(); ?>
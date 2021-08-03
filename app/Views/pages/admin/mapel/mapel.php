<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#mapel").addClass("active");
</script>
<hr>
<div class="container">
    <section class="section">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card shadow ">
                    <div class="card-header bg-primary text-light mb-3">
                        <strong class="card-title"> <i class="bi bi-person-fill"></i> Tabel Data Mapel</strong>
                        <a href="#addmapel" data-bs-toggle="modal" class="btn tambahmapel btn-sm btn-light position-absolute end-0 me-4 top-0 mt-4 rounded-pill d-none d-md-block"><i class="bi bi-plus-circle-fill"></i> Tambah Data</a>
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
                        <hr>
                    </div>
                    <div class="card-content container pb-3">
                        <!-- Button trigger modal -->
                      
                        <div class="table-responsive d-none d-md-block">
                            <table class="table table-hover table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>KODE</th>
                                        <th>MATA PELAJARAN</th>
                                        <th>GURU PENGAMPU</th>
                                        <th>PILIHAN</th>
                                    </tr>
                                </thead>
                                
                                <tbody style="font-size:10pt"> 
                                    <?php foreach ($mapel as $map) : ?>
                                    <tr>
                                        <td><?= $map['kodemapel'] ?></td>
                                        <td><?= $map['mapel'] ?></td>
                                        <td><?= ($map['gurumapel'] == 0) ? '-' : $map['namaguru'] ; ?></td>
                                        <td>
                                            <a href="#addmapel" data-id="<?= $map['id'] ?>" class="editmapel" data-bs-toggle="modal">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#confirmhapus" data-id="<?= $map['id'] ?>" class="hapusmapel" data-bs-toggle="modal">
                                                <i class="bi bi-trash2-fill"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Striped rows end -->
</div>

<div class="postion-absolute shadow d-md-none position-fixed me-4 mb-4 bg-success rounded-circle end-0 bottom-0"  style="width: 50px;height: 50px;">
    <div class="positon-relative">
        <a href="#addmapel" data-bs-toggle="modal" class="text-light fs-1 position-absolute top-50 start-50 translate-middle">
            <i class="bi bi-plus-circle-dotted"></i>
        </a>
    </div>
</div>

<!-- Modal tambah data-->
<div class="modal fade" id="addmapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content pb-3">
      <div class="modal-body">
        <div class="text-center fs-2">Data Mapel</div><br>
        <form method="post" action="/controlmapel/simpan">
            <div class="form-group">
                <label for="kodemapel">Kode Mata Pelajaran</label>
                <input type="text" id="kodemapel" name="kodemapel" class="form-control">
            </div>
            <div class="form-group">
                <label for="namamapel">Mata Pelajaran</label>
                <input type="text" id="namamapel" name="mapel" class="form-control" />
            </div>
            <div class="form-group">
                <label for="gurumapel">Guru Mata Pelajran</label>
                <select name="gurumapel" id="gurumapel" class="form-select">
                <option value="">Pilih Guru</option>
                <?php foreach($guru as $g) : ?>
                    <option value="<?= $g['idGuru'] ?>"><?= $g['niy'].'-'.$g['namaguru'] ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <hr>
            <div class="text-center">
                <button class="mb-3 form-control btn btn-primary rounded-pill" type="submit">Simpan</button>
                <a href="" data-bs-dismiss="modal">Batal</a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
   $(function(){
        $(".hapusmapel").click(function(){
            const id = $(this).data('id');
            $('#hapus').attr('href','controlmapel/hapus/'+id);
        })

        $(".tambahmapel").click(function(){
            $('#kodemapel').val('');
            $('#namamapel').val('');
            $('#gurumapel').val('');
            $('.modal-body form').attr('action','controlmapel/simpan');
        });

        $(".editmapel").click(function(){
           const id = $(this).data('id');
           $.ajax({
               url  : '/controlmapel/getmapel',
               data : {id : id},
               method : 'post',
               dataType : 'json',
               success: function(data){
                    $('#kodemapel').val(data.kodemapel);
                    $('#namamapel').val(data.mapel);
                    $('#gurumapel').val(data.gurumapel);
                    $('.modal-body form').attr('action','controlmapel/simpan/'+data.id);
               } 
           })
        })
   })
</script>
<?= $this->endSection(); ?>
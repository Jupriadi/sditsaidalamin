<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#slide").addClass("active");
</script>
<hr>
<div class="container">
    <section>
        <div class="card">
            <div class="card-header bg-primary text-light">
                <strong class="card-title"><i class="bi bi-file-earmark-slides"></i> Gambar Slide Show</strong>
                <a href="/panel/tambahslide" class="btn btn-sm bg-light text-primary position-absolute end-0 me-4 top-0 mt-4 rounded-pill d-none d-md-block"><i class="bi bi-plus-circle-fill"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </section>
    <!-- Striped rows end -->
</div>
<?= $this->endSection(); ?>
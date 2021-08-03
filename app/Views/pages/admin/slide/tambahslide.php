<?= $this->extend('templates/layout/layout'); ?>

<?= $this->section('content') ?>
  
<script type="text/javascript">
     $(".sidebar-item").removeClass("active");
     $("#slide").addClass("active");
</script>
<form action="/progres/simpanslide" name="formData" method="post" enctype="multipart/form-data">
<hr>
    <div class="container">
        <h5>Click Untuk Memilih Gambar</h5>
      <div class="row mt-4">
        <div class="col-md-6 col-xl-6">
            <div class="card">
                <img class="card-img-top img-fluid" onclick="$('#file').click()" id="img" src="/assets/img/noimage.png">
                <input type="file" name="photo" accept="image/*" id="file" style="display:none;" />
            </div>
            <br />
        </div>
        <div class="col-lg-6">
            <div class="my-auto">
                <input type="text" id="desk" name="desk" placeholder="Deskripsi Slide" class="form-control rounded-pill mb-3 ps-3 py-2">

                <input type="text" id="subdesk" name="subdesk" placeholder="Sub Deskripsi" class="form-control rounded-pill mb-3 ps-3 py-2">
                <hr>

            <button type="button" onclick="submitform()" class="btn btn-primary">Simpan</button>
            </div>
        </div>
      </div>
    </div>
    <!-- modal cropping -->
<!-- Modal -->
<div class="modal fade"id="modalcrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crop Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
            <img id='modalimg' class='img-fluid' src="" />
        </div>
    </div>
    <div class="modal-footer">
          <button type='button' class='btn btn-danger btn-sm' onclick='cropping()'>Crop Gambar</button>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.7/cropper.min.js" crossorigin="anonymous"></script>
    <script>
    //Global Variabel (Optional)
    var croppers=null;
    var file=null;

    //Trigger Ketika Input Type File di Click
    $('#file').change(function () {
        fileCount = this.files.length;
        if(fileCount && (this.files[0].type=="image/jpeg"||this.files[0].type=="image/jpg"||this.files[0].type=="image/png")){
            //Menampilkan Gambar ke Modal
            $('#modalimg').attr("src",URL.createObjectURL(event.target.files[0]));

            //Menampilkan Popup Modal
            $('#modalcrop').modal('show');

            //Memberikan Timeout/Waktu Jeda selama 0.5 Detik Untuk Menyiapkan Cropper JS
            setTimeout(function(){
                const image = document.getElementById('modalimg');
                var height = $('#img').height();
                var width = $('#img').width();

                //Parameter dari Cropper JS (Baca di https://fengyuanchen.github.io/cropperjs/)
                var cropper = new Cropper(image, {
                  viewMode: 3,
                  aspectRatio: 10 / 4,
                  movable: false,
                  zoomable: false,
                  width:width,
                  height:height,
                  crop(event) {
                  },
                });

                //Assignment hasil cropper ke variabel Global Croppers
                croppers=cropper;
            },500);
        }else{alert('Ekstensi File Harus Image');}
      });

      //Fungsi Ketika Tombol Crop Gambar di Jalankan
      function cropping(){
        croppers.getCroppedCanvas({height:310,width:516}).toBlob(function(blob){
          //Untuk mengganti tampilan dengan gambar yang sudah di crop
          $("#img").attr('src',''+URL.createObjectURL(blob));

          //menyimpan hasil gambar yang sudah di potong ke dalam variabel global file
          file=blob;

          //Menutup Popup Modal
          $('#modalcrop').modal('hide');
        },'image/jpeg',0.8);
    }

    //Fungsi Saat Tombol Kirim di Pilih
    function submitform(){
      //Membuat FORM by JavaScript
      var formData = new FormData();

      //Mengisi Inputan Form
      formData.append('desk', $('#desk').val());
      formData.append('subdesk', $('#subdesk').val());

      //Cek Dulu, Apakah Gambarnya sudah dipilih
      if(file!=null){
          formData.append('file', file, "img.jpg");
      }
      $.ajax({
          url : '/progres/simpanslide',
          data : formData,
          type : 'POST',
          processData: false,
          contentType: false,
          success : function(data){
            alert('Data Berhasil di Kirim');
          }
      });
    }
    </script>


<?= $this->endSection(); ?>

            <!-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p class="text-center text-md-start">2021 &copy; SAID ALAMIN</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://web.facebook.com/yadi.f.joefhcmbaloenboyz" terget="_blank">Jupriadi</a></p>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="saved" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body py-4">
                    <div class="text-center text-success" style="font-size:50pt;"><i class="bi bi-emoji-heart-eyes"></i></div>
                    <p class="text-center">
                        <?= session()->getFlashData('saved') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php if(session()->get('saved')) : ?>
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#saved').modal('show');
            });
        </script>
    <?php endif ?>

    <script>
        setTimeout(function() {
            $("#saved").modal('hide')
        }, 2000);

    </script>

    <script src="/assets/js/perfect-scrollbar.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/apexcharts.js"></script>
    <script src="/assets/js/dashboard.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/aos.js"></script>
    <script src="/assets/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/cropper/cropper.js"></script>
    <script src="/assets/js/bootstrap-datepicker.min.js"></script>
    <script>   
        AOS.init(); 
    </script>
    <script>
        $( window ).scroll( function () {
    if ( $(document).scrollTop() > 50 ) {
      $(".usernav").addClass("fixed-top bg-light navbar-light ");
      $(".usernav").removeClass("navbar-dark");


    } else {
      $(".usernav").removeClass("fixed-top bg-light navbar-light");
      $(".usernav").addClass("navbar-dark");
      $("#tgr-nav").removeClass("btn-outline-dark");
      $("#tgr-nav").addClass("btn-outline-light");
    }
  });

        function preview(){
                const logo = document.querySelector('#logo');
                const label = document.querySelector('.logoLabel');
                const prev = document.querySelector('.img-preview');

                label.textContent = logo.files[0].name;

                const filePhoto = new FileReader(); 
                filePhoto.readAsDataURL(logo.files[0]);

                filePhoto.onload = function(e){
                    prev.src = e.target.result;
                }
      };

      $('#date').datepicker({
		format: 'yyyy-mm-dd',
		daysOfWeekDisabled: "0",
		autoclose:true
    });
    </script>
</body>

</html>
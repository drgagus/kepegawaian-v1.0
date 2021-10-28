<footer class="bg-dark fixed-bottom">
    <div class="container">
      <small>
      <p class="m-0 text-center text-white">Copyright &copy; <a href="https://www.drgagus.com" class="text-decoration-none text-white" target=_blank >drg.agus</a> <?= date('Y');?></p>
      <p class="m-0 text-center text-white">Admin:Jufrizon</p>
    </small>
    </div>
  </footer>

<!-- Bootstrap core JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url();?>assets/js/sb-admin-2.min.js"></script>

   <script>
    $('.custom-file-input').on('change',function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
  </script>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Ya" jika kamu yakin ingin keluar dari halaman ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Ya</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Logout Modal-->



  

</body>

</html>
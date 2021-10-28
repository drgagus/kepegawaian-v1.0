

          <div class="container mb-3">
            <div class="row pt-3" style="background:#ffff;">
              <div class="col-lg-12">
                <h5 class="mb-3">GANTI USERNAME</h5>
                <?= $this->session->flashdata('message'); ?>

          <form action="<?= base_url() ;?>pegawai/username" method="post">

           <div class="form-group row"> 
            <div class="col-sm-12">
                <input type="text" class="form-control" id="old_username" name="old_username" placeholder="Username Lama" >
                <?= form_error('old_username', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="new_username" name="new_username" placeholder="Username Baru" >
                <?= form_error('new_username', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>

        <div class="form-group row text-right">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary">UBAH</button>
          </div>
        </div>
      </form>

              </div>
            </div>
          </div>



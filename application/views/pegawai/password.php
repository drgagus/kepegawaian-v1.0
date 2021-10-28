


          <div class="container mb-3">
            <div class="row pt-3" style="background:#ffff;">
              <div class="col-lg-12">
                <h5 class="mb-3">GANTI PASSWORD</h5>
                <?= $this->session->flashdata('message'); ?>

          <form action="<?= base_url() ;?>pegawai/password" method="post">

           <div class="form-group row"> 
            <div class="col-sm-12">
                <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Password Lama" >
                <?= form_error('old_password', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>

          <div class="form-group row">
          <div class="col-sm-12">
            <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="Password Baru">
            <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-12">
            <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="Ulangi Password Baru">
            <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?>
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



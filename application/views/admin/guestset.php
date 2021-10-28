

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-6"><a href="<?= base_url('admin/guest'); ?>" class="text-decoration-none text-dark">Guest</a></h1>
              <p class="lead">Pengaturan</p>
            </div>
          </div>
          
<form action="<?= base_url('admin/guestset'); ?>" class="user" method="post">
        <div class="container mb-5">
            <div class="row">
                <input type="hidden" name="hakakses" value="guest">
                <div class="col-lg-4">
                <label for="password" class="">Password</label>
                <input type="password" class="form-control form-control-user mb-3" id="password" name="password" placeholder="password" >
                <label for="expired" class="">Masa berlaku</label>
                <input type="date" class="form-control form-control-user mb-3" id="expired" name="expired" placeholder="expired date" value="<?= set_value('expired'); ?>" >

                <button type="submit" class="btn btn-primary">OK</button>

                </div>
            </div>
        </div>
</form>


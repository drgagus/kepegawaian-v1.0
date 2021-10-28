<div class="jumbotron jumbotron-fluid p-0">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <img src="<?= base_url('assets/img/profil/').$pegawai['image']; ?>" class="img-fluid" style="width:150px;">
      </div>
      <div class="col-9">
        <h5 class="display-6"><?= $pegawai['nama'];?></h5>
        <p class="lead"><?= $pegawai['jabatan'];?></p>
      </div>
    </div>
  </div>
</div>


<div class="container mb-3">
  <div class="row">
      <div class="col-lg-12">
      <div class="btn-group dropright">
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= base_url('admin/account/').$pegawai['id'];?>" >Akun</a>
					<a class="dropdown-item" href="<?= base_url('admin/file/').$pegawai['id'];?>">File</a>
					<a class="dropdown-item" href="<?= base_url('admin/detail/').$pegawai['id'];?>">Detail</a>
					<a class="dropdown-item" href="<?= base_url('admin/edit/').$pegawai['id'];?>">Edit</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?= base_url('admin/delete/').$pegawai['id'];?>" data-toggle="modal" data-target="#hapusModal">Hapus</a>
				</div>
			</div>
      </div>
  </div>
	<div class="row">
		<div class="col-lg-6">
			<?= $this->session->flashdata('message'); ?>
			<div class="card">
                <div class="card-header"><label class="font-weight-bold"><?= $pegawai['nama'];?></label></div>
                <div class="card-body">
                    <table class="">
                        <tr class="">
                            <td class="">Username</td>
                            <td class="">:</td>
                            <th class=""><?= $pegawai['username'];?></th>
                        </tr>
                        <tr class="">
                            <td class="">Password</td>
                            <td class="">:</td>
                            <td class=""><a href="<?= base_url('admin/reset/').$pegawai['id'];?>" data-toggle="modal" data-target="#resetModal" class="btn btn-sm btn-outline-danger font-weight-bold">RESET</a></td>
                        </tr>
                        <tr class="">
                            <td class="">Portal</td>
                            <td class="">:</td>
                            <td class="">
                                <?php if ($pegawai['portal'] == 1 ) : ?>
                                <a href="<?= base_url('admin/close/').$pegawai['id'];?>" class="btn btn-sm btn-outline-primary text-decoration-none font-weight-bold">OPEN</a>
                                <?php else : ?>
                                <a href="<?= base_url('admin/open/').$pegawai['id'];?>" class="btn btn-sm btn-outline-danger text-decoration-none font-weight-bold">CLOSED</a>
                                <?php endif ;?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
		</div>
	</div>
</div>

<!-- Hapus Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Hapus?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
			<table class="">
				<tr class="">
					<td class="">Nama</td><td class="">:</td><td class=""><?= $pegawai['nama'];?></td>
				</tr>
				<tr class="">
					<td class="">NIP/NRPT</td><td class="">:</td><td class=""><?= $pegawai['nip'];?></td>
				</tr>
				<tr class="">
					<td class="">Jabatan</td><td class="">:</td><td class=""><?= $pegawai['jabatan'];?></td>
				</tr>
			</table>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-danger" href="<?= base_url('admin/delete/').$pegawai['id'];?>">Ya</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hapus Modal-->

  <!-- Reset Modal-->
<div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Reset Akun Ini?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
			<table class="">
				<tr class="">
					<td class="">Nama</td><td class="">:</td><td class=""><?= $pegawai['nama'];?></td>
				</tr>
				<tr class="">
					<td class="">NIP/NRPT</td><td class="">:</td><td class=""><?= $pegawai['nip'];?></td>
				</tr>
				<tr class="">
					<td class="">Jabatan</td><td class="">:</td><td class=""><?= $pegawai['jabatan'];?></td>
				</tr>
			</table>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-danger" href="<?= base_url('admin/reset/').$pegawai['id'];?>">Ya</a>
        </div>
      </div>
    </div>
</div>
<!-- End Reset Modal-->
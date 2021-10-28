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
			<div class="table-responsive">
				<table class="table table-sm table-hover">
				  <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul File</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if ($files) : ?>
                      <?php $no=1; ?>
                      <?php foreach($files as $file): ?>
                      <tr>
                        <th scope="row"><?= $no++ ; ?></th>
                        <td><a href="<?= base_url('assets/files/').$file['file']; ?>" class="text-decoration-none text-dark font-weight-bold" target=_blank><?= $file['judul']; ?></a></td>
                      </tr>
                    <?php endforeach ;?>
                    <?php else : ?>
                      <tr><td></td><td>FILE TIDAK ADA</td></tr>
                    <?php endif ;?>
                    </tbody>
				</table>

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

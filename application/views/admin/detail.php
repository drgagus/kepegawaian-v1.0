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
			<?= $this->session->flashdata('message'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="table-responsive">
				<table class="table table-sm table-hover">
				  <tbody>
				  	<tr>
				      <th scope="row">Nomor Urut</th>
				      <td> : </td>
				      <td><?= $pegawai['nourut'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">Nama</th>
				      <td> : </td>
				      <td><?= $pegawai['nama'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">NIP</th>
				      <td> : </td>
				      <td><?= $pegawai['nip'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">Pangkat</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Golongan</td>
				      <td> : </td>
				      <td><?= $pegawai['golongan'];?></td>
				    </tr>
				    <tr>
				      <td scope="row">TMT</td>
				      <td> : </td>
				      <td><?php if ($pegawai['tmtgolongan'] == 0000-00-00){  }else{ echo date('d-m-Y', strtotime($pegawai['tmtgolongan'])) ; }?></td>
				    </tr>
				    <tr>
				      <th scope="row">Jenis Kelamin</th>
				      <td> : </td>
				      <td><?= $pegawai['jeniskelamin'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">Jabatan</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Jabatan</td>
				      <td> : </td>
				      <td><?= $pegawai['jabatan'];?></td>
				    </tr>
				    <tr>
				      <td scope="row">Status Kepegawaian</td>
				      <td> : </td>
				      <td><?= $pegawai['statuskepegawaian'];?></td>
				    </tr>
				    <tr>
				      <td scope="row">TMT</td>
				      <td> : </td>
				      <td><?php if ($pegawai['tmtjabatan'] == 0000-00-00 ){ }else{ echo date('d-m-Y', strtotime($pegawai['tmtjabatan'])) ; }?></td>
				    </tr>
				    <tr>
				      <th scope="row">Unit Kerja</th>
				      <td> : </td>
				      <td><?= $pegawai['unitkerja'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">Pendidikan</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Perguruan Tinggi</td>
				      <td> : </td>
				      <td><?= $pegawai['universitas'];?></td>
				    </tr>
				    <tr>
				      <td scope="row">Jurusan</td>
				      <td> : </td>
				      <td><?= $pegawai['jurusan'];?></td>
				    </tr>
				     <tr>
				      <td scope="row">Tahun Lulus</td>
				      <td> : </td>
				      <td><?= $pegawai['tahunlulus'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">Tempat, tanggal lahir</th>
				      <td> : </td>
				      <td><?php if ($pegawai['tempatlahir']){ echo $pegawai['tempatlahir'].", ";}?> <?php if ($pegawai['tanggallahir'] == 0000-00-00 ){ }else{ echo date('d-m-Y', strtotime($pegawai['tanggallahir'])) ; }?></td>
				    </tr>
				  </tbody>
				</table>

			</div>
		</div>
		<div class="col-lg-4">
			<div class="table-responsive">
				<table class="table table-sm table-hover">
				  <tbody>
				  	<tr>
				      <th scope="row">Nomor NIK</th>
				      <td> : </td>
				      <td><?= $pegawai['nik'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">Nomor Kartu Keluarga</th>
				      <td> : </td>
				      <td><?= $pegawai['nokk'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">Status</th>
				      <td> : </td>
				      <td><?= $pegawai['status'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">Alamat</th>
				      <td>:</td>
				      <td><?= $pegawai['alamat']." RT/RW ".$pegawai['rt']."/".$pegawai['rw'].", ".$pegawai['desa'].", ".$pegawai['kecamatan'].", ".$pegawai['kabupaten'].", ".$pegawai['provinsi'] ;?></td>
				    </tr>
				    <tr>
				      <th scope="row">Nomor NPWP</th>
				      <td> : </td>
				      <td><?= $pegawai['npwp'];?></td>
				    </tr>
				    <tr>
				      <th scope="row">BPJS</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Kesehatan</td>
				      <td>:</td>
				      <td><?= $pegawai['bpjskesehatan'];?></td>
				    </tr>
				    <tr>
				      <td scope="row">Ketenagakerjaan</td>
				      <td> : </td>
				      <td><?= $pegawai['bpjsketenagakerjaan'];?></td>
				    </tr>
					<tr>
				      <th scope="row">Kontak</th>
				      <td></td>
				      <td></td>
				    </tr>
					<tr>
				      <td scope="row">Nomor Handphone</td>
				      <td>:</td>
				      <td><?= $pegawai['phonenumber'];?></td>
				    </tr>
					<tr>
				      <td scope="row">Email</td>
				      <td>:</td>
				      <td><?= $pegawai['email'];?></td>
				    </tr>
					<tr>
				      <th scope="row">Bank</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Nama Bank</td>
				      <td>:</td>
				      <td><?= $pegawai['namabank'];?></td>
				    </tr>
				    <tr>
				      <td scope="row">Nomor Rekening</td>
				      <td> : </td>
				      <td><?= $pegawai['norek'];?></td>
				    </tr>
				  </tbody>
				</table>

			</div>
		</div>
		<div class="col-lg-4">
			<div class="table-responsive">
				<table class="table table-sm table-hover">
				  <tbody>
				    <tr>
				      <th scope="row">STR</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Terbit</td>
				      <td>:</td>
				      <td><?php if ($pegawai['terbitstr'] == 0000-00-00 or null){  }else{ echo date('d-m-Y', strtotime($pegawai['terbitstr'])) ; }?></td>
				    </tr>
				    <tr>
				      <td scope="row">Nomor</td>
				      <td> : </td>
				      <td><?= $pegawai['str'];?></td>
				    </tr>
				    <tr>
				      <td scope="row">Berlaku s/d</td>
				      <td> : </td>
				      <td><?php if ($pegawai['berlakustr'] == 0000-00-00 or null){  }else{ echo date('d-m-Y', strtotime($pegawai['berlakustr'])) ; }?></td>
				    </tr>
				    <tr>
				      <th scope="row">SIP</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Terbit</td>
				      <td>:</td>
				      <td><?php if ($pegawai['terbitsip'] == 0000-00-00 or null){  }else{ echo date('d-m-Y', strtotime($pegawai['terbitsip'])) ; }?></td>
				    </tr>
				    <tr>
				      <td scope="row">Nomor</td>
				      <td> : </td>
				      <td><?= $pegawai['sip'];?></td>
				    </tr>
				    <tr>
				      <td scope="row">Berlaku s/d</td>
				      <td> : </td>
				      <td><?php if ($pegawai['berlakusip'] == 0000-00-00 or null){  }else{ echo date('d-m-Y', strtotime($pegawai['berlakusip'])) ; }?></td>
				    </tr>
				  </tbody>
				</table>

			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-sm table-hover">
				  <tbody>
				  	<tr>
				      <th scope="row" style="width:10%">Pelatihan</th>
					  <td scope="row" class="align-justify"><?=  nl2br($pegawai['pelatihan']) ?></td>
				    </tr>
				  	<tr>
				      <td scope="row"></td><td class=""></td>
				    </tr>
				  </tbody>
				</table>
			</div>	
		</div>
	</div>
</div>

<br>

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



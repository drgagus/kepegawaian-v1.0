

<div class="container mb-5" style="background:#ffff;">
		<?= $this->session->flashdata('message'); ?>
	<div class="row p-3">
		<div class="col-lg-4">
			<div class="table-responsive">
				<table class="table table-sm table-hover">
				  <tbody>
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
				      <td>:</td>
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

	<div class="row p-3">
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
	<div class="row">
		<div class="col-lg-12 text-right pb-3">
			<a href="<?= base_url('pegawai/editprofil');?>" class="btn btn-sm btn-primary">Edit Profil</a>
		</div>
	</div>
</div>

<br>


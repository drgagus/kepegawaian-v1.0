

<?= form_open_multipart('pegawai/editprofil'); ?>
<div class="container mb-5" style="background:#ffff;">
	<div class="row pt-3 px-3">
		<div class="col-lg-12">
		<div class="custom-file">
                          <input type="file" class="custom-file-input" id ="image" name="image" >
                          <label class="custom-file-label" for="image">--foto profil rasio p(4) : l(3)--</label>
                        </div>
		</div>
	</div>
	<div class="row p-3">
		<div class="col-lg-4">
			<div class="table-responsive">
				<table class="table table-sm table-hover">
				  <tbody>
				    <tr>
				      <th scope="row">Nama</th>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['nama'];?>" name="nama" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">NIP</th>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['nip'];?>" name="nip" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Pangkat</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Golongan</td>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['golongan'];?>" name="golongan" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">TMT</td>
				      <td> : </td>
				      <td><input type="date" value="<?= $pegawai['tmtgolongan'];?>" name="tmtgolongan" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Jenis Kelamin</th>
				      <td> : </td>
				      <td>
						<select class="form-control" id="jeniskelamin" name="jeniskelamin">
							<option <?php echo ($pegawai['jeniskelamin'] == 'Laki-laki') ? "selected": "" ?> >Laki-laki</option>
							<option <?php echo ($pegawai['jeniskelamin'] == 'Perempuan') ? "selected": "" ?> >Perempuan</option>
						</select>
					  </td>
				    </tr>
				    <tr>
				      <th scope="row">Jabatan</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Jabatan</td>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['jabatan'];?>" name="jabatan" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">Status Kepegawaian</td>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['statuskepegawaian'];?>" name="statuskepegawaian" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">TMT</td>
				      <td> : </td>
				      <td><input type="date" value="<?= $pegawai['tmtjabatan'];?>" name="tmtjabatan" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Unit Kerja</th>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['unitkerja'];?>" name="unitkerja" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Pendidikan</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Perguruan Tinggi</td>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['universitas'];?>" name="universitas" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">Jurusan</td>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['jurusan'];?>" name="jurusan" style="width:100%"></td>
				    </tr>
				     <tr>
				      <td scope="row">Tahun Lulus</td>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['tahunlulus'];?>" name="tahunlulus" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Tempat, tanggal lahir</th>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['tempatlahir'];?>" name="tempatlahir" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row"></th>
				      <td></td>
				      <td><input type="date" value="<?= $pegawai['tanggallahir'];?>" name="tanggallahir" style="width:100%"></td>
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
				      <td><input type="text" value="<?= $pegawai['nik'];?>" name="nik" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Nomor Kartu Keluarga</th>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['nokk'];?>" name="nokk" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Status</th>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['status'];?>" name="status" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Alamat</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">alamat</td>
				      <td></td>
				      <td><input type="text" value="<?= $pegawai['alamat'];?>" name="alamat" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">rt/rw</td>
				      <td></td>
				      <td>
					  	<select id="rt" name="rt" class="mb-2" style="width:50%">
						  	<option value="">-RT-</option>
							<option <?php echo ($pegawai['rt'] == '001') ? "selected": "" ?> value="001" >001</option>
							<option <?php echo ($pegawai['rt'] == '002') ? "selected": "" ?> value="002" >002</option>
							<option <?php echo ($pegawai['rt'] == '003') ? "selected": "" ?> value="003" >003</option>
						</select>
					  	<select id="rw" name="rw" style="width:50%">
						  	<option value="">-RW-</option>
							<option <?php echo ($pegawai['rw'] == '001') ? "selected": "" ?> value="001" >001</option>
							<option <?php echo ($pegawai['rw'] == '002') ? "selected": "" ?> value="002" >002</option>
							<option <?php echo ($pegawai['rw'] == '003') ? "selected": "" ?> value="003" >003</option>
						</select>
					  </td>
				    </tr>
				    <tr>
				      <td scope="row">desa/kelurahan</td>
				      <td></td>
				      <td><input type="text" value="<?= $pegawai['desa'];?>" name="desa" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">kecamatan</td>
				      <td></td>
				      <td><input type="text" value="<?= $pegawai['kecamatan'];?>" name="kecamatan" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">kabupaten</td>
				      <td></td>
				      <td><input type="text" value="<?= $pegawai['kabupaten'];?>" name="kabupaten" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">provinsi</td>
				      <td></td>
				      <td><input type="text" value="<?= $pegawai['provinsi'];?>" name="provinsi" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">Nomor NPWP</th>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['npwp'];?>" name="npwp" style="width:100%"></td>
				    </tr>
				    <tr>
				      <th scope="row">BPJS</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Kesehatan</td>
				      <td>:</td>
				      <td><input type="text" value="<?= $pegawai['bpjskesehatan'];?>" name="bpjskesehatan" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">Ketenagakerjaan</td>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['bpjsketenagakerjaan'];?>" name="bpjsketenagakerjaan" style="width:100%"></td>
				    </tr>
					<tr>
				      <th scope="row">Kontak</th>
				      <td></td>
				      <td></td>
				    </tr>
					<tr>
				      <td scope="row">Nomor Handphone</td>
				      <td>:</td>
				      <td><input type="text" value="<?= $pegawai['phonenumber'];?>" name="phonenumber" style="width:100%"></td>
				    </tr>
					<tr>
				      <td scope="row">Email</td>
				      <td>:</td>
				      <td><input type="text" value="<?= $pegawai['email'];?>" name="email" style="width:100%"></td>
				    </tr>
					<tr>
				      <th scope="row">Bank</th>
				      <td></td>
				      <td></td>
				    </tr>
				    <tr>
				      <td scope="row">Nama Bank</td>
				      <td>:</td>
				      <td><input type="text" value="<?= $pegawai['namabank'];?>" name="namabank" style="width:100%"></td>
				    </tr>
				    <tr>
				      <td scope="row">Nomor Rekening</td>
				      <td> : </td>
				      <td><input type="text" value="<?= $pegawai['norek'];?>" name="norek" style="width:100%"></td>
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
						<td><input type="date" value="<?= $pegawai['terbitstr'];?>" name="terbitstr" style="width:100%"></td>
						</tr>
						<tr>
						<td scope="row">Nomor</td>
						<td> : </td>
						<td><input type="text" value="<?= $pegawai['str'];?>" name="str" style="width:100%"></td>
						</tr>
						<tr>
						<td scope="row">Berlaku s/d</td>
						<td> : </td>
						<td><input type="date" value="<?= $pegawai['berlakustr'];?>" name="berlakustr" style="width:100%"></td>
						</tr>
						<tr>
						<th scope="row">SIP</th>
						<td></td>
						<td></td>
						</tr>
						<tr>
						<td scope="row">Terbit</td>
						<td>:</td>
						<td><input type="date" value="<?= $pegawai['terbitsip'];?>" name="terbitsip" style="width:100%"></td>
						</tr>
						<tr>
						<td scope="row">Nomor</td>
						<td> : </td>
						<td><input type="text" value="<?= $pegawai['sip'];?>" name="sip" style="width:100%"></td>
						</tr>
						<tr>
						<td scope="row">Berlaku s/d</td>
						<td> : </td>
						<td><input type="text" value="<?= $pegawai['berlakusip'];?>" name="berlakusip" style="width:100%"></td>
						</tr>
				  	</tbody>
				</table>

			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-sm table-hover">
				  <tbody>
				  	<tr>
				      <th scope="row">Pelatihan</th>
					</tr>
					</tr>
					  <td scope="row" class="align-justify"><textarea name="pelatihan" id="pelatihan" rows="10" class="" name="pelatihan" style="width:100%"><?= $pegawai['pelatihan'] ?></textarea></td>
				    </tr>
				  </tbody>
				</table>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 text-right pb-3">
			<button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
		</div>
	</div>
</div>
</form>
<br>




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



          <div class="container">
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
              <div class="col-lg-12">
            <?= form_open_multipart('admin/edit/'.$pegawai['id']); ?>

                    <div class="form-group row">
                      <div class="col-sm-2 mb-3 mb-sm-0">
                        <img class="img-thumbnail" src="<?= base_url('assets/img/profil/').$pegawai['image'] ?>" style="width:150px;" />
                      </div>
                      <div class="col-sm-6">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id ="image" name="image" >
                          <label class="custom-file-label" for="image">Pilih foto rasio p(4) : l(3)</label>
                        </div>
                      </div>
                    </div>
                
               <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nourut" name="nourut" placeholder="--nomor urut--" value="<?= $pegawai['nourut'];?>">
                  <?= form_error('nourut', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="--nama lengkap--" value="<?= $pegawai['nama'];?>">
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="--NIP/NRPT--" value="<?= $pegawai['nip'];?>">
                  <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <select class="form-control" id="golongan" name="golongan">
                          <option <?php echo ($pegawai['golongan'] == '') ? "selected": "" ?> value="">-- Golongan Ruang Tidak Ada --</option>
                          <option <?php echo ($pegawai['golongan'] == 'Penata Tingkat I / IIId') ? "selected": "" ?> >Penata Tingkat I / IIId</option>
                          <option <?php echo ($pegawai['golongan'] == 'Penata / IIIc') ? "selected": "" ?> >Penata / IIIc</option>
                          <option <?php echo ($pegawai['golongan'] == 'Penata Muda Tingkat I / IIIb') ? "selected": "" ?> >Penata Muda Tingkat I / IIIb</option>
                          <option <?php echo ($pegawai['golongan'] == 'Penata Muda / IIIa') ? "selected": "" ?> >Penata Muda / IIIa</option>
                          <option <?php echo ($pegawai['golongan'] == 'Pengatur Tingkat I / IId') ? "selected": "" ?> >Pengatur Tingkat I / IId</option>
                          <option <?php echo ($pegawai['golongan'] == 'Pengatur / IIc') ? "selected": "" ?> >Pengatur / IIc</option>
                          <option <?php echo ($pegawai['golongan'] == 'Pengatur Muda Tingkat I / IIb') ? "selected": "" ?> >Pengatur Muda Tingkat I / IIb</option>
                          <option <?php echo ($pegawai['golongan'] == 'Pengatur Muda / IIa') ? "selected": "" ?> >Pengatur Muda / IIa</option>
                      </select>
                  <?= form_error('golongan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="date" class="form-control form-control-user" id="tmtgolongan" name="tmtgolongan" placeholder="--TMT pangkat--" value="<?= $pegawai['tmtgolongan'];?>">
                  <?= form_error('tmtgolongan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

                <div class="form-group">
                  <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                          <option <?php echo ($pegawai['jeniskelamin'] == 'Laki-laki') ? "selected": "" ?> >Laki-laki</option>
                          <option <?php echo ($pegawai['jeniskelamin'] == 'Perempuan') ? "selected": "" ?> >Perempuan</option>
                      </select>
                  <?= form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="--jabatan--" value="<?= $pegawai['jabatan'];?>">
                  <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="statuskepegawaian" name="statuskepegawaian" placeholder="--status kepegawaian--" value="<?= $pegawai['statuskepegawaian'];?>">
                  <?= form_error('statuskepegawaian', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="date" class="form-control form-control-user" id="tmtjabatan" name="tmtjabatan" placeholder="TMT Jabatan" value="<?= $pegawai['tmtjabatan'];?>">
                  <?= form_error('tmtjabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="unitkerja" name="unitkerja" placeholder="--unit kerja/posisi--" value="<?= $pegawai['unitkerja'];?>">
                  <?= form_error('unitkerja', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="universitas" name="universitas" placeholder="Universitas/Akademi/Sekolah Tinggi" value="<?= $pegawai['universitas'];?>">
                    <?= form_error('universitas', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" placeholder="--jurusan pendidikan--" value="<?= $pegawai['jurusan'];?>">
                  <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-user" id="tahunlulus" name="tahunlulus" placeholder="--tahun lulus--" value="<?= $pegawai['tahunlulus'];?>">
                  <?= form_error('tahunlulus', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="tempatlahir" name="tempatlahir" placeholder="--tempat lahir--" value="<?= $pegawai['tempatlahir'];?>">
                  <?= form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="date" class="form-control form-control-user" id="tanggallahir" name="tanggallahir" placeholder="--tanggal lahir--" value="<?= $pegawai['tanggallahir'];?>">
                  <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <hr>              
              <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="--nomor NIK--" value="<?= $pegawai['nik'];?>">
                  <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="nokk" name="nokk" placeholder="--nomor kartu keluarga--" value="<?= $pegawai['nokk'];?>">
                  <?= form_error('nokk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                <input type="text" class="form-control form-control-user" id="status" name="status" placeholder="--status--" value="<?= $pegawai['status'];?>">
                  <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-5 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="--alamat--" value="<?= $pegawai['alamat'];?>">
                  <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-2 mb-3 mb-sm-0">
                  <select class="form-control" id="rt" name="rt">
                    <option value="">--RT--</option>
                    <option <?php echo ($pegawai['rt'] == '001') ? "selected": "" ?> value="001" >001</option>
                    <option <?php echo ($pegawai['rt'] == '002') ? "selected": "" ?> value="002" >002</option>
                    <option <?php echo ($pegawai['rt'] == '003') ? "selected": "" ?> value="003" >003</option>
                  </select>
                  <?= form_error('rt', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-2 mb-3 mb-sm-0">
                  <select class="form-control" id="rw" name="rw">
                    <option value="">--RW--</option>
                    <option <?php echo ($pegawai['rw'] == '001') ? "selected": "" ?> value="001" >001</option>
                    <option <?php echo ($pegawai['rw'] == '002') ? "selected": "" ?> value="002" >002</option>
                    <option <?php echo ($pegawai['rw'] == '003') ? "selected": "" ?> value="003" >003</option>
                  </select>
                  <?= form_error('rw', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="desa" name="desa" placeholder="--desa/kelurahan--" value="<?= $pegawai['desa'];?>">
                    <?= form_error('desa', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="kecamatan" name="kecamatan" placeholder="--kecamatan--" value="<?= $pegawai['kecamatan'];?>">
                    <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="kabupaten" name="kabupaten" placeholder="--kabupaten--" value="<?= $pegawai['kabupaten'];?>">
                    <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="provinsi" name="provinsi" placeholder="--provinsi--" value="<?= $pegawai['provinsi'];?>">
                    <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
<hr>
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="npwp" name="npwp" placeholder="--nomor NPWP--" value="<?= $pegawai['npwp'];?>">
                  <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="bpjskesehatan" name="bpjskesehatan" placeholder="--nomor BPJS kesehatan--" value="<?= $pegawai['bpjskesehatan'];?>">
                  <?= form_error('bpjskesehatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="bpjsketenagakerjaan" name="bpjsketenagakerjaan" placeholder="--nomor BPJS ketenagakerjaan--" value="<?= $pegawai['bpjsketenagakerjaan'];?>">
                  <?= form_error('bpjsketenagakerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="phonenumber" name="phonenumber" placeholder="--nomor handphone--" value="<?= $pegawai['phonenumber'];?>">
                  <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="--E-mail--" value="<?= $pegawai['email'];?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="namabank" name="namabank" placeholder="--nama bank--" value="<?= $pegawai['namabank'];?>">
                  <?= form_error('namabank', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-user" id="norek" name="norek" placeholder="--nomor rekening--" value="<?= $pegawai['norek'];?>">
                  <?= form_error('norek', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
<hr>
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="date" class="form-control form-control-user" id="terbitstr" name="terbitstr" placeholder="--tanggal dikeluarkan STR--" value="<?= $pegawai['terbitstr'];?>">
                  <?= form_error('terbitstr', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="str" name="str" placeholder="--nomor STR--" value="<?= $pegawai['str'];?>">
                  <?= form_error('str', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="date" class="form-control form-control-user" id="berlakustr" name="berlakustr" placeholder="--masa berlaku STR--" value="<?= $pegawai['berlakustr'];?>">
                  <?= form_error('berlakustr', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="date" class="form-control form-control-user" id="terbitsip" name="terbitsip" placeholder="--tanggal dikeluarkan SIP--" value="<?= $pegawai['terbitsip'];?>">
                  <?= form_error('terbitsip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="sip" name="sip" placeholder="--nomor SIP--" value="<?= $pegawai['sip'];?>">
                  <?= form_error('sip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="date" class="form-control form-control-user" id="berlakusip" name="berlakusip" placeholder="--masa berlaku SIP--" value="<?= $pegawai['berlakusip'];?>">
                  <?= form_error('berlakusip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <textarea type="text" class="form-control form-control-user" id="pelatihan" name="pelatihan" placeholder="--pelatihan yang pernah diikuti--"><?= $pegawai['pelatihan']; ?></textarea>
                  <?= form_error('pelatihan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Edit
                </button>
              </form>

              </div>
            </div>
          </div>

<br>
<br>
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


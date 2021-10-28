

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-6">Kepegawaian Puskesmas Kelarik</h1>
              <p class="lead">Tambah Pegawai</p>
            </div>
          </div>

          

          <div class="container mb-5">
            <div class="row">
              <div class="col-lg-12">
                
                  <?= form_open_multipart('admin/add'); ?>

                <div class="form-group row">
                      <div class="col-sm-2 mb-3 mb-sm-0">
                        <img class="img-thumbnail" src="<?= base_url('assets/img/profil/').'default.jpg' ?>" style="width:150px;" />
                      </div>
                      <div class="col-sm-6">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id ="image" name="image" >
                          <label class="custom-file-label" for="image">--pilih foto rasio p(4) : l(3)--</label>
                        </div>
                      </div>
                    </div>
                
               <div class="form-group row">
                  <div class="col-sm-2 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nourut" name="nourut" placeholder="--nomor urut--" value="<?= set_value('nourut'); ?>">
                  <?= form_error('nourut', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-5 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="--nama lengkap--" value="<?= set_value('nama'); ?>">
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="--NIP/NRPT--" value="<?= set_value('nip'); ?>">
                  <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <select class="form-control" id="golongan" name="golongan">
                          <option value="">--Golongan Ruang--</option>
                          <option value="Penata Tingkat I / IIId">Penata Tingkat I / IIId</option>
                          <option value="Penata / IIIc">Penata / IIIc</option>
                          <option value="Penata Muda Tingkat I / IIIb">Penata Muda Tingkat I / IIIb</option>
                          <option value="Penata Muda / IIIa">Penata Muda / IIIa</option>
                          <option value="Pengatur Tingkat I / IId">Pengatur Tingkat I / IId</option>
                          <option value="Pengatur / IIc">Pengatur / IIc</option>
                          <option value="Pengatur Muda Tingkat I / IIb">Pengatur Muda Tingkat I / IIb</option>
                          <option value="Pengatur Muda / IIa">Pengatur Muda / IIa</option>
                      </select>
                  <?= form_error('golongan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="date" class="form-control form-control-user" id="tmtgolongan" name="tmtgolongan" placeholder="--TMT pangkat--" value="<?= set_value('tmtgolongan'); ?>">
                  <?= form_error('tmtgolongan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

                <div class="form-group">
                  <select class="form-control" id="jeniskelamin" name="jeniskelamin">
                        <option value="">--jenis kelamin--</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                      </select>
                  <?= form_error('jeniskelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="--jabatan--" value="<?= set_value('jabatan'); ?>">
                  <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="statuskepegawaian" name="statuskepegawaian" placeholder="--status kepegawaian--" value="<?= set_value('statuskepegawaian'); ?>">
                      <?= form_error('statuskepegawaian', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="date" class="form-control form-control-user" id="tmtjabatan" name="tmtjabatan" placeholder="--TMT jabatan--" value="<?= set_value('tmtjabatan'); ?>">
                  <?= form_error('tmtjabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="unitkerja" name="unitkerja" placeholder="--unit kerja/posisi--" value="<?= set_value('unitkerja'); ?>">
                  <?= form_error('unitkerja', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="universitas" name="universitas" placeholder="Universitas/Akademi/Sekolah Tinggi" value="<?= set_value('universitas'); ?>">
                    <?= form_error('universitas', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" placeholder="--jurusan pendidikan--" value="<?= set_value('jurusan'); ?>">
                    <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user" id="tahunlulus" name="tahunlulus" placeholder="--tahun lulus--" value="<?= set_value('tahunlulus'); ?>">
                    <?= form_error('tahunlulus', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>

              <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="tempatlahir" name="tempatlahir" placeholder="--tempat lahir--" value="<?= set_value('tempatlahir'); ?>">
                  <?= form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="date" class="form-control form-control-user" id="tanggallahir" name="tanggallahir" placeholder="--tanggal lahir--" value="<?= set_value('tanggallahir'); ?>">
                  <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
<hr>              
              <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="--nomor NIK--" value="<?= set_value('nik'); ?>">
                  <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="nokk" name="nokk" placeholder="--nomor kartu keluarga--" value="<?= set_value('nokk'); ?>">
                  <?= form_error('nokk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                <input type="text" class="form-control form-control-user" id="status" name="status" placeholder="--status--" value="<?= set_value('status'); ?>">
                  <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-5 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="--alamat--" value="<?= set_value('alamat'); ?>">
                  <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-2 mb-3 mb-sm-0">
                  <select class="form-control" id="rt" name="rt">
                      <option value="">--RT--</option>
                      <option value="001">001</option>
                      <option value="002">002</option>
                      <option value="003">003</option>
                  </select>
                  <?= form_error('rt', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-2 mb-3 mb-sm-0">
                  <select class="form-control" id="rw" name="rw">
                      <option value="">--RW--</option>
                      <option value="001">001</option>
                      <option value="002">002</option>
                      <option value="003">003</option>
                  </select>
                  <?= form_error('rw', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="desa" name="desa" placeholder="--desa/kelurahan--" value="<?= set_value('desa'); ?>">
                    <?= form_error('desa', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="kecamatan" name="kecamatan" placeholder="--kecamatan--" value="<?= set_value('kecamatan'); ?>">
                    <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="kabupaten" name="kabupaten" placeholder="--kabupaten--" value="<?= set_value('kabupaten'); ?>">
                    <?= form_error('kabupaten', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="provinsi" name="provinsi" placeholder="--provinsi--" value="<?= set_value('provinsi'); ?>">
                    <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
<hr>
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="npwp" name="npwp" placeholder="--nomor NPWP--" value="<?= set_value('npwp'); ?>">
                  <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="bpjskesehatan" name="bpjskesehatan" placeholder="--nomor BPJS kesehatan--" value="<?= set_value('bpjskesehatan'); ?>">
                  <?= form_error('bpjskesehatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-user" id="bpjsketenagakerjaan" name="bpjsketenagakerjaan" placeholder="--nomor BPJS ketenagakerjaan--" value="<?= set_value('bpjsketenagakerjaan'); ?>">
                  <?= form_error('bpjsketenagakerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="phonenumber" name="phonenumber" placeholder="--Nomor Handphone--" value="<?= set_value('phonenumber'); ?>">
                  <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="--E-mail--" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="namabank" name="namabank" placeholder="--nama bank--" value="<?= set_value('namabank'); ?>">
                  <?= form_error('namabank', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-user" id="norek" name="norek" placeholder="--nomor rekening--" value="<?= set_value('norek'); ?>">
                  <?= form_error('norek', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
<hr>
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="date" class="form-control form-control-user" id="terbitstr" name="terbitstr" placeholder="--tanggal dikeluarkan STR--" value="<?= set_value('terbitstr'); ?>">
                  <?= form_error('terbitstr', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="str" name="str" placeholder="--nomor STR--" value="<?= set_value('str'); ?>">
                  <?= form_error('str', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="date" class="form-control form-control-user" id="berlakustr" name="berlakustr" placeholder="--masa berlaku STR--" value="<?= set_value('berlakustr'); ?>">
                  <?= form_error('berlakustr', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="date" class="form-control form-control-user" id="terbitsip" name="terbitsip" placeholder="--tanggal dikeluarkan SIP--" value="<?= set_value('terbitsip'); ?>">
                  <?= form_error('terbitsip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="sip" name="sip" placeholder="--nomor SIP--" value="<?= set_value('sip'); ?>">
                  <?= form_error('sip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm-4">
                  <input type="date" class="form-control form-control-user" id="berlakusip" name="berlakusip" placeholder="--masa Berlaku SIP--" value="<?= set_value('berlakusip'); ?>">
                  <?= form_error('berlakusip', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                  <textarea type="text" class="form-control form-control-user" id="pelatihan" name="pelatihan" placeholder="--pelatihan yang pernah diikuti--"><?= set_value('pelatihan'); ?></textarea>
                  <?= form_error('pelatihan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Tambah
                </button>
              </form>

              </div>
            </div>
          </div>




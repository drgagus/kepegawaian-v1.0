

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-6"><a href="<?= base_url('admin/guest'); ?>" class="text-decoration-none text-dark">Guest</a></h1>
              <p class="lead">Hak Akses</p>
            </div>
          </div>
          
<form action="<?= base_url('admin/hakakses'); ?>" class="user" method="post">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-3">
                    <input type="hidden" name="hakakses" value="guest">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2 mt-2" <?php echo ($hakakses['nip'] == 1) ? "checked": "" ?> value=1 id="nip" name="nip">
                        <label class="form-check-label" for="nip">NIP/NRPT</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['pangkat'] == 1) ? "checked": "" ?> value=1 id="pangkat" name="pangkat">
                        <label class="form-check-label" for="pangkat">Pangkat</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['jeniskelamin'] == 1) ? "checked": "" ?> value=1 id="jeniskelamin" name="jeniskelamin">
                        <label class="form-check-label" for="jeniskelamin">Jenis Kelamin</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['jabatan'] == 1) ? "checked": "" ?> value=1 id="jabatan" name="jabatan">
                        <label class="form-check-label" for="jabatan">Jabatan</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['unitkerja'] == 1) ? "checked": "" ?> value=1 id="unitkerja" name="unitkerja">
                        <label class="form-check-label" for="unitkerja">Unit Kerja/Posisi</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['pendidikan'] == 1) ? "checked": "" ?> value=1 id="pendidikan" name="pendidikan">
                        <label class="form-check-label" for="pendidikan">Pendidikan</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['lahir'] == 1) ? "checked": "" ?> value=1 id="lahir" name="lahir">
                        <label class="form-check-label" for="lahir">Tempat, tanggal lahir</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['nik'] == 1) ? "checked": "" ?> value=1 id="nik" name="nik">
                        <label class="form-check-label" for="nik">Nomor NIK</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2 mt-2" <?php echo ($hakakses['nokk'] == 1) ? "checked": "" ?> value=1 id="nokk" name="nokk">
                        <label class="form-check-label" for="nokk">Nomor Kartu Keluarga</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['status'] == 1) ? "checked": "" ?> value=1 id="status" name="status">
                        <label class="form-check-label" for="status">Status</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['alamat'] == 1) ? "checked": "" ?> value=1 id="alamat" name="alamat">
                        <label class="form-check-label" for="alamat">Alamat</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['npwp'] == 1) ? "checked": "" ?> value=1 id="npwp" name="npwp">
                        <label class="form-check-label" for="npwp">Nomor NPWP</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['bpjs'] == 1) ? "checked": "" ?> value=1 id="bpjs" name="bpjs">
                        <label class="form-check-label" for="bpjs">BPJS Kesehatan/Ketenagakerjaan</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['kontak'] == 1) ? "checked": "" ?> value=1 id="kontak" name="kontak">
                        <label class="form-check-label" for="kontak">Kontak</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['bank'] == 1) ? "checked": "" ?> value=1 id="bank" name="bank">
                        <label class="form-check-label" for="bank">Bank&Nomor Rekening</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['str'] == 1) ? "checked": "" ?> value=1 id="str" name="str">
                        <label class="form-check-label" for="str">STR</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['sip'] == 1) ? "checked": "" ?> value=1 id="sip" name="sip">
                        <label class="form-check-label" for="sip">SIP</label>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input mt-2" <?php echo ($hakakses['pelatihan'] == 1) ? "checked": "" ?> value=1 id="pelatihan" name="pelatihan">
                        <label class="form-check-label" for="pelatihan">Pelatihan</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 text-right">
                    <button type="submit" class="btn btn-primary">OK</button>
                </div>
            </div>
        </div>
</form>


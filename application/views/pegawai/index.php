          <div class="container mb-5 " >
            <div class="row pt-3" style="background:#ffff">
              <div class="col-lg-12">
                <h5 class="mb-3">INPUT</h5>
                <?= $this->session->flashdata('message'); ?>

              <?= form_open_multipart('pegawai/index'); ?>
              <div class="form-group">
                  <input type="text" class="form-control" id="judulfile" name="judulfile" Placeholder="Ketik Judul File">
                  <?= form_error('judulfile', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group">
                   <div class="custom-file">
                    <input type="file" class="custom-file-input" id ="berkas" name="berkas" >
                    <label class="custom-file-label" for="berkas">Pilih File</label>
                    <?= form_error('berkas', '<small class="text-danger">', '</small>'); ?>
                  </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Input File
                </button>
              </div>
              </form>
              </div>
            </div>



            <div class="row pt-3" style="background:#c6d4e1;">
              <div class="col-lg-12">
              
                <div class="table-responsive-lg">
                  <table class="table table-hover" style="background:#ffff;">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul File</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if ($files) : ?>
                      <?php $no=1; ?>
                      <?php foreach($files as $file): ?>
                      <tr>
                        <th scope="row"><?= $no++ ; ?></th>
                        <td><a href="<?= base_url('assets/files/').$file['file']; ?>" class="text-decoration-none font-weight-bold" target=_blank><?= $file['judul']; ?></a></td>
                        <td class="text-right">
                            <a href="<?= base_url('pegawai/edit_file/').$file['file_id']; ?>" class="badge badge-warning" >edit</a>
                            <a href="<?= base_url('pegawai/delete_file/').$file['file_id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin Hapus File Ini?');">hapus</a>
                        </td>
                      </tr>
                    <?php endforeach ;?>
                    <?php else : ?>
                      <tr><td colspan="3" class="text-center text-danger">FILE TIDAK ADA</td></tr>
                    <?php endif ;?>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>



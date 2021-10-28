

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-6"><a href="<?= base_url('admin/guest'); ?>" class="text-decoration-none text-dark">Guest</a></h1>
              <!-- <p class="lead">Daftar Pegawai Puskesmas Kelarik</p> -->
            </div>
          </div>

          <div class="container-fluid mb-5">
            <div class="row">
              <div class="col-lg-12">
                <?= $this->session->flashdata('message'); ?>
                <!-- <a href="<?= base_url('admin/hakakses');?>" class="btn btn-sm btn-primary mb-4 ml-2">Hak Akses</a>
                <a href="<?= base_url('admin/guestset');?>" class="btn btn-sm btn-primary mb-4 ml-2">Pengaturan</a> -->
                <div class="btn-group dropright">
                  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= base_url('admin/hakakses');?>">Hak Akses</a>
                    <a class="dropdown-item" href="<?= base_url('admin/guestset');?>">Pengaturan</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" target="_blank" href="<?= base_url('admin/convert_excel');?>">Convert to Excel</a>
                    <a class="dropdown-item" target="_blank" href="<?= base_url('admin/convert_pdf');?>">Convert to Pdf</a>
                  </div>
                </div>
                <div class="table-responsive-lg">
                    <table class="table table-sm table-hover" border="1">
                      <thead class="text-center text-light" style="background:#0b486b">
                        <tr>
                          <th scope="col" rowspan="2">No</th>
                          <th scope="col" rowspan="2">Nama</th>
                          <?php if ($hakakses['nip'] == 1 ) : ?>
                          <th scope="col" rowspan="2">NIP/NRPT</th>
                          <?php endif ;?>
                          <?php if ($hakakses['pangkat'] == 1 ) : ?>
                          <th scope="col" colspan="2">Pangkat</th>
                          <?php endif ;?>
                          <?php if ($hakakses['jeniskelamin'] == 1 ) : ?>
                          <th scope="col" rowspan="2">Jenis Kelamin</th>
                          <?php endif ;?>
                          <?php if ($hakakses['jabatan'] == 1 ) : ?>
                          <th scope="col" colspan="3">Jabatan TMT</th>
                          <?php endif ;?>
                          <?php if ($hakakses['unitkerja'] == 1 ) : ?>
                          <th scope="col" rowspan="2">Unit<br>Kerja</th>
                          <?php endif ;?>
                          <?php if ($hakakses['pendidikan'] == 1 ) : ?>
                          <th scope="col" colspan="3">Pendidikan</th>
                          <?php endif ;?>
                          <?php if ($hakakses['lahir'] == 1 ) : ?>
                          <th scope="col" rowspan="2">Tempat, Tanggal<br>Lahir</th>
                          <?php endif ;?>
                          <?php if ($hakakses['nik'] == 1 ) : ?>
                          <th scope="col" rowspan="2">Nomor<br>NIK</th>
                          <?php endif ;?>
                          <?php if ($hakakses['nokk'] == 1 ) : ?>
                          <th scope="col" rowspan="2">Nomor<br>Kartu Keluarga</th>
                          <?php endif ;?>
                          <?php if ($hakakses['status'] == 1 ) : ?>
                          <th scope="col" rowspan="2">Status</th>
                          <?php endif ;?>
                          <?php if ($hakakses['alamat'] == 1 ) : ?>
                          <th scope="col" rowspan="2">Alamat</th>
                          <?php endif ;?>
                          <?php if ($hakakses['npwp'] == 1 ) : ?>
                          <th scope="col" rowspan="2">NPWP</th>
                          <?php endif ;?>
                          <?php if ($hakakses['bpjs'] == 1 ) : ?>
                          <th scope="col" colspan="2">BPJS</th>
                          <?php endif ;?>
                          <?php if ($hakakses['kontak'] == 1 ) : ?>
                          <th scope="col" colspan="2">Kontak</th>
                          <?php endif ;?>
                          <?php if ($hakakses['bank'] == 1 ) : ?>
                          <th scope="col" colspan="2">Bank</th>
                          <?php endif ;?>
                          <?php if ($hakakses['str'] == 1 ) : ?>
                          <th scope="col" colspan="3">STR</th>
                          <?php endif ;?>
                          <?php if ($hakakses['sip'] == 1 ) : ?>
                          <th scope="col" colspan="3">SIP</th>
                          <?php endif ;?>
                          <?php if ($hakakses['pelatihan'] == 1 ) : ?>
                          <th scope="col" rowspan="2">Pelatihan</th>
                          <?php endif ;?>
                        </tr>
                        <tr>
                          
                          
                        <?php if ($hakakses['pangkat'] == 1 ) : ?>
                          <th scope="col" >GOL/RUANG</th>
                          <th scope="col" >TMT</th>
                        <?php endif ;?>
                          
                        <?php if ($hakakses['jabatan'] == 1 ) : ?>
                          <th scope="col" >Jabatan</th>
                          <th scope="col" >Status<br>Kepegawaian</th>
                          <th scope="col" >Tahun</th>
                        <?php endif ;?>
                          
                        <?php if ($hakakses['pendidikan'] == 1 ) : ?>
                          <th scope="col" >Perguruan Tinggi</th>
                          <th scope="col" >Jurusan</th>
                          <th scope="col" >Tahun<br>Lulus</th>
                        <?php endif ;?>
                        
                        <?php if ($hakakses['bpjs'] == 1 ) : ?>
                          <th scope="col" >Kesehatan</th>
                          <th scope="col" >Ketenagakerjaan</th>
                        <?php endif ;?>
                        
                        
                        <?php if ($hakakses['kontak'] == 1 ) : ?>
                          <th scope="col" >Nomor Handphone</th>
                          <th scope="col" >E-mail</th>
                        <?php endif ;?>

                        <?php if ($hakakses['bank'] == 1 ) : ?>
                          <th scope="col" >Nama Bank</th>
                          <th scope="col" >Nomor<br>Rekening</th>
                        <?php endif ;?>

                        <?php if ($hakakses['str'] == 1 ) : ?>
                          <th scope="col" >Terbit</th>
                          <th scope="col" >Nomor<br>STR</th>
                          <th scope="col" >Berlaku s/d</th>
                        <?php endif ;?>

                        <?php if ($hakakses['sip'] == 1 ) : ?>
                          <th scope="col" >Terbit</th>
                          <th scope="col" >Nomor<br>SIP</th>
                          <th scope="col" >Berlaku s/d</th>
                        <?php endif ;?>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no=1 ;?>
                        <?php foreach ($pegawai as $peg): ?>
                        <tr <?php if ($peg['guest'] == 1 ) : ?> <?php else: ?> class="bg-secondary text-white"<?php endif ;?>>
                          <th scope="row"><?= $no++ ;?></th>
                          <td>
                              <?php if ($peg['guest'] == 1 ) : ?>
                              <a href="<?= base_url('admin/hide/').$peg['id'];?>" class="text-decoration-none text-dark font-weight-bold"><?= $peg['nama'];?></a>
                              <?php else: ?>
                              <a href="<?= base_url('admin/show/').$peg['id'];?>" class="text-decoration-none text-white font-weight-bold"><?= $peg['nama'];?></a>
                              <?php endif ;?>
                          </td>
                          <?php if ($hakakses['nip'] == 1 ) : ?>
                          <td><?= $peg['nip'];?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['pangkat'] == 1 ) : ?>
                          <td><?= $peg['golongan'];?></td>
                          <td><?php if ($peg['tmtgolongan'] == 0000-00-00 ) { }else{ echo date('d-m-Y', strtotime($peg['tmtgolongan'])) ; }?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['jeniskelamin'] == 1 ) : ?>
                          <td><?= $peg['jeniskelamin'];?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['jabatan'] == 1 ) : ?>
                          <td><?= $peg['jabatan'];?></td>
                          <td><?= $peg['statuskepegawaian'];?></td>
                          <td><?php if ($peg['tmtjabatan'] == 0000-00-00 ) { }else{ echo date('Y', strtotime($peg['tmtjabatan'])) ; }?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['unitkerja'] == 1 ) : ?>
                          <td><?= $peg['unitkerja'];?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['pendidikan'] == 1 ) : ?>
                          <td><?= $peg['universitas'];?></td>
                          <td><?= $peg['jurusan'];?></td>
                          <td><?= $peg['tahunlulus'];?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['lahir'] == 1 ) : ?>
                          <td><?php if ($peg['tempatlahir']){ echo $peg['tempatlahir'].", ";}?> <?php if ($peg['tanggallahir'] == 0000-00-00 ){ }else{ echo date('d-m-Y', strtotime($peg['tanggallahir'])) ; }?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['nik'] == 1 ) : ?>
                          <td><?= $peg['nik']; ?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['nokk'] == 1 ) : ?>
                          <td><?= $peg['nokk']; ?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['status'] == 1 ) : ?>
                          <td><?= $peg['status']; ?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['alamat'] == 1 ) : ?>
                          <td><?= $peg['alamat']." ".$peg['desa']." ".$peg['kecamatan']." ".$peg['kabupaten']." ".$peg['provinsi'] ; ?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['npwp'] == 1 ) : ?>
                          <td><?= $peg['npwp']; ?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['bpjs'] == 1 ) : ?>
                          <td><?= $peg['bpjskesehatan'];?></td>
                          <td><?= $peg['bpjsketenagakerjaan'];?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['kontak'] == 1 ) : ?>
                          <td><?= $peg['phonenumber']; ?></td>
                          <td><?= $peg['email']; ?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['bank'] == 1 ) : ?>
                          <td><?= $peg['namabank'];?></td>
                          <td><?= $peg['norek'];?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['str'] == 1 ) : ?>
                          <td><?php if ($peg['terbitstr'] == 0000-00-00 ) { }else{ echo date('d-m-Y', strtotime($peg['terbitstr'])) ; }?></td>
                          <td><?= $peg['str'];?></td>
                          <td><?php if ($peg['berlakustr'] == 0000-00-00 ) { }else{ echo date('d-m-Y', strtotime($peg['berlakustr'])) ; }?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['sip'] == 1 ) : ?>
                          <td><?php if ($peg['terbitsip'] == 0000-00-00 ) { }else{ echo date('d-m-Y', strtotime($peg['terbitsip'])) ; }?></td>
                          <td><?= $peg['sip'];?></td>
                          <td><?php if ($peg['berlakusip'] == 0000-00-00 ) { }else{ echo date('d-m-Y', strtotime($peg['berlakusip'])) ; }?></td>
                          <?php endif ;?>
                          <?php if ($hakakses['pelatihan'] == 1 ) : ?>
                          <td><?=  nl2br($peg['pelatihan']) ?></td>
                          <?php endif ;?>
                        </tr>
                      <?php endforeach ;?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>



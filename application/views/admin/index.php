

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-6">Kepegawaian Puskesmas Kelarik</h1>
              <p class="lead">Daftar Pegawai Puskesmas Kelarik</p>
            </div>
          </div>

          <div class="container-fluid mb-5">
            <div class="row">
              <div class="col-lg-12">
                <?= $this->session->flashdata('message'); ?>
                <a href="<?= base_url('admin/add');?>" class="btn btn-primary mb-4 ml-2">+Pegawai</a>
                <div class="table-responsive-lg">
                  <table class="table table-sm table-hover" border="1">
                    <thead class="text-center text-light" style="background:#0b486b">
                      <tr>
                        <th scope="col" rowspan="2">No</th>
                        <th scope="col" rowspan="2">Nama</th>
                        <th scope="col" rowspan="2">NIP/NRPT</th>
                        <th scope="col" colspan="2">Pangkat</th>
                        <th scope="col" rowspan="2">Jenis Kelamin</th>
                        <th scope="col" colspan="3">Jabatan TMT</th>
                        <th scope="col" rowspan="2">Unit<br>Kerja</th>
                        <th scope="col" colspan="3">Pendidikan</th>
                        <th scope="col" rowspan="2">Tempat, Tanggal<br>Lahir</th>
                      </tr>
                      <tr>
                        
                        
                        
                        <th scope="col" >GOL/RUANG</th>
                        <th scope="col" >TMT</th>
                        
                        <th scope="col" >Jabatan</th>
                        <th scope="col" >Status<br>Kepegawaian</th>
                        <th scope="col" >Tahun</th>
                        
                        <th scope="col" >Perguruan Tinggi</th>
                        <th scope="col" >Jurusan</th>
                        <th scope="col" >Tahun<br>Lulus</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                     <?php $no=1 ;?>
                      <?php foreach ($pegawai as $peg): ?>
                      <tr>
                        <th scope="row"><?= $no++ ;?></th>
                        <td><a href="<?= base_url('admin/detail/').$peg['id'];?>" class="text-decoration-none text-dark font-weight-bold"><?= $peg['nama'];?></a></td>
                        <td><?= $peg['nip'];?></td>
                        <td><?= $peg['golongan'];?></td>
                        <td><?php 
                        if ($peg['tmtgolongan'] == 0000-00-00 )
                        {
                        }else{ 
                          echo date('d-m-Y', strtotime($peg['tmtgolongan'])) ; }?></td>
                        <td><?= $peg['jeniskelamin'];?></td>
                        <td><?= $peg['jabatan'];?></td>
                        <td><?= $peg['statuskepegawaian'];?></td>
                        <td><?php 
                        if ($peg['tmtjabatan'] == 0000-00-00 )
                        {
                        }else{ 
                          echo date('Y', strtotime($peg['tmtjabatan'])) ; }?></td>
                        <td><?= $peg['unitkerja'];?></td>
                        <td><?= $peg['universitas'];?></td>
                        <td><?= $peg['jurusan'];?></td>
                        <td><?= $peg['tahunlulus'];?></td>
                        <td><?php if ($peg['tempatlahir']){ echo $peg['tempatlahir'].", ";}?> <?php if ($peg['tanggallahir'] == 0000-00-00 ){ }else{ echo date('d-m-Y', strtotime($peg['tanggallahir'])) ; }?></td>
                      </tr>
                    <?php endforeach ;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>



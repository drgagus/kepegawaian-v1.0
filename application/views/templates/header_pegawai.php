<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title;?></title>

  <link href="<?=base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url();?>assets/css/shop-homepage.css" rel="stylesheet">

</head>

<body style="background:#0b486b" class="p-0">

<ul class="nav justify-content-end" style="background:#000">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white text-right" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('pegawai');?>">Home</a>
          <a class="dropdown-item" href="<?= base_url('pegawai/profil');?>">Profil Saya</a>
          <a class="dropdown-item" href="<?= base_url('pegawai/pengaturan');?>">Pengaturan</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('auth/logout');?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
</ul>
          <div class="jumbotron jumbotron-fluid p-0" style="background:#fff2bc">
            <div class="container">
              <div class="row">
                <div class="col-2 p-0">
                  <img src="<?= base_url('assets/img/profil/').$user['image']; ?>" class="img-fluid" style="width:100%;">
                </div>
                <div class="col-9 pl-1">
                  <h5 class="display-6"><a href="<?= base_url('pegawai/index');?>" class="text-decoration-none font-weight-bold text-monospace" style="color:#845ec2">
                  <?= $user['nama'];?>
                  </a></h5>
                  <p class="lead"><?= $user['jabatan'];?></p>
                </div>
              </div>
            </div>
          </div>
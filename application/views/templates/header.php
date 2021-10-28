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

<body>

  <nav class="navbar navbar-dark fixed-top" style="background:#000">
      <a class="navbar-brand" href="<?= base_url('admin');?>">
        KEPEGAWAIAN
      </a>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $user['nama'];?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('admin');?>">Home</a>
          <a class="dropdown-item" href="<?= base_url('admin/guest');?>">Akun Guest</a>
          <a class="dropdown-item" href="<?= base_url('auth/password');?>">Ganti Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('auth/logout');?>" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
      
  </nav>

  

<nav class="navbar navbar-default">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Aplikasi Absensi Mahasiswa</a>
    <!-- <a class="navbar-brand" href="#">
        <img alt="Brand" src="<?php echo base_url('/assets/images/logo_unikom.png'); ?>" width="40" height="40">
    </a> -->
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="<?php echo isset($breadcrumb)?'':'active' ?>"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
      <li class="<?php echo $breadcrumb=='Absen'?'active':'' ?>"><?php echo anchor('absen','Absen'); ?></li>
      <li class="<?php echo $breadcrumb=='Rekap'?'active':'' ?>"><?php echo anchor('rekap','Rekap'); ?></li>
      <li class="<?php echo $breadcrumb=='Mahasiswa'?'active':'' ?>"><?php echo anchor('mahasiswa','Mahasiswa'); ?></li>
      <li class="<?php echo $breadcrumb=='Semester'?'active':'' ?>"><?php echo anchor('semester','Semester'); ?></li>
      <li class="<?php echo $breadcrumb=='Kelas'?'active':'' ?>"><?php echo anchor('kelas','Kelas'); ?></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><?php echo anchor('logout','Logout',array('onclick'=>"return confirm('Anda yakin akan keluar dari aplikasi ini?')")); ?></li>
      
    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
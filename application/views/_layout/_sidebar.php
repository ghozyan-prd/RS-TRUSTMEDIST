<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      
      <li <?php if ($page == 'pegawai') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Pegawai</span>
        </a>
      </li>

      <li <?php if ($page == 'pasien') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pasien'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Pasien</span>
        </a>
      </li>

      <li <?php if ($page == 'unit') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Unit'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Unit</span>
        </a>
      </li>

      <li <?php if ($page == 'jadwal') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Jadwal'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Jadwal</span>
        </a>
      </li>
      
      <li <?php if ($page == 'kota') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Kota'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Data Kota</span>
        </a>
      </li>

      <li <?php if ($page == 'demograsi/kota') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Demograsi/kota'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Data Demograsi Kota</span>
        </a>
      </li>

      <li <?php if ($page == 'demograsi/poli') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Demograsi/poli'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Data Demograsi Unit</span>
        </a>
      </li>

      <li <?php if ($page == 'laporan-pendaftaran') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Laporan'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Data Laporan Pendaftaran</span>
        </a>
      </li>

    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
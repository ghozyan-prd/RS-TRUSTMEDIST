<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box-header with-border">
    <form method="GET">
    <div class="row">
        <div class="col-md-2 text-center">
            <input name="start_date" value="<?php echo $start_date ?>" class="form-control form-input datepicker" style="height: 35px;" readonly placeholder="*Tanggal Masuk">
        </div>
        <div class="col-md-2 text-center">
            <input name="end_date" value="<?php echo $end_date ?>" class="form-control form-input datepicker" style="height: 35px;" readonly placeholder="*Tanggal Keluar">
        </div>


        <div class="col-md-4 text-center">
            <input  name="search" value="<?php echo $search ?>" class="form-control" style="height: 35px;" placeholder="Diagnosa">
        </div>
        <div class="col-md-4 text-right">
            <a href="<?php echo base_url('Laporan'); ?>" class="btn btn-danger"><i class="fa fa-times" style="padding-right: 10px"></i> Reset</a>
            <button class="btn btn-primary" type="submit"><i class="fa fa-search" style="padding-right: 10px"></i> Cari</button>
        </div>
    </div>
    </form>
</div>

<div class="box">
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Poli</th>
          <th>Nama Pasien</th>
          <th>Kota</th>
          <th>Cara Bayar</th>
          <th>Diagnosa</th>
          <th>Nama Dokter</th>
          <th>Tanggal Masuk</th>
          <th>Tanggal Keluar</th>

        </tr>
      </thead>
      <tbody>

        <?php
          $no = 1;
          foreach ($kunjunganPasien as $pasien) {
            ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $pasien->poli; ?></td>
              <td><?php echo $pasien->nama_pasien; ?></td>
              <td><?php echo $pasien->kota; ?></td>
              <td><?php echo $pasien->cara_bayar; ?></td>
              <td><?php echo $pasien->diagnosa; ?></td>
              <td><?php echo $pasien->dokter; ?></td>
              <td><?php echo $pasien->tgl_masuk; ?></td>
              <td><?php echo $pasien->tgl_pulang; ?></td>
            </tr>
            <?php
            $no++;
          }
        ?>
      
      </tbody>
    </table>
  </div>
</div>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datepicker/css/bootstrap-datepicker.standalone.css">

<script src="<?php echo base_url(); ?>assets/datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    $('.datepicker').datepicker({

        language: 'id',

        format: 'dd-mm-yyyy',

        todayHighlight: true

    });
</script>

<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Kota</th>
          <th>Diagnosa</th>
          <th>Jumlah</th>
        </tr>
      </thead>
      <tbody>

        <?php
          $no = 1;
          foreach ($dataKota as $kota) {
            ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $kota->poli; ?></td>
              <td><?php echo $kota->diagnosa_name; ?></td>
              <td><?php echo $kota->jml; ?></td>
            </tr>
            <?php
            $no++;
          }
        ?>
      
      </tbody>
    </table>
  </div>
</div>

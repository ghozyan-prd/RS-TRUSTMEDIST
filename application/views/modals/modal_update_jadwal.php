<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Jadwal</h3>
      <form method="POST" id="form-update-jadwal">
        <input type="hidden" name="id" value="<?php echo $dataJadwal->jadwal_id; ?>">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <select name="pegawai_id" class="form-control" aria-describedby="sizing-addon2">
            <?php
            foreach ($dataPegawai as $pegawai) {
              ?>
              <option value="<?php echo $pegawai->pegawai_id; ?>" <?php if($pegawai->pegawai_id == $dataJadwal->pegawai_id){echo "selected='selected'";} ?>><?php echo $pegawai->pegawai_nama; ?>
               
              </option>
              <?php
            }
            ?>
          </select>
        </div>
        
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-cog"></i>
          </span>
          <select name="unit_id" class="form-control" aria-describedby="sizing-addon2">
            <?php
            foreach ($dataUnit as $unit) {
              ?>
              <option value="<?php echo $unit->unit_id; ?>" <?php if($unit->unit_id == $dataJadwal->unit_id){echo "selected='selected'";} ?>><?php echo $unit->unit_nama; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-book"></i>
          </span>
          <select name="hari_id" class="form-control" aria-describedby="sizing-addon2">
            <?php
            foreach ($DataHari as $hari) {
              ?>
              <option value="<?php echo $hari->hari_id; ?>" <?php if($hari->hari_id == $dataJadwal->hari_id){echo "selected='selected'";} ?>><?php echo $hari->nama; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>


        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-new-window"></i>
          </span>
          <select name="jam_mulai" class="form-control" aria-describedby="sizing-addon2">
            <?php
            foreach ($DataJam as $jam) {
              ?>
              <option value="<?php echo $jam->jam; ?>" <?php if($jam->jam == $dataJadwal->jam_mulai){echo "selected='selected'";} ?>><?php echo $jam->jam; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-log-out"></i>
          </span>
          <select name="jam_selesai" class="form-control" aria-describedby="sizing-addon2">
            <?php
            foreach ($DataJam as $jam) {
              ?>
              <option value="<?php echo $jam->jam; ?>" <?php if($jam->jam == $dataJadwal->jam_selesai){echo "selected='selected'";} ?>><?php echo $jam->jam; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>



        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>

<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>
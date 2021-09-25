<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Jadwal</h3>

  <form id="form-tambah-jadwal" method="POST">
      <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <select name="pegawai_id" class="form-control" aria-describedby="sizing-addon2">
            <?php
            foreach ($dataPegawai as $pegawai) {
              ?>
              <option value="<?php echo $pegawai->pegawai_id; ?>">
                <?php echo $pegawai->pegawai_nama; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <select name="unit_id" class="form-control" aria-describedby="sizing-addon2">
            <?php
            foreach ($dataUnit as $unit) {
              ?>
              <option value="<?php echo $unit->unit_id; ?>">
                <?php echo $unit->unit_nama; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <select name="hari_id" class="form-control" aria-describedby="sizing-addon2">
            <?php
            foreach ($DataHari as $hari) {
              ?>
              <option value="<?php echo $hari->hari_id; ?>">
                <?php echo $hari->nama; ?>
              </option>
              <?php
            }
            ?>
          </select>
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-phone-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="Jam Mulai" name="jam_mulai" aria-describedby="sizing-addon2">
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-phone-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="Jam Selesai" name="jam_selesai" aria-describedby="sizing-addon2">
        </div>


    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
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
<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Pegawai</h3>
      <form method="POST" id="form-update-pegawai">
        <input type="hidden" name="id" value="<?php echo $dataPegawai->id; ?>">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Nama" name="pegawai_nama" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->pegawai; ?>">
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-phone-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="Nomor Pegawai" name="pegawai_nomor" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nomor; ?>">
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-phone-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="Nomor SIP Pegawai" name="pegawai_sip" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->sip; ?>">
        </div>

        <div class="input-group form-group" style="display: inline-block;">
          <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-tag"></i>
          </span>
          <span class="input-group-addon">
              <input type="radio" name="pegawai_jenis_kelamin" value='L' id="laki" class="minimal" <?php if($dataPegawai->JK == "L"){echo "checked='checked'";} ?>>
          <label for="laki">Laki-laki</label>
            </span>
            <span class="input-group-addon">
              <input type="radio" name="pegawai_jenis_kelamin" value="P" id="perempuan" class="minimal" <?php if($dataPegawai->JK == "P"){echo "checked='checked'";} ?>> 
          <label for="perempuan">Perempuan</label>
            </span>
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
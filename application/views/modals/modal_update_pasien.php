<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Pasien</h3>
      <form method="POST" id="form-update-pasien">
        <input type="hidden" name="id" value="<?php echo $dataPasien->pasien_id; ?>">
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Nomor Pasien" name="pasien_norm" aria-describedby="sizing-addon2" value="<?php echo $dataPasien->pasien_norm; ?>">
        </div>
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-phone-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="NIK Pasien" name="pasien_nik" aria-describedby="sizing-addon2" value="<?php echo $dataPasien->pasien_nik; ?>">
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-phone-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="Pasien Nama" name="pasien_nama" aria-describedby="sizing-addon2" value="<?php echo $dataPasien->pasien_nama; ?>">
        </div>

        <div class="input-group form-group" style="display: inline-block;">
          <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-tag"></i>
          </span>
          <span class="input-group-addon">
              <input type="radio" name="pasien_kelamin" value='L' id="laki" class="minimal" <?php if($dataPasien->pasien_kelamin == "L"){echo "checked='checked'";} ?>>
          <label for="laki">Laki-laki</label>
            </span>
            <span class="input-group-addon">
              <input type="radio" name="pasien_kelamin" value="P" id="perempuan" class="minimal" <?php if($dataPasien->pasien_kelamin == "P"){echo "checked='checked'";} ?>> 
          <label for="perempuan">Perempuan</label>
            </span>
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-phone-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="Alamat Pasien" name="pasien_alamat" aria-describedby="sizing-addon2" value="<?php echo $dataPasien->pasien_alamat; ?>">
        </div>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-phone-alt"></i>
          </span>
          <input type="text" class="form-control" placeholder="Kota" name="pasien_kota" aria-describedby="sizing-addon2" value="<?php echo $dataPasien->pasien_kota; ?>">
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
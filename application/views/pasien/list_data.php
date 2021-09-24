<?php
  foreach ($dataPasien as $pasien) {
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $pasien->pasien_norm; ?></td>
      <td><?php echo $pasien->pasien_nik; ?></td>
      <td><?php echo $pasien->pasien_nama; ?></td>
      <td><?php echo $pasien->pasien_kelamin; ?></td>
      <td><?php echo $pasien->pasien_alamat; ?></td>
      <td><?php echo $pasien->pasien_kota; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPasien" data-id="<?php echo $pasien->pasien_id; ?>"><i class="glyphicon glyphicon-eye-open"></i></button>
        <button class="btn btn-danger konfirmasiHapus-pasien" data-id="<?php echo $pasien->pasien_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>
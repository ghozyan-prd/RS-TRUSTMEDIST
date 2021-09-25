<?php
  foreach ($dataUnit as $unit) {
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $unit->unit_kode; ?></td>
      <td><?php echo $unit->unit_nama; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataUnit" data-id="<?php echo $unit->unit_id; ?>"><i class="glyphicon glyphicon-eye-open"></i></button>
        <button class="btn btn-danger konfirmasiHapus-unit" data-id="<?php echo $unit->unit_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>
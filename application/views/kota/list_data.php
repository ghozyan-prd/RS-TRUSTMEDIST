<?php
  $no = 1;
  foreach ($dataKota as $kota) {
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $kota->nama; ?></td>
      <td class="text-center" style="min-width:230px;">
          <button class="btn btn-warning update-dataKota" data-id="<?php echo $kota->id; ?>"><i class="glyphicon glyphicon-eye-open"></i></button>
          <button class="btn btn-danger konfirmasiHapus-kota" data-id="<?php echo $kota->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>
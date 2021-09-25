<?php
  foreach ($dataJadwal as $jadwal) {
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $jadwal->pegawai_nama; ?></td>
      <td><?php echo $jadwal->unit_nama; ?></td>
      <td><?php echo $jadwal->hari; ?></td>
      <td><?php echo $jadwal->jam_mulai; ?></td>
      <td><?php echo $jadwal->jam_selesai; ?></td>

      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataJadwal" data-id="<?php echo $jadwal->jadwal_id; ?>"><i class="glyphicon glyphicon-eye-open"></i></button>
        <button class="btn btn-danger konfirmasiHapus-jadwal" data-id="<?php echo $jadwal->jadwal_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-trash"></i></button>
      </td>
    </tr>
    <?php
  }
?>
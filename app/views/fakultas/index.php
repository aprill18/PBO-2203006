<h2>Fakultas</h2>

<a href="<?php echo URL; ?>/fakultas/input" class="btn">Input Fakultas</a>

<table>
      <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th>TAHUN BERDIRI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['fakultas_kode']; ?></td>
                  <td><?php echo $row['fakultas_nama']; ?></td>
                  <td><?php echo $row['fakultas_prodi']; ?></td>
                  <td><?php echo $row['fakultas_tahun_berdiri']; ?></td>
                  <td><a href="<?php echo URL; ?>/fakultas/edit/<?php echo $row['fakultas_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/fakultas/delete/<?php echo $row['fakultas_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>
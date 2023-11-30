<h2>Golongan</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">Input Golongan</a>

<table>
      <tr>
            <th>No</th>
            <th>KODE Golongan</th>
            <th>NAMA Golongan</th>
            <th>EDIT</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td>
                        <?php echo $no; ?>
                  </td>
                  <td>
                        <?php echo $row['gol_kode']; ?>
                  </td>
                  <td>
                        <?php echo $row['gol_nama']; ?>
                  </td>
                  <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
            </tr>
            <?php $no++;
      } ?>

</table>
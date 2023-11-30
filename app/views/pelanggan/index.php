<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>No</th>
                  <th>GOLONGAN</th>
                  <th>NO. Pelanggan</th>
                  <th>NAMA</th>
                  <th>ALAMAT</th>
                  <th>NO HP</th>
                  <th>NIK KTP</th>
                  <th>SERI</th>
                  <th>METERAN</th>
                  <th>STATUS AKTIF</th>
                  <th>USER</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td>
                              <?php echo $no; ?>
                        </td>
                        <td>
                              <?php echo $row['gol_nama']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_no']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_nama']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_alamat']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_hp']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_ktp']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_seri']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_meteran']; ?>
                        </td>
                        <td>
                              <?php echo $row['pel_aktif']; ?>
                        </td>
                        <td>
                              <?php echo $row['user_email']; ?>
                        </td>

                        <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a>
                        </td>
                        <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn"
                                    onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
                  <?php $no++;
            } ?>
      </tbody>
</table>
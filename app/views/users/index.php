<h2>Users</h2>

<a href="<?php echo URL; ?>/users/input" class="btn">Input User</a>

<table>
      <tr>
            <th>No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Nama </th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Kode Pos</th>
            <th>Role</th>
            <th>Aktif</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td>
                        <?php echo $no; ?>
                  </td>
                  <td>
                        <?php echo $row['user_email']; ?>
                  </td>
                  <td>
                        <?php echo $row['user_password']; ?>
                  </td>
                  <td>
                        <?php echo $row['user_nama']; ?>
                  </td>
                  <td>
                        <?php echo $row['user_alamat']; ?>
                  </td>
                  <td>
                        <?php echo $row['user_hp']; ?>
                  </td>
                  <td>
                        <?php echo $row['user_pos']; ?>
                  </td>
                  <td>
                        <?php echo $row['user_role']; ?>
                  </td>
                  <td>
                        <?php echo $row['user_aktif']; ?>
                  </td>
                  <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn"
                              onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
            <?php $no++;
      } ?>
</table>
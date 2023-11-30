<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optgol'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>">
                            <?php echo $opt['gol_nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NO Pelanggan</td>
            <td><input type="text" name="pel_no" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>
                <input type="text" name="pel_nama" required>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <input type="text" name="pel_alamat" required>
            </td>
        </tr>
        <tr>
            <td>No HP </td>
            <td>
                <input type="text" name="pel_hp" required>
            </td>
        </tr>
        <tr>
            <td>NIK KTP</td>
            <td>
                <input type="text" name="pel_ktp" required>
            </td>
        </tr>
        <tr>
            <td>Seri</td>
            <td>
                <input type="text" name="pel_seri" required>
            </td>
        </tr>
        <tr>
            <td>Meteran</td>
            <td>
                <input type="text" name="pel_meteran" required>
            </td>
        </tr>
        <tr>
            <td>STATUS AKTIF</td>
            <td>
                <select name="pel_aktif" id="pel_aktif">
                    <option value="Y">Aktif</option>
                    <option value="N">Non-Aktif</option>
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>ID USER</td>
            <td>
                <select name="pel_id_user" required>
                    <?php foreach ($data['optuser'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>">
                            <?php echo $opt['user_email']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SIMPAN"></td>
        </tr>
    </table>
</form>
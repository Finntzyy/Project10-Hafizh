<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

     public function show()
     {
          $query = "SELECT p.*, g.*, u.* FROM tb_pelanggan p
          INNER JOIN tb_golongan g ON p.pel_id_gol = g.gol_id 
          INNER JOIN tb_users u ON p.pel_id_user = u.user_id 
          ORDER BY pel_id";

          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function optGol()
     {
          $query = "SELECT * FROM tb_golongan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function optUser()
     {
          $query = "SELECT * FROM tb_users";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $pel_id_gol = $_POST['pel_id_gol'];
          $pel_no = $_POST['pel_no'];
          $pel_nama = $_POST['pel_nama'];
          $pel_alamat = $_POST['pel_alamat'];
          $pel_hp = $_POST['pel_hp'];
          $pel_ktp = $_POST['pel_ktp'];
          $pel_seri = $_POST['pel_seri'];
          $pel_meteran = $_POST['pel_meteran'];
          $pel_aktif = $_POST['pel_aktif'];
          $pel_id_user = $_POST['pel_id_user'];

          $sql = "INSERT INTO tb_pelanggan
            SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, 
            pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id_gol", $pel_id_gol);
          $stmt->bindParam(":pel_no", $pel_no);
          $stmt->bindParam(":pel_nama", $pel_nama);
          $stmt->bindParam(":pel_alamat", $pel_alamat);
          $stmt->bindParam(":pel_hp", $pel_hp);
          $stmt->bindParam(":pel_ktp", $pel_ktp);
          $stmt->bindParam(":pel_seri", $pel_seri);
          $stmt->bindParam(":pel_meteran", $pel_meteran);
          $stmt->bindParam(":pel_aktif", $pel_aktif);
          $stmt->bindParam(":pel_id_user", $pel_id_user);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $pel_id_gol = $_POST['pel_id_gol'];
          $pel_no = $_POST['pel_no'];
          $pel_nama = $_POST['pel_nama'];
          $pel_alamat = $_POST['pel_alamat'];
          $pel_hp = $_POST['pel_hp'];
          $pel_ktp = $_POST['pel_ktp'];
          $pel_seri = $_POST['pel_seri'];
          $pel_meteran = $_POST['pel_meteran'];
          $pel_aktif = $_POST['pel_aktif'];
          $pel_id_user = $_POST['pel_id_user'];
          $pel_id = $_POST['pel_id'];

          $sql = "UPDATE tb_pelanggan
          SET pel_id_gol=:pel_id_gol, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, 
            pel_ktp=:pel_ktp, pel_seri=:pel_seri, pel_meteran=:pel_meteran, pel_aktif=:pel_aktif, pel_id_user=:pel_id_user
            WHERE pel_id=:pel_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id_gol", $pel_id_gol);
          $stmt->bindParam(":pel_no", $pel_no);
          $stmt->bindParam(":pel_nama", $pel_nama);
          $stmt->bindParam(":pel_alamat", $pel_alamat);
     }
     public function delete($id)
     {
          $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pel_id", $id);
          $stmt->execute();
     }
}
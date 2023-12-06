<?php

namespace App\Models;

use App\Core\Model;

class Fakultas extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_fakultas";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $fakultas_kode = $_POST['fakultas_kode'];
            $fakultas_nama = $_POST['fakultas_nama'];
            $fakultas_prodi = $_POST['fakultas_prodi'];
            $fakultas_tahun_berdiri = $_POST['fakultas_tahun_berdiri'];

            $sql = "INSERT INTO tb_fakultas
            SET fakultas_kode=:fakultas_kode, fakultas_nama=:fakultas_nama, fakultas_prodi=:fakultas_prodi, fakultas_tahun_berdiri=:fakultas_tahun_berdiri " ;
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":fakultas_kode", $fakultas_kode);
            $stmt->bindParam(":fakultas_nama", $fakultas_nama);
            $stmt->bindParam(":fakultas_prodi", $fakultas_prodi);
            $stmt->bindParam(":fakultas_tahun_berdiri", $fakultas_tahun_berdiri);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_fakultas WHERE fakultas_id=:fakultas_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":fakultas_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $tahun_berdiri = $_POST['tahun_berdiri'];
        $fakultas_id = $_POST['fakultas_id'];

            
                  $sql = "UPDATE tb_fakultas
                  SET fakultas_kode=:fakultas_kode, fakultas_nama=:fakultas_nama, fakultas_prodi=:fakultas_prodi, fakultas_tahun_berdiri=:fakultas_tahun_berdiri
                  WHERE fakultas_id=:fakultas_id";


            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":fakultas_kode", $kode);
            $stmt->bindParam(":fakultas_nama", $nama);
            $stmt->bindParam(":fakultas_prodi", $prodi);
            $stmt->bindParam(":fakultas_tahun_berdiri", $tahun_berdiri);
            $stmt->bindParam(":fakultas_id", $fakultas_id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_fakultas WHERE fakultas_id=:fakultas_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":fakultas_id", $id);
            $stmt->execute();
      }
}

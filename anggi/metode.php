    <!-- Untuk Controller -->
    
    <?php

    require_once('connection.php');

    class Metode{
        // untuk menampilkan data
        public function get_akt()
        {
            global $mysqli;
            $query = $mysqli->query("SELECT * FROM biodata");
            $data = array();
            $result = $mysqli->query($query);
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }

            $response = array(
                'status' => 200,
                'message' => 'Data berhasil diambil',
                'data' => $data
            );

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        // untuk menampilkan data berdasarkan id
        public function get_akt_id($id)
        {
            global $mysqli;
            $query = $mysqli->query("SELECT * FROM biodata WHERE id = '$id'");
            $data = array();
            $result = $mysqli->query($query);
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }

            $response = array(
                'status' => 200,
                'message' => 'Data berhasil diambil',
                'data' => $data
            );

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        // untuk menambahkan data
        public function add_akt($nama_panggung, $nama, $tempat_lahir, $tanggal_lahir, $tanggal_lahir, $tahun_aktif, $jenis_kelamin)
        {
            global $mysqli;
            $query = $mysqli->query("INSERT INTO biodata (nama_panggung, nama, tempat_lahir, tanggal_lahir, tanggal_lahir, tahun_aktif, jenis_kelamin) VALUES ('$nama_panggung', '$nama', '$tempat_lahir', '$tanggal_lahir', '$tanggal_lahir', '$tahun_aktif', '$jenis_kelamin')");

            if($query)
            {
                $response = array(
                    'status' => 200,
                    'message' => 'Data berhasil ditambahkan'
                );
            }
            else
            {
                $response = array(
                    'status' => 400,
                    'message' => 'Data gagal ditambahkan'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        // untuk mengubah data
        public function edit_akt($id, $nama_panggung, $nama, $tempat_lahir, $tanggal_lahir, $tanggal_lahir, $tahun_aktif, $jenis_kelamin)
        {
            global $mysqli;
            $query = $mysqli->query("UPDATE biodata SET nama_panggung = '$nama_panggung', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', tanggal_lahir = '$tanggal_lahir', tahun_aktif = '$tahun_aktif', jenis_kelamin = '$jenis_kelamin' WHERE id = '$id'");

            if($query)
            {
                $response = array(
                    'status' => 200,
                    'message' => 'Data berhasil diubah'
                );
            }
            else
            {
                $response = array(
                    'status' => 400,
                    'message' => 'Data gagal diubah'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        // untuk menghapus data
        public function delete_akt($id)
        {
            global $mysqli;
            $query = $mysqli->query("DELETE FROM biodata WHERE id = '$id'");

            if($query)
            {
                $response = array(
                    'status' => 200,
                    'message' => 'Data berhasil dihapus'
                );
            }
            else
            {
                $response = array(
                    'status' => 400,
                    'message' => 'Data gagal dihapus'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        public function patch_akt($id, $nama_panggung, $nama, $tempat_lahir, $tanggal_lahir, $tanggal_lahir, $tahun_aktif, $jenis_kelamin)
        {
            global $mysqli;
            $query = $mysqli->query("UPDATE biodata SET nama_panggung = '$nama_panggung', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', tanggal_lahir = '$tanggal_lahir', tahun_aktif = '$tahun_aktif', jenis_kelamin = '$jenis_kelamin' WHERE id = '$id'");

            if($query)
            {
                $response = array(
                    'status' => 200,
                    'message' => 'Data berhasil diubah'
                );
            }
            else
            {
                $response = array(
                    'status' => 400,
                    'message' => 'Data gagal diubah'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    ?>
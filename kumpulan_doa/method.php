<?php
	require_once "connect.php";

	class Doa{
		public function get_list_doa(){
			global $mysqli;
			$query	= "SELECT * FROM tabel_doa";
			$data	  = array();
			$result	= $mysqli->query($query);

			while($row = mysqli_fetch_object($result)){
				$data[] = $row;
			}

			$response = array(
				'status'	=> 200,
				'message'	=> 'Pengambilan Data Doa Berhasil.',
				'data'		=> $data
			);

			header('Content-Type: application/json');
			echo json_encode($response);
		}

		public function get_doa_id($id = 0){
			global $mysqli;
			$query	= "SELECT * FROM tabel_doa WHERE id = '$id' LIMIT 1";
			$data	  = array();
			$result	= $mysqli->query($query);

			while($row = mysqli_fetch_object($result)){
				$data[] = $row;
			}

			$response = array(
				'status'	=> 200,
				'message'	=> 'Pengambilan Data Doa Berdasarkan ID Berhasil.',
				'data'		=> $data
			);

			header('Content-Type: application/json');
			echo json_encode($response);
		}

		public function get_nama_doa($doa = 0){
			global $mysqli;
			$query	= "SELECT * FROM tabel_doa WHERE doa = '$doa'";
			$data	  = array();
			$result	= $mysqli->query($query);

			while($row = mysqli_fetch_object($result)){
				$data[] = $row;
			}

			$response = array(
				'status'	=> 200,
				'message'	=> 'Pengambilan Data Doa Berdasarkan Nama Doa Berhasil.',
				'data'		=> $data
			);

			header('Content-Type: application/json');
			echo json_encode($response);
		}

		public function insert_doa(){
		 	global $mysqli;
		 	$arrcheckpost = array('doa' => '', 'ayat' => '', 'latin' => '', 'artinya' => '');
		 	$hitung	      = count(array_intersect_key($_POST, $arrcheckpost));

		 	if($hitung == count($arrcheckpost)){
		 		$result	= mysqli_query($mysqli, "INSERT INTO tabel_doa SET
		 			doa 	  = '$_POST[doa]',
		 			ayat 	  = '$_POST[ayat]',
		 			latin   = '$_POST[latin]',
		 			artinya = '$_POST[artinya]'
		 		");

		 		if($result){
		 			$response = array(
		 				'status' => 200,
		 				'message'=> 'Penambahan Data Doa Berhasil.'
		 			);
		 		}
		 		else{
		 			$response = array(
		 				'status' => 400,
		 				'message'=> 'Penambahan Data Doa Gagal.'
		 			);
		 		}
		 	}
		 	else {
		 		$response = array(
		 			'status' => 400,
		 			'message'=> 'Parameter Tidak Cocok.'
		 		);
		 	}

		 	header('Content-Type: application/json');
		 	echo json_encode($response);
		}

		public function update_doa($id) {
			global $mysqli;
			$arrcheckpost = array('doa' => '', 'ayat' => '', 'latin' => '', 'artinya' => '');
			$hitung	      = count(array_intersect_key($_POST, $arrcheckpost));

			if($hitung == count($arrcheckpost)) {
				$result	= mysqli_query($mysqli, "UPDATE tabel_doa SET
					doa 		  = '$_POST[doa]',
					ayat 		  = '$_POST[ayat]',
					latin 	  = '$_POST[latin]',
					artinya   = '$_POST[artinya]'
					WHERE id  = '$id'
				");

				if($result) {
					$response = array(
						'status' => 200,
						'message'=> 'Pengubahan Data Doa Berhasil.'
					);
				}
				else {
					$response = array(
						'status' => 400,
						'message'=> 'Pengubahan Data Doa Gagal.'
					);
				}
			}
			else {
				$response=array(
					'status' => 400,
					'message'=> 'Parameter Tidak Cocok.'
				);
			}

			header('Content-Type: application/json');
			echo json_encode($response);
		}

		public function put_doa($id) {
			global $mysqli;
			$arrcheckpost = array('doa' => '', 'ayat' => '', 'latin' => '', 'artinya' => '');
			$hitung	      = count(array_intersect_key($_POST, $arrcheckpost));

			if($hitung == count($arrcheckpost)) {
				$result	= mysqli_query($mysqli, "UPDATE tabel_doa SET
					doa 		  = '$_POST[doa]',
					ayat 		  = '$_POST[ayat]',
					latin 	  = '$_POST[latin]',
					artinya   = '$_POST[artinya]'
					WHERE id  = '$id'
				");

				if($result) {
					$response = array(
						'status' => 200,
						'message'=> 'Pengubahan Data Doa Berhasil.'
					);
				}
				else {
					$response = array(
						'status' => 400,
						'message'=> 'Pengubahan Data Doa Gagal.'
					);
				}
			}
			else {
				$response=array(
					'status' => 400,
					'message'=> 'Parameter Tidak Cocok.'
				);
			}

			header('Content-Type: application/json');
			echo json_encode($response);
		}

		public function patch_doa($id) {
			global $mysqli;
			$arrcheckpost = array('doa' => '', 'ayat' => '', 'latin' => '', 'artinya' => '');
			$hitung	      = count(array_intersect_key($_POST, $arrcheckpost));

			if($hitung == count($arrcheckpost)) {
				$result	= mysqli_query($mysqli, "UPDATE tabel_doa SET
					doa 		  = '$_POST[doa]',
					ayat 		  = '$_POST[ayat]',
					latin 	  = '$_POST[latin]',
					artinya   = '$_POST[artinya]'
					WHERE id  = '$id'
				");

				if($result) {
					$response = array(
						'status' => 200,
						'message'=> 'Pengubahan Data Doa Berhasil.'
					);
				}
				else {
					$response = array(
						'status' => 400,
						'message'=> 'Pengubahan Data Doa Gagal.'
					);
				}
			}
			else {
				$response=array(
					'status' => 400,
					'message'=> 'Parameter Tidak Cocok.'
				);
			}

			header('Content-Type: application/json');
			echo json_encode($response);
		}

		public function delete_doa($id){
      global $mysqli;
      $query = "DELETE FROM tabel_doa WHERE id = ".$id;

      if(mysqli_query($mysqli, $query)){
        $response = array(
          'status'  => 200,
          'message' => 'Penghapusan Data Doa Berhasil.'
        );
      }
      else{
        $response = array(
          'status'  => 400,
          'message' => 'Penghapusan Data Doa Gagal.'
        );
      }

      header('Content-Type: application/json');
      echo json_encode($response);
    }
	}
?>

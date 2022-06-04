<?php
    require_once('koneksi.php');

    class Method {
        public function get_infos(){
            global $mysqli;
            $query = "SELECT * FROM tbl_info";
            $data = array();
            $result = $mysqli->query($query);

            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }

            if(!empty($data)){
                $response = array(
                    'status' => 200,
                    'message' => 'Get List Informasi Successfull',
                    'data' => $data
                );
            }
            else{
                $response = array(
                    'status' => 404,
                    'message' => 'Get List Informasi Failed',
                    'data' => 'Informasi tidak ditemukan'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        public function get_info_dengan_nomor($nomor){
            global $mysqli;
            $query = "SELECT * FROM tbl_info WHERE nomor_telepon = ".$nomor;
            $data = array();
            $result = $mysqli->query($query);

            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            
            if(!empty($data)){
                $response = array(
                    'status' => 200,
                    'message' => 'Get List Informasi Successfull',
                    'data' => $data
                );
            }
            else{
                $response = array(
                    'status' => 404,
                    'message' => 'Get List Informasi Failed',
                    'data' => 'Informasi tidak ditemukan'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        public function get_info_dengan_nik($NIK){
            global $mysqli;
            $query = "SELECT * FROM tbl_info WHERE NIK = ".$NIK;
            $data = array();
            $result = $mysqli->query($query);

            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }

            if(!empty($data)){
                $response = array(
                    'status' => 200,
                    'message' => 'Get List Informasi Successfull',
                    'data' => $data
                );
            }
            else{
                $response = array(
                    'status' => 404,
                    'message' => 'Get List Informasi Failed',
                    'data' => 'Informasi tidak ditemukan'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        public function insert_info(){
            global $mysqli;
            $arrcheckpost = array(
                'nomor_telepon' => '',
                'NIK' => '',
            );

            $hitung = count(array_intersect_key($_POST, $arrcheckpost));

            if($hitung == count($arrcheckpost)){
                $select = mysqli_query($mysqli, "SELECT * FROM tbl_info WHERE nomor_telepon = '".$_POST['nomor_telepon']."'");
                if(mysqli_num_rows($select)) {
                    $response =array(
                        'status' => 422,
                        'message' => 'Nomor telepon sudah digunakan'
                    );
                }
                else{
                    $result = $mysqli->query("INSERT INTO tbl_info (nomor_telepon,NIK) VALUES ('".$_POST['nomor_telepon']."', '".$_POST['NIK']."')");

                    if($result){
                        $response =array(
                            'status' => 200,
                            'message' => 'Informasi Added Successfully'
                        );
                    }
        
                    else{
                        $response =array(
                            'status' => 400,
                            'message' => 'Failed to Add Informasi'
                        );
                    }
                }
            }

            else{
                $response =array(
                    'status' => 400,
                    'message' => 'PARAMETER MISSING'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        public function update_dengan_nomor($nomor){
            global $mysqli;
            $arrcheckpost = array(
                'nomor_telepon_baru' => '',
                'NIK_baru' => '',
            );
            parse_str(file_get_contents("php://input"),$post_vars);

            $hitung = count(array_intersect_key($post_vars, $arrcheckpost));
            if($hitung == count($arrcheckpost)){
                $select = mysqli_query($mysqli, "SELECT * FROM tbl_info WHERE nomor_telepon = '".$nomor."'");
                if(!mysqli_num_rows($select)) {
                    $response =array(
                        'status' => 404,
                        'message' => 'Nomor telepon tidak ditemukan'
                    );
                }
                $select1 = mysqli_query($mysqli, "SELECT * FROM tbl_info WHERE nomor_telepon = '".$post_vars['nomor_telepon_baru']."'");
                if(mysqli_num_rows($select1)) {
                    $response =array(
                        'status' => 422,
                        'message' => 'Nomor telepon baru telah digunakan'
                    );
                }
                else{   
                    $result = $mysqli->query("UPDATE tbl_info SET nomor_telepon = '".$post_vars['nomor_telepon_baru']."', NIK = '".$post_vars['NIK_baru']."' WHERE nomor_telepon = ".$nomor);
                    if($result){
                        $response =array(
                            'status' => 200,
                            'message' => 'Informasi Updated Successfully'
                        );
                    }
                    else{
                        $response =array(
                            'status' => 400,
                            'message' => 'Failed to Update Informasi'
                        );
                    }   
                }
            }
            else{
                $response =array(
                    'status' => 400,
                    'message' => 'PARAMETER MISSING'
                );
            }
            header('Content-Type: application/json');
            echo json_encode($response);
        }

        public function update_informasi(){
            global $mysqli;
            $arrcheckpost = array(
                'NIK_lama' => '',
                'NIK_baru' => '',
                'nomor_telepon_baru' => '',
                'nomor_telepon_lama' => '',
            );

            parse_str(file_get_contents("php://input"),$post_vars);

            $hitung = count(array_intersect_key($post_vars, $arrcheckpost));
            
            if($hitung == count($arrcheckpost)){
                $select = mysqli_query($mysqli, "SELECT * FROM tbl_info WHERE nomor_telepon = '".$post_vars['nomor_telepon_lama']."' AND NIK = '".$post_vars['NIK_lama']."'");
                if(!mysqli_num_rows($select)) {
                    $response =array(
                        'status' => 404,
                        'message' => 'NIK / Nomor telepon tidak ditemukan'
                    );
                }
                $select1 = mysqli_query($mysqli, "SELECT * FROM tbl_info WHERE nomor_telepon = '".$post_vars['nomor_telepon_baru']."'");
                if(mysqli_num_rows($select1)) {
                    $response =array(
                        'status' => 422,
                        'message' => 'Nomor telepon baru telah digunakan'
                    );
                }
                else{
                    $result = $mysqli->query("UPDATE tbl_info SET nomor_telepon = '".$post_vars['nomor_telepon_baru']."', NIK = '".$post_vars['NIK_baru']."' WHERE NIK = " .$post_vars['NIK_lama']. " AND nomor_telepon = " .$post_vars['nomor_telepon_lama']);

                    if($result){
                        $response =array(
                            'status' => 200,
                            'message' => 'Informasi Updated Successfully'
                        );
                    }
        
                    else{
                        $response =array(
                            'status' => 400,
                            'message' => 'Failed to Update Informasi'
                        );
                    }
                }
            }
            else{
                $response =array(
                    'status' => 400,
                    'message' => 'PARAMETER MISSING'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        public function patch_NIK($nomor){
            global $mysqli;
            $arrcheckpost = array(
                'NIK_baru' => '',
            );

            parse_str(file_get_contents("php://input"),$post_vars);

            $hitung = count(array_intersect_key($post_vars, $arrcheckpost));

            if($hitung == count($arrcheckpost)){
                $select = mysqli_query($mysqli, "SELECT * FROM tbl_info WHERE nomor_telepon = '".$nomor."'");
                if(!mysqli_num_rows($select)){
                    $response =array(
                        'status' => 404,
                        'message' => 'Nomor telepon tidak ditemukan'
                    );
                }
                else{
                    $result = $mysqli->query("UPDATE tbl_info SET NIK = '".$post_vars['NIK_baru']."' WHERE nomor_telepon = ".$nomor);

                    if($result){
                        $response =array(
                            'status' => 200,
                            'message' => 'Informasi Updated Successfully'
                        );
                    }
        
                    else{
                        $response =array(
                            'status' => 400,
                            'message' => 'Failed to Update Informasi'
                        );
                    }
                }
            }

            else{
                $response =array(
                    'status' => 400,
                    'message' => 'PARAMETER MISSING'
                );
            }

            header('Content-Type: application/json');
            echo json_encode($response);
        }

        public function delete_info($nomor){
            global $mysqli;
            $query = "DELETE FROM tbl_info WHERE nomor_telepon = ".$nomor;
            $select = mysqli_query($mysqli, "SELECT * FROM tbl_info WHERE nomor_telepon = '".$nomor."'");
            if(!mysqli_num_rows($select)) {
                $response =array(
                    'status' => 404,
                    'message' => 'Nomor telepon tidak ditemukan'
                );
            }
            else{
                if($mysqli->query($query)){
                    $response = array(
                        'status' => 200,
                        'message' => 'Informasi Deleted Successfully'
                    );
                }

                else{
                    $response = array(
                        'status' => 400,
                        'message' => 'Failed to Delete Informasi'
                    );
                }
            }
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
?>
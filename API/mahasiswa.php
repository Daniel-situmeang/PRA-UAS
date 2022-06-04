<!-- mahasiswa.php untuk mengidentifikasi request method -->
<?php

require_once("method.php"); // manggil file method.php atau controller
$mhs = new Method(); // manggil object dari class Method di file method.php

$request_method = $_SERVER["REQUEST_METHOD"]; // mengambil method request dari client (postman)

switch ($request_method) { // mengecek method request
    CASE 'GET':
        if(!empty($_GET["id"])){
            $id = intval($_GET["id"]);
            $mhs->get_mhs($id); // contoh memanggil fungsi
        }
        else{
            $mhs->get_mhss();
        }
    break;

    CASE 'POST':
        $mhs->insert_mhs();
    break;

    CASE 'PUT':
    if(!empty($_GET["id"])){
        $id = intval($_GET["id"]);
        $mhs->update_mhs($id);
    }
        

    CASE 'DELETE':
        if(!empty($_GET["id"])){
            $id = intval($_GET["id"]);
            $mhs->delete_mhs($id);
        }

    break;

    CASE 'PATCH':
        if(!empty($_GET["id"])){
            $id = intval($_GET["id"]);
            $mhs->patch_mhs($id);
        }
    break;

}

?>
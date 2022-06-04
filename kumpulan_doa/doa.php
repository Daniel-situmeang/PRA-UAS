<?php
require_once "method.php";

  $doa = new Method();

	$request_method = $_SERVER["REQUEST_METHOD"];

	switch($request_method){
		case 'GET':
			if(!empty($_GET["id"])){
				$id = intval($_GET["id"]);
				$doa->get_doa_id($id);
			}
			elseif(!empty($_GET["doa"])){
						$nama_doa = strval($_GET["doa"]);
						$doa->get_nama_doa($nama_doa);
			}
			else {
						$doa->get_list_doa();
			}
					
		break;

		case 'POST':
	 		$doa->insert_doa();
		break;

    	case 'PATCH':
			if(!empty($_GET["id"])){
				$id = intval($_GET["id"]);
				$isidoa = $_GET["doa"];
				$ayat = $_GET["ayat"];
				$latin = $_GET["latin"];
				$artinya = $_GET["artinya"];
				$doa->patch_doa($id,$isidoa,$ayat,$latin,$artinya);
			}
	 	break;
		
    	case 'DELETE':
			if(!empty($_GET["id"])){
				$id = intval($_GET["id"]);
				$doa->delete_doa($id);
			}
	 	break;

		 case 'PUT':
			if(!empty($_POST["id"])){
				$id = intval($_POST["id"]);
				$doa->put_doa($id);
			}
	 	break;
	}
?>

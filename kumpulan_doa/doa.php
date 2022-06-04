<?php
	require_once "method.php";

  $doa            = new Doa();

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

    // case 'PUT':
    //   if(!empty($_GET["id"])){
    //     $id = intval($_GET["id"]);
    //     $doa->update_doa($id);
    //   }
    // break;

    case 'PATCH':
      if(!empty($_GET["id"])){
        $id = intval($_GET["id"]);
        $doa->patch_doa($id);
      }
	 	break;
		
    case 'DELETE':
      if(!empty($_GET["id"])){
        $id = intval($_GET["id"]);
        $doa->delete_doa($id);
      }
	 	break;

		default:
			header("HTTP/1.0 405 Method Not Allowed");
    break;
  break;
}
?>

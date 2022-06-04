<?php
    require_once("method.php");
    $info = new Method();

    $request_method = $_SERVER["REQUEST_METHOD"];
    switch ($request_method) {
        CASE 'GET':
            if(!empty($_GET["nomor_telepon"])){
                $nomor = intval($_GET["nomor_telepon"]);
                $info->get_info_dengan_nomor($nomor);
            }
            elseif(!empty($_GET["NIK"])){
                $NIK = intval($_GET["NIK"]);
                $info->get_info_dengan_nik($NIK);
            }
            else{
                $info->get_infos();
            }
        break;

        CASE 'POST':
            $info->insert_info();
        break;

        CASE 'PUT':
        if(!empty($_GET["nomor_telepon"])){
            $nomor = intval($_GET["nomor_telepon"]);
            $info->update_dengan_nomor($nomor);
        }
        else{
            $info->update_informasi();
        }
        break;

        CASE 'PATCH':
        if(!empty($_GET["nomor_telepon"])){
            $nomor = intval($_GET["nomor_telepon"]);
            $info->patch_NIK($nomor);
        }
        break;

        CASE 'DELETE':
            if(!empty($_GET["nomor_telepon"])){
                $nomor = intval($_GET["nomor_telepon"]);
                $info->delete_info($nomor);
            }
        break;
    }
?>
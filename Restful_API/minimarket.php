<?php

require_once("method.php");
$mini = new Method();

$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    CASE 'GET':
        if(!empty($_GET["id"])){
            $id = intval($_GET["id"]);
            $mini->get_mini($id);
        }
        else{
            $mini->get_mini();
        }
    break;

    CASE 'POST':
        if(!empty($_GET["id"])){
            $id = intval($_GET["id"]);
            $mini->update_mini($id);
        }
        else{
            $mini->insert_mini();
        }
    break;

    CASE 'DELETE':
        if(!empty($_GET["id"])){
            $id = intval($_GET["id"]);
            $mini->delete_mini($id);
        }

    break;

    CASE 'PATCH':
        if(!empty($_GET["id"])){
            $id = intval($_GET["id"]);
            $mini->patch_mhs($id);
        }
    break;

}

?>
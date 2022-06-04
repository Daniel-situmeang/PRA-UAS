<?php

header("Content-Type: application/json");

require "data.php";

if($_GET['API_KEY'] != "kodeA"){
    response(401, "Invalid API Key", NULL);
}
        
if(!empty($_GET['name'])){
        $name = $_GET['name'];
        $price = getPrice($name);
    
    if(empty($price)){
        response(400, "Product not found",NULL);
    }else{
        response(200, "Product found", $price);
    }
}
    
else{
    response(400, "Invalid Request", NULL);
}

function response($status, $status_message, $data){
    header("HTTP/1.1 ".$status);
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
}

?>
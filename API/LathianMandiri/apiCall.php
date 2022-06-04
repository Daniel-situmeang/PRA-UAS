<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];

    $url = "http://localhost/API/LathianMandiri/api.php?name=".$name;
    $client = curl_init($url);

    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);

    curl_close($client);
    $result = json_decode($response);

    echo "Price of ".$name." = ".$result->data;
}

?>
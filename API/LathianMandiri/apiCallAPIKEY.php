<?php 

if(isset($_POST['API_KEY'])){
    $API_KEY = $_POST['API_KEY'];
    $name = $_POST['name'];
    $url = "http://localhost/API/LathianMandiri/apiAPIKEY.php?name=".$name."&API_KEY=".$API_KEY;

    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    $result = json_decode($response);

    if($result->status == 401){
        echo " Invalid API Key Please Try Again ";
    }

    else{
        echo "Price of ".$name." = ".$result->data->price;
        echo "</br>";
        echo "Model of ".$name." = ".$result->data->model;
        echo "</br>";
    }
}

?>
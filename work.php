<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $color = $_POST['color'];
    $jsonString = file_get_contents('data.json');
    $data = json_decode($jsonString, true);
    $data[0]['color'] = (string) $color;

    $newJsonString = json_encode($data);
    file_put_contents('data.json', $newJsonString);
    
    $_SESSION["sucess"] = 1;
    header('Location: index.php');
    

}



?>
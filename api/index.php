<?php

//http://localhost/angular-api-put/api/index.php

require '../dbconfig.php';


$post = file_get_contents("php://input");

$content = (array)json_decode($post,true);



$sql ="insert into  user(`name`) values(' " . $content['name'] . " ')";

$result = $mysqli->query($sql);

$last_id = mysqli_insert_id($mysqli);

print_r("last inserted data id is = " .$last_id );


?>
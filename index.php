<?php

echo "Hello World!";

$data = file_get_contents('php://input');
file_put_contents("data.csv", $data, FILE_APPEND | LOCK_EX);

#echo $data;

#echo file_get_contents("data.csv");

?>

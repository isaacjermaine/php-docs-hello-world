<?php

echo "Hello World!";

$data = file_get_contents('php://input');

$db = fopen("data.csv", "w") or die("can't open");
fwrite($db, $data);
fclose($db);

#echo $data;

#echo file_get_contents("data.csv");

?>

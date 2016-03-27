<?php 
require'conn.php';
//var_dump($_POST);

$data= json_decode(file_get_contents("php://input"));

$firstName =$data->name;

$lastName=$data->lastName; 

echo "succes ...";

if ($insert = $db->query("INSERT INTO cosas(name,lastName) VALUES('$firstName','$lastName')")) {
	echo "rows". $db->affected_rows;
}






 ?>
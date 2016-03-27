<?php 
require'conn.php';
$query="SELECT * FROM cosas";
$select = $db->query($query);

	$data = array();

	while($row = mysqli_fetch_array($select)) {
   	$data[]=array(
   		'id' => $row['id'],
   		'name'=> $row['name'],
   		'lastName'=> $row['lastName']);
	}

	header('Context-type: application/json');	
	echo json_encode($data);

	?>
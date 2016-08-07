<?php  

// require_once('../../includes/initialize.php');

// for ($i=1; $i <= 105 ; $i++) { 
// 	echo $i . "<br/>";
// 	$db->query("insert into numbers(id,firstname) values ({$i}, 'text')");
// }

// $db->close_connection(); 


if ( !empty($_GET['id'])) {
	echo "id is set";
} else {
	echo "id is not set";
}

?>
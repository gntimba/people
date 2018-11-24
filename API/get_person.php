<?php
error_reporting(0);
header('content-type: application/json');
include_once( 'config.php' );

//getting all people
$sort='';
if(isset($_GET['sort']) and $_GET['sort']!='')
$sort='order by '.$_GET['sort'];

$sql = "select * from person $sort";

$response = array();

try {
	$db = new db();
	$db = $db->connect();
	$stmt = $db->query( $sql );
	$people = $stmt->fetchAll( PDO::FETCH_OBJ );
	$db = null;
	echo json_encode(array('table'=>$people));


} catch ( PDOException $e ) {
	echo '{"error": {"text": "' . $e->getMessage() . '"}}';
}

?>
<?php
error_reporting(0);
header('content-type: application/json');
include_once( 'config.php' );

//getting all people

$sql = "select * from person";

$response = array();

try {
	$db = new db();
	$db = $db->connect();
	$stmt = $db->query( $sql );
	$people = $stmt->fetchAll( PDO::FETCH_OBJ );
	$db = null;
	echo json_encode(array('server_response'=>$people));


} catch ( PDOException $e ) {
	echo '{"error": {"text": "' . $e->getMessage() . '"}}';
}

?>
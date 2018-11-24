<?php
error_reporting(0);
header('content-type: application/json');
include('config.php');
//post values
$firstName=$_POST['firstName'];
$LastName=$_POST['lastName'];
$email=$_POST['email'];
$DOB=$_POST['DOB'];
$cellular=$_POST['cellular'];

if ( isset( $firstName )and isset( $LastName )and isset( $email )and isset( $DOB)and isset( $cellular) ) {
//code to insert and execute
		$sql = "insert INTO person (First_Name,Last_Name,Birth_date,cellphone,email)
values('$firstName','$LastName','$DOB','$cellular','$email')";
		try {
			$db = new db();
			$db = $db->connect();
			$stmt = $db->query( $sql );
			echo json_encode(array('feedback'=>array('message'=>$firstName.' '. $LastName.' was captured successfully','status'=>'1')));
			

		} catch ( PDOException $e ) {
			//sql error response
			echo json_encode(array('feedback'=>array($message=>$e->getMessage(),'status'=>'100')));
			http_response_code(500);
		}
	

} else{
	//global error response
	echo json_encode(array('feedback'=>array($message=>'No Data Was Posted or missing Data','status'=>'100')));
	
	http_response_code(412);
}
?>
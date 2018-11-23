<?php
include('config.php');
if ( isset( $review->apperance )and isset( $review->taste )and isset( $review->Aroma )and isset( $review->beerID )and isset( $review->user ) ) {

	if ( $review->validation() == 1 ) {


		$sql = "insert INTO review (appearance,aroma,taste,beerID,username,overall)
values('" . $review->apperance . "','" . $review->Aroma . "','" . $review->taste . "','" . $review->beerID . "','" . $review->user . "','" . $review->overall() . "')";
		//$sql= ;


		try {
			$db = new db();
			$db = $db->connect();
			$stmt = $db->query( $sql );

			//var_dump($users[0]);
			// $users[0]->username;

			echo '{"sever_response" : [{"message":"Rating Was succesfully added"},{"status" :"1"}]}';


			//json_encode(array("sever_response"=>$stri));

			//echo '{"sever_response" : '.$stri.'}';



		} catch ( PDOException $e ) {
			echo '{"error": {"text": "' . $e->getMessage() . '"}}';
		}
	} else {
		echo '{"error": [{"aroma": "' . $review->messAroma . '"},{"appearance": "' . $review->messApp . '"},{"taste": "' . $review->messTaste . '"},{"status": "3"}]}';
	}

} else{
	echo '{"error": [{"text": "No Data Was Posted or missing Data"},{"status":"100"}]}';
	http_response_code(404);
}
?>
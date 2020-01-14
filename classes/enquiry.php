<?php
class Enquiry {
	private $conn;

	function __construct($db) {
		$this->conn = $db->db;
	}
	function addEnquiry() {
		$query = "INSERT INTO `enquiry`(`date`, `name`, `mobile_no`, `status`, `message`, `log_user`) VALUES(:edate , :ename, :mobile_no, :status, :message, :log_user)";


		$stmt  = $this->conn->prepare( $query );
		$stmt->bindParam( 'edate', $_POST['enquiry_date'] );
		$stmt->bindParam( 'ename', $_POST['name'] );
		$stmt->bindParam( 'mobile_no', $_POST['mobile_no'] );
		$stmt->bindParam( 'status', $_POST['status'] );
		$stmt->bindParam( 'message', $_POST['message'] );
		$stmt->bindParam( 'log_user', $_SESSION['user_name'] );
		$result = $stmt->execute();
		echo '<pre>Result : ';
		print_r($result);
		echo 'count '. $stmt->rowCount();
		echo '</pre>';
		die('----');
		if($stmt->rowCount()){
			return 1;
		}
		else{
			return 0;
		}

	}
}
<?php
//namespace ST;
class Users{
    private $conn;
    private $userid;
    private $username;
    private $password;
    private $email;
    function __construct($db){
        $this->conn = $db->db;
    }
    function authenticateUser(){
        $students = [];
        $query = 'SELECT * FROM `tbl_detail` WHERE `uname` = :username AND `upass` = :password';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('username', $_POST['username']);
        $stmt->bindParam('password', $_POST['password']);
        $result = $stmt->execute();

        if($stmt->rowCount()){
            $user = $stmt->fetchObject();
            return $user->uname;
        }else{
            return 0;
        }
    }
}
?>
<?php
//login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {            					 
  
 }  
 else  
 {  
      header("location:index.php");  
 }  
	include("connection.php");
	
	if(isset($_GET["uId"])){
	$ID_request_table = $_GET["uId"];
	
	$stmt = $conn->prepare("DELETE FROM request_table WHERE ID_request_table = :ID_request_table");

	$stmt->bindValue(':ID_request_table', $ID_request_table);	
	$stmt->execute();
	echo " <script>alert(' Delete data Successfully ')</script>". $ID_user_table ;
	echo "<script>window.open('view_patients.php','_self')</script>";

}

?>
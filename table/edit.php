<?php
	include('../conn.php');
	
	$id=$_GET['id'];
	
	$issue_status=$_POST['issue_status'];
	
	
	mysqli_query($conn,"update report_site set issue_status = '$issue_status'  where id='$id'");
	header('location:../reqStatHandler.php');

?>
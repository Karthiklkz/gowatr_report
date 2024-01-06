<?php
	include('../conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from report_site where id='$id'");
	header('location:../reqStatHandler.php');

?>
<?php
	include('../conn.php');
	
	$site_name=$_POST['site_name'];
	$power=$_POST['power'];
	$power_issue=$_POST['power_issue'];
	
	mysqli_query($conn,"insert into report_site (site_name, power, power_issue) values ('$site_name', '$power', '$power_issue')");
	header('location:../reqStatHandler.php');

?>
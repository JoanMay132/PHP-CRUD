

<?php
	$con=mysqli_connect("localhost","root","","paginita");

	// Check connection
	if (!$con){
		die(mysqli_connect_error($con));
	} 
?>
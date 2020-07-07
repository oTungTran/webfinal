<?php
$conn_string="host=ec2-34-197-141-7.compute-1.amazonaws.com dbname=d8utqot0l3p18p user=tteblxrbhxziyj password=6cd2486ab041cf5da0900760f8e916a9f2a8a8510c247deb820bfeb0912b6d01";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAccount WHERE _user='".$username."' AND _pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if($row==1)
{	
	header("Location: viewProduct.html");
}
else
{
	echo "Login Failed";
}
?>
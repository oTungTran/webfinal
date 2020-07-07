<?php
$conn_string="host=ec2-54-81-37-115.compute-1.amazonaws.com port=5432 dbname=dbi738tg8htnh2 user=nxuguqscxtzzbs password=a30cb700104ae1a63d23d88d7ea43dc577c5cd48356117eb5d52143095284a14";
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

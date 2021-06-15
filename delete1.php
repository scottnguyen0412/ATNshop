<?php
$host_heroku = "ec2-54-224-194-214.compute-1.amazonaws.com";
$db_heroku = "d1b7erismhj8n3";
$user_heroku = "irihpzeafcijwa";
$pw_heroku = "f95d0c3c2fbeff2f8f8a836c4fbc1a31a6018cf2adbfb635f1829a96e436b107";
$conn_string = "host=$host_heroku port=5432 dbname=$db_heroku user=$user_heroku password=$pw_heroku";
$pg_heroku = pg_connect($conn_string);
if (!$pg_heroku)
{
die('Error: Could not connect: ' . pg_last_error());
}
$productid=$_GET['pi'];
$query = "DELETE FROM atnshop1 WHERE productid = '$productid'";
$data = pg_query($pg_heroku,$query);
if($data)
{
 echo "<script>alert('Delete Successfully!')</script>";
?>
<meta http-equiv="refresh" content="0; url=https://atnshopapp1.herokuapp.com/login1.php" />
<?php
}
else
{
 echo "Failed to delete.";
}
?>

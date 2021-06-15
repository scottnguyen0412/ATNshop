<html>
<head>
 <ul>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<a href="index.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-out"></span> Log out</a> 
 </ul>
 </head>
 <body>
 <style>
 body {
    background-image: url('adminatn.png');
 background-attachment: fixed;
 background-size: 100%100%;
 }
 </style>
   <style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
 <style>
   table, th, td {
   border: 1px solid violet;
 }
}
</style>
  <table style="width:100%">
  <thread style="text-align:left">
                <tr>
		
                <th style="background-color:#FFFF00"><p style="color:darkblue">Product ID<p></th>
                <th style="background-color:#FF7F50"><p style="color:darkblue">Product Name<p></th>
                <th style="background-color:#FFFF00"><p style="color:darkblue">Product Price<p></th>
                <th style="background-color:#FF7F50"><p style="color:darkblue">Quantity<p></th>
                <th style="background-color:#BA55D3" colspan="2" align="center">Operation</th>
                </tr>
<?php
echo '<h1 style="color:orange"> Databse of ATN Shop 1</h1>';
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
 $query = 'select * from atnshop1';
$data = pg_query($pg_heroku, $query);
 $total = pg_num_rows($data);
if($total!=0)
{
while ($result=pg_fetch_assoc($data))
{
echo "
<tr>
<td>".$result['productid']."</td>
<td>".$result['productname']."</td>
<td>".$result['productprice']."</td>
<td>".$result['quantityonhand']."</td>
</tr>
";
}
}

?>
<style>
   table, th, td {
   border: 1px solid violet;
 }
}
</style>
  <table style="width:100%">
  <thread style="text-align:left">
                <tr>
		
                <th style="background-color:#FFFF00"><p style="color:darkblue">Product ID<p></th>
                <th style="background-color:#FF7F50"><p style="color:darkblue">Product Name<p></th>
                <th style="background-color:#FFFF00"><p style="color:darkblue">Product Price<p></th>
                <th style="background-color:#FF7F50"><p style="color:darkblue">Quantity<p></th>
                <th style="background-color:#BA55D3" colspan="2" align="center">Operation</th>
                </tr>
<?php
echo '<p>Databse of ATN Shop 2</p>';
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
 $query = 'select * from atnshop2';
$data = pg_query($pg_heroku, $query);
 $total = pg_num_rows($data);
if($total!=0)
{
while ($result=pg_fetch_assoc($data))
{
echo "
<tr>
<td>".$result['productid']."</td>
<td>".$result['productname']."</td>
<td>".$result['productprice']."</td>
<td>".$result['quantityonhand']."</td>
</tr>
";
}
}

?>
</body>
</html>

<html>
<head>
 <ul>
 <li> <a href="index.php"> Log out</a> </li>
 </ul>
 </head>
 <body>
 <style>
 body {
 background-image: url('login1.png');
 background-color: #cccccc;
  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
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
                <th style="background-color:#FFFF00">Product ID</th>
                <th style="background-color:#FF7F50">Product Name</th>
                <th style="background-color:#FFFF00">Product Price</th>
                <th style="background-color:#FF7F50">Quantity</th>
                <th style="background-color:#BA55D3" colspan="2" align="center">Operation</th>
                </tr>
<?php
echo '<p> ATN Shop 1 </p>';
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
<td><a
href='update1.php?pi=$result[productid]&pn=$result[productname]&pp=$result[productprice]&qt=$result[quantityonhand]'>
Edit/Update</td>
<td><a href='delete1.php?pi=$result[productid]'>Delete</td>
</tr>
";
}
}

?>
 <form action="https://atnshopapp1.herokuapp.com/add1.php">
 <input type="submit" value="Add" />
</form>
</body>
</html>

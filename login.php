<html>
<head>
    <link rel="stylesheet" href ="styles.css">
    <title> Login </title>
    <marquee bgcolor="gray" 
             scrollamount="12" 
             direction="left" 
             onmouseover="this.stop();" 
             onmouseout="this.start();">
        <center>
		<?php
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$date = getdate();
			echo "<hr>";
			echo "Today is: ".$date['weekday']."--".$date['mday']."/".$date['mon']."/".$date['year']."--".$date['hours'].":".$date['minutes'].":".$date['seconds'];
		?>
	  </center>
    </marquee>
    <ul> 
        <li> <a href="index.php">HOMEPAGE</a></li>
        <li> <a href="">LOGIN</a></li>       
    </ul>
  </head>
    <body>
      <style>
        body {
          background-image: url('background1.jpg');
          background-attachment: fixed;
          background-size: 100%100%;
        } 
      </style>
      <div>
	      <h2 style="color:black;" align="center">LOGIN SESSION</h2>
		<form style="color:black;" align="center" method="POST">
		Username:<input type="text" name="userid"> <br><br>
		Password:&nbsp;<input type="password" name="password"> <br><br>
	<input type="submit" value="LOGIN">
    </form>
    </div>
	<?php
	    if(isset($_POST['userid']) && isset($_POST['password']))
    		{
    		$user = $_POST['userid'];
    		$pass= $_POST['password'];
    		}
        	if($user == "shop1" && $pass == "shop1"){
           	header("location:shop1.php");
        	}
	    	if($user == "shop2" && $pass == "shop2"){
           	header("location:shop2.php");
        	}
		if($user == "admin" && $pass == "admin"){
		header("location:admin.php");
		}  
	?> 
    </body>
</html>

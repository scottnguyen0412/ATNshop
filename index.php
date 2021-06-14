<html>
  <head>
    <link rel="stylesheet" href ="styles.css">
    <title> ATN Shop </title>
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
        <li> <a href="">HOMEPAGE</a></li>
        <li> <a href="login.php">LOGIN </a></li>        
    </ul>
  </head>
    <body>
      <style>
        body {
          background-image: url('background.jpg');
          background-attachment: fixed;
          background-size: 100%100%;
        } 
      </style>
    </body>
</html>

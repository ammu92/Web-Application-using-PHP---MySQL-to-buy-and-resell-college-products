<!DOCTYPE html>
<html lang="en">
<head>
   <title>College Bazar</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
	<script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/gallery_init.js"></script>
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/IE9.js"></script>
  <![endif]-->
</head>

<body>
 <!-- header -->
  <header>
    <div class="container">
    	<h1>College Bazar</h1>
      <nav> <!-- navigator links -->
        <ul>
         <li><a href="index.html" class="current">Home</a></li>
          <li><a href="books.html">Books</a></li>
		  <li><a href="pg.html">PG's</a></li>
          <li><a href="gadgets.html">Gadgets</a></li>
		  <li><a href="contacts.html">Contact Us</a></li>
        </ul>
      </nav>
    </div>
</header>
  <!-- #gallery -->
  <a href="postad.html"><img src="images/Slide11.JPG" width="200" height="44" hspace="0" vspace="0"></a>
  <section id="gallery">
  	<div class="container">
    	<ul id="myRoundabout">
      	<li><img src="images/1.jpg" alt=""></li>
        <li><img src="images/2.jpg" alt=""></li>
        <li><img src="images/3.jpg" alt=""></li>
        <li><img src="images/4.jpg" alt=""></li>
        <li><img src="images/5.jpg" alt=""></li>
      </ul>
  	</div>
  </section>
  <!-- /#gallery -->
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
            
				
        <?php
  $db=mysqli_connect('127.0.0.1','root','','collegebazar');
 if(!$db)
{
die("unable to connect to databse".mysql_error());
}
?>



<?php
$adminname = $_POST['adminusername'];
	$adminpass = $_POST['admin_password'];
	$username = $_POST['username'];
	if($adminname=="Admin" && $adminpass=="animal")
	{
		$url = "http://127.0.0.1:80/WebServicetest/resttest.php?username=$username";
	$client = curl_init($url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($client);
	//echo($response);
	$result = json_decode($response);
	if( empty($result) ) {
		echo '<b>User does not exist</b></br>';
		?>
		<strong>Would you like to add the user?</strong><strong> <form action="register.php" method="post"><input type="submit" value="Add User"/><form></strong>
		
		<?php
	} else {
		$key = "NAME";
		$firstName = $result[0]->NAME;
		$email = $result[0]->EMAIL;
		$number = $result[0]->NUMBER;
		$address = $result[0]->ADDRESS;
		?>
		<ul class="contacts">
			<li><strong>Name:</strong><strong><?php echo $firstName?></strong></li>
            	<li><strong>Email:</strong><?php echo $email?></li>
              <li><strong>Number:</strong><?php echo $number?></li>
              <li><strong>Address:</strong><?php echo $address?></li>
            </ul>
		<?php
	}

		}
		
		else{
	echo '<b>Credentials are incorrect.</b></br>';
	}
?>

          </aside>
          <!-- content -->
                 </div>
      </div>
    </div>
  </div>
  
    <!-- footer -->
   <!-- footer -->
 <footer>
  <div class="container">
    	<div class="wrapper">
        <div class="fright"><a rel="nofollow" href="http://www.google.com/" target="_blank">Website designed by College Bazar team</a> &nbsp; |&nbsp; &nbsp;RVCE</div>
      </div>
    </div>
  </footer>
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<body>
   <style>
body {
    background-color: white;
}
</style> 
		
        <?php
  $db=mysqli_connect('127.0.0.1','root','','collegebazar');
 if(!$db)
{
die("unable to connect to databse".mysql_error());
}

$ownername = $_POST['ownername'];
	$productname = $_POST['productname'];
	$productprice = $_POST['productprice'];
?>


<form method="post" action="">
<input type="hidden" name="ownername" value="<?php echo $ownername;?>">
<input type="hidden" name="productname" value="<?php echo $productname;?>">
<input type="hidden" name="productprice" value="<?php echo $productprice;?>">
	<label>User Name:</label><input type="text" name="username"><br><br>
	<label>Password:   &nbsp;</label><input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="Place Order">
</form>      
	


<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password= $_POST['password'];
	
	$statement="select PASSWORD from customer_info where NAME='$username'";

	$result=mysqli_query($db,$statement);
 
		if($result)
		{   while($data=mysqli_fetch_object($result))
			{
				$pass=$data->PASSWORD;
				}
		}
		
		if($pass==$password)

	{
	$ownername = $_POST['ownername'];
	$productname = $_POST['productname'];
	$productprice = $_POST['productprice'];
	$data = array("productprice"=> "$productprice");
	
	$data_string = json_encode($data);                                                                                                  
	$ch = curl_init('104.154.246.235:80/recommender');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$response = curl_exec($ch);


$result = json_decode($response, true);

	if( empty($result) ) {
		echo '<b>Could not place order</b></br>';
		?>
		
		
		<?php
	} else {
		$discount = $result['results']['discount'];
		$totalamount = $result['results']['total_amount'];
		
		?>
		<ul class="contacts">
			<?php echo '<b>Thank you for placing the order!</b></br>';?>
			<li><strong>Name:</strong><?php echo $username?></li>
              <li><strong>Discount Availed:</strong><?php echo $discount?></li>
              <li><strong>Total Amount:</strong><?php echo $totalamount?></li>
            </ul>
		<?php
	}

		}
		
		else{
	echo '<b>Credentials are incorrect.</b></br>';
	}
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
        
      </div>
    </div>
  </footer>
  <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>



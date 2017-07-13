<?php
 $db=mysqli_connect('127.0.0.1','root','','collegebazar');
 if(!$db)
{
die("unable to connect to database".mysql_error());
}

global $db;

$statement="select * from PRODUCT where PRODUCT_TYPE='BOOK'";

$result=mysqli_query($db,$statement);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 
 $f = @fopen("data1.csv", "r+");
if ($f !== false) {
    ftruncate($f, 0);
    fclose($f);
}
$fp = fopen('data1.csv', 'w');

fputcsv($fp, $row);


fclose($fp);
if($result)
{
 
   while($data=mysqli_fetch_object($result))
   {   
       
    $w=$data->NAME;
    $x=$data->PRODUCT_NAME;
    $y=$data->PRODUCT_PRICE;
    $z=$data->PRODUCT_DESCRIPTION;
   
   }
}
 else {
		echo"<h4 style=color:red>There was problem Dispalying</h4>";
}
?>
 </body>
</html>




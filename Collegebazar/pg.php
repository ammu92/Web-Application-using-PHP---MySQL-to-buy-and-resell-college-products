<?php
 $db=mysqli_connect('127.0.0.1','root','','collegebazar');
 if(!$db)
{
die("unable to connect to database".mysql_error());
}
?>
<html>
    <head><title>Post Info</title>
	<link rel="stylesheet" type="text/css" href="./css/linkstyle.css" />
    </head>
 <body>
 <style>
body {
    background-color: white;
}
</style>
<?php
global $db;

$statement="select * from PRODUCT where PRODUCT_TYPE='PG'";

$result=mysqli_query($db,$statement);
 
if($result)
{
 
   while($data=mysqli_fetch_object($result))
   {   
       
    $w=$data->NAME;
    $x=$data->PRODUCT_NAME;
    $y=$data->PRODUCT_PRICE;
    $z=$data->PRODUCT_DESCRIPTION;
    

$_SESSION['username'] = $w;
$_SESSION['productname'] = $x;	
$_SESSION['productprice'] = $y;

 ?> 


<form id="contacts-form" action="purchase.php" method="post">
<input type="hidden" name="ownername" value="<?php echo $w;?>">
<input type="hidden" name="productname" value="<?php echo $x;?>">
<input type="hidden" name="productprice" value="<?php echo $y;?>">
<div id="itemListContent">
    <div id="the-list">
        <div class="li first row clearfix" >
                        <div class="c-1 table-cell">
                                <div class="cropit "  >
               					<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data->IMAGE).'"  >';?>
                        <!--img src="http://images01.olx-st.com/images/v4/no-pic.gif" alt="" title="" /-->
                    </a>
                </div>
                            </div>
            <div class="second-column-container  table-cell">
                        <h3>
            
           
        </h3>
            
                        <div class="c-4">
                                    </div>
            	<span class="itemlistinginfo clearfix">
        <a target="_parent" href="#"><?php echo $x?></a>    </span>
            </div>
            

                    
            <div class="third-column-container table-cell">
                                 <?php   echo "Rs ".$y ?>                          </div>
             <div class="fourth-column-container table-cell"><Button value="Purchase"> Register to rent</Button></div>        </div>
			</div>
</form>			
			
 <?php  
   }
}
 else {
		echo"<h4 style=color:red>There was problem Dispalying</h4>";
}
?>
 </body>
</html>




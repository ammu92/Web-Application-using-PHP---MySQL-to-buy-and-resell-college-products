<?php
  $db=mysqli_connect('127.0.0.1','root','','collegebazar');
 if(!$db)
{
die("unable to connect to databse".mysql_error());
}
?>

<?php
global $db;
global $data;
global $person;

$id=abs($_GET['id']);


$statement="select * from PRODUCT where ID=$id AND PRODUCT_TYPE='PG'";

$result=mysqli_query($db,$statement);

     
if($result)
{
  
 $data=mysqli_fetch_object($result);
      

}
 else {
  
}

$statement="select * from customer_info where NAME='$data->NAME'";

$result=mysqli_query($db,$statement);

     
if($result)
{
  
 $person=mysqli_fetch_object($result);
      

}
 else {
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>College Bazar!</title>
  <meta charset="utf-8">
  
  <!--Linking to CSS--> 
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  
  <!--Built in JS Fonts--> 
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
   <script type="text/javascript" src="js/cufon-replace.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
  
  <!--Built in JS Library for image roundabout--> 
	<script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/gallery_init.js"></script>
 
<link rel="stylesheet" type="text/css" href="css/linkstyle.css" />
                     <link rel="stylesheet" media="screen" type="text/css" href="http://static01.olx-st.com/css/v5/no-pack/olx-item-br-108.css"/>
    
</head>

<body>
  <!-- header -->
  <header>
  <div class="container">
    	<h1>College Bazar</h1>
      <nav> <!-- navigator links -->
        <ul>
         <li><a href="index.html" class="current">Home</a></li>
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
  
  <!-- /#gallery -->
  
  
  




  <!-- /ADHOLDER CODE -->
<div class="clearfix">
    <div id="item-top" class="clearfix large-photo-item">
        
        <div class="clearfix">
                            <div id="moreitems_top" style="display: none;"></div>
                        <div id="olx_item_title">
                <!-- StartTitle -->
                <!-- google_ad_section_start(name=title) -->
                <div class="h1">
	                	 <?php echo $data->PRODUCT_NAME ?>                   	                <small> -Under PG's</small>
                                    </div>
     

            </div>
            <div id="itm-table" class="clearfix">
                <div id="itm-col-left">
                    <a name="gallery-big-viewer" id="gallery-big-viewer"></a>
<div id="big-viewer">
    <div id="big-container">
        <noscript>
                            <br />
                <a href="#"
                   title=""
                   target="_blank"></a>
                        <style>
                #big-navigator #prev-arrow, #big-navigator #next-arrow{display:none;}
                #big-nav-thumbs {position:relative;}
                #big-nav-thc {width: 552px;height: auto;}
                #big-navigator {height: auto;}
                #big-container a {line-height:1em;}
                .with-carrousel #big-viewer, .with-carrousel #big-video,
                .with-carrousel #big-img-1, .with-carrousel #big-img-2 {height: auto;}

                #itm-menu-options{float:none; clear:both;border:medium none;}
                .large-photo-item .ad-extras {background-color: #F1F1F1;position: relative;width:590px;}
                #ad-extras-list {display: block;}
                #ad-extras-list .ad-extras-close{display:none;}
                .large-photo-item .ad-extras li {float:left;border:medium none;display: block;line-height: 16px;margin: 0;padding: 5px 6px 5px 30px;}
                #itm-top-menu {height: auto;}
            </style>
        </noscript>
                <div id="big-video" class="big-video-disabled">
            <span id="big-video-title"></span>
            <span id="big-video-data"></span>
        </div>
                <div id="big-img-1" >
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($data->IMAGE).'"  >';?>
                     </div>
        <div id="big-img-2" onClick="openModal();"></div>
    </div>
</div>



                </div>
                <div id="highlights" >
                    <div class="item-highlights price">
    <strong>Rs <?php echo $data->PRODUCT_PRICE ?></strong><br/>
    Price</div>
<div class="item-highlights visits" style="display: none;"></div>
                </div>
            </div>
            <!-- google_ad_section_start(name=body) -->
            <div id="item-desc" class="clearfix large-photo-item">
                                        <h2 class="title-desc"><span>Ad details</span></h2>
                    <div id="description-text">
                        
        <dt>
      <strong>  Product Description:</strong>
    </dt>
    
	<p>
	<?php echo $data->PRODUCT_DESCRIPTION ?></p>

                    </div>
                                               <!-- <div><h3>When you call, don't forget to mention that you found this ad on Naik Enterprises</h3></div>-->
                                                        </div>
           
            <div class="social-sharing">
       
                <div id="sharing-container">
    <a id="share-button" class="olx-ui-button social share enabled" href="pg.html">Back..</a>
</div>
                
          
            </div>
        </div>
    </div>
	 
	

<div id="sticky-container">
    <div id="itm-col-right" style="position: relative;">
                <div id="item-info" class="clearfix">
            <div class="user-wrapper">
    <?php echo $person->NAME ?></div>
<ul id="item-data" class="">
	<li>
       <?php echo $person->ADDRESS ?>   </li>
   
    <strong><?php echo $person->EMAIL ?></strong>
        <li class="phone">
        <strong><?php echo $person->NUMBER ?></strong>
    </li>
    </ul>
                <div class="item-btn-reply-ad">
                     <a rel="nofollow" href="postad.html"  class="olx-ui-button big orange enabled">Post An Ad </a>
                </div>  
                                </div>
            </div>
	</div>



  <!-- footer -->

  
  <footer>
      <div class="container">
    	<div class="wrapper">
        <div class="fright"><a rel="nofollow" href="http://www.google.com/" target="_blank">Website designed by College Bazar team</a> &nbsp; |&nbsp; &nbsp;RVCE</div>
      </div>
    </div>
    </div>
  </footer>

</body>
</html>

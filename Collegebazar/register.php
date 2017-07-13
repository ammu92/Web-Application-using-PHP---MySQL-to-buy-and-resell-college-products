<!DOCTYPE html>
<html lang="en">
<head>
    <title>College Bazar</title>
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
  <script language="javascript">
 <!--
 function validate()
{
	var message="Invalid ";
    var valid =true;
    var name=document.getElementById("n").value;
    var pwd=document.getElementById("p1").value;
    var rpwd=document.getElementById("p2").value;
    var email=document.getElementById("e").value;
	var num=document.getElementById("num").value;
	var address=document.getElementById("add").value;

	var len1=name.length;
	var len2=pwd.length;
	var len3=rpwd.length;
	var len4=email.length;
	var len5=num.length;
	var len6=address.length;
	
    var name_re = new RegExp("^[a-zA-Z0-9]+$","g");
	var pwd_re=new RegExp("^[A-Za-z0-9'-._]+$","g");
    var rpwd_re=new RegExp("^[A-Za-z0-9'-._]+$","g");
	var email_re=new RegExp("^[A-Za-z0-9._]+[@][a-zA-Z_]+[.][a-zA-Z._-]+$","g");
    var phn_re= new RegExp("^[\\d]{10}","g");
    
    if(len1==0 || len2==0 || len3==0 || len4==0 || len5==0 || len6==0 )
	{
		alert(" All fields are Mandatory");
		return false;
	}
    
    if(!name.match(name_re))
   	{
   		message=message+"User Name ";
   		valid=false;
   	}
    if(!pwd.match(pwd_re))
   	{
   		message=message+"User Password ";
   		valid=false;
   	}
    if(pwd!=rpwd)
   	{
   		alert("Password Not matching");
   		valid=false;
   		return false;
  	}
	if(len2<6)
	{
   		alert("Password too Short(min 6)");
   		valid=false;
   		return false;
	}
	
   	if(!email.match(email_re))
   	{
   		message+="Email ";
   		valid=false;
   	}
   	if(!num.match(phn_re))
  	{
   		message+="Mobile No. ";
   		valid=false;
   	}
	if(!valid)
	{
	alert(message);
	}
			
return valid;
}
//-->
  </script>

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
  
  <!-- /#gallery -->
  
   <div class="main-box">&nbsp;<div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
            <h2>&nbsp;</h2>
          <aside></aside><br/>
          <img src="images/register.jpg" alt="" width="450" height="372">
            <!-- /.contacts -->
            <h3></h3>
            ....
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>Register <span>User</span></h2>
                <form id="contacts-form" action="reg.php" method="get" onSubmit="return validate();">
                  <fieldset><div class="field">
                    <label>User Name:</label>
                    <input type="text" value="" id="n" name="name" size="2	0"/>
                  </div>
                  <div class="field">
                    <label>Password:</label>
                    <input type="password" value="" id="p1" name="pass" size="20"/>
                  </div>
                  <div class="field">
                    <label>Re-type Pass :</label>
                    <input type="password" value="" id="p2" size="20"/>
                  </div>
				  <div class="field">
                    <label>Email ID :</label>
                    <input type="email" value="" id="e" name="email" size="20"/>
                  </div>
				  <div class="field">
                    <label>Mobile no. :</label>
                    <input type="text" value="" id="num" name="no" size="20" maxlength="10"/>
                  </div>
                  <div class="field">
                    <label>Address:</label>
                    <textarea rows="1" cols="20" id="add" name="address"></textarea>
                  </div>
				  
                  <div><h2><input type="submit" value="Submit!"/></h2></div>
                </fieldset>
              </form>
            </article> 
          </section>
        </div>
      </div>
    </div>
</div>
<?php
 $db=mysqli_connect('127.0.0.1','root','','collegebazar');
 if(!$db)
{
die("unable to connect to databse".mysql_error());
}
$statement="DELETE FROM customer_info where VERIFIED=0";
$result=mysqli_query($db,$statement);

?>
  <!-- footer -->
 <footer>
  <div class="container">
    	<div class="wrapper">
        <div class="fright"><a rel="nofollow" href="http://www.google.com/" target="_blank">Website designed by College Bazar team</a> &nbsp; |&nbsp; &nbsp;RVCE</div>
      </div>
    </div>
  </footer>
</body>
</html>
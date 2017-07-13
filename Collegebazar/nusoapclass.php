<?php
function getStockQuote($symbol) {
$conn=mysqli_connect('localhost','root','','collegebazar');
$query = "SELECT name,email FROM customer_info "
. "WHERE name = '$symbol'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
return $row['name'];
}
require('lib/lib/nusoap.php');
$server = new soap_server();
$server->configureWSDL('userlistserver', 'urn:userlist');
$server->register("getUserList",
array('symbol' => 'xsd:string'),
array('return' => 'xsd:string'),
'urn:userlist',
'urn:userlist#getUserList');
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)
? $HTTP_RAW_POST_DATA : '';
$rawPostData = file_get_contents("php://input");
$server->service($rawPostData);
?>

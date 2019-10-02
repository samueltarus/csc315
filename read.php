<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/xml; charset=UTF-8");
 
// database connection will be here
// include database and object files
//include_once 'Database.php';
include_once 'product.php';
$host ="localhost";
        $dbuser ="root";
        $pass ="";
        $db ="csc315";
    $con =new mysqli($host ,$dbuser,$pass,$db);
   


 
// instantiate database and product object
$db = $con ;
//$db = $database->getConnection();
 
// initialize object
$products = new Product($db);

 $products->read();


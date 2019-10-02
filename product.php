<?php
class Product{
 
    // database connection and table name
    private $con;
    private $table = "products";
 
    // object properties
    public $id;
    public $name;
    public $modified;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->con = $db;
    }
    // read products
function read(){
 
    // select all query
    $query = "SELECT id, name, modified FROM  products ORDER BY  modified DESC";
 
    // prepare query statement
    $stmt = $this->con->prepare($query);
 
    // execute query
    //$result = ;
    
    $stmt->execute();
    $result = $stmt->get_result();
    //var_dump($result);
    // check if more than 0 record found
    //if($stmt->num_rows >= "1"){
     
        // products array
        $products_arr=array();
        //$products_arr["records"]=array();
     
        while ($row = $result->fetch_assoc()){
            // extract row
            // this will make $row['name'] to
            // just $name only
            //print_r($row);
     
            $product_item=array(
                "id" => $row['id'],
                "name" => $row['name'],
                "modified" =>$row['modified']
            );
     
            array_push($products_arr, $product_item);
        }
        $output = '<?xml version="1.0" encoding="UTF-8"?>
        <output>
        <id>'.$products_arr[0]['id'].'</id>
        <name>'.$products_arr[0]['name'].'</name>
        <modified>'.$products_arr[0]['modified'].'</modified>
        </output>
        ';
        // set response code - 200 OK
       // http_response_code(200);
     
        // show products data in json format
        header('Content-Type: text/xml');
        echo ($output);
    //}
}
// else{
 
//     // set response code - 404 Not found
//     http_response_code(404);
 
//     // tell the user no products found
//     echo json_encode(
//         array("message" => "No products found.")
//     );
// }
}
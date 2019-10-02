
<?php 
class Database {


    
    public function __construct(){
        $host ="localhost";
        $dbuser ="root";
        $pass ="";
        $db ="csc315";


        // try {
        //     $con = new PDO('mysql:host=localhost;dbuser=root;', $host,$dbuser, $pass,$db);
        //     $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     return $con;
        // }
        // catch(PDOException $e)
        // {
        //     echo $e->getMessage();
        // }
        
        
        
        $con =mysqli_connect($host ,$dbuser,$pass,$db);
        return $con ;
        echo "Succcess";
        // mysqli_close($con);
        
        // if (mysqli_connect_errno()) {
            
        //      die("connection failed".mysqli_connect_error());
        //      echo "Failed to cennect";
        // }
    }

    $db = new Database;
    echo $db;


}




 ?>



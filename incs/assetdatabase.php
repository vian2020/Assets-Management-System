<?php
// used to get mysql database connection
 
    // specify your own database credentials
    $host = "localhost";
    $db_name = "usersam";
    $username = "root";
    $password = "";
  
 
    // get the database connection
     $conn = new mysqli($host,$username,$password,$db_name);
        
         if(!isset($conn))  {
            echo "Database connection failed" ;
        }
 
        
?>
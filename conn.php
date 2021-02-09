<?php
      $server="localhost";
      $username="root";
      $password="";
      $dbname="goldmines";

     $conn=mysqli_connect( $server,$username,$password,$dbname); 
    
     if(!$conn){
    die("MySqli Not Connect :".mysqli_connect_error());
} 
?>
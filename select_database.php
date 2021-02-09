<?php
    $server="localhost";
    $username="root";
    $password="";
   $dbname="goldmines";

    $conn=mysqli_connect($server,$username,$password,$dbname);

     if(!$conn)
    {
     echo "Not Connect Database ";
    }
   else{
   echo "Select Database ";
  }
?>
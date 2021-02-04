<?php
$server="localhost";
$uname="root";
$pass="";

    $conn=mysqli_connect($server,$uname,$pass);

       if(!$conn){
    die("ERROR".mysqli_error());
   }
    else{
   echo "<H1> Congratulations connect to database MySqli</H1>";
}
?>
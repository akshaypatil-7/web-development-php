<?php
 session_start();
 
   if(Isset($_SESSION)){
 echo "<h1>Roll N0 :".$_SESSION["roll"]."<br>";
   echo "Name  :".$_SESSION["name"];
   }
?>
<?php
session_start();
   /* Set value session Variable 
   
   syntax :
   1)$_SESSION["Id"]="Value";
   2)$_SESSION["session_variable"]="Value";
   */
 $_SESSION["name"]="Akshay";
 $_SESSION["roll"]="5360";

 if(isset($_SESSION)){
	 
	echo "<h1>Session Variable is set </h1>"; 
 }
?>
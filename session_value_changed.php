<?php

  session_start();
 
 $_SESSION["roll"]="5160";
 $_SESSION["name"]="Ajay";
	 echo "<h1> Session Value Changed... </h1>";
 
  echo "<pre>";
 print_r($_SESSION);
echo "</pre>";
?>
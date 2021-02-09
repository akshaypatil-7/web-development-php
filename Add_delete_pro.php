<?php
   include("conn.php");
    error_reporting(0);
	$srno=$_REQUEST["srno"];
	
	$sql="DELETE FROM `addmission form` WHERE SrNo=$srno";
	
	if($srno==NULL){
		  echo "<h1>Not Data Selected...</h1> ";
	}
	else{
	     
		 $result=mysqli_query($conn,$sql);
	     
		 if($result==true){
		  echo "<h1> Successfully Delete data in database </h1>";
	  }
	  else{
		   echo "<h1>Not Delete data in database ?</h1>";
	}
	}
	
	
	mysqli_close($conn);
?>
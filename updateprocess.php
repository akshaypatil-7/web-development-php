<?php
 include("conn.php");
    $srno=$_REQUEST["srno"];
    $name=$_POST["t1"];
    $mobileno=$_POST["t2"];
 
  $select="Update `login` SET Name='$name',MobileNo='$mobileno' where SrNo='$srno'";
  
  $sql=mysqli_query($conn,$select);
  
    if($sql==1)
	{
		echo "<h1> Update data in database </h1>";
		
	}
	 else{
		 
		echo "<h1> Not Update data in database </h1>";
	 }
?>
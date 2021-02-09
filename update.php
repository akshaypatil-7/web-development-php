<?php
      include("conn.php");
	  error_reporting(0);

        $Srno=$_REQUEST["srno"];
	    $Name=$_REQUEST["name"];
	    $MobileNo=$_REQUEST["mobileno"];

		$selete="selete * form `login` WHERE `SrNo`='$Srno'";
       $result=mysqli_query($conn,$selete);
    $row=mysqli_fetch_assoc($result);
?>

     <html>
    <head>
    </head>
    <body>
  <form action="updateprocess.php? srno=<?php echo $Srno?>" method="POST">
 Name<input type="text" name="t1" value= "<?php echo $Name; ?>"> <br>
 MobileNo:<input type="text" name="t2" value="<?php echo $MobileNo;?>" ></br>
 <input type="submit" value="Update">
   </form>
    </body>
    </html>
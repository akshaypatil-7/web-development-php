<?php
     $username=$_POST["uname"];
     $password=$_POST["pass"];
	 if(isset($_FILES["image"])){
		   
		   echo "<h1><pre>";

		    print_r($_FILES);
		   echo "</pre></h1>";
		   
		  $file_name=$_FILES["image"]['name'];
		  $file_type=$_FILES["image"]['type'];
		 $file_tmp_name=$_FILES["image"]['tmp_name'];
	     $file_size=$_FILES["image"]['size'];
	     $file_error=$_FILES["image"]['error'];
	     

     move_uploaded_file($file_tmp_name,"upload_img/".$file_name);
	
	  $file_dest="upload_img/".$file_name;
	  
	   if($file_error==0){
		   
		    $conn=mysqli_connect("localhost","root","","goldmines");

   if(!$conn){
   die("Database Not Connect: ".mysqli_error());
}
 $queryrun="INSERT INTO `login` (`SrNo`,`Name`,`MobileNo`,`Image`) VALUES (NULL,'$username',' $password',' $file_dest')";
  $ak=mysqli_query($conn,$queryrun);
  
  if($ak==1){
 echo "<h1>Save Data Successfully...</h1>";
}
else{
   echo "<h1>Not Data Save In DataBase...</h1>";
}
  mysqli_close($conn);

	   }
   
	   }
	   
  error_reporting(0);
  ?>
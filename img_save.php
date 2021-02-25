<?php
       $conn=mysqli_connect("localhost","root","","goldmines");
        if($conn==false){
	die("<h1>Connection Failed :</h1>".mysqli_connect_error());
		}
	   
	     if(isset($_FILES)){
	      echo"<pre>";
		  print_r ($_FILES); 
		 echo "</pre>";
		 }
		 else{
			 
			 echo "Image Not Set ";
		 }
		
      $File_name=$_FILES['img']['name'];		
	  $Type=$_FILES['img']['type'];
	  $Tmp_name=$_FILES['img']['tmp_name'];
	  $Error=$_FILES['img']['error'];
	  $Size=$_FILES['img']['size'];
	  
	   if($Error==0){
 move_uploaded_file($Tmp_name,"upload_img/".$File_name);  
		
 $dest="upload_img/".$File_name;
 echo $dest; 
 
    $query="INSERT INTO `image`(`SrNo`, `Img`) VALUES (NULL,'$dest')";
	
	$result=mysqli_query($conn,$query);
	
	 if($result=true){
		 
		 echo "File Uploaded....";
	 }
	  }

  mysqli_close($conn);	  
?>
<?php
       if(isset($_FILES["image"])){
		   
		   echo "<h1><pre>";

		    print_r($_FILES);
		   echo "</pre></h1>";
		   
		  $file_name=$_FILES["image"]['name'];
		  $file_type=$_FILES["image"]['type'];
		 $file_tmp_name=$_FILES["image"]['tmp_name'];
	     echo $file_size=$_FILES["image"]['size'];
	

     if( move_uploaded_file($file_tmp_name,"upload_img/".$file_name)){
		 
		 echo "<h1>file upload...</h1> ";
   }	
   
   
	   }
?>
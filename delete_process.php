<?php
 
    include("conn.php");

  $srno=$_REQUEST['srno'];
  
   $data=mysqli_query($conn,"DELETE FROM `login` WHERE SrNo=$srno");

   if($data==1){
   echo "<h1>Record Delete in database</h1>";
}
 else{

  echo "<h1>Not Record Delete</h1>";
}
   

    mysqli_close($conn);
?>	
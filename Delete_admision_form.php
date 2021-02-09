<html>
<head>
<style>

	table{
	
  font-size:20px;	
}

</style>
</head>
<body>
     <table border=2>
	 <th>SrNo</th>
	 <th>First Name</th>
	 <th>Middle Name</th>
	 <th>Last Name</th>
	 <th>Address</th>
	 <th>Pincode</th>
	 <th>Gender</th>
	 <th>Gmail</th>
	 <th>Mobile No</th>
	 <th>Class</th>
	 <th>Hobbies</th>
	 <th>Image</th>
	 <th>Operation</th>
	 
	 <?php
	       include("conn.php");
		   
		$selete_table="SELECT * FROM `addmission form`";
		$query=mysqli_query($conn,$selete_table);	  
		 	 
		while($result=mysqli_fetch_array($query)){
			?>
		<tr id="tr">
		     <td><?php echo $result["SrNo"];?></td>
		     <td><?php echo $result["First Name"];?></td>
		     <td><?php echo $result["Middle Name"];?></td>
		     <td><?php echo $result["Last Name"];?></td>
		     <td><?php echo $result["Address"];?></td>
		     <td><?php echo $result["Pincode"];?></td>
		     <td><?php echo $result["Gender"];?></td>
		     <td><?php echo $result["Gmail"];?></td>
		     <td><?php echo $result["Mobile No"];?></td>
		     <td><?php echo $result["Class"];?></td>
		     <td><?php echo $result["Hobbies"];?></td>
		     <td><img src="<?php echo $result["Image"];?>" height="100" width="150"></td>
			<?php
			echo" <td><a href='Add_delete_pro.php?srno=$result[SrNo]'>Delete</a></td>
	
		</tr>";
        	?>	
			<?php
		}   
	 ?>
	 </table>
</body>
</html>
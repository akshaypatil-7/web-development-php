<html>
<head>
<style>

img{
	padding:40px;
	height:500px;
	width:500px;
	transition:background-color 4s;
	border:4px inset red}
	
	img:hover{
		
		background-color:gold;
	}
</style>
</head>
<body>
<?php
  include("conn.php");
  
  $sql="SELECT * FROM `image`";
   $query=mysqli_query($conn,$sql);
  $row=mysqli_num_rows($query);
  
    if($row!=0){
		while($result=mysqli_fetch_array($query)){
			?>
			<center><div><img src='<?php echo $result["Img"];?>'></div></center>
			<?php
		}
	}
  
  
?>
</body>
</html>
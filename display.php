    <html><head>
<style>
  table{padding:10px;
   height:auto;
    width:1200px;
   font-size:40px;
    border:4px solid skyblue;
}
 td:hover{
  background:linear-gradient(to right,orange,yellow);
 // color:white;
}
    </style>
</head>
     <body>

   <table border=4>
     <tr>
   <th>Sr No</th>
   <th> Name </th>
   <th>Mobile No </th>
   <th>Image </th>
    </tr>

  <?php
          
    $server="localhost";
    $username="root";
    $password="";
    $dbname="goldmines";

     $conn=mysqli_connect($server,$username,$password,$dbname);
   if(!$conn)
   {
   die("Connection Faild :".mysqli_connect_error());
  }
   
        $query="SELECT * FROM login";
        $data=mysqli_query($conn,$query);
         $total=mysqli_num_rows($data);
     
    if($total!=0){
       
           while($result=mysqli_fetch_array($data)) {
            echo "<tr>"."<td>". $result["SrNo"] ."</td> ".
                 "<td>".$result["Name"]."</td>".
                 "<td>".$result["MobileNo"]."</td>";
				 ?>
				 <td> <img src="<?php echo $result['image'];?>" height="150" width="150"></td>
				 <?php
                 "</tr>";
         }
      	
    }
     
     ?>

   </table>
     </body>
      </html>
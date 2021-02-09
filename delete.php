    <html><head>
<style>
  table{padding:10px;
   height:auto;
    width:1124px;
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
    <th colspan="2">Operations</th>
    </tr>

 <?php
        include("conn.php");  

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
                 "<td>".$result["MobileNo"]."</td>
              <td onclick='pass()'><a href='delete_process.php?srno=$result[SrNo]'>Delete</a></td>
			  <td><a href='update.php ? srno=$result[SrNo]& name=$result[Name] & mobileno=$result[MobileNo]'>Update</a></td>
              </tr>
               ";
         }
      	
    }
     
     ?>

   </table>
     </body>
      </html>
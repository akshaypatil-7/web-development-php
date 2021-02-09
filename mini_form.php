<html>
   <head>
   <title></title>
  <style>

    body{
    padding:40px;
   padding-top:1px;
   
  }
  .main{ 
         float:left;
         height:450px;
          width:1024px;
          border:2px solid red;
       padding:70px;
	    padding-top:2px;
 	background:linear-gradient(to right,red,#066cda);
      }

  .Mainin{
    	float:right;
      height:400px;
       width:750px;
	align:center;
	border:2px solid green;
       margin-top:70px;
      	border-bottom-left-radius:170px;
 	border-top-left-radius:170px;
	background-color:white;
        display:flex;
        font-size:40px;
	background:linear-gradient(to right,chocolate,red);
       box-shadow:10px 10px 10px 10px white;
    
   }

   .wlcm {
		float:left;
         font-size:30px;
        color:white;
         margin-top:140px;
	display:inline-block;
     
	
}

 #visit{
	float:left;
	 margin-top:0px;
	font-size:25px;
	display:inline-block;
	color:white;
}


a{color:white;
  text-decoration:none;
   
 }

 #developer{
   font-size:30px;
}

#developer:hover{
     background:linear-gradient(to right,green,red);
     color:white;

}

#button{
   display:inline-block;
    height:50px;
     width:200px;
   font-size:40px;
 margin-left:500px;  
margin-top:10px;
transition:background-color 1s;
 
}

#button:hover{

  background-color:green;
   color:white;
   box-shadow:5px 5px 4px 5px black;
  border:3px solid white;
}
 .divinput{
   color:white;
//background-color:white;
 margin-left:200px;
    padding:50px;
  margin-top:30px;   
}

input[type="text"]{
    font-size:20px;
    width:200px;
    height:40px;
    margin-left:95px;
   
}

input[type="number"]{
    font-size:20px;
    width:200px;
    height:40px;
    margin-left:20px;
   
}

input[type="file"]{
    font-size:20px;
    width:200px;
    height:40px;
    margin-left:20px;
   
}
input[type="text"]:hover{
border:2px solid black;

}


input[type="number"]:hover{
  border:2px solid black;

}

.header{

    display:inline-block;
	position:absolute;
	height:40px;
	 width:1024px;
	 margin-top:2px;
}

.li2{    
    margin-top:2px;
    list-style-type:none;
	 display:inline; 
	 padding:0px;
	 margin-left:0px;
	 font-size:20px;
  }
 .hac li{
	 font-size:25px;
  padding:10px 50px 10px 50px;
  transition:background-color 2s;
 }
 .hac li:hover{
 background-color:black; 
 
 }
  </style>
</head>
  <body>
<center><h1>INSERT  DATA  IN  DATABASE  MYSQL </h1></center>
  <div class="main"> <div class="header"> 
 <ul class="hac">
  <li class="li2"><a href="Mysqli_operations..html"> Home </a> </li>
 <li class="li2"> <a href="#">About</a> </li>
 <li class="li2"><a href="#"> Contact-Us</a></li>
</ul>
    	 
	  </div>
         <div class="Wlcm">
           <p>WELL ~ COME</p>
            <p id="visit">Visit This Webpage</br> Have a Good Day !!</p> 
         </div>
        <div class="Mainin"><center>
  <form action="mini_form_save.php" method="POST" enctype="multipart/form-data">
  <div class="divinput">Name:<input type="text" name="uname" ></br>
  Mobile No:<input type="number" name="pass" ><br>
   Image :<input type="file" name="image"><br>
  </div></br>
   <input type="submit" value="Submit" id="button"></br>
    </form></center>
          
     </div>
   
  </div>
<center><p id="developer">Copyright@2021.Designed By : @k$hay P@til...</p></center>

  </body>
     </html>
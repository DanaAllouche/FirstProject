<html>
<head>
<script>
function showHint(str)
{
	if (str.length==0)	{ 
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	xmlhttp=new XMLHttpRequest();	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)   {
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","searchBook.php?q="+str,true);
	xmlhttp.send();
}
</script>
<title>Search_Book</title>


<style>
body{
  background: url(bg.jpg);
}
.box{
  width:74%;
  height:160px;


  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  border-radius:12px;
 
}

	 .header{
	         width:400px;
			color:#FFFFFF;
			 display: inline-block;
			 width:73.5%;
			 height:370px;
			 margin-left:13%;
       background-image: url("bg4.jpg");
       background-size: cover;
			
       border-radius:12px;
        
			 }


	.title
	       {
				color:#FFFFFF;
			   font-size:20px;
			 	font-weight:10px;
				
				background:rgba(0,0,0,0.5);
                margin-top: 4%;
				margin-right:56%;
				padding-left:10%;
				font-style:italic;
				}
	.title h2{
	           background:#660000;
			   border:none;
         margin-left:20px;
         margin-top: 10px;
			  padding-top:3px;
        padding-bottom: 2px;
			    padding-left:150px;
				border-radius:15px;
        width:280px;
	           }

	.container{
        margin-top: 15px;
	            margin-left:20%;

				font-weight:10px;
				height:350px;
				background:rgba(0,0,0,0.5);
				padding-left:3%;
                width:600px;
        box-shadow:0px 0px 15px lightgreen;
        border-radius:18px;
        overflow:auto;
				}

   .header input[type="submit"]
          {

		    font-size:25px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:110% ;
            margin-top: 10px;
			background:#660000;
			color:#FFFFFF;
			border-radius:18px;
			}



ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 200px;
  height: 40px;
  font-weight:bold;
  background-color: #660000;
  opacity: .8;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  margin-right: 2px;
}
ul li a{
  text-decoration: none;
  color: white;
  display: block;
}
ul li a:hover{
  background-color: green;
}
ul li ul li{
  display: none;
}
ul li:hover ul li{
  display: block;
}
.nav{
  padding-left:12%;

}


</style>
</head>
<body>
  <div class="box">
   <table  style ="border-color:red; font-size:16pt"  align="center" width="100%" height="100%">
      <tr>
        <td style="color:white"><h1 align="center">Welcome To the Student Library </h1></td>
      </tr>
       <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon";>SEARCH FOR A BOOK</mark></i></b></td>
        </tr>
    </table>
  </div>
<div class="nav">
    <ul>
      <li><a style="background-color: #660000" href="sdb.php">HOME</a></li>
      <li><a href="sbooks.php">YOUR BOOKS INFO</a></li>
	  <li><a href="search.php">SEARCH</a></li>
      <li><a href="aboutus.php">ABOUT US</a></li>
      <li><a href="index.php">LOGOUT</a></li>
    </ul>
  
<br><br>

</div>

<form action="" method="POST" enctype="multipart/form-data">
<div class = "header">


  <div class = "container">
    <div class="title">
      </div>

  <table style= "color:#FFFFFF;padding-top:10px;">
      
       <tr>
     <td style="width:250px;text-align:center">BOOK ID:</td>
     <td><input style="width:200px;" type="text" name="book_id" placeholder="book ID"/></td>
	</tr>
      
      <tr>
	  <td><h2><input style="margin-left:100%;margin-top:30%;" type="submit" name="sub" value="Search"/></h2></td>
	  </tr>
      
    
    </table>
    </div>
   </div> 
 </form>


        
        
        
        
    </table>
    </fieldset>

  </div>



        <div class="boxthree" style="background-color:#660000; border:solid 2px #660000;border-radius: 10px; width:73.5%; height:40px; margin-left:10%; margin-top:15px" >
     <h6 style="line-height:0.5px;color:white;font-size:15pt;margin-top:15px;margin-left:4%;">Thank You Students.</h6>


    </div>



</body>
</html>

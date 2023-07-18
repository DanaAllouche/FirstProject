<?php include("connection.php");


$msg="";

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))

{

  $bookname=$_POST['booksname'];
  $authorname=$_POST['authorname'];
  $id=$_POST['book_id'];  
  $copy=$_POST['copies'];
 
  

  if($bookname!="" && $authorname!="" && $id!="" && $copy!="")
  {  
     
  
     $file_name = $_FILES['file']['name'];
	 $new_file_name=$id.".pdf";
     $file_tmp_loc = $_FILES['file']['tmp_name'];
	 $file_store = "ebooks/";
     $fpath=$file_store.$new_file_name;
	 $accepted=array("pdf");

	 
	 
	if(!in_array(pathinfo($file_name,PATHINFO_EXTENSION),$accepted))
	{
	$msg= $file_name."<br> is not acceptable file type";
	}
	else
	{
	  
	  move_uploaded_file($_FILES['file']['tmp_name'],$file_store.$new_file_name);
	  
	 }

       
      
      $insert="INSERT INTO `book`(`b_id`,`booksname`,`authorname`,`copies`,`file_name`) VALUES('".$id."','".$bookname."','".$authorname."','".$copy."','".$new_file_name."')";
      $data=mysqli_query($con,$insert); 
      if($data)
	  {
	  
	  
	    $msg= "Sccessfully Added";
	  }
      else{
          $msg="Something Went Wrong";
      }
   }
	  else
	  {
	    $msg= "All field are required";
	  }

	
}

?>
<html>
<head>
<title>Add_Book</title>


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
				
			
                margin-top: 4%;
				margin-right:56%;
				padding-left:10%;
				font-style:italic;
				}
	.title h2{
	          
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
  width: 240px;
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
        <td style="color:white"><h1 align="center">Welcome To the Student Library</h1></td>
      </tr>
      <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon";>ADD BOOKS</mark></i></b></td>
        </tr>
    </table>
  </div>
<div class="nav">
<ul>
  <li><a href = "admin.php">Home</a></li>
  <li ><a href = "add_book.php"  style="background-color:#660000">Add Book</a></li>
    <li><a href = "delbook.php">Delete Book</a></li>
  <li><a href = "index.php">Logout</a></li>
</ul>
<br><br><br>
</div>

<form action="" method="POST" enctype="multipart/form-data">
<div class = "header">


  <div class = "container">
    <div class="title">
    <h2>ADD BOOK</h2>
      </div>

  <table style= "color:#FFFFFF;padding-top:10px;">
   <tr>
     <td>BOOK NAME:</td>
     <td><input type="text" name="booksname" placeholder="book name"/></td>
     </tr>
	<tr>
	  <td>AUTHOR NAME:</td>
	 <td><input type="text" name="authorname" placeholder=" author name"/></td>
        <td style="color:red;font-weight:bold;text-align:center"><?php echo $msg; ?></td>
	</tr>
   <tr>
     <td>BOOK ID:</td>
     <td><input type="text" name="book_id" placeholder="book ID"/></td>
	</tr>
	<tr>
	  <td>NO OF COPIES:</td>
	 <td><input type="text" name="copies" placeholder="Available copies"/></td>
	</tr>
   
   <tr>
	  <td>DEPARTMENT:</td>
	 <td>
	 <select name="dept">
	   <option value="cse">Computer science</option>
	   <option value="tt">Textile Technology</option>
	   <option value="me">Mechanical</option>
	   <option value="ee">Electrical</option>
	   </select>
	   
	 </td>
	</tr>

	<tr>
	 <td>UPLOAD EBOOK:</td>
	 <td><input type="file" name="file"  /></td>
	</tr>
      <tr>
	  <td><h2><input style="margin-left:180%;margin-top:10%;" type="submit" name="sub" value="SUBMIT"/></h2></td>
	  </tr>
   </table>

 </form>
</div>
</div>
</body>
</html>

<?php
$msg="";
include("connection.php");
session_start();

$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$id=$_GET['id'];


$query="select * from book where `book`.`b_id`= '$id'";
$query1=mysqli_query($con,$query);
$ros=mysqli_fetch_array($query1);
$book_name=$ros['booksname'];
$auth_name=$ros['authorname'];







if(isset($_POST['sub'])){
    
$query="select * from book where `book`.`b_id`= '$id'";
$query1=mysqli_query($con,$query);
$ros=mysqli_fetch_array($query1);
$path=$ros['path'];
header('content-Disposition: attachment;filename = '.$id.'');
header('content-type:application/pdf');
header('content-length='.filesize($path));
readfile($path);

}





if(isset($_POST['rqst'])){
    
    
    $query="select * from student_book where `student_book`.`emailid`= '$email'";
    $query1=mysqli_query($con,$query);
    $ros=mysqli_fetch_array($query1);
    
    
    
    
if ($ros[1]!="")
   {
         
        $book2=$ros['book_2'];
    
        if($book2=="")
        {
         $sql1= "select date_format(curdate(),'%d-%m-%Y')" ;
	     $res1 = mysqli_query ($con,$sql1);
	     $row1 = mysqli_fetch_row($res1);
	     $recive=$row1[0];
            
         $sql2= "select date_format(curdate()+15,'%d-%m-%Y')" ;
	     $res2 = mysqli_query ($con,$sql2);
	     $row2 = mysqli_fetch_row($res2);
	     $submit=$row2[0];
            
            
            $sql="UPDATE `student_book` SET". "`book_2_id` ='$id',"."`book_2` = '$book_name',"."`recive_date_2` = '$recive',". "`submisson_date_2` = '$submit'"." WHERE `student_book`.`emailid` ="."'$email'";
          
              $data=mysqli_query($con,$sql); 
             
            
              if($data)
              {
                $msg= "Book Requested..!!<br>Communicate With Librarian.";
              }
              else{
                  $msg="Something Went Wrong";
                  
                   }
           }
    
    
        else{
            $msg="You Can'nt Request Books.<br>Please Return Previous Books.";
             }
        }
    
    
    
    //2nd condition=====>>
    
        if($ros[1]==""){
            
         $sql1= "select date_format(curdate(),'%d-%m-%Y')" ;
	     $res1 = mysqli_query ($con,$sql1);
	     $row1 = mysqli_fetch_row($res1);
	     $recive=$row1[0];
            
         $sql2= "select date_format(curdate()+15,'%d-%m-%Y')" ;
	     $res2 = mysqli_query ($con,$sql2);
	     $row2 = mysqli_fetch_row($res2);
	     $submit=$row2[0];
            
            $insert="INSERT INTO `student_book`(`emailid`,`book_1_id`,`book_1`,`recive_date_1`,`submisson_date_1`) VALUES('".$email."','".$id."','".$book_name."','".$recive."','".$submit."')";
            
           
              $data=mysqli_query($con,$insert); 
            
            
            
              if($data)
              {
                $msg= "Book Requested..!!<br>Communicate With Librarian.";
              }
              else{
                  $msg="Something Went Wrong";
                  
                   }
            
            }
}




?>

<html>
<head><title>View Book</title>
    
<style>
body{
	background: url(bg.jpg);
}
#table1{
		width: 70%;
		text-align: center;
		height: 40px;
    margin-left: 15%;
    font-size: 20px;
   
	}
	#table2{
		color: white;
	
	}
	.td1{
		padding: 1px;
		background-color:#660000;
        font-weight:bold;
		
	}
	.td1:hover{
		background: green;
	}
	.td2{
		padding: 5px;
	}
	a{
		text-decoration: none;
		color: white;
		
	}
  .box{
    width:74%;
    height:160px;
	
    background-size: cover;
    margin-left: 13%;
    opacity: .9;
  
  }
  .boxtwo{
    background-image: url("bg4.jpg");

    box-shadow:0px 0px 15px lightgreen;  
 
  }

.five{
  padding:10px 0px 10px 10px;
	width: 500PX;
  margin-top: 20px;
  margin-left: 23%;
  height:300px;
  border-radius:12px;
  margin-right: 5%;

  font-size:22px;


}
   .five input[type="submit"]
          {

		    font-size:15px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:40% ;
			background:#660000;
			color:#FFFFFF;
			font-weight:bold;
			
			}
    
    .td3{
        font-size: 13px;
        font-family: cambria;
        color: #FFFFFF;
        font-weight: bold;
    }
</style>
</head>

<body>
  <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%" >
       <tr>
          <td style="color:white"><h1 align="center"><i>Welcome To the Student Library </i></h1></td>
        </tr>
        <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon";>View Book </mark></i></b></td>
        </tr>
    </table>
  </div>
   
   <table id="table1">
	<tr>
		<td class="td1">
			<a href="sdb.php">HOME</a>
		</td>
		<td class="td1">
			<a href="sbooks.php">YOUR BOOKS INFO</a>
		</td>
		<td class="td1">
			<a href="search.php">SEARCH </a>
		</td>
		<td class="td1">
			<a href="aboutus.php">ABOUT US </a>
		</td>
		<td class="td1">
			<a href="index.php">LOG OUT</a>
		</td>
	</tr>
</table>
    <br>
    <br>

   <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:73.5%; height:360px; margin-left:13%;background-color:white">

        <fieldset style="background:rgba(0,0,0,0.38)" class="five">
            <form method="post">
		
<table  id="table2">
	<tr>
		<td  class="td2">
		BOOK NAME :
		</td>
		<td class="td3">
            <?php echo $book_name; ?>
			
		</td>
	</tr>
	<tr>
		<td class="td2">
	    AUTHOR NAME :
	    </td>
		<td class="td3">
            <?php echo $auth_name; ?>
			
		</td>
	</tr>
	<tr>
		<td class="td2">
		ID :
		</td>
		<td class="td3">
			<?php echo $id; ?>
		</td>
	</tr>

		
	
	<tr>
		<td class="td2">
		E-BOOK :
		</td>
		<td class="td2">
            
			<input type="submit" name="sub" value="DOWNLOAD"> 
		</td>
	</tr>
	<tr>
		<td style="padding-top: 40px;padding-left: 95px">
		<input type="submit" value="Get The Book" name="rqst" style="background: #660000;border-radius: 2px;height: 30px;border: none;font-weight: bold;color: white" >
		</td>
        
        <td style="color:yellow;font-weight:bold;text-align:center;padding-top:30px;padding-left:50px"><?php echo $msg; ?></td>
	</tr>
</table>
                </form>
      </fieldset>
      </div >

     <div class="boxthree" style="background-color:#660000; border:solid 2px #660000;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
     <h6 style="line-height:0.5px;color:white;font-size:15pt;margin-top:15px;margin-left:4%;">Thank You Students.</h6>


    </div>

  </body>
</html>
<?php 
session_start();
$name=$_SESSION["sname"];
$email=$_SESSION["semail"];
$gender=$_SESSION["sgender"];


include("connection.php");
?>

<html>
<head>
<title>book info</title>
    <style>
body{
  background: url("bg.jpg");
}
.box{
  width:74%;
  height:160px;
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
  border-radius: 12px;

}
.boxtwo{
  background-image: url("bg4.jpg");
  background-size: cover;
   box-shadow:0px 0px 15px lightgreen;
  border-radius:12px;

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
  padding-left:13%;

}
.three{
  margin-left: 15%;
  margin-top: 5px;
}
        table,tr,td{
            text-align: center;
        }
</style>


</head>
<body>

  <head><title>LOGIN_PAGE</title></head>
  <body>
    <div class="box">
     <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
        <tr>
          <td style="color:white"><h1 align="center"><i>Welcome To the Student Library</i>  </h1></td>
        </tr>
        <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon";>YOUR BOOKS INFORMATION</mark></i></b></td>
        </tr>
      </table>
    </div>



      <div class="nav">
        <ul>
          <li><a href="sdb.php">HOME</a></li>
          <li><a  style="background-color: #660000;" href="sbooks.php">YOUR BOOKS INFO</a></li>
		   <li><a href="search.php">SEARCH</a></li>
          <li><a href="aboutus.php">ABOUT US</a>
          </li>
		  	 
          <li><a href="index.php">LOGOUT</a></li>
        </ul>
    <br><br>
          
          
  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:84%; height:360px; margin-left:0%;margin-top:10px;background-color:white">
      
      
      
    <fieldset  style ="height:320px; width:650px;overflow:auto" class="three"  >
      <legend align="center" style="color:white"><b><u>Your Books</u></b></legend>

    <table width="100%" height="310px" border="1"  align="center" style="color:white;  background:rgba(0,0,0,0.38);">
      <tr>
        <th height="50">BOOK ID</th>
        <th>BOOK NAME</th>
        <th>RECIEVE DATE </th>
        <th>SUBMISSION DATE</th>
      </tr>
      
        
        
        <?php $query1="SELECT * FROM `student_book`  where `student_book`.`emailid` = '$email'";
        
        $data=mysqli_query($con,$query1);
        
	              $row = mysqli_fetch_array($data);
                      if($row[0]!=""){   
                      
                        echo "<tr>";
                        echo "<td>" ;echo $row["book_1_id"]; echo "</td>";
                        echo "<td>";echo $row["book_1"]; echo "</td>";
                        echo "<td>"; echo $row["recive_date_1"]; echo "</td>";
                        echo "<td>"; echo $row["submisson_date_1"]; echo "</td>";
                        echo "</tr>";
                      
                      
                      
                    }
        
        else{
                        echo "<tr>";
                        echo "<td>" ;echo "You"; echo "</td>";
                        echo "<td>";echo "Have"; echo "</td>";
                        echo "<td>"; echo "No"; echo "</td>";
                        echo "<td>"; echo "Book"; echo "</td>";
                        echo "</tr>";
                      }

	            ?>
            
        
         <?php
        $query1="SELECT * FROM `student_book`  where  `student_book`.`emailid` = '$email'";
        
        $data=mysqli_query($con,$query1);
        
            
        
	              $row = mysqli_fetch_array($data);
                      if($row[0]!=""){
                      
	                 
                      
                        echo "<tr>";
                        echo "<td>" ;echo $row["book_2_id"]; echo "</td>";
                        echo "<td>";echo $row["book_2"]; echo "</td>";
                        echo "<td>"; echo $row["recive_date_2"]; echo "</td>";
                        echo "<td>"; echo $row["submisson_date_2"]; echo "</td>";
                        echo "</tr>";
                          
                     
                      
                    }
             else{
                        echo "<tr>";
                        echo "<td>" ;echo "You"; echo "</td>";
                        echo "<td>";echo "Have"; echo "</td>";
                        echo "<td>"; echo "No"; echo "</td>";
                        echo "<td>"; echo "Book"; echo "</td>";
                        echo "</tr>";
                      }
        

	            ?>
        
    </table>
    </fieldset>

  </div>



        <div class="boxthree" style="background-color:#660000; border:solid 2px #660000;border-radius: 10px; width:73.5%; height:40px; margin-left:0.3%; margin-top:15px" >
     <h6 style="line-height:0.5px;color:white;font-size:15pt;margin-top:15px;margin-left:4%;">Thank You Students.</h6>


    </div>




</body>
</html>

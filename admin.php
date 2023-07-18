<?php 
include("connection.php");?>

<html>
<head>
<style>
body{
  background: url("bg.jpg");
}
    table{
                width: 100%;
                border-collapse: collapse;
                height: auto;
        text-align: center;
        color: white;
        font-weight: bold;

            }
    
    th{
        font-size: 17px;
        text-decoration: underline;
        font-style: italic;
    }
    
    .main{
        width: 80%;
        box-shadow: 0px 0px 20px red;
        border-radius: 20px;
        overflow: auto;
        margin-left: 10%;
        margin-top: 2%;
        height:270px;
        background: rgba(0, 0, 0, 0.57);
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
  background-size: cover;
  border-radius:12px;

}
ul{
  padding: 0  ;
  list-style: none;
}
ul li{
  float: left;
  width: 250px;
  height: 40px;
  background-color: #660000;
  font-weight: bold;
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
.three{
  margin-left: 60%;
  margin-top: 5px;
  box-shadow:0px 0px 15px green;
}
    button{
        margin-top: 10px;
    }
</style>


<title>Admin Dasboard</title>
</head>
<body>

  
    <div class="box">
     <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
        <tr>
            <td style="color:white"><h1 align="center"><i>Welcome To The Student Library</i></h1></td></tr>
        <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon";>ADMIN PANEL</mark></i></b></td>
        </tr>
      </table>
    </div>



      <div class="nav">
        <ul>
          <li><a style="background-color: #660000" href="admin.php">Home</a></li>
          <li><a href="add_book.php">Add Book</a></li>
            <li><a href="delbook.php">Delete Book</a></li>
          <li><a href="index.php">Logout</a></li>
        </ul>
           </div>
    <br><br>
          
          
  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:84%; height:360px; margin-left:9%;margin-top:10px;background-color:white">
      
<!--    <input type="text" placeholder="search by book id"><button type="button">search</button>  -->
       <p style="text-align:center;color:white;font-weight:bold">ALL BOOKS</p>
   <div class="main">
      
       <table>
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Book Writter</th>                  
					<th>Available Copies</th>
                    <th>Actual Copy</th
                    
                </tr>
                
                
                
                    
                    
                    
            <?php 
           
           $data=mysqli_query($con,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {   
                        echo "<tr>";
                        echo "<td>" ;echo $row["b_id"]; echo "</td>";
                        echo "<td>";echo $row["booksname"]; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["copies"]; echo "</td>";
                        echo "<td>"; echo $row["file_name"]; echo "</td>";
                        echo "</tr>";
                    }

	            ?>
                </table>
      
      </div>   
   

  </div>
      
      
      
      
 




        <div class="boxthree" style="background-color:#660000; border:solid 2px #660000;border-radius: 10px; width:73.5%; height:40px; margin-left:9%; margin-top:15px" >
     <h6 style="line-height:0.5px;color:white;font-size:15pt;margin-top:15px;margin-left:4%;">Thank You Students.</h6>


    </div>



   
    </body>
  
</html>

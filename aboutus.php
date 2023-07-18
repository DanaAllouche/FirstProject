<html>
<head>
<title>About Us</title>
<style>
body{
  background: url("bg.jpg");

}
.box{
  width:74%;
  height:160px;
  background-image: url("bg.jpeg");
  background-size: cover;
  margin-left: 13%;
  opacity: .9;



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
  margin-left: 60%;
  margin-top: 5px;
 
}
    td{
        text-align: center;
    }

</style>


</head>
<body>

  
    <div class="box">
     <table  style =" font-size:16pt"  align="center" width="100%" height="100%">
        <tr>
          <td style="color:white"><h1 align="center"><i>Welcome To the Student Library </i></h1></td>
        </tr>
        <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon";>ABOUT US</mark></i></b></td>
        </tr>
      </table>
    </div>



      <div class="nav">
        <ul>
          <li><a href="sdb.php">HOME</a></li>
          <li><a href="sbooks.php">YOUR BOOKS INFO</a></li>
		   <li><a href="search.php">SEARCH</a></li>
          <li><a style="background-color: #660000" href="aboutus.php">ABOUT US</a>
          </li>

          <li><a href="index.php">LOGOUT</a></li>
        </ul>
    <br><br>
    </div>
          
          
  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:84%; height:850px; margin-left:10%;margin-top:10px;background-color:white">
      
      <h1 style="color:#000000;text-align:center;background:rgba(255, 255, 255, 0.82)">ABOUT OUR STUDENT LIBRARY </h1>
      <P style="color:white;text-align:center;width:60%;font-weight:bold;margin-left
:20%;background:rgba(0, 0, 0, 0.5);;border-radius:10px;padding:3%;font-size:15px">This project is the prototype of a Simple Library. 
Librarian has a provision to add book details like ID number, book title, author name, 
through the web page. In addition to this, librarian or any user has a provision to search for the available books in the 
library by the book id or book Name. If book details are present in the database, the search details are displayed 
on the web page.Student can request the librarian  for getting the book via this web.Student can easily download 
this book's E-Book which is PDF file.</P>
      
       
       <h2 style="color:#000000;text-align:center;background:rgba(255, 255, 255, 0.82)"> Group Members </h2>
      <div style="color:white;text-align:center;width:30%;font-weight:bold;margin-left
:30%;background:rgba(0, 0, 0, 0.5);box-shadow:0px 0px 20px white;border-radius:10px;padding:3%;font-size:15px;height:200px;"><marquee direction="up" scrolldelay="200" >
          
         <tr><td><br/></td><td>1. Dana Allouche </td><td><br/></td><td> Role = ( UI  Developer + Backend Developer )
         <br>Mail-ID : dana@gmail.com</td><td><br/></td></tr>
            
            <br/>
            <hr>
          
          
         <tr><td><br/></td><td>2. Fadi Hassanien </td><td><br/></td><td>Role  = ( UI  Developer  )<br>Mail-ID : fadi@gmail.com</td><td><br/></td></tr>
            
            <br/>
           
          
          
          </marquee></div>
   

  </div>



          <div class="boxthree" style="background-color:#660000; border:solid 2px #660000;border-radius: 10px; width:73.5%; height:40px; margin-left:10%; margin-top:15px" >
     <h6 style="line-height:0.5px;color:white;font-size:15pt;margin-top:15px;margin-left:4%;">Thank You Students.</h6>


    </div>


</body>
</html>

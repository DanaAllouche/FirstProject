<?php include("connection.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))

{
  $name=$_POST['name1'];
  $roll=$_POST['roll'];
  $gender=$_POST['gender'];  
  $email=$_POST['email'];
  $password=$_POST['password'];
    
  $_SESSION["sname"]=$name;
  $_SESSION["semail"]=$email;
    
    
    
    if($name!="" && $roll!="" && $email!="" && $password!="" )
  { 
        $insert="INSERT INTO `user`(`roll`,`gender`,`name`,`emailid`,`password`) VALUES('".$roll."','".$gender."','".$name."','".$email."','".$password."')";
      $data=mysqli_query($con,$insert); 
      if($data)
	  {
	  
	  
          header("Location:registered.php"); 
	  }
        else
        {
            echo "Something Wrong Occurs..!! Please Try Again";
        }
        
    }
    else{
        echo "Fields Should Not Be Empty..!!";
    }
}


?>

<!DOCTYPE html>
<html>

<style type="text/css">
body{
  background: url("bg.jpg");
}
.box{
  width:74%;
  height:165px;
 
  background-size: cover;
  margin-left: 13%;
  opacity: .9;
}
.title h2{
       
       border:none;
       margin-left:-10px;
      margin-top: -05px;
      padding-top:3px;
      padding-bottom: 2px;
        padding-left:120px;
      
      width:77.2%;
      color:white;
           }
.one{
  margin-top: 1.5%;
  margin-left:52%;
  margin-right:2%;
  opacity: .9;

  height:320px;
  background:rgba(0,0,0,0.5);
}
.boxtwo{
  background-image: url("bg4.jpg");
  background-size: cover;
  box-shadow:0px 0px 15px lightgreen;
  border-radius:12px;
}
.boxtwo input[type="submit"]
       {

     font-size:25px;
     text-align:center;
   border:none;
   height:40px;
   margin-left:60% ;
   margin-top: 10px;
   background:#660000;
   color:#FFFFFF;
   border-radius:18px;
   }

</style>




<head><title>REGISTRATION</title></head>
<body>
  <div class="box">
   <table  style =" font-size:16pt" align="center" width="100%" height="100%">
      <tr>
        <td style="color:white"><h1 align="center"><i>Welcome To the Student Library</i></h1></td>
      </tr>
      <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon";>Registration Page</mark></i></b></td>
        </tr>
    </table>
  </div>
  <br><br>
  <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:73.5%; height:370px; margin-left:13%;margin-top:10px;background-color:white">

<fieldset align="center" style="color:blue;" class="one">
  <div class="title">
  <h2>YOUR DETAILS</h2>
    </div>

<form action="" method="post">
<table align="Right" style="color:white;font-size:13pt">
	  <tr>
			<td>NAME:</td>
 <td ><input type="text" required="required" name="name1" size="17"
 maxlength="30" style="color:blue"/></td>

	  </tr>
    <tr>
      <td>GENDER.:</td>
      <td>
<input type="radio" name="gender" value="m" checked> Male
<input type="radio" name="gender" value="f"> Female</td>
    </tr>
<tr>
<td>UNIVERSITY ROLL NO.:</td>
 <td><input type="text" name="roll" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>

<tr>
<td>DEPARTMENT:</td>
 <td><select required name="department">
  <option value="cse">Computer Science Engineering</option>
  <option value="tt">Textile Technology</option>
  <option value="me">Mechanical Engineering</option>
  <option value="ee">Electrical Engineering</option>
</select></td></tr>
<tr>
<td>
YEAR:</td>
 <td>
   <select required name="year">
     <option value="1st_year">1st Year</option>
     <option value="2nd_year">2nd Year</option>
     <option value="3rd_year">3rd Year</option>
     <option value="4th_year">4th Year</option>
    </select>
 </td></tr>
<tr><td>E-MAIL ID:</td>
 <td><input type="email" name="email" required="required" size="17"
 maxlength="30" style="color:blue"/></td></tr>
<tr>
<td>
PASSWORD:</td>
 <td><input type="text" name="password" required="required" size="17"
 maxlength="30" style="color:blue"/>
</td></tr>

 <tr>
  <td><input type="submit" name="submit"
   value="REGISTER"></td>
</tr>
 </table>
</form>
 </fieldset>
</div>



  <div class="boxthree" style="background-color:#660000; border:solid 2px #660000;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
     <h6 style="line-height:0.5px;color:white;font-size:15pt;margin-top:15px;margin-left:2%;">For any questions please <a href="aboutus.php">contact us</a>.Thank You.</h6></h6>


    </div>


 </body>
</html>

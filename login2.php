<?php  
session_start();
?>  
 
<html>  
<head>
 <title>Login</title>  
</head>  
<body style='background:gray;'>  
  <center>
  <h1 style='background:orange; color:whitesmoke; '> Login here </h1>
<form name="form" method="post" action="login2.php">  
<table border="1" cellpadding="4" cellspacing="5" style='background:slateblue; color:white'> 
  <tr><td> User Name: </td>

<td> <input class="form-control" placeholder="User name" name="email" type="text" autofocus>   </td> </tr>
<tr> <td> Password: </td>
<td> <input class="form-control" placeholder="Password" name="pass" type="password" value="">  </td> </tr>
<tr> <td colspan="2" align="right"> <input  type="submit" value="login" name="login">   </td>
</tr>
</table>
</form>  
</body>  
</html>  

<?php  
$con = mysqli_connect('localhost','root','','college_db');
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
$check_user="select * from users WHERE user='$user_email' AND passw='$user_pass'";  
  
    $run=mysqli_query($con,$check_user);  
      if(mysqli_num_rows($run))  
    {  
  echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;
      }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>
<a href="reguser.php" style="color:white"> Register here to SignUp! </a>
<h1 style='background:greenyellow; color:skyblue;'> by MIT India </h1>
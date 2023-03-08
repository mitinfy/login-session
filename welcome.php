<?php  
session_start();  
  if(!$_SESSION['email'])  
{  
header("Location: login2.php");
}  
?>  
 
<html>  
<head>  
<title> Welcome!</title>  
</head>  
  <center>
<body bgcolor="green" text="white">  <br>
<h1 style="background-color:khaki; border-radius:10px; color:blue">Welcome:
<?php echo $_SESSION['email']; ?>  
</h1>
<img src="user.png" height=100 width=100>

 <hr>
<a href="#"> About </a> | 
<a href="#"> Service </a> |
<a href="#"> Products </a> |
<br> <br>
<h3 style="background-color:khaki; display:inline; border-radius:10px"><a href="logout2.php">Logout here</a> </h3>  
</body>  
</html>
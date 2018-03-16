<html>
<head>
</head>
<body>
<h1>Create your Account</h1>
<form method = "POST" action = "Register.php">
  <b>Admin User name:</b><br>
  <input type="text" name="username" placeholder="Enter your username"><br>

  <b>Admin E-mail:</b><br>
  <input type="email" name="email" placeholder="type your email"><br>
   <b>Password:</b><br>  
    <input type="password" name="psw" placeholder="Enter password"><br>

  <input type="submit" name="submit">
  </form>
<?php
if(isset($_POST['submit']))
{
	$uname = $_POST['username'];
	$pass = $_POST['psw'];
	$email = $_POST['email'];
	
	$conn=mysqli_connect("localhost","root","" ,"data");
	 if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
	mysql_select_db("data");
    $qury = "insert into admin(username,Email,Password)values('$uname','$email','$pass')";
	if(mysql_query($qury))
{
	echo "Your account has created";
}	
}

?>
  </body>
  </html>
<html>
<head>
	<title>FORM ACTION </title>
</head>
<body>

<?php

 $fname = $_POST['fname'];
 $pwd = $_POST['pwd'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 echo "First Name is:".$fname."<br>";
 echo "Last Name is:".$lname."<br>";
 echo "Email is:".$email."<br>";
 echo "Password is:".$pwd."<br>";

 ?>
 </body>
</html>

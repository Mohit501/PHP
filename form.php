<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style type="text/css">
        table
        {
        	height: 50px;
        	border-style: outset;
        	color: purple;
        	font-size: 40px;
        	background-color: #ECECEC;
        	border-top-right-radius: 15px; 
        	border-top-left-radius: 15px; 
        	border-bottom-right-radius: 15px; 
        	border-bottom-left-radius: 15px; 
        	border-top-color: red;
        	border-bottom-color: blue;
        	border-left-color: green;
        	border-right-color: yellow;
        }		
        form
        {

        }
	</style>
</head>
<body>
	<center>
		<h2> Registration Form </h2>
		<table>
		<form  method="POST" action="form_action.php">
			<tr>
				<td><label for="fname"> First Name:</label></td>
			    <td><input type="text" name="fname"></td>
			</tr>
			<tr>
			<td><label for="lname">Last Name:</label></td>
			<td><input type="text" name="lname"></td>
			</tr>
			<tr>
			<td><label for="email">Email</label></td>
			<td><input type="Email" name="email"></td>
			</tr>
			<tr>
			<td><label for="pwd">Password</label></td>
			<td><input type="Password" name="pwd"></td>
		    </tr>
		    <tr>
            <td><input type="submit" name="submit" value="submit" style="width: 90px;height: 30px; background-color: white;"></td>

			</tr>
		</form>
	</table>
	</center>
   
</body>
</html>
<!doctype html>

<html>
<head>
	<title>Book Store</title>
	<style type="text/css">
		table
		{
			border-style: groove;
			font-size: 30px;
			color: purple;

		}
	</style>
</head>
<body>
<CENTER><h2>Book Store</h2>
<form action="book_check.php" method="POST">
	<table>
		<tr>
			<td><LABEL>Name:</LABEL></td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><LABEL>Address:</LABEL></td>
			<td><input type="text" name="Address"></td>
		</tr>
		<tr>
			<td><LABEL>Contact:</LABEL></td>
			<td><input type="text" name="Contact"></td>
		</tr>
		<tr>
			<td><LABEL>Gender:</LABEL></td>
			<td><input type="radio" name="Gender" value="Male">Male</td>
            <td><input type="radio" name="Gender" value="Female">Female</td>
        </tr>
        <tr>
        	<td><Label>Books</Label></td>
        	<td><select name="books">
        		<option>IOT</option>
        		<option>TOC</option>
        		<option>AJAVA</option>
        		<option>COA</option>
        		<option>ADA</option>
        	</select></td>
        </tr>
        <tr>
        	<td><LABEL>Quantity</LABEL></td>
        	<td><select name="Quantity">
        		<option>1</option>
        		<option>2</option>
        		<option>3</option>
        		<option>4</option>
        		<option>5</option>
        	</select></td>
        </tr>
        <tr>
        	<td>
        	<input type="submit" name="submit" value="submit">
        </td>
        </tr>

	</table>
</form>
</CENTER>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table
		{
			border-style: groove;
			font-size: 30px;
			color: purple;

		}
	</style>
	<title></title>
</head>
<body>
<center>
<table>
	<tr>
		<td>Name:</td>
		<td><?php echo $_POST['name'];?></td>
	</tr>
	<tr> 
		<td>Address:</td>
		<td><?php echo $_POST['Address']; ?></td>
	</tr>
	<tr> 
		<td>Gender:</td>
		<td><?php echo $_POST['Gender']; ?></td>
	</tr>
	<tr> 
		<td>Books:</td>
		<td><?php echo $_POST['books']; ?></td>
	</tr>
	<tr> 
		<td>Quantity:</td>
		<td><?php echo  $_POST['Quantity']; ?></td>
	</tr>
	<tr>
		<td> Price: </td>
		<td><?php
		$name = $_POST['books'];
		$quant = $_POST['Quantity'];
		if ($name == "IOT")
		{
			$price = 250;
		}
		if ($name == "TOC")
		{
			$price = 450;
		}
		if ($name == "AJAVA")
		{
			$price = 150;
		}
        if ($name == "COA")
		{
			$price = 210;
		}
		if ($name == "ADA")
		{
			$price = 430;
		}
		echo $quant*$price;?>
	</td>
</tr>

</table>
</center>
</body>
</html>
<?php


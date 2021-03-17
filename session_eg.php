<?php
session_start();
if(isset($_SESSION['pgvisit']))
{
	$_SESSION['pgvisit'] = $_SESSION['pgvisit'] + 1;
	echo "You have visited this page".$_SESSION['pgvisit']."Times";
}
else {
	$_SESSION['pgvisit'] = 1;
	echo  "You have visited this page".$_SESSION['pgvisit']."Times";
}

?>
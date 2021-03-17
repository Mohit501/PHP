<?php
if(isset($_COOKIE["MyName"]))
{
	echo $_COOKIE["MyName"];
}
else
{
	echo "Cookie not set";
}


?>
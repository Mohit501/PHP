<?php

echo "if else conditionals in php <br>";
$a = 25;
$b = 30;
$c = $a+$b;
if($a == 25)
{
	echo "a is 25<br>";
}
else
{
	echo "a is not 25<br>";
}

if($b == 10)
{
	echo "This is wrong value of b<br>";
}

else
{
	echo "In previous if the value of b was incorect so the real value of b i printed in the else statement<br>";
}

if($c <= 55)
{
	echo "This was a success<br>";
}


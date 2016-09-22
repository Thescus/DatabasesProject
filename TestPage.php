<!DOCTYPE html>
<html>
<body>

<?php
//declare and set variables
$howjew = 1;
$kyle = "jew";
$numbersBro = array(69, 420, 5, 1000);

//create constant
define("RACE", "white person");

//make a function
function addJew($nJew)
{
	//change variable by variable name
	$GLOBALS['howjew'] += $nJew;
}

//say something
echo "Kyle is a " . $kyle . "<br><br>";

//use constant
echo "Kyle is a " . RACE . "<br><br>";

//for looping
for ($x = 1; $x <= 10; $x++)
{
	//using print works the same as echo
	print "Kyle is a $kyle x" . $howjew . "<br>";
	addJew(1);
}
print "<br>";

//foreach to print out an array
foreach ($numbersBro as $value)
{
	echo "$value <br>";
}
print "<br>";

//dump the contents of a variable or array
var_dump($numbersBro);
?>

</html>
</body>
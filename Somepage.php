<!DOCTYPE html>
<html>
<body>

<h1>Kyle is a Jew</h1>
<h2>Testificate</h2>

<form action="AnotherPage.php" method ="post">
Name: <input type="text" name="name"><br>
Rekt:
	<input type="radio" name="rekt" value="yes">Yes
	<input type="radio" name="rekt" value="no">No
	<br>
<input type="submit" value ="Continue">
</form>
<br>

<?php
$bHasCookies;

if(!isset($_COOKIE["Username"]))
{
	echo "Username not set!";
	$GLOBALS['bHasCookies']=false;
}
else
{
	echo "Username is " . $_COOKIE["Username"];
	$GLOBALS['bHasCookies']=true;
}
?>

<form action="SomePage.php" method="post">

<?php if($GLOBALS['bHasCookies']==true): ?>
	<form action="SomePage.php" method="clearcookies">
		<input type="submit" value="Clear Cookies">
	</form>
	
	<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		setcookie("Username", "", time() - 3600);
		setcookie("RektStatus", "", time() - 3600);
	}
	?>
<?php endif; ?>

</body>
</html> 
<html>
<body>

<?php if(isset($_POST['name']) && strlen($_POST['name']) > 0): ?>
	Welcome <?php echo $_POST["name"] . "!"; ?><br>
<?php else: ?>
	Welcome User!
<?php endif; ?>
	
<?php if(isset($_POST['rekt'])): ?>
	Rekt: <?php echo $_POST["rekt"]; ?><br>
<?php endif; ?>

<?php
if(isset($_POST['name']))
{
	$cUserName = $_POST["name"];
	setcookie("Username", $cUserName, time() + (86400 * 30), "/");
}

if(isset($_POST['rekt']))
{
	$cRektStatus = $_POST["rekt"];
	setcookie("RektStatus", $cRektStatus, time() + (86400 * 30), "/");
}
?>

</body>
</html> 
<?php
include("loginserver.php");
?>

<!DOCTYPE html>
<html>
<body>

<h1>Jim's Trees</h1>

<h2>Log In</h2>
<!-- Display an error upon incorrect information input -->
<span><?php echo $loginError; ?></span>

<form action="" method="post">
Username <br><input type="text" name="username"><br>
Password <br><input type="text" name="password"><br>
<input type="submit" value="Log In" name="btnLogIn">
</form>
<br>

<h2>Create Account</h2>
<!-- Display an error upon incorrect information input -->
<span><?php echo $createAccountError; ?></span>

<form action="" method="post">
Username <br><input type="text" name="username"><br>
Password <br><input type="text" name="password"><br>
Repeat Password <br><input type="text" name="repeatpassword"><br>
<input type="submit" value="Create Account" name="btnCreateAccount">
</form>
<br>

</body>
</html> 
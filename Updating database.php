<?php 
session_start();
IF(!isset($_SESSION["username"]))
{
header("location:login.php");
}
?>
<html>
<head></head>
<body>
<form method="post" action="passchange.php" name="form">
<input type="hidden" name="action" value="login">
<input type="hidden" name="hide" value="">
<table class='center'>
<tr><td>New Password:</td><td><input type="password" name="NewPassword" required></td></tr>
<tr><td> Confirm Password:</td><td><input type="password" name="Confirmpassword"required></td></tr>
</body>
</html>

<tr><td>&nbsp;</td><td><input type="submit" value="Submit"></td></tr>
<tr><td colspan=2>&nbsp;</td></tr>
<tr><td colspan=2>Lost your username or password? Find it <a href="https://www.authpro.com/auth/deluxe/?action=lost">here</a>!</td></tr>
<tr><td colspan=2>Not member yet? Click <a href="register.php">here</a> to register.</td></tr>
</table>
</form>
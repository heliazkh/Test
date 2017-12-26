<!DOCTYPE html>
<html>
<body>

<span><?php echo "Hi from Project!";?></span>

<form action="/action_page.php" method="post">
	First name:<br>
	<input type="text" name="login[firstname]" value="">
	<br>
	Last name:<br>
	<input type="text" name="login[lastname]" value="">
	<br><br>
	<input type="submit" value="Submit">
</form>

</body>
</html>
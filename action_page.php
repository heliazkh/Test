<?php

echo "Hi ".$_POST['login']['firstname'];


foreach ($_POST['login'] as $key => $value) {
	echo "<p><b>$key</b></p>";
	echo "<ul>";
	echo "<li>".$value."</li>";
	echo "</ul>";
}

echo "<a href='/table.php'>show table</a>";
?>




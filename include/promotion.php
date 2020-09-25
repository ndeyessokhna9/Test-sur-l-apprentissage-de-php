<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="menu">
	<?php
		include "menu.php"
	?>
	</div>
	<h1> Nos promotions </h1>
	<?php
		require "variables.php";
		echo $promotions;
	?>

</body>
</html>
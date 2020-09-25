
<?php
		setcookie("prenom","John",time()+3600*24*30);
 ?>

<!-- <?php
session_start(); 
$_SESSION['nom']="John";
 ?> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<!--  <form action="presentation.php" method="post">
	 	Nom: <input type="text" name="nom"></br>
	 	Email: <input type="text" name="email"></br>
	 	<input type="submit">
	 	
	 </form> -->

	<!--  <a href="presentation.php"> Qui es -tu</a> -->
	<?php
	if (isset($_COOKIE["prenom"]))
	 {
	 	echo "<h1> Hello " . $_COOKIE["prenom"] . "</h1>";
	 } 
	 else{
	 	echo "<h1> je ne te connais pas </h1>";
	 }
 ?>

</body>
</html>
	 
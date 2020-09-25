
<?php
session_start(); 

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	 <h1> hello c'est moi <?php echo $_GET["nom"] ?> et j'ai <?php echo $_GET["age"] ?> ans ! </h1>
 
<!--  <p> Hello moi c'est <?php echo $_POST['nom'] ?> et mon email c'est <?php echo $_POST['email']; ?></p> -->

 <!-- <p> Hello moi c'est <?php echo $_SESSION['nom'] ?></p>
  -->
 <!-- <?php var_dump($_SESSION)  ?> -->
</body>
</html>
	 
	


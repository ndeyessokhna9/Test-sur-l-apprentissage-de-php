<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
// 	function maFonction($message="pas de message"//(valeur par défaut de l'argument)
// )
// 	{
// 		echo $message;
// 	}
// 	maFonction("voici mon mesage");

		// function maFonction($message,$times){//(+sieurs arguments)
		// 	for ($i=1; $i <=$times ; $i++) {
		// 	echo "$message </br>"; 
				
		// 	}
 		
 	// }
 	// maFonction("coucou c'est moi!",15);


 	// function addition($x,$y){
 	// 	echo $x+$y;
 	// }
 	// 	addition(2,5)//fonction qui retourne une valeur
 	//ou bien
 	// return $x+$y;
 	// $z=addition(2,5);
 	// echo $z; 


		function addition( int $x, float $y):int
		{
			$z=$x+$y;
			var_dump($z);
			return $z;
		}
		$result=addition(2,3.5);
		echo result;
 		

	?>

</body>
</html>
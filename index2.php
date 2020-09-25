<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<?php
		
		 $variable1=7;//vaiable globale (ds le scope global)
		 $variable3=25;
		// echo $variable1 ;
		// function myFunction(){
			// global $variable1;//pour accéder à une variable globale(1er methode)
			 // echo $variable1 ;
			// echo $GLOBALS['variable1'] +  $GLOBALS['variable3'];// autre methode

			// $variable2=18;//variable locale(ds scope local)
			// echo $variable2;
		// }
			// myFunction();
			// echo $variable2;
			// function AddOneAndEcho(){
			// 	 static $variable1=7;//variable statique
			// 	$variable1++;
			// 	echo $variable1;
			// }
				// AddOneAndEcho();
				// AddOneAndEcho();
				// AddOneAndEcho();


				// $x="Helo moi c'est Sokhna";//variable de type string
				// echo $x;
				// echo"</br>";
				// echo $x;
				// var_dump($x);
				// $x=5;//variable de type int
					// $x=12.5;//float
					// $x=true;//boolean
				// echo $x;
				// var_dump($x);
			// $joursDeLaSemaine = array("lundi","mardi","mercredi","jeude" );
			// var_dump($joursDeLaSemaine);
			/**
			 * 
			 */
			// class Voiture{//type objet
			
			// 	function __construct(){
			// 		$this->couleur="blue";
			// 		}	
			// 	}
			// 	$maVoiture=new Voiture;
			// 	var_dump($maVoiture);

			// $var1= "apprendre-a-coder.com";
			// $var2= "apprendre-a-coder.fr";
			// $var3="le site apprendre-a-coder.com c'est de la balle !";
			// echo strlen($x);
			// echo str_word_count($x);
			// echo strpos ($x,"balle");
			// var_dump(strpos($x,"balle"));
			// var_dump(strpos($x,"bille"));
			// echo str_replace($var1,$var2,$var3);

			define("MON_URL","http://apprendre-a-coder.com" );
			// echo "le site " . MON_URL . " c'est de la balle !"; //ou bien

			function myFunction(){
				echo "le site " . MON_URL . " c'est de la balle !";
			}
			myFunction();
			
		 ?>
		

	

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	// $joursdeLasemaine= array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"); 
	// for ($i=0; $i <count($joursdeLasemaine ); $i++) { 
	// 	echo "$joursdeLasemaine[$i] </br>";
		
	// }

	// $personne=array("Piére" =>30,"Paul" =>40, "Jacques" => 50);
	// echo $personne["Paul"];
	// var_dump($personne);
	// foreach ($personne as $nom => $age)//ou bien foreach ($personne as $key=> $value)
	//  {
	// 	echo "$nom a $age ans. </br>";
	// 	}

	/**
	 * 
	 */
	class Etudiant{
		public $etudie=true;
		public $nom;
		public $age;
		public $notes;
		public function __construct($nom,$age,$notes) 
		{
			$this->nom=$nom;
			$this->age=$age;
			$this->notes=$notes;
		}
		public function sePresente(){
		if ($this->etudie)
		 {
			echo " je m'appelle $this->nom et j'ai $this->age ans.</br>" ;
			foreach($this->notes=array("maths" => 17, "français" => 9, "anglais" => 12) as $matiere => $note)
			 {
				echo" En $matiere, j'ai obtenue $note/20.";
			}
		}
		
	}
}
	$notesjohn=array("maths" => 17, "français" => 9, "anglais" => 12);
	$john=new Etudiant("John","31", $notesjohn);
	$john->sePresente();

	$notesharry=array("philosophie" => 8, "sciences politiques" => 13, );
	$harry=new Etudiant("harry","50", $notesharry);
	$harry->sePresente();
	echo "</br></br></br>";
	// harry->etudie=false;
	


	?>

</body>
</html>
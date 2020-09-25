<? php
		



	class Fruit {
	  public $name;
	  public $color;

	  function __construct($name,$color) {
	    $this->name = $name;
	    $this->color = $color;
	  }
	  function get_name() {
	    // return $this->name;
	    echo "mon nom c'est".$this->name."ma couleur est".$this->color ;
	  }
	}

	$apple = new Fruit("Apple","rouge");
	echo $apple->get_name();




?>

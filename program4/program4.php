<?php

//this program uses a factory, a decorator and a strategy

// Standard hairstyle class
class hair  {
  private $length;
  private $style;
  private $color;

  function __construct($length, $style, $color) {
    $this->make = $length;
    $this->model = $style;
    $this->color = $color;
 }

 function getLength() {
   return $this-> $length;
 }
 function getStyle() {
   return $this-> $style;
 }
 function getColor() {
   return $this-> $color;
 }
 function getLengthandStyle() {
   return $this->getLength() . ' ' . $this->getStyle() ;
 }
}
// hair factory is created to make cars 
class hairFactory {
  public static function create($length, $style, $color) {
    return new hair($length, $style, $color);
  }
}
// hair decorator 
class hairDecorator {
  protected $hair;
  protected $color;
  public function __construct(hair $hairIn) {
    $this->hair = $hairIn;
    $this->colorSet();
 }
 
 function setColor() {
   $this->color = $this->hair->getColor();
 }
 function displayColor() {
   return $this->color;
 }
}
//decorator for each hair color with various colors 
class silverHair extends hairDecorator {
  public $hd;
// change color to a younger looking color
  public function __construct(hairDecorator $hdIn) {
    $this->hd = $hdIn;
    $this->changeColor();
  }
  function changeColor() {
    $this->hd->color = 'Silver';
  }
}

class redHair extends hairDecorator {
  private $hd;
  public function __construct(hairDecorator $hdIn) {
    $this->hd->$hdIn;
    $this->changeColor();
  }
  function changeColor() {
    $this->hd->color = 'Red';
  }
}
class blackHair extends hairDecorator {
  private $hd;
  public function __construct(hairDecorator $hdIn) {
    $this->hd->$hdIn;
    $this->changeColor();
  }
  function changeColor() {
    $this->hd->color = 'Black';
  }
}
class brownHair extends hairDecorator {
  private $hd;
  public function __construct(hairDecorator $hdIn) {
    $this->hd->$hdIn;
    $this->changeColor() ;
  }
  function changeColor() {
    $this->hd->color = 'Brown';
 }
}
// Strategy 
class colorStrategy {
  public $stratey = NULL;

  public function __construct(hairDecorator $hdIn, $color) {
    if($color = 'silver') {
      $this->strategy = new silverHair($hdIn);
    }
    elseif($color = 'red') {
      $this->strategy = new redHair($hdIn);
    }
    elseif($color = 'black') {
      $this->strategy = new blackHair($hdIn);
    }
    elseif($color = 'brown') {
      $this->strategy = new brownHair($hdIn);
    }
    else {
      echo "The color you have chosen is not available";
    }
  }
}
//instantiate hair and the decorator and change color 
$myhair = hairFactory::create('Long', 'curly', 'blue');
$decorator = new hairDecorator($myhair);
// person fills form to get the color dye they would like and put into strategy
$color = $POST["color"];
$dyedHair = new colorStrategy($decorator, $color);
echo '<br>';
echo '<br>';
echo 'Your hair color is now ' . $decorator->showColor();

?>

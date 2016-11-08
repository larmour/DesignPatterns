<?php
abstract class Breakfast {
    protected $description = "Undecided Food choice";
    public abstract function getDescription();
    public abstract function price();
}
abstract class CondimentDecorator extends Lunch{}
class Omelette extends Breakfast {
    public function __construct() {
        $this->description = "Egg Omelette";
    }
    public function getDescription() {
        return $this->description;
    }
    public function price() {
        return 6.00;
    }
} 
class BreakfastSandwich extends Breakfast {
    public function __construct() {
        $this->description = "Egg and Pork Roll Sandwich";
    }
    public function getDescription() {
        return $this->description;
    }
    public function price() {
        return 3.50;
    }
}
class Bagel extends Breakfast{
    public function __construct() {
        $this->description = "Bagel";
    }
    public function getDescription() {
        return $this->description;
    }
    public function price() {
        return 2.99;
    }
} 
class Vegetables extends CondimentDecorator {
    private $Breakfast;
    public function __construct(Breakfast $b) {
        $this->Breakfast = $b;
    }
    public function getDescription() {
        return $this->Breakfast->getDescription() . ", Vegetables";
    }
    public function price() {
        return $this->Breakfast->price() + 1.00;
    }
}
class Cheese extends CondimentDecorator {
    private $Breakfast;
    public function __construct(Breakfast $b) {
        $this->Breakfast = $b;
    }
    public function getDescription() {
        return $this->Breakfast->getDescription() . ", American Cheese";
    }
    public function price() {
        return $this->Breakfast->price() + .75;
    }
}
class CreamCheese extends CondimentDecorator {
    private $Breakfast;
    public function __construct(Breakfast $b) {
        $this->Breakfast = $b;
    }
    public function getDescription() {
        return $this->Breakfast->getDescription() . ", Cream Cheese";
    }
    public function price() {
        return $this->Breakfast->price() + .25;
    }
}
?>
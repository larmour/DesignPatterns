<?php
 
include_once ('breakfastdecorator1.php');

echo "Begin Decorator design pattern test";
class Menu{
    public function __construct() {
        // Create a new Breakfast
        $Breakfast1 = new Omelette();
        // Add Veggies
        $Breakfast1 = new Veggies($Breakfast1);
        // Print a description of this Breakfast
        print $Breakfast->getDescription() . " $" . $Breakfast1->price() . "\n";
        
        // Create another Breakfast
        $Breakfast2 = new BreakfastSandwich();
        // Add Cheese
        $Breakfast2 = new Cheese($Breakfast2);
        // Print a description of this Breakfast
        print $Breakfast2->getDescription() . " $" . $Breakfast2->price() . "\n";
       
        // Create a third Breakfast
        $Breakfast3 = new Bagel();
        // Add cream cheese
        $Breakfast3 = new CreamCheese($Breakfast3);
        // Print a description of this breakfast
        print $Breakfast3->getDescription() . " $" . $Breakfast3->price() . "\n";
    }
}
echo new Menu();
?>
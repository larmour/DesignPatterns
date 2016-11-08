<?php
abstract class AbstractObserver {
   abstract function update(AbstractSubject $subject_in);
}

abstract class AbstractSubject {
  abstract function attach(AbstractObserver $observer_in);
  abstract function detach(AbstractObserver $observer_in);
  abstract function notify();
}
function writeIn($lin_in) {
   echo $line_in. "<br>";
}

class SolidObserver extends AbstractObserver {
    
    public function __construct() {
    }
    
    public function update(AbstractSubject $subject) {
      writeln('Solid OBSERVER 1 - Solid GOSSIP ALERT');
      writeln('NEW SUBJECT FAVORITES: '.$subject->getFavorites());
      writeln('Solid OBSERVER 1 - Solid GOSSIP ALERT FINISHED');      
      writeln('');
    }
}
class SolidObserver2 extends AbstractObserver {
    
    public function __construct() {
    }
    
    public function update(AbstractSubject $subject) {
      writeln('Solid OBSERVER 2] - NEW GOSSIP ALERT');
      writeln('Solid OBSERVER 2] - FAVORITES IN SUBJECT: '.$subject->getFavorites());
      writeln('Solid OBSERVER 2] - GOSSIP ALERT FINISHED');
      writeln('');
    }
}
class SolidSubject extends AbstractSubject {
    
    private $favoriteSolids = NULL;
    private $observers = array();
    
    function __construct() {
    }
    function attach(AbstractObserver $observer_in) {
       $this->observers[] = $observer_in;
    }
    function detach(AbstractObserver $observer_in) {
      foreach($this->observers as $okey => $oval) {
        if ($oval == $observer_in) { 
          unset($this->observers[$okey]);
        }
      }
    }
    function notify() {
      foreach($this->observers as $obs) {
        $obs->update($this);
      }
    }
    function updateFavorites($newFavorites) {
      $this->favorites = $newFavorites;
      $this->notify();
    }
    function getFavorites() {
      return $this->favorites;
    }
}
 
echo 'Test Observer design pattern';
echo '<br>';

  $SolidGossiper = new SolidSubject();
  $SolidGossipFan = new SolideObserver();
  $SolidGossiper->attach($SolidGossipFan);
  $SolidGossiper->updateFavorites('abstract factory, decorator, visitor');
  $SolidGossiper->updateFavorites('abstract factory, observer, decorator');
  $SolidGossiper->detach($SolidGossipFan);
  $SolidGossiper->updateFavorites('abstract factory, observer, paisley');
  
echo '<br>';
echo 'End of Observer Pattern Test';
?>
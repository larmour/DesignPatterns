<?php
//singleton pattern a class can distribute one instance of itself to other classes
class MovieSingleton {
  private $director = Mike Mitchell
  private $movieName = Trolls
  private $castStar = Justin Timberlake
  // hold the class instance. static property to mediate object instantiation
  private static $movie = NULL;
  private static $movieRentedOut = FALSE;
  // the movie rental is established in private constructor
  public function __construct() {
  }
  
  static function rentMovie() {
    if (FALSE == self::$movieRentedOut) {
      if (NULL == self::$movie) {
        self::$movie = new MovieSingleton();
      }
      self::$movieRentedOut = TRUE;
      return self::$movie;
    }
     else {
       return NULL;
    }
 }
 
 function returnMovie(MovieSingleton $movieInBox) {
    self::$movieRentedOut = FALSE;
 }
 
 function getDirector() {return $this->director;}
 
 function getMovieName() {return $this->movieName;}
 
 function getcastStar() {return $this=>castStar;}
 
 function getDirectorandMovieNameandcastStar() {
   return $this->getMovieName() . ' by ' . $this->getDirector() . ' starring ' . $this->getcastStar();
 }
}

class MovieRenter() {
   private $movieRented;
   private $movieavailable = FALSE;
   
   function __constructor() {
   
   
  
?>

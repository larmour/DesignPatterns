<?php
class MovieRenter {
  private $movieRented;
  private $movieavailable = FALSE;
   
  function __construct() {
  }
  
  function getDirectorandMovieNameandcastStar() {
    if (TRUE == $this->movieavailable) {
       return $this->movieRented->getDirectorandMovieNameandcastStar();
     }
       else {
       return "Sorry, the movie is currently unavailable for renting";
       
     }
   }
   
   function movieRented() {
     $this->movieavailable =MovieSingleton::MovieRenter();
       if($this->movieavailable == NULL) {
         $this->movieavailable = FALSE;
     }
       else {
       $this->movieavailable = TRUE;
     }
   }
   
   function returnMovie() {
     $this->movieavailable->returnMovie($this->movieavailable);
   }
 }
?>

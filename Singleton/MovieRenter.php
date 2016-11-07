<?php
clas MovieRenter {
  private $movieRented;
  private $movieavailable = FALSE;
   
  function __constructor() {
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
     $this->movieavailable == NULL) {
       $this->haveBook = FALSE;
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
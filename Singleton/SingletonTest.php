<?php
//initialize
include ('MovieSingleton.php');
  include ('MovieRenter.php');
    
  writeIn('Singleton Design Pattern Test');
  writeIn('');
  
  $MovieRenter1 = new MovieRenter();
  $MovieRenter2 = new MovieRenter();
  
  $MovieRenter1->rentMovie();
  writeIn('MovieRenter1 wants to rent the movie');
  writeIn('MovieRenter1 Director and Movie Name and Cast Star');
  writeIn($MovieRenter1->getDirectorandMovieNameandcastStar());
  writeIn('');
  
  $MovieRenter2->rentMovie();
  writeIn('MovieRenter1 wants to rent the movie');
  writeIn('MovieRenter1 Director and Movie Name and Cast Star');
  writeIn($MovieRenter1->getDirectorandMovieNameandcastStar());
  writeIn('');
  
  $MovieRenter2->rentMovie();
  writeln('MovieRenter1 returned the movie');
  writeln('');

  $MovieRenter2->rentMovie();
  writeln('MovieRenter2 Director and Movie Name and Cast Star ');
  writeln($MovieRenter1->getDirectorandMovieNameandcastStar());
  writeln('');

  writeln('End of the Singleton Program');

  function writeln($line_in) {
    echo $line_in.'<br/>';

?>
<?php
// creo la mia classe
class Movie{
  public $title;
  public $genre;
  public $releaseData;
  public $duration;
// creo il costruttore della mia classe
  function __construct($_title , $_genre , $_releaseData , $_duration)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->releaseData = $_releaseData;
    $this->duration = $_duration;
  }

  public function setTitle($_title){
    $this->title = $_title;
  }
  public function getTitle(){
    return $this->title;
  }

  public function setGenre($_genre){
    $this->genre = $_genre;
  }
  public function getGenre(){
    return $this->genre;
  }

  public function setReleaseData($_releaseData){
    $this->genre = $_releaseData;
  }
  public function getReleaseData(){
    return $this->releaseData;
  }

  public function setDuration($_duration){
    $this->genre = $_duration;
  }
  public function getDuration(){
    return $this->duration;
  }
};

// creo un metodo


$movie1 = new Movie("I am a lengend" , "Post-apocalyptic", 2007 , "1h 41m" );
$movie2 = new Movie("Shooter" , "Action" , 2007 , "2h 6m" );
$movie3 = new Movie("incerption" , "Fantasy",  2010 , "2h 28m" );

// echo $movie1->getTitle() . " ";
// echo $movie1->getGenre() . " ";
// echo $movie1->getDuration() . " ";
// echo $movie1->getReleaseData()





?>


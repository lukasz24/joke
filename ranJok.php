<?php

class Joke{
	private $http;
	private $jokeData;

public function __construct()
  {
    $this->http = new \GuzzleHttp\Client(); 
    $this->jokeData = json_decode($this->http->request('GET', 'http://v-ie.uek.krakow.pl/~s187443/list') -> getBody());
  }

  public function randomJoke(){
    $jokeSize = count($this->jokeData);  	
  	$lol = $this->jokeData[rand(0, $jokeSize - 1)] -> content;
    echo "$lol\n\n";   	  	
  }

  public function all($www){
    $jokeSize = count($this->jokeData);
    for($i = 0; $i < $jokeSize; $i++){
      $lol = $this->jokeData[$i] -> content;
    echo "$lol\n";
    if($www){
      echo "<br>";
    }   
      
    }
  }
}
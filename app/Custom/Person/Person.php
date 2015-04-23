<?php
namespace App\Custom\Person;

class Person {
    public $firstnames = ["Daenerys", "Jon", "Gregor", "Tyrion", "Arya", "Margaery", "Joffery", "Kahl", "Ramsay", "Petyr", "Ygritte"];
    public $lastnames = ["Stark", "Lannister", "Targaryen", "Tyrell", "Drogo", "Baratheon", "Snow", "Greyjoy", "Tully", "Arryn"];
    public $profiles = ["gold of hair", "Mother of Dragons", "King Slayer", "Breaker of Chains", "the Imp", "Master of Coin", "Master of Whispers", "rightful heir", "servant of darkness", "the last dragon"];
    public $months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    
    public $firstName = 6;
    public $lastName;
    public $birthday = "";
    public $profile = "";
    
    public function __construct($birthday, $profile) {
        $this->firstname = $this->getRandom($this->firstnames);
        $this->lastname = $this->getRandom($this->lastnames);
        if($birthday){
            $this->birthday = ",  born ".$this->getRandomDate();
        }
        else{
            $birthday = "";
        }
        if($profile){
            $this->profile = ",  ".$this->getRandom($this->profiles);
        }
        else{
            $birthday = "";
        }
    }
    
    public function getRandom($array){
        $max = sizeof($array) - 1;
        return $array[rand(0, $max)];
    }
    
    public function getRandomDate(){
        $month = $this->getRandom($this->months);
        $year = rand(1900, 2015);
        if($month === "Apr" || $month === "Jun" || $month === "Sep" || $month ==="Nov"){
            $day = rand(1, 30);
        }
        else if($month === "Feb"){
            $day = rand(1, 28);
        }
        else{
            $day = rand(1, 31);
        }
        return $month." ".$day.", ".$year;
    }
}

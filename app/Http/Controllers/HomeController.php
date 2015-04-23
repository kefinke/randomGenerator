<?php namespace App\Http\Controllers;

use Request;
use App\Custom\Person\Person;

class HomeController extends Controller {

	public function getIndex() {
		return view('index');
	}
	
	public function getPeople() {
		return view('peopleForm')->with('error', false);
	}
	
	public function postPeople() {
		$error = "Error: input must be an integer between 1 and 10";
		$number = Request::input('number');
		if($number >= 1 && $number <= 10){
		$birthday = Request::input('birthday');
		$profile = Request::input('profile');
		$people = $this->getPeopleList($number, $birthday, $profile);
		return view('resultsPeople')->with('people', $people)->with('number', $number);
		}
		else{
			return view('peopleForm')->with('error', $error);
		}
	}
	
	public function getText() {
		return view('textForm')->with('error', false);
	}
	
	public function postText() {
		$error = "Error: input must be an integer between 1 and 10";
		$number = Request::input('number');
		if($number >= 1 && $number <= 10){
			$paragraphs = $this->getParagraphs($number);
			return view('resultsText')->with('paragraphs', $paragraphs)->with('number', $number);
		}
		else{
			return view('textForm')->with('error', $error);
		}
	}
	
	//This is Evil -> separate into its own class in the future
	public function getParagraphs($number){
		$paragraphs = ["A mind needs books as a sword needs a whetstone, if it is to keep its edge",
			       "Never forget what you are, for surely the world will not. Make it your strength.
			       Then it can never be your weakness. Armour yourself in it, and it will never be used to hurt you.",
			       "Can a man still be brave if he's afraid? That is the only time a man can be brave.",
				"Fear cuts deeper than swords",
				"Some old wounds never truly heal, and bleed again at the slightest word.",
				"There is only one god and his name is Death. And there is only one thing we say to Death: 'Not today.'",
				"Winter is coming",
				"When you play a game of thrones you win or you die.",
				"The man who passes the sentence should swing the sword.",
				"Death is so terribly final, while life is full of possibilities.",
				"When the snows fall and the white winds blow, the lone wolf dies but the pack survives.",
				"Laughter is poison to fear.",];
		$paragraph_list = array();
		$max = sizeof($paragraphs) - 1;
		for($i = 0; $i < $number; $i++){
			array_push($paragraph_list, $paragraphs[rand(0, $max)]);
		}
		return $paragraph_list;
	}	
	
	public function getPeopleList($number, $birthday, $profile){
		$people_list = array();
		$next;
		for($i = 0; $i < $number; $i++){
			$next = new Person($birthday, $profile);
			array_push($people_list, $next);
		}
		return $people_list;
	}

	public function getNames($number){
		$names = ["Kelly", "Alex", "Kiara", "Justin"];
		return $this->getRandomList($number, $names);
	}
	
	//public function getRandomList($number, $array){
	//	$return_list = array();
	//	$max = sizeof($array);
	//	for($i = 0; $i < $number; $i++){
	//		array_push($return_list, $array[rand(0, $max - 1)]);
	//	}
	//	return $return_list;
	//}
}

<?php

class User{

	public $id;
	public $name;
	public $login;
	public $password;
	public $bdate;
	public $phone;
	public $city;
	public $ismale;
	public $email;
	
	public function draw(){

		echo'<div class ="user-container">';
			echo'<div class ="id">'.$this->id.'</div>';
			echo'<div class ="name">'.$this->name.'</div>';
		echo'<div class ="login">'.$this->login.'</div>';
		echo'<div class ="city">'.$this->city.'</div>';
		echo'<div class ="ismale">'.$this->ismale.'</div>';
		echo'<div class ="emale">'.$this->email.'</div>';
		"</div>";//используется для доступа ко внутренним св-вам и классам
		echo'<button onclick = "remove_user('.$this->id.')">Delete</button>';

		echo "</div>";
	}

}


		

?>
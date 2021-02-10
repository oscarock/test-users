<?php
	namespace Controllers;

	use Jenssegers\Blade\Blade;
	use Models\User;

	class UserController{

		private $blade;

		public function __construct() {
			$this->blade = new Blade('views', 'cache');
		}

		public function registerUser(){
			$user = new User;
			$user->name = $user->rulesName($_POST['name']);
			$user->document = $user->rulesDocument($_POST['document']);
			$user->email = $user->rulesEmail($_POST['email']);
			$user->password = password_hash($user->rulesPassword($_POST['password']), PASSWORD_BCRYPT);
			$user->country = $user->rulesCountry($_POST['country']);
			$user->save();

			echo $this->blade->make('success', ['success' => 'Usuario Guardado correctamente'])->render();
		}
    }
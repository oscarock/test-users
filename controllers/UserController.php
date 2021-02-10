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

		public function login(){
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password_bd = "";

			$find_email = User::where('email', $email)->get();
			foreach ($find_email as $value) {
				$password_bd = $value->password;
			}

			$password_verificado = password_verify($password, $password_bd);

			if ($password_verificado) {
				session_start();
				$users = User::all();
				$_SESSION["authenticated"] = true;
				$_SESSION["users"] = $users;
				header("Location: ingreso");
			} else {
  			echo $this->blade->make('error', ['errors' => 'Usuario o Password incorrectos.'])->render();
			}
		}

		public function logout(){
			session_start();
			session_unset();
			session_destroy();
			header('Location: /');
		}
    }
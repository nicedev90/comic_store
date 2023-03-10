<?php 
	class Users extends Controller {
		public function __construct() {
			$this->model = $this->model('User');
		}

		public function index() {
			if (!userLoggedIn()) {
				
				$projects = $this->model->getProjects();

				$data = [
					'comics' => $projects,
				];

				$this->view('pages/index',$data);
			} else {
				$this->view('pages/login');
			}
		}

		public function galeria($name = null) {
			if (!userLoggedIn() && !is_null($name)) {

				$project = str_replace("_"," ",$name);
				$comic = $this->model->getComic($project);

				$data = [
					'comic' => $comic,
				];

				$this->view('pages/galeria', $data);

			} else {
				$this->view('pages/login');
			}
		}

		public function login() {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

				$email = $_POST['email'];
				$pass = $_POST['password'];

				$emailRegister = $this->model->findEmail($email);

				// print_r($emailRegister);
				// die();

				if ($emailRegister) {
					$logged = $this->model->login($email,$pass);

					if ($logged) {
						$this->createSession($logged);
					} else {
						$_SESSION['msg'] = 'Contaseña incorrecta';
						redirect('users/login');
					}
				} else {
					$_SESSION['msg'] = 'User no registrado';
					redirect('users/login');
				}

				
			} else {
				$this->view('pages/login');
			}
		}

		public function createSession($user) {
			$_SESSION['user_rol'] = $user->rol;
			$_SESSION['user_email'] = $user->email;
			$_SESSION['user_nombre'] = $user->nombre;
			$_SESSION['user_telefono'] = $user->telefono;

			if ($user->rol == 'admin') {
				redirect('administrador/index');
			}

			if ($user->rol == 'usuario') {
				redirect('usuarios/index');
			}
		}

		public function logout() {
			unset($_SESSION['user_rol']);
			unset($_SESSION['user_email']);
			unset($_SESSION['user_nombre']);
			unset($_SESSION['telefono']);

			session_destroy();
			redirect('users/login');
		}
	}
?>
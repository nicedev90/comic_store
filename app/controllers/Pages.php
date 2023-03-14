<?php 
	class Pages extends Controller {
		public function __construct() {
			$this->page = $this->model('Page');
		}

		public function index() {
			if (!userLoggedIn()) {
				
				$projects = $this->page->getProjects();

				$data = [
					'comics' => $projects,
					'page' => 'index'
				];

				$this->view('pages/index',$data);
			} else {
				$this->view('pages/login');
			}
		}

		public function galeria($name = null) {
			if (!userLoggedIn() && !is_null($name)) {

				$project = str_replace("_"," ",$name);
				$comic = $this->page->getComic($project);

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

				$emailRegister = $this->page->findEmail($email);

				// print_r($emailRegister);
				// die();

				if ($emailRegister) {
					$logged = $this->page->login($email,$pass);

					if ($logged) {
						$this->createSession($logged);
					} else {
						$_SESSION['msg'] = 'Contaseña incorrecta';
						redirect('pages/login');
					}
				} else {
					$_SESSION['msg'] = 'User no registrado';
					redirect('pages/login');
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
			redirect('pages/login');
		}
	}
?>
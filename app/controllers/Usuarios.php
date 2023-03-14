<?php 
	class Usuarios extends Controller {
		public function __construct() {
			$this->usuario = $this->model('Usuario');
		}

		public function index() {
			if (userLoggedIn()) {

				$projects = $this->usuario->getProjects();

				$data = [
					'comics' => $projects,
				];

				$this->view('usuario/index',$data);

			} else {
				$this->view('pages/login');
			}
		}

		public function galeria($name = null) {
			if (userLoggedIn() && !is_null($name)) {

				$project = str_replace("_"," ",$name);
				$comic = $this->usuario->getComic($project);

				$data = [
					'comic' => $comic,
				];

				$this->view('usuario/galeria', $data);

			} else {
				$this->view('pages/login');
			}
		}

		public function carrito() {
			if (userLoggedIn()) {


				// $data = [
				// 	'projects' => $projects,
				// 	'sprints' => $sprints
				// ];

				$this->view('usuario/carrito');

			} else {
				$this->view('pages/login');
			}
		}



		public function getProjects() {
			$projects = $this->usuario->getProjects();
			return $projects;
		}

		public function getSprints($id) {
			$projects = $this->usuario->getSprints($id);
			return $projects;
		}


		public function getProjectById($id) {
			$project = $this->usuario->getProjectById($id);
			return $project;
		}

		public function getStoriesBySprint($project,$sprint) {
			$stories = $this->usuario->getStoriesBySprint($project,$sprint);
			return $stories;
		}

		public function getTasks($project,$sprint) {
			$tasks = $this->usuario->getTasks($project,$sprint);
			return $tasks;
		}

		public function calcular() {
			if (userLoggedIn()) {
				$this->view('usuario/calcular');
			} else {
				$this->view('pages/login');
			}
		}

	}
?>
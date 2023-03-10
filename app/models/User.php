<?php 
	class User {
		private $db;

		public function __construct() {
			$this->db = new Database;
		}

		public function login($email, $password) {
			$this->db->query('SELECT * FROM usuarios u INNER JOIN roles r ON u.rol_id = r.id WHERE email = :email');
			$this->db->bind(':email', $email);

			$userData = $this->db->getSingle();
			$userPass = $userData->password;

			if ($password == $userPass) {
				return $userData;
			} else {
				return false;
			}
		}

		public function findEmail($email) {
			$this->db->query('SELECT * FROM usuarios WHERE email = :email');
			$this->db->bind(':email', $email);
			$this->db->getSingle();

			if ($this->db->rows() > 0) {
				return true;
			} else {
				return false;
			}
		}

		public function getProjects() {
			$this->db->query('SELECT * FROM proyectos');
			$projects = $this->db->getSet();
			return $projects;
		}

		public function getComic($name) {
			$this->db->query('SELECT * FROM proyectos WHERE nombre = :name');
			$this->db->bind(':name',$name);
			$projects = $this->db->getSet();
			return $projects;
		}



	}
?>
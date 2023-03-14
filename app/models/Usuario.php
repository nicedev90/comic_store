<?php 
	class Usuario {
		private $db;

		public function __construct() {
			$this->db = new Database;
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

		

		public function getSprints($id) {
			$this->db->query('SELECT * FROM sprints WHERE project_id = :id');
			$this->db->bind(':id', $id);
			$projects = $this->db->getSet();
			return $projects;
		}

		public function getProjectById($id) {
			$this->db->query('SELECT * FROM projects WHERE id = :id');
			$this->db->bind(':id', $id);
			$project = $this->db->getSingle();
			return $project;
		}

		public function getStoriesBySprint($project,$sprint) {
			$this->db->query('SELECT * FROM stories WHERE project_id = :project AND sprint_num = :sprint');
			$this->db->bind(':project', $project);
			$this->db->bind(':sprint', $sprint);
			$stories = $this->db->getSet();
			return $stories;
		}

		public function getTasks($project,$sprint) {
			$this->db->query('SELECT * FROM tasks WHERE project_id = :project AND sprint_num = :sprint');
			$this->db->bind(':project', $project);
			$this->db->bind(':sprint', $sprint);
			$tasks = $this->db->getSet();
			return $tasks;
		
		}

		public function setTaskStatus($id_task,$status) {
			$this->db->query('UPDATE tasks SET status = :status WHERE id = :id_task');
			$this->db->bind(':id_task', $id_task);
			$this->db->bind(':status', $status);
			$updated = $this->db->execute();
			if ($updated) {
				return true;
			} else {
				return false;
			}
		}

		public function addStory($project_id,$sprint_num,$story_num,$title,$details,$status) {
			$this->db->query('INSERT INTO stories (project_id, sprint_num, story_num, title, details, status) 
				VALUES (:project_id, :sprint_num, :story_num, :title, :details, :status)');
			$this->db->bind(':project_id', $project_id);
			$this->db->bind(':sprint_num', $sprint_num);
			$this->db->bind(':story_num', $story_num);
			$this->db->bind(':title', $title);
			$this->db->bind(':details', $details);
			$this->db->bind(':status', $status);
			$created = $this->db->execute();
			if ($created) {
				return true;
			} else {
				return false;
			}
		}

		public function addTask($project_id,$sprint_num,$story_num,$estimate,$importance,$details,$status) {
			$this->db->query('INSERT INTO tasks (project_id, sprint_num, story_num, estimate, importance, details, status) 
				VALUES (:project_id, :sprint_num, :story_num, :estimate, :importance, :details, :status)');
			$this->db->bind(':project_id', $project_id);
			$this->db->bind(':sprint_num', $sprint_num);
			$this->db->bind(':story_num', $story_num);
			$this->db->bind(':estimate', $estimate);
			$this->db->bind(':importance', $importance);
			$this->db->bind(':details', $details);
			$this->db->bind(':status', $status);
			$created = $this->db->execute();
			if ($created) {
				return true;
			} else {
				return false;
			}
		}

		public function editTask($id_task,$story_num,$estimate,$importance,$details) {
			$this->db->query('UPDATE tasks SET story_num = :story_num, estimate = :estimate, importance = :importance, details = :details WHERE id = :id_task');
			$this->db->bind(':id_task', $id_task);
			$this->db->bind(':story_num', $story_num);
			$this->db->bind(':estimate', $estimate);
			$this->db->bind(':importance', $importance);
			$this->db->bind(':details', $details);
			$updated = $this->db->execute();
			if ($updated) {
				return true;
			} else {
				return false;
			}
		}

		public function deleteTask($id_task) {
			$this->db->query('DELETE FROM tasks WHERE id = :id_task');
			$this->db->bind(':id_task', $id_task);
			$deleted = $this->db->execute();
			if ($deleted) {
				return true;
			} else {
				return false;
			}
		}

		public function setStartTime($id_task) {
			$this->db->query('UPDATE tasks SET start = NOW() WHERE id = :id_task');
			$this->db->bind(':id_task', $id_task);
			$setted = $this->db->execute();
			if ($setted) {
				return true;
			} else {
				return false;
			}
		}

		public function setFinishTime($id_task) {
			$this->db->query('UPDATE tasks SET finish = NOW() WHERE id = :id_task');
			$this->db->bind(':id_task', $id_task);
			$setted = $this->db->execute();
			if ($setted) {
				return true;
			} else {
				return false;
			}
		}

		public function setTotalHours($id_task) {
			$this->db->query('UPDATE tasks SET hours = (HOUR(TIMEDIFF(finish, start)) + MINUTE(TIMEDIFF(finish, start))/60) WHERE id = :id_task');
			$this->db->bind(':id_task', $id_task);
			$result = $this->db->execute();
			if ($result) {
				return true;
			} else {
				return false;
			}
		}






	}
?>
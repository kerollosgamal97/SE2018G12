<?php
	include_once('database.php');

	class grade extends Database{
		function __construct($id) {
			$sql = "SELECT grades.id as gradeid, students.name as studentname , courses.name as coursename,degree,examine_at FROM grades Join students ON students.id=grades.student_id JOIN courses ON courses.id=grades.course_id WHERE grades.id=$id ORDER BY grades.id,students.name;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if(empty($data)){return;}
			foreach ($data as $key => $value) {
				$this->{$key} = $value;
			}
		}

		public static function add($student_id,$course_id,$examine_at,$degree) {
			$sql = "INSERT INTO grades (student_id,course_id,examine_at,degree) VALUES (?,?,?,?)";
			Database::$db->prepare($sql)->execute([$student_id,$course_id,$examine_at,$degree]);
		}

		public function delete() {
			$sql = "DELETE FROM grades WHERE id = $this->gradeid;";
			Database::$db->query($sql);
		}

		public function save() {
         	$sql = "UPDATE grades SET examine_at = ? WHERE id = ?;";
			Database::$db->prepare($sql)->execute([$this->examine_at, $this->gradeid]);
         	$sql = "UPDATE grades SET degree = ? WHERE id = ?;";
			Database::$db->prepare($sql)->execute([$this->degree, $this->gradeid]);
		}

		public static function all($keyword) {
			$keyword = str_replace(" ", "%", $keyword);
			$sql = "SELECT grades.id as gradeid, students.name as studentname , courses.name as coursename,degree,examine_at FROM grades Join students ON students.id=grades.student_id JOIN courses ON courses.id=grades.course_id ORDER BY grades.id,students.name;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$grades = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$grades[] = new grade($row['gradeid']);
			}
			return $grades;
		}

	}
?>

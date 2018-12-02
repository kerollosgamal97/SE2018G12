<?php
	include_once('database.php');

	class Customer extends Database{
		function __construct($id) {
			$sql = "SELECT * FROM customer WHERE id = $id;";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			if(empty($data)){return;}
			foreach ($data as $key => $value) {
				$this->{$key} = $value;
			}
		}

		public static function add($name,$email,$password,$governate,$address,$phonenumber,$type) {
			$sql = "INSERT INTO customer (name,email,password,governate,address,phonenumber,type) VALUES (?,?,?,?,?,?,?)";
			Database::$db->prepare($sql)->execute([$name,$email,$password,$governate,$address,$phonenumber,$type]);
		}

	/*	public function delete() {
			$sql = "DELETE FROM students WHERE id = $this->id;";
			Database::$db->query($sql);
		}

		public function save() {
			$sql = "UPDATE students SET name = ? WHERE id = ?;";
			Database::$db->prepare($sql)->execute([$this->name, $this->id]);
		}
*/
		public static function all($keyword) {
			$keyword = str_replace(" ", "%", $keyword);
			$sql = "SELECT * FROM customer WHERE name like ('%$keyword%');";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$students = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$students[] = new Customer($row['id']);
			}
			return $students;
		}
	}
?>

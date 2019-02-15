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

		public static function add($name,$email,$password,$governate,$address,$phonenumber,$type) {   // Add User
			$sql = "INSERT INTO customer (name,email,password,governate,address,phonenumber,type) VALUES (?,?,?,?,?,?,?)";
			Database::$db->prepare($sql)->execute([$name,$email,$password,$governate,$address,$phonenumber,$type]);
		}


		public static function search($name,$email,$password,$governate,$address,$phonenumber,$type){     //Get owner ID

$sql="SELECT id from customer WHERE name=? AND email=? AND password=? AND governate=? AND address=? AND phonenumber=? AND type=? ;";
$statement = Database::$db->prepare($sql);
$statement->execute([$name,$email,$password,$governate,$address,$phonenumber,$type]);

	 $row = $statement->fetch(PDO::FETCH_ASSOC);


	 return $row;

		}
		public static function search_user($name,$governate,$type){


			if(($name==1)&&($governate==1)){                           // All Designers or All Customers
								$sql="SELECT * from customer WHERE type=?;";
								$statement =Database::$db->prepare($sql);
								$statement->execute([$type]);
								$users=[];
								while ($row=$statement->fetch(PDO::FETCH_ASSOC)){

								$users[]= new Customer($row['id']);
							}
       }
else if(($name!=1)&&($governate!=1)){
              // Search in Designers or Customers

$name = str_replace(" ", "%", $name);
$sql="SELECT * from customer WHERE lower(name) LIKE lower('$name%') AND governate=? AND type=?;";
$statement =Database::$db->prepare($sql);
$statement->execute([$governate,$type]);
$users=[];
while ($row=$statement->fetch(PDO::FETCH_ASSOC)){

$users[]= new Customer($row['id']);
}
}
return $users;
		}








		public static function all($keyword) {
			$keyword = str_replace(" ", "%", $keyword);
			$sql = "SELECT * FROM customer WHERE name like ('%$keyword%');";
			$statement = Database::$db->prepare($sql);
			$statement->execute();
			$customers = [];
			while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
				$customers[] = new Customer($row['id']);
			}
			return $customers;
		}
	}
?>

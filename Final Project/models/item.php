<?php
	include_once('database.php');
  class Item extends Database {
    function __construct($id) {
      $sql = "SELECT * FROM items WHERE id = $id;";
      $statement = Database::$db->prepare($sql);
      $statement->execute();
      $data = $statement->fetch(PDO::FETCH_ASSOC);
      if(empty($data)){return;}
      foreach ($data as $key => $value) {
        $this->{$key} = $value;
      }
    }


    public static function all() {

      $sql = "SELECT * FROM items";
      $statement = Database::$db->prepare($sql);
      $statement->execute();
      $items = [];
      while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $items[] = new Item($row['id']);
      }
      return $items;
    }

    		public static function add($color,$size,$material,$type,$price,$img,$valid,$owner_id) {
    			$sql = "INSERT INTO items (color,size,material,type,price,img,valid,owner_id) VALUES (?,?,?,?,?,?,?,?)";
    			Database::$db->prepare($sql)->execute([$color,$size,$material,$type,$price,$img,$valid,$owner_id]);
    		}


        public static function filter($color , $size , $material , $type) {
        	$sql = "SELECT * FROM items WHERE color=? AND size=? AND material=? AND type=? ;";
        	$statement = Database::$db->prepare($sql);
        	$statement->execute([$color , $size , $material , $type]);
        	$items=[];
        	while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        	$items[]=new Item($row['id']);
                }
                	return $items;
        }




				public static function order($id){

$sql="SELECT valid from items WHERE id=?;";
	$statement = Database::$db->prepare($sql);
	$statement->execute([$id]);
					$row=$statement->fetch(PDO::FETCH_ASSOC);
					$row['valid'] = $row['valid']-1;
					$sql_2="UPDATE items SET valid=? WHERE id=?;";
					$statement_2 = Database::$db->prepare($sql_2);
					$statement_2->execute([$row['valid'],$id]);
				}





				public static function show($id)
				{
           $sql="SELECT * from items Join customer ON customer.id=items.owner_id WHERE items.id=? ;";
					 $statement = Database::$db->prepare($sql);
				 	$statement->execute([$id]);
				 					$row=$statement->fetch(PDO::FETCH_ASSOC);
								//	$item= new Item($row['id']);
									return $row;





				}
				public static function show_owner_items($id){

$sql="SELECT * from items WHERE owner_id=?;";
$statement = Database::$db->prepare($sql);
$statement->execute([$id]);
$items=[];
while($row=$statement->fetch(PDO::FETCH_ASSOC)){
	$items[]=new Item($row['id']);
}
return $items;
}
}
?>

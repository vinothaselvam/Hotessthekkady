<?php
class Post_banner { 
	
	private $categoryTable = 'cms_boxbanner';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	
	
	public function bannerListing(){	
		
		$sqlQuery = "
			SELECT id, name,description
			FROM ".$this->categoryTable."
			 ";
		
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= ' name LIKE "%'.$_POST["search"]["value"].'%" ';				
		}
		
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->categoryTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;		
		
		$displayRecords = $result->num_rows;
		$categories = array();		
		while ($category = $result->fetch_assoc()) { 				
			$rows = array();				
			$rows[] = $category['id'];
			$rows[] = $category['name'];	
            $rows[] = $category['description'];	
			$rows[] = '<a href="box_banner.php?id='.$category["id"].'" class="btn btn-warning btn-xs update">Edit</a>';
			$rows[] = '<button type="button" name="delete" id="'.$category["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$categories[] = $rows;
		}
		
		$output = array(
			"draw"	=>	intval($_POST["draw"]),			
			"iTotalRecords"	=> 	$displayRecords,
			"iTotalDisplayRecords"	=>  $allRecords,
			"data"	=> 	$categories
		);
		
		echo json_encode($output);	
	}
	
	public function getBanner(){		
		if($this->id) {
			$sqlQuery = "
			SELECT id, name,description
			FROM ".$this->categoryTable." 			
			WHERE id = ? ";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->id);	
			$stmt->execute();
			$result = $stmt->get_result();
			$category = $result->fetch_assoc();
			return $category;
		}		
	}
	
	public function insert(){
		
		if($this->name) {

			$stmt = $this->conn->prepare("
				INSERT INTO ".$this->categoryTable."(`name`,`filename`,`description`)
				VALUES(?,?,?)");

			
		
			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->filename = htmlspecialchars(strip_tags($this->filename));
			$this->description = htmlspecialchars(strip_tags($this->description));

			$stmt->bind_param("sss", $this->name, $this->filename,$this->description);
			
			if($stmt->execute()){
				return $stmt->insert_id;
			}		
		}
	}
	
	public function update(){
		
		if($this->id) {			
			$stmt = $this->conn->prepare("
				UPDATE ".$this->categoryTable." 
				SET name= ?, filename=?, description=?
				WHERE id = ?");
	 
			$this->id = htmlspecialchars(strip_tags($this->id));
			$this->name = htmlspecialchars(strip_tags($this->name));
			$this->filename = htmlspecialchars(strip_tags($this->filename));
			$this->description = htmlspecialchars(strip_tags($this->description));			
			
			$stmt->bind_param("sssi", $this->name,  $this->filename,$this->description,$this->id);
			
			if($stmt->execute()){
				return true;
			}			
		}
		
	}
	
	public function delete(){
		
		if($this->id) {	
		
			$stmt = $this->conn->prepare("
				DELETE FROM ".$this->categoryTable." 				
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
		}
	}
	
	public function totalCategory(){	

		$sqlQuery = "SELECT * FROM ".$this->categoryTable;			
		$stmt = $this->conn->prepare($sqlQuery);			
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->num_rows;	
	}	
}
?>
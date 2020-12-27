<?php
class Database{

	//proprties
	private $conn=false;
	private $result=array();
	private $mysqli="";


	// function are methods
	function __construct(){
		if(!$this->conn){
			$this->mysqli=new mysqli("localhost", "root", "", "zeroartcreations");
			

			if($this->mysqli->connect_error){
				array_push($this->result, $this->mysqli->connect_error);
				echo "connection is not successfuly set"; 
				return false;
			}
			return true;


		}
		
	}

	function insert($table, $param=array()){
		
		if($this->tableExists($table)){

			$table_coloumn=implode(",", array_keys($param));
			$table_values=implode("','", $param);

			$sql="INSERT INTO $table($table_coloumn) VALUES ('$table_values')";
			// echo $sql;
			

			if($this->mysqli->query($sql)){
				// array_push($this->result, $this->mysqli->insert_id);
				return true;
			}else{
				array_push($this->result, $this->mysqli->error);
				return false;
			}

		}
	}


	function select($table, $coloumns="*", $join, $where, $order, $limit){
	
		if ($this->tableExists($table)) {
			$sql ="SELECT $coloumns FROM $table";
			if($join !=""){
				$sql .="JOIN $join";
			}
			if($where != ""){
				$sql .=" WHERE $where";
			}
			if ($order != "") {
				$sql .=" ORDER BY $order";
			}
			if($limit !=""){
				if(isset($_GET['page'])){
					$page=$_GET['page'];
				}else{
					$page=1;
				}
				$offset=($page-1)*$limit;

				$sql .=" LIMIT $offset, $limit";
			}
			// echo $sql;
			if($query= $this->mysqli->query($sql)){
				array_push($this->result, $query->fetch_all(MYSQLI_ASSOC));
				return true;
			}else{
				array_push($this->result, $this->mysqli->error);
				return false;
			}
		}
	} 


	//delete
	function delete($table, $where){
		if ($this->tableExists($table)) {
			
			$sql="DELETE FROM $table WHERE $where";
			
			// echo $sql;
			// die();
			if($query=$this->mysqli->query($sql)){

				return true;
			}else{
				array_push($this->result, $query->mysqli->error);
				return false;
			}
		}
	}

	function update($table, $param=array(), $where){
		if($this->tableExists($table)){
      		$sql ="";	
			foreach ($param as $key => $value) {
				$sql .="UPDATE $table SET $key = '$value' WHERE $where ; ";
				
			}
			$query = $this->mysqli->multi_query($sql);
			
			if($query){
					return true;
			}else{
					array_push($this->result, $this->mysqli->error);
					echo $sql;
					die();
					return false;

			}


			
		}
	}


//pagination
	function pagination($table,$join, $where, $limit){
		if($this->tableExists($table)){
				if ($limit !=null) {
				$sql ="SELECT count(*) FROM $table";
				if($join != ""){
					$sql .=" JOIN $join";
				}
				if($where != ""){
					$sql .=" WHERE $where";
				}
				
				// echo $sql;
				if($query= $this->mysqli->query($sql)){
				// array_push($this->result, $query->fetch_all(MYSQLI_ASSOC));
					$query_Data=$query->fetch_row();
					$total_Data=$query_Data[0];
					$total_page=ceil($total_Data/$limit);
					$url=basename($_SERVER['PHP_SELF']);

					if(isset($_GET['page'])){
						$page=$_GET['page'];
					}else{
						$page=1;
					}

					
					
					$output="";
					if($total_Data>$limit){
						$output .="<ul class='pagination outer'>";


						if($page > 1){
							$pre=$page-1;
							$output .="<li> <a href='$url?page=$pre'>Pre&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
						}


						for ($i=$page-2; $i < $page; $i++) {
							if($i > 0){
								$output .="<li> <a href='$url?page=$i'>$i&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";	
							} 
						}
						$output .="<li> <a href='$url?page=$page'>$page&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
						for ($i=$page+1; $i < $total_page; $i++) { 
							$output .="<li> <a href='$url?page=$i'>$i&nbsp;&nbsp;&nbsp;&nbsp;</a></li>";
							if($i > $page+1){
								break;
							}
						}


						if($total_page > $page){
							$next=$page+1;
							$output .="<li> <a href='$url?page=$next'>Next</a></li>";
						}
						$output .="</ul>";
					}

					echo $output;

				return true;
			}else{
				return false;
			}
				// $total_Data = $this->mysqli->query($sql);
				// echo $total_Data;

			}
		}

	}

	private function tableExists($table){
		$sql="SHOW TABLES FROM zeroartcreations LIKE '$table'";


		$query=$this->mysqli->query($sql);
		if($query){
			if($query->num_rows == 1){
				return true;
				
			}else{
				array_push($this->result, $table." table does not exit in this zeroartcreations database ");
				return false;
			}
		}
	}

	function showResult(){
		$show=$this->result;
		$this->result=array();
		return $show;
	}

	function __destruct(){
		if($this->conn){
			if($this->mysqli->close()){
				$this->conn="false";
				return true;
			}
		}else{
			return false;
		}
	}


}

$obj=new Database();




?>
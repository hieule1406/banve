<?php  
	class DB {
		//set variable
		public $host = "localhost";
		public $user = "root";
		public $pass = "";
		public $data = "db_1";

		public $conn;
	
		// constructor
		public function __construct(){
			$this->conn = $this->connectDB();
			$this->conn->query("SET NAMES 'utf8'");

		}

		// create connect database
		public function connectDB(){
			$conn = new mysqli($this->host, $this->user, $this->pass, $this->data);
			return $conn;
		}

		// excute query
		function exQuery($sql){
			return $this->conn->query($sql);
		
		}

        function execute_query($sql_str){
            $result= $this->conn->query($sql_str);
            if ($result){
                return $result;
            }
            else {
                return false;
            }

        }

		// return all records
		function getAllRecords($table){
			$sql = "SELECT * FROM $table";
			$query = $this->exQuery($sql);
			if($query){
				return $query->fetch_all(MYSQLI_ASSOC);
			}else {
				return false;
			}
		}

		// return one record
		function getOneRecord($table){
			$sql = "SELECT * FROM $table";
			$query = $this->exQuery($sql);
			if($query){
				return $query->fetch_assoc();
			}else {
				return false;
			}
		}

		// disconnect database
		public function __destruct(){
			$this->conn->close();
		}


	}




?>
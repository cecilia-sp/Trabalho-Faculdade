<?php 
session_start();

class Sql {

	public $conn;

	public function __construct(){/**Inicio da conexão com o banco de dados**/
		return $this->conn = mysqli_connect("127.0.0.1", "root", "", "ecommerce");/**Dados da conexão**/
	}

	public function query($string_query){

		return mysqli_query($this->conn, $string_query);

	}

	public function select($string_query){

		$result = $this->query($string_query);

		$data = array();

	    while ($row = mysqli_fetch_array($result)) {
	        
	    	foreach ($row as $key => $value) {
	    		$row[$key] = utf8_encode($value);
	    	}

	        array_push($data, $row);

	    }

	    unset($result);

	    return $data;

	}

	public function __destruct(){ /**Desconexão com o banco de dados**/

		mysqli_close($this->conn);

	}

}

?>
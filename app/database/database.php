<?php
	require('conect.php');

	function tt($value){
		echo '<pre>';
		print_r($value);
		echo '<pre>';
	}

	function dbCheckError($query){
		$errInfo = $query->errorInfo();
		if($errInfo[0] !== PDO::ERR_NONE){
			echo $errInfo[2];
			exit();
		}
	}

	function selectAll($table, $params = []){
		global $pdo;
		$sql = "SELECT * FROM $table";

		if(!empty($params)){
			$i = 0;
			foreach($params as $key => $value){
				if(!is_numeric($value)) $value = "'".$value."'";
				
				if($i === 0) $sql = $sql." WHERE $key=$value";
				else $sql = $sql . " AND $key=$value";

				$i++;
			}
		}

		$query = $pdo->prepare($sql);
		$query->execute();

		dbCheckError($query);
		return $query->fetchAll();
	}

	function insert($table, $params){
		global $pdo;
		$i = 0;
		$coll = '';
		$mask ='';
		foreach($params as $key => $value ){
			if($i===0){
				$coll = $coll . "$key ";
				$mask = $mask . "'" . "$value" . "'";
			}else{
				$coll = $coll . ", $key";
				$mask = $mask . ", '" . "$value" . "'";	
			}
			$i++;
		}

		$sql = "INSERT INTO $table ($coll) VALUES ($mask)";
		$query = $pdo->prepare($sql);
		$query->execute();
		dbCheckError($query);
	}

	function update($table, $id, $params){
		global $pdo;
		$i = 0;
		$str = '';
		foreach($params as $key => $value ){
			if($i===0){
				$str = $str . $key . " = '" . $value . "'";
			}else{
				$str = $str . ", " . $key . " = '" . $value . "'";	
			}
			$i++;
		}

		$sql = "UPDATE $table SET $str WHERE id = $id";
		$query = $pdo->prepare($sql);
		$query->execute();
		dbCheckError($query);
	}

	function delete($table, $id){
		global $pdo;
		$sql = "DELETE FROM $table WHERE id = $id";
		$query = $pdo->prepare($sql);
		$query->execute();
		dbCheckError($query);
	}


	// update('users', 2, ['user_name' => "xxx", "admin" => "1"]);

	// insert('users', [
	// 	"admin" => "0",
	// 	"user_name" => "newXXX",
	// 	"email" => "123XXX@mail.ru",
	// 	"password" => "1233221",
	// 	"created_data" => "2021-01-01 00:00:01"
	// ]);

	// delete("users", 2);

	// tt(selectAll('users'));
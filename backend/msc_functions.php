<?php
class Utilities{
	public static function sanitizeString(string $string){
		return stripslashes(htmlentities(strip_tags($string)));
	}
}

class DB
{
	/**
	 * Update these values
	 */
	private $username = 'root';
	private $database = 'webdesigngroup9';
	private $password = '';
	private $host = 'localhost';

	/**
	 * Create a database connection
	 * @return \mysqli
	 */
	public function conn()
	{
		return new mysqli($this->host, $this->username, $this->password, $this->database);
	}

	/**
	 * Executes a mySQL query
	 */
	public function query(string $query, \mysqli $conn = null){
		$result = null;
		$newConn = is_null($conn);
		try {
			$conn = $newConn ? $this->conn() : $conn;
			$result = $conn->query($query);
			if (!$result) die($conn->error);
			return $result;
		} catch (\Throwable $th) {
			$th = $th->getMessage();
			//echo $e;
			return null;
		} finally {
			//$result->close();
			if ($newConn){
				if(!is_null($conn)) $conn->close();
				unset($conn);
			}
			unset($result);
		}
	}

	/**
	 * Returns a new PDO object
	 */
	public function pdo(){
		$pdo = null;
		try {
			$pdo = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->beginTransaction();

			return $pdo;
		} catch (\Throwable $th) {
			throw $th;
		} finally {
			unset($pdo);
		}
	}
}

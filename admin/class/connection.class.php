<?php 
class Connection{
	private $host;
	private $user;
	private $pw;
	private $db;
	public $con;
	public $sql;
	public $res;
	public $aff;
	public $numRows;
	public $data;

	public function __construct($host='localhost',$user='root',$password='',$database='tnacademy'){
		$this->con = mysqli_connect($host, $user, $password, $database);
		/*if($this->con){
			echo 'connected';
		}else{
			echo 'not connected';
		}*/
		
	}
}
?>
<?php 
include('connection.class.php');
class User extends Connection{
	private $user_id;
	private $username;
	private $email;
	private $password;
	private $ckpassword;
	private $role_id;


	public function __construct(){
		parent::__construct();
	}

	public function setUserId($id=''){
		$this->user_id=$id;

	}
	public function setUserName($ue=''){
		$this->username=$ue;
	}
	public function setEmail($el=''){
		$this->email=$el;
	}
	public function setPassword($pw=''){
		$this->password=$pw;
	}
	public function setCkPassword($ckpw=''){
		$this->ckpassword=$ckpw;
	}
	public function setRoleId($rd=''){
		$this->role_id=$rd;
	}

//add user

	public function addUser(){
		//die();
		$this->sql = "INSERT INTO user(username,email,password,ckpassword,role_user_id) VALUES('$this->username','$this->email','$this->password','$this->ckpassword',$this->role_id)";
		//echo $this->sql;
		$this->res = mysqli_query($this->con, $this->sql);
		$this->aff = mysqli_affected_rows($this->con);
		//var_dump($this->aff);
	}

	public function viewUser(){
		$this->sql = "SELECT * FROM user";
		/*echo $this->sql; die();*/
		$this->res = mysqli_query($this->con, $this->sql);
		$numRows = $this->numRows = mysqli_num_rows($this->res);
		$this->data=array();
			if($this->numRows>0){
				while($this->row=mysqli_fetch_assoc($this->res)){
					array_push($this->data,$this->row);

				}
				return $this->data;
	}
}
}
?>

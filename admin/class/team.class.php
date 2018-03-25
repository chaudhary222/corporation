<?php 
include('connection.class.php');
class Team extends Connection{
	private $team_id;
	private $teamname;
	private $post;
	private $fblink;
	private $desc;
	private $twitterLink;
	private $instaLink;
	private $sql1;
	private $res1;
	private $aff1;
	private $photo;
	private $destination;



	public function __construct(){
		parent::__construct();
	}

	public function setTeamId($id=''){
		$this->team_id=$id;

	}
	public function setTeamName($ue=''){
		$this->teamname=$ue;
	}
	public function setTeamPost($tt=''){
		$this->post=$tt;
	}
	public function setDecription($ds=''){
		$this->desc=$ds;
	}
	public function setFbLink($fb=''){
		$this->fbLink=$fb;
	}
	public function setTwitterLink($tw=''){
		$this->twitterLink=$tw;
	}
	public function setInstaLink($in=''){
		$this->instaLink=$in;
	}
	public function setFile($fl=''){
		$this->photo=$fl;
	}
	public function setDestination($dn=''){
		$this->destination=$dn;
	}
	
	

	
//add team

	public function addTeam(){
		
		$this->photo = $_FILES['image']['name']; 
		$temp_file_name = $_FILES['image']['tmp_name'];
		$this->destination = ('../images/').$this->photo; 
		if(move_uploaded_file($temp_file_name, $this->destination)){

		$this->sql = "INSERT INTO teams(member_name,member_post,member_desc,team_image) VALUES('$this->teamname','$this->post','$this->desc','$this->photo')";
		if($this->res = mysqli_query($this->con, $this->sql)){
		$last_id = mysqli_insert_id($this->con);	
		}

		$this->sql1 = "INSERT INTO teams_social_links(fb_link, twitter_link, insta_link, team_id) VALUES('$this->fbLink', '$this->twitterLink', '$this->instaLink', '$last_id')";
		
		$this->res1 = mysqli_query($this->con, $this->sql1);
		$this->aff = mysqli_affected_rows($this->con);
		$this->aff1 = mysqli_affected_rows($this->con);
		if(($this->aff) && ($this->aff1) > 0){
			return true;
		}else{
			return false;
		}
	}
	}

	public function viewTeam(){
		$this->sql = "SELECT * FROM teams";
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

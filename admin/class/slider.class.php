<?php 
include('connection.class.php');
class Slider extends Connection{
	private $slider_id;
	private $title;
	private $desc;
	private $link;
	private $photo;
	private $destination;

	public function __construct(){
		parent::__construct();
	}

	public function setSliderId($sid=''){
		$this->slider_id=$sid;

	}
	public function setSliderTitle($st=''){
		$this->title=$st;
	}
	
	public function setDecription($ds=''){
		$this->desc=$ds;
	}
	public function setSliderLink($sk=''){
		$this->link=$sk;
	}
	
	public function setFile($fl=''){
		$this->photo=$fl;
	}
	public function setDestination($dn=''){
		$this->destination=$dn;
	}
	
	
//add slider

	public function addSlider(){
		
		$this->photo = $_FILES['image']['name']; 
		$temp_file_name = $_FILES['image']['tmp_name'];
		$this->destination = ('../images/slider/').$this->photo; 
		if(move_uploaded_file($temp_file_name, $this->destination)){

		$this->sql = "INSERT INTO sliders(title,slider_link,desc_text,slider_image) VALUES('$this->title','$this->link','$this->desc','$this->photo')";
		$this->res = mysqli_query($this->con, $this->sql);
		$this->aff = mysqli_affected_rows($this->con);
		if($this->aff > 0){
			return true;
		}else{
			return false;
		}
	}
	}

	public function viewSlider(){
		if($id = isset($_GET['id'])){
			$this->sql = "SELECT * FROM sliders WHERE slider_id=$id";
		}else{
		$this->sql = "SELECT * FROM sliders";
	}
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

/*update slider*/

public function updateSlider(){
		//echo 'die';
		$this->photo = $_FILES['image']['name']; 
		$temp_file_name = $_FILES['image']['tmp_name'];
		$this->destination = ('../images/slider/').$this->photo; 
		if(move_uploaded_file($temp_file_name, $this->destination)){

		$this->sql = "UPDATE sliders set title='$this->title',slider_link='$this->link', desc_text='$this->desc',slider_image='$this->photo' WHERE slider_id='$this->slider_id'";
		
		$this->res = mysqli_query($this->con, $this->sql);
		$this->aff = mysqli_affected_rows($this->con);
		if($this->aff > 0){
			return true;
		}else{
			return false;
		}
	}
	}

}
?>

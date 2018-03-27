<?php 
include('../class/slider.class.php');
if(isset($_POST['update_slider'])){
	//die('here');
$id = $_POST['slider_id'];
$title = $_POST['title'];
$link = $_POST['link'];
$desc = $_POST['desc'];
$photo = $_FILE['image'];

$sliderObj = new Slider(); 

$sliderObj->setSliderId($id);
$sliderObj->setSliderTitle($title);
$sliderObj->setSliderLink($link);
$sliderObj->setDecription($desc);
$sliderObj->setFile($photo);


$slider = $sliderObj->updateSlider();
if($slider)
{
	header('location:../index.php?page=slider&action=view');
}

}

?>
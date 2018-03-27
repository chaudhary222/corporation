<?php 
include('../class/slider.class.php');
if(isset($_POST['add_slider'])){
$title = $_POST['title'];
$link = $_POST['link'];
$desc = $_POST['desc'];
$photo = $_FILE['image'];

$sliderObj = new Slider(); 


$sliderObj->setSliderTitle($title);
$sliderObj->setSliderLink($link);
$sliderObj->setDecription($desc);
$sliderObj->setFile($photo);


$slider = $sliderObj->addSlider();
if($slider)
{
	header('location:../index.php?page=slider&action=view');
}

}

?>
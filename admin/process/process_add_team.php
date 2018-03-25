<?php 

include('../class/team.class.php');
if(isset($_POST['add_team'])){
$name = $_POST['name'];
$post = $_POST['post'];
$desc = $_POST['desc'];
$photo = $_FILES['image'];
$fb = $_POST['fb'];
$tw = $_POST['twitter']; 
$insta = $_POST['insta'];
$teamObj = new Team(); 


$teamObj->setTeamName($name);
$teamObj->setTeamPost($post);
$teamObj->setDecription($desc);
$teamObj->setFile($photo);
$teamObj->setFbLink($fb);
$teamObj->setTwitterLink($tw);
$teamObj->setInstaLink($insta);


$team = $teamObj->addTeam();
if($team)
{
	header('location:../index.php?page=team&action=view');
}

}

?>
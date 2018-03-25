<?php 

include('../admin/class/team.class.php');
if(isset($_POST['add_team'])){
	die('testtt');
$name = $_POST['name'];
$post = $_POST['post'];
$desc = $_POST['desc'];
$photo = $_FILE['photo'];
$fb = $_POST['fb'];
echo $tw = $_POST['twitter']; die();
echo $insta = $_POST['insta']; die();
$teamObj = new Team(); 


$teamObj->setTeamName($name);
$teamObj->setTeamPost($post);
$teamObj->setFbLink($fb);
$teamObj->setTwitterLink($tw);
$teamObj->setInstaLink($insta);


//$team = $teamObj->addTeam();
if($team)
{
	header('location:../index.php?page=team&action=view');
}

}

?>
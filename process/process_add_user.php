<?php 

include('../admin/class/user.class.php');
if(isset($_POST['register'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$ckpassword = md5($_POST['ckpassword']);
$role = $_POST['role_id'];

$userObj = new User();

if($password == $ckpassword){

$userObj->setUserName($name);
$userObj->setEmail($email);
$userObj->setPassword($password);
$userObj->setCkPassword($ckpassword);

$user = $userObj->addUser();
}else{
	header('location:../index.php?message=password mismatched');
}

}else{
	header('location:../index.php');
}



?>
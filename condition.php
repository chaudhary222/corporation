<?php 
$page = isset($_GET['page']) ? $_GET['page'] : '';
$action = isset($_GET['action'])?$_GET['action']:'';


switch ($page) {
	case 'user':
	if($action == 'view'){
		$load = 'includes/view_user.php';
	}
	if($action == 'add'){
		$load = 'includes/add_user.php';
	}
		# code...
		break;
	
	default:
	$load = 'includes/datastat.php';
		# code...
		break;

	case 'team':
	if($action == 'add'){

		$load = 'includes/add_team.php';
	}elseif ($action == 'view') {
		$load = 'includes/view_team.php';
	}elseif($action == 'update'){
		$load = 'includes/update_team.php';
	}else{
		$action = 'includes/delete_team.php';
	}
break;
	default:
	$load = 'includes/datastat.php';
		# code...
		break; 
}
?>
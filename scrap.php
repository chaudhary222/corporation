<?php 
include_once('htmldom.php');

// Create DOM from URL or file
		
		$html = file_get_html('https://ird.gov.np/');
		$data = $html->find('div #scrollfy');
		var_dump($data);
?>
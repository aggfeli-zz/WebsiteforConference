<?php
function logged_in_redirect() {
	if (logged_in() === true) {
		header('Location: index.php');
		exit();
	}
}

function sanitize($data) {	
	return mysql_real_escape_string($data);
}

function output_errors($errors){
	$output = array();
	foreach($errors as $error) {
		$output[] = '<li>'. $error. '</li>';
	}
	return '<ul>' . implode('', $output) .'</ul>';
}

function protect_page() {		//If user isn't logged in, he can't have access to certain pages(specifically edit profile & change password)
	if(logged_in() === false) {
		header('Location: restricted_access.php');
		exit();
	}
}
?>
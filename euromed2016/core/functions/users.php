<?php
function array_sanitize(&$item) {
	$item = mysql_real_escape_string($item);
}

function signup_user($signup_data) {
	array_walk($signup_data, 'array_sanitize');
	
	$fields = '`' . implode('`, `', array_keys($signup_data)) . '`';
	$data = '\'' . implode('\', \'', $signup_data) . '\'';
	
	mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
}

function update_user($update_data) {
	global $session_user_id;
	$update = array();
	array_walk($update_data, 'array_sanitize');
	foreach($update_data as $field=>$data){
		$update[] = '`' . $field . '` = \'' . $data . '\'';
	}
	
	mysql_query("UPDATE`users` SET" . implode(', ', $update) . "WHERE `user_id` = $session_user_id ") or die(mysql_error());
}

function user_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();	//args from init.php
	
	if($func_num_args > 1) {
		unset($func_get_args[0]);
		
		$fields = '`' . implode('`, `', $func_get_args) . '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `user_id` = $user_id"));
		
		return $data;
	}
}

function logged_in() {
	return (isset($_SESSION['user_id'])) ? true : false;
}

function user_exists($username) {
    $username = sanitize($username);
	return (mysql_result( mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` ='$username' "), 0) == 1) ? true : false;
}
 
function email_exists($email) {
	$email = sanitize($email);
	return (mysql_result( mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `email` ='$email' "), 0) == 1) ? true : false;
}
 
 
function user_id_from_username ($username) {
    $username = sanitize ($username);
    return mysql_result(mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username'"), 0, 'user_id');
}
 
function login($username, $password){
    $user_id = user_id_from_username($username);      
    $username = sanitize($username);

    return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username`='$username' AND `password`='$password'"), 0)==1) ? $user_id : false;
}

function change_password($user_id, $password) {
	$user_id = (int)$user_id;
		
	mysql_query("UPDATE `users` SET `password` = '$password' WHERE `user_id` = $user_id");
}

// ================ Participation functions ============   

function participant_exists($username) {
	$username = sanitize($username);
	return (mysql_result( mysql_query("SELECT COUNT(`participant_id`) FROM `registration` WHERE `username` ='$username' "), 0) == 1) ? true : false;
}

function participant_email_exists($email) {
	$email = sanitize($email);
	return (mysql_result( mysql_query("SELECT COUNT(`participant_id`) FROM `registration` WHERE `email` ='$email' "), 0) == 1) ? true : false;
}

function participant_registration($participation_data) {
	array_walk($participation_data, 'array_sanitize');
	
	$fields = '`' . implode('`, `', array_keys($participation_data)) . '`';
	$data = '\'' . implode('\', \'', $participation_data) . '\'';
		
	mysql_query("INSERT INTO `registration` ($fields) VALUES ($data)");
}

function verify_speaker($username) {
    $username = sanitize($username);
	return (mysql_result( mysql_query("SELECT COUNT(`participant_id`) FROM `registration` WHERE `username` ='$username' AND `role` = 'Paper Submission/Speaker' "), 0) == 1) ? true : false;
}

function login_participant($username, $password) {
	$participant_id = participant_id_from_username($username);      
    $username = sanitize($username);

    return (mysql_result(mysql_query("SELECT COUNT(`participant_id`) FROM `registration` WHERE `username`='$username' AND `password`='$password'"), 0)==1) ? $participant_id : false;
}

function participant_id_from_username ($username) {
    $username = sanitize ($username);
    return mysql_result(mysql_query("SELECT `participant_id` FROM `registration` WHERE `username` = '$username'"), 0, 'participant_id');
}
 
?>

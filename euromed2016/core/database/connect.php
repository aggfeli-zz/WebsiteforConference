<?php
$connection_error = 'Sorry, we\'re experiencing connection problems!';
mysql_connect('localhost', 'root', '') or die($connection_error);
mysql_select_db('login_signup') or die($connection_error);
?>



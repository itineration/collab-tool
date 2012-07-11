<?php
// run this script only if the logout button has ben clicked
if(isset($_POST['logout'])) {
	// empty the $_SESSION array
	$_SESSION = array();

	// invalidate the sessino cookie
	if (isset($_COOKIE[session_name()])) 
		setcookie(session_name(), '', time()-86400, '/');

	// end session and redirect
	session_destroy();
	header('Location: index.php');
	exit;
}
?>
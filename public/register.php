<?php
$page_title = 'Projects';
include('templates/header.php');
include('templates/menu.php');

if (isset($_POST['register'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['pwd']);
	$retyped = trim($_POST['retype']);
	$userfile = '/Users/mhilema/Sites/tutorials/phpsols/private/encrypted.txt';

	require_once('../includes/register_user_text.inc.php');
}
?>
	<h1>Register User</h1>
	<?php
	if (isset($result) || isset($errors)) {
		echo '<ul>';
		if (!empty($errors)) {
			foreach ($errors as $item)
				echo "<li>$item</li>";
		} 
		else
			echo "<li>$result</li>";
		echo '</ul>';
	}
	?>
	<form id="register_form" method="post" action="">
		<p>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username">
		</p>
		<p>
			<label for="pwd">Password:</label>
			<input type="password" name="pwd" id="pwd">
		</p>
		<p>
			<label for="pwd">Retype Password:</label>
			<input type="password" name="retype" id="retype">
		</p>
		<p>
			<input name="register" type="submit" id="register" value="Register">
		</p>
	</form>
<?php include('templates/footer.php'); ?>
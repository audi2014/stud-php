<form action="index.php" method="post">
	<input type="hidden" name="foo" value="login" />
	<p>email<input type="email" name="email" /></p>
	<p>password<input type="password" name="password" /></p>
	<input type="submit"/>
</form>

<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['foo'])) {	

	$email = @$_POST['email'];
	$password = @$_POST['password'];

	require_once 'DbSettings.php';
	require_once 'Database.php';
	$settings = new DbSettings();
	$conn = Database::GetConnection(
		$settings->getUser(), 
		$settings->getPassword(), 
		$settings->getHost(), 
		$settings->getName()
	);
	$query = $conn->prepare('INSERT INTO `user`(`email`, `password`, `token`) VALUES (:email,:password,:password)');

	$query->execute([
		'email' => $email, 
		'password' => $password, 
	]);

}


?>

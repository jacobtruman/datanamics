<?php
//ini_set ('display_errors', 'on');
if(!$_POST['submit']){
?>
	<html>
	<head>
	<title>My Login Form</title>
	</head>
	<body>
	<form action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>
	<div>
	Username: <input type='text' name='username' value='user'><br />
	Password: <input type='password' name='password' value='mypass'><br />
	<input type='submit' name='submit' value="Login"><br />
	</div>
	</form>
	</body>
	</html>
<?php
}else{
	if($_POST['username'] == "user" && $_POST['password'] == "mypass"){
		session_start();
		session_register("mysessionvariable");
		$id = session_id();
		$url = "Location: auth.php?sid=" . $id;
		header($url);
		//include("auth.php");
	}else{
?>
		<html>
		<head>
		<title>My Login Form</title>
		</head>
		<body>
		<span style="color:#ff0000;">Password/Username Is Invalid</span><br />
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<div>
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />
		<input type="submit" name="submit" value="Login" /><br />
		</div>
		</form>
		</body>
		</html>
<?php
	}
}
?>
<HEAD>
	<Title>
		SupportWeb Admin Login
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body OnLoad='document.loginform.myusername.focus();'>
<BR>
<BR>
<BR>
<BR>
<?php
if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$url = $vars['pass'];
}elseif (isset($_POST['nextpage'])){
	$url = $_POST['nextpage'];
}
?>
<form name='loginform' method='POST' action='/support_web/propentry/login/checklogin.php'>
	<input type='hidden' name='nextpage' value='<?php echo $url;?>'>
	<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<b>
					SupportWeb Admin Login
				</b>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				Username:
			</td>
			<td>
				<input name='myusername' type='text' value='<?php echo $_POST['myusername'];?>' id='myusername' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				Password:
			</td>
			<td>
				<input name='mypassword' type='password' id='mypassword' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<input type='submit' name='Submit' value='Login' class='formbutton'>
			</td>
			<td>
				<input type='reset' name='Reset' class='formbutton'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<a href='forgotten.php' target='_blank'>
					<font color='#FF0000'>
						Forgot your password?
					</font>
				</a>
	</table>
</form>
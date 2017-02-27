<HEAD>
	<Title>
		SupportWeb Password Retrieval
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body OnLoad='document.loginform.a_lgn.focus();'>
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
<form name='loginform' method='POST' action='/support_web/propentry/login/sendlogin.php'>
	<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<b>
					SupportWeb Forgotten Password Retrieval
				</b>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				Username:
			</td>
			<td>
				<input name='a_lgn' type='text' id='a_lgn' class='formfield'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<input type='submit' name='Submit' value='Submit' class='formbutton'>
			</td>
		</tr>
	</table>
</form>
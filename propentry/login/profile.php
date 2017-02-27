<?php
$root = 'D:/inetpub/support';
include ($root."/support_web/propentry/login/session.php");
?>
<HEAD>
	<Title>
		SupportWeb Admin Profile Change
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<BR>
<BR>
<BR>
<BR>

<form name='loginform' method='POST' action='/support_web/propentry/login/uprofile.php'>
	<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<b>
					<?php echo $_SESSION['a_lgn'];?>'s Profile
				</b>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<hr>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Permissions:
				</b>
			</td>
			<td>
				<?php echo $_SESSION['a_perm'];?>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Last Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_lname' value='<?php echo $_SESSION['a_lname'];?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					First Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_fname' value='<?php echo $_SESSION['a_fname'];?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					E-mail Address:
				</b>
			</td>
			<td>
				<input type='text' name='a_email' value='<?php echo $_SESSION['a_email'];?>' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					* Current Password:
				</b>
			</td>
			<td>
				<input type='password' name='a_pswd' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					New Password:
				</b>
			</td>
			<td>
				<input type='password' name='n_pswd' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Confirm New Password:
				</b>
			</td>
			<td>
				<input type='password' name='c_pswd' class='formfield'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				* To leave password unchanged, leave blank.
			</td>
		</tr>
		<tr>
			<td align='right'>
				<input type='submit' value='Update' class='formbutton'>
			</td>
			<td>
				<input type='reset' value='Reset' class='formbutton'>
			</td>
		</tr>
	</table>
</form>
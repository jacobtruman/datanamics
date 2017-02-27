<?php
$root = 'D:/inetpub/support';
include ($root."/support_web/propentry/login/session.php");
?>
<HEAD>
	<Title>
		SupportWeb Admin Profile Create
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<BR>
<BR>
<BR>
<BR>

<form name='loginform' method='POST' action='/support_web/propentry/login/uprofile.php'>
<input type='hidden' name='ptype' value='create'>
<input type='hidden' name='a_status' value='Active'>
	<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
		<tr>
			<td colspan='2' align='center'>
				<img src='/support_web/logos/Datanamics.png' border='0'>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<b>
					Create a new Profile
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
					Username:
				</b>
			</td>
			<td>
				<input type='text' name='a_lgn' value='' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Last Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_lname' value='' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					First Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_fname' value='' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					E-mail Address:
				</b>
			</td>
			<td>
				<input type='text' name='a_email' value='' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Permissions:
				</b>
			</td>
			<td>
				<select class='formfield' name='a_perm'>
					<option value='admin'>Admin</option>
					<option value='mgr'>Managerr</option>
					<option value='3rd'>3rd Level</option>
					<option value='2nd' selected>2nd Level</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Password:
				</b>
			</td>
			<td>
				<input type='password' name='n_pswd' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<b>
					Confirm Password:
				</b>
			</td>
			<td>
				<input type='password' name='c_pswd' class='formfield'>
			</td>
		</tr>
		<tr>
			<td align='right'>
				<input type='submit' value='Create' class='formbutton'>
			</td>
			<td>
				<input type='reset' value='Reset' class='formbutton'>
			</td>
		</tr>
	</table>
</form>
<?php
$root = 'D:/inetpub/support';
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

<form name='loginform' method='POST' action='/support_web/propentry/contacts/ucontacts.php'>
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
					Add a contact
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
					Name:
				</b>
			</td>
			<td>
				<input type='text' name='a_contact' value='' class='formfield'>
				<br>
				(i.e. last name, first)
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Main Phone:
				</b>
			</td>
			<td>
				<input type='text' name='a_cmphone' value='' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Extension:
				</b>
			</td>
			<td>
				<input type='text' name='a_cext' value='' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Cell Phone:
				</b>
			</td>
			<td>
				<input type='text' name='a_ccphone' value='' class='formfield'>
			</td>
		</tr>
		<tr>
			<td width='50%' align='right'>
				<b>
					Contact Type:
				</b>
			</td>
			<td>
				<select class='formfield' name='a_ctype'>
					<option value='Employee'>Employee</option>
					<option value='Company'>Company</option>
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
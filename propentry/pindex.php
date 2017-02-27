<?php
ini_set('display_errors', 1);
require_once("Autoload.php");
$title = 'Property Info Entry';
$prop = $_REQUEST['prop'];
$property = new Property($prop);
$page_items = new PageItems($property);

echo $page_items->getHeader($title);

?>
<div id="content">
	<?php echo $page_items->getContactHeaderDiv($title, $level);?>

<HR>
<center>
	<font face='Verdana' size='2'>
		<?php echo $ptype;?>
	</font>
</center>
	<FORM METHOD='POST' name='formname' action='pcodecheck.php'>
	<INPUT TYPE='hidden' NAME='uptodate' VALUE='New'>
	<INPUT TYPE='hidden' NAME='status' VALUE='Up'>
	<INPUT TYPE='hidden' NAME='bypassed' VALUE='No'>
	<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
	<INPUT TYPE='hidden' NAME='created_by' VALUE='<?php echo $_SESSION['a_lgn'];?>'>
<BLOCKQUOTE>
<TABLE border='0' cellpadding='2' cellspacing='2' align='center'>
	<?php
		if(!empty($error)){
			echo "<tr>
				<td align='center' colspan='2'>
					<font color='red'>
						<b>
							".$error."
						</b>
					</font>
				</td>
			</tr>\n";
		}
	?>
	<TR>
		<TD ALIGN='right'>
			Property Code
		</TD>
		<TD>
			<INPUT NAME='prop' SIZE='5' MAXLEN='5' VALUE='<?php echo $_REQUEST['prop'];?>' CLASS='formfield' style='text-transform: uppercase;'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Name
		</TD>
		<TD>
			<INPUT NAME='name' SIZE='25' VALUE='<?php echo $_REQUEST['name'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Folder Location
		</TD>
		<TD>
			<INPUT NAME='loc' SIZE='25' VALUE='<?php echo $_REQUEST['loc'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Property Info Folder (relative to Z:/)
		</TD>
		<TD>
			<INPUT NAME='fold' SIZE='25' VALUE='<?php echo $_REQUEST['fold'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Property Type
		</TD>
		<TD>
		<?php
			/*
			$db = $root.'/support_web/fpdb/propinfo.mdb';
			$conn = new COM('ADODB.Connection');
			$conn->Open("DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$db");

			$sql = "SELECT DISTINCT htype FROM prop";
			$res = $conn->Execute($sql);

			if (!isset($res)){
			}else{
				echo "<select size='1' NAME='htype' CLASS='formfield'>";
				while (!$res->EOF){
					$htype = $res->Fields['htype']->Value;
					echo "<option value='".$htype."' class='formfield'>".$htype."</option>";
					$res->MoveNext();
				}
			echo '</select>';
			$res = null;
			$conn->Close();
			}
			*/
		?>
		<?php include("props.php");?>
		</TD>
	</TR>
	<TR>
	<TR>
		<TD ALIGN='right'>
			Database Name (Prop type and Name, no spaces)
		</TD>
		<TD>
			<INPUT NAME='dbname' SIZE='25' VALUE='<?php echo $_REQUEST['dbname'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway Address
		</TD>
		<TD>
			<INPUT NAME='gateway' SIZE='25' VALUE='<?php echo $_REQUEST['gateway'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Login
		</TD>
		<TD>
			<?php
				if(empty($_REQUEST['lgn'])){
					echo "<INPUT NAME='lgn' VALUE='datadmin' SIZE='25' CLASS='formfield'>\n";
				}else{
					echo "<INPUT NAME='lgn' VALUE='".$_REQUEST['lgn']."' SIZE='25' CLASS='formfield'>\n";
				}
			?>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Password
		</TD>
		<TD>
			<?php
				if(empty($_REQUEST['pswd'])){
					echo "<INPUT NAME='pswd' VALUE='zinck2240' SIZE='25' CLASS='formfield'>\n";
				}else{
					echo "<INPUT NAME='pswd' VALUE='".$_REQUEST['pswd']."' SIZE='25' CLASS='formfield'>\n";
				}
			?>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Gateway Address
		</TD>
		<TD>
			<INPUT NAME='gateway2' SIZE='25' VALUE='<?php echo $_REQUEST['gateway2'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Login
		</TD>
		<TD>
			<INPUT NAME='lgn2' VALUE='<?php echo $_REQUEST['lgn2'];?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Password
		</TD>
		<TD>
			<INPUT NAME='pswd2' VALUE='<?php echo $_REQUEST['pswd2'];?>' SIZE='25' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Third Gateway Address
		</TD>
		<TD>
			<INPUT NAME='gateway3' SIZE='25' VALUE='<?php echo $_REQUEST['gateway3'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Third Login
		</TD>
		<TD>
			<INPUT NAME='lgn3' SIZE='25' VALUE='<?php echo $_REQUEST['lgn3'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Third Password
		</TD>
		<TD>
			<INPUT NAME='pswd3' SIZE='25' VALUE='<?php echo $_REQUEST['pswd3'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Fourth Gateway Address
		</TD>
		<TD>
			<INPUT NAME='gateway4' SIZE='25' VALUE='<?php echo $_REQUEST['gateway4'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Fourth Login
		</TD>
		<TD>
			<INPUT NAME='lgn4' SIZE='25' VALUE='<?php echo $_REQUEST['lgn4'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Fourth Password
		</TD>
		<TD>
			<INPUT NAME='pswd4' SIZE='25' VALUE='<?php echo $_REQUEST['pswd4'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Equipment Login
		</TD>
		<TD>
			<?php
				if(empty($_REQUEST['eqlgn'])){
					echo "<INPUT NAME='eqlgn' VALUE='datadmin' SIZE='25' CLASS='formfield'>\n";
				}else{
					echo "<INPUT NAME='eqlgn' VALUE='".$_REQUEST['eqlgn']."' SIZE='25' CLASS='formfield'>\n";
				}
			?>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Equipment Password
		</TD>
		<TD>
			<?php
				if(empty($_REQUEST['eqpswd'])){
					echo "<INPUT NAME='eqpswd' VALUE='zinck2240' SIZE='25' CLASS='formfield'>\n";
				}else{
					echo "<INPUT NAME='eqpswd' VALUE='".$_REQUEST['eqpswd']."' SIZE='25' CLASS='formfield'>\n";
				}
			?>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			External Router Address
		</TD>
		<TD>
			<INPUT NAME='rtr' SIZE='25' VALUE='<?php echo $_REQUEST['rtr'];?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Router Supported
		</TD>
		<TD>
			<select size='1' name='rtrsup' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['rtrsup'])){
						echo "<option value='Yes' selected>Yes</option>
						<option value='No'>No</option>\n";
					}else{
						echo "<option value='".$_REQUEST['rtrsup']."' selected>".$_REQUEST['rtrsup']."</option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>\n";
					}
				?>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Redirect through?
		</TD>
		<TD>
			<select size='1' name='redir' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['redir'])){
						echo "<option value='na' selected>na</option>
						<option value='rtr'>Router</option>
						<option value='gateway'>Gateway Server</option>\n";
					}else{
						echo "<option value='".$_REQUEST['redir']."' selected>".$_REQUEST['redir']."</option>
						<option value='na'>na</option>
						<option value='rtr'>Router</option>
						<option value='gateway'>Gateway Server</option>\n";
					}
				?>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Level 1 Support
		</TD>
		<TD>
			<select size='1' name='level1' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['level1'])){
						echo "<option value='Yes' selected>Yes</option>
						<option value='No'>No</option>\n";
					}else{
						echo "<option value='".$_REQUEST['level1']."' selected>".$_REQUEST['level1']."</option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>\n";
					}
				?>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Level 2 Support
		</TD>
		<TD>
			<select size='1' name='level2' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['level2'])){
						echo "<option value='Yes' selected>Yes</option>
						<option value='No'>No</option>\n";
					}else{
						echo "<option value='".$_REQUEST['level2']."' selected>".$_REQUEST['level2']."</option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>\n";
					}
				?>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Installer
		</TD>
		<TD>
			<select size='1' name='inst' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['inst'])){
						echo "<option value='Datanamics' selected>Datanamics</option>
						<option value='Netopia'>Netopia</option>
						<option value='CNR'>CNR</option>
						<option value='AIC'>AIC</option>
						<option value='VDCS'>VDCS</option>\n";
					}else{
						echo "<option value='".$_REQUEST['inst']."' selected>".$_REQUEST['inst']."</option>
						<option value='Datanamics'>Datanamics</option>
						<option value='Netopia'>Netopia</option>
						<option value='CNR'>CNR</option>
						<option value='AIC'>AIC</option>
						<option value='VDCS'>VDCS</option>\n";
					}
				?>
			</select>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			Notes
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			<TEXTAREA NAME='notes' ROWS='10' COLS='60' WRAP='PHYSICAL' CLASS='formfield'><?php echo $_REQUEST['notes'];?></TEXTAREA>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Property Active
		</TD>
		<TD>
			<select size='1' name='active' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['active'])){
						echo "<option value='Yes' selected>Yes</option>
						<option value='No'>No</option>
						<option value='Old'>Old</option>\n";
					}else{
						echo "<option value='".$_REQUEST['active']."' selected>".$_REQUEST['active']."</option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>
						<option value='Old'>Old</option>\n";
					}
				?>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Property in Nagios
		</TD>
		<TD>
			<select size='1' name='pnagios' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['pnagios'])){
						echo "<option value='Yes'>Yes</option>
						<option value='No' selected>No</option>\n";
					}else{
						echo "<option value='".$_REQUEST['pnagios']."' selected>".$_REQUEST['pnagios']."</option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>\n";
					}
				?>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Hilton Transitioned Property
		</TD>
		<TD>
			<select size='1' name='poc' CLASS='formfield'>
				<?php
					if(empty($_REQUEST['poc'])){
						echo "<option value='Yes' selected>Yes</option>
						<option value='No' selected>No</option>\n";
					}else{
						echo "<option value='".$_REQUEST['poc']."' selected>".$_REQUEST['poc']."</option>
						<option value='Yes'>Yes</option>
						<option value='No'>No</option>\n";
					}
				?>
			</select>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			Special Note
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			<TEXTAREA NAME='spnote' ROWS='10' COLS='60' WRAP='PHYSICAL' CLASS='formfield'><?php echo $_REQUEST['spnote'];?></TEXTAREA>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			2nd Level Special Note
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			<TEXTAREA NAME='spnote2' ROWS='10' COLS='60' WRAP='PHYSICAL' CLASS='formfield'><?php echo $_REQUEST['spnote2'];?></TEXTAREA>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			<BR>
			<INPUT TYPE=SUBMIT VALUE='Submit' CLASS='formbutton'>
			<INPUT TYPE=RESET VALUE='Reset' CLASS='formbutton'>
		</TD>
	</TR>
</TABLE>
</FORM>
</BLOCKQUOTE>

	<?php echo $page_items->getFooter();?>
</div>

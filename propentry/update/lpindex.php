<?php
$ptype = 'Property Info Update';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/update/header.php');
include ($root.'/support_web/vargen.php');

$link = ado_connect( $dsn );

$sql = "SELECT * FROM prop where (prop = '".$prop."')";
$res = $link->Execute($sql);

$titles = 'Gateway Address,Second Gateway Address,Third Gateway Address,Fourth Gateway Address,Name,Login,Second Login,Third Login,Fourth Login,Password,Second Password,Third Password,Fourth Password,Equipment Login,Equipment Password,Date Last Modified,Router Address,Router Supported,Redirect Through,Gateway Bypassed,Update Log,Hilton Transitioned Property,Property Active, Disable Date';
$list = 'gateway,gateway2,gateway3,gateway4,name,lgn,lgn2,lgn3,lgn4,pswd,pswd2,pswd3,pswd4,eqlgn,eqpswd,mdate,rtr,rtrsup,redir,bypassed,ulog,poc,active,ddate';
$fields = explode(',', $list);

for ($i = 0; $i < count($fields); $i++){
	$$fields[$i] = $res->Fields[$fields[$i]]->Value;
}


ado_free_result( $res );
ado_close( $link );
?>
	<FORM METHOD='POST' name='formname' action='res.php'>
	<INPUT TYPE='hidden' NAME='table' VALUE='prop'>
	<INPUT TYPE='hidden' NAME='log' VALUE='ulog'>
	<INPUT TYPE='hidden' NAME='name' VALUE='<?php echo $name;?>'>
	<INPUT TYPE='hidden' NAME='prop' VALUE='<?php echo $prop;?>'>
	<INPUT TYPE='hidden' NAME='mdate' VALUE='<?php echo date('m/d/Y H:i');?>'>
	<INPUT TYPE='hidden' NAME='titles' VALUE='<?php echo $titles;?>'>
	<INPUT TYPE='hidden' NAME='list' VALUE='<?php echo $list;?>'>
	<?php
		for ($i = 0; $i < count($fields); $i++){
			echo "<INPUT TYPE='hidden' NAME='OLD".$fields[$i]."' VALUE='".$$fields[$i]."'>\n";
		}
	?>
<BLOCKQUOTE>
<TABLE border='0' cellpadding='2' cellspacing='2' align='center' width='80%' valign='top'>
	<TR>
		<TD ALIGN='right' width='50%'>
			Property Code
		</TD>
		<TD width='50%'>
			<b>
				<?php echo $prop;?>
			</b>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Date Last Modified
		</TD>
		<TD>
			<b>
				<?php echo $mdate;?>
			</b>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway Address
		</TD>
		<TD>
			<INPUT NAME='gateway' SIZE='25' VALUE='<?php echo $gateway;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Login
		</TD>
		<TD>
			<INPUT NAME='lgn' SIZE='25' VALUE='<?php echo $lgn;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Password
		</TD>
		<TD>
			<INPUT NAME='pswd' SIZE='25' VALUE='<?php echo $pswd;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Gateway Address
		</TD>
		<TD>
			<INPUT NAME='gateway2' SIZE='25' VALUE='<?php echo $gateway2;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Login
		</TD>
		<TD>
			<INPUT NAME='lgn2' SIZE='25' VALUE='<?php echo $lgn2;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Second Password
		</TD>
		<TD>
			<INPUT NAME='pswd2' SIZE='25' VALUE='<?php echo $pswd2;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Third Gateway Address
		</TD>
		<TD>
			<INPUT NAME='gateway3' SIZE='25' VALUE='<?php echo $gateway3;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Third Login
		</TD>
		<TD>
			<INPUT NAME='lgn3' SIZE='25' VALUE='<?php echo $lgn3;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Third Password
		</TD>
		<TD>
			<INPUT NAME='pswd3' SIZE='25' VALUE='<?php echo $pswd3;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Fourth Gateway Address
		</TD>
		<TD>
			<INPUT NAME='gateway4' SIZE='25' VALUE='<?php echo $gateway4;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Fourth Login
		</TD>
		<TD>
			<INPUT NAME='lgn4' SIZE='25' VALUE='<?php echo $lgn4;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Fourth Password
		</TD>
		<TD>
			<INPUT NAME='pswd4' SIZE='25' VALUE='<?php echo $pswd4;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Equipment Login
		</TD>
		<TD>
			<INPUT NAME='eqlgn' SIZE='25' VALUE='<?php echo $eqlgn;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Equipment Password
		</TD>
		<TD>
			<INPUT NAME='eqpswd' SIZE='25' VALUE='<?php echo $eqpswd;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Router Address
		</TD>
		<TD>
			<INPUT NAME='rtr' SIZE='25' VALUE='<?php echo $rtr;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Router Supported
		</TD>
		<TD>
			<select size='1' name='rtrsup' CLASS='formfield'>
				<option value='<?php echo $rtrsup;?>' selected><?php echo $rtrsup;?></option>
				<option value='Yes'>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Redirect through ?
		</TD>
		<TD>
		<?php
			if ($redir == 'rtr'){
				$redirname = 'Router';
			}elseif ($redir == 'gateway'){
				$redirname = 'Gateway Server';
			}elseif($redir == 'na'){
				$redirname = 'na';
			}
		?>
			<select size='1' name='redir' CLASS='formfield'>
				<option value='<?php echo $redir;?>' selected><?php echo $redirname;?></option>
				<option value='na'>na</option>
				<option value='rtr'>Router</option>
				<option value='gateway'>Gateway Server</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Gateway Bypassed
		</TD>
		<TD>
			<select size='1' name='bypassed' CLASS='formfield'>
				<option value='<?php echo $bypassed;?>' selected><?php echo $bypassed;?></option>
				<option value='Yes'>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Hilton Transitioned Property
		</TD>
		<TD>
			<select size='1' name='poc' CLASS='formfield'>
				<option value='<?php echo $poc;?>' selected><?php echo $poc;?></option>
				<option value='Yes'>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Property Active
		</TD>
		<TD>
			<select size='1' name='active' CLASS='formfield'>
				<option value='<?php echo $active;?>' selected><?php echo $active;?></option>
				<option value='Yes'>Yes</option>
				<option value='No'>No</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Disable Date
		</TD>
		<TD>
			<SCRIPT language='JavaScript' id='js'>
				var cal = new CalendarPopup("date_div");
				cal.setCssPrefix("date");
			</SCRIPT>
			<INPUT size='15' name='ddate' value='<?php echo $ddate;?>' class='formfield'>
			<A id='anchor' title="cal.select(document.forms[0].ddate,'anchor1x','MM/dd/yyyy'); return false;" 
			onclick="cal.select(document.forms[0].ddate,'anchor','MM/dd/yyyy'); return false;" href="#" name='anchor'><img src='/support_web/calendar/cal.gif' border='0' alt='Click here to select a date'></A>
		</TD>
	</TR>
	<TR>
		<TD colspan='2'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD colspan='2' align='center'>
			<INPUT TYPE='submit' VALUE='Update' CLASS='formbutton'>
			<INPUT TYPE='reset' VALUE='Reset' CLASS='formbutton'>
		</TD>
	</TR>
</TABLE>
<DIV id='date_div' style="VISIBILITY: hidden; POSITION: absolute; BACKGROUND-COLOR: white; layer-background-color: white"></DIV>
</FORM>
</BLOCKQUOTE>
<HR>
</BODY>
<?php
$ptype = 'Property Info Update';
$root = 'D:/inetpub/support';
include ($root.'/support_web/LANSupportProps/components/headeradmin.php');
$prop = $_POST['prop'];

$link = ado_connect( $dsn );

$sql = "SELECT * FROM prop where (prop = '".$prop."')";
$res = $link->Execute($sql);

$titles = 'Name,Location,Folder Location,Installer,Notes,Active,Database Name,Equipment Login,Equipment Password,Date Last Modified,Up to Date,Special Notes,Disable Date,Property In Nagios,Router IP,Router Supported,Server IP,Login,Password';
$list = 'name,loc,fold,inst,notes,active,dbname,eqlgn,eqpswd,mdate,uptodate,spnote,ddate,ulog,pnagios,rtr,rtrsup,server,lgn,pswd';
$fields = explode(',', $list);

for ($i = 0; $i < count($fields); $i++){
	$$fields[$i] = $res->Fields[$fields[$i]]->Value;
}


ado_free_result( $res );
ado_close( $link );
?>
<script type="text/javascript" language="javascript" src="/support_web/calendar/CalendarPopup.js"></script>
<SCRIPT language=JavaScript src="/support_web/calendar/common.js"></SCRIPT>
<SCRIPT language=JavaScript>document.write(getCalendarStyles());</SCRIPT>
<STYLE>
.datecpYearNavigation {
	FONT-WEIGHT: bold; COLOR: #ffffff; BACKGROUND-COLOR: #5f8ac5; TEXT-ALIGN: center; TEXT-DECORATION: none
}
.datecpMonthNavigation {
	FONT-WEIGHT: bold; COLOR: #ffffff; BACKGROUND-COLOR: #5f8ac5; TEXT-ALIGN: center; TEXT-DECORATION: none
}
.datecpDayColumnHeader {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpYearNavigation {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpMonthNavigation {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpCurrentMonthDate {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpCurrentMonthDateDisabled {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpOtherMonthDate {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpOtherMonthDateDisabled {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpCurrentDate {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpCurrentDateDisabled {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpTodayText {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpTodayTextDisabled {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
.datecpText {
	FONT-SIZE: 8pt; FONT-FAMILY: arial
}
TD.datecpDayColumnHeader {
	BORDER-RIGHT: #5f8ac5 0px solid; BORDER-TOP: #5f8ac5 0px solid; BORDER-LEFT: #5f8ac5 0px solid; BORDER-BOTTOM: #5f8ac5 1px solid; TEXT-ALIGN: right
}
.datecpCurrentMonthDate {
	TEXT-ALIGN: right; TEXT-DECORATION: none
}
.datecpOtherMonthDate {
	TEXT-ALIGN: right; TEXT-DECORATION: none
}
.datecpCurrentDate {
	TEXT-ALIGN: right; TEXT-DECORATION: none
}
.datecpCurrentMonthDateDisabled {
	COLOR: #d0d0d0; TEXT-ALIGN: right; TEXT-DECORATION: line-through
}
.datecpOtherMonthDateDisabled {
	COLOR: #d0d0d0; TEXT-ALIGN: right; TEXT-DECORATION: line-through
}
.datecpCurrentDateDisabled {
	COLOR: #d0d0d0; TEXT-ALIGN: right; TEXT-DECORATION: line-through
}
.datecpCurrentMonthDate {
	FONT-WEIGHT: bold; COLOR: #5f8ac5
}
.datecpCurrentDate {
	FONT-WEIGHT: bold; COLOR: #ffffff
}
.datecpOtherMonthDate {
	COLOR: #808080
}
TD.datecpCurrentDate {
	BORDER-RIGHT: #000000 thin solid; BORDER-TOP: #000000 thin solid; BORDER-LEFT: #000000 thin solid; COLOR: #ffffff; BORDER-BOTTOM: #000000 thin solid; BACKGROUND-COLOR: #5f8ac5
}
TD.datecpCurrentDateDisabled {
	BORDER-RIGHT: #ffaaaa thin solid; BORDER-TOP: #ffaaaa thin solid; BORDER-LEFT: #ffaaaa thin solid; BORDER-BOTTOM: #ffaaaa thin solid
}
TD.datecpTodayText {
	BORDER-RIGHT: #5f8ac5 0px solid; BORDER-TOP: #5f8ac5 1px solid; BORDER-LEFT: #5f8ac5 0px solid; BORDER-BOTTOM: #5f8ac5 0px solid
}
TD.datecpTodayTextDisabled {
	BORDER-RIGHT: #5f8ac5 0px solid; BORDER-TOP: #5f8ac5 1px solid; BORDER-LEFT: #5f8ac5 0px solid; BORDER-BOTTOM: #5f8ac5 0px solid
}
A.datecpTodayText {
	HEIGHT: 20px
}
SPAN.datecpTodayTextDisabled {
	HEIGHT: 20px
}
A.datecpTodayText {
	FONT-WEIGHT: bold; COLOR: #5f8ac5
}
SPAN.datecpTodayTextDisabled {
	COLOR: #d0d0d0
}
.datecpBorder {
	BORDER-RIGHT: #5f8ac5 thin solid; BORDER-TOP: #5f8ac5 thin solid; BORDER-LEFT: #5f8ac5 thin solid; BORDER-BOTTOM: #5f8ac5 thin solid
}
</STYLE>
	<FORM METHOD='POST' name='formname' action='res.php'>
	<INPUT TYPE='hidden' NAME='table' VALUE='prop'>
	<INPUT TYPE='hidden' NAME='log' VALUE='ulog'>
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
<!--	<TR>
		<TD ALIGN='right'>
			Date Last Modified
		</TD>
		<TD>
			<b>
				<?php echo $mdate;?>
			</b>
		</TD>
	</TR>-->
	<TR>
		<TD ALIGN='right'>
			Name
		</TD>
		<TD>
			<INPUT NAME='name' SIZE='25' VALUE='<?php echo $name;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Folder Location
		</TD>
		<TD>
			<INPUT NAME='loc' SIZE='25' VALUE='<?php echo $loc;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Property Info Folder (relative to Z:\LANSupportProps\(property name)\)
		</TD>
		<TD>
			<INPUT NAME='fold' SIZE='25' VALUE='<?php echo $fold;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
	<TR>
		<TD ALIGN='right'>
			Database Name (Prop type and Name, no spaces)
		</TD>
		<TD>
			<INPUT NAME='dbname' SIZE='25' VALUE='<?php echo $dbname;?>' CLASS='formfield'>
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
			Server Address
		</TD>
		<TD>
			<INPUT NAME='server' SIZE='25' VALUE='<?php echo $server;?>' CLASS='formfield'>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Installer
		</TD>
		<TD>
			<select size='1' name='inst' CLASS='formfield'>
				<option value='<?php echo $inst;?>' selected><?php echo $inst;?></option>
				<option value='CNR'>CNR</option>
				<option value='Datanamics'>Datanamics</option>
				<option value='AIC'>AIC</option>
				<option value='VDCS'>VDCS</option>
			</select>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='right'>
			Up to Date
		</TD>
		<TD>
			<select size='1' name='uptodate' CLASS='formfield'>
				<option value='<?php echo $uptodate;?>' selected><?php echo $uptodate;?></option>
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
			Property in Nagios
		</TD>
		<TD>
			<select size='1' name='pnagios' CLASS='formfield'>
				<option value='<?php echo $pnagios;?>' selected><?php echo $pnagios;?></option>
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
<!--			<A id='anchor' title="cal.select(document.forms[0].ddate,'anchor1x','MM/dd/yyyy'); return false;" 
			onclick="cal.select(document.forms[0].ddate,'anchor','MM/dd/yyyy'); return false;" href="#" name='anchor'><img src='/support_web/calendar/cal.gif' border='0' alt='Click here to select a date'></A>-->
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
	<TR>
		<TD colspan='2'>
			<BR>
		</TD>
	</TR>
	<TR>
		<TD ALIGN='center' colspan='2'>
			<b>
				Log
			</b>
		</TD>
	</tr>
	<tr>
		<TD colspan='2'>
			<?php echo $ulog;?>
		</TD>
	</TR>
</TABLE>
<DIV id='date_div' style="VISIBILITY: hidden; POSITION: absolute; BACKGROUND-COLOR: white; layer-background-color: white"></DIV>
</FORM>
</BLOCKQUOTE>
<HR>
</BODY>
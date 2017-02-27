<?php
if (!isset($htype)){
	$htype = '';
}
if (!isset($name)){
	$name = '';
}
if (!isset($ptype)){
	$ptype = '';
}
if (!isset($cname)){
	$cname = '';
}

if ($cname == 'Datanamics Contact Information'){
	$title = $cname;
}else{
	$title = $htype." ".$name." ".$ptype;
}
?>
<HEAD>
<Title>
	<?php echo $title;?>
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='style.css'>
</HEAD>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
	<table class='sw-main' cellpadding='0' cellspacing='0' border='0' width='100%' height='100%'>
		<tr>
			<td valign='top' colspan='3'>
				<?php include("mainheader2.php");?>
			</td>
		</tr>
		<tr valign='top' height='100%'>
			<td height='435' valign='top' rowspan='2' bgcolor='#F0F0F0'>
				<?php include("supportmenu.php");?>
			</td>
			<td height='19' bgcolor='#D8D8D8' align='center' class='header4'>
				<?php echo $title;?>
			</td>
		</tr>
		<tr valign='top' height='100%'>
			<td width='100%' height='416' valign='top' colspan='2'>
				<table border='0' width='100%'>
					<?php include("contactlinks.php");?>
<?php
include($root.'/support_web/LANSupportProps/components/dbtop.php');
if (!isset($name)){
	$name = '';
}
if (!isset($ptype)){
	$ptype = '';
}
if (!isset($cname)){
	$cname = '';
}
$title = $name." ".$ptype;

?>
<HEAD>
	<Title>
    	<?php echo $title;?>
	</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
	<table class='ms-main' cellpadding='0' cellspacing='0' border='0' width='100%' height='100%'>
		<tr>
			<td width='100%' height='29' colspan='3'>
				<table class='ms-bannerframe' border='0' cellspacing='0' cellpadding='3' width='100%'>
					<tr>
						<td nowrap valign='middle' align='left' height='30' width='100%'>
						</td>
					</tr>
				</table>				
				<table border='0' cellspacing='0' cellpadding='0' width='100%'>
					<tr>
					   <td bgcolor='#D8D8D8' align='center'>
						  	<font size='4' face='Times New Roman'>
								<?php echo $title;?>
							</font>
						</td>
					</tr>
				</table>
			</td>
		 </tr>
		 <tr>
			<td width='100%' valign='top' colspan='2'>
				<table cellpadding='0' cellspacing='0' border='0' width='100%'>

<!-- Created by Jacob Truman, Matthew "Stewart" -->
<table border='0' width='100%' cellspacing='0' cellpading='0' class='ms-underline'>
<?php
	if(strstr($bmethod, 'Hampton CAS')){
		echo "<tr><td colspan='5' align='center'><font style='BACKGROUND-COLOR: #000000'><font color='#FF0000'><b>NOTE:</b></font> <font color='#FFFFFF'>The Number to call when the Hampton Inn Central Authentication Server is down is <b>901-374-6461<!--800-847-8483 opt 8--></b></font></font></td></tr>";
	}else if(strstr($bmethod, 'Hilton CAS')){
		echo "<tr><td colspan='5' align='center'><font style='BACKGROUND-COLOR: #000000'><font color='#FF0000'><b>NOTE:</b></font> <font color='#FFFFFF'>The Number to call when the Hilton Inn Central Authentication Server is down is <b>901-374-6461<!--800-847-8483 opt 8--></b></font></font></td></tr>";
	}else if (($htype == 'Conrad') && ($lvl == '2')){
		echo "<tr><td colspan='5' align='center'><font color='red' size='4'>Do not change WAP configs</font></td></tr>";
	}
	if(strstr($_POST['gtype'], 'Solution IP')){
		echo "<tr><td colspan='5' align='center'><font color='red'><b>NOTE:</b></font> If you need to contact SolutionInc, the number is <b>1-866-801-4861</b></td></tr>";
	}
	if ($uptodate == 'No'){
		echo "<tr><td colspan='5' align='center'><font color='green' size='3'><b>This network map has yet to be updated; check the documentation if needed.</b></font></td></tr>";
	}
	if ($inst == 'CNR'){
		echo "<tr><td colspan='5' align='center'><font size='3'><b>The Password at this Property is NOT set to our Standard - <font color='red'>DO NOT CHANGE IT!</font></b></font></td></tr>";
	}
	if (isset($spnote)){
		echo "<tr><td colspan='5' align='center'><font color='red' size='4'>".nl2br($spnote)."</font></td></tr>";
	}
	if ((isset($spnote2)) && ($lvl == '2')){
		echo "<tr><td colspan='5' align='center'><font color='red' size='4'>".nl2br($spnote2)."</font></td></tr>";
	}
	if ($poc == 'Yes'){
		echo "<tr><td colspan='5' align='center'><br><font color='purple' size='6'>Calls from this property need to be entered in <a href='http://10.0.12.28/arsys/shared/login.jsp' target='_blank'>Remedy</a>, not Service Desk</font></td></tr>";
	}
	if ($bypassed == 'Yes'){
		echo "<tr><td colspan='5' align='center'><br><font color='green' size='6'>Gateway at this property is currently bypassed</font></td></tr>";
	}
	?>
</table>
<table border='0' width='100%' cellspacing='0' cellpading='0' class='ms-underline'>
<?php
	if ($uptodate != 'Yes'){
		echo "<TR><TD colspan='5' align='center'><font color='green' size='3'><b>This network map has yet to be updated; check the documentation if needed.</b></font></TD></TR>";
	}
	if (isset($spnote)){
		echo "<TR><TD colspan='5' align='center'><font color='red' size='4'>".nl2br($spnote)."</font></TD></TR>";
	}
	?>
</table>
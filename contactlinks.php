<?php
if (isset($prop)){
	$pg = "ContactInformation.php";
	$dpg = "ContactInformation.php";
}
?>
					<tr>
						<td width='33%'>
							<?php
								if (isset($prop)){
									if (!isset($img)){
									}elseif ($ptype == "Contact Information"){
										echo "<img border='0' src='/support_web/logos/".$img."'>";
									}else{
										echo "<form name='overform' method='POST' action='/support_web/forms/".$pg."' target='_blank'>";
										echo "<input type='hidden' name='prop' value='".$prop."'>";
										echo "<input type='image' src='/support_web/logos/".$img."'>";
										echo "</form>";
									}
								}
							?>
						</td>
							<?php
								if (isset($shomine) && $shomine == 'true'){
									echo "<td width='33%' align='center'>";
									if ($lvl == '2'){
										echo "<iframe name='updown' src='/support_web/forms/changestatus.php?prop=".$prop."&status=".$status."&name=".$name."&active=".$active."' width='100' height='100' border='0' frameborder='0' scrolling='no'></iframe>";
									}else if ($lvl == '1'){
										include ($root."/support_web/components/updown.php");
										echo "<img src='".$udimg."' border='0'>\n";
									}
									echo "</td>";
								}

								if (isset($shomine) && $shomine == 'true'){
									echo "<td width='33%' align='center'>";
									if ($lvl == '2'){
										echo "<iframe name='updown' src='/support_web/forms/blockedmac.php?prop=".$prop."&name=".$name."&htype=".$htype."&gateway=".$gateway."' width='250' height='100' border='0' frameborder='0' scrolling='no'></iframe>";
									}
									echo "</td>";
								}
							?>
						<td width='33%' valign='top' align='right'>
							<?php
								if (isset($prop)){
									if (empty($inst)){
										$inst = "Datanamics";
									}
									if (!empty($ptype)){
										echo "<img border='0' src='/support_web/logos/".$inst.".png'>";
									}elseif ($ptype == "HSIA Main Page"){
									}else{
										echo "<form name='overform' method='POST' action='/support_web/".$inst.$dpg."' target='_blank'>
											<input type='hidden' name='prop' value='".$prop."'>
											<input type='hidden' name='inst' value='".$inst."'>
											<input type='image' src='/support_web/logos/".$inst.".png'>
										</form>";
									}
								}
							?>
						</td>
					</tr>
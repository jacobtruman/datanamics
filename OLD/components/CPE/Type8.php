<?php
$root = "D:/inetpub/support";
include ('header.php');
?>
				<table border='0' cellspacing='0' cellpadding='0' width=100%>
					<tr>
					   <td bgcolor='#D8D8D8' align='center'>
						  	<font size='4' face='Times New Roman'>
								Turbocomm EA110 ADSL CPE
							</font>
						</td>
					</tr>
				</table>
			</TD>
		 </tr>
  		<tr valign=top height=100%>
    		<td width='733' height='416' valign='top' colspan='2' align='center'>
				<BR>
				<BR>
					<img border='0' src='pics/turbocomm.png'><img border='0' src='pics/turbocommback.png'><br>
The ADSL light will flash on these CPEs regardless of whether the phone cord is plugged in.
If there is no phone cord connected, or if the modem does not see the Paradyne, then the ADSL light will flash steadily about every 3 seconds. If there is a phone cord connected, and the modem is trying to establish a DSL link, the light will flash more rapidly for a period of time. If it cannot establish a link, it will then go off for a period, and then start flashing rapidly again. If it does establish a link, it will go solid.

This is different from the other DSL modems we support which do not blink until there is a good phone line connected, so for these CPEs we need to be sure to verify the phone cord is securely connected. 
				<BR>
				<BR>
    		</td>
  		</tr>
	</table>
</body>




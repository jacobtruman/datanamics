<?php
$ptype = 'Datanamics Phone List';
$root = 'D:/inetpub/support';
include($root.'/support_web/components/header.php');
?>
<br>
<center><b>Contacts</B></center>
<BR>
<?php
$link = ado_connect($dsn);
$sql = "SELECT * FROM contactlist WHERE contacttype = 'Company' AND ContactStatus = 'Active' ORDER BY Name ASC";
//echo $sql;

echo "<table width='50%' align='center' class='alldotted'>
	<tr>
		<td align='center' class='alldotted'>
			<b>
				Name
			</b>
		</td>
		<td align='center' class='alldotted'>
			<b>
				Phone
			</b>
		</td>
	</tr>\n";

			$res = $link->Execute($sql);
			$i = 0;
			if (!isset($res)){
			}else{
				while (!$res->EOF){
					$name = $res->Fields['name']->Value;
					$mainphone = $res->Fields['mainphone']->Value;
					if (($i % 2) == 0){
						$rowcolor = '#FFFFFF';
					}else{
						$rowcolor = '#cccccc';
					}
					$i++;
					echo "<tr>
						<td bgcolor='".$rowcolor."'>
							".$name."
						</td>
						<td bgcolor='".$rowcolor."'>
							".$mainphone."
						</td>
					</tr>";	
				$res->MoveNext();
				}
			}
			ado_free_result( $res );
			ado_close( $link );
			echo "</table>\n";

?>
<BR>
<BR>
<center>
	<b>
		Employee Contacts
	</b>
</center>
<BR>
<?php
$link = ado_connect($dsn);
$sql = "SELECT * FROM contactlist WHERE contacttype = 'Employee' AND ContactStatus = 'Active' ORDER BY Name ASC";
//echo $sql;

echo "<table width='65%' align='center' class='alldotted'>
	<tr>
		<td align='center' class='alldotted'>
			<b>
				Name
			</b>
		</td>
		<td align='center' class='alldotted'>
			<b>
				Extension
			</b>
		</td>
		<td align='center' class='alldotted'>
			<b>
				Phone
			</b>
		</td>
		<td align='center' class='alldotted'>
			<b>
				Cell
			</b>
		</td>
	</tr>\n";

			$res = $link->Execute($sql);

			$i = 0;
			
			if (!isset($res)){
			}else{
				while (!$res->EOF){
					$name = $res->Fields['name']->Value;
					$mainphone = $res->Fields['mainphone']->Value;
					$cellphone = $res->Fields['cellphone']->Value;
					$extension = $res->Fields['extension']->Value;
					if (($i % 2) == 0){
						$rowcolor = '#FFFFFF';
					}else{
						$rowcolor = '#cccccc';
					}
					$i++;
					echo "<tr>
						<td bgcolor='".$rowcolor."'>
							".$name."
						</td>
						<td bgcolor='".$rowcolor."'>
							".$extension."
						</td>
						<td bgcolor='".$rowcolor."'>
							".$mainphone."
						</td>
						<td bgcolor='".$rowcolor."'>
							".$cellphone."
						</td>
					</tr>";		
				$res->MoveNext();
				
				}
			}
			ado_free_result( $res );
			ado_close( $link );
			echo "</table>\n";
			echo "<br><br>\n";

?>

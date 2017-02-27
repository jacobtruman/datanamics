<?php
$ptype = 'Notes Page';
include('components/header.php');
?>
	<tr>
		<td>
				<?php
				echo "<font size='2' face='Verdana'>";
					echo nl2br($notes_level2);
					echo "<br>";
				?>
			</font>
		</td>
	</tr>
	</table>
	<tr>
		<td valign='bottom'>
			<?php include('components/footer.php');?>
		</td>
	</tr>
</table>
</body>
<!-- Created/Modified by Jacob Truman -->
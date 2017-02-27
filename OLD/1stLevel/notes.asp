					<tr>
						<td width='100%' colspan='2' align='left'>
							<BR>
							<BR>
						</td>
					</tr>
					<tr>
						<td width='100%' colspan='2' align='left'>
							<font size='2' face='Verdana'>
								<%
								If IsNull(notes) then
								msg = "<BR>"
								else
								msg = notes
								end if
								%>
								<%=replace(msg, VbCrLf, "<br>")%>
							</font>
						</td>
					</tr>
					<tr>
						<td width='100%' colspan='2' align='left'>
							<BR>
							<BR>
						</td>
					</tr>

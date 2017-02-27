<%
	FP_SaveFormFields fp_rs, arFormFields0, arFormDBFields0
	
	fp_rs.Update
	FP_DumpError strErrorUrl, "Cannot update the database"

	fp_rs.Close()
	set fp_rs = nothing
	fp_conn.Close()
	set fp_conn = nothing

	Session("FP_SavedFields")=arFormFields0
	Session("FP_SavedValues")=arFormValues0
	Response.Redirect nextpage

End If
End If
%>
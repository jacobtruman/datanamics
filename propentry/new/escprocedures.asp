<%ptype = "Escalation Procedures"
CTYHO = request.querystring("CTYHO")
%>
<!--#include virtual='/support_web/propentry/new/db/top.asp'-->
<%
CTYHO = Request("CTYHO")


nextpage = "index.asp"
%>
<!--#include virtual='/support_web/propentry/new/db/bottom.asp'-->
<!--#include virtual='/support_web/propentry/new/header.asp'-->
<FORM METHOD='POST' action='escprocedures.asp' onsubmit='return vcheck(this)' name='formname' webbot-action='--WEBBOT-SELF--'>
<input TYPE='hidden' NAME='VTI-GROUP' VALUE='0'>
<!--#include virtual='/support_web/_fpclass/fpdbform.inc'-->

<!--#include virtual='/support_web/propentry/new/footer.asp'-->
<html dir="ltr" xmlns:o="urn:schemas-microsoft-com:office:office">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" FP_GENERATED="TRUE">

<META Name="GENERATOR" Content="Microsoft FrontPage 4.0">
    <META Name="ProgId" Content="FrontPage.Editor.Document">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <Title ID=onetidTitle>Towneplace Suites Broomfield Room Lookup</Title>
    
    <LINK Rel="stylesheet" Type="text/css" HREF="../../../ows.css">
<meta name="Microsoft Theme" content="none, default">
<meta name="Microsoft Border" content="none, default">
</HEAD>


<body marginwidth="0" marginheight="0" scroll="yes" vlink="#0000FF" alink="#0000FF">
<table class="ms-main" cellpadding="0" cellspacing="0" border="0" width="797" height="183">
  <!-- Banner -->
 <TR> 
  <TD WIDTH=737 height="29" colspan="3"> 
  <!--Top bar-->
  <table class="ms-bannerframe" border="0" cellspacing="0" cellpadding="3" width="100%">
   <tr>
    <td nowrap valign="middle" align="left" height="30">
    </td>
     </tr>
    </table>
  </TD> 
 </TR>
  <tr>
    <td width="737" height="1" valign="top" colspan="3">



    </td>
  </tr>
  <tr valign=top height=100%>
  <!-- Navigation --><!-- Contents -->
    <td width="737" height="1" valign="top" colspan="3">

    </td>
  </tr>
  <tr valign=top height=100%>
    <td width="1" height="435" valign="top" rowspan="2">

    </td>
    <td width="727" height="19" bgcolor="#D8D8D8">
    <p align="center"><font size="4" face="Times New Roman">Towneplace Suites 
    Broomfield Room   
    Lookup</font>
    </td>
    <td width="11" height="19">
    </td>
  </tr>
  <tr valign=top height=100%>
    <td width="738" height="416" valign="top" colspan="2">
    <table border="0" width="100%">
      <tr>
        <td width="50%"><img border="0" src="../../../Logos/Towneplace%20suites.JPG"></td>
        <td width="50%" align="right"><img border="0" src="../../../Logos/cnr.jpg"></td>
      </tr>
    </table>
    <p align="left">
    <p align="left">&nbsp;</p>
    <form BOTID="0" METHOD="POST" ACTION="Towneplace%20Suites%20Broomfield%20Room%20Lookup.asp">
      <table BORDER="0">
        <tr>
          <td><b>Room Number</b></td>
          <td><input TYPE="TEXT" NAME="Room Number" VALUE="<%=Request("Room Number")%>" size="20"></td>
        </tr>
      </table>
      <br>
      <input TYPE="Submit"><input TYPE="Reset"><!--webbot bot="SaveAsASP"
      CLIENTSIDE SuggestedExt="asp" PREVIEW=" " -->
      <p>&nbsp;</p>
    </form>
    <table width="100%" border="1">
      <thead>
        <tr>
          <td><b>Switch</b></td>
        </tr>
      </thead>
      <tbody>
        <!--webbot bot="DatabaseRegionStart" startspan
        s-columnnames="ID,Switch,Port Number,Room Number,Remote_computer_name,User_name,Browser_type,Timestamp"
        s-columntypes="3,202,202,202,202,202,202,135"
        s-dataconnection="HISAProperties" b-tableformat="TRUE"
        b-menuformat="FALSE" s-menuchoice s-menuvalue b-tableborder="TRUE"
        b-tableexpand="TRUE" b-tableheader="TRUE" b-listlabels="TRUE"
        b-listseparator="TRUE" i-ListFormat="0" b-makeform="TRUE"
        s-recordsource="Towneplace Broomfield switch form"
        s-displaycolumns="Switch" s-criteria="[Room Number] EQ {Room Number} +"
        s-order
        s-sql="SELECT * FROM &quot;Towneplace Broomfield switch form&quot; WHERE (&quot;Room Number&quot; =  '::Room Number::')"
        b-procedure="FALSE" clientside SuggestedExt="asp"
        s-DefaultFields="Room Number=1" s-NoRecordsFound="No records returned."
        i-MaxRecords="256" i-GroupSize="5" BOTID="0"
        u-dblib="../../../_fpclass/fpdblib.inc"
        u-dbrgn1="../../../_fpclass/fpdbrgn1.inc"
        u-dbrgn2="../../../_fpclass/fpdbrgn2.inc" tag="TBODY"
        local_preview="&lt;tr&gt;&lt;td colspan=64 bgcolor=&quot;#FFFF00&quot; align=&quot;left&quot; width=&quot;100%&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;Database Results regions will not preview unless this page is fetched from a Web server with a web browser. The following table row will repeat once for every record returned by the query.&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;"
        preview="&lt;tr&gt;&lt;td colspan=64 bgcolor=&quot;#FFFF00&quot; align=&quot;left&quot; width=&quot;100%&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;This is the start of a Database Results region. The page must be fetched from a web server with a web browser to display correctly; the current web is stored on your local disk or network.&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;" --><!--#include file="../../../_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM ""Towneplace Broomfield switch form"" WHERE (""Room Number"" =  '::Room Number::')"
fp_sDefault="Room Number=1"
fp_sNoRecords="<tr><td colspan=1 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=1
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include file="../../../_fpclass/fpdbrgn1.inc"-->
<!--webbot bot="DatabaseRegionStart" I-CheckSum="45978" endspan -->
        <tr>
          <td><!--webbot bot="DatabaseResultColumn" startspan
            s-columnnames="ID,Switch,Port Number,Room Number,Remote_computer_name,User_name,Browser_type,Timestamp"
            s-column="Switch" b-tableformat="TRUE" b-hasHTML="FALSE" clientside
            local_preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;Switch&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;"
            preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;Switch&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;" --><%=FP_FieldVal(fp_rs,"Switch")%><!--webbot
            bot="DatabaseResultColumn" I-CheckSum="17410" endspan -->
          </td>
        </tr>
        <!--webbot bot="DatabaseRegionEnd" startspan b-tableformat="TRUE"
        b-menuformat="FALSE" u-dbrgn2="../../../_fpclass/fpdbrgn2.inc"
        i-groupsize="5" clientside tag="TBODY"
        local_preview="&lt;tr&gt;&lt;td colspan=64 bgcolor=&quot;#FFFF00&quot; align=&quot;left&quot; width=&quot;100%&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;This is the end of a Database Results region.&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;&lt;TR&gt;&lt;TD ALIGN=LEFT VALIGN=MIDDLE COLSPAN=64&gt;&lt;FORM&gt;&lt;NOBR&gt;&lt;INPUT TYPE=Button VALUE=&quot;  |&lt;  &quot;&gt;&lt;INPUT TYPE=Button VALUE=&quot;   &lt;  &quot;&gt;&lt;INPUT TYPE=Button VALUE=&quot;  &gt;   &quot;&gt;&lt;INPUT TYPE=Button VALUE=&quot;  &gt;|  &quot;&gt;  [1/5]&lt;/NOBR&gt;&lt;/FORM&gt;&lt;/td&gt;&lt;/tr&gt;"
        preview="&lt;tr&gt;&lt;td colspan=64 bgcolor=&quot;#FFFF00&quot; align=&quot;left&quot; width=&quot;100%&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;This is the end of a Database Results region.&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;&lt;TR&gt;&lt;TD ALIGN=LEFT VALIGN=MIDDLE COLSPAN=64&gt;&lt;NOBR&gt;&lt;INPUT TYPE=Button VALUE=&quot;  |&lt;  &quot;&gt;&lt;INPUT TYPE=Button VALUE=&quot;   &lt;  &quot;&gt;&lt;INPUT TYPE=Button VALUE=&quot;  &gt;   &quot;&gt;&lt;INPUT TYPE=Button VALUE=&quot;  &gt;|  &quot;&gt;  [1/5]&lt;/NOBR&gt;&lt;BR&gt;&lt;/td&gt;&lt;/tr&gt;" --><!--#include file="../../../_fpclass/fpdbrgn2.inc"-->
<!--webbot bot="DatabaseRegionEnd" I-CheckSum="9297" endspan -->
      </tbody>
    </table>
    <p align="left">&nbsp;</p>
    <p align="center">&nbsp;
    <table border="0" width="100%">
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="center"></td>
        <td width="50%" align="center"></td>
      </tr>
    </table>
    <p align="center">&nbsp;
    </td>
  </tr>
</table>
</body>
</html>
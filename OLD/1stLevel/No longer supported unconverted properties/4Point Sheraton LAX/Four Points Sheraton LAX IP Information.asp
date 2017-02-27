<html dir="ltr" xmlns:o="urn:schemas-microsoft-com:office:office">
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" FP_GENERATED="TRUE">

<META Name="GENERATOR" Content="Microsoft FrontPage 4.0">
    <META Name="ProgId" Content="FrontPage.Editor.Document">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <Title ID=onetidTitle>Four Points Sheraton LAX IP Information</Title>
    
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
    <td width="4" height="435" valign="top" rowspan="2">

    </td>
    <td width="722" height="19" bgcolor="#D8D8D8">
    <p align="center"><font size="4" face="Times New Roman">&nbsp;Four Points 
    Sheraton LAX IP Information</font>
    </td>
    <td width="11" height="19">
    </td>
  </tr>
  <tr valign=top height=100%>
    <td width="733" height="416" valign="top" colspan="2">
    <table border="0" width="100%">
      <tr>
        <td width="50%"></td>
        <td width="50%" align="right"></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <form BOTID="0" METHOD="POST" ACTION="Four%20Points%20Sheraton%20LAX%20IP%20Information.asp">
      <table BORDER="0">
        <tr>
          <td><b>Room / Meeting Room / Equipment</b></td>
          <td><input TYPE="TEXT" NAME="Room / Meeting Room / Equipment" VALUE="<%=Request("Room / Meeting Room / Equipment")%>" size="20"></td>
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
          <td><b>DHCP Start IP</b></td>
          <td><b>DHCP End IP</b></td>
          <td><b>Subnet Mask</b></td>
          <td><b>Gateway</b></td>
        </tr>
      </thead>
      <tbody>
        <!--webbot bot="DatabaseRegionStart" startspan
        s-columnnames="Room / Meeting Room / Equipment,Type,VLAN ID,VLAN Address,Device Number,Virtual Port,Physical Port,DHCP Pool,Gateway,Subnet Mask,DHCP Start IP,DHCP End IP"
        s-columntypes="202,202,202,202,202,202,202,202,202,202,202,202"
        s-dataconnection="HISAProperties" b-tableformat="TRUE"
        b-menuformat="FALSE" s-menuchoice s-menuvalue b-tableborder="TRUE"
        b-tableexpand="TRUE" b-tableheader="TRUE" b-listlabels="TRUE"
        b-listseparator="TRUE" i-ListFormat="0" b-makeform="TRUE"
        s-recordsource="Sheraton 4 Points LAX"
        s-displaycolumns="DHCP Start IP,DHCP End IP,Subnet Mask,Gateway"
        s-criteria="[Room / Meeting Room / Equipment] BEG {Room / Meeting Room / Equipment} +"
        s-order
        s-sql="SELECT * FROM &quot;Sheraton 4 Points LAX&quot; WHERE (&quot;Room / Meeting Room / Equipment&quot; LIKE '::Room / Meeting Room / Equipment::%')"
        b-procedure="FALSE" clientside SuggestedExt="asp"
        s-DefaultFields="Room / Meeting Room / Equipment=."
        s-NoRecordsFound="No records returned." i-MaxRecords="256"
        i-GroupSize="5" BOTID="0" u-dblib="../../../_fpclass/fpdblib.inc"
        u-dbrgn1="../../../_fpclass/fpdbrgn1.inc"
        u-dbrgn2="../../../_fpclass/fpdbrgn2.inc" tag="TBODY"
        local_preview="&lt;tr&gt;&lt;td colspan=64 bgcolor=&quot;#FFFF00&quot; align=&quot;left&quot; width=&quot;100%&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;Database Results regions will not preview unless this page is fetched from a Web server with a web browser. The following table row will repeat once for every record returned by the query.&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;"
        preview="&lt;tr&gt;&lt;td colspan=64 bgcolor=&quot;#FFFF00&quot; align=&quot;left&quot; width=&quot;100%&quot;&gt;&lt;font color=&quot;#000000&quot;&gt;This is the start of a Database Results region. The page must be fetched from a web server with a web browser to display correctly; the current web is stored on your local disk or network.&lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;" --><!--#include file="../../../_fpclass/fpdblib.inc"-->
<%
fp_sQry="SELECT * FROM ""Sheraton 4 Points LAX"" WHERE (""Room / Meeting Room / Equipment"" LIKE '::Room / Meeting Room / Equipment::%')"
fp_sDefault="Room / Meeting Room / Equipment=."
fp_sNoRecords="<tr><td colspan=4 align=left width=""100%"">No records returned.</td></tr>"
fp_sDataConn="HISAProperties"
fp_iMaxRecords=256
fp_iCommandType=1
fp_iPageSize=5
fp_fTableFormat=True
fp_fMenuFormat=False
fp_sMenuChoice=""
fp_sMenuValue=""
fp_iDisplayCols=4
fp_fCustomQuery=False
BOTID=0
fp_iRegion=BOTID
%>
<!--#include file="../../../_fpclass/fpdbrgn1.inc"-->
<!--webbot bot="DatabaseRegionStart" I-CheckSum="23845" endspan -->
        <tr>
          <td><!--webbot bot="DatabaseResultColumn" startspan
            s-columnnames="Room / Meeting Room / Equipment,Type,VLAN ID,VLAN Address,Device Number,Virtual Port,Physical Port,DHCP Pool,Gateway,Subnet Mask,DHCP Start IP,DHCP End IP"
            s-column="DHCP Start IP" b-tableformat="TRUE" b-hasHTML="FALSE"
            clientside
            local_preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;DHCP Start IP&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;"
            preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;DHCP Start IP&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;" --><%=FP_FieldVal(fp_rs,"DHCP Start IP")%><!--webbot
            bot="DatabaseResultColumn" I-CheckSum="31410" endspan -->
          </td>
          <td><!--webbot bot="DatabaseResultColumn" startspan
            s-columnnames="Room / Meeting Room / Equipment,Type,VLAN ID,VLAN Address,Device Number,Virtual Port,Physical Port,DHCP Pool,Gateway,Subnet Mask,DHCP Start IP,DHCP End IP"
            s-column="DHCP End IP" b-tableformat="TRUE" b-hasHTML="FALSE"
            clientside
            local_preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;DHCP End IP&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;"
            preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;DHCP End IP&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;" --><%=FP_FieldVal(fp_rs,"DHCP End IP")%><!--webbot
            bot="DatabaseResultColumn" I-CheckSum="15568" endspan -->
          </td>
          <td><!--webbot bot="DatabaseResultColumn" startspan
            s-columnnames="Room / Meeting Room / Equipment,Type,VLAN ID,VLAN Address,Device Number,Virtual Port,Physical Port,DHCP Pool,Gateway,Subnet Mask,DHCP Start IP,DHCP End IP"
            s-column="Subnet Mask" b-tableformat="TRUE" b-hasHTML="FALSE"
            clientside
            local_preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;Subnet Mask&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;"
            preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;Subnet Mask&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;" --><%=FP_FieldVal(fp_rs,"Subnet Mask")%><!--webbot
            bot="DatabaseResultColumn" I-CheckSum="30610" endspan -->
          </td>
          <td><!--webbot bot="DatabaseResultColumn" startspan
            s-columnnames="Room / Meeting Room / Equipment,Type,VLAN ID,VLAN Address,Device Number,Virtual Port,Physical Port,DHCP Pool,Gateway,Subnet Mask,DHCP Start IP,DHCP End IP"
            s-column="Gateway" b-tableformat="TRUE" b-hasHTML="FALSE" clientside
            local_preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;Gateway&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;"
            preview="&lt;font size=&quot;-1&quot;&gt;&amp;lt;&amp;lt;&lt;/font&gt;Gateway&lt;font size=&quot;-1&quot;&gt;&amp;gt;&amp;gt;&lt;/font&gt;" --><%=FP_FieldVal(fp_rs,"Gateway")%><!--webbot
            bot="DatabaseResultColumn" I-CheckSum="12117" endspan -->
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
    <table border="0" width="100%">
      <tr>
        <td width="50%" align="left"><font size="2" face="Verdana">DNS: 
          63.104.224.9</font></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="left"><font size="2" face="Verdana">DNS: 
          63.104.224.10</font></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="left"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="left"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="left"></td>
        <td width="50%" align="center"></td>
      </tr>
      <tr>
        <td width="50%" align="left"></td>
        <td width="50%" align="center"></td>
      </tr>
    </table>
    <p align="center">&nbsp;
    </td>
  </tr>
</table>
</body>
</html>
	var PopNoOffMenus=16;
	var BaseHref=""
	var PopRClick=0;

	var PopMenuSlide=""

	var PopMenuShadow=""

	var PopMenuOpacity=""

	function P_BeforeStart(){return}
	function P_AfterBuild(){return}
	function P_BeforeFirstOpen(){return}
	function P_AfterCloseAll(){return}


PopMenu1=new Array(1,2,0,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);


	PopMenu1_1=new Array("Support",'',"",6,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu1_1_1=new Array("HSIA","/support_web/HSIA 1st level support/hsia web.asp","",0,20,220,"","","","","","",-1,-1,-1,"","");
		PopMenu1_1_2=new Array("Wireless Check In","/support_web/wireless/ma 5.asp","",0,20,220,"","","","","","",-1,-1,-1,"","");
		PopMenu1_1_3=new Array("Gateway Lookup","javascript:window.open('/support_web/hsia fact sheet/Equipment Lookup.asp','_blank')","",0,20,220,"","","","","","",-1,-1,-1,"","");
		PopMenu1_1_4=new Array("Hotel Naming Convention","/support_web/HSIA 1st level support/How To/Hotel Naming Conventions.asp","",0,20,220,"","","","","","",-1,-1,-1,"","");
		PopMenu1_1_5=new Array("Voicemail Logging","/support_web/voicemail/voicemail entry.asp","",0,20,220,"","","","","","",-1,-1,-1,"","");
		PopMenu1_1_6=new Array("Hampton Inn Access Code Lookup","http://192.251.124.33/hsia/pages/obtain_codes.jsp","",0,20,220,"","","","","","",-1,-1,-1,"","");

PopMenu2=new Array(1,2,20,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu2_1=new Array("How To's",'',"",4,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu2_1_1=new Array("1st Level How To's","javascript:window.open('/support_web/HSIA 1st level support/How To/Level 1 How To&#39s.asp','_blank')","",0,20,220,"","","","","","",-1,-1,-1,"","");
		PopMenu2_1_2=new Array("2nd Level How To's","javascript:window.open('/support_web/2nd Level Support/How to/Level 2 How To.asp','_blank')","",0,20,220,"","","","","","",-1,-1,-1,"","");
		PopMenu2_1_3=new Array("Service Desk Login Examples","file://Lasdn-sd01/HTN Knowledgebase/Procedures & Documents/Service Desk Login Examples.doc","",0,20,220,"","","","","","",-1,-1,-1,"","");
		PopMenu2_1_4=new Array("PrintMe","javascript:window.open('/support_web/HSIA 1st level support/How To/PrintMe.asp','_blank')","",0,20,220,"","","","","","",-1,-1,-1,"","");

PopMenu3=new Array(1,2,80,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu3_1=new Array("4 Point Sheraton",'',"",1,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu3_1_1=new Array("Harrisburg","/support_web/1stlevel/Bulletin.asp?prop=HARFP","",0,20,90,"","","","","","",-1,-1,-1,"","");

PopMenu4=new Array(1,2,100,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu4_1=new Array("Choice Hotels",'',"",2,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu4_1_1=new Array('Comfort Inn Jamestown', '/support_web/1stlevel/Bulletin.asp?prop=NY403',"",0,20,180,"","","","","","",-1,-1,-1,"","");
		PopMenu4_1_2=new Array('Comfort Suites Buffalo', '/support_web/1stlevel/Bulletin.asp?prop=NY102',"",0,20,180,"","","","","","",-1,-1,-1,"","");

PopMenu5=new Array(1,2,120,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu5_1=new Array("Courtyard Marriot",'',"",1,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu5_1_1=new Array('Princeton Courtyard', '/support_web/1stlevel/Bulletin.asp?prop=USNJPR',"",0,20,160,"","","","","","",-1,-1,-1,"","");

PopMenu6=new Array(1,2,140,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu6_1=new Array("Doubletree",'',"",3,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu6_1_1=new Array("Doubletree A-C","","",10,20,120,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_1=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_2=new Array('Bay City Riverfront', '/support_web/1stlevel/Bulletin.asp?prop=MBSBC',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_3=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_4=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_5=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_6=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_7=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_8=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_9=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_1_10=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");

		PopMenu6_1_2=new Array("Doubletree D-M","","",9,20,"","","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_1=new Array('Detroit Metro', '/support_web/Bulletins/Doubletree Detroit Metro Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_2=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_3=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_4=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_5=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_6=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_7=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_8=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_2_9=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");

		PopMenu6_1_3=new Array("Doubletree N-Z","","",10,20,"","","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_1=new Array('Ontario', '/support_web/Bulletins/Doubletree Ontario Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_2=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_3=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_4=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_5=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_6=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_7=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_8=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_9=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");
			PopMenu6_1_3_10=new Array('Alana Waikiki', '/support_web/1stlevel/Bulletin.asp?prop=ISHNL',"",0,20,150,"","","","","","",-1,-1,-1,"","");

PopMenu7=new Array(1,2,160,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu7_1=new Array("Embassy Suites",'',"",3,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu7_1_1=new Array('Austin Town Lake', '/support_web/1stlevel/Bulletin.asp?prop=AUSLK',"",0,20,160,"","","","","","",-1,-1,-1,"","");
		PopMenu7_1_2=new Array('Cleveland Beachwood', '/support_web/1stlevel/Bulletin.asp?prop=CLEBH',"",0,20,160,"","","","","","",-1,-1,-1,"","");
		PopMenu7_1_3=new Array('Memphis', '/support_web/1stlevel/Bulletin.asp?prop=MEMPE',"",0,20,160,"","","","","","",-1,-1,-1,"","");

PopMenu8=new Array(1,2,180,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu8_1=new Array("Hampton Inn",'',"",6,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu8_1_1=new Array("Hampton Inn A-D","","",4,20,120,"","","","","","",-1,-1,-1,"","");
			PopMenu8_1_1_1=new Array("A Hampton Inn's", '',"",9,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_1=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_2=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_3=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_4=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_5=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_6=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_7=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_8=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_1_9=new Array('Albany GA', '/support_web/HSIA 1st level support/Hampton Inn/AlbanyGA/Bulletin.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_1_2=new Array("B Hampton Inn's", '',"",9,20,"","","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_1=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_2=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_3=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_4=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_5=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_6=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_7=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_8=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_2_9=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_1_3=new Array("C Hampton Inn's", '',"",12,20,"","","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_1=new Array('Cape Girardeau', '/support_web/Bulletins/Hampton Inn Cape Girardeau Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_2=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_3=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_4=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_5=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_6=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_7=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_8=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_9=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_10=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_11=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_3_12=new Array('Bardstown', '/support_web/Bulletins/Hampton Inn Bardstown Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_1_4=new Array("D Hampton Inn's", '',"",11,20,"","","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_1=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_2=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_3=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_4=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_5=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_6=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_7=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_8=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_9=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_10=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_1_4_11=new Array('Dallas Addison', '/support_web/Bulletins/Hampton Inn Dallas Addison Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");


		PopMenu8_1_2=new Array("Hampton Inn E-H","","",5,20,"","","","","","","",-1,-1,-1,"","");
			PopMenu8_1_2_1=new Array('Edinburgh', '/support_web/Bulletins/Hampton Inn Edinburgh Bulletin Page.asp',"",0,20,130,"","","","","","",-1,-1,-1,"","");
			PopMenu8_1_2_2=new Array('Evansville', '/support_web/Bulletins/Hampton Inn Evansville Bulletin Page.asp',"",0,20,130,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_2_3=new Array("F Hampton Inn's", '',"",5,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_3_1=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_3_2=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_3_3=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_3_4=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_3_5=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_2_4=new Array("G Hampton Inn's", '',"",7,20,"","","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_4_1=new Array('Gainesville', '/support_web/Bulletins/Hampton Inn Gainesville Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_4_2=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_4_3=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_4_4=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_4_5=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_4_6=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_4_7=new Array('Fairfax VA', '/support_web/Bulletins/Hampton Inn Fairfax VA Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_2_5=new Array("H Hampton Inn's", '',"",7,20,"","","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_5_1=new Array('Harrisburg East', '/support_web/1stlevel/Bulletin.asp?prop=HARPA',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_5_2=new Array('Gainesville', '/support_web/Bulletins/Hampton Inn Gainesville Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_5_3=new Array('Gainesville', '/support_web/Bulletins/Hampton Inn Gainesville Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_5_4=new Array('Gainesville', '/support_web/Bulletins/Hampton Inn Gainesville Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_5_5=new Array('Gainesville', '/support_web/Bulletins/Hampton Inn Gainesville Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_5_6=new Array('Gainesville', '/support_web/Bulletins/Hampton Inn Gainesville Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_2_5_7=new Array('Gainesville', '/support_web/Bulletins/Hampton Inn Gainesville Bulletin Page.asp',"",0,20,160,"","","","","","",-1,-1,-1,"","");

		PopMenu8_1_3=new Array("Hampton Inn I-L","","",5,20,"","","","","","","",-1,-1,-1,"","");
			PopMenu8_1_3_1=new Array('Indianapolis South', '/support_web/Bulletins/Hampton Inn Indianapolis South Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu8_1_3_2=new Array('Jasper', '/support_web/Bulletins/Hampton Inn Jasper Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu8_1_3_3=new Array('Jupiter/Juno Beach', '/support_web/Bulletins/Hampton Inn Jupiter-Juno Beach Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu8_1_3_4=new Array('Kearny Mesa(San Diego)', '/support_web/Bulletins/Hampton Inn Kearny Mesa Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			
			PopMenu8_1_3_5=new Array("L Hampton Inn's", '',"",10,20,180,"","","","","","",-1,-1,-1,"","");						PopMenu8_1_3_5_1=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_2=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_3=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_4=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_5=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_6=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_7=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_8=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_9=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_3_5_10=new Array('Lancaster', '/support_web/Bulletins/Hampton Inn Lancaster Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");

		PopMenu8_1_4=new Array("Hampton Inn M-P","","",4,20,"","","","","","","",-1,-1,-1,"","");
			PopMenu8_1_4_1=new Array("M Hampton Inn's", '',"",11,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_1=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_2=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_3=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_4=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_5=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_6=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_7=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_8=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_9=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_10=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_1_11=new Array('Madison West', '/support_web/Bulletins/Hampton Inn Madison West Bulletin Page.asp',"",0,20,260,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_4_2=new Array("N Hampton Inn's", '',"",5,20,"","","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_2_1=new Array('New Albany', '/support_web/Bulletins/Hampton Inn New Albany Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_2_2=new Array('New Albany', '/support_web/Bulletins/Hampton Inn New Albany Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_2_3=new Array('New Albany', '/support_web/Bulletins/Hampton Inn New Albany Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_2_4=new Array('New Albany', '/support_web/Bulletins/Hampton Inn New Albany Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_2_5=new Array('New Albany', '/support_web/Bulletins/Hampton Inn New Albany Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_4_3=new Array("O Hampton Inn's", '',"",6,20,"","","","","","","",-1,-1,-1,"","");						PopMenu8_1_4_3_1=new Array('Oak Ridge', '/support_web/1stlevel/Bulletin.asp?prop=ORKHH',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_3_2=new Array('Oak Ridge', '/support_web/1stlevel/Bulletin.asp?prop=ORKHH',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_3_3=new Array('Oak Ridge', '/support_web/1stlevel/Bulletin.asp?prop=ORKHH',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_3_4=new Array('Oak Ridge', '/support_web/1stlevel/Bulletin.asp?prop=ORKHH',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_3_5=new Array('Oak Ridge', '/support_web/1stlevel/Bulletin.asp?prop=ORKHH',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_3_6=new Array('Oak Ridge', '/support_web/1stlevel/Bulletin.asp?prop=ORKHH',"",0,20,180,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_4_4=new Array("P Hampton Inn's", '',"",8,20,"","","","","","","",-1,-1,-1,"","");						PopMenu8_1_4_4_1=new Array('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_4_2=new Array('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_4_3=new Array('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_4_4=new Array('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_4_5=new Array('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_4_6=new Array('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_4_7=new Array('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_4_4_8=new Array('Paducah', '/support_web/Bulletins/Hampton Inn Paducah Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

		PopMenu8_1_5=new Array("Hampton Inn Q-T","","",4,20,"","","","","","","",-1,-1,-1,"","");
			PopMenu8_1_5_1=new Array('Quakertown', '/support_web/Bulletins/Hampton Inn Quakertown Bulletin Page.asp',"",0,20,130,"","","","","","",-1,-1,-1,"","");
			PopMenu8_1_5_2=new Array("R Hampton Inn's", '',"",7,20,130,"","","","","","",-1,-1,-1,"","");						PopMenu8_1_5_2_1=new Array('Raleigh Cary RBC Center', '/support_web/Bulletins/Hampton Inn Raleigh Cary RBC Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_2_2=new Array('Raleigh Cary RBC Center', '/support_web/Bulletins/Hampton Inn Raleigh Cary RBC Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_2_3=new Array('Raleigh Cary RBC Center', '/support_web/Bulletins/Hampton Inn Raleigh Cary RBC Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_2_4=new Array('Raleigh Cary RBC Center', '/support_web/Bulletins/Hampton Inn Raleigh Cary RBC Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_2_5=new Array('Raleigh Cary RBC Center', '/support_web/Bulletins/Hampton Inn Raleigh Cary RBC Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_2_6=new Array('Raleigh Cary RBC Center', '/support_web/Bulletins/Hampton Inn Raleigh Cary RBC Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_2_7=new Array('Raleigh Cary RBC Center', '/support_web/Bulletins/Hampton Inn Raleigh Cary RBC Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_5_3=new Array("S Hampton Inn's", '',"",19,20,"","","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_1=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_2=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_3=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_4=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_5=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_6=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_7=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_8=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_9=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_10=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_11=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_12=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_13=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_14=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_15=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_16=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_17=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_18=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_5_3_19=new Array('Salisbury', '/support_web/1stlevel/Bulletin.asp?prop=SLBJA',"",0,20,130,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_5_4=new Array('Thomasville', '/support_web/Bulletins/Hampton Inn Thomasville Bulletin Page.asp',"",0,20,130,"","","","","","",-1,-1,-1,"","");

		PopMenu8_1_6=new Array("Hampton Inn U-Z","","",4,20,"","","","","","","",-1,-1,-1,"","");
			PopMenu8_1_6_1=new Array('Valley Forge Oaks', '/support_web/Bulletins/Hampton Inn Valley Forge Oaks Bulletin Page.asp',"",0,20,140,"","","","","","",-1,-1,-1,"","");
			PopMenu8_1_6_2=new Array("W Hampton Inn's", '',"",8,20,140,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_6_2_1=new Array('Warrenton', '/support_web/Bulletins/Hampton Inn Warrenton Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_6_2_2=new Array('Warrenton', '/support_web/Bulletins/Hampton Inn Warrenton Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_6_2_3=new Array('Warrenton', '/support_web/Bulletins/Hampton Inn Warrenton Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_6_2_4=new Array('Warrenton', '/support_web/Bulletins/Hampton Inn Warrenton Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_6_2_5=new Array('Warrenton', '/support_web/Bulletins/Hampton Inn Warrenton Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_6_2_6=new Array('Warrenton', '/support_web/Bulletins/Hampton Inn Warrenton Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_6_2_7=new Array('Warrenton', '/support_web/Bulletins/Hampton Inn Warrenton Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
				PopMenu8_1_6_2_8=new Array('Warrenton', '/support_web/Bulletins/Hampton Inn Warrenton Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

			PopMenu8_1_6_3=new Array('York', '/support_web/1stlevel/Bulletin.asp?prop=YRKPA',"",0,20,140,"","","","","","",-1,-1,-1,"","");
			PopMenu8_1_6_4=new Array('Youngstown North', '/support_web/1stlevel/Bulletin.asp?prop=YNGNO',"",0,20,140,"","","","","","",-1,-1,-1,"","");

PopMenu9=new Array(1,2,200,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu9_1=new Array("Hilton",'',"",7,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu9_1_1=new Array("Hilton A-B","","",6,20,90,"","","","","","",-1,-1,-1,"","");							PopMenu9_1_1_1=new Array('Alexandria Mark Center', '/support_web/Bulletins/Hilton Alexandria Mark Center Bulletin Page.asp',"",0,20,190,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_1_2=new Array('Alexandria Mark Center', '/support_web/Bulletins/Hilton Alexandria Mark Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_1_3=new Array('Alexandria Mark Center', '/support_web/Bulletins/Hilton Alexandria Mark Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_1_4=new Array('Alexandria Mark Center', '/support_web/Bulletins/Hilton Alexandria Mark Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_1_5=new Array('Alexandria Mark Center', '/support_web/Bulletins/Hilton Alexandria Mark Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_1_6=new Array('Alexandria Mark Center', '/support_web/Bulletins/Hilton Alexandria Mark Center Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

		PopMenu9_1_2=new Array("Hilton C-D","","",6,20,"","","","","","","",-1,-1,-1,"","");							PopMenu9_1_2_1=new Array('Charlotte & Towers', '/support_web/Bulletins/Hilton Charlotte H&T Bulletin Page.asp',"",0,20,200,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_2_2=new Array('Charlotte & Towers', '/support_web/Bulletins/Hilton Charlotte H&T Bulletin Page.asp',"",0,20,200,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_2_3=new Array('Charlotte & Towers', '/support_web/Bulletins/Hilton Charlotte H&T Bulletin Page.asp',"",0,20,200,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_2_4=new Array('Charlotte & Towers', '/support_web/Bulletins/Hilton Charlotte H&T Bulletin Page.asp',"",0,20,200,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_2_5=new Array('Charlotte & Towers', '/support_web/Bulletins/Hilton Charlotte H&T Bulletin Page.asp',"",0,20,200,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_2_6=new Array('Charlotte & Towers', '/support_web/Bulletins/Hilton Charlotte H&T Bulletin Page.asp',"",0,20,200,"","","","","","",-1,-1,-1,"","");

		PopMenu9_1_3=new Array("Hilton E-L","","",8,20,"","","","","","","",-1,-1,-1,"","");							PopMenu9_1_3_1=new Array('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_3_2=new Array('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_3_3=new Array('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_3_4=new Array('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_3_5=new Array('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_3_6=new Array('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_3_7=new Array('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_3_8=new Array('East Brunswick', '/support_web/Bulletins/Hilton East Brunswick H&T Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

		PopMenu9_1_4=new Array("Hilton M-O","","",5,20,"","","","","","","",-1,-1,-1,"","");							PopMenu9_1_4_1=new Array('McLean Tysons Corner', '/support_web/Bulletins/Hilton McLean Tysons Corner Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_4_2=new Array('McLean Tysons Corner', '/support_web/Bulletins/Hilton McLean Tysons Corner Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_4_3=new Array('McLean Tysons Corner', '/support_web/Bulletins/Hilton McLean Tysons Corner Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_4_4=new Array('McLean Tysons Corner', '/support_web/Bulletins/Hilton McLean Tysons Corner Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_4_5=new Array('McLean Tysons Corner', '/support_web/Bulletins/Hilton McLean Tysons Corner Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

		PopMenu9_1_5=new Array("Hilton P-Q","","",5,20,"","","","","","","",-1,-1,-1,"","");							PopMenu9_1_5_1=new Array('Palacio Del Rio', '/support_web/Bulletins/Hilton Palacio Del Rio Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_5_2=new Array('Palacio Del Rio', '/support_web/Bulletins/Hilton Palacio Del Rio Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_5_3=new Array('Palacio Del Rio', '/support_web/Bulletins/Hilton Palacio Del Rio Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_5_4=new Array('Palacio Del Rio', '/support_web/Bulletins/Hilton Palacio Del Rio Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_5_5=new Array('Palacio Del Rio', '/support_web/Bulletins/Hilton Palacio Del Rio Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

		PopMenu9_1_6=new Array("Hilton R-S","","",6,20,"","","","","","","",-1,-1,-1,"","");							PopMenu9_1_6_1=new Array('Salt Lake City Center', '/support_web/Bulletins/Hilton Salt Lake City Center Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_6_2=new Array('Salt Lake City Center', '/support_web/Bulletins/Hilton Salt Lake City Center Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_6_3=new Array('Salt Lake City Center', '/support_web/Bulletins/Hilton Salt Lake City Center Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_6_4=new Array('Salt Lake City Center', '/support_web/Bulletins/Hilton Salt Lake City Center Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_6_5=new Array('Salt Lake City Center', '/support_web/Bulletins/Hilton Salt Lake City Center Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_6_6=new Array('Salt Lake City Center', '/support_web/Bulletins/Hilton Salt Lake City Center Bulletin Page.asp',"",0,20,240,"","","","","","",-1,-1,-1,"","");

		PopMenu9_1_7=new Array("Hilton T-Z","","",5,20,"","","","","","","",-1,-1,-1,"","");							PopMenu9_1_7_1=new Array('Tapitio Cliffs', '/support_web/Bulletins/Hilton Pointe Resort@Tapitio Cliffs Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_7_2=new Array('Tapitio Cliffs', '/support_web/Bulletins/Hilton Pointe Resort@Tapitio Cliffs Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_7_3=new Array('Tapitio Cliffs', '/support_web/Bulletins/Hilton Pointe Resort@Tapitio Cliffs Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_7_4=new Array('Tapitio Cliffs', '/support_web/Bulletins/Hilton Pointe Resort@Tapitio Cliffs Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu9_1_7_5=new Array('Tapitio Cliffs', '/support_web/Bulletins/Hilton Pointe Resort@Tapitio Cliffs Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

PopMenu10=new Array(1,2,220,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu10_1=new Array("Hilton Garden Inn",'',"",2,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu10_1_1=new Array("Hilton Garden Inn A-P","","",5,20,170,"","","","","","",-1,-1,-1,"","");					PopMenu10_1_1_1=new Array('El Segundo', '/support_web/Bulletins/Hilton Garden Inn El Segundo Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_1_2=new Array('El Segundo', '/support_web/Bulletins/Hilton Garden Inn El Segundo Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_1_3=new Array('El Segundo', '/support_web/Bulletins/Hilton Garden Inn El Segundo Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_1_4=new Array('El Segundo', '/support_web/Bulletins/Hilton Garden Inn El Segundo Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_1_5=new Array('El Segundo', '/support_web/Bulletins/Hilton Garden Inn El Segundo Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

		PopMenu10_1_2=new Array("Hilton Garden Inn R-Z","","",7,20,"","","","","","","",-1,-1,-1,"","");
			PopMenu10_1_2_1=new Array('Raleigh Durham Airport', '/support_web/Bulletins/Hilton Garden Inn Raleigh Durham Airport Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_2_2=new Array('Raleigh Durham Airport', '/support_web/Bulletins/Hilton Garden Inn Raleigh Durham Airport Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_2_3=new Array('Raleigh Durham Airport', '/support_web/Bulletins/Hilton Garden Inn Raleigh Durham Airport Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_2_4=new Array('Raleigh Durham Airport', '/support_web/Bulletins/Hilton Garden Inn Raleigh Durham Airport Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_2_5=new Array('Raleigh Durham Airport', '/support_web/Bulletins/Hilton Garden Inn Raleigh Durham Airport Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_2_6=new Array('Raleigh Durham Airport', '/support_web/Bulletins/Hilton Garden Inn Raleigh Durham Airport Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");
			PopMenu10_1_2_7=new Array('Raleigh Durham Airport', '/support_web/Bulletins/Hilton Garden Inn Raleigh Durham Airport Bulletin Page.asp',"",0,20,180,"","","","","","",-1,-1,-1,"","");

PopMenu11=new Array(1,2,240,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu11_1=new Array("Holiday Inn",'',"",3,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu11_1_1=new Array('Columbus', '/support_web/1stlevel/Bulletin.asp?prop=COLIM',"",0,20,100,"","","","","","",-1,-1,-1,"","");
		PopMenu11_1_2=new Array('Hendersonville', '/support_web/1stlevel/Bulletin.asp?prop=BNABH',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu11_1_3=new Array('Lake George', '/support_web/1stlevel/Bulletin.asp?prop=LGNY',"",0,20,"","","","","","","",-1,-1,-1,"","");

PopMenu12=new Array(1,2,260,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu12_1=new Array("Holiday Inn Express",'',"",5,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu12_1_1=new Array('Albany Western Ave', '/support_web/Bulletins/Holiday Inn Express Albany Western Ave Bulletin Page.asp',"",0,20,150,"","","","","","",-1,-1,-1,"","");
		PopMenu12_1_2=new Array('Dover', '/support_web/Bulletins/Holiday Inn Express Dover Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu12_1_3=new Array('Edinburgh', '/support_web/Bulletins/Holiday Inn Express Edinburgh Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu12_1_4=new Array('Greenwood', '/support_web/HSIA 1st level support/HolidayInnExpress/Greenwood/Bulletin.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu12_1_5=new Array('Indianapolis', '/support_web/Bulletins/Holiday Inn Express Indianapolis Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");

PopMenu13=new Array(1,2,280,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu13_1=new Array("Homewood Suites",'',"",15,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu13_1_1=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,210,"","","","","","",-1,-1,-1,"","");
		PopMenu13_1_2=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_3=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_4=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_5=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_6=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_7=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_8=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_9=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_10=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_11=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_12=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_13=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_14=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		PopMenu13_1_15=new Array('Alexandria', '/support_web/Bulletins/Homewood Suites Alexandria Bulletin Page.asp',"",0,20,"","","","","","","",-1,-1,-1,"","");
		
PopMenu14=new Array(1,2,300,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu14_1=new Array("Homestead Suites",'',"",1,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu14_1_1=new Array('Redmond', '/support_web/Bulletins/Homestead Suites Redmond Bulletin Page.asp',"",0,20,100,"","","","","","",-1,-1,-1,"","");

PopMenu15=new Array(1,2,320,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);


	PopMenu15_1=new Array("Westin",'',"",1,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu15_1_1=new Array('Kierland', '/support_web/Bulletins/Westin Kierland Bulletin Page.asp',"",0,20,100,"","","","","","",-1,-1,-1,"","");

PopMenu16=new Array(1,2,340,'5f8ac5','F0F0F0','F0F0F0','5f8ac5','F0F0F0','verdana',0,0,12,0,1,1,'left',0,1,500,0,'menu',1,'left','top','',5,10,'',10,5,'',5,10,2,2,0);

	PopMenu16_1=new Array("Tests",'',"",1,20,165,"","","","","","",-1,-1,-1,"","");
		PopMenu16_1_1=new Array('Test', '/support_web/1stlevel/Bulletin2.asp?prop=MINE',"",0,20,70,"","","","","","",-1,-1,-1,"","");
		
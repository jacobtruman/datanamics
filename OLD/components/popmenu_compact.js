// (c) Ger Versluis 2000-2004 version 6.20, Januari 14, 2004. You may use this script on non commercial sites. www.burmees.nl/menu/
var qaa=0;if(document.getElementById){var qab=navigator.userAgent.toLowerCase(),qac=navigator.appVersion.toLowerCase(),qad=qab.indexOf("opera 7")!=-1||qab.indexOf("opera/7")!=-1?1:0;if(qab.indexOf("opera")==-1||qad){qaa=1;var qae=(qab.indexOf('mozilla')!=-1&&qab.indexOf('compatible')==-1)||qad?1:0,qaf=qab.indexOf('msie')!=-1&&!qad?1:0,qag=(qac.indexOf("msie 6")!=-1||qac.indexOf("msie 7")!=-1&&!qad)?1:0,qah=qac.indexOf("mac")!=-1&&qac.indexOf("msie 5")!=-1?1:0,qai,qaj,qak=0,qal=0,qam,qan=0,qao=null,qap=null,qaq=null,qar=null,qas,qat=100,qau="visible",qav="hidden",qaw="px",qax=null,qay=0,qaz,qba,qbb,qbc}}function Pop_Go(){if(qaa){P_BeforeStart();qba=window;qbb=qba.document;qbc=qbb.body;if((qag||qad)&&document.compatMode){qax=qbb.getElementsByTagName("HTML")[0];qay=qbb.compatMode.indexOf('CSS')==-1?0:1}qaz=(qae&&!qad)||qah||qay?1:0;qal=0;qbd();qbe();qbf();qba.onresize=qbe;if(PopRClick){document.onmouseup=qbg;document.oncontextmenu=new Function("return false")}if(qaf)qbc.onunload=qbh;qal=1;P_AfterBuild()}}function qbg(e){var qbi=qaf?event:e,But=qbi.button;if(But==2){qbf();PopMenu("PopMenu"+PopRClick,qbi)}else if(qar.style.visibility==qau)qbf()}function qbe(){var i,qbj=qao,qbk,qbl,TP,Sz,PA;qai=qaf?qay?qax.clientWidth:qbc.clientWidth:qba.innerWidth;qaj=qaf?qay?qax.clientHeight:qbc.clientHeight:qba.innerHeight;for(i=0;i<PopNoOffMenus;i++){qbk=qbl=0;PA=qbj.qbm;if(PA[20]){TP=qbb.getElementById(PA[20]);while(TP){qbl+=TP.offsetTop;qbk+=TP.offsetLeft;TP=TP.offsetParent}}if(PA[22]!='left'){Sz=qai-parseInt(qbj.style.width);qbk+=PA[22]=='right'?Sz:Sz/2}if(PA[23]!='top'){Sz=qaj-parseInt(qbj.style.height);qbl+=PA[23]=='bottom'?Sz:Sz/2}qbn(qbj,(qbj.qbo+qbl),(qbj.qbp+qbk));qbj=qbj.qbq}}function qbn(qbr,Tp,Lt){var Tpi,qbs,qbt,qbu,qbv,CCW,qbw=qbr.style,qbx=qbr.qby,MSt=qbx.style,PA=qbr.qbm,Bw=PA[14],qbz=PA[21],qca=PA[16],qcb=PA[17],qcc=qbx.qei.indexOf('<')==-1?qaz?PA[34]:0:0,qcd=qbx.qei.indexOf('<')==-1?qaz?PA[33]:0:0,qce=parseInt(qbx.style.width)+qcc,qcf=parseInt(qbx.style.height)+qcd,qcg=parseInt(qbw.width),qch=parseInt(qbw.height);qbw.top=Tp+qaw;qbw.left=Lt+qaw;qbr.qci=Tp;qbr.qcj=Lt;qak++;if(qak==1&&PA[12]){qbt=1;qbs=qcg-qce-2*Bw;Tpi=0}else{qbt=qbs=0;Tpi=qch-qcf-2*Bw}while(qbx!=null){MSt.left=qbs+Bw+qaw;MSt.top=Tpi+Bw+qaw;if(qbx.qck){CCW=parseInt(qbx.qck.style.width);if(qbt){qbu=Tpi+qcf+Bw;qbv=qbs}else{if(PA[19]){qbv=qbs-CCW+qca*qce+Bw;qbu=Tpi+(1-qcb)*qcf}else{qbv=qbs+(1-qca)*qce+Bw;qbu=Tpi+(1-qcb)*qcf}}qbn(qbx.qck,qbu,qbv)}qbx=qbx.qcl;if(qbx){MSt=qbx.style;qcc=qbx.qei.indexOf('<')==-1?qaz?PA[34]:0:0;qcd=qbx.qei.indexOf('<')==-1?qaz?PA[33]:0:0;qce=parseInt(MSt.width)+qcc;qcf=parseInt(MSt.height)+qcd;qbt?qbs-=qbz?(qce+Bw):qce:Tpi-=qbz?(qcf+Bw):qcf}}qak--}function qbf(){var qbj=qao;while(qbj){qcm(qbj);qbj=qbj.qbq}}function qbh(){var qbj=qao,qbj2=null;while(qbj){qbj2=qbj;qcn(qbj);qbj=qbj.qbq;qbj2.qbq=qbj2.qby=qbj2.qco=qbj2.qbm=null;qbj2=null}qao=qap=qaq=qax=qas=qba=qbb=qbc=null}function qcn(MP){var qcq=MP.qby,qcp=null;while(qcq!=null){qcp=qcq;if(qcq.qck){qcn(qcq.qck);qcq.qck.qbm=qcq.qck.qby=qcq.qck.qbq=qcq.qck.qco=null;qcq.qck=null}qcq=qcq.qcl;qcp.qcr=qcp.qcl=qcp.Arr=null;qcp=null}MP=null}function qcs(){if(qam){var qct=qap.qcr;qcm(qct);if(qan)P_AfterCloseAll();qan=0}}function qcu(P){if(P.ro)qbb.images[P.rid].src=P.ri1;else{if(P.Arr[6])P.style.backgroundColor=P.Arr[6];P.style.color=P.Arr[8]}}function qcv(P){P.hl=1;if(P.ro)qba.document.images[P.rid].src=P.ri2;else{if(P.Arr[7])P.style.backgroundColor=P.Arr[7];P.style.color=P.Arr[9]}}function qcm(qcw){var qcq=qcw.qby,Cst=qcw.style,PA=qcw.qbm;Cst.visibility=!(PA[13]&&qcw.Lvl==1)?qav:qau;while(qcq!=null){if(qcq.hl){qcq.hl=0;qcq.qcr.qcx=0;qcu(qcq)}if(qcq.qck)qcm(qcq.qck);qcq=qcq.qcl}}function qcy(qcz){var qbwl=null;while(qcz){if(qcz.hl){qcz.hl=0;qcu(qcz);if(qcz.qck){qbwl=qcz.qck.style;qbwl.visibility=qav;qcy(qcz.qck.qby)}break}qcz=qcz.qcl}}function qda(){if(this.qdb){var qdc;status='';this.style.backgroundColor=this.Arr[6];this.style.color=this.Arr[8];if(this.qdb.indexOf('javascript:')!=-1)eval(this.qdb);else{qdc=BaseHref+this.qdb;qba.location.href=qdc}}}function PopMenu(qdd,qbi){if(qal){var Tp,Lft,qcz=null,qde=qaf?qay?qax.scrollTop:qbc.scrollTop:qba.pageYOffset,qdf=qaf?qay?qax.scrollLeft:qbc.scrollLeft:qba.pageXOffset,qdg=qbi.clientX+qdf,qdh=qbi.clientY+qde;qcz=qao;qdd=PopNoOffMenus-qdd.substr(7,qdd.length-7);while(qdd){qcz=qcz.qbq;qdd--}qap=qcz.qby;qbf();var qdi=qcz.style,qdj=parseInt(qdi.height),qdk=parseInt(qdi.width);Tp=qcz.qci==-1?qdh:qcz.qci==-2?qdh-qdj/2:qcz.qci;Lft=qcz.qcj==-1?qcz.qbm[19]?qdg-qdk:qdg:qcz.qcj==-2?qdg-qdk/2:qcz.qcj;if((qcz.qci==-1||qcz.qci==-2)&&!qcz.qbm[13]){if(Tp+qdj>qaj+qde)Tp-=qcz.qci==-1?qdj:qdj/2;if(Lft+qdk>qai+qdf)Lft-=qcz.qcj==-1?qdk:qdk/2;if(Tp<qde)Tp=qde;if(Lft<qdf)Lft=qdf}qdi.top=Tp+qaw;qdi.left=Lft+qaw;if(qag&&PopMenuSlide){qcz.filters[0].Apply();qcz.filters[0].play()}qdi.visibility=qau;qam=0}}function qdl(e){if(qal){if(!this.qcr.qcx){var x,y;if(qap==this||!qal){qam=0;return}if(qap){x=qap.qcr;y=this.qcr;x!=y&&x?qcm(x):qcy(this.qdm.qby)}else qcy(this.qdm.qby);qap=this;qam=0;qcv(this);status=this.Arr[16]}else qdn(this)}}function qdn(P){var PA=P.qdm.qbm,Lft,Tp,x,y,qde=qaf?qay?qax.scrollTop:qbc.scrollTop:qba.pageYOffset,qdf=qaf?qay?qax.scrollLeft:qbc.scrollLeft:qba.pageXOffset,qdo=P.qck;qdp=P.qdm.style,PSt=P.style,qdq=parseInt(qdp.top),qdr=parseInt(qdp.left),qdk=parseInt(qdp.width),qds=parseInt(PSt.height),qdt=parseInt(PSt.width);if(qdo)P.qcr.qcx=1;if(qap){x=qap.qcr;y=P.qcr;x!=y&&x?qcm(x):qcy(P.qdm.qby)}else qcy(P.qdm.qby);qap=P;qam=0;qcv(P);if(qdo!=null){if(!qan){qan=1;P_BeforeFirstOpen()}var qdu=P.qck.style,CCW=parseInt(qdu.width),CCH=parseInt(qdu.height);Tp=qdo.qci+qdq;Lft=qdo.qcj+qdr;if(PA[19]){if(Lft<qdf)Lft=PA[12]&&P.qdm.Lvl==1?qdf:Lft+(CCW+(1-2*PA[16])*qdt);if(Lft+CCW>qai+qdf)Lft=qai+qdf-CCW}else{if(Lft+CCW>qai+qdf)Lft=PA[12]&&P.qdm.Lvl==1?qai+qdf-CCW:Lft-(CCW+(1-2*PA[16])*qdt);if(Lft<qdf)Lft=qdf}if(Tp+CCH>qaj+qde)Tp=Tp-CCH-(1-2*PA[17])*qds;if(Tp<qde)Tp=qde;qdu.left=Lft+qaw;qdu.top=Tp+qaw;if(qag&&PopMenuSlide){P.qck.filters[0].Apply();P.qck.filters[0].play()}qdu.visibility=qau}status=P.Arr[16]}function qdv(e){if(qal)qdn(this)}function OutMenu(qdd){if(qal){qam=1;if(qas)clearTimeout(qas);qas=setTimeout('qcs()',qba[qdd][18])}}function qdw(e){if(qal){var PA=this.qdm.qbm;status='';qam=1;if(qas)clearTimeout(qas);qas=setTimeout('qcs()',PA[18])}}function qdx(qdy,qdz,qea,Lft,Tp,qeb){var PA=this.qbm,TSt=this.style;this.qby=null;this.qbq=null;this.qco=qeb;this.qbp=this.qcj=Lft;this.qbo=this.qci=Tp;this.Lvl=qak;if(PA[7])TSt.backgroundColor=PA[7];TSt.width=qdy+qaw;TSt.height=qdz+qaw;TSt.zIndex=qak+qat;TSt.top=-1000+qaw;TSt.left=-1000+qaw;if(qag){qec="";if(PopMenuSlide&&!(qak==1&&PA[13]))qec=PopMenuSlide;if(PopMenuShadow)qec+=PopMenuShadow;if(PopMenuOpacity)qec+=PopMenuOpacity;if(qec!="")TSt.filter=qec}}function qed(qee,qef,qdd,qdy,qdz){var qeg=qba[qdd][0],t,T,L,W,H,S,PA=qee.qbm,TSt=this.style,qeh=null,tri=qak==1&&PA[12]?27:PA[19]?30:24;this.ro=0;if(qeg.indexOf('rollover')!=-1){this.ri1=qeg.substring(qeg.indexOf('?')+1,qeg.lastIndexOf('?'));this.ri2=qeg.substring(qeg.lastIndexOf('?')+1,qeg.length);this.rid=qdd+'i';this.ro=1;qeg="<img src='"+this.ri1+"' name='"+this.rid+"'>"}this.qei=qeg;this.Lvl=qak;this.hl=0;this.qck=null;this.qcl=qef;this.qcr=qaq;this.qdb=qba[qdd][1];if(qeg.indexOf('<')==-1){TSt.width=qdy-(qaz?PA[34]:0)+qaw;TSt.height=qdz-(qaz?PA[33]:0)+qaw;TSt.paddingLeft=PA[34]+qaw;TSt.paddingTop=PA[33]+qaw}else{TSt.width=qdy+qaw;TSt.height=qdz+qaw}TSt.overflow='hidden';TSt.cursor=this.qdb?qaf?"hand":"pointer":"default";TSt.backgroundColor=this.Arr[6];TSt.color=this.Arr[8];TSt.fontFamily=this.Arr[11];TSt.fontSize=this.Arr[12]+'px';TSt.fontWeight=this.Arr[13]?'bold':'normal';TSt.fontStyle=this.Arr[14]?'italic':'normal';if(this.Arr[15]!='left')TSt.textAlign=this.Arr[15];if(qba[qdd][2])TSt.backgroundImage="url(\""+qba[qdd][2]+"\")";if(qeg.indexOf('<')==-1){var t=qbb.createTextNode(qeg);this.appendChild(t)}else this.innerHTML=qeg;if(qba[qdd][3]){S=PA[tri];W=PA[tri+1];H=PA[tri+2];T=qak==1&&PA[12]?qdz-H-2:(qdz-H)/2;L=PA[19]?2:qdy-W-2;t=qbb.createElement('img');qeh=t.style;this.appendChild(t);qeh.position='absolute';t.src=S;qeh.width=W+qaw;qeh.height=H+qaw;qeh.top=T+qaw;qeh.left=L+qaw}T=PA[35]&&qba[qdd][3]&&this.Lvl==1?1:0;this.onmouseover=T==1?qdl:qdv;this.onmouseout=qdw;this.onclick=T==1?qdv:qda;this.qdm=qee}function qbd(){var i,qdd,qbj,qej=null;for(i=0;i<PopNoOffMenus;i++){qdd='PopMenu'+(i+1);if(i+1==PopRClick){qba[qdd][1]=qba[qdd][2]=qba[qdd][1]=-1;qba[qdd][13]=0}qbj=qek(qdd,qdd+'_',qba[qdd][0],qba[qdd][1],qba[qdd][2],null);if(i+1==PopRClick)qar=document.getElementById(qdd+"_1").qcr;qbj.qbq=qej;qej=qbj}qao=qbj}function qek(qel,qem,qen,Lft,Tp,qeo){qak++;var i,qep,qbx,qee,qdy=0,qdz=0,qeq=null,qdd=qem+'1',qer=qba[qdd][5],qes=qba[qdd][4],qet,AP=qba[qel];if(qak==1&&AP[12]){for(i=1;i<qen+1;i++){qdd=qem+eval(i);qdy=qba[qdd][5]?qdy+qba[qdd][5]:qdy+qer}qdy=AP[21]?qdy+(qen+1)*AP[14]:qdy+2*AP[14];qdz=qes+2*AP[14]}else{for(i=1;i<qen+1;i++){qdd=qem+eval(i);qdz=qba[qdd][4]?qdz+qba[qdd][4]:qdz+qes}qdz=AP[21]?qdz+(qen+1)*AP[14]:qdz+2*AP[14];qdy=qer+2*AP[14]}qdd=qem+'1';qdd+='c';qee=qbb.createElement("div");qee.style.visibility='hidden';qee.id=qdd;qee.style.position='absolute';qbc.appendChild(qee);qee.qbm=AP;if(qak==1){qee.qcx=0;qaq=qee}qee.qeu=qdx;qee.qeu(qdy,qdz,qen,Lft,Tp,qeo);for(i=1;i<qen+1;i++){qdd=qem+eval(i);qbx=qbb.createElement("div");qbx.style.position='absolute';qbx.style.visibility='inherit';qbx.id=qdd;qee.appendChild(qbx);qbx.Arr=qba[qdd];qep=qbx.Arr[3];qdy=qak==1&&AP[12]?qbx.Arr[5]?qbx.Arr[5]:qer:qer;qdz=qak==1&&AP[12]?qes:qbx.Arr[4]?qbx.Arr[4]:qes;if(qbx.Arr[6]=="")qbx.Arr[6]=AP[4];if(qbx.Arr[7]=="")qbx.Arr[7]=AP[6];if(qbx.Arr[8]=="")qbx.Arr[8]=AP[3];if(qbx.Arr[9]=="")qbx.Arr[9]=AP[5];if(qbx.Arr[11]=="")qbx.Arr[11]=AP[8];if(qbx.Arr[12]==-1)qbx.Arr[12]=AP[11];if(qbx.Arr[13]==-1)qbx.Arr[13]=AP[9];if(qbx.Arr[14]==-1)qbx.Arr[14]=AP[10];if(qbx.Arr[15]=="")qbx.Arr[15]=AP[15];if(qbx.Arr[16]=="")qbx.Arr[16]=qbx.Arr[1];if(i==1&&qbx.Arr[10]!="")qee.style.backgroundColor=qbx.Arr[10];qbx.qeu=qed;qbx.qeu(qee,qeq,qdd,qdy,qdz);if(qep)qbx.qck=qek(qel,qdd+'_',qep,0,0,qee);qeq=qbx}qee.qby=qbx;qak--;return(qee)}
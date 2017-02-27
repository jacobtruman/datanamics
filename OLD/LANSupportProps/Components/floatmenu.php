<form name='contact' method='POST' action='/support_web/LANSupportProps/Components/ContactInformation.php' target='_blank'><input type='hidden' name='prop' value='<? echo $prop;?>'></form>
<form name='ipinfo' method='POST' action='<?php echo $ipinfo;?>' target='_blank'><input type='hidden' name='prop' value='<?php echo $prop;?>'></form>
<?php
	if (!empty($notes)){
		echo "<form name='notes' method='POST' action='".$notespage."' target='_blank'>\n";
			echo "<input type='hidden' name='prop' value='".$prop."'>\n";
		echo "</form>\n";
	}
?>
	<form name='custinfo' method='POST' action='file:///Z:/LAN Support Networks/<?php echo $fold;?>' target='_blank'></form>
<table border="0" width="1" height='58'>
  <tr>
    <td width="172" valign="top" bgcolor="#F0F0F0">
 <font size="2" face="Verdana" color='#FFFFFF'>
<a NAME="TOP">
<script language="JavaScript1.2"><!--

var isDOM=document.getElementById?1:0,isIE=document.all?1:0,isNS4=navigator.appName=='Netscape'&&!isDOM?1:0,isIE4=isIE&&!isDOM?1:0,isOp=self.opera?1:0,isDyn=isDOM||isIE||isNS4;function getRef(i,p){p=!p?document:p.navigator?p.document:p;return isIE?p.all[i]:isDOM?(p.getElementById?p:p.ownerDocument).getElementById(i):isNS4?p.layers[i]:null;};function getSty(i,p){var r=getRef(i,p);return r?isNS4?r:r.style:null;};if(!self.LayerObj)var LayerObj=new Function('i','p','this.ref=getRef(i,p);this.sty=getSty(i,p);return this');function getLyr(i,p){return new LayerObj(i,p)};function LyrFn(n,f){LayerObj.prototype[n]=new Function('var a=arguments,p=a[0],px=isNS4||isOp?0:"px";'+'with(this){'+f+'}');};LyrFn('x','if(!isNaN(p))sty.left=p+px;else return parseInt(sty.left)');LyrFn('y','if(!isNaN(p))sty.top=p+px;else return parseInt(sty.top)');LyrFn('vis','sty.visibility=p');LyrFn('bgColor','if(isNS4)sty.bgColor=p?p:null;'+'else sty.background=p?p:"transparent"');LyrFn('bgImage','if(isNS4)sty.background.src=p?p:null;'+'else sty.background=p?"url("+p+")":"transparent"');LyrFn('clip','if(isNS4)with(sty.clip){left=a[0];top=a[1];right=a[2];bottom=a[3]}'+'else sty.clip="rect("+a[1]+"px "+a[2]+"px "+a[3]+"px "+a[0]+"px)" ');LyrFn('write','if(isNS4)with(ref.document){write(p);close()}else ref.innerHTML=p');LyrFn('alpha','var f=ref.filters,d=(p==null);if(f){'+'if(!d&&sty.filter.indexOf("alpha")==-1)sty.filter+=" alpha(opacity="+p+")";'+'else if(f.length&&f.alpha)with(f.alpha){if(d)enabled=false;else{opacity=p;enabled=true}}}'+'else if(isDOM)sty.MozOpacity=d?"":p/100');function setLyr(v,dw,p){if(!setLyr.seq)setLyr.seq=0;if(!dw)dw=0;var o=!p?isNS4?self:document.body:!isNS4&&p.navigator?p.document.body:p,IA='insertAdjacentHTML',AC='appendChild',id='_sl_'+setLyr.seq++;if(o[IA])o[IA]('beforeEnd','<div id="'+id+'" style="position:absolute"></div>');else if(o[AC]){var n=document.createElement('div');o[AC](n);n.id=id;n.style.position='absolute';}else if(isNS4){var n=new Layer(dw,o);id=n.id;}var l=getLyr(id,p);with(l)if(ref){vis(v);x(0);y(0);sty.width=dw+(isNS4?0:'px')}return l;};if(!self.page)var page={win:self,minW:0,minH:0,MS:isIE&&!isOp};page.db=function(p){with(this.win.document)return(isDOM?documentElement[p]:0)||body[p]||0};page.winW=function(){with(this)return Math.max(minW,MS?db('clientWidth'):win.innerWidth)};page.winH=function(){with(this)return Math.max(minH,MS?db('clientHeight'):win.innerHeight)};page.scrollX=function(){with(this)return MS?db('scrollLeft'):win.pageXOffset};page.scrollY=function(){with(this)return MS?db('scrollTop'):win.pageYOffset};function addProps(obj,data,names,addNull){for(var i=0;i<names.length;i++)if(i<data.length||addNull)obj[names[i]]=data[i];};function PopupMenu(myName){this.myName=myName;this.showTimer=this.hideTimer=this.showDelay=0;this.hideDelay=500;this.menu=[];this.litNow=[];this.litOld=[];this.overM='';this.overI=0;this.hideDocClick=0;this.actMenu=null;PopupMenu.list[myName]=this;};PopupMenu.list=[];var PmPt=PopupMenu.prototype;PmPt.callEvt=function(mN,iN,evt){var i=this.menu[mN][iN],r=this[evt]?(this[evt](mN,iN)==false):0;if(i[evt]){if(i[evt].substr)i[evt]=new Function('mN','iN',i[evt]);r|=(i[evt](mN,iN)==false);}return r;};PmPt.over=function(mN,iN){with(this){clearTimeout(hideTimer);overM=mN;overI=iN;var cancel=iN?callEvt(mN,iN,'onmouseover'):0;litOld=litNow;litNow=[];var litM=mN,litI=iN;if(mN)do{litNow[litM]=litI;litI=menu[litM][0].parentItem;litM=menu[litM][0].parentMenu;}while(litM);var same=1;for(var z in menu)same&=(litNow[z]==litOld[z]);if(same)return 1;clearTimeout(showTimer);for(var thisM in menu)with(menu[thisM][0]){if(!lyr)continue;lI=litNow[thisM];oI=litOld[thisM];if(lI!=oI){if(lI)changeCol(thisM,lI);if(oI)changeCol(thisM,oI);}if(!lI)clickDone=0;if(isRoot)continue;if(lI&&!visNow)doVis(thisM,1);if(!lI&&visNow)doVis(thisM,0);}nextMenu='';if(!cancel&&menu[mN]&&menu[mN][iN].type=='sm:'){var m=menu[mN],targ=m[iN].href;if(!menu[targ])return 0;if(m[0].clickSubs&&!m[0].clickDone)return 0;nextMenu=targ;if(showDelay)showTimer=setTimeout(myName+'.doVis("'+targ+'",1)',showDelay);else doVis(targ,1);}return 1;}};PmPt.out=function(mN,iN){with(this){if(mN!=overM||iN!=overI)return;var thisI=menu[mN][iN],cancel=callEvt(mN,iN,'onmouseout');if(thisI.href!=nextMenu){clearTimeout(showTimer);nextMenu='';}if(hideDelay&&!cancel){var delay=(menu[mN][0].isRoot&&(thisI.type!='sm:'))?50:hideDelay;hideTimer=setTimeout(myName+'.over("",0)',delay);}overM='';overI=0;}};PmPt.click=function(mN,iN){with(this){var m=menu[mN];if(callEvt(mN,iN,'onclick'))return 0;with(m[iN])S:switch(type){case 'sm:':{if(m[0].clickSubs){m[0].clickDone=1;doVis(href,1);return 1;}break S;}case 'js:':{eval(href);break S}case '':type='window';default:if(href)eval(type+'.location.href="'+href+'"');}return over('',0);}};PmPt.changeCol=function(mN,iN,fc){with(this.menu[mN][iN]){if(!lyr||!lyr.ref)return;var bgFn=outCol!=overCol?(outCol.indexOf('.')==-1?'bgColor':'bgImage'):0;var ovr=(this.litNow[mN]==iN)?1:0,doFX=(!fc&&this.litNow[mN]!=this.litOld[mN]);var col=ovr?overCol:outCol;if(fade[0]){clearTimeout(timer);col='#';count=Math.max(0,Math.min(count+(2*ovr-1)*parseInt(fade[ovr][0]),100));var oc,nc,hexD='0123456789ABCDEF';for(var i=1;i<4;i++){oc=parseInt('0x'+fade[0][i]);nc=parseInt(oc+(parseInt('0x'+fade[1][i])-oc)*(count/100));col+=hexD.charAt(Math.floor(nc/16)).toString()+hexD.charAt(nc%16);}if(count%100>0)timer=setTimeout(this.myName+'.changeCol("'+mN+'",'+iN+',1)',50);}if(bgFn&&isNS4)lyr[bgFn](col);var reCSS=(overClass!=outClass||outBorder!=overBorder);if(doFX)with(lyr){if(!this.noRW&&(overText||overInd||isNS4&&reCSS))write(this.getHTML(mN,iN,ovr));if(!isNS4&&reCSS){ref.className=(ovr?overBorder:outBorder);var chl=(isDOM?ref.childNodes:ref.children);if(chl&&!overText)for(var i=0;i<chl.length;i++)chl[i].className=ovr?overClass:outClass;}}if(bgFn&&!isNS4)lyr[bgFn](col);if(doFX&&outAlpha!=overAlpha)lyr.alpha(ovr?overAlpha:outAlpha);}};PmPt.position=function(posMN){with(this){for(mN in menu)if(!posMN||posMN==mN)with(menu[mN][0]){if(!lyr||!lyr.ref||!visNow)continue;var pM,pI,newX=eval(offX),newY=eval(offY);if(!isRoot){pM=menu[parentMenu];pI=pM[parentItem].lyr;if(!pI)continue;}var eP=eval(par),pW=(eP&&eP.navigator?eP:window);with(pW.page)var sX=scrollX(),wX=sX+winW()||9999,sY=scrollY(),wY=winH()+sY||9999;var sb=page.MS?5:20;if(pM&&typeof(offX)=='number')newX=Math.max(sX,Math.min(newX+pM[0].lyr.x()+pI.x(),wX-menuW-sb));if(pM&&typeof(offY)=='number')newY=Math.max(sY,Math.min(newY+pM[0].lyr.y()+pI.y(),wY-menuH-sb));lyr.x(newX);lyr.y(newY);}}};PmPt.doVis=function(mN,show){with(this){var m=menu[mN],mA=(show?'show':'hide')+'Menu';m[0].visNow=show;if(m&&m[0].lyr&&m[0].lyr.ref){if(show)position(mN);var p=m[0].parentMenu;if(p)m[0].lyr.sty.zIndex=m[0].zIndex=menu[p][0].zIndex+2;if(this[mA])this[mA](mN);else m[0].lyr.vis(show?'visible':'hidden');}}};function ItemStyle(){var names=['len','spacing','popInd','popPos','pad','outCol','overCol','outClass','overClass','outBorder','overBorder','outAlpha','overAlpha','normCursor','nullCursor'];addProps(this,arguments,names,1);};PmPt.startMenu=function(mName){with(this){if(!menu[mName]){menu[mName]=new Array();menu[mName][0]=new Object();}actMenu=menu[mName];aM=actMenu[0];actMenu.length=1;var names=['name','isVert','offX','offY','width','itemSty','par','clickSubs','clickDone','visNow','parentMenu','parentItem','oncreate','isRoot'];addProps(aM,arguments,names,1);aM.extraHTML='';aM.menuW=aM.menuH=0;aM.zIndex=1000;if(!aM.lyr)aM.lyr=null;if(mName.substring(0,4)=='root'){aM.isRoot=1;aM.oncreate=new Function('this.visNow=1;'+myName+'.position("'+mName+'");this.lyr.vis("visible")');}return aM;}};PmPt.addItem=function(){with(this)with(actMenu[0]){var aI=actMenu[actMenu.length]=new Object();var names=['text','href','type','itemSty','len','spacing','popInd','popPos','pad','outCol','overCol','outClass','overClass','outBorder','overBorder','outAlpha','overAlpha','normCursor','nullCursor','iX','iY','iW','iH','fW','fH','overText','overInd','lyr','onclick','onmouseover','onmouseout'];addProps(aI,arguments,names,1);var iSty=(arguments[3]?arguments[3]:actMenu[0].itemSty);for(prop in iSty)if(aI[prop]+''=='undefined')aI[prop]=iSty[prop];var r=RegExp,re=/^SWAP:(.*)\^(.*)$/;if(aI.text.match(re)){aI.text=r.$1;aI.overText=r.$2}if(aI.popInd.match(re)){aI.popInd=r.$1;aI.overInd=r.$2}aI.timer=aI.count=0;aI.fade=[];for(var i=0;i<2;i++){var oC=i?'overCol':'outCol';if(aI[oC].match(/^(\d+)\#(..)(..)(..)$/)){aI[oC]='#'+r.$2+r.$3+r.$4;aI.fade[i]=[r.$1,r.$2,r.$3,r.$4];}}if(aI.outBorder&&isNS4)aI.pad++;aI.iW=(isVert?width:aI.len);aI.iH=(isVert?aI.len:width);var lastGap=(actMenu.length>2)?actMenu[actMenu.length-2].spacing:0;var spc=((actMenu.length>2)&&aI.outBorder?1:0);if(isVert){menuH+=lastGap-spc;aI.iX=0;aI.iY=menuH;menuW=width;menuH+=aI.iH;}else{menuW+=lastGap-spc;aI.iX=menuW;aI.iY=0;menuW+=aI.iW;menuH=width;}return aI;}};PmPt.getHTML=function(mN,iN,isOver){with(this){var itemStr='';with(menu[mN][iN]){var textClass=(isOver?overClass:outClass),txt=(isOver&&overText?overText:text),popI=(isOver&&overInd?overInd:popInd);if((type=='sm:')&&popI){if(isNS4)itemStr+='<layer class="'+textClass+'" left="'+((popPos+fW)%fW)+'" top="'+pad+'" height="'+(fH-2*pad)+'">'+popI+'</layer>';else itemStr+='<div class="'+textClass+'" style="position:absolute;left:'+((popPos+fW)%fW)+'px;top:'+pad+'px;height:'+(fH-2*pad)+'px">'+popI+'</div>';}if(isNS4)itemStr+=(outBorder?'<span class="'+(isOver?overBorder:outBorder)+'"><spacer type="block" width="'+(fW-8)+'" height="'+(fH-8)+'"></span>':'')+'<layer left="'+pad+'" top="'+pad+'" width="'+(fW-2*pad)+'" height="'+(fH-2*pad)+'"><a class="'+textClass+'" href="#" '+'onClick="return false" onMouseOver="status=\'\';'+myName+'.over(\''+mN+'\','+iN+');return true">'+txt+'</a></layer>';else itemStr+='<div class="'+textClass+'" style="position:absolute;left:'+pad+'px;top:'+pad+'px;width:'+(fW-2*pad)+'px;height:'+(fH-2*pad)+'px">'+txt+'</div>';}return itemStr;}};PmPt.update=function(docWrite,upMN){with(this){if(!isDyn)return;for(mN in menu)with(menu[mN][0]){if(upMN&&(upMN!=mN))continue;var str='',eP=eval(par);with(eP&&eP.navigator?eP:self)var dC=document.compatMode,dT=document.doctype;dFix=(dC&&dC.indexOf('CSS')>-1||isOp&&!dC||dT&&dT.name.indexOf('.dtd')>-1||isDOM&&!isIE)?2:0;for(var iN=1;iN<menu[mN].length;iN++)with(menu[mN][iN]){var itemID=myName+'-'+mN+'-'+iN;var targM=menu[href];if(targM&&(type=='sm:')){targM[0].parentMenu=mN;targM[0].parentItem=iN;}if(outBorder){fW=iW-dFix;fH=iH-dFix}else{fW=iW;fH=iH}var isImg=(outCol.indexOf('.')!=-1);if(!isIE){if(normCursor=='hand')normCursor='pointer';if(nullCursor=='hand')nullCursor='pointer';}if(isDOM||isIE4){str+='<div id="'+itemID+'" '+(outBorder?'class="'+outBorder+'" ':'')+'style="position:absolute;left:'+iX+'px;top:'+iY+'px;width:'+fW+'px;height:'+fH+'px;z-index:'+zIndex+';'+(outCol?'background:'+(isImg?'url('+outCol+')':outCol):'')+((typeof(outAlpha)=='number')?';filter:alpha(opacity='+outAlpha+');-moz-opacity:'+(outAlpha/100):'')+';cursor:'+((type!='sm:'&&href)?normCursor:nullCursor)+'" ';}else if(isNS4){str+='<layer id="'+itemID+'" left="'+iX+'" top="'+iY+'" width="'+fW+'" height="'+fH+'" z-index="'+zIndex+'" '+(outCol?(isImg?'background="':'bgcolor="')+outCol+'" ':'');}var evtMN='(\''+mN+'\','+iN+')"';str+='onMouseOver="'+myName+'.over'+evtMN+' onMouseOut="'+myName+'.out'+evtMN+' onClick="'+myName+'.click'+evtMN+'>'+getHTML(mN,iN,0)+(isNS4?'</layer>':'</div>');}var sR=myName+'.setupRef('+(docWrite?1:0)+',"'+mN+'")';if(isOp)setTimeout(sR,1000);var mVis=(isOp&&isRoot)?'visible':'hidden';if(docWrite){var targFr=(eP&&eP.navigator?eP:window);targFr.document.write('<div id="'+myName+'-'+mN+'" style="position:absolute;'+'visibility:'+mVis+';left:-1000px;top:0px;width:'+(menuW+2)+'px;height:'+(menuH+2)+'px;z-index:1000">'+str+extraHTML+'</div>');}else{if(!lyr||!lyr.ref)lyr=setLyr(mVis,menuW,eP);else if(isIE4)setTimeout(myName+'.menu.'+mN+'[0].lyr.sty.width='+(menuW+2),50);with(lyr){sty.zIndex=1000;write(str+extraHTML)}}if(!isOp)setTimeout(sR,100);}}};PmPt.setupRef=function(docWrite,mN){with(this)with(menu[mN][0]){if(docWrite||!lyr||!lyr.ref)lyr=getLyr(myName+'-'+mN,eval(par));for(var i=1;i<menu[mN].length;i++)menu[mN][i].lyr=getLyr(myName+'-'+mN+'-'+i,(isNS4?lyr.ref:eval(par)));menu[mN][0].lyr.clip(0,0,menuW+2,menuH+2);if(menu[mN][0].oncreate)oncreate();}};


var hBar = new ItemStyle(17, 10, '', 0, 0, '#000000', '#858585', 'highText', 'highText', '', '',
 null, null, 'hand', 'default');

var subM = new ItemStyle(22, 0, '&gt;', -15, 3, '#000000', '#858585', 'lowText', 'highText',
 '', '', null, null, 'hand', 'default');

var subBlank = new ItemStyle(22, 1, '&gt;', -15, 3, '#858585', '#000000', 'lowText', 'highText',
 '', '', null, null, 'hand', 'default');

var button = new ItemStyle(22, 1, '&gt;', -15, 2, '#006633', '#CC6600', 'buttonText', 'buttonHover',
 'buttonBorder', 'buttonBorderOver', 80, 95, 'crosshair', 'default');

var pMenu = new PopupMenu('pMenu');
with (pMenu)
{
startMenu('root', true, 4, 'window.page.scrollY()+13', 70, hBar);
addItem(' Menu', 'mSupport', 'sm:');
startMenu('mSupport', true, 70, 0, 180, subM);
addItem('Property Contact','document.forms.contact.submit()','js:');
addItem('IP Information','document.forms.ipinfo.submit()','js:');
<?php

if (!empty($notes)){
		echo "addItem('Notes','document.forms.notes.submit()','js:');";
	}else{
		echo "addItem('No Notes','','');";
	}

echo "addItem('Customer Information','document.forms.custinfo.submit()','js:');";

?>
}
addMenuBorder(pMenu, window.subBlank,
 null, '#666666', 1, '#CCCCDD', 2);
if ((navigator.userAgent.indexOf('rv:0.')==-1) &&
    !(isOp&&!document.documentElement) && !(isIE4&&!window.external))
{

}

page.elmPos=function(e,p)
{
 var x=0,y=0,w=p?p:this.win;
 e=e?(e.substr?(isNS4?w.document.anchors[e]:getRef(e,w)):e):p;
 if(isNS4){if(e&&(e!=p)){x=e.x;y=e.y};if(p){x+=p.pageX;y+=p.pageY}}
 else if (e && e.focus && e.href && this.MS && /Mac/.test(navigator.platform))
 {
  e.onfocus = new Function('with(event){self.tmpX=clientX-offsetX;' +
   'self.tmpY=clientY-offsetY}');
  e.focus();x=tmpX;y=tmpY;e.blur()
 }
 else while(e){x+=e.offsetLeft;y+=e.offsetTop;e=e.offsetParent}
 return{x:x,y:y};
};

function addMenuBorder(mObj, iS, alpha, bordCol, bordW, backCol, backW)
{
 for (var mN in mObj.menu)
 {
  var mR=mObj.menu[mN], dS='<div style="position:absolute; background:';
  if (mR[0].itemSty != iS) continue;
  for (var mI=1; mI<mR.length; mI++)
  {
   mR[mI].iX += bordW+backW;
   mR[mI].iY += bordW+backW;
  }
  mW = mR[0].menuW += 2*(bordW+backW);
  mH = mR[0].menuH += 2*(bordW+backW);

  if (isNS4) mR[0].extraHTML += '<layer bgcolor="'+bordCol+'" left="0" top="0" width="'+mW+
   '" height="'+mH+'" z-index="980"><layer bgcolor="'+backCol+'" left="'+bordW+'" top="'+
   bordW+'" width="'+(mW-2*bordW)+'" height="'+(mH-2*bordW)+'" z-index="990"></layer></layer>';
  else mR[0].extraHTML += dS+bordCol+'; left:0px; top:0px; width:'+mW+'px; height:'+mH+
   'px; z-index:980; '+(alpha!=null?'filter:alpha(opacity='+alpha+'); -moz-opacity:'+(alpha/100):'')+
   '">'+dS+backCol+'; left:'+bordW+'px; top:'+bordW+'px; width:'+(mW-2*bordW)+'px; height:'+
   (mH-2*bordW)+'px; z-index:990"></div></div>';
 }
};

var scFr=self.PopupMenu?self:(parent.PopupMenu?parent:top);function popEvt(str,each){var PML=scFr.PopupMenu.list,mN;for(var objName in PML)with(PML[objName]){if(scFr!=self&&each)for(mN in menu)with(menu[mN][0]){if(par.substring(par.lastIndexOf('.')+1)==self.name)eval(str);}else eval(str);}};var scrFn,popOL=window.onload,popUL=window.onunload,popOR=window.onresize,popOS=window.onscroll,nsWinW=window.innerWidth,nsWinH=window.innerHeight,nsPX=window.pageXOffset,nsPY=window.pageYOffset;document.popOC=document.onclick;if(scFr.PopupMenu){if(!self.page)var isNS4=scFr.isNS4,page={};if(scFr!=self)for(var f in scFr.page)page[f]=scFr.page[f];page.win=self;popEvt('self[objName]=PML[objName]',0);if(!isNS4)popEvt('update(true,mN)',1);window.onload=function(){if(popOL)popOL();if(isNS4){popEvt('update(false,mN)',1);setInterval(scrFn,50)}window.onunload=new Function('if(popUL)popUL();popEvt("lyr=null",1)');};if(popOS||(''+popOS!='undefined'))window.onscroll=function(){if(popOS)popOS();popEvt('position(mN)',1);};else{scrFn='if(nsPX!=pageXOffset||nsPY!=pageYOffset)'+'{nsPX=pageXOffset;nsPY=pageYOffset;popEvt("position(mN)",1)}';if(!isNS4)setInterval(scrFn,50);}function resizeBugCheck(){if(nsWinW!=innerWidth||nsWinH!=innerHeight)location.reload()};if(scFr.isOp&&!document.documentElement&&!self.opFix)self.opFix=setInterval('resizeBugCheck()',500);window.onresize=function(){if(popOR)popOR();if(isNS4)resizeBugCheck();popEvt('position(mN)',1);};if(isNS4)document.captureEvents(Event.CLICK);document.onclick=function(evt){popEvt('if(isNS4&&overI)click(overM,overI);if(!overI&&hideDocClick)over("root",0)',0);return document.popOC?document.popOC(evt):(isNS4?document.routeEvent(evt):true);};}

//--></script>
	</td>
</tr>
</table>


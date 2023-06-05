<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="monstyll.css">
<title>  ma prem page  </title>
</head>
<body>
<script type="text/javascript">

let obj={txclass:0, lineclass:0, cerclass:0, ovaclass:0, rectclass:0, pathclass:0}; let cal=0;let s="a b";let mot;
let rang="0"; let imsv="0";
let ns="http://www.w3.org/2000/svg";let rond=0;let word=0;let droit=0;let oval=0;let carr=0;let code="let"+" cercl;"+"let"+" lign;"+"let"+" ova;"+"let"+" tex;"+"let"+" recta";
let crcl=0;let ligndef=0;let elps=0;let drwtx=0;let setx=0;let setcenter=0;let sety=0;let setpos=0;
let pathdef=0;let endXset=0;let endYset=0;let startXset=0;let startYset=0;let recdf=0;let couleurdf=0; let ftszset=0;let lineYset=0;let ctrlptset=0;let gnlYset=0;let rayset=0;let rayBset=0;
let fillset=0;let strkset=0;let strkwidthset=0;ctrl2ptset=0;
let rayA=0; let rayB=0;let xdebut=0;let xfin=0;let ydebut=0;let yfin=0; let posx=0;let posy=0;let fontsz=0;let coulr="";
let writeY=0;let gnrlY=0;let phrase="";let cod="ns="+'"'+ns+'"'+";";Xmax=0;let fontfamly="";let strwidth=0;let ajt=0;let moins=0;let fill="";let strk="";
let txtX=0;let txtY=0;let indice;let basc;let mdf=0;let flwobj;let exo=0;let prop=0;let rootdf=0;
let rowset=0;let hrset=0;let vrset=0;let expo=0;let dash=0;let vrowset=0;
let inflim=0;let limsup=0;let varset=0;let Var="";let varindset=0;let varind=0;let indc="";let xtset=0;
let xtend="";let limnb=4;let infsup=1;

let tabset=0;let VLnb=0; let HLnb=0;let fstHL=0;let fstVL=0;let HLdst=0;let VLdst=0;
let DBL=0;let DBLpos1=0;let DBLpos2=0; DBLcount=0;let flwpath=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
let DBLtab=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];let countpath=0;let qdrpath=0;let cubpath=0;let pathnb=0;let curv=0;
let pathtab=[[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0],[0,0]];


function limcrt(Inflim,Limsup,VAr,Varind,Indc,Xtend){let els;obj.txclass++;
els=document.createElementNS(ns,"text");els.textContent="lim";
els.setAttribute("font-family","Gabriola");els.setAttribute("font-size","37");
els.setAttribute("id","ltt"+obj.txclass);els.setAttribute("x","100");
els.setAttribute("y","100");els.setAttribute("stroke",strk);
els.addEventListener("click",()=>{event.currentTarget.setAttribute("stroke",strk);});
document.querySelector("#sv").append(els);


obj.txclass++;
els=document.createElementNS(ns,"text");els.textContent=VAr;
els.setAttribute("font-family","Gabriola");els.setAttribute("font-size","25");
els.setAttribute("id","ltt"+obj.txclass);els.setAttribute("x","100");
els.setAttribute("y","120");els.setAttribute("stroke",strk);
els.addEventListener("click",()=>{event.currentTarget.setAttribute("stroke",strk);});
document.querySelector("#sv").append(els);


if(infsup==1){obj.txclass++;els=document.createElementNS(ns,"text");if(Inflim==1){els.textContent="<";}
if(Limsup==1){els.textContent=">";}
els.setAttribute("font-family","Arial");els.setAttribute("font-size","15");
els.setAttribute("id","ltt"+obj.txclass);els.setAttribute("x","146");
els.setAttribute("y","126");els.setAttribute("stroke",strk);
els.addEventListener("click",()=>{event.currentTarget.setAttribute("stroke",strk);});
document.querySelector("#sv").append(els);}


obj.txclass++;
els=document.createElementNS(ns,"text");els.textContent=Xtend;
els.setAttribute("font-family","Arial");els.setAttribute("font-size","19");
els.setAttribute("id","ltt"+obj.txclass);els.setAttribute("x","160");
els.setAttribute("y","121");els.setAttribute("stroke",strk);
els.addEventListener("click",()=>{event.currentTarget.setAttribute("stroke",strk);});
document.querySelector("#sv").append(els);


if(Varind==1){ limnb++;obj.txclass++; els=document.createElementNS(ns,"text");els.textContent=Indc;
els.setAttribute("font-family","Arial");els.setAttribute("font-size","17");
els.setAttribute("id","ltt"+obj.txclass);els.setAttribute("x","170");
els.setAttribute("y","123");els.setAttribute("stroke",strk);
els.addEventListener("click",()=>{event.currentTarget.setAttribute("stroke",strk);});
document.querySelector("#sv").append(els);}

obj.lineclass++;els=document.createElementNS(ns,"line");
els.setAttribute("id","drt"+obj.lineclass);els.setAttribute("x1","115");els.setAttribute("y1","115");
 els.setAttribute("x2","145");els.setAttribute("y2","115");
 els.setAttribute("stroke",""+strk); els.setAttribute("stroke-width","2");
document.querySelector("#sv").append(els);

obj.lineclass++;els=document.createElementNS(ns,"line");
els.setAttribute("id","drt"+obj.lineclass);els.setAttribute("x1","145");els.setAttribute("y1","115");
 els.setAttribute("x2","140");els.setAttribute("y2","110");
 els.setAttribute("stroke",""+strk); els.setAttribute("stroke-width","2");
document.querySelector("#sv").append(els);

obj.lineclass++;els=document.createElementNS(ns,"line");
els.setAttribute("id","drt"+obj.lineclass);els.setAttribute("x1","145");els.setAttribute("y1","115");
 els.setAttribute("x2","140");els.setAttribute("y2","120");
 els.setAttribute("stroke",""+strk); els.setAttribute("stroke-width","2");
document.querySelector("#sv").append(els);


}

function crtpath(qdr,cub){if(qdr==1&&cub==0){let pth=document.createElementNS(ns,"path");pathnb++;
flwpath[pathnb-1]=3;pth.setAttribute("stroke-width","2");
pth.setAttribute("id","chem"+obj.pathclass);pth.setAttribute("stroke",strk);
 countpath=3;pathtab[0][0]=50;pathtab[0][1]=350;
 pathtab[1][0]=100;pathtab[1][1]=-250;pathtab[2][0]=350;pathtab[2][1]=50;
 pth.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+" "+pathtab[2][0]+" "+pathtab[2][1]);
document.querySelector("#sv").append(pth);  
}


if(qdr==0&&cub==1){let pth=document.createElementNS(ns,"path");pth.setAttribute("stroke-width","2");
pth.setAttribute("id","chem"+obj.pathclass);pth.setAttribute("stroke",strk);flwpath[pathnb-1]=4;
 countpath=4;pathtab[0][0]=50;pathtab[0][1]=350;
 pathtab[1][0]=100;pathtab[1][1]=-70;pathtab[2][0]=200;pathtab[2][1]=-150;pathtab[3][0]=450;pathtab[3][1]=-80;
 pth.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
document.querySelector("#sv").append(pth);  
}

}


function crthl(){let np=document.querySelector("#sv");
obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("stroke",strk);
droit.setAttribute("x1","70");droit.setAttribute("y1","50");droit.setAttribute("stroke-width","2");
droit.setAttribute("x2","170");
if(dash==1){droit.setAttribute("style","stroke-dasharray: 5, 2");dash=0;}
droit.setAttribute("y2","50");np.append(droit);
}

function crtvl(){let rp=document.querySelector("#sv");
obj.lineclass++;droit=document.createElementNS(ns,"line");droit.setAttribute("stroke-width","2");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("stroke",strk);
droit.setAttribute("x1","50");droit.setAttribute("y1","50");
if(dash==1){droit.setAttribute("style","stroke-dasharray: 5, 2");dash=0;}
droit.setAttribute("x2","50");droit.setAttribute("y2","200");rp.append(droit);
}

function crttabl(hnb,vnb,fsth,hlgn,fstv,vlgn,dbl){let vr=0;let s=document.querySelector("#sv");
let strt=obj.lineclass;
for(let i=1;i<=hnb;i++){if(i==2){vr=document.querySelector("#drt"+obj.lineclass);obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("stroke",strk);droit.setAttribute("stroke-width","2");
droit.setAttribute("y1",""+(parseInt(vr.getAttribute("y1"))+fsth));
droit.setAttribute("x1",vr.getAttribute("x1"));droit.setAttribute("x2",vr.getAttribute("x2"));
droit.setAttribute("y2",droit.getAttribute("y1"));s.append(droit); }

if(i==1){obj.lineclass++;droit=document.createElementNS(ns,"line");droit.setAttribute("x1","10");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("stroke",strk);droit.setAttribute("stroke-width","2");
droit.setAttribute("x1","10");droit.setAttribute("y1","10");droit.setAttribute("y2","10");
droit.setAttribute("x2",""+(parseInt(droit.getAttribute("x1"))+fstv+(vnb-2)*vlgn)); s.append(droit);  }

if(i>2){vr=document.querySelector("#drt"+obj.lineclass);
obj.lineclass++;droit=document.createElementNS(ns,"line");droit.setAttribute("stroke",strk);droit.setAttribute("stroke-width","2");
droit.setAttribute("y1",""+(parseInt(vr.getAttribute("y1"))+hlgn));
droit.setAttribute("x1",vr.getAttribute("x1"));droit.setAttribute("x2",vr.getAttribute("x2"));
droit.setAttribute("y2",droit.getAttribute("y1"));droit.setAttribute("id","drt"+obj.lineclass);s.append(droit);}

}


for(let i=hnb+1;i<=hnb+vnb;i++){if(i==hnb+2){vr=document.querySelector("#drt"+obj.lineclass);

obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("stroke",strk);droit.setAttribute("stroke-width","2");
droit.setAttribute("x1",""+(parseInt(vr.getAttribute("x1"))+fstv));
droit.setAttribute("y1",vr.getAttribute("y1"));droit.setAttribute("y2",vr.getAttribute("y2"));
droit.setAttribute("x2",droit.getAttribute("x1"));s.append(droit); }

if(i==hnb+1){obj.lineclass++;droit=document.createElementNS(ns,"line");droit.setAttribute("x1","10");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("stroke",strk);droit.setAttribute("stroke-width","2");
droit.setAttribute("x1","10");droit.setAttribute("y1","10");droit.setAttribute("x2","10");
droit.setAttribute("y2",""+(parseInt(droit.getAttribute("y1"))+fsth+(hnb-2)*hlgn)); s.append(droit);  }

if(i>2+hnb&&i<hnb+vnb){vr=document.querySelector("#drt"+(strt+hnb+2));
obj.lineclass++;droit=document.createElementNS(ns,"line");droit.setAttribute("stroke",strk);droit.setAttribute("stroke-width","2");
droit.setAttribute("x1",""+(parseInt(vr.getAttribute("x1"))+vlgn*(i-hnb-2)));
droit.setAttribute("y1",""+(parseInt(vr.getAttribute("y1"))+fsth));droit.setAttribute("y2",vr.getAttribute("y2"));
droit.setAttribute("x2",droit.getAttribute("x1"));droit.setAttribute("id","drt"+obj.lineclass);s.append(droit);}





if(i==hnb+vnb){vr=document.querySelector("#drt"+obj.lineclass);
obj.lineclass++;droit=document.createElementNS(ns,"line");droit.setAttribute("stroke",strk);
droit.setAttribute("x1",""+(parseInt(vr.getAttribute("x1"))+vlgn));droit.setAttribute("stroke-width","2");
droit.setAttribute("y1",""+(parseInt(vr.getAttribute("y1"))-fsth));droit.setAttribute("y2",vr.getAttribute("y2"));
droit.setAttribute("x2",droit.getAttribute("x1"));droit.setAttribute("id","drt"+obj.lineclass);s.append(droit);}
}

if(dbl==1){for(let j=1;j<=DBLcount;j++){if(DBLtab[2*(j-1)+2]<hnb-1){obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("stroke",strk);droit.setAttribute("stroke-width","2");
droit.setAttribute("x1",""+(parseInt(document.querySelector("#drt"+(strt+hnb+DBLtab[2*(j-1)+1])).getAttribute("x1"))+15));
droit.setAttribute("x2",droit.getAttribute("x1"));droit.setAttribute("y2",document.querySelector("#drt"+(strt+hnb+vnb)).getAttribute("y2"));
droit.setAttribute("y1",""+(parseInt(droit.getAttribute("y2"))-DBLtab[2*(j-1)+2]*hlgn));
droit.setAttribute("id","drt"+obj.lineclass);s.append(droit);

}
}}




}


function arrow(){obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","50");droit.setAttribute("y1","150");
 droit.setAttribute("x2","90");droit.setAttribute("y2","150");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
document.querySelector("#sv").append(droit);

obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","90");droit.setAttribute("y1","150");
 droit.setAttribute("x2","85");droit.setAttribute("y2","145");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
document.querySelector("#sv").append(droit);

obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","90");droit.setAttribute("y1","150");
 droit.setAttribute("x2","85");droit.setAttribute("y2","155");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
document.querySelector("#sv").append(droit);
}



function varrow(){obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","50");droit.setAttribute("y1","150");
 droit.setAttribute("x2","50");droit.setAttribute("y2","50");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
document.querySelector("#sv").append(droit);

obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","50");droit.setAttribute("y1","50");
 droit.setAttribute("x2","45");droit.setAttribute("y2","65");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
document.querySelector("#sv").append(droit);

obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","50");droit.setAttribute("y1","50");
 droit.setAttribute("x2","55");droit.setAttribute("y2","65");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
document.querySelector("#sv").append(droit);
}




function sqrtset(){obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","30");droit.setAttribute("y1","100");
 droit.setAttribute("x2","30");droit.setAttribute("y2","50");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");

droit.addEventListener('click',()=>{if(mdf==0){event.currentTarget.setAttribute("fill",""+fill);
  event.currentTarget.setAttribute("stroke",""+strk);
event.currentTarget.nextSibling.setAttribute("stroke",""+strk);
event.currentTarget.nextSibling.setAttribute("fill",""+fill);
event.currentTarget.nextSibling.nextSibling.setAttribute("stroke",""+strk);
event.currentTarget.nextSibling.nextSibling.setAttribute("fill",""+fill);

}if(mdf==1){indice=event.currentTarget.getAttribute("id");
document.querySelector("#pvd").textContent="l'objet ligne est le numero"+parseInt(indice[3]);} });


document.querySelector("#sv").append(droit);

obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","30");droit.setAttribute("y1","50");
 droit.setAttribute("x2","100");droit.setAttribute("y2","50");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
droit.addEventListener('click',()=>{if(mdf==0){event.currentTarget.setAttribute("fill",""+fill);
  event.currentTarget.setAttribute("stroke",""+strk);
event.currentTarget.nextSibling.setAttribute("stroke",""+strk);
event.currentTarget.nextSibling.setAttribute("fill",""+fill);
event.currentTarget.previousSibling.setAttribute("stroke",""+strk);
event.currentTarget.previousSibling.setAttribute("fill",""+fill);


}if(mdf==1){indice=event.currentTarget.getAttribute("id");
document.querySelector("#pvd").textContent="l'objet ligne est le numero"+parseInt(indice[3]);} });


document.querySelector("#sv").append(droit);

obj.lineclass++;droit=document.createElementNS(ns,"line");
droit.setAttribute("id","drt"+obj.lineclass);droit.setAttribute("x1","30");droit.setAttribute("y1","100");
 droit.setAttribute("x2","10");droit.setAttribute("y2","50");
 droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
droit.addEventListener('click',()=>{if(mdf==0){event.currentTarget.setAttribute("fill",""+fill);
  event.currentTarget.setAttribute("stroke",""+strk);

event.currentTarget.previousSibling.setAttribute("stroke",""+strk);
event.currentTarget.previousSibling.setAttribute("fill",""+fill);
event.currentTarget.previousSibling.previousSibling.setAttribute("stroke",""+strk);
event.currentTarget.previousSibling.previousSibling.setAttribute("fill",""+fill);



}if(mdf==1){indice=event.currentTarget.getAttribute("id");
document.querySelector("#pvd").textContent="l'objet ligne est le numero"+parseInt(indice[3]);} });

document.querySelector("#sv").append(droit);
}

 function crtcrcl(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#rod"+i);
phrs=phrs+'crtob=document.createElementNS(ns,"circle"); crtob.setAttribute("cx","'+ob.getAttribute("cx")+'");'+
'crtob.setAttribute("cy","'+ob.getAttribute("cy")+'");'+'crtob.setAttribute("r","'+ob.getAttribute("r")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+rang+'");'+'document.querySelector("#sv'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }

function codcrtpath(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#chem"+i);
phrs=phrs+'crtob=document.createElementNS(ns,"path"); crtob.setAttribute("d","'+ob.getAttribute("d")+'");'+
'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+rang+'");'+'document.querySelector("#sv'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }





function crtelps(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#elip"+i);
 phrs=phrs+' crtob=document.createElementNS(ns,"ellipse"); crtob.setAttribute("cx","'+ob.getAttribute("cx")+'");'+
'crtob.setAttribute("cy","'+ob.getAttribute("cy")+'");'+'crtob.setAttribute("rx","'+ob.getAttribute("rx")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("ry","'+ob.getAttribute("ry")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+rang+'");'+'document.querySelector("#sv'+imsv+'").append(crtob);';}

cod=cod+phrs; }


function crttxt(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#ltt"+i);
 phrs=phrs+' crtob=document.createElementNS(ns,"text"); crtob.setAttribute("x","'+ob.getAttribute("x")+'");'+
'crtob.setAttribute("y","'+ob.getAttribute("y")+'");'+'crtob.setAttribute("font-family","'+ob.getAttribute("font-family")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("font-size","'+ob.getAttribute("font-size")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+rang+'");'+'crtob.textContent="'+ob.textContent+'";'+'document.querySelector("#sv'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }

function crtline(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#drt"+i);
 phrs=phrs+'crtob=document.createElementNS(ns,"line"); crtob.setAttribute("x1","'+ob.getAttribute("x1")+'");'+
'crtob.setAttribute("y1","'+ob.getAttribute("y1")+'");'+'crtob.setAttribute("x2","'+ob.getAttribute("x2")+'");'
+'crtob.setAttribute("style","'+ob.getAttribute("style")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("y2","'+ob.getAttribute("y2")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
+'crtob.setAttribute("id","'+ob.getAttribute("id")+rang+'");'+'document.querySelector("#sv'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }


function crtrect(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#rct"+i);
 phrs=phrs+'crtob=document.createElementNS(ns,"rect"); crtob.setAttribute("x","'+ob.getAttribute("x")+'");'+
'crtob.setAttribute("y","'+ob.getAttribute("y")+'");'+'crtob.setAttribute("width","'+ob.getAttribute("width")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("height","'+ob.getAttribute("height")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+rang+'");'+'document.querySelector("#sv'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }








function crtcrclexo(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#rod"+i);
phrs=phrs+'crtob=document.createElementNS(ns,"circle"); crtob.setAttribute("cx","'+ob.getAttribute("cx")+'");'+
'crtob.setAttribute("cy","'+ob.getAttribute("cy")+'");'+'crtob.setAttribute("r","'+ob.getAttribute("r")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'exo'+rang+'");'+'document.querySelector("#extb'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }

function crtpathexo(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#chem"+i);
phrs=phrs+'crtob=document.createElementNS(ns,"path"); crtob.setAttribute("d","'+ob.getAttribute("d")+'");'+
'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'exo'+rang+'");'+'document.querySelector("#extb'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }






function crtelpsexo(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#elip"+i);
 phrs=phrs+' crtob=document.createElementNS(ns,"ellipse"); crtob.setAttribute("cx","'+ob.getAttribute("cx")+'");'+
'crtob.setAttribute("cy","'+ob.getAttribute("cy")+'");'+'crtob.setAttribute("rx","'+ob.getAttribute("rx")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("ry","'+ob.getAttribute("ry")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'exo'+rang+'");'+'document.querySelector("#extb'+imsv+'").append(crtob);';}

cod=cod+phrs; }


function crttxtexo(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#ltt"+i);
 phrs=phrs+' crtob=document.createElementNS(ns,"text"); crtob.setAttribute("x","'+ob.getAttribute("x")+'");'+
'crtob.setAttribute("y","'+ob.getAttribute("y")+'");'+'crtob.setAttribute("font-family","'+ob.getAttribute("font-family")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("font-size","'+ob.getAttribute("font-size")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+rang+'");'+'crtob.textContent="'+ob.textContent+'";' +'document.querySelector("#extb'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }

function crtlineexo(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#drt"+i);
 phrs=phrs+'crtob=document.createElementNS(ns,"line"); crtob.setAttribute("x1","'+ob.getAttribute("x1")+'");'+
'crtob.setAttribute("y1","'+ob.getAttribute("y1")+'");'+'crtob.setAttribute("x2","'+ob.getAttribute("x2")+'");'
+'crtob.setAttribute("style","'+ob.getAttribute("style")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("y2","'+ob.getAttribute("y2")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
+'crtob.setAttribute("id","'+ob.getAttribute("id")+'exo'+rang+'");'+'document.querySelector("#extb'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }


function crtrectexo(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#rct"+i);
 phrs=phrs+'crtob=document.createElementNS(ns,"rect"); crtob.setAttribute("x","'+ob.getAttribute("x")+'");'+
'crtob.setAttribute("y","'+ob.getAttribute("y")+'");'+'crtob.setAttribute("width","'+ob.getAttribute("width")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("height","'+ob.getAttribute("height")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'exo'+rang+'");'+'document.querySelector("#extb'+imsv+'").append(crtob);' ;}
 cod=cod+phrs; }








function crtcrclprop(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#rod"+i);
phrs=phrs+'crtob=document.createElementNS(ns,"circle"); crtob.setAttribute("cx","'+ob.getAttribute("cx")+'");'+
'crtob.setAttribute("cy","'+ob.getAttribute("cy")+'");'+'crtob.setAttribute("r","'+ob.getAttribute("r")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'prop'+(''+imsv)+rang+'");'+'document.querySelector("#svpro'+(''+imsv)+rang+'").append(crtob);' ;}
 cod=cod+phrs; }

function crtpathprop(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#chem"+i);
phrs=phrs+'crtob=document.createElementNS(ns,"path"); crtob.setAttribute("d","'+ob.getAttribute("d")+'");'+
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'prop'+(''+imsv)+rang+'");'+'document.querySelector("#svpro'+(''+imsv)+rang+'").append(crtob);' ;}
 cod=cod+phrs; }





function crtelpsprop(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#elip"+i);
 phrs=phrs+' crtob=document.createElementNS(ns,"ellipse"); crtob.setAttribute("cx","'+ob.getAttribute("cx")+'");'+
'crtob.setAttribute("cy","'+ob.getAttribute("cy")+'");'+'crtob.setAttribute("rx","'+ob.getAttribute("rx")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("ry","'+ob.getAttribute("ry")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'prop'+(''+imsv)+rang+'");'+'document.querySelector("#svpro'+(''+imsv)+rang+'").append(crtob);';}

cod=cod+phrs; }


function crttxtprop(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#ltt"+i);
 phrs=phrs+' crtob=document.createElementNS(ns,"text"); crtob.setAttribute("x","'+ob.getAttribute("x")+'");'+
'crtob.setAttribute("y","'+ob.getAttribute("y")+'");'+'crtob.setAttribute("font-family","'+ob.getAttribute("font-family")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("font-size","'+ob.getAttribute("font-size")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'prop'+(''+imsv)+rang+'");'+'crtob.textContent="'+ob.textContent+'";' +'document.querySelector("#svpro'+(''+imsv)+rang+'").append(crtob);' ;}
 cod=cod+phrs; }

function crtlineprop(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#drt"+i);
 phrs=phrs+'crtob=document.createElementNS(ns,"line"); crtob.setAttribute("x1","'+ob.getAttribute("x1")+'");'+
'crtob.setAttribute("y1","'+ob.getAttribute("y1")+'");'+'crtob.setAttribute("x2","'+ob.getAttribute("x2")+'");'
+'crtob.setAttribute("style","'+ob.getAttribute("style")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("y2","'+ob.getAttribute("y2")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
+'crtob.setAttribute("id","'+ob.getAttribute("id")+'prop'+(''+imsv)+rang+'");'+'document.querySelector("#svpro'+(''+imsv)+rang+'").append(crtob);' ;}
 cod=cod+phrs; }


function crtrectprop(ind){let phrs="";
for(let i=1;i<=ind;i++){let ob=document.querySelector("#rct"+i);
 phrs=phrs+'crtob=document.createElementNS(ns,"rect"); crtob.setAttribute("x","'+ob.getAttribute("x")+'");'+
'crtob.setAttribute("y","'+ob.getAttribute("y")+'");'+'crtob.setAttribute("width","'+ob.getAttribute("width")+'");'
+'crtob.setAttribute("stroke","'+ob.getAttribute("stroke")+'");'+'crtob.setAttribute("height","'+ob.getAttribute("height")+'");'
+'crtob.setAttribute("fill","'+ob.getAttribute("fill")+'");'+'crtob.setAttribute("stroke-width","'+ob.getAttribute("stroke-width")+'");'
 +'crtob.setAttribute("id","'+ob.getAttribute("id")+'prop'+(''+imsv)+rang+'");'+'document.querySelector("#svpro'+(''+imsv)+rang+'").append(crtob);' ;}
 cod=cod+phrs; }







window.onload=function(){let elm;let selec;let ev=0;
let vide=document.querySelector("#pvd");


elm=document.querySelector("#dva");
elm.addEventListener('click',()=>{ajt=1;moins=0;});
elm=document.querySelector("#dvb");
elm.addEventListener('click',()=>{ajt=0;moins=1;});


for(let i=1;i<=24;i++){ selec="#act"+i; elm=document.querySelector(selec);

if(i==2){elm.addEventListener('click',()=>{mdf=1;

});}


if(i==3){elm.addEventListener('click',()=>{drwtx=1;basc=0;word=document.createElementNS(ns,"text");
obj.txclass++;word.setAttribute("id","ltt"+obj.txclass);
if(obj.txclass>1){vide.textContent=document.querySelector("#ltt"+(obj.txclass-1)).textContent;
vide.style.fontSize=(document.querySelector("#ltt"+(obj.txclass-1)).getAttribute("font-size"))+"px";

vide.style.fontFamily=document.querySelector("#ltt"+(obj.txclass-1)).getAttribute("font-family");

txtX=parseInt(document.querySelector("#ltt"+(obj.txclass-1)).getAttribute("x"))+vide.offsetWidth;
txtY=parseInt(document.querySelector("#ltt"+(obj.txclass-1)).getAttribute("y"));}
word.setAttribute("stroke-width","1");word.setAttribute("stroke",""+strk);
word.setAttribute("y",""+txtY);word.setAttribute("x",""+txtX);word.setAttribute("font-size","25");
word.textContent="";
word.addEventListener('click',()=>{if(mdf==0){event.currentTarget.setAttribute("fill",""+fill);
  event.currentTarget.setAttribute("stroke",""+strk);}if(mdf==1){indice=event.currentTarget.getAttribute("id");
document.querySelector("#pvd").textContent="l'objet text est le numero"+parseInt(indice[3]);}  });

(document.querySelector("#sv")).append(word); 

crcl=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;rootdf=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;phrase="";fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rowset=0;hrset=0;vrset=0;tabset=0;vrowset=0;ctrl2ptset=0;

});}

if(i==4){elm.addEventListener('click',()=>{crcl=1;basc=0;rond=document.createElementNS(ns,"circle");obj.cerclass=obj.cerclass+1;
 rond.setAttribute("id","rod"+obj.cerclass);rond.setAttribute("cy","60");rond.setAttribute("r","40");rond.setAttribute("cx","200");rond.setAttribute("stroke-width","1");rond.setAttribute("stroke",""+strk);rond.setAttribute("fill",""+fill);
 rond.addEventListener('click',()=>{if(mdf==0){event.currentTarget.setAttribute("fill",""+fill);
  event.currentTarget.setAttribute("stroke",""+strk);}if(mdf==1){indice=event.currentTarget.getAttribute("id");
document.querySelector("#pvd").textContent="l'objet cercle est le numero"+parseInt(indice[3]);} });
(document.querySelector("#sv")).append(rond); drwtx=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;vrowset=0;ctrl2ptset=0;
});}

if(i==5){elm.addEventListener('click',()=>{ligndef=1;basc=0;droit=document.createElementNS(ns,"line");obj.lineclass++;droit.setAttribute("y1","100");
droit.setAttribute("stroke",""+strk); droit.setAttribute("stroke-width","2");
droit.setAttribute("x1","0");droit.setAttribute("y2","100");
droit.setAttribute("x2","150");droit.setAttribute("id","drt"+obj.lineclass);


 droit.addEventListener('click',()=>{if(mdf==0){event.currentTarget.setAttribute("fill",""+fill);
  event.currentTarget.setAttribute("stroke",""+strk);}if(mdf==1){indice=event.currentTarget.getAttribute("id");
document.querySelector("#pvd").textContent="l'objet ligne est le numero"+parseInt(indice[3]);} });

document.querySelector("#sv").append(droit);drwtx=0;crcl=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;vrowset=0;tabset=0;ctrl2ptset=0;

});}


if(i==6){elm.addEventListener('click',()=>{recdf=1;basc=0;carr=document.createElementNS(ns,"rect");obj.rectclass=obj.rectclass+1;carr.setAttribute("id","rct"+obj.rectclass);carr.setAttribute("y","20");carr.setAttribute("x","0");
 carr.setAttribute("width","50");carr.setAttribute("height","35");carr.setAttribute("stroke",""+strk);
 carr.setAttribute("fill",""+fill);carr.setAttribute("stroke-width","1"); 

 carr.addEventListener('click',()=>{if(mdf==0){event.currentTarget.setAttribute("fill",""+fill);
  event.currentTarget.setAttribute("stroke",""+strk);}if(mdf==1){indice=event.currentTarget.getAttribute("id");
document.querySelector("#pvd").textContent="l'objet rectangle est le numero"+parseInt(indice[3]);} });

 document.querySelector("svg").append(carr);drwtx=0;crcl=0;ligndef=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;vrowset=0;tabset=0;ctrl2ptset=0;

});}

if(i==7){elm.addEventListener('click',()=>{elps=1;basc=0;oval=document.createElementNS(ns,"ellipse");obj.ovaclass++;oval.setAttribute("id","elip"+obj.ovaclass);
oval.setAttribute("cx","300");oval.setAttribute("cy","250");oval.setAttribute("rx","90");oval.setAttribute("ry","50");
oval.setAttribute("stroke",""+strk);oval.setAttribute("stroke-width","1");
oval.setAttribute("fill",""+fill);
oval.addEventListener('click',()=>{if(mdf==0){event.currentTarget.setAttribute("fill",""+fill);
 event.currentTarget.setAttribute("stroke",""+strk);}if(mdf==1){indice=event.currentTarget.getAttribute("id");
document.querySelector("#pvd").textContent="l'objet ellipse est le numero"+parseInt(indice[4]);}   });
document.querySelector("svg").append(oval);drwtx=0;crcl=0;ligndef=0;recdf=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startXset=0;startYset=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;ctrl2ptset=0;vrowset=0;tabset=0;
ctrl2ptset=0;
});}

if(i==8){elm.addEventListener('click',()=>{pathdef=1;obj.pathclass++;crtpath(qdrpath,cubpath);
basc=0;drwtx=0;crcl=0;ligndef=0;recdf=0;elps=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startXset=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;ctrl2ptset=0;
});}

if(i==9){elm.addEventListener('click',()=>{setx=1;gnlYset=0;sety=0;rayset=0;rayBset=0;ctrlptset=0;ctrl2ptset=0;
startXset=0;startYset=0;endXset=0;endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;});}

if(i==10){elm.addEventListener('click',()=>{ctrl2ptset=1;
drwtx=0;crcl=0;ligndef=0;recdf=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startXset=0;startYset=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;vrowset=0;


});}


if(i==11){elm.addEventListener('click',()=>{sety=1;setx=0;gnlYset=0;rayset=0;rayBset=0;ctrlptset=0;ctrl2ptset=0;
startXset=0;startYset=0;endXset=0;endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;});}

if(i==13){elm.addEventListener('click',()=>{rayset=1;setx=0;gnlYset=0;sety=0;rayBset=0;
startXset=0;startYset=0;endXset=0;endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;  });}

if(i==15){elm.addEventListener('click',()=>{rayBset=1;setx=0;gnlYset=0;sety=0;rayset=0;
startXset=0;startYset=0;endXset=0;endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;});}

if(i==16){elm.addEventListener('click',()=>{startXset=1;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;ctrlptset=0;ctrl2ptset=0;
startYset=0; endXset=0;endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;});}

if(i==18){elm.addEventListener('click',()=>{startYset=1;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;ctrlptset=0;ctrl2ptset=0;
startXset=0;endXset=0; endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;});}

if(i==19){elm.addEventListener('click',()=>{endXset=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startXset=0;startYset=0;endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=1;strwidth=1;});}

if(i==20){elm.addEventListener('click',()=>{endXset=1;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;ctrlptset=0;ctrl2ptset=0;
startXset=0;startYset=0; endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;});}

if(i==21){elm.addEventListener('click',()=>{endXset=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startXset=0;startYset=0; endYset=0;couleurdf=0;ftszset=0;fillset=1;strkset=0;strkwidthset=0;});}

if(i==22){elm.addEventListener('click',()=>{endYset=1;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;ctrlptset=0;ctrl2ptset=0;
startXset=0;startY=0;  endXset=0;couleurdf=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;});}

if(i==23){elm.addEventListener('click',()=>{endXset=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;ctrlptset=0;ctrl2ptset=0;
startXset=0;startYset=0;  endYset=0;couleurdf=0;ftszset=0;fillset=0;strkset=1;strkwidthset=0;});}

if(i==24){elm.addEventListener('click',()=>{couleurdf=1;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startYset=0;  endXset=0;endYset=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;});}


if(i==14){elm.addEventListener('click',()=>{ftszset=1;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;ctrlptset=0;ctrl2ptset=0;
startXset=0;ctrlptset=0;ctrl2ptset=0; startYset=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;fillset=0;strkset=0;strkwidthset=0;});}

if(i==17){elm.addEventListener('click',()=>{ctrlptset=1;
drwtx=0;crcl=0;ligndef=0;recdf=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startXset=0;startYset=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;ctrl2ptset=0;vrowset=0;



});}




if(i==1){elm.addEventListener('click',()=>{ if(exo==0&&prop==0){crtrect(obj.rectclass);codcrtpath(obj.pathclass);
crtcrcl(obj.cerclass);crtelps(obj.ovaclass);crtline(obj.lineclass);
crttxt(obj.txclass);
document.querySelector("#cod").textContent=cod;} 
if(exo==1){crtrectexo(obj.rectclass);crtpathexo(obj.pathclass);
crtcrclexo(obj.cerclass);crtelpsexo(obj.ovaclass);crtlineexo(obj.lineclass);
crttxtexo(obj.txclass);
document.querySelector("#cod").textContent=cod;}
   if(prop==1){crtrectprop(obj.rectclass);crtpathprop(obj.pathclass);
crtcrclprop(obj.cerclass);crtelpsprop(obj.ovaclass);crtlineprop(obj.lineclass);
crttxtprop(obj.txclass);
document.querySelector("#cod").textContent=cod;} });}



}
for(let cl=1;cl<10;cl++){selec="#pcol"+cl;elm=document.querySelector(selec);
elm.addEventListener('click',()=>{
if(cl==1){if(fillset==1){fill=document.querySelector("#pcol1").textContent;}
if(strkset==1){strk=(document.querySelector("#pcol1")).textContent;}}  

if(cl==2){if(fillset==1){fill=document.querySelector("#pcol2").textContent;}
if(strkset==1){strk=document.querySelector("#pcol2").textContent;}}  

if(cl==3){if(fillset==1){fill=document.querySelector("#pcol3").textContent;}
if(strkset==1){strk=(document.querySelector("#pcol3")).textContent;} } 

if(cl==4){if(fillset==1){fill=document.querySelector("#pcol4").textContent;}
if(strkset==1){strk=(document.querySelector("#pcol4")).textContent;} } 

if(cl==5){if(fillset==1){fill=document.querySelector("#pcol5").textContent;}
if(strkset==1){strk=document.querySelector("#pcol5").textContent;}}  

if(cl==6){if(fillset==1){fill=(document.querySelector("#pcol6")).textContent;}
if(strkset==1){strk=document.querySelector("#pcol6").textContent;}}  

if(cl==7){if(fillset==1){fill=document.querySelector("#pcol7").textContent;}
if(strkset==1){strk=document.querySelector("#pcol7").textContent;}}  

if(cl==8){if(fillset==1){fill=document.querySelector("#pcol8").textContent;}
if(strkset==1){strk=document.querySelector("#pcol8").textContent;}}  

if(cl==9){if(fillset==1){fill=document.querySelector("#pcol9").textContent;}
if(strkset==1){strk=document.querySelector("#pcol9").textContent;}}  

}



);}

 
for(let j=1;j<=10;j++){selec="#pg"+j;elm=document.querySelector(selec);
if(j==1){elm.addEventListener('click',()=>{fontfamly="Arial";(document.querySelector("#ltt"+obj.txclass)).setAttribute("font-family","Arial"); });}
if(j==2){elm.addEventListener('click',()=>{fontfamly="Gabriola";(document.querySelector("#ltt"+obj.txclass)).setAttribute("font-family","Gabriola");});}

if(j==3){elm.addEventListener('click',()=>{ if(gnlYset==1&&ajt==1){gnrlY=gnrlY+1;}if(gnlYset==1&&moins==1){gnrlY=gnrlY-1;}
if(strkwidthset==1&&ajt==1&&calc!=0){
strwidth=parseInt(calc.getAttribute("stroke-width"))+1;calc.setAttribute("stroke-width",""+strwidth);}
if(strkwidthset==1&&moins==1&&calc!=0){ 
strwidth=parseInt(calc.getAttribute("stroke-width"))-1; calc.setAttribute("stroke-width",""+strwidth);}

if(crcl==1&&ajt==1){ if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))+1;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))+1;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))+1;calc.setAttribute("r",""+rayA);}}
if(crcl==1&&moins==1){if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))-1;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))-1;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))-1;calc.setAttribute("r",""+rayA);}}

if(drwtx==1&&ajt==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))+1;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))+1;calc.setAttribute("y",""+posy);}
if(ftszset==1){fontsz=fontsz+2;calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))+1;calc.setAttribute("font-size",""+fontsz);}}
if(drwtx==1&&moins==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))-1;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))-1;calc.setAttribute("y",""+posy);}
if(ftszset==1){calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))-1;calc.setAttribute("font-size",""+fontsz);}}

if(ligndef==1&&moins==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass);xdebut=parseInt(calc.getAttribute("x1"))-1; calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-1;calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))-1;calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))-1;calc.setAttribute("y2",""+yfin);} }

if(ligndef==1&&ajt==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass); xdebut=parseInt(calc.getAttribute("x1"))+1;calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass);ydebut=parseInt(calc.getAttribute("y1"))+1; calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))+1; calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))+1; calc.setAttribute("y2",""+yfin);} }

if(elps==1&&ajt==1){if(setx==1){;calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))+1; calc.setAttribute("cx",""+posx);} 
if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))+1;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))+1;calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))+1; calc.setAttribute("ry",""+rayB);} }
if(elps==1&&moins==1){if(setx==1){calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))-1; calc.setAttribute("cx",""+posx);}
 if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))-1; calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))-1; calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))-1; calc.setAttribute("ry",""+rayB);} }

if(recdf==1&&ajt==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))+1; calc.setAttribute("x",""+posx);} 
if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))+1;  calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))+1; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))+1;  calc.setAttribute("height",""+rayB);} }
if(recdf==1&&moins==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))-1; calc.setAttribute("x",""+posx);}
 if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))-1; calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))-1; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))-1; calc.setAttribute("height",""+rayB);} }




if((limsup==1||inflim==1)&&ajt==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))+1;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))+1;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr)); if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))+1; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+1;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))+1;calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+1;calc.setAttribute("y2",""+yfin);}
}}



if((limsup==1||inflim==1)&&moins==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))-1;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))-1;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr));    if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))-1; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-1;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))-1;calc.setAttribute("y1",""+ydebut);
yfin=parseInt(calc.getAttribute("y2"))-1;calc.setAttribute("y2",""+yfin);}
}}


}); }




if(j==4){ elm.addEventListener('click',()=>{ if(gnlYset==1&&ajt==1){gnrlY=gnrlY+5;}if(gnlYset==1&&moins==1){gnrlY=gnrlY-5;}
if(strkwidthset==1&&ajt==1&&calc!=0){
strwidth=parseInt(calc.getAttribute("stroke-width"))+5;calc.setAttribute("stroke-width",""+strwidth);}
if(strkwidthset==1&&moins==1&&calc!=0){ 
strwidth=parseInt(calc.getAttribute("stroke-width"))-5; calc.setAttribute("stroke-width",""+strwidth);}

if(crcl==1&&ajt==1){ if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))+5;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))+5;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))+5;calc.setAttribute("r",""+rayA);}}
if(crcl==1&&moins==1){if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))-5;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))-5;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))-5;calc.setAttribute("r",""+rayA);}}

if(drwtx==1&&ajt==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))+5;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))+5;calc.setAttribute("y",""+posy);}
if(ftszset==1){fontsz=fontsz+2;calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))+5;calc.setAttribute("font-size",""+fontsz);}}
if(drwtx==1&&moins==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))-5;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))-5;calc.setAttribute("y",""+posy);}
if(ftszset==1){calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))-5;calc.setAttribute("font-size",""+fontsz);}}

if(ligndef==1&&moins==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass);xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-5;calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);} }

if(ligndef==1&&ajt==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass); xdebut=parseInt(calc.getAttribute("x1"))+5;calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass);ydebut=parseInt(calc.getAttribute("y1"))+5; calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))+5; calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))+5; calc.setAttribute("y2",""+yfin);} }

if(elps==1&&ajt==1){if(setx==1){;calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))+5; calc.setAttribute("cx",""+posx);} 
if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))+5;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))+5;calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))+5; calc.setAttribute("ry",""+rayB);} }
if(elps==1&&moins==1){if(setx==1){calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))-5; calc.setAttribute("cx",""+posx);}
 if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))-5; calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))-5; calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))-5; calc.setAttribute("ry",""+rayB);} }

if(recdf==1&&ajt==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))+5; calc.setAttribute("x",""+posx);} 
if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))+5;  calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))+5; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))+5;  calc.setAttribute("height",""+rayB);} }
if(recdf==1&&moins==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))-5; calc.setAttribute("x",""+posx);}
 if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))-5; calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))-5; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))-5; calc.setAttribute("height",""+rayB);} }




if(rootdf==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))-5;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); yfin=parseInt(calc.getAttribute("y2"))-5;
calc.setAttribute("y2",""+yfin);
}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);
} }


if(rootdf==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))+5;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); 
yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);

}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+xfin);
} }




if(rowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))-5;calc.setAttribute("x1",""+xdebut);
} }


if(rowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+5;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))+5;calc.setAttribute("x1",""+xdebut);
} }




if(hrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+5;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+5;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+rayA);}}
if(hrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-5;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-5;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+rayA);}}


if(vrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+5;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+5;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+rayA);}}
if(vrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-5;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-5;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+rayA);}}



if(tabset==1&&moins==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))-5; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))-5; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))-5; calc.setAttribute("y2",""+yfin);}}

 }

if(tabset==1&&ajt==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))+5; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+5; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))+5; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+5; calc.setAttribute("y2",""+yfin);}} }





if((limsup==1||inflim==1)&&ajt==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))+5;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))+5;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr)); if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))+5; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+5;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))+5;calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+5;calc.setAttribute("y2",""+yfin);}
}}



if((limsup==1||inflim==1)&&moins==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))-5;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))-5;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr));    if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))-5; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-5;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))-5;calc.setAttribute("y1",""+ydebut);
yfin=parseInt(calc.getAttribute("y2"))-5;calc.setAttribute("y2",""+yfin);}
}}





});}



if(j==5){elm.addEventListener('click',()=>{ if(gnlYset==1&&ajt==1){gnrlY=gnrlY+10;}if(gnlYset==1&&moins==1){gnrlY=gnrlY-10;}
if(strkwidthset==1&&ajt==1&&calc!=0){
strwidth=parseInt(calc.getAttribute("stroke-width"))+10;calc.setAttribute("stroke-width",""+strwidth);}
if(strkwidthset==1&&moins==1&&calc!=0){ 
strwidth=parseInt(calc.getAttribute("stroke-width"))-10; calc.setAttribute("stroke-width",""+strwidth);}

if(crcl==1&&ajt==1){ if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))+10;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))+10;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))+10;calc.setAttribute("r",""+rayA);}}
if(crcl==1&&moins==1){if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))-10;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))-10;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))-10;calc.setAttribute("r",""+rayA);}}

if(drwtx==1&&ajt==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))+10;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))+10;calc.setAttribute("y",""+posy);}
if(ftszset==1){fontsz=fontsz+2;calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))+10;calc.setAttribute("font-size",""+fontsz);}}
if(drwtx==1&&moins==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))-10;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))-10;calc.setAttribute("y",""+posy);}
if(ftszset==1){calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))-10;calc.setAttribute("font-size",""+fontsz);}}

if(ligndef==1&&moins==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass);xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-10;calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);} }

if(ligndef==1&&ajt==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass); xdebut=parseInt(calc.getAttribute("x1"))+10;calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass);ydebut=parseInt(calc.getAttribute("y1"))+10; calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))+10; calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))+10; calc.setAttribute("y2",""+yfin);} }

if(elps==1&&ajt==1){if(setx==1){;calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))+10; calc.setAttribute("cx",""+posx);} 
if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))+10;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))+10;calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))+10; calc.setAttribute("ry",""+rayB);} }
if(elps==1&&moins==1){if(setx==1){calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))-10; calc.setAttribute("cx",""+posx);}
 if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))-10; calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))-10; calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))-10; calc.setAttribute("ry",""+rayB);} }

if(recdf==1&&ajt==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))+10; calc.setAttribute("x",""+posx);} 
if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))+10;  calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))+10; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))+10;  calc.setAttribute("height",""+rayB);} }
if(recdf==1&&moins==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))-10; calc.setAttribute("x",""+posx);}
 if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))-10; calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))-10; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))-10; calc.setAttribute("height",""+rayB);} }



if(rootdf==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))-10;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); yfin=parseInt(calc.getAttribute("y2"))-10;
calc.setAttribute("y2",""+yfin);
}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);
} }


if(rootdf==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))+10;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); 
yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);

}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);
} }




if(rowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))-10;calc.setAttribute("x1",""+xdebut);
} }


if(rowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))+10;calc.setAttribute("x1",""+xdebut);
} }



if(vrowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));ydebut=parseInt(calc.getAttribute("y1"))-10;calc.setAttribute("y1",""+ydebut);
} }


if(vrowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));ydebut=parseInt(calc.getAttribute("y1"))+10;calc.setAttribute("y1",""+ydebut);
} }









if(hrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+10;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+rayA);}}
if(hrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-10;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+rayA);}}


if(vrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+10;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+10;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+rayA);}}
if(vrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-10;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-10;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+rayA);}}


if(tabset==1&&moins==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))-10; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))-10; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))-10; calc.setAttribute("y2",""+yfin);}}

 }

if(tabset==1&&ajt==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+10; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))+10; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+10; calc.setAttribute("y2",""+yfin);}} }







if(ctrlptset==1&&moins==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-10;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-10;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-10;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-10;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&moins==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
xfin=pathtab[2][0]-10;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
yfin=pathtab[2][1]-10;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }}







if(ctrlptset==1&&ajt==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+10;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+10;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+10;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+10;pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&ajt==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+10;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+10;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}}












if(pathdef==1&&moins==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-10;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-10;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]-10;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]-10;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]-10;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]-10;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]-10;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]-10;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-10;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-10;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]-10;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]-10;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}


 }

if(pathdef==1&&ajt==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+10;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+10;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+10;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+10;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}


if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]+10;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]+10;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]+10;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]+10;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+10;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+10;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]+10;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]+10;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
 }





if((limsup==1||inflim==1)&&ajt==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))+10;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))+10;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr)); if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))+10; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+10;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))+10;calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+10;calc.setAttribute("y2",""+yfin);}
}}



if((limsup==1||inflim==1)&&moins==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))-10;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))-10;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr));    if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))-10; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-10;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))-10;calc.setAttribute("y1",""+ydebut);
yfin=parseInt(calc.getAttribute("y2"))-10;calc.setAttribute("y2",""+yfin);}
}}



});  }





if(j==6){ elm.addEventListener('click',()=>{ if(gnlYset==1&&ajt==1){gnrlY=gnrlY+50;}if(gnlYset==1&&moins==1){gnrlY=gnrlY-50;}
if(strkwidthset==1&&ajt==1&&calc!=0){
strwidth=parseInt(calc.getAttribute("stroke-width"))+50;calc.setAttribute("stroke-width",""+strwidth);}
if(strkwidthset==1&&moins==1&&calc!=0){ 
strwidth=parseInt(calc.getAttribute("stroke-width"))-50; calc.setAttribute("stroke-width",""+strwidth);}

if(crcl==1&&ajt==1){ if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))+50;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))+50;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))+50;calc.setAttribute("r",""+rayA);}}
if(crcl==1&&moins==1){if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))-50;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))-50;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))-50;calc.setAttribute("r",""+rayA);}}

if(drwtx==1&&ajt==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))+50;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))+50;calc.setAttribute("y",""+posy);}
if(ftszset==1){fontsz=fontsz+2;calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))+50;calc.setAttribute("font-size",""+fontsz);}}
if(drwtx==1&&moins==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))-50;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))-50;calc.setAttribute("y",""+posy);}
if(ftszset==1){calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))-50;calc.setAttribute("font-size",""+fontsz);}}

if(ligndef==1&&moins==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass);xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-50;calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);} }

if(ligndef==1&&ajt==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass); xdebut=parseInt(calc.getAttribute("x1"))+50;calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass);ydebut=parseInt(calc.getAttribute("y1"))+50; calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))+50; calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))+50; calc.setAttribute("y2",""+yfin);} }

if(elps==1&&ajt==1){if(setx==1){;calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))+50; calc.setAttribute("cx",""+posx);} 
if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))+50;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))+50;calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))+50; calc.setAttribute("ry",""+rayB);} }
if(elps==1&&moins==1){if(setx==1){calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))-50; calc.setAttribute("cx",""+posx);}
 if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))-50; calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))-50; calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))-50; calc.setAttribute("ry",""+rayB);} }

if(recdf==1&&ajt==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))+50; calc.setAttribute("x",""+posx);} 
if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))+50;  calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))+50; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))+50;  calc.setAttribute("height",""+rayB);} }
if(recdf==1&&moins==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))-50; calc.setAttribute("x",""+posx);}
 if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))-50; calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))-50; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))-50; calc.setAttribute("height",""+rayB);} }



if(rootdf==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))-50;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); yfin=parseInt(calc.getAttribute("y2"))-50;
calc.setAttribute("y2",""+yfin);
}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);
} }


if(rootdf==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))+50;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); 
yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);

}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);
} }





if(rowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))-50;calc.setAttribute("x1",""+xdebut);
} }


if(rowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))+50;calc.setAttribute("x1",""+xdebut);
} }




if(vrowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));ydebut=parseInt(calc.getAttribute("y1"))-50;calc.setAttribute("y1",""+ydebut);
} }


if(vrowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));ydebut=parseInt(calc.getAttribute("y1"))+50;calc.setAttribute("y1",""+ydebut);
} }







if(hrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+50;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+rayA);}}
if(hrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-50;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+rayA);}}


if(vrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+50;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+50;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+rayA);}}
if(vrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-50;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-50;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+rayA);}}



if(tabset==1&&moins==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))-50; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))-50; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))-50; calc.setAttribute("y2",""+yfin);}}

 }

if(tabset==1&&ajt==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+50; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))+50; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+50; calc.setAttribute("y2",""+yfin);}} }






if(ctrlptset==1&&moins==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-50;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-50;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-50;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-50;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&moins==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
xfin=pathtab[2][0]-50;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
yfin=pathtab[2][1]-50;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }}







if(ctrlptset==1&&ajt==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+50;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+50;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+50;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+50;pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&ajt==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+50;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+50;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}}












if(pathdef==1&&moins==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-50;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-50;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]-50;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]-50;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]-50;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]-50;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]-50;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]-50;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-50;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-50;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]-50;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]-50;pathtab[3][2]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}


 }

if(pathdef==1&&ajt==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+50;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+50;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+50;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+50;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}


if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]+50;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]+50;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]+50;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]+50;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+50;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+50;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]+50;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]+50;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
 }





if((limsup==1||inflim==1)&&ajt==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))+50;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))+50;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr)); if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))+50; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+50;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))+50;calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+50;calc.setAttribute("y2",""+yfin);}
}}



if((limsup==1||inflim==1)&&moins==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))-50;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))-50;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr));    if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))-50; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-50;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))-50;calc.setAttribute("y1",""+ydebut);
yfin=parseInt(calc.getAttribute("y2"))-50;calc.setAttribute("y2",""+yfin);}
}}



});}




if(j==7){elm.addEventListener('click',()=>{ if(gnlYset==1&&ajt==1){gnrlY=gnrlY+100;}if(gnlYset==1&&moins==1){gnrlY=gnrlY-100;}
if(strkwidthset==1&&ajt==1&&calc!=0){
strwidth=parseInt(calc.getAttribute("stroke-width"))+100;calc.setAttribute("stroke-width",""+strwidth);}
if(strkwidthset==1&&moins==1&&calc!=0){ 
strwidth=parseInt(calc.getAttribute("stroke-width"))-100; calc.setAttribute("stroke-width",""+strwidth);}

if(crcl==1&&ajt==1){ if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))+100;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))+100;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))+100;calc.setAttribute("r",""+rayA);}}
if(crcl==1&&moins==1){if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))-100;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))-100;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))-100;calc.setAttribute("r",""+rayA);}}

if(drwtx==1&&ajt==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))+100;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))+100;calc.setAttribute("y",""+posy);}
if(ftszset==1){fontsz=fontsz+2;calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))+100;calc.setAttribute("font-size",""+fontsz);}}
if(drwtx==1&&moins==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))-100;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))-100;calc.setAttribute("y",""+posy);}
if(ftszset==1){calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))-100;calc.setAttribute("font-size",""+fontsz);}}

if(ligndef==1&&moins==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass);xdebut=parseInt(calc.getAttribute("x1"))-100; calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-100;calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))-100;calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))-100;calc.setAttribute("y2",""+yfin);} }

if(ligndef==1&&ajt==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass); xdebut=parseInt(calc.getAttribute("x1"))+100;calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass);ydebut=parseInt(calc.getAttribute("y1"))+100; calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))+100; calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))+100; calc.setAttribute("y2",""+yfin);} }

if(elps==1&&ajt==1){if(setx==1){;calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))+100; calc.setAttribute("cx",""+posx);} 
if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))+100;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))+100;calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))+100; calc.setAttribute("ry",""+rayB);} }
if(elps==1&&moins==1){if(setx==1){calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))-100; calc.setAttribute("cx",""+posx);}
 if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))-100; calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))-100; calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))-100; calc.setAttribute("ry",""+rayB);} }

if(recdf==1&&ajt==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))+100; calc.setAttribute("x",""+posx);} 
if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))+100;  calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))+100; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))+100;  calc.setAttribute("height",""+rayB);} }
if(recdf==1&&moins==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))-100; calc.setAttribute("x",""+posx);}
 if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))-100; calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))-100; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))-100; calc.setAttribute("height",""+rayB);} }




if(hrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+100;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+100;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+100;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+100;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))+100;calc.setAttribute("x2",""+rayA);}}
if(hrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-100;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-100;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-100;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-100;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))-100;calc.setAttribute("x2",""+rayA);}}


if(vrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+100;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+100;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+100;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+100;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))+100;calc.setAttribute("y2",""+rayA);}}
if(vrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-100;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-100;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-100;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-100;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))-100;calc.setAttribute("y2",""+rayA);}}


if(tabset==1&&moins==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))-100; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))-100; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))-100; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))-100; calc.setAttribute("y2",""+yfin);}}

 }

if(tabset==1&&ajt==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))+100; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+100; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))+100; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+100; calc.setAttribute("y2",""+yfin);}} }







if(ctrlptset==1&&moins==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-100;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-100;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-100;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-100;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&moins==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
xfin=pathtab[2][0]-100;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
yfin=pathtab[2][1]-100;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }}







if(ctrlptset==1&&ajt==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+100;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+100;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+100;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+100;pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&ajt==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+100;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+100;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}}












if(pathdef==1&&moins==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-100;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-100;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]-100;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]-100;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]-100;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]-100;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]-100;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]-100;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-100;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-100;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]-100;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]-100;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}


 }

if(pathdef==1&&ajt==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+100;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+100;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+100;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+100;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}


if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]+100;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]+100;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]+100;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]+100;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+100;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+100;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]+100;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]+100;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
 }





if((limsup==1||inflim==1)&&ajt==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))+100;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))+100;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr)); if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))+100; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+100;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))+100;calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+100;calc.setAttribute("y2",""+yfin);}
}}



if((limsup==1||inflim==1)&&moins==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))-100;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))-100;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr));    if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))-100; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-100;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))-100;calc.setAttribute("y1",""+ydebut);
yfin=parseInt(calc.getAttribute("y2"))-100;calc.setAttribute("y2",""+yfin);}
}}




}); }





if(j==8){elm.addEventListener('click',()=>{ if(gnlYset==1&&ajt==1){gnrlY=gnrlY+20;}if(gnlYset==1&&moins==1){gnrlY=gnrlY-20;}
if(strkwidthset==1&&ajt==1&&calc!=0){
strwidth=parseInt(calc.getAttribute("stroke-width"))+20;calc.setAttribute("stroke-width",""+strwidth);}
if(strkwidthset==1&&moins==1&&calc!=0){ 
strwidth=parseInt(calc.getAttribute("stroke-width"))-20; calc.setAttribute("stroke-width",""+strwidth);}

if(crcl==1&&ajt==1){ if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))+20;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))+20;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))+20;calc.setAttribute("r",""+rayA);}}
if(crcl==1&&moins==1){if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))-2;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))-20;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))-20;calc.setAttribute("r",""+rayA);}}

if(drwtx==1&&ajt==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))+20;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))+20;calc.setAttribute("y",""+posy);}
if(ftszset==1){fontsz=fontsz+2;calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))+20;calc.setAttribute("font-size",""+fontsz);}}
if(drwtx==1&&moins==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))-20;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))-20;calc.setAttribute("y",""+posy);}
if(ftszset==1){calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))-20;calc.setAttribute("font-size",""+fontsz);}}

if(ligndef==1&&moins==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass); 
ydebut=parseInt(calc.getAttribute("y1"))-20;calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); 
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);
yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);} }

if(ligndef==1&&ajt==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass); xdebut=parseInt(calc.getAttribute("x1"))+20;calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass);ydebut=parseInt(calc.getAttribute("y1"))+20; calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))+20; calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))+20; calc.setAttribute("y2",""+yfin);} }

if(elps==1&&ajt==1){if(setx==1){;calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))+20; calc.setAttribute("cx",""+posx);} 
if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))+20;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))+20;calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))+20; calc.setAttribute("ry",""+rayB);} }
if(elps==1&&moins==1){if(setx==1){calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))-20; calc.setAttribute("cx",""+posx);}
 if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))-20; calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))-20; calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))-20; calc.setAttribute("ry",""+rayB);} }

if(recdf==1&&ajt==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))+20; calc.setAttribute("x",""+posx);} 
if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))+20;  calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))+20; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))+20;  calc.setAttribute("height",""+rayB);} }
if(recdf==1&&moins==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))-20; calc.setAttribute("x",""+posx);}
 if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))-20; calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))-20; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))-20; calc.setAttribute("height",""+rayB);} }




if(rootdf==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))-20;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); yfin=parseInt(calc.getAttribute("y2"))-20;
calc.setAttribute("y2",""+yfin);
}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);
} }


if(rootdf==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))+20;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); 
yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);

}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);
} }





if(rowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))-20;calc.setAttribute("x1",""+xdebut);
} }


if(rowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))+20;calc.setAttribute("x1",""+xdebut);
} }






if(vrowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));ydebut=parseInt(calc.getAttribute("y1"))-20;calc.setAttribute("y1",""+ydebut);
} }


if(vrowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));ydebut=parseInt(calc.getAttribute("y1"))+20;calc.setAttribute("y1",""+ydebut);
} }









if(hrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+20;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+rayA);}}
if(hrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-20;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+rayA);}}


if(vrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))+20;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+20;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+rayA);}}
if(vrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);
posx=parseInt(calc.getAttribute("x1"))-20;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-20;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+rayA);}}


if(tabset==1&&moins==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))-20; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))-20; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))-20; calc.setAttribute("y2",""+yfin);}}

 }

if(tabset==1&&ajt==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+20; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))+20; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+20; calc.setAttribute("y2",""+yfin);}} }







if(ctrlptset==1&&moins==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-20;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-20;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-20;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-20;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&moins==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
xfin=pathtab[2][0]-20;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
yfin=pathtab[2][1]-20;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }}







if(ctrlptset==1&&ajt==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+20;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+20;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+20;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+20;pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&ajt==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+20;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+20;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}}












if(pathdef==1&&moins==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-20;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-20;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]-20;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]-20;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]-20;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]-20;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]-20;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]-20;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-20;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-20;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]-20;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]-20;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}


 }

if(pathdef==1&&ajt==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+20;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+20;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+20;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+20;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}


if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]+20;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]+20;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]+20;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]+20;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+20;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+20;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]+20;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]+20;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
 }




if((limsup==1||inflim==1)&&ajt==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))+20;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))+20;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr)); if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))+20; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+20;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))+20;calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+20;calc.setAttribute("y2",""+yfin);}
}}



if((limsup==1||inflim==1)&&moins==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))-20;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))-20;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr));    if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))-20; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-20;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))-20;calc.setAttribute("y1",""+ydebut);
yfin=parseInt(calc.getAttribute("y2"))-20;calc.setAttribute("y2",""+yfin);}
}}







}); }



if(j==9){ elm.addEventListener('click',()=>{ if(gnlYset==1&&ajt==1){gnrlY=gnrlY+2;}if(gnlYset==1&&moins==1){gnrlY=gnrlY-2;}
if(strkwidthset==1&&ajt==1&&calc!=0){
strwidth=parseInt(calc.getAttribute("stroke-width"))+2;calc.setAttribute("stroke-width",""+strwidth);}
if(strkwidthset==1&&moins==1&&calc!=0){ 
strwidth=parseInt(calc.getAttribute("stroke-width"))-2; calc.setAttribute("stroke-width",""+strwidth);}

if(crcl==1&&ajt==1){ if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))+2;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))+2;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))+2;calc.setAttribute("r",""+rayA);}}
if(crcl==1&&moins==1){if(setx==1){calc=document.querySelector("#rod"+obj.cerclass);posx=parseInt(calc.getAttribute("cx"))-2;calc.setAttribute("cx",""+posx);}
if(sety==1){calc=document.querySelector("#rod"+obj.cerclass);posy=parseInt(calc.getAttribute("cy"))-2;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#rod"+obj.cerclass);rayA=parseInt(calc.getAttribute("r"))-2;calc.setAttribute("r",""+rayA);}}

if(drwtx==1&&ajt==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);
posx=parseInt(calc.getAttribute("x"))+2;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))+2;
calc.setAttribute("y",""+posy);}
if(ftszset==1){fontsz=fontsz+2;calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))+2;calc.setAttribute("font-size",""+fontsz);}}
if(drwtx==1&&moins==1){if(setx==1){calc=document.querySelector("#ltt"+obj.txclass);posx=parseInt(calc.getAttribute("x"))-2;calc.setAttribute("x",""+posx);}
if(sety==1){calc=document.querySelector("#ltt"+obj.txclass);posy=parseInt(calc.getAttribute("y"))-2;calc.setAttribute("y",""+posy);}
if(ftszset==1){calc=document.querySelector("#ltt"+obj.txclass);fontsz=parseInt(calc.getAttribute("font-size"))-2;calc.setAttribute("font-size",""+fontsz);}}

if(ligndef==1&&moins==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass);xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-2;calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);} }

if(ligndef==1&&ajt==1){ if(startXset==1){calc=document.querySelector("#drt"+obj.lineclass); xdebut=parseInt(calc.getAttribute("x1"))+2;calc.setAttribute("x1",""+xdebut);}
if(startYset==1){calc=document.querySelector("#drt"+obj.lineclass);ydebut=parseInt(calc.getAttribute("y1"))+2; calc.setAttribute("y1",""+ydebut);}
if(endXset==1){calc=document.querySelector("#drt"+obj.lineclass); xfin=parseInt(calc.getAttribute("x2"))+2; calc.setAttribute("x2",""+xfin);}
if(endYset==1){calc=document.querySelector("#drt"+obj.lineclass);yfin=parseInt(calc.getAttribute("y2"))+2; calc.setAttribute("y2",""+yfin);} }

if(elps==1&&ajt==1){if(setx==1){;calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))+2; calc.setAttribute("cx",""+posx);} 
if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))+2;calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))+2;calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))+2; calc.setAttribute("ry",""+rayB);} }
if(elps==1&&moins==1){if(setx==1){calc=document.querySelector("#elip"+obj.ovaclass);posx=parseInt(calc.getAttribute("cx"))-2; calc.setAttribute("cx",""+posx);}
 if(sety==1){calc=document.querySelector("#elip"+obj.ovaclass); posy=parseInt(calc.getAttribute("cy"))-2; calc.setAttribute("cy",""+posy);}
if(rayset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayA=parseInt(calc.getAttribute("rx"))-2; calc.setAttribute("rx",""+rayA);}
if(rayBset==1){calc=document.querySelector("#elip"+obj.ovaclass);rayB=parseInt(calc.getAttribute("ry"))-2; calc.setAttribute("ry",""+rayB);} }

if(recdf==1&&ajt==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))+2; calc.setAttribute("x",""+posx);} 
if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))+2;  calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))+2; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))+2;  calc.setAttribute("height",""+rayB);} }
if(recdf==1&&moins==1){if(setx==1){calc=document.querySelector("#rct"+obj.rectclass);posx=parseInt(calc.getAttribute("x"))-2; calc.setAttribute("x",""+posx);}
 if(sety==1){calc=document.querySelector("#rct"+obj.rectclass); posy=parseInt(calc.getAttribute("y"))-2; calc.setAttribute("y",""+posy);}
if(rayset==1){calc=document.querySelector("#rct"+obj.rectclass);rayA=parseInt(calc.getAttribute("width"))-2; calc.setAttribute("width",""+rayA);}
if(rayBset==1){calc=document.querySelector("#rct"+obj.rectclass);rayB=parseInt(calc.getAttribute("height"))-2; calc.setAttribute("height",""+rayB);} }



if(rootdf==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))-2;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); yfin=parseInt(calc.getAttribute("y2"))-2;
calc.setAttribute("y2",""+yfin);
}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);
} }


if(rootdf==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);

}
if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass); 
yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
 yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);
ydebut=parseInt(calc.getAttribute("y1"))+2;calc.setAttribute("y1",""+ydebut);
calc=document.querySelector("#drt"+(obj.lineclass-2)); 
yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);

}
if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-1));xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);
} }







if(rowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))-2;calc.setAttribute("x1",""+xdebut);
} }


if(rowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));xdebut=parseInt(calc.getAttribute("x1"))+2;calc.setAttribute("x1",""+xdebut);
} }





if(vrowset==1&&moins==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);

}

if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));ydebut=parseInt(calc.getAttribute("y1"))-2;calc.setAttribute("y1",""+ydebut);
} }


if(vrowset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+(obj.lineclass-2));
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+(obj.lineclass-1));
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);
calc=document.querySelector("#drt"+obj.lineclass);
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);

}
if(sety==1){calc=document.querySelector("#drt"+(obj.lineclass-2)); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+(obj.lineclass-1)); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);
calc=document.querySelector("#drt"+obj.lineclass); ydebut=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+ydebut);yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);

}


if(rayBset==1){calc=document.querySelector("#drt"+(obj.lineclass-2));ydebut=parseInt(calc.getAttribute("y1"))+2;calc.setAttribute("y1",""+ydebut);
} }




if(hrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);posx=parseInt(calc.getAttribute("x1"))+2;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+rayA);}}
if(hrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);posx=parseInt(calc.getAttribute("x1"))-2;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+rayA);}}


if(vrset==1&&ajt==1){ if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);posx=parseInt(calc.getAttribute("x1"))+2;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))+2;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+rayA);}}
if(vrset==1&&moins==1){if(setx==1){calc=document.querySelector("#drt"+obj.lineclass);posx=parseInt(calc.getAttribute("x1"))-2;
calc.setAttribute("x1",""+posx);posx=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+posx);}

if(sety==1){calc=document.querySelector("#drt"+obj.lineclass);posy=parseInt(calc.getAttribute("y1"))-2;
calc.setAttribute("y1",""+posy);posy=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+posy);}

if(rayset==1){calc=document.querySelector("#drt"+obj.lineclass);
rayA=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+rayA);}}


if(tabset==1&&moins==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))-2; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))-2; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))-2; calc.setAttribute("y2",""+yfin);}}

 }

if(tabset==1&&ajt==1){ if(setx==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+2; calc.setAttribute("x2",""+xfin);}}
if(sety==1){for(let d=0;d<HLnb+VLnb+DBLcount;d++){calc=document.querySelector("#drt"+(obj.lineclass-d));
ydebut=parseInt(calc.getAttribute("y1"))+2; calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+2; calc.setAttribute("y2",""+yfin);}} }

if(ctrlptset==1&&moins==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-2;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-2;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]-2;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]-2;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&moins==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
xfin=pathtab[2][0]-2;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);
yfin=pathtab[2][1]-2;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }}







if(ctrlptset==1&&ajt==1){if(rayset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+2;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}

if(rayBset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+2;
pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }

if(rayset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[1][0]+2;pathtab[1][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[1][1]+2;pathtab[1][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
}

if(ctrl2ptset==1&&ajt==1){if(rayset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+2;pathtab[2][0]=xfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(rayBset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+2;pathtab[2][1]=yfin; 
 calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}}












if(pathdef==1&&moins==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-2;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-2;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]-2;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]-2;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]-2;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]-2;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]-2;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]-2;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]-2;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]-2;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]-2;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]-2;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}


 }

if(pathdef==1&&ajt==1){ if(startXset==1&&qdrpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+2;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(startYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+2;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]); }
if(endXset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[2][0]+2;pathtab[2][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}
if(endYset==1&&qdrpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[2][1]+2;pathtab[2][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);}


if(setx==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][0]=pathtab[i][0]+2;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(setx==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][0]=pathtab[i][0]+2;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}

if(sety==1&&qdrpath==1){for(let i=0;i<3;i++){pathtab[i][1]=pathtab[i][1]+2;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"q"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]);
}
if(sety==1&&cubpath==1){for(let i=0;i<4;i++){pathtab[i][1]=pathtab[i][1]+2;}
calc=document.querySelector("#chem"+obj.pathclass);
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);
}



if(startXset==1&&cubpath==1){
calc=document.querySelector("#chem"+obj.pathclass);xdebut=pathtab[0][0]+2;pathtab[0][0]=xdebut; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(startYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);ydebut=pathtab[0][1]+2;pathtab[0][1]=ydebut;  
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]); }
if(endXset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);xfin=pathtab[3][0]+2;pathtab[3][0]=xfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
if(endYset==1&&cubpath==1){calc=document.querySelector("#chem"+obj.pathclass);yfin=pathtab[3][1]+2;pathtab[3][1]=yfin; 
calc.setAttribute("d","M"+pathtab[0][0]+" "+pathtab[0][1]+" "+"c"+" "+pathtab[1][0]+" "+pathtab[1][1]+","+
" "+pathtab[2][0]+" "+pathtab[2][1]+","+" "+pathtab[3][0]+" "+pathtab[3][1]);}
 }




if((limsup==1||inflim==1)&&ajt==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))+2;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))+2;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr)); if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))+2; calc.setAttribute("x1",""+xdebut);
 xfin=parseInt(calc.getAttribute("x2"))+2;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))+2;calc.setAttribute("y1",""+ydebut);
 yfin=parseInt(calc.getAttribute("y2"))+2;calc.setAttribute("y2",""+yfin);}
}}



if((limsup==1||inflim==1)&&moins==1){for(let kr=0;kr<limnb;kr++){calc=document.querySelector("#ltt"+(obj.txclass-kr));
 if(setx==1){posx=parseInt(calc.getAttribute("x"))-2;calc.setAttribute("x",""+posx);}
if(sety==1){posy=parseInt(calc.getAttribute("y"))-2;
calc.setAttribute("y",""+posy);} }

for(let kr=0;kr<3;kr++){ calc=document.querySelector("#drt"+(obj.lineclass-kr));    if(setx==1){
xdebut=parseInt(calc.getAttribute("x1"))-2; calc.setAttribute("x1",""+xdebut);
xfin=parseInt(calc.getAttribute("x2"))-2;calc.setAttribute("x2",""+xfin);}
if(sety==1){ 
ydebut=parseInt(calc.getAttribute("y1"))-2;calc.setAttribute("y1",""+ydebut);
yfin=parseInt(calc.getAttribute("y2"))-2;calc.setAttribute("y2",""+yfin);}
}}









});}


}


document.querySelector("#dvc").addEventListener('click',()=>{
indice=document.querySelector("#ltt"+obj.txclass);indice.setAttribute("y",""+(parseInt(indice.getAttribute("y"))+20));
 indice.setAttribute("x","10"); });

for(let k=11;k<=173;k++){selec="#pg"+k;elm=document.querySelector(selec); 
if(k==11){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg11");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==12){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg12");phrase=phrase+lttr.textContent; calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==13){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg13");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==14){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg14");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==15){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg15");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==16){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg16");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==17){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg17");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==18){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg18");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==19){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg19");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==20){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg20");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==21){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg21");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==22){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg22");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==23){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg23");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==24){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg24");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==25){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg25");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==26){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg26");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==27){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg27");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==28){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg28");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==29){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg29");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==30){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg30");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==31){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg31");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==32){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg32");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==33){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg33");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==34){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg34");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==35){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg35");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==36){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg36");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==37){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg37");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==38){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg38");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==39){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg39");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==40){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg40");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==41){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg41");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==42){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg42");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==43){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg43");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==44){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg44");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==45){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg45");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==46){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg46");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==47){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg47");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==48){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg48");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==49){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg49");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==50){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg50");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==51){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg51");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==52){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg52");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==53){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg53");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==54){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg54");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==55){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg55");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==56){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg56");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==57){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg57");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==58){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg58");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==59){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg59");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==60){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg60");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==61){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg61");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==62){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg62");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==63){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg63");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==64){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg64");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==65){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg65");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==66){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg66");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==67){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg67");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==68){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg68");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==69){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg69");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==70){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg70");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==71){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg71");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==72){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg72");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==73){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg73");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==74){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg74");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==75){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg75");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==76){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg76");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==77){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg77");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==78){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg78");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==79){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg79");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==80){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg80");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==81){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg81");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==82){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg82");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==83){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg83");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==84){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg84");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==85){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg85");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==86){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg86");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==87){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg87");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==88){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg88");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==89){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg89");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==90){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg90");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==91){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg91");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==92){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg92");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==93){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg93");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==94){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg94");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==95){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg95");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==96){elm.addEventListener('click',()=>{if(drwtx==1)
{let lttr=document.querySelector("#pg96");phrase=phrase+lttr.textContent;
calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}


if(k==97){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg97");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==98){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg98");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==99){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg99");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==100){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg100");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==101){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg101");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==102){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg102");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==103){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg103");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==104){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg104");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==105){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg105");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==106){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg106");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==107){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg107");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==108){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg108");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==109){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg109");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==110){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg110");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==111){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg111");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==112){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg112");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==113){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg113");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==114){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg114");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==115){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg115");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==116){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg116");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==117){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg117");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==118){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg118");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==119){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg119");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==120){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg120");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==121){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg121");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==122){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg122");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}

if(k==123){elm.addEventListener('click',()=>{
if(drwtx==1){let lttr=document.querySelector("#pg123");
phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);
calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==124){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg124");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==125){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg125");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==126){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg126");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==127){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg127");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==128){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg128");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==129){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg129");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==130){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg130");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==131){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg131");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==132){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg132");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==133){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg133");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==134){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg134");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==135){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg135");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==136){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg136");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==137){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg137");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==138){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg138");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==139){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg139");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==140){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg140");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==141){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg141");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==142){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg142");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==143){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg143");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==144){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg144");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==145){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg145");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==146){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg146");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==147){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg147");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==148){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg148");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==149){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg149");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==150){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg150");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==151){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg151");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==152){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg152");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==153){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg153");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==154){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg154");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==155){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg155");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}
if(k==156){elm.addEventListener('click',()=>{if(drwtx==1){phrase=phrase+s[1];calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=(calc.textContent)+s[1];}});}

if(k==157){elm.addEventListener('click',()=>{imsv=""+(parseInt(imsv)+1);event.currentTarget.textContent=imsv;});}
if(k==158){elm.addEventListener('click',()=>{rang=""+(parseInt(rang)+1);event.currentTarget.textContent=rang;});}
if(k==159){elm.addEventListener('click',()=>{exo=1; prop=0;document.querySelector("#sv").style.height="500px";
 document.querySelector("#sv").style.width="800px";   });}

if(k==160){elm.addEventListener('click',()=>{prop=1;exo=0;document.querySelector("#sv").style.height="100px";
 document.querySelector("#sv").style.width="250px";});}
if(k==161){elm.addEventListener('click',()=>{calc=document.querySelector("#ltt"+obj.txclass);mot=calc.textContent;
 calc.textContent="";for(let t=0;t<mot.length-1;t++){calc.textContent=calc.textContent+mot[t];}});}
if(k==162){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg162");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}


if(k==163){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg163");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}

if(k==164){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#pg164");phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);calc.textContent=calc.textContent+lttr.textContent;}});}

if(k==165){elm.addEventListener('click',()=>{document.querySelector("#cod").textContent="";cod="ns="+'"'+ns+'"'+";"; });}

if(k==166){elm.addEventListener('click',()=>{sqrtset(); crcl=0;drwtx=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=1;ctrlpt2set=0;tabset=0;rowset=0;vrowset=0;hrset=0;vrset=0;inflim=0;limsup=0; });}

if(k==167){elm.addEventListener('click',()=>{arrow(); crcl=0;drwtx=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=1;ctrlpt2set=0;tabset=0;vrowset=0;hrset=0;vrset=0;inflim=0;limsup=0; });}

if(k==168){elm.addEventListener('click',()=>{crthl(); crcl=0;drwtx=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=1;vrset=0;ctrlpt2set=0;
tabset=0;vrowset=0;inflim=0;limsup=0; });}

if(k==169){elm.addEventListener('click',()=>{crtvl(); crcl=0;drwtx=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=1;ctrlpt2set=0;tabset=0;vrowset=0;inflim=0;limsup=0; });}


if(k==171){elm.addEventListener('click',()=>{varrow(); crcl=0;drwtx=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;
sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;vrowset=1;ctrlpt2set=0;tabset=0;inflim=0;limsup=0; });}

if(k==172){elm.addEventListener('click',()=>{dash=1;});}

if(k==173){elm.addEventListener('click',()=>{
if(drwtx==1){let lttr=document.querySelector("#pg173");
phrase=phrase+lttr.textContent;calc=document.querySelector("#ltt"+obj.txclass);
calc.textContent=calc.textContent+lttr.textContent;}});}
}

for(let n=1;n<225;n++){selec="#mo"+n;elm=document.querySelector(selec);
if(n==1){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo1");phrase=phrase+lttr.textContent;}});}
if(n==2){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo2");phrase=phrase+lttr.textContent;}});}
if(n==3){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo3");phrase=phrase+lttr.textContent;}});}
if(n==4){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo4");phrase=phrase+lttr.textContent;}});}
if(n==5){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo5");phrase=phrase+lttr.textContent;}});}
if(n==6){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo6");phrase=phrase+lttr.textContent;}});}
if(n==7){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo7");phrase=phrase+lttr.textContent;}});}
if(n==8){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo8");phrase=phrase+lttr.textContent;}});}
if(n==9){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo9");phrase=phrase+lttr.textContent;}});}
if(n==10){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo10");phrase=phrase+lttr.textContent;}});}
if(n==11){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo11");phrase=phrase+lttr.textContent;}});}
if(n==12){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo12");phrase=phrase+lttr.textContent;}});}
if(n==13){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo13");phrase=phrase+lttr.textContent;}});}
if(n==14){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo14");phrase=phrase+lttr.textContent;}});}
if(n==15){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo15");phrase=phrase+lttr.textContent;}});}
if(n==16){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo16");phrase=phrase+lttr.textContent;}});}
if(n==17){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo17");phrase=phrase+lttr.textContent;}});}
if(n==18){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo18");phrase=phrase+lttr.textContent;}});}
if(n==19){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo19");phrase=phrase+lttr.textContent;}});}
if(n==20){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo20");phrase=phrase+lttr.textContent;}});}
if(n==21){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo21");phrase=phrase+lttr.textContent;}});}
if(n==22){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo22");phrase=phrase+lttr.textContent;}});}
if(n==23){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo23");phrase=phrase+lttr.textContent;}});}
if(n==24){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo24");phrase=phrase+lttr.textContent;}});}




if(n==25){elm.addEventListener('click',()=>{drwtx=0;crcl=0;ligndef=0;recdf=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startXset=0;startYset=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;elps=0;tabset=1;inflim=0;limsup=0;
crttabl(HLnb,VLnb,fstHL,HLdst,fstVL,VLdst,DBL);});
}


if(n==26){elm.addEventListener('click',()=>{HLnb++;
event.currentTarget.textContent=""+HLnb;});}


if(n==27){elm.addEventListener('click',()=>{VLnb++;
event.currentTarget.textContent=""+VLnb;});}


if(n==28){elm.addEventListener('click',()=>{fstHL=fstHL+10;
event.currentTarget.textContent=""+fstHL;});}


if(n==29){elm.addEventListener('click',()=>{HLdst=HLdst+10;
event.currentTarget.textContent=""+HLdst;});}


if(n==37){elm.addEventListener('click',()=>{fstVL=fstVL+10;
event.currentTarget.textContent=""+fstVL;});}


if(n==31){elm.addEventListener('click',()=>{VLdst=VLdst+10;
event.currentTarget.textContent=""+VLdst;});}


if(n==32){elm.addEventListener('click',()=>{DBL=1;});}


if(n==33){elm.addEventListener('click',()=>{DBLpos1++;
event.currentTarget.textContent=""+DBLpos1;});}


if(n==34){elm.addEventListener('click',()=>{DBLpos2++;
event.currentTarget.textContent=""+DBLpos2;});}


if(n==35){elm.addEventListener('click',()=>{DBLcount++;
DBLtab[2*(DBLcount-1)+1]=DBLpos1;DBLtab[2*(DBLcount-1)+2]=DBLpos2;
document.querySelector("#mo33").textContent="dblpos1";
document.querySelector("#mo34").textContent="dblpos2";DBLpos1=0;DBLpos2=0;});}


if(n==36){elm.addEventListener('click',()=>{tabset=0;DBL=0;document.querySelector("#mo26").textContent="HLnb";
HLnb=0;document.querySelector("#mo27").textContent="VLnb";VLnb=0;
document.querySelector("#mo28").textContent="fstHL";fstHL=0;document.querySelector("#mo29").textContent="Hlign";HLdst=0;
document.querySelector("#mo37").textContent="fstVL";fstVL=0;
 document.querySelector("#mo31").textContent="Vlign";VLdst=0;for(let i=1;i<=DBLcount;i++){DBLtab[2*(i-1)+1]=0;DBLtab[2*(i-1)+2]=0;}
 });}



if(n==38){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo38");phrase=phrase+lttr.textContent;}});}
if(n==39){elm.addEventListener('click',()=>{qdrpath=1;cubpath=0;});}
if(n==40){elm.addEventListener('click',()=>{cubpath=1;qdrpath=0;});}
if(n==41){elm.addEventListener('click',()=>{qdrpath=0;cubpath=0;});}
if(n==42){elm.addEventListener('click',()=>{

if(pathnb>=1){ if(qdrpath==1){pathnb++;flwpath[pathnb-1]=1;countpath=countpath+1;pathtab[countpath-1][0]=300;pathtab[countpath-1][1]=-60;curv=document.querySelector("#chem"+obj.pathclass); pathtab[countpath-1][1]=50;curv.setAttribute("d",curv.getAttribute("d")+" "+"t"+" "+pathtab[countpath-1][0]+" "+pathtab[countpath-1][1]);}
  if(cubpath==1){pathnb++;flwpath[pathnb-1]=2; countpath=countpath+2;pathtab[countpath-2][0]=200;pathtab[countpath-2][1]=60;
pathtab[countpath-1][0]=250;pathtab[countpath-1][1]=100;
curv=document.querySelector("#chem"+obj.pathclass);curv.setAttribute("d",curv.getAttribute("d")+" "+"c"+" "+(pathtab[countpath-3][0]-pathtab[countpath-4][0])+" "+(pathtab[countpath-3][1]-pathtab[countpath-4][1])+","+" "+pathtab[countpath-2][0]+" "+pathtab[countpath-2][1]+","+" "+pathtab[countpath-1][0]+" "+pathtab[countpath-1][1]);}
   }
});}
if(n==43){elm.addEventListener('click',()=>{inflim=1;limsup=0;limcrt(inflim,limsup,Var,varind,indc,xtend);
crcl=0;drwtx=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;ctrlpt2set=0;tabset=0;vrowset=0;});}
if(n==44){elm.addEventListener('click',()=>{limsup=1;inflim=0;limcrt(inflim,limsup,Var,varind,indc,xtend);
crcl=0;drwtx=0;ligndef=0;recdf=0;elps=0;pathdef=0;setx=0;gnlYset=0;sety=0;rayset=0;rayBset=0;
startX=0;startY=0;endXset=0;endYset=0;couleurdf=0;setcenter=0;ftszset=0;ctrlptset=0;fillset=0;strkset=0;strkwidthset=0;
rayA=0;rayB=0; xdebut=0; xfin=0; ydebut=0; yfin=0;  posx=0; posy=0; fontsz=0; coulr="";
phrase="";fontfamly=""; strwidth=0;calc=0;rootdf=0;rowset=0;hrset=0;vrset=0;ctrlpt2set=0;tabset=0;vrowset=0;});}
if(n==45){elm.addEventListener('click',()=>{varset=1;varindset=0;xtset=0;});}
if(n==46){elm.addEventListener('click',()=>{xtset=1;varset=0;varindset=0;});}
if(n==47){elm.addEventListener('click',()=>{varindset=1;varset=0;xtset=0;varind=1;});}
if(n==48){elm.addEventListener('click',()=>{if(varset==1){
let lttr=event.currentTarget.textContent;Var=Var+lttr;}
  if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;} });}
if(n==49){elm.addEventListener('click',()=>{if(varset==1){
let lttr=event.currentTarget.textContent;Var=Var+lttr;}
  if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==50){elm.addEventListener('click',()=>{if(varset==1){
let lttr=event.currentTarget.textContent;Var=Var+lttr;}
  if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==51){elm.addEventListener('click',()=>{if(varset==1){
let lttr=event.currentTarget.textContent;Var=Var+lttr;}
  if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==52){elm.addEventListener('click',()=>{if(varset==1){
let lttr=event.currentTarget.textContent;Var=Var+lttr;}
  if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==53){elm.addEventListener('click',()=>{if(varset==1){
let lttr=event.currentTarget.textContent;Var=Var+lttr;}
  if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==54){elm.addEventListener('click',()=>{
  if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==55){elm.addEventListener('click',()=>{
  if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==56){elm.addEventListener('click',()=>{if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}

if(n==57){elm.addEventListener('click',()=>{if(xtset==1){infsup=0;limnb--;
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==58){elm.addEventListener('click',()=>{if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==59){elm.addEventListener('click',()=>{inflim=0;limsup=0;indc="";limnb=4;varset=0;Var="";
 varindset=0;xtend="";xtset=0; infsup=1;});}
if(n==60){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==61){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==62){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==63){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==64){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==65){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==66){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==67){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==68){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==69){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==70){elm.addEventListener('click',()=>{if(varindset==1){
let lttr=event.currentTarget.textContent;indc=indc+lttr;} 
  if(xtset==1){
let lttr=event.currentTarget.textContent;xtend=xtend+lttr;}});}
if(n==71){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo71");phrase=phrase+lttr.textContent;}});}
if(n==72){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo72");phrase=phrase+lttr.textContent;}});}
if(n==73){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo73");phrase=phrase+lttr.textContent;}});}
if(n==74){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo74");phrase=phrase+lttr.textContent;}});}
if(n==75){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo75");phrase=phrase+lttr.textContent;}});}
if(n==76){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo76");phrase=phrase+lttr.textContent;}});}
if(n==77){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo77");phrase=phrase+lttr.textContent;}});}
if(n==78){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo78");phrase=phrase+lttr.textContent;}});}
if(n==79){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo79");phrase=phrase+lttr.textContent;}});}
if(n==80){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo80");phrase=phrase+lttr.textContent;}});}
if(n==81){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo81");phrase=phrase+lttr.textContent;}});}
if(n==82){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo82");phrase=phrase+lttr.textContent;}});}
if(n==83){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo83");phrase=phrase+lttr.textContent;}});}
if(n==84){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo84");phrase=phrase+lttr.textContent;}});}
if(n==85){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo85");phrase=phrase+lttr.textContent;}});}
if(n==86){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo86");phrase=phrase+lttr.textContent;}});}
if(n==87){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo87");phrase=phrase+lttr.textContent;}});}
if(n==88){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo88");phrase=phrase+lttr.textContent;}});}
if(n==89){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo89");phrase=phrase+lttr.textContent;}});}
if(n==90){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo90");phrase=phrase+lttr.textContent;}});}
if(n==91){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo91");phrase=phrase+lttr.textContent;}});}
if(n==92){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo92");phrase=phrase+lttr.textContent;}});}
if(n==93){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo93");phrase=phrase+lttr.textContent;}});}
if(n==94){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo94");phrase=phrase+lttr.textContent;}});}
if(n==95){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo95");phrase=phrase+lttr.textContent;}});}
if(n==96){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo96");phrase=phrase+lttr.textContent;}});}
if(n==97){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo97");phrase=phrase+lttr.textContent;}});}
if(n==98){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo98");phrase=phrase+lttr.textContent;}});}
if(n==99){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo99");phrase=phrase+lttr.textContent;}});}
if(n==100){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo100");phrase=phrase+lttr.textContent;}});}
if(n==101){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo101");phrase=phrase+lttr.textContent;}});}
if(n==102){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo112");phrase=phrase+lttr.textContent;}});}
if(n==103){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo103");phrase=phrase+lttr.textContent;}});}
if(n==104){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo104");phrase=phrase+lttr.textContent;}});}
if(n==105){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo105");phrase=phrase+lttr.textContent;}});}
if(n==106){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo106");phrase=phrase+lttr.textContent;}});}
if(n==107){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo107");phrase=phrase+lttr.textContent;}});}
if(n==108){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo108");phrase=phrase+lttr.textContent;}});}
if(n==109){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo109");phrase=phrase+lttr.textContent;}});}
if(n==110){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo110");phrase=phrase+lttr.textContent;}});}
if(n==111){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo111");phrase=phrase+lttr.textContent;}});}
if(n==112){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo112");phrase=phrase+lttr.textContent;}});}
if(n==113){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo113");phrase=phrase+lttr.textContent;}});}
if(n==114){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo114");phrase=phrase+lttr.textContent;}});}
if(n==115){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo115");phrase=phrase+lttr.textContent;}});}
if(n==116){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo116");phrase=phrase+lttr.textContent;}});}
if(n==117){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo117");phrase=phrase+lttr.textContent;}});}
if(n==118){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo118");phrase=phrase+lttr.textContent;}});}
if(n==119){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo119");phrase=phrase+lttr.textContent;}});}
if(n==120){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo120");phrase=phrase+lttr.textContent;}});}
if(n==121){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo121");phrase=phrase+lttr.textContent;}});}
if(n==122){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo122");phrase=phrase+lttr.textContent;}});}
if(n==123){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo123");phrase=phrase+lttr.textContent;}});}
if(n==124){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo124");phrase=phrase+lttr.textContent;}});}
if(n==125){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo125");phrase=phrase+lttr.textContent;}});}
if(n==126){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo126");phrase=phrase+lttr.textContent;}});}
if(n==127){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo127");phrase=phrase+lttr.textContent;}});}
if(n==128){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo128");phrase=phrase+lttr.textContent;}});}
if(n==129){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo129");phrase=phrase+lttr.textContent;}});}
if(n==130){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo130");phrase=phrase+lttr.textContent;}});}
if(n==131){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo131");phrase=phrase+lttr.textContent;}});}
if(n==132){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo132");phrase=phrase+lttr.textContent;}});}
if(n==133){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo133");phrase=phrase+lttr.textContent;}});}
if(n==134){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo134");phrase=phrase+lttr.textContent;}});}
if(n==135){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo135");phrase=phrase+lttr.textContent;}});}
if(n==136){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo136");phrase=phrase+lttr.textContent;}});}
if(n==137){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo137");phrase=phrase+lttr.textContent;}});}
if(n==138){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo138");phrase=phrase+lttr.textContent;}});}
if(n==139){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo139");phrase=phrase+lttr.textContent;}});}
if(n==140){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo140");phrase=phrase+lttr.textContent;}});}
if(n==141){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo141");phrase=phrase+lttr.textContent;}});}
if(n==142){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo142");phrase=phrase+lttr.textContent;}});}
if(n==143){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo143");phrase=phrase+lttr.textContent;}});}
if(n==144){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo144");phrase=phrase+lttr.textContent;}});}
if(n==145){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo145");phrase=phrase+lttr.textContent;}});}
if(n==146){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo146");phrase=phrase+lttr.textContent;}});}
if(n==147){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo147");phrase=phrase+lttr.textContent;}});}
if(n==148){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo148");phrase=phrase+lttr.textContent;}});}
if(n==149){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo149");phrase=phrase+lttr.textContent;}});}
if(n==150){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo150");phrase=phrase+lttr.textContent;}});}
if(n==151){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo151");phrase=phrase+lttr.textContent;}});}
if(n==152){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo152");phrase=phrase+lttr.textContent;}});}
if(n==153){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo153");phrase=phrase+lttr.textContent;}});}
if(n==154){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo154");phrase=phrase+lttr.textContent;}});}
if(n==155){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo155");phrase=phrase+lttr.textContent;}});}
if(n==156){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo156");phrase=phrase+lttr.textContent;}});}
if(n==157){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo157");phrase=phrase+lttr.textContent;}});}
if(n==158){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo158");phrase=phrase+lttr.textContent;}});}
if(n==159){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo159");phrase=phrase+lttr.textContent;}});}
if(n==160){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo160");phrase=phrase+lttr.textContent;}});}
if(n==161){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo161");phrase=phrase+lttr.textContent;}});}
if(n==162){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo162");phrase=phrase+lttr.textContent;}});}
if(n==163){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo163");phrase=phrase+lttr.textContent;}});}
if(n==164){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo164");phrase=phrase+lttr.textContent;}});}
if(n==165){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo165");phrase=phrase+lttr.textContent;}});}
if(n==166){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo166");phrase=phrase+lttr.textContent;}});}
if(n==167){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo167");phrase=phrase+lttr.textContent;}});}
if(n==168){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo168");phrase=phrase+lttr.textContent;}});}
if(n==169){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo169");phrase=phrase+lttr.textContent;}});}
if(n==170){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo170");phrase=phrase+lttr.textContent;}});}
if(n==171){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo171");phrase=phrase+lttr.textContent;}});}
if(n==172){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo172");phrase=phrase+lttr.textContent;}});}
if(n==173){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo173");phrase=phrase+lttr.textContent;}});}
if(n==174){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo174");phrase=phrase+lttr.textContent;}});}
if(n==175){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo175");phrase=phrase+lttr.textContent;}});}
if(n==176){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo176");phrase=phrase+lttr.textContent;}});}
if(n==177){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo177");phrase=phrase+lttr.textContent;}});}
if(n==178){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo178");phrase=phrase+lttr.textContent;}});}
if(n==179){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo179");phrase=phrase+lttr.textContent;}});}
if(n==180){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo180");phrase=phrase+lttr.textContent;}});}
if(n==181){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo181");phrase=phrase+lttr.textContent;}});}
if(n==182){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo182");phrase=phrase+lttr.textContent;}});}
if(n==183){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo183");phrase=phrase+lttr.textContent;}});}
if(n==184){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo184");phrase=phrase+lttr.textContent;}});}
if(n==185){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo185");phrase=phrase+lttr.textContent;}});}
if(n==186){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo186");phrase=phrase+lttr.textContent;}});}
if(n==187){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo187");phrase=phrase+lttr.textContent;}});}
if(n==188){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo188");phrase=phrase+lttr.textContent;}});}
if(n==189){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo189");phrase=phrase+lttr.textContent;}});}
if(n==190){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo190");phrase=phrase+lttr.textContent;}});}
if(n==191){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo191");phrase=phrase+lttr.textContent;}});}
if(n==192){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo192");phrase=phrase+lttr.textContent;}});}
if(n==193){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo193");phrase=phrase+lttr.textContent;}});}
if(n==194){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo194");phrase=phrase+lttr.textContent;}});}
if(n==195){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo195");phrase=phrase+lttr.textContent;}});}
if(n==196){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo196");phrase=phrase+lttr.textContent;}});}
if(n==197){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo197");phrase=phrase+lttr.textContent;}});}
if(n==198){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo198");phrase=phrase+lttr.textContent;}});}
if(n==199){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo199");phrase=phrase+lttr.textContent;}});}
if(n==200){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo200");phrase=phrase+lttr.textContent;}});}
if(n==201){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo201");phrase=phrase+lttr.textContent;}});}
if(n==202){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo202");phrase=phrase+lttr.textContent;}});}
if(n==203){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo203");phrase=phrase+lttr.textContent;}});}
if(n==204){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo204");phrase=phrase+lttr.textContent;}});}
if(n==205){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo205");phrase=phrase+lttr.textContent;}});}
if(n==206){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo206");phrase=phrase+lttr.textContent;}});}
if(n==207){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo207");phrase=phrase+lttr.textContent;}});}
if(n==208){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo208");phrase=phrase+lttr.textContent;}});}
if(n==209){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo209");phrase=phrase+lttr.textContent;}});}
if(n==210){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo211");phrase=phrase+lttr.textContent;}});}
if(n==211){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo212");phrase=phrase+lttr.textContent;}});}
if(n==212){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo213");phrase=phrase+lttr.textContent;}});}
if(n==213){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo214");phrase=phrase+lttr.textContent;}});}
if(n==214){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo215");phrase=phrase+lttr.textContent;}});}
if(n==215){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo216");phrase=phrase+lttr.textContent;}});}
if(n==216){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo217");phrase=phrase+lttr.textContent;}});}
if(n==217){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo218");phrase=phrase+lttr.textContent;}});}
if(n==218){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo219");phrase=phrase+lttr.textContent;}});}
if(n==219){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo220");phrase=phrase+lttr.textContent;}});}
if(n==220){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo221");phrase=phrase+lttr.textContent;}});}
if(n==221){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo222");phrase=phrase+lttr.textContent;}});}
if(n==222){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo223");phrase=phrase+lttr.textContent;}});}
if(n==223){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo224");phrase=phrase+lttr.textContent;}});}
if(n==224){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo225");phrase=phrase+lttr.textContent;}});}
if(n==225){elm.addEventListener('click',()=>{if(drwtx==1){let lttr=document.querySelector("#mo1");phrase=phrase+lttr.textContent;}});}


}

};

 </script>

<div id="code"><p id="cod"></p> </div>
<div id="col1"><p id="pcol1">rgba(0%,0%,100%,1)</p></div>
<div id="col2"><p id="pcol2">rgba(100%,0%,0%,1)</p></div>
<div id="col3"><p id="pcol3">rgba(0%,100%,0%,1)</p></div>
<div id="col4"><p id="pcol4">rgba(100%,100%,0%,1)</p></div>
<div id="col5"><p id="pcol5">rgba(80%,0%,100%,1)</p></div>
<div id="col6"><p id="pcol6">rgba(0%,80%,100%,1)</p></div>
<div id="col7"><p id="pcol7">rgba(80%,50%,30%,1)</p></div>
<div id="col8"><p id="pcol8">rgba(100%,55%,0%,1)</p></div>
<div id="col9"><p id="pcol9">rgba(100%,100%,100%,1)</p></div>


<div id="vg"><svg id="sv" ></svg></div>
<div id="vide" class="vd"><p id="pvd">espace vide</p></div>
<div id="act1" class="a1"><p id="pact1">ok</p></div> 	
<div id="act2" class="a2"><p id="pact2">modif</p></div>
<div id="act3" class="a3"><p id="pact3">text</p> </div>
<div id="act4" class="a4"><p id="pact4">cercle</p></div> 	
<div id="act5" class="a5"><p id="pact5">ligne</p></div>
<div id="act6" class="a6"><p id="pact6">rect</p> </div>
<div id="act7" class="a1"><p id="pact7">elips</p></div> 	
<div id="act8" class="a2"><p id="pact8">chemin</p></div>
<div id="act9" class="a3"><p id="pact9">posx+</p> </div>
<div id="act10" class="a6"><p id="pact10">ctrlpt2</p></div> 	
<div id="act11" class="a5"><p id="pact11">posy+</p></div>
<div id="act12" class="a6"><p id="pact12">center</p> </div>
<div id="act13" class="a1"><p id="pact13">rayon+</p></div> 	
<div id="act14" class="a2"><p id="pact14">font-siz</p></div>
<div id="act15" class="a3"><p id="pact15">rayonB</p> </div>
<div id="act16" class="a4"><p id="pact16">startx+</p></div> 	
<div id="act17" class="a5"><p id="pact17">point ctrl</p></div>
<div id="act18" class="a6"><p id="pact18">starty+</p> </div>

<div id="act19" class="a1"><p id="pact19">stkwthset</p></div> 	
<div id="act20" class="a2"><p id="pact20">endx+</p></div>
<div id="act21" class="a3"><p id="pact21">FILLset</p> </div>
<div id="act22" class="a4"><p id="pact22">endy+</p></div> 	
<div id="act23" class="a5"><p id="pact23">STRKset</p></div>
<div id="act24" class="a6"><p id="pact24">color</p> </div>

 
<div id="dva" class="a1"><p id="pga">ajout</p></div> 	
<div id="dvb" class="a2"><p id="pgb">minus</p></div>
<div id="dvc" class="a3"><p id="pgc">new</p> </div>


<div id="dv1" class="a1"><p id="pg1">Αrial</p></div> 	
<div id="dv2" class="a2"><p id="pg2">Gabr</p></div>
<div id="dv3" class="a3"><p id="pg3">+1</p> </div>
<div id="dv4" class="a4"><p id="pg4">+5</p></div> 
<div id="dv5" class="a5"><p id="pg5">+10</p></div>
<div id="dv6" class="a6"><p id="pg6">+50</p></div>
<div id="dv7" class="a1"><p id="pg7">+100</p></div>
<div id="dv8" class="a2"><p id="pg8">+20</p></div>
<div id="dv9" class="a3"><p id="pg9">+2</p></div>
<div id="dv10" class="a4"><p id="pg10">lgn+</p></div> 
<div id="dv11" class="a5"><p id="pg11">1</p></div>
<div id="dv12" class="a6"><p id="pg12">2</p> </div>
<div id="dv13" class="a1"><p id="pg13">3</p></div> 
<div id="dv14" class="a2"><p id="pg14">4</p></div>
<div id="dv15" class="a3"><p id="pg15">5</p></div>
<div id="dv16" class="a4"><p id="pg16">6</p></div>
<div id="dv17" class="a5"><p id="pg17">7</p></div>
<div id="dv18" class="a6"><p id="pg18">8</p></div>
<div id="dv19" class="a1"><p id="pg19">9</p></div>	
<div id="dv20" class="a2"><p id="pg20">0</p></div>
<div id="dv21" class="a3"><p id="pg21">a</p> </div>
<div id="dv22" class="a4"><p id="pg22">b</p></div> 
<div id="dv23" class="a5"><p id="pg23">c</p></div>
<div id="dv24" class="a6"><p id="pg24">d</p></div>
<div id="dv25" class="a1"><p id="pg25">e</p></div>
<div id="dv26" class="a2"><p id="pg26">f</p></div>
<div id="dv27" class="a3"><p id="pg27">g</p></div>
<div id="dv28" class="a4"><p id="pg28">h</p></div> 
<div id="dv29" class="a5"><p id="pg29">i</p></div>
<div id="dv30" class="a6"><p id="pg30">j</p></div>
<div id="dv31" class="a1"><p id="pg31">k</p></div>
<div id="dv32" class="a2"><p id="pg32">l</p></div>
<div id="dv33" class="a3"><p id="pg33">m</p></div>
<div id="dv34" class="a4"><p id="pg34">n</p></div> 
<div id="dv35" class="a5"><p id="pg35">o</p></div>
<div id="dv36" class="a6"><p id="pg36">p</p></div>
<div id="dv37" class="a1"><p id="pg37">q</p></div>
<div id="dv38" class="a2"><p id="pg38">r</p></div>
<div id="dv39" class="a3"><p id="pg39">s</p></div>
<div id="dv40" class="a4"><p id="pg40">t</p></div> 
<div id="dv41" class="a5"><p id="pg41">u</p></div>
<div id="dv42" class="a6"><p id="pg42">v</p></div>
<div id="dv43" class="a1"><p id="pg43">w</p></div>
<div id="dv44" class="a2"><p id="pg44">x</p></div>
<div id="dv45" class="a3"><p id="pg45">y</p></div>

<div id="dv46" class="a4"><p id="pg46">z</p></div> 
<div id="dv47" class="a5"><p id="pg47">A</p></div>
<div id="dv48" class="a6"><p id="pg48">B</p></div>
<div id="dv49" class="a1"><p id="pg49">C</p></div>
<div id="dv50" class="a2"><p id="pg50">D</p></div>
<div id="dv51" class="a3"><p id="pg51">E</p></div>
<div id="dv52" class="a4"><p id="pg52">F</p></div> 
<div id="dv53" class="a5"><p id="pg53">G</p></div>
<div id="dv54" class="a6"><p id="pg54">H</p></div>
<div id="dv55" class="a1"><p id="pg55">I</p></div>
<div id="dv56" class="a2"><p id="pg56">J</p></div>
<div id="dv57" class="a3"><p id="pg57">K</p></div>
<div id="dv58" class="a4"><p id="pg58">L</p></div> 
<div id="dv59" class="a5"><p id="pg59">M</p></div>
<div id="dv60" class="a6"><p id="pg60">N</p></div>
<div id="dv61" class="a1"><p id="pg61">O</p></div>
<div id="dv62" class="a2"><p id="pg62">P</p></div>
<div id="dv63" class="a3"><p id="pg63">Q</p></div>


<div id="dv64" class="a4"><p id="pg64">R</p></div> 
<div id="dv65" class="a5"><p id="pg65">S</p></div>
<div id="dv66" class="a6"><p id="pg66">T</p></div>
<div id="dv67" class="a1"><p id="pg67">U</p></div>
<div id="dv68" class="a2"><p id="pg68">V</p></div>
<div id="dv69" class="a3"><p id="pg69">W</p></div>
<div id="dv70" class="a4"><p id="pg70">X</p></div> 
<div id="dv71" class="a5"><p id="pg71">Y</p></div>
<div id="dv72" class="a6"><p id="pg72">Z</p></div>
<div id="dv73" class="a1"><p id="pg73">è</p></div>
<div id="dv74" class="a2"><p id="pg74">é</p></div>
<div id="dv75" class="a3"><p id="pg75">à</p></div>
<div id="dv76" class="a4"><p id="pg76">ù</p></div> 
<div id="dv77" class="a5"><p id="pg77">ê</p></div>
<div id="dv78" class="a6"><p id="pg78">ù</p></div>
<div id="dv79" class="a1"><p id="pg79">ç</p></div>
<div id="dv80" class="a2"><p id="pg80">α</p></div>
<div id="dv81" class="a3"><p id="pg81">β</p></div>

<div id="dv82" class="a4"><p id="pg82">ς</p></div> 
<div id="dv83" class="a5"><p id="pg83">ε</p></div>
<div id="dv84" class="a6"><p id="pg84">ρ</p></div>
<div id="dv85" class="a1"><p id="pg85">τ</p></div>
<div id="dv86" class="a2"><p id="pg86">υ</p></div>
<div id="dv87" class="a3"><p id="pg87">θ</p></div>
<div id="dv88" class="a4"><p id="pg88">ι</p></div> 
<div id="dv89" class="a5"><p id="pg89">ο</p></div>
<div id="dv90" class="a6"><p id="pg90">π</p></div>
<div id="dv91" class="a1"><p id="pg91">σ</p></div>
<div id="dv92" class="a2"><p id="pg92">δ</p></div>
<div id="dv93" class="a3"><p id="pg93">φ</p></div>
<div id="dv94" class="a4"><p id="pg94">γ</p></div> 
<div id="dv95" class="a5"><p id="pg95">η</p></div>
<div id="dv96" class="a6"><p id="pg96">ξ</p></div>
<div id="dv97" class="a1"><p id="pg97">κ</p></div>
<div id="dv98" class="a2"><p id="pg98">λ</p></div>
<div id="dv99" class="a3"><p id="pg99">ζ</p></div>

 <div id="dv100" class="a4"><p id="pg100">χ</p></div> 
<div id="dv101" class="a5"><p id="pg101">ψ</p></div>
<div id="dv102" class="a6"><p id="pg102">ω</p></div>
<div id="dv103" class="a1"><p id="pg103">ν</p></div>
<div id="dv104" class="a2"><p id="pg104">μ</p></div>
<div id="dv105" class="a3"><p id="pg105">Ω</p></div>
<div id="dv106" class="a4"><p id="pg106">Δ</p></div> 
<div id="dv107" class="a5"><p id="pg107">Σ</p></div>
<div id="dv108" class="a6"><p id="pg108">⪕</p></div>
<div id="dv109" class="a1"><p id="pg109">⪖</p></div>
<div id="dv110" class="a2"><p id="pg110">∀</p></div>
<div id="dv111" class="a3"><p id="pg111">∫</p></div>
<div id="dv112" class="a4"><p id="pg112">∞</p></div> 
<div id="dv113" class="a5"><p id="pg113">∑</p></div>
<div id="dv114" class="a6"><p id="pg114">∃</p></div>
<div id="dv115" class="a1"><p id="pg115">∄</p></div>
<div id="dv116" class="a2"><p id="pg116">∅</p></div>
<div id="dv117" class="a3"><p id="pg117">∂</p></div>

<div id="dv118" class="a4"><p id="pg118">∈</p></div> 
<div id="dv119" class="a5"><p id="pg119">ℤ</p></div>
<div id="dv120" class="a6"><p id="pg120">⇔</p></div>
<div id="dv121" class="a1"><p id="pg121">∉</p></div>
<div id="dv122" class="a2"><p id="pg122">ℝ</p></div>
<div id="dv123" class="a3"><p id="pg123">ℚ</p></div>
<div id="dv124" class="a4"><p id="pg124">ℏ</p></div> 
<div id="dv125" class="a5"><p id="pg125">ℂ</p></div>
<div id="dv126" class="a6"><p id="pg126">+</p></div>
<div id="dv127" class="a1"><p id="pg127">=</p></div>
<div id="dv128" class="a2"><p id="pg128">-</p></div>
<div id="dv129" class="a3"><p id="pg129">×</p></div>
<div id="dv130" class="a4"><p id="pg130">÷</p></div> 
<div id="dv131" class="a5"><p id="pg131">≠</p></div>
<div id="dv132" class="a6"><p id="pg132">ℕ</p></div>
<div id="dv133" class="a1"><p id="pg133">ᑕ</p></div>
<div id="dv134" class="a2"><p id="pg134">Ս</p></div>
<div id="dv135" class="a3"><p id="pg135">Ո</p></div>

<div id="dv136" class="a4"><p id="pg136">|</p></div> 
<div id="dv137" class="a5"><p id="pg137">/</p></div>
<div id="dv138" class="a6"><p id="pg138">{</p></div>
<div id="dv139" class="a1"><p id="pg139">}</p></div>
<div id="dv140" class="a2"><p id="pg140">[</p></div>
<div id="dv141" class="a3"><p id="pg141">]</p></div>

<div id="dv142" class="a4"><p id="pg142">(</p></div> 
<div id="dv143" class="a5"><p id="pg143">)</p></div>
<div id="dv144" class="a6"><p id="pg144">#</p></div>
<div id="dv145" class="a1"><p id="pg145">!</p></div>
<div id="dv146" class="a2"><p id="pg146">&</p></div>
<div id="dv147" class="a3"><p id="pg147">*</p></div>

<div id="dv148" class="a4"><p id="pg148">^</p></div> 
<div id="dv149" class="a5"><p id="pg149">@</p></div>
<div id="dv150" class="a6"><p id="pg150">:</p></div>
<div id="dv151" class="a1"><p id="pg151">;</p></div>
<div id="dv152" class="a2"><p id="pg152">,</p></div>
<div id="dv153" class="a3"><p id="pg153">.</p></div>
<div id="dv154" class="a4"><p id="pg154">'</p></div>
<div id="dv155" class="a5"><p id="pg155">"</p></div>
<div id="dv156" class="a6"><p id="pg156">esp</p></div>
<div id="dv157" class="a1"><p id="pg157">svg</p></div>
<div id="dv158" class="a2"><p id="pg158">rang</p></div>
<div id="dv159" class="a3"><p id="pg159">exo</p></div>
<div id="dv160" class="a4"><p id="pg160">proposition</p></div>
<div id="dv161" class="a5"><p id="pg161">suppr</p></div>
<div id="dv162" class="a6"><p id="pg162">?</p></div>

<div id="dv163" class="a1"><p id="pg163">&lt</p></div>
<div id="dv164" class="a2"><p id="pg164">&gt</p></div>
<div id="dv165" class="a3"><p id="pg165">reset</p></div>
<div id="dv166" class="a4"><p id="pg166">sqroot</p></div>
<div id="dv167" class="a5"><p id="pg167">flch</p></div>
<div id="dv168" class="a6"><p id="pg168">hrdf</p></div>
<div id="dv169" class="a1"><p id="pg169">vrdf</p></div>
<div id="dv170" class="a2"><p id="pg170">exp</p></div>
<div id="dv171" class="a3"><p id="pg171">vflch</p></div>
<div id="dv172" class="a4"><p id="pg172">dash</p></div>
<div id="dv173" class="a5"><p id="pg173">ô</p></div>

<div id="mot1" class="a1"><p id="mo1">donc</p></div> 	
<div id="mot2" class="a2"><p id="mo2">car</p></div>
<div id="mot3" class="a3"><p id="mo3">alors</p> </div>
<div id="mot4" class="a4"><p id="mo4">si</p></div> 
<div id="mot5" class="a5"><p id="mo5">d'où</p></div>
<div id="mot6" class="a6"><p id="mo6">et</p></div>
<div id="mot7" class="a1"><p id="mo7">de plus</p></div>
<div id="mot8" class="a2"><p id="mo8">que</p></div>
<div id="mot9" class="a3"><p id="mo9">on sait</p></div>
<div id="mot10" class="a4"><p id="mo10">sachez</p></div> 
<div id="mot11" class="a5"><p id="mo11">droite</p></div>
<div id="mot12" class="a6"><p id="mo12">le</p> </div>
<div id="mot13" class="a1"><p id="mo13">la</p></div> 
<div id="mot14" class="a2"><p id="mo14">les</p></div>
<div id="mot15" class="a3"><p id="mo15">solution</p></div>
<div id="mot16" class="a4"><p id="mo16">équation</p></div>
<div id="mot17" class="a5"><p id="mo17">mais</p></div>
<div id="mot18" class="a6"><p id="mo18">contraire</p></div>
<div id="mot19" class="a1"><p id="mo19">de</p></div>	
<div id="mot20" class="a2"><p id="mo20">ce</p></div>
<div id="mot21" class="a3"><p id="mo21">ces</p> </div>
<div id="mot22" class="a4"><p id="mo22">résoudre</p></div> 
<div id="mot23" class="a5"><p id="mo23">pour</p></div>
<div id="mot24" class="a6"><p id="mo24">fraction</p></div>
<div id="mot25" class="a1"><p id="mo25">tabdef</p></div>
<div id="mot26" class="a2"><p id="mo26">HLnb</p></div>
<div id="mot27" class="a3"><p id="mo27">VLnb</p></div>
<div id="mot28" class="a4"><p id="mo28">fstHL</p></div> 
<div id="mot29" class="a5"><p id="mo29">Hlign</p></div>
<div id="mot30" class="a6"><p id="mo30">fstVL</p></div>
<div id="mot31" class="a1"><p id="mo31">Vlign</p></div>
<div id="mot32" class="a2"><p id="mo32">double</p></div>
<div id="mot33" class="a3"><p id="mo33">dblpos1</p></div>
<div id="mot34" class="a4"><p id="mo34">dblpos2</p></div> 
<div id="mot35" class="a5"><p id="mo35">dblvalid</p></div>
<div id="mot36" class="a6"><p id="mo36">tablvalid</p></div>
<div id="mot37" class="a1"><p id="mo37">fstVL</p></div>
<div id="mot38" class="a2"><p id="mo38">resetpath</p></div>
<div id="mot39" class="a3"><p id="mo39">qdrpath</p></div>
<div id="mot40" class="a4"><p id="mo40">cubpath</p></div> 
<div id="mot41" class="a5"><p id="mo41">clrpathtype</p></div>
<div id="mot42" class="a6"><p id="mo42">addpath</p></div>
<div id="mot43" class="a1"><p id="mo43">liminf</p></div>
<div id="mot44" class="a2"><p id="mo44">limsup</p></div>
<div id="mot45" class="a3"><p id="mo45">var</p></div>

<div id="mot46" class="a1"><p id="mo46">xtend</p></div> 	
<div id="mot47" class="a2"><p id="mo47">var indice</p></div>
<div id="mot48" class="a3"><p id="mo48">x</p> </div>
<div id="mot49" class="a4"><p id="mo49">y</p></div> 
<div id="mot50" class="a5"><p id="mo50">a</p></div>
<div id="mot51" class="a6"><p id="mo51">b</p></div>
<div id="mot52" class="a1"><p id="mo52">n</p></div>
<div id="mot53" class="a2"><p id="mo53">i</p></div>
<div id="mot54" class="a3"><p id="mo54">0</p></div>
<div id="mot55" class="a4"><p id="mo55">1</p></div> 
<div id="mot56" class="a5"><p id="mo56">-</p></div>
<div id="mot57" class="a6"><p id="mo57">∞</p> </div>
<div id="mot58" class="a1"><p id="mo58">+</p></div> 
<div id="mot59" class="a2"><p id="mo59">lim ok</p></div>
<div id="mot60" class="a3"><p id="mo60">2</p></div>
<div id="mot61" class="a4"><p id="mo61">3</p></div>
<div id="mot62" class="a5"><p id="mo62">4</p></div>
<div id="mot63" class="a6"><p id="mo63">5</p></div>
<div id="mot64" class="a1"><p id="mo64">6</p></div>	
<div id="mot65" class="a2"><p id="mo65">7</p></div>
<div id="mot66" class="a3"><p id="mo66">8</p> </div>
<div id="mot67" class="a4"><p id="mo67">9</p></div> 
<div id="mot68" class="a5"><p id="mo68">e</p></div>
<div id="mot69" class="a6"><p id="mo69">ln</p></div>
<div id="mot70" class="a1"><p id="mo70">π</p></div>
<div id="mot71" class="a2"><p id="mo71">décroissante</p></div>
<div id="mot72" class="a3"><p id="mo72">constante</p></div>
<div id="mot73" class="a4"><p id="mo73">premier</p></div> 
<div id="mot74" class="a5"><p id="mo74">nombre</p></div>
<div id="mot75" class="a6"><p id="mo75">entier</p></div>
<div id="mot76" class="a1"><p id="mo76">linéaire</p></div>
<div id="mot77" class="a2"><p id="mo77">linéariser</p></div>
<div id="mot78" class="a3"><p id="mo78">dériver</p></div>
<div id="mot79" class="a4"><p id="mo79">dérivée</p></div> 
<div id="mot80" class="a5"><p id="mo80">dérivation</p></div>
<div id="mot81" class="a6"><p id="mo81">probabilité</p></div>
<div id="mot82" class="a1"><p id="mo82">évènement</p></div>
<div id="mot83" class="a2"><p id="mo83">hypothènuse</p></div>
<div id="mot84" class="a3"><p id="mo84">complexe</p></div>
<div id="mot85" class="a4"><p id="mo85">primitive</p></div> 
<div id="mot86" class="a5"><p id="mo86">intégrale</p></div>
<div id="mot87" class="a6"><p id="mo87">aire</p></div>
<div id="mot88" class="a1"><p id="mo88">surface</p></div>
<div id="mot89" class="a2"><p id="mo89">lattérale</p></div>
<div id="mot90" class="a3"><p id="mo90">inverse</p></div>

<div id="mot91" class="a1"><p id="mo91">opposés</p></div> 	
<div id="mot92" class="a2"><p id="mo92">élément</p></div>
<div id="mot93" class="a3"><p id="mo93">élémentaire</p> </div>
<div id="mot94" class="a4"><p id="mo94">conditionnelle</p></div> 
<div id="mot95" class="a5"><p id="mo95">condition</p></div>
<div id="mot96" class="a6"><p id="mo96">absurde</p></div>
<div id="mot97" class="a1"><p id="mo97">raisonnement</p></div>
<div id="mot98" class="a2"><p id="mo98">commun</p></div>
<div id="mot99" class="a3"><p id="mo99">médiatrice</p></div>
<div id="mot100" class="a4"><p id="mo100">segment</p></div> 
<div id="mot101" class="a5"><p id="mo101">bissectrice</p></div>
<div id="mot102" class="a6"><p id="mo102">centre</p> </div>
<div id="mot103" class="a1"><p id="mo103">gravité</p></div> 
<div id="mot104" class="a2"><p id="mo104">inscrit</p></div>
<div id="mot105" class="a3"><p id="mo105">circonscrit</p></div>
<div id="mot106" class="a4"><p id="mo106">rotation</p></div>
<div id="mot107" class="a5"><p id="mo107">inclus</p></div>
<div id="mot108" class="a6"><p id="mo108">homothétie</p></div>
<div id="mot109" class="a1"><p id="mo109">vecteur</p></div>	
<div id="mot110" class="a2"><p id="mo110">barycentre</p></div>
<div id="mot111" class="a3"><p id="mo111">trigonométrique</p> </div>
<div id="mot112" class="a4"><p id="mo112">trigonométrie</p></div> 
<div id="mot113" class="a5"><p id="mo113">point</p></div>
<div id="mot114" class="a6"><p id="mo114">paramétrique</p></div>
<div id="mot115" class="a1"><p id="mo115">représentation</p></div>
<div id="mot116" class="a2"><p id="mo116">absolue</p></div>
<div id="mot117" class="a3"><p id="mo117">valeur</p></div>
<div id="mot118" class="a4"><p id="mo118">théorème</p></div> 
<div id="mot119" class="a5"><p id="mo119">accroissement</p></div>
<div id="mot120" class="a6"><p id="mo120">fini</p></div>
<div id="mot121" class="a1"><p id="mo121">infini</p></div>
<div id="mot122" class="a2"><p id="mo122">module</p></div>
<div id="mot123" class="a3"><p id="mo123">modulo</p></div>
<div id="mot124" class="a4"><p id="mo124">argument</p></div> 
<div id="mot125" class="a5"><p id="mo125">logarithme</p></div>
<div id="mot126" class="a6"><p id="mo126">exponentielle</p></div>
<div id="mot127" class="a1"><p id="mo127">algébrique</p></div>
<div id="mot128" class="a2"><p id="mo128">Thalès</p></div>
<div id="mot129" class="a3"><p id="mo129">Pythagore</p></div>
<div id="mot130" class="a4"><p id="mo130">lieu</p></div> 
<div id="mot131" class="a5"><p id="mo131">géométrique</p></div>
<div id="mot132" class="a6"><p id="mo132">ligne</p></div>
<div id="mot133" class="a1"><p id="mo133">niveau</p></div>
<div id="mot134" class="a2"><p id="mo134">mesure</p></div>
<div id="mot135" class="a3"><p id="mo135">radian</p></div>

<div id="mot136" class="a1"><p id="mo136">cercle</p></div> 	
<div id="mot137" class="a2"><p id="mo137">convergente</p></div>
<div id="mot138" class="a3"><p id="mo138">divergente</p> </div>
<div id="mot139" class="a4"><p id="mo139">limite</p></div> 
<div id="mot140" class="a5"><p id="mo140">continue</p></div>
<div id="mot141" class="a6"><p id="mo141">continuité</p></div>
<div id="mot142" class="a1"><p id="mo142">variations</p></div>
<div id="mot143" class="a2"><p id="mo143">tableau</p></div>
<div id="mot144" class="a3"><p id="mo144">récurrence</p></div>
<div id="mot145" class="a4"><p id="mo145">arithmétique</p></div> 
<div id="mot146" class="a5"><p id="mo146">congruence</p></div>
<div id="mot147" class="a6"><p id="mo147">suite</p> </div>
<div id="mot148" class="a1"><p id="mo148">comparaison</p></div> 
<div id="mot149" class="a2"><p id="mo149">secteur</p></div>
<div id="mot150" class="a3"><p id="mo150">bijection</p></div>
<div id="mot151" class="a4"><p id="mo151">bijective</p></div>
<div id="mot152" class="a5"><p id="mo152">réalise</p></div>
<div id="mot153" class="a6"><p id="mo153">intervalle</p></div>
<div id="mot154" class="a1"><p id="mo154">surjection</p></div>	
<div id="mot155" class="a2"><p id="mo155">injection</p></div>
<div id="mot156" class="a3"><p id="mo156">surjective</p> </div>
<div id="mot157" class="a4"><p id="mo157">injective</p></div> 
<div id="mot158" class="a5"><p id="mo158">définition</p></div>
<div id="mot159" class="a6"><p id="mo159">départ</p></div>
<div id="mot160" class="a1"><p id="mo160">arrivée</p></div>
<div id="mot161" class="a2"><p id="mo161">symétrie</p></div>
<div id="mot162" class="a3"><p id="mo162">orthogonale</p></div>
<div id="mot163" class="a4"><p id="mo163">centrale</p></div> 
<div id="mot164" class="a5"><p id="mo164">milieu</p></div>
<div id="mot165" class="a6"><p id="mo165">glissée</p></div>
<div id="mot166" class="a1"><p id="mo166">composée</p></div>
<div id="mot167" class="a2"><p id="mo167">transformation</p></div>
<div id="mot168" class="a3"><p id="mo168">polynôme</p></div>
<div id="mot169" class="a4"><p id="mo169">monôme</p></div> 
<div id="mot170" class="a5"><p id="mo170">dégré</p></div>
<div id="mot171" class="a6"><p id="mo171">statistique</p></div>
<div id="mot172" class="a1"><p id="mo172">moyenne</p></div>
<div id="mot173" class="a2"><p id="mo173">asymptote</p></div>
<div id="mot174" class="a3"><p id="mo174">oblique</p></div>
<div id="mot175" class="a4"><p id="mo175">verticale</p></div> 
<div id="mot176" class="a5"><p id="mo176">horizontale</p></div>
<div id="mot177" class="a6"><p id="mo177">inflexion</p></div>
<div id="mot178" class="a1"><p id="mo178">seconde</p></div>
<div id="mot179" class="a2"><p id="mo179">s'annule</p></div>
<div id="mot180" class="a3"><p id="mo180">signe</p></div>

<div id="mot181" class="a1"><p id="mo181">variance</p></div> 	
<div id="mot182" class="a2"><p id="mo182">covariance</p></div>
<div id="mot183" class="a3"><p id="mo183">corrélation</p> </div>
<div id="mot184" class="a4"><p id="mo184">nuage</p></div> 
<div id="mot185" class="a5"><p id="mo185">médiane</p></div>
<div id="mot186" class="a6"><p id="mo186">différencielle</p></div>
<div id="mot187" class="a1"><p id="mo187">mathématique</p></div>
<div id="mot188" class="a2"><p id="mo188">espérance</p></div>
<div id="mot189" class="a3"><p id="mo189">aléatoire</p></div>
<div id="mot190" class="a4"><p id="mo190">variable</p></div> 
<div id="mot191" class="a5"><p id="mo191">mode</p></div>
<div id="mot192" class="a6"><p id="mo192">classe</p> </div>
<div id="mot193" class="a1"><p id="mo193">modale</p></div> 
<div id="mot194" class="a2"><p id="mo194">modalité</p></div>
<div id="mot195" class="a3"><p id="mo195">caractère</p></div>
<div id="mot196" class="a4"><p id="mo196">qualitatif</p></div>
<div id="mot197" class="a5"><p id="mo197">quantitatif</p></div>
<div id="mot198" class="a6"><p id="mo198">expérience</p></div>
<div id="mot199" class="a1"><p id="mo199">schéma</p></div>	
<div id="mot200" class="a2"><p id="mo200">Bernoulli</p></div>
<div id="mot201" class="a3"><p id="mo201">binomiale</p> </div>
<div id="mot202" class="a4"><p id="mo202">loi</p></div> 
<div id="mot203" class="a5"><p id="mo203">base</p></div>
<div id="mot204" class="a6"><p id="mo204">euclidienne</p></div>
<div id="mot205" class="a1"><p id="mo205">identification</p></div>
<div id="mot206" class="a2"><p id="mo206">distance</p></div>
<div id="mot207" class="a3"><p id="mo207">section</p></div>
<div id="mot208" class="a4"><p id="mo208">pyramide</p></div> 
<div id="mot209" class="a5"><p id="mo209">cône</p></div>
<div id="mot210" class="a6"><p id="mo210">translation</p></div>
<div id="mot211" class="a1"><p id="mo211">égalité</p></div>
<div id="mot212" class="a2"><p id="mo212">inéquation</p></div>
<div id="mot213" class="a3"><p id="mo213">étude</p></div>
<div id="mot214" class="a4"><p id="mo214">étudier</p></div> 
<div id="mot215" class="a5"><p id="mo215">paralèlle</p></div>
<div id="mot216" class="a6"><p id="mo216">perpendiculaire</p></div>
<div id="mot217" class="a1"><p id="mo217">orthogonaux</p></div>
<div id="mot218" class="a2"><p id="mo218">disjoints</p></div>
<div id="mot219" class="a3"><p id="mo219">coplanaires</p></div>
<div id="mot220" class="a4"><p id="mo220">non</p></div> 
<div id="mot221" class="a5"><p id="mo221">quotient</p></div>
<div id="mot222" class="a6"><p id="mo222">reste</p></div>
<div id="mot223" class="a1"><p id="mo223">divisible</p></div>
<div id="mot224" class="a2"><p id="mo224">parabole</p></div>
<div id="mot225" class="a3"><p id="mo225">hyperbole</p></div>
  </body>
</html>

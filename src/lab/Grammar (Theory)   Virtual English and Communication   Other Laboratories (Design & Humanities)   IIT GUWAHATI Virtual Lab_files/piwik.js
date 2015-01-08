/*!
 * Piwik - Web Analytics
 *
 * JavaScript tracking client
 *
 * @link http://piwik.org
 * @source https://github.com/piwik/piwik/blob/master/js/piwik.js
 * @license http://piwik.org/free-software/bsd/ Simplified BSD (also in js/LICENSE.txt)
 */
if(typeof JSON2!=="object"){JSON2={}}(function(){function d(f){return f<10?"0"+f:f}function l(n,m){var f=Object.prototype.toString.apply(n);if(f==="[object Date]"){return isFinite(n.valueOf())?n.getUTCFullYear()+"-"+d(n.getUTCMonth()+1)+"-"+d(n.getUTCDate())+"T"+d(n.getUTCHours())+":"+d(n.getUTCMinutes())+":"+d(n.getUTCSeconds())+"Z":null}if(f==="[object String]"||f==="[object Number]"||f==="[object Boolean]"){return n.valueOf()}if(f!=="[object Array]"&&typeof n.toJSON==="function"){return n.toJSON(m)}return n}var c=new RegExp("[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]","g"),e='\\\\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]',i=new RegExp("["+e,"g"),j,b,k={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},h;
function a(f){i.lastIndex=0;return i.test(f)?'"'+f.replace(i,function(m){var n=k[m];return typeof n==="string"?n:"\\u"+("0000"+m.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+f+'"'}function g(s,p){var n,m,t,f,q=j,o,r=p[s];if(r&&typeof r==="object"){r=l(r,s)}if(typeof h==="function"){r=h.call(p,s,r)}switch(typeof r){case"string":return a(r);case"number":return isFinite(r)?String(r):"null";case"boolean":case"null":return String(r);case"object":if(!r){return"null"}j+=b;o=[];if(Object.prototype.toString.apply(r)==="[object Array]"){f=r.length;for(n=0;n<f;n+=1){o[n]=g(n,r)||"null"}t=o.length===0?"[]":j?"[\n"+j+o.join(",\n"+j)+"\n"+q+"]":"["+o.join(",")+"]";j=q;return t}if(h&&typeof h==="object"){f=h.length;for(n=0;n<f;n+=1){if(typeof h[n]==="string"){m=h[n];t=g(m,r);if(t){o.push(a(m)+(j?": ":":")+t)}}}}else{for(m in r){if(Object.prototype.hasOwnProperty.call(r,m)){t=g(m,r);if(t){o.push(a(m)+(j?": ":":")+t)}}}}t=o.length===0?"{}":j?"{\n"+j+o.join(",\n"+j)+"\n"+q+"}":"{"+o.join(",")+"}";j=q;
return t}}if(typeof JSON2.stringify!=="function"){JSON2.stringify=function(o,m,n){var f;j="";b="";if(typeof n==="number"){for(f=0;f<n;f+=1){b+=" "}}else{if(typeof n==="string"){b=n}}h=m;if(m&&typeof m!=="function"&&(typeof m!=="object"||typeof m.length!=="number")){throw new Error("JSON2.stringify")}return g("",{"":o})}}if(typeof JSON2.parse!=="function"){JSON2.parse=function(o,f){var n;function m(s,r){var q,p,t=s[r];if(t&&typeof t==="object"){for(q in t){if(Object.prototype.hasOwnProperty.call(t,q)){p=m(t,q);if(p!==undefined){t[q]=p}else{delete t[q]}}}}return f.call(s,r,t)}o=String(o);c.lastIndex=0;if(c.test(o)){o=o.replace(c,function(p){return"\\u"+("0000"+p.charCodeAt(0).toString(16)).slice(-4)})}if((new RegExp("^[\\],:{}\\s]*$")).test(o.replace(new RegExp('\\\\(?:["\\\\/bfnrt]|u[0-9a-fA-F]{4})',"g"),"@").replace(new RegExp('"[^"\\\\\n\r]*"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?',"g"),"]").replace(new RegExp("(?:^|:|,)(?:\\s*\\[)+","g"),""))){n=eval("("+o+")");
return typeof f==="function"?m({"":n},""):n}throw new SyntaxError("JSON2.parse")}}}());if(typeof _paq!=="object"){_paq=[]}if(typeof Piwik!=="object"){Piwik=(function(){var h,a={},q=document,d=navigator,D=screen,A=window,e=A.performance||A.mozPerformance||A.msPerformance||A.webkitPerformance,n=false,y=[],k=A.encodeURIComponent,z=A.decodeURIComponent,f=unescape,E,H,c;function s(P){var i=typeof P;return i!=="undefined"}function o(i){return typeof i==="function"}function C(i){return typeof i==="object"}function l(i){return typeof i==="string"||i instanceof String}function K(){var P,R,Q;for(P=0;P<arguments.length;P+=1){Q=arguments[P];R=Q.shift();if(l(R)){E[R].apply(E,Q)}else{R.apply(E,Q)}}}function N(R,Q,P,i){if(R.addEventListener){R.addEventListener(Q,P,i);return true}if(R.attachEvent){return R.attachEvent("on"+Q,P)}R["on"+Q]=P}function I(Q,T){var P="",S,R;for(S in a){if(Object.prototype.hasOwnProperty.call(a,S)){R=a[S][Q];if(o(R)){P+=R(T)}}}return P}function L(){var i;I("unload");if(h){do{i=new Date()
}while(i.getTimeAlias()<h)}}function J(){var P;if(!n){n=true;I("load");for(P=0;P<y.length;P++){y[P]()}}return true}function m(){var P;if(q.addEventListener){N(q,"DOMContentLoaded",function i(){q.removeEventListener("DOMContentLoaded",i,false);J()})}else{if(q.attachEvent){q.attachEvent("onreadystatechange",function i(){if(q.readyState==="complete"){q.detachEvent("onreadystatechange",i);J()}});if(q.documentElement.doScroll&&A===A.top){(function i(){if(!n){try{q.documentElement.doScroll("left")}catch(Q){setTimeout(i,0);return}J()}}())}}}if((new RegExp("WebKit")).test(d.userAgent)){P=setInterval(function(){if(n||/loaded|complete/.test(q.readyState)){clearInterval(P);J()}},10)}N(A,"load",J,false)}function g(Q,P){var i=q.createElement("script");i.type="text/javascript";i.src=Q;if(i.readyState){i.onreadystatechange=function(){var R=this.readyState;if(R==="loaded"||R==="complete"){i.onreadystatechange=null;P()}}}else{i.onload=P}q.getElementsByTagName("head")[0].appendChild(i)}function t(){var i="";
try{i=A.top.document.referrer}catch(Q){if(A.parent){try{i=A.parent.document.referrer}catch(P){i=""}}}if(i===""){i=q.referrer}return i}function j(i){var Q=new RegExp("^([a-z]+):"),P=Q.exec(i);return P?P[1]:null}function b(i){var Q=new RegExp("^(?:(?:https?|ftp):)/*(?:[^@]+@)?([^:/#]+)"),P=Q.exec(i);return P?P[1]:i}function B(Q,P){var i="[\\?&#]"+P+"=([^&#]*)";var S=new RegExp(i);var R=S.exec(Q);return R?z(R[1]):""}function p(i){return f(k(i))}function M(af){var R=function(W,i){return(W<<i)|(W>>>(32-i))},ag=function(am){var al="",ak,W;for(ak=7;ak>=0;ak--){W=(am>>>(ak*4))&15;al+=W.toString(16)}return al},U,ai,ah,Q=[],Z=1732584193,X=4023233417,V=2562383102,T=271733878,S=3285377520,ae,ad,ac,ab,aa,aj,P,Y=[];af=p(af);P=af.length;for(ai=0;ai<P-3;ai+=4){ah=af.charCodeAt(ai)<<24|af.charCodeAt(ai+1)<<16|af.charCodeAt(ai+2)<<8|af.charCodeAt(ai+3);Y.push(ah)}switch(P&3){case 0:ai=2147483648;break;case 1:ai=af.charCodeAt(P-1)<<24|8388608;break;case 2:ai=af.charCodeAt(P-2)<<24|af.charCodeAt(P-1)<<16|32768;
break;case 3:ai=af.charCodeAt(P-3)<<24|af.charCodeAt(P-2)<<16|af.charCodeAt(P-1)<<8|128;break}Y.push(ai);while((Y.length&15)!==14){Y.push(0)}Y.push(P>>>29);Y.push((P<<3)&4294967295);for(U=0;U<Y.length;U+=16){for(ai=0;ai<16;ai++){Q[ai]=Y[U+ai]}for(ai=16;ai<=79;ai++){Q[ai]=R(Q[ai-3]^Q[ai-8]^Q[ai-14]^Q[ai-16],1)}ae=Z;ad=X;ac=V;ab=T;aa=S;for(ai=0;ai<=19;ai++){aj=(R(ae,5)+((ad&ac)|(~ad&ab))+aa+Q[ai]+1518500249)&4294967295;aa=ab;ab=ac;ac=R(ad,30);ad=ae;ae=aj}for(ai=20;ai<=39;ai++){aj=(R(ae,5)+(ad^ac^ab)+aa+Q[ai]+1859775393)&4294967295;aa=ab;ab=ac;ac=R(ad,30);ad=ae;ae=aj}for(ai=40;ai<=59;ai++){aj=(R(ae,5)+((ad&ac)|(ad&ab)|(ac&ab))+aa+Q[ai]+2400959708)&4294967295;aa=ab;ab=ac;ac=R(ad,30);ad=ae;ae=aj}for(ai=60;ai<=79;ai++){aj=(R(ae,5)+(ad^ac^ab)+aa+Q[ai]+3395469782)&4294967295;aa=ab;ab=ac;ac=R(ad,30);ad=ae;ae=aj}Z=(Z+ae)&4294967295;X=(X+ad)&4294967295;V=(V+ac)&4294967295;T=(T+ab)&4294967295;S=(S+aa)&4294967295}aj=ag(Z)+ag(X)+ag(V)+ag(T)+ag(S);return aj.toLowerCase()}function G(Q,i,P){if(Q==="translate.googleusercontent.com"){if(P===""){P=i
}i=B(i,"u");Q=b(i)}else{if(Q==="cc.bingj.com"||Q==="webcache.googleusercontent.com"||Q.slice(0,5)==="74.6."){i=q.links[0].href;Q=b(i)}}return[Q,i,P]}function u(P){var i=P.length;if(P.charAt(--i)==="."){P=P.slice(0,i)}if(P.slice(0,2)==="*."){P=P.slice(1)}return P}function O(P){P=P&&P.text?P.text:P;if(!l(P)){var i=q.getElementsByTagName("title");if(i&&s(i[0])){P=i[0].text}}return P}function w(i,P){if(P){return P}if(i.slice(-9)==="piwik.php"){i=i.slice(0,i.length-9)}return i}function v(S){var i="Piwik_Overlay";var V=new RegExp("index\\.php\\?module=Overlay&action=startOverlaySession&idsite=([0-9]+)&period=([^&]+)&date=([^&]+)$");var Q=V.exec(q.referrer);if(Q){var R=Q[1];if(R!==String(S)){return false}var U=Q[2],P=Q[3];A.name=i+"###"+U+"###"+P}var T=A.name.split("###");return T.length===3&&T[0]===i}function F(P,U,R){var T=A.name.split("###"),S=T[1],i=T[2],Q=w(P,U);g(Q+"plugins/Overlay/client/client.js?v=1",function(){Piwik_Overlay_Client.initialize(Q,R,S,i)})}function x(ak,aL){var T=G(q.domain,A.location.href,t()),a5=u(T[0]),bj=T[1],aS=T[2],aQ="GET",S=ak||"",ah="",aN="",a9=aL||"",aC,ar=q.title,au="7z|aac|ar[cj]|as[fx]|avi|bin|csv|deb|dmg|docx?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|ms[ip]|od[bfgpst]|og[gv]|pdf|phps|png|pptx?|qtm?|ra[mr]?|rpm|sea|sit|tar|t?bz2?|tgz|torrent|txt|wav|wm[av]|wpd||xlsx?|xml|z|zip",aO=[a5],W=[],aG=[],aj=[],aM=500,X,al,Y,Z,aw=["pk_campaign","piwik_campaign","utm_campaign","utm_source","utm_medium"],aq=["pk_kwd","piwik_kwd","utm_term"],bh="_pk_",ac,bi,aa=false,bc,ay,aB,ag=63072000000,ai=1800000,aD=15768000000,az=true,an=0,V=false,aH={},bd=200,aY={},ba={},aV=false,aT=false,aR,aI,ad,av=M,aU,aA;
function a0(bs,bp,bo,br,bn,bq){if(aa){return}var bm;if(bo){bm=new Date();bm.setTime(bm.getTime()+bo)}q.cookie=bs+"="+k(bp)+(bo?";expires="+bm.toGMTString():"")+";path="+(br||"/")+(bn?";domain="+bn:"")+(bq?";secure":"")}function af(bo){if(aa){return 0}var bm=new RegExp("(^|;)[ ]*"+bo+"=([^;]*)"),bn=bm.exec(q.cookie);return bn?z(bn[2]):0}function be(bm){var bn;if(Y){bn=new RegExp("#.*");return bm.replace(bn,"")}return bm}function a4(bo,bm){var bp=j(bm),bn;if(bp){return bm}if(bm.slice(0,1)==="/"){return j(bo)+"://"+b(bo)+bm}bo=be(bo);if((bn=bo.indexOf("?"))>=0){bo=bo.slice(0,bn)}if((bn=bo.lastIndexOf("/"))!==bo.length-1){bo=bo.slice(0,bn+1)}return bo+bm}function aP(bp){var bn,bm,bo;for(bn=0;bn<aO.length;bn++){bm=u(aO[bn].toLowerCase());if(bp===bm){return true}if(bm.slice(0,1)==="."){if(bp===bm.slice(1)){return true}bo=bp.length-bm.length;if((bo>0)&&(bp.slice(bo)===bm)){return true}}}return false}function bl(bm){var bn=new Image(1,1);bn.onload=function(){};bn.src=S+(S.indexOf("?")<0?"?":"&")+bm
}function a1(bm){try{var bo=A.XMLHttpRequest?new A.XMLHttpRequest():A.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):null;bo.open("POST",S,true);bo.onreadystatechange=function(){if(this.readyState===4&&this.status!==200){bl(bm)}};bo.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");bo.send(bm)}catch(bn){bl(bm)}}function ax(bo,bn){var bm=new Date();if(!bc){if(aQ==="POST"){a1(bo)}else{bl(bo)}h=bm.getTime()+bn}}function aZ(bm){return bh+bm+"."+a9+"."+aU}function U(){if(aa){return"0"}if(!s(d.cookieEnabled)){var bm=aZ("testcookie");a0(bm,"1");return af(bm)==="1"?"1":"0"}return d.cookieEnabled?"1":"0"}function aJ(){aU=av((ac||a5)+(bi||"/")).slice(0,4)}function ae(){var bn=aZ("cvar"),bm=af(bn);if(bm.length){bm=JSON2.parse(bm);if(C(bm)){return bm}}return{}}function R(){if(V===false){V=ae()}}function a8(){var bm=new Date();aR=bm.getTime()}function ab(bq,bn,bm,bp,bo,br){a0(aZ("id"),bq+"."+bn+"."+bm+"."+bp+"."+bo+"."+br,ag,bi,ac)}function Q(){var bn=new Date(),bm=Math.round(bn.getTime()/1000),bp=af(aZ("id")),bo;
if(bp){bo=bp.split(".");bo.unshift("0")}else{if(!aA){aA=av((d.userAgent||"")+(d.platform||"")+JSON2.stringify(ba)+bm).slice(0,16)}bo=["1",aA,bm,0,bm,"",""]}return bo}function i(){var bm=af(aZ("ref"));if(bm.length){try{bm=JSON2.parse(bm);if(C(bm)){return bm}}catch(bn){}}return["","",0,""]}function P(){var bm=aa;aa=false;a0(aZ("id"),"",-86400,bi,ac);a0(aZ("ses"),"",-86400,bi,ac);a0(aZ("cvar"),"",-86400,bi,ac);a0(aZ("ref"),"",-86400,bi,ac);aa=bm}function at(bo,bM,bN,bq){var bK,bn=new Date(),bw=Math.round(bn.getTime()/1000),bP,bL,bs,bD,bH,bv,bF,bt,bJ,br=1024,bQ,bz,bG=V,bx=aZ("ses"),by=aZ("ref"),bR=aZ("cvar"),bE=Q(),bB=af(bx),bI=i(),bO=aC||bj,bu,bm;if(aa){P()}if(bc){return""}bP=bE[0];bL=bE[1];bD=bE[2];bs=bE[3];bH=bE[4];bv=bE[5];if(!s(bE[6])){bE[6]=""}bF=bE[6];if(!s(bq)){bq=""}var bA=q.characterSet||q.charset;if(!bA||bA.toLowerCase()==="utf-8"){bA=null}bu=bI[0];bm=bI[1];bt=bI[2];bJ=bI[3];if(!bB){bs++;bv=bH;if(!aB||!bu.length){for(bK in aw){if(Object.prototype.hasOwnProperty.call(aw,bK)){bu=B(bO,aw[bK]);
if(bu.length){break}}}for(bK in aq){if(Object.prototype.hasOwnProperty.call(aq,bK)){bm=B(bO,aq[bK]);if(bm.length){break}}}}bQ=b(aS);bz=bJ.length?b(bJ):"";if(bQ.length&&!aP(bQ)&&(!aB||!bz.length||aP(bz))){bJ=aS}if(bJ.length||bu.length){bt=bw;bI=[bu,bm,bt,be(bJ.slice(0,br))];a0(by,JSON2.stringify(bI),aD,bi,ac)}}bo+="&idsite="+a9+"&rec=1&r="+String(Math.random()).slice(2,8)+"&h="+bn.getHours()+"&m="+bn.getMinutes()+"&s="+bn.getSeconds()+"&url="+k(be(bO))+(aS.length?"&urlref="+k(be(aS)):"")+"&_id="+bL+"&_idts="+bD+"&_idvc="+bs+"&_idn="+bP+(bu.length?"&_rcn="+k(bu):"")+(bm.length?"&_rck="+k(bm):"")+"&_refts="+bt+"&_viewts="+bv+(String(bF).length?"&_ects="+bF:"")+(String(bJ).length?"&_ref="+k(be(bJ.slice(0,br))):"")+(bA?"&cs="+k(bA):"");var bp=JSON2.stringify(aH);if(bp.length>2){bo+="&cvar="+k(bp)}for(bK in ba){if(Object.prototype.hasOwnProperty.call(ba,bK)){bo+="&"+bK+"="+ba[bK]}}if(bM){bo+="&data="+k(JSON2.stringify(bM))}else{if(Z){bo+="&data="+k(JSON2.stringify(Z))}}if(V){var bC=JSON2.stringify(V);
if(bC.length>2){bo+="&_cvar="+k(bC)}for(bK in bG){if(Object.prototype.hasOwnProperty.call(bG,bK)){if(V[bK][0]===""||V[bK][1]===""){delete V[bK]}}}a0(bR,JSON2.stringify(V),ai,bi,ac)}if(az&&an){bo+="&gt_ms="+an}else{if(az&&e&&e.timing&&e.timing.requestStart&&e.timing.responseEnd){bo+="&gt_ms="+(e.timing.responseEnd-e.timing.requestStart)}}ab(bL,bD,bs,bw,bv,s(bq)&&String(bq).length?bq:bF);a0(bx,"*",ai,bi,ac);bo+=I(bN);if(aN.length){bo+="&"+aN}return bo}function a3(bp,bo,bt,bq,bm,bw){var br="idgoal=0",bs,bn=new Date(),bu=[],bv;if(String(bp).length){br+="&ec_id="+k(bp);bs=Math.round(bn.getTime()/1000)}br+="&revenue="+bo;if(String(bt).length){br+="&ec_st="+bt}if(String(bq).length){br+="&ec_tx="+bq}if(String(bm).length){br+="&ec_sh="+bm}if(String(bw).length){br+="&ec_dt="+bw}if(aY){for(bv in aY){if(Object.prototype.hasOwnProperty.call(aY,bv)){if(!s(aY[bv][1])){aY[bv][1]=""}if(!s(aY[bv][2])){aY[bv][2]=""}if(!s(aY[bv][3])||String(aY[bv][3]).length===0){aY[bv][3]=0}if(!s(aY[bv][4])||String(aY[bv][4]).length===0){aY[bv][4]=1
}bu.push(aY[bv])}}br+="&ec_items="+k(JSON2.stringify(bu))}br=at(br,Z,"ecommerce",bs);ax(br,aM)}function a2(bm,bq,bp,bo,bn,br){if(String(bm).length&&s(bq)){a3(bm,bq,bp,bo,bn,br)}}function bg(bm){if(s(bm)){a3("",bm,"","","","")}}function aF(bp,bq){var bm=new Date(),bo=at("action_name="+k(O(bp||ar)),bq,"log");ax(bo,aM);if(X&&al&&!aT){aT=true;N(q,"click",a8);N(q,"mouseup",a8);N(q,"mousedown",a8);N(q,"mousemove",a8);N(q,"mousewheel",a8);N(A,"DOMMouseScroll",a8);N(A,"scroll",a8);N(q,"keypress",a8);N(q,"keydown",a8);N(q,"keyup",a8);N(A,"resize",a8);N(A,"focus",a8);N(A,"blur",a8);aR=bm.getTime();setTimeout(function bn(){var br=new Date(),bs;if((aR+al)>br.getTime()){if(X<br.getTime()){bs=at("ping=1",bq,"ping");ax(bs,aM)}setTimeout(bn,al)}},al)}}function ap(bm,bp,bn,bq){var bo=at("search="+k(bm)+(bp?"&search_cat="+k(bp):"")+(s(bn)?"&search_count="+bn:""),bq,"sitesearch");ax(bo,aM)}function aK(bm,bp,bo){var bn=at("idgoal="+bm+(bp?"&revenue="+bp:""),bo,"goal");ax(bn,aM)}function a7(bn,bm,bp){var bo=at(bm+"="+k(be(bn)),bp,"link");
ax(bo,aM)}function bb(bn,bm){if(bn!==""){return bn+bm.charAt(0).toUpperCase()+bm.slice(1)}return bm}function ao(br){var bq,bm,bp=["","webkit","ms","moz"],bo;if(!ay){for(bm=0;bm<bp.length;bm++){bo=bp[bm];if(Object.prototype.hasOwnProperty.call(q,bb(bo,"hidden"))){if(q[bb(bo,"visibilityState")]==="prerender"){bq=true}break}}}if(bq){N(q,bo+"visibilitychange",function bn(){q.removeEventListener(bo+"visibilitychange",bn,false);br()});return}br()}function am(bo,bn){var bp,bm="(^| )(piwik[_-]"+bn;if(bo){for(bp=0;bp<bo.length;bp++){bm+="|"+bo[bp]}}bm+=")( |$)";return new RegExp(bm)}function a6(bp,bm,bq){var bo=am(aG,"download"),bn=am(aj,"link"),br=new RegExp("\\.("+au+")([?&#]|$)","i");return bn.test(bp)?"link":(bo.test(bp)||br.test(bm)?"download":(bq?0:"link"))}function aX(br){var bp,bn,bm;while((bp=br.parentNode)!==null&&s(bp)&&((bn=br.tagName.toUpperCase())!=="A"&&bn!=="AREA")){br=bp}if(s(br.href)){var bs=br.hostname||b(br.href),bt=bs.toLowerCase(),bo=br.href.replace(bs,bt),bq=new RegExp("^(javascript|vbscript|jscript|mocha|livescript|ecmascript|mailto):","i");
if(!bq.test(bo)){bm=a6(br.className,bo,aP(bt));if(bm){bo=f(bo);a7(bo,bm)}}}}function bk(bm){var bn,bo;bm=bm||A.event;bn=bm.which||bm.button;bo=bm.target||bm.srcElement;if(bm.type==="click"){if(bo){aX(bo)}}else{if(bm.type==="mousedown"){if((bn===1||bn===2)&&bo){aI=bn;ad=bo}else{aI=ad=null}}else{if(bm.type==="mouseup"){if(bn===aI&&bo===ad){aX(bo)}aI=ad=null}}}}function aW(bn,bm){if(bm){N(bn,"mouseup",bk,false);N(bn,"mousedown",bk,false)}else{N(bn,"click",bk,false)}}function aE(bn){if(!aV){aV=true;var bo,bm=am(W,"ignore"),bp=q.links;if(bp){for(bo=0;bo<bp.length;bo++){if(!bm.test(bp[bo].className)){aW(bp[bo],bn)}}}}}function bf(){var bn,bo,bp={pdf:"application/pdf",qt:"video/quicktime",realp:"audio/x-pn-realaudio-plugin",wma:"application/x-mplayer2",dir:"application/x-director",fla:"application/x-shockwave-flash",java:"application/x-java-vm",gears:"application/x-googlegears",ag:"application/x-silverlight"},bm=(new RegExp("Mac OS X.*Safari/")).test(d.userAgent)?A.devicePixelRatio||1:1;if(!((new RegExp("MSIE")).test(d.userAgent))){if(d.mimeTypes&&d.mimeTypes.length){for(bn in bp){if(Object.prototype.hasOwnProperty.call(bp,bn)){bo=d.mimeTypes[bp[bn]];
ba[bn]=(bo&&bo.enabledPlugin)?"1":"0"}}}if(typeof navigator.javaEnabled!=="unknown"&&s(d.javaEnabled)&&d.javaEnabled()){ba.java="1"}if(o(A.GearsFactory)){ba.gears="1"}ba.cookie=U()}ba.res=D.width*bm+"x"+D.height*bm}bf();aJ();return{getVisitorId:function(){return(Q())[1]},getVisitorInfo:function(){return Q()},getAttributionInfo:function(){return i()},getAttributionCampaignName:function(){return i()[0]},getAttributionCampaignKeyword:function(){return i()[1]},getAttributionReferrerTimestamp:function(){return i()[2]},getAttributionReferrerUrl:function(){return i()[3]},setTrackerUrl:function(bm){S=bm},setSiteId:function(bm){a9=bm},setCustomData:function(bm,bn){if(C(bm)){Z=bm}else{if(!Z){Z=[]}Z[bm]=bn}},appendToTrackingUrl:function(bm){aN=bm},getCustomData:function(){return Z},setCustomVariable:function(bn,bm,bq,bo){var bp;if(!s(bo)){bo="visit"}if(bn>0){bm=s(bm)&&!l(bm)?String(bm):bm;bq=s(bq)&&!l(bq)?String(bq):bq;bp=[bm.slice(0,bd),bq.slice(0,bd)];if(bo==="visit"||bo===2){R();V[bn]=bp}else{if(bo==="page"||bo===3){aH[bn]=bp
}}}},getCustomVariable:function(bn,bo){var bm;if(!s(bo)){bo="visit"}if(bo==="page"||bo===3){bm=aH[bn]}else{if(bo==="visit"||bo===2){R();bm=V[bn]}}if(!s(bm)||(bm&&bm[0]==="")){return false}return bm},deleteCustomVariable:function(bm,bn){if(this.getCustomVariable(bm,bn)){this.setCustomVariable(bm,"","",bn)}},setLinkTrackingTimer:function(bm){aM=bm},setDownloadExtensions:function(bm){au=bm},addDownloadExtensions:function(bm){au+="|"+bm},setDomains:function(bm){aO=l(bm)?[bm]:bm;aO.push(a5)},setIgnoreClasses:function(bm){W=l(bm)?[bm]:bm},setRequestMethod:function(bm){aQ=bm||"GET"},setReferrerUrl:function(bm){aS=bm},setCustomUrl:function(bm){aC=a4(bj,bm)},setDocumentTitle:function(bm){ar=bm},setAPIUrl:function(bm){ah=bm},setDownloadClasses:function(bm){aG=l(bm)?[bm]:bm},setLinkClasses:function(bm){aj=l(bm)?[bm]:bm},setCampaignNameKey:function(bm){aw=l(bm)?[bm]:bm},setCampaignKeywordKey:function(bm){aq=l(bm)?[bm]:bm},discardHashTag:function(bm){Y=bm},setCookieNamePrefix:function(bm){bh=bm;V=ae()
},setCookieDomain:function(bm){ac=u(bm);aJ()},setCookiePath:function(bm){bi=bm;aJ()},setVisitorCookieTimeout:function(bm){ag=bm*1000},setSessionCookieTimeout:function(bm){ai=bm*1000},setReferralCookieTimeout:function(bm){aD=bm*1000},setConversionAttributionFirstReferrer:function(bm){aB=bm},disableCookies:function(){aa=true;ba.cookie="0"},deleteCookies:function(){P()},setDoNotTrack:function(bn){var bm=d.doNotTrack||d.msDoNotTrack;bc=bn&&(bm==="yes"||bm==="1");if(bc){this.disableCookies()}},addListener:function(bn,bm){aW(bn,bm)},enableLinkTracking:function(bm){if(n){aE(bm)}else{y.push(function(){aE(bm)})}},disablePerformanceTracking:function(){az=false},setGenerationTimeMs:function(bm){an=parseInt(bm,10)},setHeartBeatTimer:function(bo,bn){var bm=new Date();X=bm.getTime()+bo*1000;al=bn*1000},killFrame:function(){if(A.location!==A.top.location){A.top.location=A.location}},redirectFile:function(bm){if(A.location.protocol==="file:"){A.location=bm}},setCountPreRendered:function(bm){ay=bm},trackGoal:function(bm,bo,bn){ao(function(){aK(bm,bo,bn)
})},trackLink:function(bn,bm,bo){ao(function(){a7(bn,bm,bo)})},trackPageView:function(bm,bn){if(v(a9)){ao(function(){F(S,ah,a9)})}else{ao(function(){aF(bm,bn)})}},trackSiteSearch:function(bm,bo,bn){ao(function(){ap(bm,bo,bn)})},setEcommerceView:function(bp,bm,bo,bn){if(!s(bo)||!bo.length){bo=""}else{if(bo instanceof Array){bo=JSON2.stringify(bo)}}aH[5]=["_pkc",bo];if(s(bn)&&String(bn).length){aH[2]=["_pkp",bn]}if((!s(bp)||!bp.length)&&(!s(bm)||!bm.length)){return}if(s(bp)&&bp.length){aH[3]=["_pks",bp]}if(!s(bm)||!bm.length){bm=""}aH[4]=["_pkn",bm]},addEcommerceItem:function(bq,bm,bo,bn,bp){if(bq.length){aY[bq]=[bq,bm,bo,bn,bp]}},trackEcommerceOrder:function(bm,bq,bp,bo,bn,br){a2(bm,bq,bp,bo,bn,br)},trackEcommerceCartUpdate:function(bm){bg(bm)}}}function r(){return{push:K}}N(A,"beforeunload",L,false);m();Date.prototype.getTimeAlias=Date.prototype.getTime;E=new x();for(H=0;H<_paq.length;H++){if(_paq[H][0]==="setTrackerUrl"||_paq[H][0]==="setSiteId"){K(_paq[H]);delete _paq[H]}}for(H=0;H<_paq.length;
H++){if(_paq[H]){K(_paq[H])}}_paq=new r();c={addPlugin:function(i,P){a[i]=P},getTracker:function(i,P){return new x(i,P)},getAsyncTracker:function(){return E}};if(typeof define==="function"&&define.amd){define(["piwik"],[],function(){return c})}return c}())}if(typeof piwik_log!=="function"){piwik_log=function(b,f,d,g){function a(h){try{return eval("piwik_"+h)}catch(i){}return}var c,e=Piwik.getTracker(d,f);e.setDocumentTitle(b);e.setCustomData(g);c=a("tracker_pause");if(c){e.setLinkTrackingTimer(c)}c=a("download_extensions");if(c){e.setDownloadExtensions(c)}c=a("hosts_alias");if(c){e.setDomains(c)}c=a("ignore_classes");if(c){e.setIgnoreClasses(c)}e.trackPageView();if(a("install_tracker")){piwik_track=function(i,k,j,h){e.setSiteId(k);e.setTrackerUrl(j);e.trackLink(i,h)};e.enableLinkTracking()}}};
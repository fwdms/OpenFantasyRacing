import{l as b,y as Ue,q as Be,j as ue,k as Le,Y as ut,a1 as lt,u as V,P as le,N as ke,I as ft,K as we,ai as ct,F as fe,O as _e,o as x,b as P,d as S,t as B,ae as dt,ah as pt,e as ht,c as ce,w as q,a as _,n as Re,aj as mt,g as ae,ac as Fe,i as je,r as vt}from"./app.e37d7fd1.js";import{P as bt,S as En,_ as yt}from"./Admin.b15f7092.js";import{_ as Et}from"./PageHeader.6abf194c.js";import{_ as Ie}from"./Button.4b89d253.js";import{_ as wt}from"./EventResultsTable.73ca8abc.js";import{_ as Z}from"./Input.ff19aa40.js";import{m as _t,p as Rt}from"./use-event-listener.871b1008.js";/* empty css            */import"./Table.11275eaf.js";function xt(t){var e;let r=(e=t==null?void 0:t.form)!=null?e:t.closest("form");if(r){for(let n of r.elements)if(n.tagName==="INPUT"&&n.type==="submit"||n.tagName==="BUTTON"&&n.type==="submit"||n.nodeName==="INPUT"&&n.type==="image"){n.click();return}}}let qe=Symbol("LabelContext");function Me(){let t=ke(qe,null);if(t===null){let e=new Error("You used a <Label /> component, but it is not inside a parent.");throw Error.captureStackTrace&&Error.captureStackTrace(e,Me),e}return t}function St({slot:t={},name:e="Label",props:r={}}={}){let n=b([]);function a(s){return n.value.push(s),()=>{let o=n.value.indexOf(s);o!==-1&&n.value.splice(o,1)}}return Ue(qe,{register:a,slot:t,name:e,props:r}),Be(()=>n.value.length>0?n.value.join(" "):void 0)}let gt=ue({name:"Label",props:{as:{type:[Object,String],default:"label"},passive:{type:[Boolean],default:!1}},setup(t,{slots:e,attrs:r}){let n=Me(),a=`headlessui-label-${Le()}`;return ut(()=>lt(n.register(a))),()=>{let{name:s="Label",slot:o={},props:u={}}=n,{passive:l,...c}=t,i={...Object.entries(u).reduce((f,[h,p])=>Object.assign(f,{[h]:V(p)}),{}),id:a};return l&&(delete i.onClick,delete c.onClick),le({ourProps:i,theirProps:c,slot:o,attrs:r,slots:e,name:s})}}}),Ve=Symbol("GroupContext"),Ot=ue({name:"SwitchGroup",props:{as:{type:[Object,String],default:"template"}},setup(t,{slots:e,attrs:r}){let n=b(null),a=St({name:"SwitchLabel",props:{onClick(){!n.value||(n.value.click(),n.value.focus({preventScroll:!0}))}}}),s=bt({name:"SwitchDescription"});return Ue(Ve,{switchRef:n,labelledby:a,describedby:s}),()=>le({theirProps:t,ourProps:{},slot:{},slots:e,attrs:r,name:"SwitchGroup"})}}),At=ue({name:"Switch",emits:{"update:modelValue":t=>!0},props:{as:{type:[Object,String],default:"button"},modelValue:{type:Boolean,default:!1},name:{type:String,optional:!0},value:{type:String,optional:!0}},inheritAttrs:!1,setup(t,{emit:e,attrs:r,slots:n,expose:a}){let s=ke(Ve,null),o=`headlessui-switch-${Le()}`;function u(){e("update:modelValue",!t.modelValue)}let l=b(null),c=s===null?l:s.switchRef,i=ft(Be(()=>({as:t.as,type:r.type})),c);a({el:c,$el:c});function f(d){d.preventDefault(),u()}function h(d){d.key===_e.Space?(d.preventDefault(),u()):d.key===_e.Enter&&xt(d.currentTarget)}function p(d){d.preventDefault()}return()=>{let{name:d,value:N,modelValue:g,...E}=t,C={checked:g},O={id:o,ref:c,role:"switch",type:i.value,tabIndex:0,"aria-checked":g,"aria-labelledby":s==null?void 0:s.labelledby.value,"aria-describedby":s==null?void 0:s.describedby.value,onClick:f,onKeyup:h,onKeypress:p};return we(fe,[d!=null&&g!=null?we(_t,ct({features:Rt.Hidden,as:"input",type:"checkbox",hidden:!0,readOnly:!0,checked:g,name:d,value:N})):null,le({ourProps:O,theirProps:{...r,...E},slot:C,attrs:r,slots:n,name:"Switch"})])}}}),Ct=gt;var de={exports:{}},He=function(e,r){return function(){for(var a=new Array(arguments.length),s=0;s<a.length;s++)a[s]=arguments[s];return e.apply(r,a)}},$t=He,pe=Object.prototype.toString,he=function(t){return function(e){var r=pe.call(e);return t[r]||(t[r]=r.slice(8,-1).toLowerCase())}}(Object.create(null));function T(t){return t=t.toLowerCase(),function(r){return he(r)===t}}function me(t){return Array.isArray(t)}function z(t){return typeof t=="undefined"}function Pt(t){return t!==null&&!z(t)&&t.constructor!==null&&!z(t.constructor)&&typeof t.constructor.isBuffer=="function"&&t.constructor.isBuffer(t)}var Je=T("ArrayBuffer");function Nt(t){var e;return typeof ArrayBuffer!="undefined"&&ArrayBuffer.isView?e=ArrayBuffer.isView(t):e=t&&t.buffer&&Je(t.buffer),e}function Tt(t){return typeof t=="string"}function Dt(t){return typeof t=="number"}function We(t){return t!==null&&typeof t=="object"}function H(t){if(he(t)!=="object")return!1;var e=Object.getPrototypeOf(t);return e===null||e===Object.prototype}var Ut=T("Date"),Bt=T("File"),Lt=T("Blob"),kt=T("FileList");function ve(t){return pe.call(t)==="[object Function]"}function Ft(t){return We(t)&&ve(t.pipe)}function jt(t){var e="[object FormData]";return t&&(typeof FormData=="function"&&t instanceof FormData||pe.call(t)===e||ve(t.toString)&&t.toString()===e)}var It=T("URLSearchParams");function qt(t){return t.trim?t.trim():t.replace(/^\s+|\s+$/g,"")}function Mt(){return typeof navigator!="undefined"&&(navigator.product==="ReactNative"||navigator.product==="NativeScript"||navigator.product==="NS")?!1:typeof window!="undefined"&&typeof document!="undefined"}function be(t,e){if(!(t===null||typeof t=="undefined"))if(typeof t!="object"&&(t=[t]),me(t))for(var r=0,n=t.length;r<n;r++)e.call(null,t[r],r,t);else for(var a in t)Object.prototype.hasOwnProperty.call(t,a)&&e.call(null,t[a],a,t)}function se(){var t={};function e(a,s){H(t[s])&&H(a)?t[s]=se(t[s],a):H(a)?t[s]=se({},a):me(a)?t[s]=a.slice():t[s]=a}for(var r=0,n=arguments.length;r<n;r++)be(arguments[r],e);return t}function Vt(t,e,r){return be(e,function(a,s){r&&typeof a=="function"?t[s]=$t(a,r):t[s]=a}),t}function Ht(t){return t.charCodeAt(0)===65279&&(t=t.slice(1)),t}function Jt(t,e,r,n){t.prototype=Object.create(e.prototype,n),t.prototype.constructor=t,r&&Object.assign(t.prototype,r)}function Wt(t,e,r){var n,a,s,o={};e=e||{};do{for(n=Object.getOwnPropertyNames(t),a=n.length;a-- >0;)s=n[a],o[s]||(e[s]=t[s],o[s]=!0);t=Object.getPrototypeOf(t)}while(t&&(!r||r(t,e))&&t!==Object.prototype);return e}function zt(t,e,r){t=String(t),(r===void 0||r>t.length)&&(r=t.length),r-=e.length;var n=t.indexOf(e,r);return n!==-1&&n===r}function Kt(t){if(!t)return null;var e=t.length;if(z(e))return null;for(var r=new Array(e);e-- >0;)r[e]=t[e];return r}var Xt=function(t){return function(e){return t&&e instanceof t}}(typeof Uint8Array!="undefined"&&Object.getPrototypeOf(Uint8Array)),v={isArray:me,isArrayBuffer:Je,isBuffer:Pt,isFormData:jt,isArrayBufferView:Nt,isString:Tt,isNumber:Dt,isObject:We,isPlainObject:H,isUndefined:z,isDate:Ut,isFile:Bt,isBlob:Lt,isFunction:ve,isStream:Ft,isURLSearchParams:It,isStandardBrowserEnv:Mt,forEach:be,merge:se,extend:Vt,trim:qt,stripBOM:Ht,inherits:Jt,toFlatObject:Wt,kindOf:he,kindOfTest:T,endsWith:zt,toArray:Kt,isTypedArray:Xt,isFileList:kt},D=v;function xe(t){return encodeURIComponent(t).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}var ze=function(e,r,n){if(!r)return e;var a;if(n)a=n(r);else if(D.isURLSearchParams(r))a=r.toString();else{var s=[];D.forEach(r,function(l,c){l===null||typeof l=="undefined"||(D.isArray(l)?c=c+"[]":l=[l],D.forEach(l,function(f){D.isDate(f)?f=f.toISOString():D.isObject(f)&&(f=JSON.stringify(f)),s.push(xe(c)+"="+xe(f))}))}),a=s.join("&")}if(a){var o=e.indexOf("#");o!==-1&&(e=e.slice(0,o)),e+=(e.indexOf("?")===-1?"?":"&")+a}return e},Yt=v;function K(){this.handlers=[]}K.prototype.use=function(e,r,n){return this.handlers.push({fulfilled:e,rejected:r,synchronous:n?n.synchronous:!1,runWhen:n?n.runWhen:null}),this.handlers.length-1};K.prototype.eject=function(e){this.handlers[e]&&(this.handlers[e]=null)};K.prototype.forEach=function(e){Yt.forEach(this.handlers,function(n){n!==null&&e(n)})};var Gt=K,Qt=v,Zt=function(e,r){Qt.forEach(e,function(a,s){s!==r&&s.toUpperCase()===r.toUpperCase()&&(e[r]=a,delete e[s])})},Ke=v;function L(t,e,r,n,a){Error.call(this),this.message=t,this.name="AxiosError",e&&(this.code=e),r&&(this.config=r),n&&(this.request=n),a&&(this.response=a)}Ke.inherits(L,Error,{toJSON:function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:this.config,code:this.code,status:this.response&&this.response.status?this.response.status:null}}});var Xe=L.prototype,Ye={};["ERR_BAD_OPTION_VALUE","ERR_BAD_OPTION","ECONNABORTED","ETIMEDOUT","ERR_NETWORK","ERR_FR_TOO_MANY_REDIRECTS","ERR_DEPRECATED","ERR_BAD_RESPONSE","ERR_BAD_REQUEST","ERR_CANCELED"].forEach(function(t){Ye[t]={value:t}});Object.defineProperties(L,Ye);Object.defineProperty(Xe,"isAxiosError",{value:!0});L.from=function(t,e,r,n,a,s){var o=Object.create(Xe);return Ke.toFlatObject(t,o,function(l){return l!==Error.prototype}),L.call(o,t.message,e,r,n,a),o.name=t.name,s&&Object.assign(o,s),o};var j=L,Ge={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1},R=v;function er(t,e){e=e||new FormData;var r=[];function n(s){return s===null?"":R.isDate(s)?s.toISOString():R.isArrayBuffer(s)||R.isTypedArray(s)?typeof Blob=="function"?new Blob([s]):Buffer.from(s):s}function a(s,o){if(R.isPlainObject(s)||R.isArray(s)){if(r.indexOf(s)!==-1)throw Error("Circular reference detected in "+o);r.push(s),R.forEach(s,function(l,c){if(!R.isUndefined(l)){var i=o?o+"."+c:c,f;if(l&&!o&&typeof l=="object"){if(R.endsWith(c,"{}"))l=JSON.stringify(l);else if(R.endsWith(c,"[]")&&(f=R.toArray(l))){f.forEach(function(h){!R.isUndefined(h)&&e.append(i,n(h))});return}}a(l,i)}}),r.pop()}else e.append(o,n(s))}return a(t),e}var Qe=er,ee=j,tr=function(e,r,n){var a=n.config.validateStatus;!n.status||!a||a(n.status)?e(n):r(new ee("Request failed with status code "+n.status,[ee.ERR_BAD_REQUEST,ee.ERR_BAD_RESPONSE][Math.floor(n.status/100)-4],n.config,n.request,n))},M=v,rr=M.isStandardBrowserEnv()?function(){return{write:function(r,n,a,s,o,u){var l=[];l.push(r+"="+encodeURIComponent(n)),M.isNumber(a)&&l.push("expires="+new Date(a).toGMTString()),M.isString(s)&&l.push("path="+s),M.isString(o)&&l.push("domain="+o),u===!0&&l.push("secure"),document.cookie=l.join("; ")},read:function(r){var n=document.cookie.match(new RegExp("(^|;\\s*)("+r+")=([^;]*)"));return n?decodeURIComponent(n[3]):null},remove:function(r){this.write(r,"",Date.now()-864e5)}}}():function(){return{write:function(){},read:function(){return null},remove:function(){}}}(),nr=function(e){return/^([a-z][a-z\d+\-.]*:)?\/\//i.test(e)},ar=function(e,r){return r?e.replace(/\/+$/,"")+"/"+r.replace(/^\/+/,""):e},sr=nr,ir=ar,Ze=function(e,r){return e&&!sr(r)?ir(e,r):r},te=v,or=["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"],ur=function(e){var r={},n,a,s;return e&&te.forEach(e.split(`
`),function(u){if(s=u.indexOf(":"),n=te.trim(u.substr(0,s)).toLowerCase(),a=te.trim(u.substr(s+1)),n){if(r[n]&&or.indexOf(n)>=0)return;n==="set-cookie"?r[n]=(r[n]?r[n]:[]).concat([a]):r[n]=r[n]?r[n]+", "+a:a}}),r},Se=v,lr=Se.isStandardBrowserEnv()?function(){var e=/(msie|trident)/i.test(navigator.userAgent),r=document.createElement("a"),n;function a(s){var o=s;return e&&(r.setAttribute("href",o),o=r.href),r.setAttribute("href",o),{href:r.href,protocol:r.protocol?r.protocol.replace(/:$/,""):"",host:r.host,search:r.search?r.search.replace(/^\?/,""):"",hash:r.hash?r.hash.replace(/^#/,""):"",hostname:r.hostname,port:r.port,pathname:r.pathname.charAt(0)==="/"?r.pathname:"/"+r.pathname}}return n=a(window.location.href),function(o){var u=Se.isString(o)?a(o):o;return u.protocol===n.protocol&&u.host===n.host}}():function(){return function(){return!0}}(),ie=j,fr=v;function et(t){ie.call(this,t==null?"canceled":t,ie.ERR_CANCELED),this.name="CanceledError"}fr.inherits(et,ie,{__CANCEL__:!0});var X=et,cr=function(e){var r=/^([-+\w]{1,25})(:?\/\/|:)/.exec(e);return r&&r[1]||""},I=v,dr=tr,pr=rr,hr=ze,mr=Ze,vr=ur,br=lr,yr=Ge,A=j,Er=X,wr=cr,ge=function(e){return new Promise(function(n,a){var s=e.data,o=e.headers,u=e.responseType,l;function c(){e.cancelToken&&e.cancelToken.unsubscribe(l),e.signal&&e.signal.removeEventListener("abort",l)}I.isFormData(s)&&I.isStandardBrowserEnv()&&delete o["Content-Type"];var i=new XMLHttpRequest;if(e.auth){var f=e.auth.username||"",h=e.auth.password?unescape(encodeURIComponent(e.auth.password)):"";o.Authorization="Basic "+btoa(f+":"+h)}var p=mr(e.baseURL,e.url);i.open(e.method.toUpperCase(),hr(p,e.params,e.paramsSerializer),!0),i.timeout=e.timeout;function d(){if(!!i){var E="getAllResponseHeaders"in i?vr(i.getAllResponseHeaders()):null,C=!u||u==="text"||u==="json"?i.responseText:i.response,O={data:C,status:i.status,statusText:i.statusText,headers:E,config:e,request:i};dr(function(Q){n(Q),c()},function(Q){a(Q),c()},O),i=null}}if("onloadend"in i?i.onloadend=d:i.onreadystatechange=function(){!i||i.readyState!==4||i.status===0&&!(i.responseURL&&i.responseURL.indexOf("file:")===0)||setTimeout(d)},i.onabort=function(){!i||(a(new A("Request aborted",A.ECONNABORTED,e,i)),i=null)},i.onerror=function(){a(new A("Network Error",A.ERR_NETWORK,e,i,i)),i=null},i.ontimeout=function(){var C=e.timeout?"timeout of "+e.timeout+"ms exceeded":"timeout exceeded",O=e.transitional||yr;e.timeoutErrorMessage&&(C=e.timeoutErrorMessage),a(new A(C,O.clarifyTimeoutError?A.ETIMEDOUT:A.ECONNABORTED,e,i)),i=null},I.isStandardBrowserEnv()){var N=(e.withCredentials||br(p))&&e.xsrfCookieName?pr.read(e.xsrfCookieName):void 0;N&&(o[e.xsrfHeaderName]=N)}"setRequestHeader"in i&&I.forEach(o,function(C,O){typeof s=="undefined"&&O.toLowerCase()==="content-type"?delete o[O]:i.setRequestHeader(O,C)}),I.isUndefined(e.withCredentials)||(i.withCredentials=!!e.withCredentials),u&&u!=="json"&&(i.responseType=e.responseType),typeof e.onDownloadProgress=="function"&&i.addEventListener("progress",e.onDownloadProgress),typeof e.onUploadProgress=="function"&&i.upload&&i.upload.addEventListener("progress",e.onUploadProgress),(e.cancelToken||e.signal)&&(l=function(E){!i||(a(!E||E&&E.type?new Er:E),i.abort(),i=null)},e.cancelToken&&e.cancelToken.subscribe(l),e.signal&&(e.signal.aborted?l():e.signal.addEventListener("abort",l))),s||(s=null);var g=wr(p);if(g&&["http","https","file"].indexOf(g)===-1){a(new A("Unsupported protocol "+g+":",A.ERR_BAD_REQUEST,e));return}i.send(s)})},_r=null,m=v,Oe=Zt,Ae=j,Rr=Ge,xr=Qe,Sr={"Content-Type":"application/x-www-form-urlencoded"};function Ce(t,e){!m.isUndefined(t)&&m.isUndefined(t["Content-Type"])&&(t["Content-Type"]=e)}function gr(){var t;return(typeof XMLHttpRequest!="undefined"||typeof process!="undefined"&&Object.prototype.toString.call(process)==="[object process]")&&(t=ge),t}function Or(t,e,r){if(m.isString(t))try{return(e||JSON.parse)(t),m.trim(t)}catch(n){if(n.name!=="SyntaxError")throw n}return(r||JSON.stringify)(t)}var Y={transitional:Rr,adapter:gr(),transformRequest:[function(e,r){if(Oe(r,"Accept"),Oe(r,"Content-Type"),m.isFormData(e)||m.isArrayBuffer(e)||m.isBuffer(e)||m.isStream(e)||m.isFile(e)||m.isBlob(e))return e;if(m.isArrayBufferView(e))return e.buffer;if(m.isURLSearchParams(e))return Ce(r,"application/x-www-form-urlencoded;charset=utf-8"),e.toString();var n=m.isObject(e),a=r&&r["Content-Type"],s;if((s=m.isFileList(e))||n&&a==="multipart/form-data"){var o=this.env&&this.env.FormData;return xr(s?{"files[]":e}:e,o&&new o)}else if(n||a==="application/json")return Ce(r,"application/json"),Or(e);return e}],transformResponse:[function(e){var r=this.transitional||Y.transitional,n=r&&r.silentJSONParsing,a=r&&r.forcedJSONParsing,s=!n&&this.responseType==="json";if(s||a&&m.isString(e)&&e.length)try{return JSON.parse(e)}catch(o){if(s)throw o.name==="SyntaxError"?Ae.from(o,Ae.ERR_BAD_RESPONSE,this,null,this.response):o}return e}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:_r},validateStatus:function(e){return e>=200&&e<300},headers:{common:{Accept:"application/json, text/plain, */*"}}};m.forEach(["delete","get","head"],function(e){Y.headers[e]={}});m.forEach(["post","put","patch"],function(e){Y.headers[e]=m.merge(Sr)});var ye=Y,Ar=v,Cr=ye,$r=function(e,r,n){var a=this||Cr;return Ar.forEach(n,function(o){e=o.call(a,e,r)}),e},tt=function(e){return!!(e&&e.__CANCEL__)},$e=v,re=$r,Pr=tt,Nr=ye,Tr=X;function ne(t){if(t.cancelToken&&t.cancelToken.throwIfRequested(),t.signal&&t.signal.aborted)throw new Tr}var Dr=function(e){ne(e),e.headers=e.headers||{},e.data=re.call(e,e.data,e.headers,e.transformRequest),e.headers=$e.merge(e.headers.common||{},e.headers[e.method]||{},e.headers),$e.forEach(["delete","get","head","post","put","patch","common"],function(a){delete e.headers[a]});var r=e.adapter||Nr.adapter;return r(e).then(function(a){return ne(e),a.data=re.call(e,a.data,a.headers,e.transformResponse),a},function(a){return Pr(a)||(ne(e),a&&a.response&&(a.response.data=re.call(e,a.response.data,a.response.headers,e.transformResponse))),Promise.reject(a)})},w=v,rt=function(e,r){r=r||{};var n={};function a(i,f){return w.isPlainObject(i)&&w.isPlainObject(f)?w.merge(i,f):w.isPlainObject(f)?w.merge({},f):w.isArray(f)?f.slice():f}function s(i){if(w.isUndefined(r[i])){if(!w.isUndefined(e[i]))return a(void 0,e[i])}else return a(e[i],r[i])}function o(i){if(!w.isUndefined(r[i]))return a(void 0,r[i])}function u(i){if(w.isUndefined(r[i])){if(!w.isUndefined(e[i]))return a(void 0,e[i])}else return a(void 0,r[i])}function l(i){if(i in r)return a(e[i],r[i]);if(i in e)return a(void 0,e[i])}var c={url:o,method:o,data:o,baseURL:u,transformRequest:u,transformResponse:u,paramsSerializer:u,timeout:u,timeoutMessage:u,withCredentials:u,adapter:u,responseType:u,xsrfCookieName:u,xsrfHeaderName:u,onUploadProgress:u,onDownloadProgress:u,decompress:u,maxContentLength:u,maxBodyLength:u,beforeRedirect:u,transport:u,httpAgent:u,httpsAgent:u,cancelToken:u,socketPath:u,responseEncoding:u,validateStatus:l};return w.forEach(Object.keys(e).concat(Object.keys(r)),function(f){var h=c[f]||s,p=h(f);w.isUndefined(p)&&h!==l||(n[f]=p)}),n},nt={version:"0.27.2"},Ur=nt.version,$=j,Ee={};["object","boolean","number","function","string","symbol"].forEach(function(t,e){Ee[t]=function(n){return typeof n===t||"a"+(e<1?"n ":" ")+t}});var Pe={};Ee.transitional=function(e,r,n){function a(s,o){return"[Axios v"+Ur+"] Transitional option '"+s+"'"+o+(n?". "+n:"")}return function(s,o,u){if(e===!1)throw new $(a(o," has been removed"+(r?" in "+r:"")),$.ERR_DEPRECATED);return r&&!Pe[o]&&(Pe[o]=!0,console.warn(a(o," has been deprecated since v"+r+" and will be removed in the near future"))),e?e(s,o,u):!0}};function Br(t,e,r){if(typeof t!="object")throw new $("options must be an object",$.ERR_BAD_OPTION_VALUE);for(var n=Object.keys(t),a=n.length;a-- >0;){var s=n[a],o=e[s];if(o){var u=t[s],l=u===void 0||o(u,s,t);if(l!==!0)throw new $("option "+s+" must be "+l,$.ERR_BAD_OPTION_VALUE);continue}if(r!==!0)throw new $("Unknown option "+s,$.ERR_BAD_OPTION)}}var Lr={assertOptions:Br,validators:Ee},at=v,kr=ze,Ne=Gt,Te=Dr,G=rt,Fr=Ze,st=Lr,U=st.validators;function k(t){this.defaults=t,this.interceptors={request:new Ne,response:new Ne}}k.prototype.request=function(e,r){typeof e=="string"?(r=r||{},r.url=e):r=e||{},r=G(this.defaults,r),r.method?r.method=r.method.toLowerCase():this.defaults.method?r.method=this.defaults.method.toLowerCase():r.method="get";var n=r.transitional;n!==void 0&&st.assertOptions(n,{silentJSONParsing:U.transitional(U.boolean),forcedJSONParsing:U.transitional(U.boolean),clarifyTimeoutError:U.transitional(U.boolean)},!1);var a=[],s=!0;this.interceptors.request.forEach(function(p){typeof p.runWhen=="function"&&p.runWhen(r)===!1||(s=s&&p.synchronous,a.unshift(p.fulfilled,p.rejected))});var o=[];this.interceptors.response.forEach(function(p){o.push(p.fulfilled,p.rejected)});var u;if(!s){var l=[Te,void 0];for(Array.prototype.unshift.apply(l,a),l=l.concat(o),u=Promise.resolve(r);l.length;)u=u.then(l.shift(),l.shift());return u}for(var c=r;a.length;){var i=a.shift(),f=a.shift();try{c=i(c)}catch(h){f(h);break}}try{u=Te(c)}catch(h){return Promise.reject(h)}for(;o.length;)u=u.then(o.shift(),o.shift());return u};k.prototype.getUri=function(e){e=G(this.defaults,e);var r=Fr(e.baseURL,e.url);return kr(r,e.params,e.paramsSerializer)};at.forEach(["delete","get","head","options"],function(e){k.prototype[e]=function(r,n){return this.request(G(n||{},{method:e,url:r,data:(n||{}).data}))}});at.forEach(["post","put","patch"],function(e){function r(n){return function(s,o,u){return this.request(G(u||{},{method:e,headers:n?{"Content-Type":"multipart/form-data"}:{},url:s,data:o}))}}k.prototype[e]=r(),k.prototype[e+"Form"]=r(!0)});var jr=k,Ir=X;function F(t){if(typeof t!="function")throw new TypeError("executor must be a function.");var e;this.promise=new Promise(function(a){e=a});var r=this;this.promise.then(function(n){if(!!r._listeners){var a,s=r._listeners.length;for(a=0;a<s;a++)r._listeners[a](n);r._listeners=null}}),this.promise.then=function(n){var a,s=new Promise(function(o){r.subscribe(o),a=o}).then(n);return s.cancel=function(){r.unsubscribe(a)},s},t(function(a){r.reason||(r.reason=new Ir(a),e(r.reason))})}F.prototype.throwIfRequested=function(){if(this.reason)throw this.reason};F.prototype.subscribe=function(e){if(this.reason){e(this.reason);return}this._listeners?this._listeners.push(e):this._listeners=[e]};F.prototype.unsubscribe=function(e){if(!!this._listeners){var r=this._listeners.indexOf(e);r!==-1&&this._listeners.splice(r,1)}};F.source=function(){var e,r=new F(function(a){e=a});return{token:r,cancel:e}};var qr=F,Mr=function(e){return function(n){return e.apply(null,n)}},Vr=v,Hr=function(e){return Vr.isObject(e)&&e.isAxiosError===!0},De=v,Jr=He,J=jr,Wr=rt,zr=ye;function it(t){var e=new J(t),r=Jr(J.prototype.request,e);return De.extend(r,J.prototype,e),De.extend(r,e),r.create=function(a){return it(Wr(t,a))},r}var y=it(zr);y.Axios=J;y.CanceledError=X;y.CancelToken=qr;y.isCancel=tt;y.VERSION=nt.version;y.toFormData=Qe;y.AxiosError=j;y.Cancel=y.CanceledError;y.all=function(e){return Promise.all(e)};y.spread=Mr;y.isAxiosError=Hr;de.exports=y;de.exports.default=y;var W=de.exports;const Kr={class:"my-2 mx-2"},Xr=["for"],Yr=["id","name"],Gr=S("option",null,null,-1),Qr=["value"],oe={__name:"SelectMenu",props:{label:String,options:Array},setup(t){const e=b({});return(r,n)=>(x(),P("div",Kr,[S("label",{for:t.label,class:"block text-sm font-medium text-gray-700"},B(t.label),9,Xr),dt(S("select",{id:t.label,name:t.label,class:"mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm rounded-md","onUpdate:modelValue":n[0]||(n[0]=a=>e.value=a),onChange:n[1]||(n[1]=a=>r.$emit("selected",e.value))},[Gr,(x(!0),P(fe,null,ht(t.options,a=>(x(),P("option",{value:a},B(a.name)+" "+B(a.first_name)+" "+B(a.last_name),9,Qr))),256))],40,Yr),[[pt,e.value]])]))}},Zr={class:"text-sm font-medium text-gray-900"},en={class:"text-sm text-gray-500"},tn={__name:"Toggle",props:{enabled:Boolean,label:String,subtext:String},setup(t){const e=t;return(r,n)=>(x(),ce(V(Ot),{as:"div",class:"flex items-center my-4 mx-4"},{default:q(()=>[_(V(At),{modelValue:t.enabled,"onUpdate:modelValue":[n[0]||(n[0]=a=>mt(enabled)?enabled.value=a:null),n[1]||(n[1]=a=>r.$emit("changed",e.enabled))],class:Re([t.enabled?"bg-orange-600":"bg-gray-200","relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"])},{default:q(()=>[S("span",{"aria-hidden":"true",class:Re([t.enabled?"translate-x-5":"translate-x-0","pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"])},null,2)]),_:1},8,["modelValue","class"]),_(V(Ct),{as:"span",class:"ml-3"},{default:q(()=>[S("span",Zr,B(t.label),1),S("span",en,B(t.subtext),1)]),_:1})]),_:1}))}},rn={class:"flex flex-wrap justify-between items-center my-4 mx-4"},nn={class:"flex flex-wrap items-center"},an={class:"flex flex-wrap"},sn=je(" Save "),on={__name:"NewRaceResult",props:{drivers:Array,event:Object},emits:["submitForm"],setup(t,{emit:e}){const r=t,n=b(0),a=b(0),s=b(0),o=b(!1),u=b({});function l(d){u.value=d}function c(d){n.value=d}function i(d){a.value=d}function f(d){s.value=d}function h(d){o.value=d}function p(){W.post(route("result.store"),{driver_id:u.value.id,event_id:r.event.id,startingPos:n.value,finishPos:a.value,pointsEarned:s.value,dnf:o.value}).then(d=>{e("submitForm")})}return(d,N)=>(x(),P("form",rn,[S("div",nn,[t.drivers.length>0?(x(),ce(oe,{key:0,label:"Driver",options:t.drivers,onSelected:l},null,8,["options"])):ae("",!0),_(Z,{id:"starting_pos",label:"Start Pos",value:n.value,placeholder:n.value,onUpdated:c},null,8,["value","placeholder"]),_(Z,{id:"finish_pos",label:"Finish Pos",placeholder:a.value,value:a.value,onUpdated:i},null,8,["placeholder","value"]),_(Z,{id:"points_earned",label:"Points Earned",value:s.value,placeholder:s.value,onUpdated:f},null,8,["value","placeholder"])]),S("div",an,[_(tn,{id:"starting_pos",label:"DNF",onChanged:h}),_(Ie,{onClick:N[0]||(N[0]=Fe(g=>p(),["prevent"]))},{default:q(()=>[sn]),_:1})])]))}},un={class:"flex flex-wrap justify-between items-center w-100 my-4 mx-4"},ln={class:"flex flex-wrap"},fn=je(" Create a New Race Result "),cn={key:0},dn={key:1},pn={key:2},hn=S("p",{class:"mx-4 my-4 text-center"}," No results for this event yet... Maybe you should add some! ",-1),mn=[hn],vn={layout:yt},An=Object.assign(vn,{__name:"Index",props:{franchises:Array},setup(t){const e=b({}),r=b({}),n=b([]),a=b([]),s=b([]);function o(i){e.value=i,W.get(route("event.index.collection",{franchise_slug:e.value.slug})).then(f=>{a.value=f.data.data}).catch(f=>{console.log(f)}),W.get(route("drivers.index.collection",{franchise_slug:e.value.slug})).then(f=>{n.value=f.data.data})}function u(i){r.value=i,l()}function l(){W.get(route("results.index.collection",{franchise_slug:e.value.slug,event_id:r.value.id})).then(i=>{s.value=i.data.data}).catch(i=>{console.log(i)})}function c(){s.value.unshift({finish_pos:0,"driver.first_name":"Unknown"})}return(i,f)=>{const h=vt("Head");return x(),P(fe,null,[_(h,{title:"Admin | Restuls"}),_(Et,{title:"Results"}),S("div",un,[S("div",ln,[_(oe,{onSelected:o,label:"Franchise",options:t.franchises},null,8,["options"]),a.value.length>0?(x(),ce(oe,{key:0,onSelected:u,label:"Event",options:a.value},null,8,["options"])):ae("",!0)]),_(Ie,{onClick:f[0]||(f[0]=Fe(p=>c(),["prevent"])),class:"my-0 mx-0 p-0"},{default:q(()=>[fn]),_:1})]),r.value?(x(),P("div",cn,[_(on,{drivers:n.value,event:r.value,onSubmitForm:l},null,8,["drivers","event"])])):ae("",!0),s.value.length>0?(x(),P("div",dn,[_(wt,{franchise:e.value,results:s.value},null,8,["franchise","results"])])):(x(),P("div",pn,mn))],64)}}});export{An as default};

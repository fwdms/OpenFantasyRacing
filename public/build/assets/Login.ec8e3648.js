import{o as n,c as u,a as l,b as f,d as e,u as o,t as x,ab as h,r as c,ac as g,ae as d,af as m,ag as b,w,g as v,F as y,i as k}from"./app.a08015f2.js";import{F as L}from"./FullScreen.cd4bf29e.js";/* empty css            */function B(a,s){return n(),u("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor","aria-hidden":"true"},[l("path",{"fill-rule":"evenodd",d:"M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z","clip-rule":"evenodd"})])}const M={class:"rounded-md bg-red-100 border-red-500 border-solid border-2 p-4"},V={class:"flex"},j={class:"flex-shrink-0"},F={class:"ml-3"},S={class:"text-sm font-medium text-red-900"},$={__name:"Alert",props:{errors:String},setup(a){return(s,i)=>(n(),f("div",M,[e("div",V,[e("div",j,[l(o(B),{class:"h-5 w-5 text-red-400","aria-hidden":"true"})]),e("div",F,[e("h3",S,x(a.errors),1)])])]))}},C={class:"h-screen flex"},H={class:"flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24"},D={class:"mx-auto w-full max-w-sm lg:w-96"},N=e("div",null,[e("h2",{class:"mt-6 text-3xl font-extrabold text-gray-900"}," Log in to your account ")],-1),U={class:"mt-8"},q={class:"mt-6"},G=["onSubmit"],P=e("label",{for:"email",class:"block text-sm font-medium text-gray-700"}," Email address ",-1),z={class:"mt-1"},A={class:"space-y-1"},E=e("label",{for:"password",class:"block text-sm font-medium text-gray-700"}," Password ",-1),O={class:"mt-1"},R={class:"flex items-center justify-between"},T={class:"flex items-center"},W=e("label",{for:"remember",class:"ml-2 block text-sm text-gray-900"}," Remember me ",-1),Y={class:"text-sm"},I=k(" Forgot your password? "),J=e("div",null,[e("button",{type:"submit",class:"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"}," Sign in ")],-1),K=e("div",{class:"hidden lg:block relative w-0 flex-1"},[e("img",{class:"absolute inset-0 h-full w-full object-cover",src:"https://images.unsplash.com/photo-1547025603-ef800f02690e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3600&q=80",alt:"Photo by toine G on Unsplash"})],-1),Q={layout:L},oe=Object.assign(Q,{__name:"Login",props:{canResetPassword:Boolean,status:String,errors:Object},setup(a){const s=h({email:"",password:"",remember:!1}),i=()=>{s.post(route("login"),{onFinish:()=>s.reset("password")})};return(X,t)=>{const p=c("Head"),_=c("Link");return n(),f(y,null,[l(p,{title:"Log in"}),e("div",C,[e("div",H,[e("div",D,[N,e("div",U,[e("div",q,[e("form",{onSubmit:g(i,["prevent"]),class:"space-y-6"},[e("div",null,[P,e("div",z,[d(e("input",{"onUpdate:modelValue":t[0]||(t[0]=r=>o(s).email=r),id:"email",name:"email",type:"email",autocomplete:"email",required:"",class:"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm"},null,512),[[m,o(s).email]])])]),e("div",A,[E,e("div",O,[d(e("input",{"onUpdate:modelValue":t[1]||(t[1]=r=>o(s).password=r),id:"password",name:"password",type:"password",autocomplete:"current-password",required:"",class:"appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm"},null,512),[[m,o(s).password]])])]),e("div",R,[e("div",T,[d(e("input",{"onUpdate:modelValue":t[2]||(t[2]=r=>o(s).remember=r),id:"remember",name:"remember",type:"checkbox",class:"h-4 w-4 text-orange-600 focus:ring-orange-500 border-orange-300 rounded"},null,512),[[b,o(s).remember]]),W]),e("div",Y,[l(_,{href:"/forgot-password",class:"font-medium text-gray-600 hover:text-orange-500"},{default:w(()=>[I]),_:1})])]),o(s).errors.email?(n(),u($,{key:0,errors:a.errors.email},null,8,["errors"])):v("",!0),J],40,G)])])])]),K])],64)}}});export{oe as default};

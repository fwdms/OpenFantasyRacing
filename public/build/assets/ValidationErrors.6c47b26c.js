import{l as c,Y as _,o as t,b as s,t as u,X as m,_ as p,ad as f,d as l,F as g,e as h,g as v}from"./app.a08015f2.js";const $=["value"],I={__name:"Input",props:["modelValue"],emits:["update:modelValue"],setup(e){const r=c(null);return _(()=>{r.value.hasAttribute("autofocus")&&r.value.focus()}),(o,a)=>(t(),s("input",{class:"border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm",value:e.modelValue,onInput:a[0]||(a[0]=n=>o.$emit("update:modelValue",n.target.value)),ref_key:"input",ref:r},null,40,$))}},y={class:"block font-medium text-sm text-gray-700"},k={key:0},b={key:1},L={__name:"Label",props:["value"],setup(e){return(r,o)=>(t(),s("label",y,[e.value?(t(),s("span",k,u(e.value),1)):(t(),s("span",b,[m(r.$slots,"default")]))]))}},V={data(){return{computed:{hasErrors(){return Object.keys(errors.value).length>0},errors(){return f().props.value.errors}}}}},x={key:0},B=l("div",{class:"font-medium text-red-600"},"Whoops! Something went wrong.",-1),E={class:"mt-3 list-disc list-inside text-sm text-red-600"};function w(e,r,o,a,n,S){return e.hasErrors?(t(),s("div",x,[B,l("ul",E,[(t(!0),s(g,null,h(e.errors,(i,d)=>(t(),s("li",{key:d},u(i),1))),128))])])):v("",!0)}var N=p(V,[["render",w]]);export{N as B,I as _,L as a};

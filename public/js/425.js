(self.webpackChunk=self.webpackChunk||[]).push([[425],{757:(t,e,n)=>{t.exports=n(666)},666:t=>{var e=function(t){"use strict";var e,n=Object.prototype,r=n.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},a=o.iterator||"@@iterator",i=o.asyncIterator||"@@asyncIterator",c=o.toStringTag||"@@toStringTag";function s(t,e,n){return Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{s({},"")}catch(t){s=function(t,e,n){return t[e]=n}}function l(t,e,n,r){var o=e&&e.prototype instanceof m?e:m,a=Object.create(o.prototype),i=new S(r||[]);return a._invoke=function(t,e,n){var r=h;return function(o,a){if(r===p)throw new Error("Generator is already running");if(r===v){if("throw"===o)throw a;return O()}for(n.method=o,n.arg=a;;){var i=n.delegate;if(i){var c=C(i,n);if(c){if(c===d)continue;return c}}if("next"===n.method)n.sent=n._sent=n.arg;else if("throw"===n.method){if(r===h)throw r=v,n.arg;n.dispatchException(n.arg)}else"return"===n.method&&n.abrupt("return",n.arg);r=p;var s=u(t,e,n);if("normal"===s.type){if(r=n.done?v:f,s.arg===d)continue;return{value:s.arg,done:n.done}}"throw"===s.type&&(r=v,n.method="throw",n.arg=s.arg)}}}(t,n,i),a}function u(t,e,n){try{return{type:"normal",arg:t.call(e,n)}}catch(t){return{type:"throw",arg:t}}}t.wrap=l;var h="suspendedStart",f="suspendedYield",p="executing",v="completed",d={};function m(){}function y(){}function g(){}var w={};s(w,a,(function(){return this}));var x=Object.getPrototypeOf,b=x&&x(x(A([])));b&&b!==n&&r.call(b,a)&&(w=b);var _=g.prototype=m.prototype=Object.create(w);function k(t){["next","throw","return"].forEach((function(e){s(t,e,(function(t){return this._invoke(e,t)}))}))}function E(t,e){function n(o,a,i,c){var s=u(t[o],t,a);if("throw"!==s.type){var l=s.arg,h=l.value;return h&&"object"==typeof h&&r.call(h,"__await")?e.resolve(h.__await).then((function(t){n("next",t,i,c)}),(function(t){n("throw",t,i,c)})):e.resolve(h).then((function(t){l.value=t,i(l)}),(function(t){return n("throw",t,i,c)}))}c(s.arg)}var o;this._invoke=function(t,r){function a(){return new e((function(e,o){n(t,r,e,o)}))}return o=o?o.then(a,a):a()}}function C(t,n){var r=t.iterator[n.method];if(r===e){if(n.delegate=null,"throw"===n.method){if(t.iterator.return&&(n.method="return",n.arg=e,C(t,n),"throw"===n.method))return d;n.method="throw",n.arg=new TypeError("The iterator does not provide a 'throw' method")}return d}var o=u(r,t.iterator,n.arg);if("throw"===o.type)return n.method="throw",n.arg=o.arg,n.delegate=null,d;var a=o.arg;return a?a.done?(n[t.resultName]=a.value,n.next=t.nextLoc,"return"!==n.method&&(n.method="next",n.arg=e),n.delegate=null,d):a:(n.method="throw",n.arg=new TypeError("iterator result is not an object"),n.delegate=null,d)}function L(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function N(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function S(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(L,this),this.reset(!0)}function A(t){if(t){var n=t[a];if(n)return n.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var o=-1,i=function n(){for(;++o<t.length;)if(r.call(t,o))return n.value=t[o],n.done=!1,n;return n.value=e,n.done=!0,n};return i.next=i}}return{next:O}}function O(){return{value:e,done:!0}}return y.prototype=g,s(_,"constructor",g),s(g,"constructor",y),y.displayName=s(g,c,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===y||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,g):(t.__proto__=g,s(t,c,"GeneratorFunction")),t.prototype=Object.create(_),t},t.awrap=function(t){return{__await:t}},k(E.prototype),s(E.prototype,i,(function(){return this})),t.AsyncIterator=E,t.async=function(e,n,r,o,a){void 0===a&&(a=Promise);var i=new E(l(e,n,r,o),a);return t.isGeneratorFunction(n)?i:i.next().then((function(t){return t.done?t.value:i.next()}))},k(_),s(_,c,"Generator"),s(_,a,(function(){return this})),s(_,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=[];for(var n in t)e.push(n);return e.reverse(),function n(){for(;e.length;){var r=e.pop();if(r in t)return n.value=r,n.done=!1,n}return n.done=!0,n}},t.values=A,S.prototype={constructor:S,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=e,this.done=!1,this.delegate=null,this.method="next",this.arg=e,this.tryEntries.forEach(N),!t)for(var n in this)"t"===n.charAt(0)&&r.call(this,n)&&!isNaN(+n.slice(1))&&(this[n]=e)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var n=this;function o(r,o){return c.type="throw",c.arg=t,n.next=r,o&&(n.method="next",n.arg=e),!!o}for(var a=this.tryEntries.length-1;a>=0;--a){var i=this.tryEntries[a],c=i.completion;if("root"===i.tryLoc)return o("end");if(i.tryLoc<=this.prev){var s=r.call(i,"catchLoc"),l=r.call(i,"finallyLoc");if(s&&l){if(this.prev<i.catchLoc)return o(i.catchLoc,!0);if(this.prev<i.finallyLoc)return o(i.finallyLoc)}else if(s){if(this.prev<i.catchLoc)return o(i.catchLoc,!0)}else{if(!l)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return o(i.finallyLoc)}}}},abrupt:function(t,e){for(var n=this.tryEntries.length-1;n>=0;--n){var o=this.tryEntries[n];if(o.tryLoc<=this.prev&&r.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var a=o;break}}a&&("break"===t||"continue"===t)&&a.tryLoc<=e&&e<=a.finallyLoc&&(a=null);var i=a?a.completion:{};return i.type=t,i.arg=e,a?(this.method="next",this.next=a.finallyLoc,d):this.complete(i)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),d},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var n=this.tryEntries[e];if(n.finallyLoc===t)return this.complete(n.completion,n.afterLoc),N(n),d}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var n=this.tryEntries[e];if(n.tryLoc===t){var r=n.completion;if("throw"===r.type){var o=r.arg;N(n)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,n,r){return this.delegate={iterator:A(t),resultName:n,nextLoc:r},"next"===this.method&&(this.arg=e),d}},t}(t.exports);try{regeneratorRuntime=e}catch(t){"object"==typeof globalThis?globalThis.regeneratorRuntime=e:Function("r","regeneratorRuntime = r")(e)}},425:(t,e,n)=>{"use strict";n.r(e),n.d(e,{default:()=>c});var r=n(757),o=n.n(r);function a(t,e,n,r,o,a,i){try{var c=t[a](i),s=c.value}catch(t){return void n(t)}c.done?e(s):Promise.resolve(s).then(r,o)}const i={components:{NavbarSecondary:n(326).Z},data:function(){return{contact:{name:"",phone:"",email:"",message:""}}},methods:{send:function(){var t,e=this;return(t=o().mark((function t(){return o().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e.axios.post("/api/contact",e.contact).then((function(t){})).catch((function(t){console.log(t)}));case 2:case"end":return t.stop()}}),t)})),function(){var e=this,n=arguments;return new Promise((function(r,o){var i=t.apply(e,n);function c(t){a(i,r,o,c,s,"next",t)}function s(t){a(i,r,o,c,s,"throw",t)}c(void 0)}))})()},thankYou:function(){var t=document.querySelectorAll(".hide-on-click"),e=document.querySelectorAll(".show-on-click");t.forEach((function(t){t.classList.replace("hide-on-click","hidden")})),e.forEach((function(t){t.classList.replace("hidden","show-on-click")}))}}};const c=(0,n(900).Z)(i,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("NavbarSecondary"),t._v(" "),n("div",{staticClass:"flex contacto justify-center items-center flex-col"},[t._m(0),t._v(" "),n("h3",{staticClass:"text-center hidden show-on-click"},[t._v("\n            MUCHAS GRACIAS\n        ")]),t._v(" "),t._m(1),t._v(" "),n("p",{staticClass:"text-center block mb-0 mt-5 hidden show-on-click"},[t._v("\n            Nos pondremos en contacto a la brevedad.\n        ")]),t._v(" "),n("form",{staticClass:"formulario mt-12 hide-on-click",on:{submit:function(e){return e.preventDefault(),t.send.apply(null,arguments)}}},[n("div",{staticClass:"field"},[n("div",{staticClass:"control"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.contact.name,expression:"contact.name"}],staticClass:"input",attrs:{type:"text",placeholder:"Nombre"},domProps:{value:t.contact.name},on:{input:function(e){e.target.composing||t.$set(t.contact,"name",e.target.value)}}})])]),t._v(" "),n("div",{staticClass:"field"},[n("div",{staticClass:"control"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.contact.phone,expression:"contact.phone"}],staticClass:"input",attrs:{type:"text",placeholder:"Teléfono"},domProps:{value:t.contact.phone},on:{input:function(e){e.target.composing||t.$set(t.contact,"phone",e.target.value)}}})])]),t._v(" "),n("div",{staticClass:"field"},[n("div",{staticClass:"control"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.contact.email,expression:"contact.email"}],staticClass:"input",attrs:{type:"email",placeholder:"Mail"},domProps:{value:t.contact.email},on:{input:function(e){e.target.composing||t.$set(t.contact,"email",e.target.value)}}})])]),t._v(" "),n("div",{staticClass:"field"},[n("div",{staticClass:"control"},[n("textarea",{directives:[{name:"model",rawName:"v-model",value:t.contact.message,expression:"contact.message"}],staticClass:"textarea",attrs:{placeholder:"Mensaje"},domProps:{value:t.contact.message},on:{input:function(e){e.target.composing||t.$set(t.contact,"message",e.target.value)}}})])]),t._v(" "),n("button",{staticClass:"my-5",attrs:{type:"submit"},on:{click:t.thankYou}},[t._v("\n                ENVIAR\n            ")])])])],1)}),[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("h3",{staticClass:"text-center hide-on-click"},[t._v("\n            CONSULTAS\n            "),n("br"),t._v("\n            Y SUGERENCIAS\n        ")])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("p",{staticClass:"text-center block mb-0 mt-5 hide-on-click"},[t._v("\n            Si tenés alguna duda o sugerencia sobre la información "),n("br"),t._v("en el sitio ponete en contacto con nosotros.\n        ")])}],!1,null,null,null).exports},326:(t,e,n)=>{"use strict";n.d(e,{Z:()=>o});const r={data:function(){return{image:{backgroundImage:"url(./img/navbar-secundario-img.png)",backgroundPosition:"center",height:"106px",width:"100%",backgroundSize:"cover",backgroundRepeat:"no-repeat"},slug:this.$route.name}}};const o=(0,n(900).Z)(r,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"w-full mb-16 text-center navbar-secondary",style:t.image},[n("div",{staticClass:"blue-filter relative flex items-center justify-center"},[n("div",{staticClass:"text-left ml-5 block m-0 tarifario-title absolute",staticStyle:{left:"0",width:"100%"}},[n("router-link",{attrs:{to:{name:"home"}}},[n("h1",[t._v("TARIFARIO "),n("span",[t._v("2022")])])]),t._v(" "),n("h5",{staticClass:"hidden"},[t._v("ARANCELES DE DISEÑO, ARGENTINA, 2022")])],1),t._v(" "),n("div",{staticClass:"absolute flex mb-0 right-0 space-x-6 mr-2 md:mr-5 right-0 mt-0"},[n("router-link",{attrs:{to:{name:"home"}}},[n("h6",{staticClass:"inicio"},[t._v("INICIO")])]),t._v(" "),n("router-link",{attrs:{to:{name:"contacto"}}},[n("h6",{staticClass:"contacto",style:["contacto"==this.slug?{"font-family":"Montserrat-Black"}:"Montserrat-Medium"]},[t._v("CONSULTAS")])])],1)])])}),[],!1,null,null,null).exports}}]);
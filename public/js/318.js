(self.webpackChunk=self.webpackChunk||[]).push([[318],{757:(t,e,r)=>{t.exports=r(666)},666:t=>{var e=function(t){"use strict";var e,r=Object.prototype,n=r.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},a=o.iterator||"@@iterator",i=o.asyncIterator||"@@asyncIterator",s=o.toStringTag||"@@toStringTag";function c(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{c({},"")}catch(t){c=function(t,e,r){return t[e]=r}}function u(t,e,r,n){var o=e&&e.prototype instanceof m?e:m,a=Object.create(o.prototype),i=new N(n||[]);return a._invoke=function(t,e,r){var n=f;return function(o,a){if(n===d)throw new Error("Generator is already running");if(n===p){if("throw"===o)throw a;return O()}for(r.method=o,r.arg=a;;){var i=r.delegate;if(i){var s=L(i,r);if(s){if(s===v)continue;return s}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if(n===f)throw n=p,r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n=d;var c=l(t,e,r);if("normal"===c.type){if(n=r.done?p:h,c.arg===v)continue;return{value:c.arg,done:r.done}}"throw"===c.type&&(n=p,r.method="throw",r.arg=c.arg)}}}(t,r,i),a}function l(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=u;var f="suspendedStart",h="suspendedYield",d="executing",p="completed",v={};function m(){}function y(){}function g(){}var x={};c(x,a,(function(){return this}));var _=Object.getPrototypeOf,b=_&&_(_(T([])));b&&b!==r&&n.call(b,a)&&(x=b);var w=g.prototype=m.prototype=Object.create(x);function E(t){["next","throw","return"].forEach((function(e){c(t,e,(function(t){return this._invoke(e,t)}))}))}function C(t,e){function r(o,a,i,s){var c=l(t[o],t,a);if("throw"!==c.type){var u=c.arg,f=u.value;return f&&"object"==typeof f&&n.call(f,"__await")?e.resolve(f.__await).then((function(t){r("next",t,i,s)}),(function(t){r("throw",t,i,s)})):e.resolve(f).then((function(t){u.value=t,i(u)}),(function(t){return r("throw",t,i,s)}))}s(c.arg)}var o;this._invoke=function(t,n){function a(){return new e((function(e,o){r(t,n,e,o)}))}return o=o?o.then(a,a):a()}}function L(t,r){var n=t.iterator[r.method];if(n===e){if(r.delegate=null,"throw"===r.method){if(t.iterator.return&&(r.method="return",r.arg=e,L(t,r),"throw"===r.method))return v;r.method="throw",r.arg=new TypeError("The iterator does not provide a 'throw' method")}return v}var o=l(n,t.iterator,r.arg);if("throw"===o.type)return r.method="throw",r.arg=o.arg,r.delegate=null,v;var a=o.arg;return a?a.done?(r[t.resultName]=a.value,r.next=t.nextLoc,"return"!==r.method&&(r.method="next",r.arg=e),r.delegate=null,v):a:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,v)}function k(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function j(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function N(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(k,this),this.reset(!0)}function T(t){if(t){var r=t[a];if(r)return r.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var o=-1,i=function r(){for(;++o<t.length;)if(n.call(t,o))return r.value=t[o],r.done=!1,r;return r.value=e,r.done=!0,r};return i.next=i}}return{next:O}}function O(){return{value:e,done:!0}}return y.prototype=g,c(w,"constructor",g),c(g,"constructor",y),y.displayName=c(g,s,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===y||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,g):(t.__proto__=g,c(t,s,"GeneratorFunction")),t.prototype=Object.create(w),t},t.awrap=function(t){return{__await:t}},E(C.prototype),c(C.prototype,i,(function(){return this})),t.AsyncIterator=C,t.async=function(e,r,n,o,a){void 0===a&&(a=Promise);var i=new C(u(e,r,n,o),a);return t.isGeneratorFunction(r)?i:i.next().then((function(t){return t.done?t.value:i.next()}))},E(w),c(w,s,"Generator"),c(w,a,(function(){return this})),c(w,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=[];for(var r in t)e.push(r);return e.reverse(),function r(){for(;e.length;){var n=e.pop();if(n in t)return r.value=n,r.done=!1,r}return r.done=!0,r}},t.values=T,N.prototype={constructor:N,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=e,this.done=!1,this.delegate=null,this.method="next",this.arg=e,this.tryEntries.forEach(j),!t)for(var r in this)"t"===r.charAt(0)&&n.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=e)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var r=this;function o(n,o){return s.type="throw",s.arg=t,r.next=n,o&&(r.method="next",r.arg=e),!!o}for(var a=this.tryEntries.length-1;a>=0;--a){var i=this.tryEntries[a],s=i.completion;if("root"===i.tryLoc)return o("end");if(i.tryLoc<=this.prev){var c=n.call(i,"catchLoc"),u=n.call(i,"finallyLoc");if(c&&u){if(this.prev<i.catchLoc)return o(i.catchLoc,!0);if(this.prev<i.finallyLoc)return o(i.finallyLoc)}else if(c){if(this.prev<i.catchLoc)return o(i.catchLoc,!0)}else{if(!u)throw new Error("try statement without catch or finally");if(this.prev<i.finallyLoc)return o(i.finallyLoc)}}}},abrupt:function(t,e){for(var r=this.tryEntries.length-1;r>=0;--r){var o=this.tryEntries[r];if(o.tryLoc<=this.prev&&n.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var a=o;break}}a&&("break"===t||"continue"===t)&&a.tryLoc<=e&&e<=a.finallyLoc&&(a=null);var i=a?a.completion:{};return i.type=t,i.arg=e,a?(this.method="next",this.next=a.finallyLoc,v):this.complete(i)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),v},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),j(r),v}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n=r.completion;if("throw"===n.type){var o=n.arg;j(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,r,n){return this.delegate={iterator:T(t),resultName:r,nextLoc:n},"next"===this.method&&(this.arg=e),v}},t}(t.exports);try{regeneratorRuntime=e}catch(t){"object"==typeof globalThis?globalThis.regeneratorRuntime=e:Function("r","regeneratorRuntime = r")(e)}},326:(t,e,r)=>{"use strict";r.d(e,{Z:()=>o});const n={data:function(){return{image:{backgroundImage:"url(./img/navbar-secundario-img.png)",backgroundPosition:"center",height:"106px",width:"100%",backgroundSize:"cover",backgroundRepeat:"no-repeat"},slug:this.$route.name}}};const o=(0,r(900).Z)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"w-full mb-16 text-center navbar-secondary",style:t.image},[r("div",{staticClass:"blue-filter relative flex items-center justify-center"},[r("div",{staticClass:"text-left ml-5 block m-0 tarifario-title absolute",staticStyle:{left:"0",width:"100%"}},[r("router-link",{attrs:{to:{name:"home"}}},[r("h1",[t._v("TARIFARIO "),r("span",[t._v("2022")])])]),t._v(" "),r("h5",{staticClass:"hidden"},[t._v("ARANCELES DE DISEÑO, ARGENTINA, 2022")])],1),t._v(" "),r("div",{staticClass:"absolute flex mb-0 right-0 space-x-6 mr-2 md:mr-5 right-0 mt-0"},[r("router-link",{attrs:{to:{name:"home"}}},[r("h6",{staticClass:"inicio"},[t._v("INICIO")])]),t._v(" "),r("router-link",{attrs:{to:{name:"contacto"}}},[r("h6",{staticClass:"contacto",style:["contacto"==this.slug?{"font-family":"Montserrat-Black"}:"Montserrat-Medium"]},[t._v("CONSULTAS")])])],1)])])}),[],!1,null,null,null).exports},318:(t,e,r)=>{"use strict";r.r(e),r.d(e,{default:()=>u});var n=r(757),o=r.n(n);const a={props:["text"]};var i=r(900);function s(t,e,r,n,o,a,i){try{var s=t[a](i),c=s.value}catch(t){return void r(t)}s.done?e(c):Promise.resolve(c).then(n,o)}const c={components:{Texts:(0,i.Z)(a,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"dropdown is-hoverable"},[t._m(0),t._v(" "),r("div",{staticClass:"dropdown-menu texto",attrs:{id:"dropdown-menu4",role:"menu"}},[r("div",{staticClass:"dropdown-content"},[r("div",{staticClass:"dropdown-item"},[r("p",[t._v(t._s(t.text))])])])])])}),[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"dropdown-trigger"},[r("button",{staticClass:"button",attrs:{"aria-haspopup":"true","aria-controls":"dropdown-menu1"}},[t._v("\n        ?\n        ")])])}],!1,null,null,null).exports,NavbarSecondary:r(326).Z},data:function(){return{product:[],texts:[],slug:this.$route.params.slug}},created:function(){this.loadProduct()},methods:{loadProduct:function(){var t,e=this;return(t=o().mark((function t(){return o().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e.axios.get(routes["product-showProduct"]+"/"+e.slug).then((function(t){e.product=t.data.product,e.texts=t.data.texts[0]})).catch((function(t){console.log(t)}));case 2:case"end":return t.stop()}}),t)})),function(){var e=this,r=arguments;return new Promise((function(n,o){var a=t.apply(e,r);function i(t){s(a,n,o,i,c,"next",t)}function c(t){s(a,n,o,i,c,"throw",t)}i(void 0)}))})()}}};const u=(0,i.Z)(c,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("NavbarSecondary"),t._v(" "),r("div",{staticClass:"show-product p-0"},[r("h3",{staticClass:"text-center"},[t._v("ARANCELES")]),t._v(" "),r("h1",{staticClass:"text-center uppercase"},[t._v(t._s(t.product.title))]),t._v(" "),t.product.subtitle?r("span",{staticClass:"block text-center"},[t._v(t._s(t.product.subtitle))]):t._e(),t._v(" "),r("div",{staticClass:"mt-16 flex items-center justify-center flex-col md:flex-row"},[r("div",{staticClass:"cliente-text mx-4 text-center"},[t._v("\n                CLIENTE A\n                "),r("Texts",{attrs:{text:this.texts.cliente_a}}),t._v(" "),r("div",{staticClass:"price-box flex justify-center align-center flex-col"},[t._v("\n                    $"+t._s(t.product.A)+"\n                ")])],1),t._v(" "),r("div",{staticClass:"cliente-text mx-4 text-center"},[t._v("\n                CLIENTE B\n                "),r("Texts",{attrs:{text:this.texts.cliente_b}}),t._v(" "),r("div",{staticClass:"price-box flex justify-center align-center flex-col"},[t._v("\n                    $"+t._s(t.product.B)+"\n                ")])],1),t._v(" "),r("div",{staticClass:"cliente-text mx-4 text-center"},[t._v("\n                CLIENTE C\n                "),r("Texts",{attrs:{text:this.texts.cliente_c}}),t._v(" "),r("div",{staticClass:"price-box flex justify-center align-center flex-col"},[t._v("\n                    $"+t._s(t.product.C)+"\n                ")])],1)])]),t._v(" "),t._m(0)],1)}),[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"flex justify-center mt-12 show-product-p"},[r("p",{staticClass:"w-80 md:w-1/2 text-center"},[t._v("\n            Si te preguntabas cuando cobrar por una tarea de diseño, o buscabas un tarifario de diseño gráfico en esta pagina encontrarás la información que buscas. "),r("br"),r("br"),t._v("\n            Recordá que los aranceles que listamos son montos orientativos para ayudar tanto a profesionales a presupuestar y cobrar por su trabajo, como a clientes que buscan saber cuanto deberían pagar por los mismos. Cada proyecto debe ser presupuestado basado en sus requerimientos, por lo que esta lista de precios debe ser tomada como una referencia orientativa. "),r("br"),r("br"),t._v("\n            Esperamos que te sea de utilidad.\n        ")])])}],!1,null,null,null).exports}}]);
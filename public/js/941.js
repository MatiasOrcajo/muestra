(self.webpackChunk=self.webpackChunk||[]).push([[941],{757:(t,e,r)=>{t.exports=r(666)},666:t=>{var e=function(t){"use strict";var e,r=Object.prototype,n=r.hasOwnProperty,o="function"==typeof Symbol?Symbol:{},i=o.iterator||"@@iterator",a=o.asyncIterator||"@@asyncIterator",c=o.toStringTag||"@@toStringTag";function s(t,e,r){return Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{s({},"")}catch(t){s=function(t,e,r){return t[e]=r}}function l(t,e,r,n){var o=e&&e.prototype instanceof m?e:m,i=Object.create(o.prototype),a=new N(n||[]);return i._invoke=function(t,e,r){var n=h;return function(o,i){if(n===f)throw new Error("Generator is already running");if(n===v){if("throw"===o)throw i;return O()}for(r.method=o,r.arg=i;;){var a=r.delegate;if(a){var c=k(a,r);if(c){if(c===p)continue;return c}}if("next"===r.method)r.sent=r._sent=r.arg;else if("throw"===r.method){if(n===h)throw n=v,r.arg;r.dispatchException(r.arg)}else"return"===r.method&&r.abrupt("return",r.arg);n=f;var s=u(t,e,r);if("normal"===s.type){if(n=r.done?v:d,s.arg===p)continue;return{value:s.arg,done:r.done}}"throw"===s.type&&(n=v,r.method="throw",r.arg=s.arg)}}}(t,r,a),i}function u(t,e,r){try{return{type:"normal",arg:t.call(e,r)}}catch(t){return{type:"throw",arg:t}}}t.wrap=l;var h="suspendedStart",d="suspendedYield",f="executing",v="completed",p={};function m(){}function g(){}function y(){}var _={};s(_,i,(function(){return this}));var b=Object.getPrototypeOf,w=b&&b(b(j([])));w&&w!==r&&n.call(w,i)&&(_=w);var x=y.prototype=m.prototype=Object.create(_);function C(t){["next","throw","return"].forEach((function(e){s(t,e,(function(t){return this._invoke(e,t)}))}))}function E(t,e){function r(o,i,a,c){var s=u(t[o],t,i);if("throw"!==s.type){var l=s.arg,h=l.value;return h&&"object"==typeof h&&n.call(h,"__await")?e.resolve(h.__await).then((function(t){r("next",t,a,c)}),(function(t){r("throw",t,a,c)})):e.resolve(h).then((function(t){l.value=t,a(l)}),(function(t){return r("throw",t,a,c)}))}c(s.arg)}var o;this._invoke=function(t,n){function i(){return new e((function(e,o){r(t,n,e,o)}))}return o=o?o.then(i,i):i()}}function k(t,r){var n=t.iterator[r.method];if(n===e){if(r.delegate=null,"throw"===r.method){if(t.iterator.return&&(r.method="return",r.arg=e,k(t,r),"throw"===r.method))return p;r.method="throw",r.arg=new TypeError("The iterator does not provide a 'throw' method")}return p}var o=u(n,t.iterator,r.arg);if("throw"===o.type)return r.method="throw",r.arg=o.arg,r.delegate=null,p;var i=o.arg;return i?i.done?(r[t.resultName]=i.value,r.next=t.nextLoc,"return"!==r.method&&(r.method="next",r.arg=e),r.delegate=null,p):i:(r.method="throw",r.arg=new TypeError("iterator result is not an object"),r.delegate=null,p)}function L(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function S(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function N(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(L,this),this.reset(!0)}function j(t){if(t){var r=t[i];if(r)return r.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length)){var o=-1,a=function r(){for(;++o<t.length;)if(n.call(t,o))return r.value=t[o],r.done=!1,r;return r.value=e,r.done=!0,r};return a.next=a}}return{next:O}}function O(){return{value:e,done:!0}}return g.prototype=y,s(x,"constructor",y),s(y,"constructor",g),g.displayName=s(y,c,"GeneratorFunction"),t.isGeneratorFunction=function(t){var e="function"==typeof t&&t.constructor;return!!e&&(e===g||"GeneratorFunction"===(e.displayName||e.name))},t.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,y):(t.__proto__=y,s(t,c,"GeneratorFunction")),t.prototype=Object.create(x),t},t.awrap=function(t){return{__await:t}},C(E.prototype),s(E.prototype,a,(function(){return this})),t.AsyncIterator=E,t.async=function(e,r,n,o,i){void 0===i&&(i=Promise);var a=new E(l(e,r,n,o),i);return t.isGeneratorFunction(r)?a:a.next().then((function(t){return t.done?t.value:a.next()}))},C(x),s(x,c,"Generator"),s(x,i,(function(){return this})),s(x,"toString",(function(){return"[object Generator]"})),t.keys=function(t){var e=[];for(var r in t)e.push(r);return e.reverse(),function r(){for(;e.length;){var n=e.pop();if(n in t)return r.value=n,r.done=!1,r}return r.done=!0,r}},t.values=j,N.prototype={constructor:N,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=e,this.done=!1,this.delegate=null,this.method="next",this.arg=e,this.tryEntries.forEach(S),!t)for(var r in this)"t"===r.charAt(0)&&n.call(this,r)&&!isNaN(+r.slice(1))&&(this[r]=e)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(t){if(this.done)throw t;var r=this;function o(n,o){return c.type="throw",c.arg=t,r.next=n,o&&(r.method="next",r.arg=e),!!o}for(var i=this.tryEntries.length-1;i>=0;--i){var a=this.tryEntries[i],c=a.completion;if("root"===a.tryLoc)return o("end");if(a.tryLoc<=this.prev){var s=n.call(a,"catchLoc"),l=n.call(a,"finallyLoc");if(s&&l){if(this.prev<a.catchLoc)return o(a.catchLoc,!0);if(this.prev<a.finallyLoc)return o(a.finallyLoc)}else if(s){if(this.prev<a.catchLoc)return o(a.catchLoc,!0)}else{if(!l)throw new Error("try statement without catch or finally");if(this.prev<a.finallyLoc)return o(a.finallyLoc)}}}},abrupt:function(t,e){for(var r=this.tryEntries.length-1;r>=0;--r){var o=this.tryEntries[r];if(o.tryLoc<=this.prev&&n.call(o,"finallyLoc")&&this.prev<o.finallyLoc){var i=o;break}}i&&("break"===t||"continue"===t)&&i.tryLoc<=e&&e<=i.finallyLoc&&(i=null);var a=i?i.completion:{};return a.type=t,a.arg=e,i?(this.method="next",this.next=i.finallyLoc,p):this.complete(a)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),p},finish:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.finallyLoc===t)return this.complete(r.completion,r.afterLoc),S(r),p}},catch:function(t){for(var e=this.tryEntries.length-1;e>=0;--e){var r=this.tryEntries[e];if(r.tryLoc===t){var n=r.completion;if("throw"===n.type){var o=n.arg;S(r)}return o}}throw new Error("illegal catch attempt")},delegateYield:function(t,r,n){return this.delegate={iterator:j(t),resultName:r,nextLoc:n},"next"===this.method&&(this.arg=e),p}},t}(t.exports);try{regeneratorRuntime=e}catch(t){"object"==typeof globalThis?globalThis.regeneratorRuntime=e:Function("r","regeneratorRuntime = r")(e)}},941:(t,e,r)=>{"use strict";r.r(e),r.d(e,{default:()=>h});var n=r(757),o=r.n(n);function i(t,e,r,n,o,i,a){try{var c=t[i](a),s=c.value}catch(t){return void r(t)}c.done?e(s):Promise.resolve(s).then(n,o)}const a={name:"Products",data:function(){return{categories:[]}},created:function(){this.loadPage()},methods:{loadPage:function(){var t,e=this;return(t=o().mark((function t(){return o().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e.axios.get(routes["product-index"]).then((function(t){e.categories=t.data})).catch((function(t){console.log(t)}));case 2:case"end":return t.stop()}}),t)})),function(){var e=this,r=arguments;return new Promise((function(n,o){var a=t.apply(e,r);function c(t){i(a,n,o,c,s,"next",t)}function s(t){i(a,n,o,c,s,"throw",t)}c(void 0)}))})()}}};var c=r(900);const s={data:function(){return{image:{backgroundImage:"url(./img/navbar-img.png)",backgroundPosition:"center",height:"400px",width:"100%",backgroundSize:"cover",backgroundRepeat:"no-repeat"}}},created:function(){this.watchSize},computed:{watchSize:function(){var t=window.innerWidth;t>750&&t<1600&&(this.image.height="325px")}}};function l(t,e,r,n,o,i,a){try{var c=t[i](a),s=c.value}catch(t){return void r(t)}c.done?e(s):Promise.resolve(s).then(n,o)}const u={components:{Products:(0,c.Z)(a,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"padding-x-responsive"},t._l(t.categories,(function(e){return r("div",{key:e.id,staticClass:"my-10 cuadro-categoria "},[r("h1",{staticClass:"uppercase category-title"},[t._v(t._s(e.title))]),t._v(" "),t._m(0,!0),t._v(" "),t._l(e.products,(function(e,n){return r("div",{key:e.id,staticClass:"p-4 grid grid-cols-12 cuadro-producto",staticStyle:{"box-shadow":"0 0 13px #00000029"},style:n%2==0?"background: white":"background: #F5F5F5"},[r("div",{staticClass:"col-span-6 md:col-span-5"},[r("router-link",{staticClass:"py-0 flex items-center",attrs:{to:{name:"showProduct",params:{slug:e.slug}}}},[r("h1",{staticClass:"bold-title",staticStyle:{color:"#131F3E"}},[t._v(t._s(e.title))])])],1),t._v(" "),r("div",{staticClass:"col-span-3 md:col-span-3 flex items-center align-center"},[e.subtitle?r("h1",{staticClass:"aclaracion-title",staticStyle:{color:"#131F3E"}},[t._v(t._s(e.subtitle))]):t._e()]),t._v(" "),r("div",{staticClass:"col-span-1 md:col-span-1 flex items-center justify-center bold-title",staticStyle:{color:"#131F3E"}},[t._v("\n              $"+t._s(e.A)+"\n          ")]),t._v(" "),r("div",{staticClass:"col-span-1 md:col-span-1 flex items-center justify-center bold-title",staticStyle:{color:"#131F3E"}},[t._v("\n              $"+t._s(e.B)+"\n          ")]),t._v(" "),r("div",{staticClass:"col-span-1 md:col-span-1 flex items-center justify-center bold-title",staticStyle:{color:"#131F3E"}},[t._v("\n              $"+t._s(e.C)+"\n          ")]),t._v(" "),r("div",{staticClass:"hidden md:block col-span-2 md:col-span-1 flex items-center justify-center"},[r("router-link",{staticClass:"consultar-title",staticStyle:{"text-decoration":"underline",color:"#131F3E"},attrs:{to:{name:"contacto"}}},[t._v("\n                Consultar\n              ")])],1)])}))],2)})),0)}),[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"grid grid-cols-12 mt-3 barra-descripcion p-4 ",staticStyle:{"box-shadow":"0 0 13px #00000029"}},[r("div",{staticClass:"col-span-6 md:col-span-5 bold-title"},[r("h1",{},[t._v("Descripción")])]),t._v(" "),r("div",{staticClass:"col-span-3 md:col-span-3 aclaracion-title"},[r("h1",{},[t._v("Aclaración")])]),t._v(" "),r("div",{staticClass:"col-span-1 md:col-span-1 bold-title"},[r("div",{staticClass:"hidden md:block bold-title"},[t._v("\n              CLIENTE A\n            ")]),t._v(" "),r("div",{staticClass:"block md:hidden bold-title"},[t._v("\n              A\n            ")])]),t._v(" "),r("div",{staticClass:"col-span-1 md:col-span-1 bold-title"},[r("div",{staticClass:"hidden md:block bold-title"},[t._v("\n              CLIENTE B\n            ")]),t._v(" "),r("div",{staticClass:"block md:hidden bold-title"},[t._v("\n              B\n            ")])]),t._v(" "),r("div",{staticClass:"col-span-1 md:col-span-1 bold-title"},[r("div",{staticClass:"hidden md:block bold-title"},[t._v("\n              CLIENTE C\n            ")]),t._v(" "),r("div",{staticClass:"block md:hidden bold-title"},[t._v("\n              C\n            ")])]),t._v(" "),r("div",{staticClass:"hidden md:block col-span-2 md:col-span-1 consultar-title flex justify-center consultar-title"})])}],!1,null,null,null).exports,Navbar:(0,c.Z)(s,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"w-full text-center",style:t.image},[r("div",{staticClass:"blue-filter relative"},[t._m(0),t._v(" "),r("div",{staticClass:"absolute flex top-0 space-x-6 mr-5 right-0 mt-5"},[r("router-link",{attrs:{to:{name:"home"}}},[r("h6",{staticClass:"inicio"},[t._v("INICIO")])]),t._v(" "),r("router-link",{attrs:{to:{name:"contacto"}}},[r("h6",{staticClass:"contacto"},[t._v("CONSULTAS")])])],1)])])}),[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"text-center tarifario-title absolute",staticStyle:{left:"0",right:"0","margin-left":"auto","margin-right":"auto",width:"100%",top:"0",transform:"translateY(50%)"}},[r("h1",[t._v("TARIFARIO "),r("span",[t._v("2022")])]),t._v(" "),r("h5",[t._v("ARANCELES DE DISEÑO, ARGENTINA, 2021")])])}],!1,null,null,null).exports},data:function(){return{menuCategories:[]}},created:function(){this.getCategories()},methods:{getCategories:function(){var t,e=this;return(t=o().mark((function t(){return o().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e.axios.get(routes["product-getCategories"]).then((function(t){e.menuCategories=t.data})).catch((function(t){console.log(t)}));case 2:case"end":return t.stop()}}),t)})),function(){var e=this,r=arguments;return new Promise((function(n,o){var i=t.apply(e,r);function a(t){l(i,n,o,a,c,"next",t)}function c(t){l(i,n,o,a,c,"throw",t)}a(void 0)}))})()}}};const h=(0,c.Z)(u,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[r("Navbar"),t._v(" "),r("h2",{staticClass:"text-center categories-h2"},[t._v("CATEGORIA")]),t._v(" "),r("div",{staticClass:"grid grid-cols-12 padding-x-responsive"},t._l(t.menuCategories,(function(e){return r("router-link",{key:e.id,staticClass:"uppercase category-box m-2 p-2 col-span-12 md:col-span-3",attrs:{to:{name:"showCategory",params:{slug:e.slug}}}},[t._v("\n              "+t._s(e.title)+"\n        ")])})),1),t._v(" "),r("Products")],1)}),[],!1,null,null,null).exports}}]);
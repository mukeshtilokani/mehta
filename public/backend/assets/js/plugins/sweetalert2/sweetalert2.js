/*!
* sweetalert2 v7.19.1
* Released under the MIT License.
*/
(function(e,t){'object'==typeof exports&&'undefined'!=typeof module?module.exports=t():'function'==typeof define&&define.amd?define(t):e.Sweetalert2=t()})(this,function(){'use strict';function e(e){var t=function e(){for(var t=arguments.length,n=Array(t),o=0;o<t;o++)n[o]=arguments[o];return this instanceof e?void Object.getPrototypeOf(e).apply(this,n):new(Function.prototype.bind.apply(e,[null].concat(n)))};return t.prototype=l(Object.create(e.prototype),{constructor:t}),Object.setPrototypeOf(t,e),t}function t(){var e=Ee.innerParams.get(this),t=Ee.domCache.get(this);e.showConfirmButton||(q(t.confirmButton),!e.showCancelButton&&q(t.actions)),T([t.popup,t.actions],B.loading),t.popup.removeAttribute('aria-busy'),t.popup.removeAttribute('data-loading'),t.confirmButton.disabled=!1,t.cancelButton.disabled=!1}function n(e){e.inputValidator||Object.keys(Se).forEach(function(t){e.input===t&&(e.inputValidator=e.expectRejections?Se[t]:Oe.adaptInputValidator(Se[t]))}),e.target&&('string'!=typeof e.target||document.querySelector(e.target))&&('string'==typeof e.target||e.target.appendChild)||(h('Target parameter is not valid, defaulting to "body"'),e.target='body');var t,n=M(),o='string'==typeof e.target?document.querySelector(e.target):e.target;t=n&&o&&n.parentNode!==o.parentNode?ie(e):n||ie(e),e.width&&(t.style.width='number'==typeof e.width?e.width+'px':e.width),e.padding&&(t.style.padding='number'==typeof e.padding?e.padding+'px':e.padding),e.background&&(t.style.background=e.background);for(var a=window.getComputedStyle(t).getPropertyValue('background-color'),r=t.querySelectorAll('[class^=swal2-success-circular-line], .swal2-success-fix'),s=0;s<r.length;s++)r[s].style.backgroundColor=a;var i=N(),l=U(),d=K().querySelector('#'+B.content),u=X(),c=F(),p=J(),m=Z(),g=G();if(e.titleText?l.innerText=e.titleText:e.title&&(l.innerHTML=e.title.split('\n').join('<br />')),'string'==typeof e.backdrop?N().style.background=e.backdrop:!e.backdrop&&O([document.documentElement,document.body],B['no-backdrop']),e.html?ae(e.html,d):e.text?(d.textContent=e.text,V(d)):q(d),e.position in B?O(i,B[e.position]):(h('The "position" parameter is not valid, defaulting to "center"'),O(i,B.center)),e.grow&&'string'==typeof e.grow){var f='grow-'+e.grow;f in B&&O(i,B[f])}'function'==typeof e.animation&&(e.animation=e.animation.call()),e.showCloseButton?(m.setAttribute('aria-label',e.closeButtonAriaLabel),V(m)):q(m),t.className=B.popup,e.toast?(O([document.documentElement,document.body],B['toast-shown']),O(t,B.toast)):O(t,B.modal),e.customClass&&O(t,e.customClass);var y=Q(),v=parseInt(null===e.currentProgressStep?Oe.getQueueStep():e.currentProgressStep,10);e.progressSteps&&e.progressSteps.length?(V(y),j(y),v>=e.progressSteps.length&&h('Invalid currentProgressStep parameter, it should be less than progressSteps.length (currentProgressStep like JS arrays starts from 0)'),e.progressSteps.forEach(function(t,n){var o=document.createElement('li');if(O(o,B.progresscircle),o.innerHTML=t,n===v&&O(o,B.activeprogressstep),y.appendChild(o),n!==e.progressSteps.length-1){var i=document.createElement('li');O(i,B.progressline),e.progressStepsDistance&&(i.style.width=e.progressStepsDistance),y.appendChild(i)}})):q(y);for(var w=W(),C=0;C<w.length;C++)q(w[C]);if(e.type){var x=!1;for(var k in A)if(e.type===k){x=!0;break}if(!x)return b('Unknown alert type: '+e.type),!1;var E=t.querySelector('.'+B.icon+'.'+A[e.type]);V(E),e.animation&&O(E,'swal2-animate-'+e.type+'-icon')}var S=z();if(e.imageUrl?(S.setAttribute('src',e.imageUrl),S.setAttribute('alt',e.imageAlt),V(S),e.imageWidth?S.setAttribute('width',e.imageWidth):S.removeAttribute('width'),e.imageHeight?S.setAttribute('height',e.imageHeight):S.removeAttribute('height'),S.className=B.image,e.imageClass&&O(S,e.imageClass)):q(S),e.showCancelButton?p.style.display='inline-block':q(p),e.showConfirmButton?R(c,'display'):q(c),e.showConfirmButton||e.showCancelButton?V(u):q(u),c.innerHTML=e.confirmButtonText,p.innerHTML=e.cancelButtonText,c.setAttribute('aria-label',e.confirmButtonAriaLabel),p.setAttribute('aria-label',e.cancelButtonAriaLabel),c.className=B.confirm,O(c,e.confirmButtonClass),p.className=B.cancel,O(p,e.cancelButtonClass),e.buttonsStyling){O([c,p],B.styled),e.confirmButtonColor&&(c.style.backgroundColor=e.confirmButtonColor),e.cancelButtonColor&&(p.style.backgroundColor=e.cancelButtonColor);var P=window.getComputedStyle(c).getPropertyValue('background-color');c.style.borderLeftColor=P,c.style.borderRightColor=P}else T([c,p],B.styled),c.style.backgroundColor=c.style.borderLeftColor=c.style.borderRightColor='',p.style.backgroundColor=p.style.borderLeftColor=p.style.borderRightColor='';ae(e.footer,g),!0===e.animation?T(t,B.noanimation):O(t,B.noanimation),e.showLoaderOnConfirm&&!e.preConfirm&&h('showLoaderOnConfirm is set to true, but preConfirm is not defined.\nshowLoaderOnConfirm should be used together with preConfirm, see usage example:\nhttps://sweetalert2.github.io/#ajax-request')}function o(){if('undefined'!=typeof window){'undefined'==typeof Promise&&b('This package requires a Promise library, please include a shim to enable it in this browser (See: https://github.com/sweetalert2/sweetalert2/wiki/Migration-from-SweetAlert-to-SweetAlert2#1-ie-support)');for(var e=arguments.length,t=Array(e),n=0;n<e;n++)t[n]=arguments[n];if('undefined'==typeof t[0])return b('SweetAlert2 expects at least 1 attribute!'),!1;i=this;var o=Object.freeze(this.constructor.argsToParams(t));Object.defineProperties(this,{params:{value:o,writable:!1,enumerable:!0}});var a=this._main(this.params);Ee.promise.set(this,a)}}var i,a='function'==typeof Symbol&&'symbol'==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&'function'==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?'symbol':typeof e},r=function(e,t){if(!(e instanceof t))throw new TypeError('Cannot call a class as a function')},s=function(){function e(e,t){for(var n,o=0;o<t.length;o++)n=t[o],n.enumerable=n.enumerable||!1,n.configurable=!0,'value'in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}return function(t,n,o){return n&&e(t.prototype,n),o&&e(t,o),t}}(),l=Object.assign||function(e){for(var t,n=1;n<arguments.length;n++)for(var o in t=arguments[n],t)Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e},d=function e(t,n,o){null===t&&(t=Function.prototype);var i=Object.getOwnPropertyDescriptor(t,n);if(void 0===i){var a=Object.getPrototypeOf(t);return null===a?void 0:e(a,n,o)}if('value'in i)return i.value;var r=i.get;return void 0===r?void 0:r.call(o)},u=function(e,t){if('function'!=typeof t&&null!==t)throw new TypeError('Super expression must either be null or a function, not '+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)},c=function(e,t){if(!e)throw new ReferenceError('this hasn\'t been initialised - super() hasn\'t been called');return t&&('object'==typeof t||'function'==typeof t)?t:e},p=function(){function e(e,t){var n,o=[],i=!0,a=!1;try{for(var r,s=e[Symbol.iterator]();!(i=(r=s.next()).done)&&(o.push(r.value),!(t&&o.length===t));i=!0);}catch(e){a=!0,n=e}finally{try{!i&&s['return']&&s['return']()}finally{if(a)throw n}}return o}return function(t,n){if(Array.isArray(t))return t;if(Symbol.iterator in Object(t))return e(t,n);throw new TypeError('Invalid attempt to destructure non-iterable instance')}}(),m='SweetAlert2:',g=function(e){for(var t=[],n=0;n<e.length;n++)-1===t.indexOf(e[n])&&t.push(e[n]);return t},f=function(e){var t=[];return e instanceof Map?e.forEach(function(e,n){t.push([n,e])}):Object.keys(e).forEach(function(n){t.push([n,e[n]])}),t},h=function(e){console.warn(m+' '+e)},b=function(e){console.error(m+' '+e)},y=[],v=function(e){-1!==y.indexOf(e)||(y.push(e),h(e))},w=function(e){return'function'==typeof e?e():e},C=function(e){return'object'===('undefined'==typeof e?'undefined':a(e))&&'function'==typeof e.then},x=Object.freeze({cancel:'cancel',backdrop:'overlay',close:'close',esc:'esc',timer:'timer'}),k=function(e){var t={};for(var n in e)t[e[n]]='swal2-'+e[n];return t},B=k(['container','shown','iosfix','popup','modal','no-backdrop','toast','toast-shown','fade','show','hide','noanimation','close','title','header','content','actions','confirm','cancel','footer','icon','icon-text','image','input','has-input','file','range','select','radio','checkbox','textarea','inputerror','validationerror','progresssteps','activeprogressstep','progresscircle','progressline','loading','styled','top','top-start','top-end','top-left','top-right','center','center-start','center-end','center-left','center-right','bottom','bottom-start','bottom-end','bottom-left','bottom-right','grow-row','grow-column','grow-fullscreen']),A=k(['success','warning','info','question','error']),E={previousActiveElement:null,previousBodyPadding:null},S=function(e,t){return!!e.classList&&e.classList.contains(t)},P=function(e){if(e.focus(),'file'!==e.type){var t=e.value;e.value='',e.value=t}},L=function(e,t,n){e&&t&&('string'==typeof t&&(t=t.split(/\s+/).filter(Boolean)),t.forEach(function(t){e.forEach?e.forEach(function(e){n?e.classList.add(t):e.classList.remove(t)}):n?e.classList.add(t):e.classList.remove(t)}))},O=function(e,t){L(e,t,!0)},T=function(e,t){L(e,t,!1)},_=function(e,t){for(var n=0;n<e.childNodes.length;n++)if(S(e.childNodes[n],t))return e.childNodes[n]},V=function(e){e.style.opacity='',e.style.display=e.id===B.content?'block':'flex'},q=function(e){e.style.opacity='',e.style.display='none'},j=function(e){for(;e.firstChild;)e.removeChild(e.firstChild)},D=function(e){return e&&(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},R=function(e,t){e.style.removeProperty?e.style.removeProperty(t):e.style.removeAttribute(t)},I=function(){if(E.previousActiveElement&&E.previousActiveElement.focus){var e=window.scrollX,t=window.scrollY;E.previousActiveElement.focus(),'undefined'!=typeof e&&'undefined'!=typeof t&&window.scrollTo(e,t)}},N=function(){return document.body.querySelector('.'+B.container)},H=function(e){var t=N();return t?t.querySelector('.'+e):null},M=function(){return H(B.popup)},W=function(){var e=M();return e.querySelectorAll('.'+B.icon)},U=function(){return H(B.title)},K=function(){return H(B.content)},z=function(){return H(B.image)},Q=function(){return H(B.progresssteps)},Y=function(){return H(B.validationerror)},F=function(){return H(B.confirm)},J=function(){return H(B.cancel)},X=function(){return H(B.actions)},G=function(){return H(B.footer)},Z=function(){return H(B.close)},$=function(){var e=Array.prototype.slice.call(M().querySelectorAll('[tabindex]:not([tabindex="-1"]):not([tabindex="0"])')).sort(function(e,t){return(e=parseInt(e.getAttribute('tabindex')),t=parseInt(t.getAttribute('tabindex')),e>t)?1:e<t?-1:0}),t=Array.prototype.slice.call(M().querySelectorAll('a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex="0"], [contenteditable], audio[controls], video[controls]'));return g(e.concat(t))},ee=function(){return!document.body.classList.contains(B['toast-shown'])},te=function(){return document.body.classList.contains(B['toast-shown'])},ne=function(){return'undefined'==typeof window||'undefined'==typeof document},oe=('\n <div aria-labelledby="'+B.title+'" aria-describedby="'+B.content+'" class="'+B.popup+'" tabindex="-1">\n   <div class="'+B.header+'">\n     <ul class="'+B.progresssteps+'"></ul>\n     <div class="'+B.icon+' '+A.error+'">\n       <span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span>\n     </div>\n     <div class="'+B.icon+' '+A.question+'">\n       <span class="'+B['icon-text']+'">?</span>\n      </div>\n     <div class="'+B.icon+' '+A.warning+'">\n       <span class="'+B['icon-text']+'">!</span>\n      </div>\n     <div class="'+B.icon+' '+A.info+'">\n       <span class="'+B['icon-text']+'">i</span>\n      </div>\n     <div class="'+B.icon+' '+A.success+'">\n       <div class="swal2-success-circular-line-left"></div>\n       <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>\n       <div class="swal2-success-ring"></div> <div class="swal2-success-fix"></div>\n       <div class="swal2-success-circular-line-right"></div>\n     </div>\n     <img class="'+B.image+'" />\n     <h2 class="'+B.title+'" id="'+B.title+'"></h2>\n     <button type="button" class="'+B.close+'">\xD7</button>\n   </div>\n   <div class="'+B.content+'">\n     <div id="'+B.content+'"></div>\n     <input class="'+B.input+'" />\n     <input type="file" class="'+B.file+'" />\n     <div class="'+B.range+'">\n       <input type="range" />\n       <output></output>\n     </div>\n     <select class="'+B.select+'"></select>\n     <div class="'+B.radio+'"></div>\n     <label for="'+B.checkbox+'" class="'+B.checkbox+'">\n       <input type="checkbox" />\n     </label>\n     <textarea class="'+B.textarea+'"></textarea>\n     <div class="'+B.validationerror+'" id="'+B.validationerror+'"></div>\n   </div>\n   <div class="'+B.actions+'">\n     <button type="button" class="'+B.confirm+'">OK</button>\n     <button type="button" class="'+B.cancel+'">Cancel</button>\n   </div>\n   <div class="'+B.footer+'">\n   </div>\n </div>\n').replace(/(^|\n)\s*/g,''),ie=function(e){var t=N();if(t&&(t.parentNode.removeChild(t),T([document.documentElement,document.body],[B['no-backdrop'],B['has-input'],B['toast-shown']])),ne())return void b('SweetAlert2 requires document to initialize');var n=document.createElement('div');n.className=B.container,n.innerHTML=oe;var o='string'==typeof e.target?document.querySelector(e.target):e.target;o.appendChild(n);var i=M(),a=K(),r=_(a,B.input),s=_(a,B.file),l=a.querySelector('.'+B.range+' input'),d=a.querySelector('.'+B.range+' output'),u=_(a,B.select),c=a.querySelector('.'+B.checkbox+' input'),p=_(a,B.textarea);i.setAttribute('role',e.toast?'alert':'dialog'),i.setAttribute('aria-live',e.toast?'polite':'assertive'),e.toast||i.setAttribute('aria-modal','true');var m=function(){Oe.isVisible()&&Oe.resetValidationError()};return r.oninput=m,s.onchange=m,u.onchange=m,c.onchange=m,p.oninput=m,l.oninput=function(){m(),d.value=l.value},l.onchange=function(){m(),l.nextSibling.value=l.value},i},ae=function(e,t){if(!e)return q(t);if('object'===('undefined'==typeof e?'undefined':a(e))){if(t.innerHTML='',0 in e)for(var n=0;n in e;n++)t.appendChild(e[n].cloneNode(!0));else t.appendChild(e.cloneNode(!0));}else if(e)t.innerHTML=e;else;V(t)},re=function(){if(ne())return!1;var e=document.createElement('div'),t={WebkitAnimation:'webkitAnimationEnd',OAnimation:'oAnimationEnd oanimationend',animation:'animationend'};for(var n in t)if(t.hasOwnProperty(n)&&'undefined'!=typeof e.style[n])return t[n];return!1}(),se=function(){var e='ontouchstart'in window||navigator.msMaxTouchPoints;if(e)return 0;var t=document.createElement('div');t.style.width='50px',t.style.height='50px',t.style.overflow='scroll',document.body.appendChild(t);var n=t.offsetWidth-t.clientWidth;return document.body.removeChild(t),n},le=function(){null!==E.previousBodyPadding||document.body.scrollHeight>window.innerHeight&&(E.previousBodyPadding=document.body.style.paddingRight,document.body.style.paddingRight=se()+'px')},de=function(){null!==E.previousBodyPadding&&(document.body.style.paddingRight=E.previousBodyPadding,E.previousBodyPadding=null)},ue=function(){var e=/iPad|iPhone|iPod/.test(navigator.userAgent)&&!window.MSStream;if(e&&!S(document.body,B.iosfix)){var t=document.body.scrollTop;document.body.style.top=-1*t+'px',O(document.body,B.iosfix)}},ce=function(){if(S(document.body,B.iosfix)){var e=parseInt(document.body.style.top,10);T(document.body,B.iosfix),document.body.style.top='',document.body.scrollTop=-1*e}},pe={},me=function(e,t){var n=N(),o=M();if(o){null!==e&&'function'==typeof e&&e(o),T(o,B.show),O(o,B.hide),clearTimeout(o.timeout),te()||(I(),window.onkeydown=pe.previousWindowKeyDown,pe.windowOnkeydownOverridden=!1);var i=function(){n.parentNode&&n.parentNode.removeChild(n),T([document.documentElement,document.body],[B.shown,B['no-backdrop'],B['has-input'],B['toast-shown']]),ee()&&(de(),ce()),null!==t&&'function'==typeof t&&setTimeout(function(){t()})};re&&!S(o,B.noanimation)?o.addEventListener(re,function e(){o.removeEventListener(re,e),S(o,B.hide)&&i()}):i()}},ge={title:'',titleText:'',text:'',html:'',footer:'',type:null,toast:!1,customClass:'',target:'body',backdrop:!0,animation:!0,allowOutsideClick:!0,allowEscapeKey:!0,allowEnterKey:!0,showConfirmButton:!0,showCancelButton:!1,preConfirm:null,confirmButtonText:'OK',confirmButtonAriaLabel:'',confirmButtonColor:null,confirmButtonClass:null,cancelButtonText:'Cancel',cancelButtonAriaLabel:'',cancelButtonColor:null,cancelButtonClass:null,buttonsStyling:!0,reverseButtons:!1,focusConfirm:!0,focusCancel:!1,showCloseButton:!1,closeButtonAriaLabel:'Close this dialog',showLoaderOnConfirm:!1,imageUrl:null,imageWidth:null,imageHeight:null,imageAlt:'',imageClass:null,timer:null,width:null,padding:null,background:null,input:null,inputPlaceholder:'',inputValue:'',inputOptions:{},inputAutoTrim:!0,inputClass:null,inputAttributes:{},inputValidator:null,grow:!1,position:'center',progressSteps:[],currentProgressStep:null,progressStepsDistance:null,onBeforeOpen:null,onAfterClose:null,onOpen:null,onClose:null,useRejections:!1,expectRejections:!1},fe=['useRejections','expectRejections'],he=function(e){return ge.hasOwnProperty(e)||'extraParams'===e},be=function(e){return-1!==fe.indexOf(e)},ye=function(e){for(var t in e)he(t)||h('Unknown parameter "'+t+'"'),be(t)&&v('The parameter "'+t+'" is deprecated and will be removed in the next major release.')},ve='"setDefaults" & "resetDefaults" methods are deprecated in favor of "mixin" method and will be removed in the next major release. For new projects, use "mixin". For past projects already using "setDefaults", support will be provided through an additional package.',we={},Ce=[],xe=function(e,t){return t&&t<Ce.length?Ce.splice(t,0,e):Ce.push(e)},ke=function(e){'undefined'!=typeof Ce[e]&&Ce.splice(e,1)},Be=function(){var e=M();e||Oe(''),e=M();var t=X(),n=F(),o=J();V(t),V(n),O([e,t],B.loading),n.disabled=!0,o.disabled=!0,e.setAttribute('data-loading',!0),e.setAttribute('aria-busy',!0),e.focus()},Ae=Object.freeze({isValidParameter:he,isDeprecatedParameter:be,argsToParams:function(e){var t={};switch(a(e[0])){case'string':['title','html','type'].forEach(function(n,o){void 0!==e[o]&&(t[n]=e[o])});break;case'object':l(t,e[0]);break;default:return b('Unexpected type of argument! Expected "string" or "object", got '+a(e[0])),!1;}return t},adaptInputValidator:function(e){return function(t,n){return e.call(this,t,n).then(function(){},function(e){return e})}},close:me,closePopup:me,closeModal:me,closeToast:me,isVisible:function(){return!!M()},clickConfirm:function(){return F().click()},clickCancel:function(){return J().click()},getPopup:M,getTitle:U,getContent:K,getImage:z,getButtonsWrapper:function(){return v('swal.getButtonsWrapper() is deprecated and will be removed in the next major release, use swal.getActions() instead'),H(B.actions)},getActions:X,getConfirmButton:F,getCancelButton:J,getFooter:G,isLoading:function(){return M().hasAttribute('data-loading')},mixin:function(t){var n=this;return e(function(e){function n(){return r(this,n),c(this,(n.__proto__||Object.getPrototypeOf(n)).apply(this,arguments))}return u(n,e),s(n,[{key:'_main',value:function(e){return d(n.prototype.__proto__||Object.getPrototypeOf(n.prototype),'_main',this).call(this,l({},t,e))}}]),n}(n))},queue:function(e){var t=this;Ce=e;var n=function(){Ce=[],document.body.removeAttribute('data-swal2-queue-step')},o=[];return new Promise(function(e){(function a(r,i){r<Ce.length?(document.body.setAttribute('data-swal2-queue-step',r),t(Ce[r]).then(function(t){'undefined'==typeof t.value?(n(),e({dismiss:t.dismiss})):(o.push(t.value),a(r+1,i))})):(n(),e({value:o}))})(0)})},getQueueStep:function(){return document.body.getAttribute('data-swal2-queue-step')},insertQueueStep:xe,deleteQueueStep:ke,showLoading:Be,enableLoading:Be,fire:function(){for(var e=this,t=arguments.length,n=Array(t),o=0;o<t;o++)n[o]=arguments[o];return new(Function.prototype.bind.apply(e,[null].concat(n)))}}),Ee={promise:new WeakMap,innerParams:new WeakMap,domCache:new WeakMap},Se={email:function(e){return /^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9-]{2,24}$/.test(e)?Promise.resolve():Promise.reject('Invalid email address')},url:function(e){return /^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_+.~#?&//=]*)$/.test(e)?Promise.resolve():Promise.reject('Invalid URL')}},Pe=function(e,t,n){var o=N(),i=M();null!==t&&'function'==typeof t&&t(i),e?(O(i,B.show),O(o,B.fade),T(i,B.hide)):T(i,B.fade),V(i),o.style.overflowY='hidden',re&&!S(i,B.noanimation)?i.addEventListener(re,function e(){i.removeEventListener(re,e),o.style.overflowY='auto'}):o.style.overflowY='auto',O([document.documentElement,document.body,o],B.shown),ee()&&(le(),ue()),E.previousActiveElement=document.activeElement,null!==n&&'function'==typeof n&&setTimeout(function(){n(i)})},Le=Object.freeze({hideLoading:t,disableLoading:t,getInput:function(e){var t=Ee.innerParams.get(this),n=Ee.domCache.get(this);return(e=e||t.input,!e)?null:'select'===e||'textarea'===e||'file'===e?_(n.content,B[e]):'checkbox'===e?n.popup.querySelector('.'+B.checkbox+' input'):'radio'===e?n.popup.querySelector('.'+B.radio+' input:checked')||n.popup.querySelector('.'+B.radio+' input:first-child'):'range'===e?n.popup.querySelector('.'+B.range+' input'):_(n.content,B.input)},enableButtons:function(){var e=Ee.domCache.get(this);e.confirmButton.disabled=!1,e.cancelButton.disabled=!1},disableButtons:function(){var e=Ee.domCache.get(this);e.confirmButton.disabled=!0,e.cancelButton.disabled=!0},enableConfirmButton:function(){var e=Ee.domCache.get(this);e.confirmButton.disabled=!1},disableConfirmButton:function(){var e=Ee.domCache.get(this);e.confirmButton.disabled=!0},enableInput:function(){var e=this.getInput();if(!e)return!1;if('radio'===e.type)for(var t=e.parentNode.parentNode,n=t.querySelectorAll('input'),o=0;o<n.length;o++)n[o].disabled=!1;else e.disabled=!1},disableInput:function(){var e=this.getInput();if(!e)return!1;if(e&&'radio'===e.type)for(var t=e.parentNode.parentNode,n=t.querySelectorAll('input'),o=0;o<n.length;o++)n[o].disabled=!0;else e.disabled=!0},showValidationError:function(e){var t=Ee.domCache.get(this);t.validationError.innerHTML=e;var n=window.getComputedStyle(t.popup);t.validationError.style.marginLeft='-'+n.getPropertyValue('padding-left'),t.validationError.style.marginRight='-'+n.getPropertyValue('padding-right'),V(t.validationError);var o=this.getInput();o&&(o.setAttribute('aria-invalid',!0),o.setAttribute('aria-describedBy',B.validationerror),P(o),O(o,B.inputerror))},resetValidationError:function(){var e=Ee.domCache.get(this);e.validationError&&q(e.validationError);var t=this.getInput();t&&(t.removeAttribute('aria-invalid'),t.removeAttribute('aria-describedBy'),T(t,B.inputerror))},_main:function(e){var t=this;ye(e);var o=l({},ge,e);n(o),Object.freeze(o),Ee.innerParams.set(this,o);var r={popup:M(),container:N(),content:K(),actions:X(),confirmButton:F(),cancelButton:J(),closeButton:Z(),validationError:Y(),progressSteps:Q()};Ee.domCache.set(this,r);var s=this.constructor;return new Promise(function(e,n){var l=function(t){s.closePopup(o.onClose,o.onAfterClose),o.useRejections?e(t):e({value:t})},d=function(t){s.closePopup(o.onClose,o.onAfterClose),o.useRejections?n(t):e({dismiss:t})},u=function(e){s.closePopup(o.onClose,o.onAfterClose),n(e)};o.timer&&(r.popup.timeout=setTimeout(function(){return d('timer')},o.timer));var c=function(){var e=t.getInput();if(!e)return null;switch(o.input){case'checkbox':return e.checked?1:0;case'radio':return e.checked?e.value:null;case'file':return e.files.length?e.files[0]:null;default:return o.inputAutoTrim?e.value.trim():e.value;}};o.input&&setTimeout(function(){var e=t.getInput();e&&P(e)},0);for(var m=function(e){if(o.showLoaderOnConfirm&&s.showLoading(),o.preConfirm){t.resetValidationError();var n=Promise.resolve().then(function(){return o.preConfirm(e,o.extraParams)});o.expectRejections?n.then(function(t){return l(t||e)},function(e){t.hideLoading(),e&&t.showValidationError(e)}):n.then(function(n){D(r.validationError)||!1===n?t.hideLoading():l(n||e)},function(e){return u(e)})}else l(e)},g=function(n){var i=n||window.event,e=i.target||i.srcElement,a=r.confirmButton,l=r.cancelButton,p=a&&(a===e||a.contains(e)),g=l&&(l===e||l.contains(e));switch(i.type){case'click':if(!(p&&s.isVisible()))g&&s.isVisible()&&(t.disableButtons(),d(s.DismissReason.cancel));else if(t.disableButtons(),o.input){var f=c();if(o.inputValidator){t.disableInput();var h=Promise.resolve().then(function(){return o.inputValidator(f,o.extraParams)});o.expectRejections?h.then(function(){t.enableButtons(),t.enableInput(),m(f)},function(e){t.enableButtons(),t.enableInput(),e&&t.showValidationError(e)}):h.then(function(e){t.enableButtons(),t.enableInput(),e?t.showValidationError(e):m(f)},function(e){return u(e)})}else m(f)}else m(!0);break;default:}},h=r.popup.querySelectorAll('button'),y=0;y<h.length;y++)h[y].onclick=g,h[y].onmouseover=g,h[y].onmouseout=g,h[y].onmousedown=g;if(r.closeButton.onclick=function(){d(s.DismissReason.close)},o.toast)r.popup.onclick=function(){o.showConfirmButton||o.showCancelButton||o.showCloseButton||o.input||(s.closePopup(o.onClose,o.onAfterClose),d(s.DismissReason.close))};else{var i=!1;r.popup.onmousedown=function(){r.container.onmouseup=function(t){r.container.onmouseup=void 0,t.target===r.container&&(i=!0)}},r.container.onmousedown=function(){r.popup.onmouseup=function(t){r.popup.onmouseup=void 0,(t.target===r.popup||r.popup.contains(t.target))&&(i=!0)}},r.container.onclick=function(t){return i?void(i=!1):void(t.target!==r.container||w(o.allowOutsideClick)&&d(s.DismissReason.backdrop))}}o.reverseButtons?r.confirmButton.parentNode.insertBefore(r.cancelButton,r.confirmButton):r.confirmButton.parentNode.insertBefore(r.confirmButton,r.cancelButton);var v=function(e,t){for(var n=$(o.focusCancel),i=0;i<n.length;i++){e+=t,e===n.length?e=0:-1===e&&(e=n.length-1);var a=n[e];if(D(a))return a.focus()}};o.toast&&pe.windowOnkeydownOverridden&&(window.onkeydown=pe.previousWindowKeyDown,pe.windowOnkeydownOverridden=!1),o.toast||pe.windowOnkeydownOverridden||(pe.previousWindowKeyDown=window.onkeydown,pe.windowOnkeydownOverridden=!0,window.onkeydown=function(n){var i=n||window.event;if('Enter'===i.key&&!i.isComposing){if(i.target===t.getInput()){if(-1!==['textarea','file'].indexOf(o.input))return;s.clickConfirm(),i.preventDefault()}}else if('Tab'===i.key){for(var e=i.target||i.srcElement,a=$(o.focusCancel),l=-1,u=0;u<a.length;u++)if(e===a[u]){l=u;break}i.shiftKey?v(l,-1):v(l,1),i.stopPropagation(),i.preventDefault()}else-1===['ArrowLeft','ArrowRight','ArrowUp','ArrowDown','Left','Right','Up','Down'].indexOf(i.key)?('Escape'===i.key||'Esc'===i.key)&&!0===w(o.allowEscapeKey)&&d(s.DismissReason.esc):document.activeElement===r.confirmButton&&D(r.cancelButton)?r.cancelButton.focus():document.activeElement===r.cancelButton&&D(r.confirmButton)&&r.confirmButton.focus()}),t.enableButtons(),t.hideLoading(),t.resetValidationError(),o.input&&O(document.body,B['has-input']);for(var x=['input','file','range','select','radio','checkbox','textarea'],k=void 0,A=0;A<x.length;A++){var E=B[x[A]],S=_(r.content,E);if(k=t.getInput(x[A]),k){for(var L in k.attributes)if(k.attributes.hasOwnProperty(L)){var T=k.attributes[L].name;'type'!==T&&'value'!==T&&k.removeAttribute(T)}for(var j in o.inputAttributes)k.setAttribute(j,o.inputAttributes[j])}S.className=E,o.inputClass&&O(S,o.inputClass),q(S)}var R;switch(o.input){case'text':case'email':case'password':case'number':case'tel':case'url':k=_(r.content,B.input),k.value=o.inputValue,k.placeholder=o.inputPlaceholder,k.type=o.input,V(k);break;case'file':k=_(r.content,B.file),k.placeholder=o.inputPlaceholder,k.type=o.input,V(k);break;case'range':var I=_(r.content,B.range),N=I.querySelector('input'),H=I.querySelector('output');N.value=o.inputValue,N.type=o.input,H.value=o.inputValue,V(I);break;case'select':var M=_(r.content,B.select);if(M.innerHTML='',o.inputPlaceholder){var W=document.createElement('option');W.innerHTML=o.inputPlaceholder,W.value='',W.disabled=!0,W.selected=!0,M.appendChild(W)}R=function(e){e.forEach(function(e){var t=p(e,2),n=t[0],i=t[1],a=document.createElement('option');a.value=n,a.innerHTML=i,o.inputValue.toString()===n.toString()&&(a.selected=!0),M.appendChild(a)}),V(M),M.focus()};break;case'radio':var U=_(r.content,B.radio);U.innerHTML='',R=function(e){e.forEach(function(e){var t=p(e,2),n=t[0],i=t[1],a=document.createElement('input'),r=document.createElement('label');a.type='radio',a.name=B.radio,a.value=n,o.inputValue.toString()===n.toString()&&(a.checked=!0),r.innerHTML=i,r.insertBefore(a,r.firstChild),U.appendChild(r)}),V(U);var t=U.querySelectorAll('input');t.length&&t[0].focus()};break;case'checkbox':var K=_(r.content,B.checkbox),z=t.getInput('checkbox');z.type='checkbox',z.value=1,z.id=B.checkbox,z.checked=!!o.inputValue;var Q=K.getElementsByTagName('span');Q.length&&K.removeChild(Q[0]),Q=document.createElement('span'),Q.innerHTML=o.inputPlaceholder,K.appendChild(Q),V(K);break;case'textarea':var Y=_(r.content,B.textarea);Y.value=o.inputValue,Y.placeholder=o.inputPlaceholder,V(Y);break;case null:break;default:b('Unexpected type of input! Expected "text", "email", "password", "number", "tel", "select", "radio", "checkbox", "textarea", "file" or "url", got "'+o.input+'"');}if('select'===o.input||'radio'===o.input){var F=function(e){return R(f(e))};C(o.inputOptions)?(s.showLoading(),o.inputOptions.then(function(e){t.hideLoading(),F(e)})):'object'===a(o.inputOptions)?F(o.inputOptions):b('Unexpected type of inputOptions! Expected object, Map or Promise, got '+a(o.inputOptions))}else-1!==['text','email','number','tel','textarea'].indexOf(o.input)&&C(o.inputValue)&&(s.showLoading(),q(k),o.inputValue.then(function(e){k.value='number'===o.input?parseFloat(e)||0:e+'',V(k),t.hideLoading()}).catch(function(e){b('Error in inputValue promise: '+e),k.value='',V(k),t.hideLoading()}));Pe(o.animation,o.onBeforeOpen,o.onOpen),o.toast||(w(o.allowEnterKey)?o.focusCancel&&D(r.cancelButton)?r.cancelButton.focus():o.focusConfirm&&D(r.confirmButton)?r.confirmButton.focus():v(-1,1):document.activeElement&&document.activeElement.blur()),r.container.scrollTop=0})}});o.prototype.then=function(e,t){var n=Ee.promise.get(this);return n.then(e,t)},o.prototype.catch=function(e){var t=Ee.promise.get(this);return t.catch(e)},o.prototype.finally=function(e){var t=Ee.promise.get(this);return t.finally(e)},l(o.prototype,Le),l(o,Ae),Object.keys(Le).forEach(function(e){o[e]=function(){if(i){var t;return(t=i)[e].apply(t,arguments)}}}),o.DismissReason=x,o.noop=function(){},o.version='7.19.1';var Oe=e(function(e){var t=function(t){function n(){return r(this,n),c(this,(n.__proto__||Object.getPrototypeOf(n)).apply(this,arguments))}return u(n,t),s(n,[{key:'_main',value:function(e){return d(n.prototype.__proto__||Object.getPrototypeOf(n.prototype),'_main',this).call(this,l({},we,e))}}],[{key:'setDefaults',value:function(t){if(v(ve),!t||'object'!==('undefined'==typeof t?'undefined':a(t)))throw new TypeError('SweetAlert2: The argument for setDefaults() is required and has to be a object');ye(t),Object.keys(t).forEach(function(n){e.isValidParameter(n)&&(we[n]=t[n])})}},{key:'resetDefaults',value:function(){v(ve),we={}}}]),n}(e);return'undefined'!=typeof window&&'object'===a(window._swalDefaults)&&t.setDefaults(window._swalDefaults),t}(o));return Oe.default=Oe,Oe}),'undefined'!=typeof window&&window.Sweetalert2&&(window.swal=window.sweetAlert=window.Swal=window.SweetAlert=window.Sweetalert2);
var Spotlight=(window.webpackJsonpSpotlight=window.webpackJsonpSpotlight||[]).push([[15],{0:function(e,t){e.exports=React},107:function(e,t,n){"use strict";function o(e,t){return e===t}function a(e,t,n){if(null===t||null===n||t.length!==n.length)return!1;for(var o=t.length,a=0;a<o;a++)if(!e(t[a],n[a]))return!1;return!0}function r(e){var t=Array.isArray(e[0])?e[0]:e;if(!t.every((function(e){return"function"==typeof e}))){var n=t.map((function(e){return typeof e})).join(", ");throw new Error("Selector creators expect all input-selectors to be functions, instead received the following types: ["+n+"]")}return t}n.d(t,"a",(function(){return l}));var l=function(e){for(var t=arguments.length,n=Array(t>1?t-1:0),o=1;o<t;o++)n[o-1]=arguments[o];return function(){for(var t=arguments.length,o=Array(t),a=0;a<t;a++)o[a]=arguments[a];var l=0,c=o.pop(),i=r(o),s=e.apply(void 0,[function(){return l++,c.apply(null,arguments)}].concat(n)),u=e((function(){for(var e=[],t=i.length,n=0;n<t;n++)e.push(i[n].apply(null,arguments));return s.apply(null,e)}));return u.resultFunc=c,u.dependencies=i,u.recomputations=function(){return l},u.resetRecomputations=function(){return l=0},u}}((function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:o,n=null,r=null;return function(){return a(t,n,arguments)||(r=e.apply(null,arguments)),n=arguments,r}}))},1134:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});const o=n(1135),a=n(1136),r=n(441),l=n(442);o.registerBlockType("spotlight/instagram",a.SliWpBlockConfig),r.WpBlockStore.dispatch(l.loadWpBlock()),window.addEventListener("focus",(function(){r.WpBlockStore.getState().wpBlock.isLoaded&&r.WpBlockStore.dispatch(l.loadWpBlock())}))},1135:function(e,t){!function(){e.exports=this.wp.blocks}()},1136:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.SliWpBlockConfig=void 0;const o=n(1137);t.SliWpBlockConfig={title:"Spotlight Instagram Feed",description:"Embed a Spotlight Instagram feed",category:"widgets",icon:"instagram",keywords:["instagram","feed","feeds","ig","story","spotlight"],attributes:{feedId:{type:"number"}},supports:{html:!1},edit:o.SliWpBlockEdit}},1137:function(e,t,n){"use strict";var o=this&&this.__createBinding||(Object.create?function(e,t,n,o){void 0===o&&(o=n),Object.defineProperty(e,o,{enumerable:!0,get:function(){return t[n]}})}:function(e,t,n,o){void 0===o&&(o=n),e[o]=t[n]}),a=this&&this.__setModuleDefault||(Object.create?function(e,t){Object.defineProperty(e,"default",{enumerable:!0,value:t})}:function(e,t){e.default=t}),r=this&&this.__importStar||function(e){if(e&&e.__esModule)return e;var t={};if(null!=e)for(var n in e)"default"!==n&&Object.hasOwnProperty.call(e,n)&&o(t,e,n);return a(t,e),t},l=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0}),t.SliWpBlockEdit=void 0;const c=r(n(0)),i=l(n(1138)),s=n(1139),u=n(1140),d=n(32),f=n(58),p=n(13),m=l(n(20)),g=n(12),y=n(197),v=n(1),h=n(1141),b=n(441),S=n(111),E=n(23),k=n(295),_=n(369),w={label:"- Choose a feed -",value:""},B=m.default.config.adminUrl+"admin.php?page=spotlight-instagram&screen=new";function W({attributes:e,setAttributes:t,className:n}){const o=v.useSelector(h.selectIsWpBlockLoaded),a=v.useSelector(S.selectFeeds),r=c.default.useRef(null),[l,f]=c.default.useState(null),[m,w]=c.default.useState(!1),[B,W]=c.default.useState(!1);function D(e){t({feedId:parseInt(e)}),w(!1)}if(c.useEffect(()=>{o&&function e(n){var o;if(!n)return void(1===a.length&&(null===(o=a[0])||void 0===o?void 0:o.id)?e(a[0].id):w(!0));const l=S.selectFeedById(n)(b.WpBlockStore.getState());if(!l)return f(null),w(!0),void W(!0);r.current=n,t({feedId:n}),w(!1),W(!1),f(new g.FeedState(l.options,d.Device.DESKTOP,{getAccount:e=>E.selectAccountById(e)(b.WpBlockStore.getState())}))}(e.feedId)},[o,e.feedId]),!o)return c.default.createElement("div",{className:i.default.loading},c.default.createElement(k.LoadingSpinner,{size:50}));const j=e.feedId?e.feedId.toString():"",T=a.find(t=>t.id===e.feedId),N=a.map(e=>({label:e.name?e.name:"(no name)",value:""+e.id}));return c.default.createElement("div",null,!m&&c.default.createElement(s.BlockControls,null,a.length>1&&c.default.createElement(u.Toolbar,null,c.default.createElement("div",{className:i.default.selector},c.default.createElement("label",{className:i.default.selectorLabel},c.default.createElement("span",null,"Feed:")),c.default.createElement("div",{className:i.default.selectorListContainer},c.default.createElement(u.SelectControl,{value:j,onChange:D,options:N}))))),c.default.createElement("div",null,m&&c.default.createElement(C,null,B&&c.default.createElement(O,{feedId:j}),a.length>0?c.default.createElement(x,{value:j,onChange:D,options:N}):c.default.createElement(I,null)),!m&&l&&!l.hasSources()&&c.default.createElement(C,null,c.default.createElement(P,{feed:T})),!m&&l&&l.hasSources()&&c.default.createElement("div",{className:p.classList(n,i.default.feedContainer)},c.default.createElement(_.ErrorBoundary,null,c.default.createElement(y.InstagramFeed,{state:l,onUpdateState:f,autoDevice:!0})))))}function C({children:e}){return c.default.createElement("div",{className:i.default.root},c.default.createElement("img",{className:i.default.logo,src:f.Common.image("spotlight-favicon.png"),alt:""}),e)}function x({value:e,onChange:t,options:n}){return c.default.createElement(c.default.Fragment,null,c.default.createElement("div",{className:i.default.label},"Choose which Instagram feed to show:"),c.default.createElement(u.SelectControl,{value:e,onChange:t,options:[w].concat(n)}))}function O({feedId:e}){return c.default.createElement("div",{className:i.default.missingFeedMsg},"This block is hidden because the selected feed (with ID #",e,") does not exist or has been deleted.")}function P({feed:e}){const t="admin.php?page=spotlight-instagram&screen=edit&id="+e.id.toString();return c.default.createElement("div",{className:i.default.noSourcesMsg},c.default.createElement("span",null,'The feed "',c.default.createElement("b",null,e.name),'" does not have any Instagram posts to show.'),c.default.createElement("br",null),c.default.createElement("a",{href:t,target:"_blank"},"Click here")," ",c.default.createElement("span",null,"to edit the feed and select an account or hashtag."))}function I(){return c.default.createElement(c.default.Fragment,null,c.default.createElement("div",{className:i.default.label},"You do not have any Instagram feeds."),c.default.createElement("div",{className:i.default.label},"Go to"," ",c.default.createElement("a",{href:B,target:"_blank"},"Instagram feeds → Add New")," ","to begin designing your first feed."),c.default.createElement("div",{className:i.default.label},"You can keep this page open and Spotlight's block will automatically detect your new feed."))}t.SliWpBlockEdit=function(e){return c.default.createElement(v.Provider,{store:b.WpBlockStore},c.default.createElement(W,Object.assign({},e)))}},1138:function(e,t,n){e.exports={root:"SliWpBlockEdit__root",loading:"SliWpBlockEdit__loading",logo:"SliWpBlockEdit__logo",label:"SliWpBlockEdit__label","missing-feed-msg":"SliWpBlockEdit__missing-feed-msg SliWpBlockEdit__label",missingFeedMsg:"SliWpBlockEdit__missing-feed-msg SliWpBlockEdit__label","no-sources-msg":"SliWpBlockEdit__no-sources-msg",noSourcesMsg:"SliWpBlockEdit__no-sources-msg",selector:"SliWpBlockEdit__selector","selector-label":"SliWpBlockEdit__selector-label",selectorLabel:"SliWpBlockEdit__selector-label","selector-list-container":"SliWpBlockEdit__selector-list-container",selectorListContainer:"SliWpBlockEdit__selector-list-container","feed-container":"SliWpBlockEdit__feed-container",feedContainer:"SliWpBlockEdit__feed-container"}},1139:function(e,t){!function(){e.exports=this.wp.blockEditor}()},1140:function(e,t){!function(){e.exports=this.wp.components}()},1141:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.selectIsWpBlockLoaded=void 0,t.selectIsWpBlockLoaded=e=>e.wpBlock.isLoaded},1142:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.WpBlockSlice=void 0;const o=n(27),a=n(442);t.WpBlockSlice=o.createSlice({name:"wpBlock",initialState:{isLoaded:!1},reducers:{},extraReducers:e=>e.addCase(a.loadWpBlock.pending,e=>{e.isLoaded=!1}).addCase(a.loadWpBlock.fulfilled,e=>{e.isLoaded=!0})})},127:function(e,t){e.exports=function(){var e=document.getSelection();if(!e.rangeCount)return function(){};for(var t=document.activeElement,n=[],o=0;o<e.rangeCount;o++)n.push(e.getRangeAt(o));switch(t.tagName.toUpperCase()){case"INPUT":case"TEXTAREA":t.blur();break;default:t=null}return e.removeAllRanges(),function(){"Caret"===e.type&&e.removeAllRanges(),e.rangeCount||n.forEach((function(t){e.addRange(t)})),t&&t.focus()}}},139:function(e,t,n){"use strict";(function(e,o){var a,r=n(54);a="undefined"!=typeof self?self:"undefined"!=typeof window?window:void 0!==e?e:o;var l=Object(r.a)(a);t.a=l}).call(this,n(18),n(90)(e))},140:function(e,t,n){"use strict";function o(e){return function(t){var n=t.dispatch,o=t.getState;return function(t){return function(a){return"function"==typeof a?a(n,o,e):t(a)}}}}var a=o();a.withExtraArgument=o,t.a=a},18:function(e,t){var n;n=function(){return this}();try{n=n||new Function("return this")()}catch(e){"object"==typeof window&&(n=window)}e.exports=n},188:function(e,t,n){"use strict";var o=n(127),a={"text/plain":"Text","text/html":"Url",default:"Text"};e.exports=function(e,t){var n,r,l,c,i,s,u=!1;t||(t={}),n=t.debug||!1;try{if(l=o(),c=document.createRange(),i=document.getSelection(),(s=document.createElement("span")).textContent=e,s.style.all="unset",s.style.position="fixed",s.style.top=0,s.style.clip="rect(0, 0, 0, 0)",s.style.whiteSpace="pre",s.style.webkitUserSelect="text",s.style.MozUserSelect="text",s.style.msUserSelect="text",s.style.userSelect="text",s.addEventListener("copy",(function(o){if(o.stopPropagation(),t.format)if(o.preventDefault(),void 0===o.clipboardData){n&&console.warn("unable to use e.clipboardData"),n&&console.warn("trying IE specific stuff"),window.clipboardData.clearData();var r=a[t.format]||a.default;window.clipboardData.setData(r,e)}else o.clipboardData.clearData(),o.clipboardData.setData(t.format,e);t.onCopy&&(o.preventDefault(),t.onCopy(o.clipboardData))})),document.body.appendChild(s),c.selectNodeContents(s),i.addRange(c),!document.execCommand("copy"))throw new Error("copy command was unsuccessful");u=!0}catch(o){n&&console.error("unable to copy using execCommand: ",o),n&&console.warn("trying IE specific stuff");try{window.clipboardData.setData(t.format||"text",e),t.onCopy&&t.onCopy(window.clipboardData),u=!0}catch(o){n&&console.error("unable to copy using clipboardData: ",o),n&&console.error("falling back to prompt"),r=function(e){var t=(/mac os x/i.test(navigator.userAgent)?"⌘":"Ctrl")+"+C";return e.replace(/#{\s*key\s*}/g,t)}("message"in t?t.message:"Copy to clipboard: #{key}, Enter"),window.prompt(r,e)}}finally{i&&("function"==typeof i.removeRange?i.removeRange(c):i.removeAllRanges()),s&&document.body.removeChild(s),l()}return u}},21:function(e,t){e.exports=ReactDOM},22:function(e,t,n){e.exports=n(45)()},441:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.WpBlockStore=void 0;const o=n(27),a=n(217),r=n(155),l=n(1142);t.WpBlockStore=o.configureStore({reducer:{[l.WpBlockSlice.name]:l.WpBlockSlice.reducer,[a.AccountsSlice.name]:a.AccountsSlice.reducer,[r.FeedsSlice.name]:r.FeedsSlice.reducer}})},442:function(e,t,n){"use strict";var o=this&&this.__awaiter||function(e,t,n,o){return new(n||(n=Promise))((function(a,r){function l(e){try{i(o.next(e))}catch(e){r(e)}}function c(e){try{i(o.throw(e))}catch(e){r(e)}}function i(e){var t;e.done?a(e.value):(t=e.value,t instanceof n?t:new n((function(e){e(t)}))).then(l,c)}i((o=o.apply(e,t||[])).next())}))};Object.defineProperty(t,"__esModule",{value:!0}),t.loadWpBlock=void 0;const a=n(27),r=n(99),l=n(147);t.loadWpBlock=a.createAsyncThunk("wpBlock/load",(e,t)=>o(void 0,void 0,void 0,(function*(){try{yield Promise.all([t.dispatch(r.loadAccounts()),t.dispatch(l.loadFeeds())])}catch(e){console.error(e)}})))},45:function(e,t,n){"use strict";var o=n(46);function a(){}function r(){}r.resetWarningCache=a,e.exports=function(){function e(e,t,n,a,r,l){if(l!==o){var c=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw c.name="Invariant Violation",c}}function t(){return e}e.isRequired=e;var n={array:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:t,element:e,elementType:e,instanceOf:t,node:e,objectOf:t,oneOf:t,oneOfType:t,shape:t,exact:t,checkPropTypes:r,resetWarningCache:a};return n.PropTypes=n,n}},46:function(e,t,n){"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"},54:function(e,t,n){"use strict";function o(e){var t,n=e.Symbol;return"function"==typeof n?n.observable?t=n.observable:(t=n("observable"),n.observable=t):t="@@observable",t}n.d(t,"a",(function(){return o}))},67:function(e,t,n){"use strict";var o=n(106),a={childContextTypes:!0,contextType:!0,contextTypes:!0,defaultProps:!0,displayName:!0,getDefaultProps:!0,getDerivedStateFromError:!0,getDerivedStateFromProps:!0,mixins:!0,propTypes:!0,type:!0},r={name:!0,length:!0,prototype:!0,caller:!0,callee:!0,arguments:!0,arity:!0},l={$$typeof:!0,compare:!0,defaultProps:!0,displayName:!0,propTypes:!0,type:!0},c={};function i(e){return o.isMemo(e)?l:c[e.$$typeof]||a}c[o.ForwardRef]={$$typeof:!0,render:!0,defaultProps:!0,displayName:!0,propTypes:!0},c[o.Memo]=l;var s=Object.defineProperty,u=Object.getOwnPropertyNames,d=Object.getOwnPropertySymbols,f=Object.getOwnPropertyDescriptor,p=Object.getPrototypeOf,m=Object.prototype;e.exports=function e(t,n,o){if("string"!=typeof n){if(m){var a=p(n);a&&a!==m&&e(t,a,o)}var l=u(n);d&&(l=l.concat(d(n)));for(var c=i(t),g=i(n),y=0;y<l.length;++y){var v=l[y];if(!(r[v]||o&&o[v]||g&&g[v]||c&&c[v])){var h=f(n,v);try{s(t,v,h)}catch(e){}}}}return t}},90:function(e,t){e.exports=function(e){if(!e.webpackPolyfill){var t=Object.create(e);t.children||(t.children=[]),Object.defineProperty(t,"loaded",{enumerable:!0,get:function(){return t.l}}),Object.defineProperty(t,"id",{enumerable:!0,get:function(){return t.i}}),Object.defineProperty(t,"exports",{enumerable:!0}),t.webpackPolyfill=1}return t}}},[[1134,3,1,2,0,5,4]]]);
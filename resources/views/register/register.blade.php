<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"a9f623b65c",applicationID:"407411982"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(6),c=e(7),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(8);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(5),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,y=["click","keydown","mousedown","pointerdown","touchstart"];y.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],4:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],5:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],6:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],7:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],8:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?f(e,c,o):o()}function n(n,r,i,o){if(!p.aborted||o){e&&e(n,r,i);for(var a=t(i),c=v(n),f=c.length,u=0;u<f;u++)c[u].apply(a,r);var d=s[w[n]];return d&&d.push([b,n,r,a]),a}}function l(e,t){h[e]=v(e).concat(t)}function m(e,t){var n=h[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return h[e]||[]}function g(e){return d[e]=d[e]||i(n)}function y(e,t){u(e,function(e,n){t=t||"feature",w[n]=t,t in s||(s[t]=[])})}var h={},w={},b={on:l,addEventListener:l,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:y,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(p.aborted=!0,s=p.backlog={})}var c="nr@context",f=e("gos"),u=e(6),s={},d={},p=t.exports=i();p.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=b.info=NREUM.info,t=p.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+b.offset],null,"api"),c("timing",["load",n]);var r=p.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===p.readyState&&o()}function o(){c("mark",["domContent",a()+b.offset],null,"api")}var a=e(2),c=e("handle"),f=e(6),u=e("ee"),s=e(4),d=window,p=d.document,l="addEventListener",m="attachEvent",v=d.XMLHttpRequest,g=v&&v.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:v,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1184.min.js"},w=v&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),b=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:w,userAgent:s};e(1),e(3),p[l]?(p[l]("DOMContentLoaded",o,!1),d[l]("load",r,!1)):(p[m]("onreadystatechange",i),d[m]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0},{}],"wrap-function":[function(e,t,n){function r(e){return!(e&&e instanceof Function&&e.apply&&!e[a])}var i=e("ee"),o=e(7),a="nr@original",c=Object.prototype.hasOwnProperty,f=!1;t.exports=function(e,t){function n(e,t,n,i){function nrWrapper(){var r,a,c,f;try{a=this,r=o(arguments),c="function"==typeof n?n(r,a):n||{}}catch(u){p([u,"",[r,a,i],c])}s(t+"start",[r,a,i],c);try{return f=e.apply(a,r)}catch(d){throw s(t+"err",[r,a,d],c),d}finally{s(t+"end",[r,a,f],c)}}return r(e)?e:(t||(t=""),nrWrapper[a]=e,d(e,nrWrapper),nrWrapper)}function u(e,t,i,o){i||(i="");var a,c,f,u="-"===i.charAt(0);for(f=0;f<t.length;f++)c=t[f],a=e[c],r(a)||(e[c]=n(a,u?c+i:i,o,c))}function s(n,r,i){if(!f||t){var o=f;f=!0;try{e.emit(n,r,i,t)}catch(a){p([a,n,r,i])}f=o}}function d(e,t){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(e);return n.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(r){p([r])}for(var i in e)c.call(e,i)&&(t[i]=e[i]);return t}function p(t){try{e.emit("internal-error",t)}catch(n){}}return e||(e=i),n.inPlace=u,n.flag=a,n}},{}]},{},["loader"]);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="https://pcshop.ge/xmlrpc.php">

				<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
			
	<!-- This site is optimized with the Yoast SEO Premium plugin v15.3 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>My Account &raquo; PCShop.ge</title>
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="http://127.0.0.1:8000/my-account" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="My Account &raquo; PCShop.ge" />
	<meta property="og:url" content="https://pcshop.ge/my-account/" />
	<meta property="og:site_name" content="PCShop.ge" />
	<meta property="article:publisher" content="https://www.facebook.com/PCShopOfficial/" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Written by">
	<meta name="twitter:data1" content="Giorgi Khorguashvili">
	<meta name="twitter:label2" content="Est. reading time">
	<meta name="twitter:data2" content="0 minutes">
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://pcshop.ge/#organization","name":"PCShop.ge","url":"https://pcshop.ge/","sameAs":["https://www.facebook.com/PCShopOfficial/"],"logo":{"@type":"ImageObject","@id":"https://pcshop.ge/#logo","inLanguage":"en-US","url":"//pcshop.ge/wp-content/uploads/2019/10/59530207_2381324758564694_2625085944050483200_n.png","width":960,"height":960,"caption":"PCShop.ge"},"image":{"@id":"https://pcshop.ge/#logo"}},{"@type":"WebSite","@id":"https://pcshop.ge/#website","url":"https://pcshop.ge/","name":"PCShop.ge","description":"Your Computer Store","publisher":{"@id":"https://pcshop.ge/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://pcshop.ge/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"WebPage","@id":"https://pcshop.ge/my-account/#webpage","url":"https://pcshop.ge/my-account/","name":"My Account &raquo; PCShop.ge","isPartOf":{"@id":"https://pcshop.ge/#website"},"datePublished":"2016-02-16T11:41:47+00:00","dateModified":"2016-02-16T11:41:47+00:00","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://pcshop.ge/my-account/"]}]}]}</script>
	<!-- / Yoast SEO Premium plugin. -->


<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="PCShop.ge &raquo; Feed" href="https://pcshop.ge/feed/" />
<link rel="alternate" type="application/rss+xml" title="PCShop.ge &raquo; Comments Feed" href="https://pcshop.ge/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/pcshop.ge\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">mark.order-status:hover{cursor:pointer;}#tiptip_holder{display:none;position:absolute;top:0;left:0;z-index:99999}#tiptip_holder.tip_top{padding-bottom:5px}#tiptip_holder.tip_top #tiptip_arrow_inner{margin-top:-7px;margin-left:-6px;border-top-color:#464646}#tiptip_holder.tip_bottom{padding-top:5px}#tiptip_holder.tip_bottom #tiptip_arrow_inner{margin-top:-5px;margin-left:-6px;border-bottom-color:#464646}#tiptip_holder.tip_right{padding-left:5px}#tiptip_holder.tip_right #tiptip_arrow_inner{margin-top:-6px;margin-left:-5px;border-right-color:#464646}#tiptip_holder.tip_left{padding-right:5px}#tiptip_holder.tip_left #tiptip_arrow_inner{margin-top:-6px;margin-left:-7px;border-left-color:#464646}#tiptip_content,.chart-tooltip{font-size:11px;color:#fff;padding:.5em .5em;background:#464646;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:1px 1px 3px rgba(0,0,0,0.1);-moz-box-shadow:1px 1px 3px rgba(0,0,0,0.1);box-shadow:1px 1px 3px rgba(0,0,0,0.1);text-align:center;max-width:150px}#tiptip_content code,.chart-tooltip code{background:#888;padding:1px}#tiptip_arrow,#tiptip_arrow_inner{position:absolute;border-color:transparent;border-style:solid;border-width:6px;height:0;width:0}</style><style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://pcshop.ge/wp-includes/css/dist/block-library/style.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href='https://pcshop.ge/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=3.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href='https://pcshop.ge/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=3.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://pcshop.ge/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.3' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://pcshop.ge/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.2.22' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='wcpf-plugin-style-css'  href='https://pcshop.ge/wp-content/plugins/woocommerce-product-filters/assets/css/plugin.css?ver=1.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='https://pcshop.ge/wp-content/plugins/woocommerce/assets/css/select2.css?ver=4.7.1' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='jquery-ui-style-css'  href='https://pcshop.ge/wp-content/plugins/flexible-checkout-fields/assets/css/jquery-ui.min.css?ver=2.7.0.19' type='text/css' media='all' />
<link rel='stylesheet' id='inspire_checkout_fields_public_style-css'  href='https://pcshop.ge/wp-content/plugins/flexible-checkout-fields/assets/css/front.min.css?ver=2.7.0.19' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-colorbox-css'  href='https://pcshop.ge/wp-content/plugins/yith-woocommerce-compare/assets/css/colorbox.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='//pcshop.ge/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css'  href='https://pcshop.ge/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href='https://pcshop.ge/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='electro-fonts-css'  href='https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&#038;display=swap' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='https://pcshop.ge/wp-content/themes/electro/assets/css/bootstrap.min.css?ver=2.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-electro-css'  href='https://pcshop.ge/wp-content/themes/electro/assets/css/font-electro.css?ver=2.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css'  href='https://pcshop.ge/wp-content/themes/electro/assets/vendor/fontawesome/css/all.min.css?ver=2.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css-css'  href='https://pcshop.ge/wp-content/themes/electro/assets/vendor/animate.css/animate.min.css?ver=2.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-mCustomScrollbar-css'  href='https://pcshop.ge/wp-content/themes/electro/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css?ver=2.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='electro-style-css'  href='https://pcshop.ge/wp-content/themes/electro/style.min.css?ver=2.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='electro-style-v2-css'  href='https://pcshop.ge/wp-content/themes/electro/assets/css/v2.min.css?ver=2.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='electro-color-css'  href='https://pcshop.ge/wp-content/themes/electro/assets/css/colors/red.min.css?ver=2.7.0' type='text/css' media='all' />
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.2.22' id='tp-tools-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.2.22' id='revmin-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce-product-filters/assets/js/polyfills.min.js?ver=1.2.0' id='wcpf-plugin-polyfills-script-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4' id='jquery-ui-widget-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4' id='jquery-ui-slider-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce-product-filters/assets/js/front-vendor.min.js?ver=1.2.0' id='wcpf-plugin-vendor-script-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/underscore.min.js?ver=1.8.3' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/wp-util.min.js?ver=5.5.3' id='wp-util-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/accounting/accounting.min.js?ver=0.4.2' id='accounting-js'></script>
<script type='text/javascript' id='wcpf-plugin-script-js-extra'>
/* <![CDATA[ */
var WCPFData = {"registerEntities":{"Project":{"id":"Project","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_project","label":"Project","default_options":{"urlNavigation":"query","filteringStarts":"auto","urlNavigationOptions":[],"useComponents":["pagination","sorting","results-count","page-title","breadcrumb"],"paginationAjax":true,"sortingAjax":true,"productsContainerSelector":".products","paginationSelector":".woocommerce-pagination","resultCountSelector":".woocommerce-result-count","sortingSelector":".woocommerce-ordering","pageTitleSelector":".woocommerce-products-header__title","breadcrumbSelector":".woocommerce-breadcrumb","multipleContainersForProducts":true},"is_grouped":true,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Project\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Project\\Filter_Component","variations":false},"BoxListField":{"id":"BoxListField","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Box List","default_options":{"itemsSource":"attribute","itemsDisplay":"all","queryType":"or","itemsDisplayHierarchical":true,"displayHierarchicalCollapsed":false,"displayTitle":true,"displayToggleContent":true,"defaultToggleState":"show","cssClass":"","actionForEmptyOptions":"hide","displayProductCount":true,"productCountPolicy":"for-option-only","multiSelect":true,"boxSize":"45px"},"is_grouped":false,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Box_list\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Box_List\\Filter_Component","variations":true},"CheckBoxListField":{"id":"CheckBoxListField","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Checkbox","default_options":{"itemsSource":"attribute","itemsDisplay":"all","queryType":"or","itemsDisplayHierarchical":true,"displayHierarchicalCollapsed":false,"displayTitle":true,"displayToggleContent":true,"defaultToggleState":"show","cssClass":"","actionForEmptyOptions":"hide","displayProductCount":true,"productCountPolicy":"for-option-only","seeMoreOptionsBy":"scrollbar","heightOfVisibleContent":12},"is_grouped":false,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Check_Box_List\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Check_Box_List\\Filter_Component","variations":true},"DropDownListField":{"id":"DropDownListField","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Drop Down","default_options":{"itemsSource":"attribute","itemsDisplay":"all","queryType":"or","itemsDisplayHierarchical":true,"displayHierarchicalCollapsed":false,"displayTitle":true,"displayToggleContent":true,"defaultToggleState":"show","cssClass":"","actionForEmptyOptions":"hide","displayProductCount":true,"productCountPolicy":"for-option-only","titleItemReset":"Show all"},"is_grouped":false,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Drop_Down_List\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Drop_Down_List\\Filter_Component","variations":true},"ButtonField":{"id":"ButtonField","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Button","default_options":{"cssClass":"","action":"reset"},"is_grouped":false,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Button\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Button\\Filter_Component","variations":true},"ColorListField":{"id":"ColorListField","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Colors","default_options":{"itemsSource":"attribute","itemsDisplay":"all","queryType":"or","itemsDisplayHierarchical":true,"displayHierarchicalCollapsed":false,"displayTitle":true,"displayToggleContent":true,"defaultToggleState":"show","cssClass":"","actionForEmptyOptions":"hide","displayProductCount":true,"productCountPolicy":"for-option-only","optionKey":"colors"},"is_grouped":false,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Color_List\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Color_List\\Filter_Component","variations":true},"RadioListField":{"id":"RadioListField","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Radio","default_options":{"itemsSource":"attribute","itemsDisplay":"all","queryType":"or","itemsDisplayHierarchical":true,"displayHierarchicalCollapsed":false,"displayTitle":true,"displayToggleContent":true,"defaultToggleState":"show","cssClass":"","actionForEmptyOptions":"hide","displayProductCount":true,"productCountPolicy":"for-option-only","titleItemReset":"Show all","seeMoreOptionsBy":"scrollbar","heightOfVisibleContent":12},"is_grouped":false,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Radio_List\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Radio_List\\Filter_Component","variations":true},"TextListField":{"id":"TextListField","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Text List","default_options":{"itemsSource":"attribute","itemsDisplay":"all","queryType":"or","itemsDisplayHierarchical":true,"displayHierarchicalCollapsed":false,"displayTitle":true,"displayToggleContent":true,"defaultToggleState":"show","cssClass":"","actionForEmptyOptions":"hide","displayProductCount":true,"productCountPolicy":"for-option-only","multiSelect":true,"useInlineStyle":false},"is_grouped":false,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Text_List\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Text_List\\Filter_Component","variations":true},"PriceSliderField":{"id":"PriceSliderField","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Price slider","default_options":{"minPriceOptionKey":"min-price","maxPriceOptionKey":"max-price","optionKey":"price","optionKeyFormat":"dash","cssClass":"","displayMinMaxInput":true,"displayTitle":true,"displayToggleContent":true,"defaultToggleState":"show","displayPriceLabel":true},"is_grouped":false,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Price_Slider\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Field\\Price_Slider\\Filter_Component","variations":false},"SimpleBoxLayout":{"id":"SimpleBoxLayout","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Simple Box","default_options":{"displayToggleContent":true,"defaultToggleState":"show","cssClass":""},"is_grouped":true,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Layout\\Simple_Box\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Layout\\Simple_Box\\Filter_Component","variations":false},"ColumnsLayout":{"id":"ColumnsLayout","class":"WooCommerce_Product_Filter_Plugin\\Entity","post_type":"wcpf_item","label":"Columns","default_options":{"columns":[{"entities":[],"options":{"width":"50%"}}]},"is_grouped":true,"editor_component_class":"WooCommerce_Product_Filter_Plugin\\Layout\\Columns\\Editor_Component","filter_component_class":"WooCommerce_Product_Filter_Plugin\\Layout\\Columns\\Filter_Component","variations":false}},"messages":{"selectNoMatchesFound":"No matches found"},"selectors":{"productsContainer":".products","paginationContainer":".woocommerce-pagination","resultCount":".woocommerce-result-count","sorting":".woocommerce-ordering","pageTitle":".woocommerce-products-header__title","breadcrumb":".woocommerce-breadcrumb"},"pageUrl":"https:\/\/pcshop.ge\/my-account\/","isPaged":"","scriptAfterProductsUpdate":"","scrollTop":"no","priceFormat":{"currencyFormatNumDecimals":0,"currencyFormatSymbol":"&#x20be;","currencyFormatDecimalSep":".","currencyFormatThousandSep":",","currencyFormat":"%s%v"}};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce-product-filters/assets/js/plugin.min.js?ver=1.2.0' id='wcpf-plugin-script-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/pcshop.ge\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.7.1' id='wc-add-to-cart-js'></script>
<script type='text/javascript' id='zxcvbn-async-js-extra'>
/* <![CDATA[ */
var _zxcvbnSettings = {"src":"https:\/\/pcshop.ge\/wp-includes\/js\/zxcvbn.min.js"};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' id='inspire_checkout_fields_checkout_js-js-extra'>
/* <![CDATA[ */
var words = {"uploading":"Uploading file..."};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/flexible-checkout-fields/assets/js/checkout.min.js?ver=2.7.0.19' id='inspire_checkout_fields_checkout_js-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.1' id='vc_woocommerce-add-to-cart-js-js'></script>
<link rel="https://api.w.org/" href="https://pcshop.ge/wp-json/" /><link rel="alternate" type="application/json" href="https://pcshop.ge/wp-json/wp/v2/pages/3854" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://pcshop.ge/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="//pcshop.ge/wp-includes/wlwmanifest.xml" /> 
<link rel='shortlink' href='https://pcshop.ge/?p=3854' />
<link rel="alternate" type="application/json+oembed" href="https://pcshop.ge/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpcshop.ge%2Fmy-account%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://pcshop.ge/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fpcshop.ge%2Fmy-account%2F&#038;format=xml" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PN99KJZ');</script>
<!-- End Google Tag Manager -->

<meta name="facebook-domain-verification" content="snzd7k313kkr9lv0a79p64c3tz6255" /><meta name="framework" content="Redux 4.1.23" />
<!-- This website runs the Product Feed PRO for WooCommerce by AdTribes.io plugin -->
	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name='robots' content='noindex,follow' />

<!-- Facebook Pixel Code -->
<script type='text/javascript'>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
</script>
<!-- End Facebook Pixel Code -->
<script type='text/javascript'>
  fbq('init', '344549603018226', {}, {
    "agent": "wordpress-5.5.3-2.2.1"
});
</script><script type='text/javascript'>
  fbq('track', 'PageView', []);
</script>
<!-- Facebook Pixel Code -->
<noscript>
<img height="1" width="1" style="display:none" alt="fbpx"
src="https://www.facebook.com/tr?id=344549603018226&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83141126-1"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag("js", new Date());
                  gtag("config", "UA-83141126-1",{ "cookie_domain":"auto"});
                </script>
                <script>(window.gaDevIds=window.gaDevIds||[]).push('5CDcaG');</script>			<script  type="text/javascript">
				!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
					n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
					n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
					t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
					document,'script','https://connect.facebook.net/en_US/fbevents.js');
			</script>
			<!-- WooCommerce Facebook Integration Begin -->
			<script  type="text/javascript">

				fbq('init', '344549603018226', {}, {
    "agent": "woocommerce-4.7.1-2.2.0"
});

				fbq( 'track', 'PageView', {
    "source": "woocommerce",
    "version": "4.7.1",
    "pluginVersion": "2.2.0"
} );

				document.addEventListener( 'DOMContentLoaded', function() {
					jQuery && jQuery( function( $ ) {
						// insert placeholder for events injected when a product is added to the cart through AJAX
						$( document.body ).append( '<div class=\"wc-facebook-pixel-event-placeholder\"></div>' );
					} );
				}, false );

			</script>
			<!-- WooCommerce Facebook Integration End -->
			<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>

<style type='text/css'>
/* Begin Simple Side Tab Styles*/
#rum_sst_tab {
	font-family:Arial, sans-serif;
	top:350px;
	background-color:#ea1b25;
	color:#FFFFFF;
	border-style:solid;
	border-width:0px;
}

#rum_sst_tab:hover {
	background-color: #ea1b25;
		-moz-box-shadow:    -3px -3px 5px 2px #ccc;
	-webkit-box-shadow: -3px -3px 5px 2px #ccc;
	box-shadow:         -3px -3px 5px 2px #ccc;


}

.rum_sst_contents {
	position:fixed;
	margin:0;
	padding:6px 13px 8px 13px;
	text-decoration:none;
	text-align:center;
	font-size:15px;
	font-weight:bold;
	border-style:solid;
	display:block;
	z-index:100000;
}

.rum_sst_left {
	left:-2px;
	cursor: pointer;
	-webkit-transform-origin:0 0;
	-moz-transform-origin:0 0;
	-o-transform-origin:0 0;
	-ms-transform-origin:0 0;
	-webkit-transform:rotate(270deg);
	-moz-transform:rotate(270deg);
	-ms-transform:rotate(270deg);
	-o-transform:rotate(270deg);
	transform:rotate(270deg);
	-moz-border-radius-bottomright:10px;
	border-bottom-right-radius:10px;
	-moz-border-radius-bottomleft:10px;
	border-bottom-left-radius:10px;
}

.rum_sst_right {
   	right:-1px;
	cursor: pointer;
	-webkit-transform-origin:100% 100%;
	-moz-transform-origin:100% 100%;
	-o-transform-origin:100% 100%;
	-ms-transform-origin:100% 100%;
	-webkit-transform:rotate(-90deg);
	-moz-transform:rotate(-90deg);
	-ms-transform:rotate(-90deg);
	-o-transform:rotate(-90deg);
	transform:rotate(-90deg);
	-moz-border-radius-topright:10px;
	border-top-right-radius:10px;
	-moz-border-radius-topleft:10px;
	border-top-left-radius:10px;
}

.rum_sst_right.less-ie-9 {
	right:-120px;
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
}

.rum_sst_left.less-ie-9 {
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}

/* End Simple Side Tab Styles*/

</style>

<meta name="generator" content="Powered by Slider Revolution 6.2.22 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="//pcshop.ge/wp-content/uploads/2019/04/cropped-minilogo-1-32x32.png" sizes="32x32" />
<link rel="icon" href="//pcshop.ge/wp-content/uploads/2019/04/cropped-minilogo-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="//pcshop.ge/wp-content/uploads/2019/04/cropped-minilogo-1-180x180.png" />
<meta name="msapplication-TileImage" content="//pcshop.ge/wp-content/uploads/2019/04/cropped-minilogo-1-270x270.png" />
<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>
		<style type="text/css" id="wp-custom-css">
			


.order-number, .order-date, .order-status  {
	background-color:white!important;
	font-weight:bold!important;
	
}















@media (max-width: 767px){
	.aws-search-field
	{
		height:55px!important;
	
	}
	.aws-search-form
	{
		height:55px!important;
	
	}
}











.woocommerce-loop-product__title { color : #333e48 !important; }

.product-title { color : #333e48 !important; }

.product_list_widget a {color: #333e48 }

.mc4wp-response {
display:none;
}


.handheld-footer .handheld-widget-menu ul a {
    color: #333e48;
}



.sku {
	color:#ea1b25;
	font-weight:bold !important;
}

.wc-tabs-wrapper {
	padding-bottom: 2.5em;
}

.woocommerce-tabs {
    margin-bottom:0em !important;
}

.brand
{
	padding-right: 0.5em;
}

@media (max-width: 767px){
	.products-4-1-4
	{
		display: none;
	}
}


@media (max-width: 767px){
	.home-v1-banner-block
	{
		display: none;
	}
}

.yith-wcpb-product-bundled-item-image {
    width: 100px !important;
}

.yith-wcpb-product-bundled-item-image-wrapper
{
	margin-top:15px;
	margin-left:15px;
}


.yith-wcpb-product-bundled-item-data__title {
	font-weight:bold;
	font-size:14px !important;
}

.single-product .price {
    margin-bottom: 0em !important;
}

.yith-wcpb-product-bundled-items {
	margin-top:0.571em;
}

.cart {
	margin-top:0.571em;
}


.menu-item-49329 {
	float:right !important;
}


@media screen and (min-width: 480px)  {
    .rum_sst_contents { display:none; }
}

		</style>
		<noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>

<body data-rsssl=1 class="page-template-default page page-id-3854 theme-electro woocommerce-account woocommerce-page woocommerce-no-js electro-compact electro-wide wpb-js-composer js-comp-ver-6.1 vc_responsive">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PN99KJZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><div class="off-canvas-wrapper">
<div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        
        
        <div class="top-bar hidden-lg-down">
            <div class="container">
            <ul id="menu-top-bar-left" class="nav nav-inline pull-left electro-animate-dropdown flip"><li id="menu-item-3233" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3233"><a title="Welcome to PCShop.ge, Georgia&#039;s Largest Computer Store" href="#">Welcome to PCShop.ge, Georgia&#8217;s Largest Computer Store</a></li>
</ul><ul id="menu-top-bar-right" class="nav nav-inline pull-right electro-animate-dropdown flip"><li id="menu-item-4099" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4099"><a title="Shop" href="https://pcshop.ge/shop/"><i class="ec ec-shopping-bag"></i>Shop</a></li>
<li id="menu-item-4100" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3854 current_page_item menu-item-4100 active"><a title="My Account" href="http://127.0.0.1:8000/my-account"><i class="ec ec-user"></i>My Account</a></li>
</ul>            </div>
        </div><!-- /.top-bar -->

        
    
    <header id="masthead" class="header-v2 stick-this site-header">
        <div class="container hidden-lg-down">
            <div class="masthead"><div class="header-logo-area">			<div class="header-site-branding">
				<a href="http://127.0.0.1:8000/" class="header-logo-link">
					<img src="//pcshop.ge/wp-content/uploads/2019/04/try.png" alt="PCShop.ge" class="img-header-logo" width="168" height="34" />
				</a>
			</div>
			        <div class="off-canvas-navigation-wrapper ">
            <div class="off-canvas-navbar-toggle-buttons clearfix">
                <button class="navbar-toggler navbar-toggle-hamburger " type="button">
                    <i class="ec ec-menu"></i>
                </button>
                <button class="navbar-toggler navbar-toggle-close " type="button">
                    <i class="ec ec-close-remove"></i>
                </button>
            </div>

            <div class="off-canvas-navigation" id="default-oc-header">
                <ul id="menu-pcshop-menu" class="nav nav-inline yamm"><li id="menu-item-23556" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23556 dropdown"><a title="Computers" href="https://pcshop.ge/product-category/computers/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23563" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23563 dropdown-submenu"><a title="PC Hardware" href="https://pcshop.ge/product-category/pc-hardware/">PC Hardware</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-23564" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23564"><a title="CPU" href="https://pcshop.ge/product-category/pc-hardware/cpu/">CPU</a></li>
		<li id="menu-item-23565" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23565"><a title="CPU Cooler" href="https://pcshop.ge/product-category/pc-hardware/cpu-cooler/">CPU Cooler</a></li>
		<li id="menu-item-23566" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23566"><a title="Motherboard" href="https://pcshop.ge/product-category/pc-hardware/motherboard/">Motherboard</a></li>
		<li id="menu-item-23567" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23567"><a title="RAM" href="https://pcshop.ge/product-category/pc-hardware/ram/">RAM</a></li>
		<li id="menu-item-23568" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23568"><a title="HDD" href="https://pcshop.ge/product-category/pc-hardware/hdd/">HDD</a></li>
		<li id="menu-item-23569" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23569"><a title="SSD" href="https://pcshop.ge/product-category/pc-hardware/ssd/">SSD</a></li>
		<li id="menu-item-23570" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23570"><a title="Optical Drive" href="https://pcshop.ge/product-category/pc-hardware/optical-drive/">Optical Drive</a></li>
		<li id="menu-item-23571" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23571"><a title="Graphics Adapter" href="https://pcshop.ge/product-category/pc-hardware/graphics-adapter/">Graphics Adapter</a></li>
		<li id="menu-item-23572" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23572"><a title="LAN Card" href="https://pcshop.ge/product-category/pc-hardware/lan-card/">LAN Card</a></li>
		<li id="menu-item-23573" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23573"><a title="Case" href="https://pcshop.ge/product-category/pc-hardware/case/">Case</a></li>
		<li id="menu-item-23574" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23574"><a title="Power Supply ATX" href="https://pcshop.ge/product-category/pc-hardware/power-supply-atx/">Power Supply ATX</a></li>
		<li id="menu-item-23575" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23575"><a title="Case Fan" href="https://pcshop.ge/product-category/pc-hardware/case-fan/">Case Fan</a></li>
		<li id="menu-item-23576" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23576"><a title="Internal Cables" href="https://pcshop.ge/product-category/pc-hardware/internal-cables/">Internal Cables</a></li>
		<li id="menu-item-23577" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23577"><a title="Other Desktop Option" href="https://pcshop.ge/product-category/pc-hardware/other-desktop-option/">Other Desktop Option</a></li>
	</ul>
</li>
	<li id="menu-item-23578" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23578 dropdown-submenu"><a title="Monitors" href="https://pcshop.ge/product-category/monitors/">Monitors</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-23579" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23579"><a title="LCD 18.5&quot;" href="https://pcshop.ge/product-category/monitors/lcd-18-5/">LCD 18.5&#8243;</a></li>
		<li id="menu-item-23581" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23581"><a title="LCD 20&quot;" href="https://pcshop.ge/product-category/monitors/lcd-20/">LCD 20&#8243;</a></li>
		<li id="menu-item-23582" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23582"><a title="LCD 22&quot;" href="https://pcshop.ge/product-category/monitors/lcd-22/">LCD 22&#8243;</a></li>
		<li id="menu-item-23583" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23583"><a title="LCD 23&quot;" href="https://pcshop.ge/product-category/monitors/lcd-23/">LCD 23&#8243;</a></li>
		<li id="menu-item-23584" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23584"><a title="LCD 24&quot; +" href="https://pcshop.ge/product-category/monitors/lcd-24/">LCD 24&#8243; +</a></li>
		<li id="menu-item-23585" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23585"><a title="Multimedia Projector" href="https://pcshop.ge/product-category/monitors/multimedia-projector/">Multimedia Projector</a></li>
		<li id="menu-item-23586" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23586"><a title="Projector Screen" href="https://pcshop.ge/product-category/monitors/projector-screen/">Projector Screen</a></li>
	</ul>
</li>
	<li id="menu-item-23557" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23557"><a title="PCShop Desktop" href="https://pcshop.ge/product-category/computers/pcshop-desktop/">PCShop Desktop</a></li>
	<li id="menu-item-23558" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23558"><a title="Brand Mainstream Desktop" href="https://pcshop.ge/product-category/computers/brand-mainstream-desktop/">Brand Mainstream Desktop</a></li>
	<li id="menu-item-23559" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23559"><a title="Brand Power Desktop" href="https://pcshop.ge/product-category/computers/brand-power-desktop/">Brand Power Desktop</a></li>
	<li id="menu-item-23560" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23560"><a title="All-In-One PC" href="https://pcshop.ge/product-category/computers/all-in-one-pc/">All-In-One PC</a></li>
</ul>
</li>
<li id="menu-item-23587" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23587 dropdown"><a title="Notebooks" href="https://pcshop.ge/product-category/notebooks/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Notebooks</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23588" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23588"><a title="Entry Notebook" href="https://pcshop.ge/product-category/notebooks/entry-notebook/">Entry Notebook</a></li>
	<li id="menu-item-23589" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23589"><a title="Mainstream Notebook" href="https://pcshop.ge/product-category/notebooks/mainstream-notebook/">Mainstream Notebook</a></li>
	<li id="menu-item-23590" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23590"><a title="Power Notebook" href="https://pcshop.ge/product-category/notebooks/power-notebook/">Power Notebook</a></li>
	<li id="menu-item-23591" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23591"><a title="Large Screen Notebook" href="https://pcshop.ge/product-category/notebooks/large-screen-notebook/">Large Screen Notebook</a></li>
	<li id="menu-item-23592" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23592"><a title="Ultraslim and Tablet NB" href="https://pcshop.ge/product-category/notebooks/ultraslim-and-tablet-nb/">Ultraslim and Tablet NB</a></li>
	<li id="menu-item-23593" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23593 dropdown-submenu"><a title="Notebook Accessories" href="https://pcshop.ge/product-category/notebook-accessories/">Notebook Accessories</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-80310" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80310"><a title="Notebook Charger" href="https://pcshop.ge/product-category/notebook-accessories/notebook-charger/">Notebook Charger</a></li>
		<li id="menu-item-80311" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80311"><a title="Notebook Battery" href="https://pcshop.ge/product-category/notebook-accessories/notebook-battery/">Notebook Battery</a></li>
		<li id="menu-item-23594" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23594"><a title="Notebook Memory" href="https://pcshop.ge/product-category/notebook-accessories/notebook-memory/">Notebook Memory</a></li>
		<li id="menu-item-23597" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23597"><a title="Docking Station" href="https://pcshop.ge/product-category/notebook-accessories/docking-station/">Docking Station</a></li>
		<li id="menu-item-23598" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23598"><a title="Notebook Cases" href="https://pcshop.ge/product-category/notebook-accessories/notebook-cases/">Notebook Cases</a></li>
		<li id="menu-item-23599" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23599"><a title="Other NB Option" href="https://pcshop.ge/product-category/notebook-accessories/other-nb-option/">Other NB Option</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-62693" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-62693 dropdown"><a title="Smartphones &amp; Tablets" href="https://pcshop.ge/product-category/smartphones-tablets/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Smartphones &#038; Tablets</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-62695" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62695"><a title="Smartphones" href="https://pcshop.ge/product-category/smartphones-tablets/smartphones/">Smartphones</a></li>
	<li id="menu-item-62711" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62711"><a title="Tablet PCs" href="https://pcshop.ge/product-category/smartphones-tablets/tablet-pcs/">Tablet PCs</a></li>
	<li id="menu-item-62694" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62694"><a title="E-Book Readers" href="https://pcshop.ge/product-category/smartphones-tablets/e-book-readers/">E-Book Readers</a></li>
	<li id="menu-item-62696" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62696"><a title="Wall Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/wall-chargers/">Wall Chargers</a></li>
	<li id="menu-item-62697" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62697"><a title="Wireless Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/wireless-chargers/">Wireless Chargers</a></li>
	<li id="menu-item-62698" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62698"><a title="Car Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/car-chargers/">Car Chargers</a></li>
	<li id="menu-item-62700" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62700"><a title="Charger Cables" href="https://pcshop.ge/product-category/smartphones-tablets/charger-cables/">Charger Cables</a></li>
	<li id="menu-item-62701" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62701"><a title="Power Banks" href="https://pcshop.ge/product-category/smartphones-tablets/power-banks/">Power Banks</a></li>
	<li id="menu-item-62699" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62699"><a title="Car Cradles &amp; Mounts" href="https://pcshop.ge/product-category/smartphones-tablets/car-cradles-mounts/">Car Cradles &#038; Mounts</a></li>
	<li id="menu-item-62702" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62702"><a title="Selfie Sticks" href="https://pcshop.ge/product-category/smartphones-tablets/selfie-sticks/">Selfie Sticks</a></li>
	<li id="menu-item-62703" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62703"><a title="Bluetooth Mono Headsets" href="https://pcshop.ge/product-category/smartphones-tablets/bluetooth-mono-headsets/">Bluetooth Mono Headsets</a></li>
	<li id="menu-item-62704" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62704"><a title="Smartphone &amp; Tab Cases" href="https://pcshop.ge/product-category/smartphones-tablets/smartphone-tab-cases/">Smartphone &#038; Tab Cases</a></li>
	<li id="menu-item-62710" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62710"><a title="Smartwatches &amp; Fit Trackers" href="https://pcshop.ge/product-category/smartphones-tablets/smartwatches-fit-trackers/">Smartwatches &#038; Fit Trackers</a></li>
	<li id="menu-item-62709" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62709"><a title="Other Accessories" href="https://pcshop.ge/product-category/smartphones-tablets/other-accessories-smartphones-tablets/">Other Accessories</a></li>
</ul>
</li>
<li id="menu-item-80303" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-80303 dropdown"><a title="TV &amp; Accessories" href="https://pcshop.ge/product-category/tv-accessories/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &#038; Accessories</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-80308" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80308"><a title="Android Mini PC" href="https://pcshop.ge/product-category/tv-accessories/android-mini-pc-tv-accessories/">Android Mini PC</a></li>
	<li id="menu-item-80304" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80304"><a title="TV 22&quot;-32&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-22-32-tv-accessories/">TV 22&#8243;-32&#8243;</a></li>
	<li id="menu-item-80305" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80305"><a title="TV 33&quot;-43&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-33-43/">TV 33&#8243;-43&#8243;</a></li>
	<li id="menu-item-80306" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80306"><a title="TV 44&quot;-54&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-44-54/">TV 44&#8243;-54&#8243;</a></li>
	<li id="menu-item-80307" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80307"><a title="TV 55&quot;-65&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-55-65/">TV 55&#8243;-65&#8243;</a></li>
	<li id="menu-item-80309" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80309"><a title="Wall Mounting" href="https://pcshop.ge/product-category/tv-accessories/wall-mounting/">Wall Mounting</a></li>
</ul>
</li>
<li id="menu-item-23629" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23629 dropdown"><a title="Connectivity" href="https://pcshop.ge/product-category/connectivity/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Connectivity</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23605" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23605"><a title="USB Hub" href="https://pcshop.ge/product-category/connectivity/usb-hub/">USB Hub</a></li>
	<li id="menu-item-23606" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23606"><a title="Hub Switch" href="https://pcshop.ge/product-category/connectivity/hub-switch/">Hub Switch</a></li>
	<li id="menu-item-23607" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23607"><a title="Wireless Devices" href="https://pcshop.ge/product-category/connectivity/wireless-devices/">Wireless Devices</a></li>
	<li id="menu-item-23608" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23608"><a title="Wireless Adapters" href="https://pcshop.ge/product-category/connectivity/wireless-adapters/">Wireless Adapters</a></li>
	<li id="menu-item-23609" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23609"><a title="Wireless Antennas" href="https://pcshop.ge/product-category/connectivity/wireless-antennas/">Wireless Antennas</a></li>
	<li id="menu-item-23610" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23610"><a title="Router" href="https://pcshop.ge/product-category/connectivity/router/">Router</a></li>
	<li id="menu-item-23611" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23611"><a title="Bluetooth" href="https://pcshop.ge/product-category/connectivity/bluetooth/">Bluetooth</a></li>
	<li id="menu-item-23612" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23612"><a title="Phone" href="https://pcshop.ge/product-category/connectivity/phone/">Phone</a></li>
	<li id="menu-item-23614" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23614"><a title="USB Adapters" href="https://pcshop.ge/product-category/connectivity/usb-adapters/">USB Adapters</a></li>
	<li id="menu-item-23615" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23615"><a title="USB Cable" href="https://pcshop.ge/product-category/connectivity/usb-cable/">USB Cable</a></li>
	<li id="menu-item-23617" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23617"><a title="Audio Video Cable" href="https://pcshop.ge/product-category/connectivity/audio-video-cable/">Audio Video Cable</a></li>
	<li id="menu-item-23618" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23618"><a title="VGA &amp; DVI Cable" href="https://pcshop.ge/product-category/connectivity/vga-dvi-cable/">VGA &#038; DVI Cable</a></li>
	<li id="menu-item-23619" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23619"><a title="HDMI Cable" href="https://pcshop.ge/product-category/connectivity/hdmi-cable/">HDMI Cable</a></li>
	<li id="menu-item-23620" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23620"><a title="IEEE1394 (i-Link)" href="https://pcshop.ge/product-category/connectivity/ieee1394-i-link/">IEEE1394 (i-Link)</a></li>
	<li id="menu-item-23621" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23621"><a title="VGA &amp; HDMI Splitters" href="https://pcshop.ge/product-category/connectivity/vga-hdmi-splitters/">VGA &#038; HDMI Splitters</a></li>
	<li id="menu-item-23622" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23622"><a title="Other Cable" href="https://pcshop.ge/product-category/connectivity/other-cable/">Other Cable</a></li>
	<li id="menu-item-23623" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23623"><a title="Patch Cable" href="https://pcshop.ge/product-category/connectivity/patch-cable/">Patch Cable</a></li>
	<li id="menu-item-23624" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23624"><a title="LAN Cable" href="https://pcshop.ge/product-category/connectivity/lan-cable/">LAN Cable</a></li>
	<li id="menu-item-23625" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23625"><a title="LAN Connector &amp; Outlet" href="https://pcshop.ge/product-category/connectivity/lan-connector-outlet/">LAN Connector &#038; Outlet</a></li>
	<li id="menu-item-23626" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23626"><a title="Racks" href="https://pcshop.ge/product-category/connectivity/racks/">Racks</a></li>
	<li id="menu-item-23627" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23627"><a title="Tools" href="https://pcshop.ge/product-category/connectivity/tools/">Tools</a></li>
	<li id="menu-item-23628" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23628"><a title="Connection Other" href="https://pcshop.ge/product-category/connectivity/connection-other/">Connection Other</a></li>
</ul>
</li>
<li id="menu-item-23630" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23630 dropdown"><a title="Periphery" href="https://pcshop.ge/product-category/periphery/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Periphery</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23631" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23631"><a title="Ink Printers" href="https://pcshop.ge/product-category/periphery/ink-printers/">Ink Printers</a></li>
	<li id="menu-item-23632" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23632"><a title="Ink Multifunction" href="https://pcshop.ge/product-category/periphery/ink-multifunction/">Ink Multifunction</a></li>
	<li id="menu-item-23633" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23633"><a title="Photo Printer" href="https://pcshop.ge/product-category/periphery/photo-printer/">Photo Printer</a></li>
	<li id="menu-item-23634" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23634"><a title="Laser Printer" href="https://pcshop.ge/product-category/periphery/laser-printer/">Laser Printer</a></li>
	<li id="menu-item-23635" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23635"><a title="Laser Multifunction" href="https://pcshop.ge/product-category/periphery/laser-multifunction/">Laser Multifunction</a></li>
	<li id="menu-item-23636" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23636"><a title="Color Laser Printer" href="https://pcshop.ge/product-category/periphery/color-laser-printer/">Color Laser Printer</a></li>
	<li id="menu-item-23637" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23637"><a title="Color Laser Multifunction" href="https://pcshop.ge/product-category/periphery/color-laser-multifunction/">Color Laser Multifunction</a></li>
	<li id="menu-item-23638" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23638"><a title="Scanner" href="https://pcshop.ge/product-category/periphery/scanner/">Scanner</a></li>
</ul>
</li>
<li id="menu-item-23639" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23639 dropdown"><a title="Power Products" href="https://pcshop.ge/product-category/power-products/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Power Products</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23644" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23644"><a title="Power Cables" href="https://pcshop.ge/product-category/power-products/power-cables/">Power Cables</a></li>
	<li id="menu-item-23642" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23642"><a title="Surge Protection" href="https://pcshop.ge/product-category/power-products/surge-protection/">Surge Protection</a></li>
	<li id="menu-item-23640" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23640"><a title="UPS" href="https://pcshop.ge/product-category/power-products/ups/">UPS</a></li>
	<li id="menu-item-23641" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23641"><a title="Invertor" href="https://pcshop.ge/product-category/power-products/invertor/">Invertor</a></li>
	<li id="menu-item-23643" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23643"><a title="Battery and Chargers" href="https://pcshop.ge/product-category/power-products/battery-and-chargers/">Battery and Chargers</a></li>
	<li id="menu-item-23645" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23645"><a title="Other Power Option" href="https://pcshop.ge/product-category/power-products/other-power-option/">Other Power Option</a></li>
</ul>
</li>
<li id="menu-item-23646" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23646 dropdown"><a title="Accessories" href="https://pcshop.ge/product-category/accessories/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Accessories</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23647" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23647"><a title="Keyboard" href="https://pcshop.ge/product-category/accessories/keyboard/">Keyboard</a></li>
	<li id="menu-item-23648" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23648"><a title="Mouse" href="https://pcshop.ge/product-category/accessories/mouse/">Mouse</a></li>
	<li id="menu-item-23649" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23649"><a title="Speaker" href="https://pcshop.ge/product-category/accessories/speaker/">Speaker</a></li>
	<li id="menu-item-23650" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23650"><a title="Headphone" href="https://pcshop.ge/product-category/accessories/headphone/">Headphone</a></li>
	<li id="menu-item-23651" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23651"><a title="Microphone" href="https://pcshop.ge/product-category/accessories/microphone/">Microphone</a></li>
	<li id="menu-item-23652" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23652"><a title="Joystick" href="https://pcshop.ge/product-category/accessories/joystick/">Joystick</a></li>
	<li id="menu-item-23653" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23653"><a title="Wheel" href="https://pcshop.ge/product-category/accessories/wheel/">Wheel</a></li>
	<li id="menu-item-23654" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23654"><a title="Web Camera" href="https://pcshop.ge/product-category/accessories/web-camera/">Web Camera</a></li>
	<li id="menu-item-23655" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23655"><a title="USB Flash Drive" href="https://pcshop.ge/product-category/accessories/usb-flash-drive/">USB Flash Drive</a></li>
	<li id="menu-item-23656" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23656"><a title="Flash Card" href="https://pcshop.ge/product-category/accessories/flash-card/">Flash Card</a></li>
	<li id="menu-item-23657" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23657"><a title="Card Reader" href="https://pcshop.ge/product-category/accessories/card-reader/">Card Reader</a></li>
	<li id="menu-item-23658" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23658"><a title="External HDD" href="https://pcshop.ge/product-category/accessories/external-hdd/">External HDD</a></li>
	<li id="menu-item-23659" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23659"><a title="External Optical Drive" href="https://pcshop.ge/product-category/accessories/external-optical-drive/">External Optical Drive</a></li>
	<li id="menu-item-23660" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23660"><a title="Presenter" href="https://pcshop.ge/product-category/accessories/presenter/">Presenter</a></li>
	<li id="menu-item-23661" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23661"><a title="Other Accessories" href="https://pcshop.ge/product-category/accessories/other-accessories/">Other Accessories</a></li>
</ul>
</li>
<li id="menu-item-23662" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23662 dropdown"><a title="Consumables" href="https://pcshop.ge/product-category/consumables/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Consumables</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23663" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23663"><a title="Cartridge HP LJ" href="https://pcshop.ge/product-category/consumables/cartridge-hp-lj/">Cartridge HP LJ</a></li>
	<li id="menu-item-23664" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23664"><a title="Cartridge HP Ink" href="https://pcshop.ge/product-category/consumables/cartridge-hp-ink/">Cartridge HP Ink</a></li>
	<li id="menu-item-23665" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23665"><a title="Cartridge Canon Laser" href="https://pcshop.ge/product-category/consumables/cartridge-canon-laser/">Cartridge Canon Laser</a></li>
	<li id="menu-item-23666" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23666"><a title="Cartridge Canon Ink" href="https://pcshop.ge/product-category/consumables/cartridge-canon-ink/">Cartridge Canon Ink</a></li>
	<li id="menu-item-23667" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23667"><a title="Cartridge Epson" href="https://pcshop.ge/product-category/consumables/cartridge-epson/">Cartridge Epson</a></li>
	<li id="menu-item-23668" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23668"><a title="Cartridge Panasonic" href="https://pcshop.ge/product-category/consumables/cartridge-panasonic/">Cartridge Panasonic</a></li>
	<li id="menu-item-23669" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23669"><a title="Cartridge ITD" href="https://pcshop.ge/product-category/consumables/cartridge-itd/">Cartridge ITD</a></li>
	<li id="menu-item-23670" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23670"><a title="Optical Disk" href="https://pcshop.ge/product-category/consumables/optical-disk/">Optical Disk</a></li>
	<li id="menu-item-23671" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23671"><a title="Paper" href="https://pcshop.ge/product-category/consumables/paper/">Paper</a></li>
	<li id="menu-item-23672" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23672"><a title="Cleaners" href="https://pcshop.ge/product-category/consumables/cleaners/">Cleaners</a></li>
</ul>
</li>
<li id="menu-item-23673" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23673 dropdown"><a title="Electronics" href="https://pcshop.ge/product-category/electronics/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Electronics</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23678" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23678"><a title="Car Electronics" href="https://pcshop.ge/product-category/electronics/car-electronics/">Car Electronics</a></li>
	<li id="menu-item-23679" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23679"><a title="Drone" href="https://pcshop.ge/product-category/electronics/drone/">Drone</a></li>
	<li id="menu-item-23680" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23680"><a title="Gaming Hardware" href="https://pcshop.ge/product-category/electronics/gaming-hardware/">Gaming Hardware</a></li>
	<li id="menu-item-23681" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23681"><a title="Digital Photo Camera" href="https://pcshop.ge/product-category/electronics/digital-photo-camera/">Digital Photo Camera</a></li>
	<li id="menu-item-23682" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23682"><a title="CamCorder" href="https://pcshop.ge/product-category/electronics/camcorder/">CamCorder</a></li>
	<li id="menu-item-23683" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23683"><a title="Camera Case" href="https://pcshop.ge/product-category/electronics/camera-case/">Camera Case</a></li>
	<li id="menu-item-23684" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23684"><a title="Other Electronics Option" href="https://pcshop.ge/product-category/electronics/other-electronics-option/">Other Electronics Option</a></li>
</ul>
</li>
<li id="menu-item-23685" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23685 dropdown"><a title="Software" href="https://pcshop.ge/product-category/software/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Software</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23686" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23686"><a title="Software MicroSoft" href="https://pcshop.ge/product-category/software/software-microsoft/">Software MicroSoft</a></li>
	<li id="menu-item-23687" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23687"><a title="Software Kaspersky" href="https://pcshop.ge/product-category/software/software-kaspersky/">Software Kaspersky</a></li>
	<li id="menu-item-80312" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80312"><a title="Symantec Software" href="https://pcshop.ge/product-category/software/symantec-software/">Symantec Software</a></li>
	<li id="menu-item-80313" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80313"><a title="Software ESET" href="https://pcshop.ge/product-category/software/software-eset/">Software ESET</a></li>
	<li id="menu-item-80314" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80314"><a title="Adobe" href="https://pcshop.ge/product-category/software/adobe/">Adobe</a></li>
	<li id="menu-item-80315" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80315"><a title="Other" href="https://pcshop.ge/product-category/software/other/">Other</a></li>
</ul>
</li>
</ul>            </div>
        </div>
        </div><div class="primary-nav-menu electro-animate-dropdown"><ul id="menu-shop-center-bar" class="nav nav-inline yamm"><li id="menu-item-14648" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-14648"><a title="Home" href="http://127.0.0.1:8000/">Home</a></li>
<li id="menu-item-42012" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42012"><a title="Shop" href="https://pcshop.ge/shop/">Shop</a></li>
<li id="menu-item-14647" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14647"><a title="Contact" href="https://pcshop.ge/contact/">Contact</a></li>
<li id="menu-item-42011" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3854 current_page_item menu-item-42011 active"><a title="My Account" href="http://127.0.0.1:8000/my-account">My Account</a></li>
</ul></div><div class="header-support">
            <div class="header-support-inner">
                <div class="support-icon">
                    <i class="ec ec-support"></i>
                </div>
                <div class="support-info">
                    <div class="support-number"><strong>Contact Us</strong><br> (+995) 322 05 20 75</div>
                    <div class="support-email">sales@pcshop.ge</div>
                </div>
            </div>
        </div>        </div><div class="electro-navbar">
            <div class="container">
                <div class="electro-navbar-inner">
                <div class="departments-menu-v2">
            <div class="dropdown ">
                <a href="#" class="departments-menu-v2-title" data-toggle="dropdown">
                    <span>Shop By Department<i class="departments-menu-v2-icon ec ec-arrow-down-search"></i></span>
                </a>
                <ul id="menu-pcshop-menu-1" class="dropdown-menu yamm"><li id="menu-item-23556" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23556 dropdown"><a title="Computers" href="https://pcshop.ge/product-category/computers/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Computers</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23563" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23563 dropdown-submenu"><a title="PC Hardware" href="https://pcshop.ge/product-category/pc-hardware/">PC Hardware</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-23564" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23564"><a title="CPU" href="https://pcshop.ge/product-category/pc-hardware/cpu/">CPU</a></li>
		<li id="menu-item-23565" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23565"><a title="CPU Cooler" href="https://pcshop.ge/product-category/pc-hardware/cpu-cooler/">CPU Cooler</a></li>
		<li id="menu-item-23566" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23566"><a title="Motherboard" href="https://pcshop.ge/product-category/pc-hardware/motherboard/">Motherboard</a></li>
		<li id="menu-item-23567" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23567"><a title="RAM" href="https://pcshop.ge/product-category/pc-hardware/ram/">RAM</a></li>
		<li id="menu-item-23568" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23568"><a title="HDD" href="https://pcshop.ge/product-category/pc-hardware/hdd/">HDD</a></li>
		<li id="menu-item-23569" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23569"><a title="SSD" href="https://pcshop.ge/product-category/pc-hardware/ssd/">SSD</a></li>
		<li id="menu-item-23570" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23570"><a title="Optical Drive" href="https://pcshop.ge/product-category/pc-hardware/optical-drive/">Optical Drive</a></li>
		<li id="menu-item-23571" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23571"><a title="Graphics Adapter" href="https://pcshop.ge/product-category/pc-hardware/graphics-adapter/">Graphics Adapter</a></li>
		<li id="menu-item-23572" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23572"><a title="LAN Card" href="https://pcshop.ge/product-category/pc-hardware/lan-card/">LAN Card</a></li>
		<li id="menu-item-23573" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23573"><a title="Case" href="https://pcshop.ge/product-category/pc-hardware/case/">Case</a></li>
		<li id="menu-item-23574" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23574"><a title="Power Supply ATX" href="https://pcshop.ge/product-category/pc-hardware/power-supply-atx/">Power Supply ATX</a></li>
		<li id="menu-item-23575" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23575"><a title="Case Fan" href="https://pcshop.ge/product-category/pc-hardware/case-fan/">Case Fan</a></li>
		<li id="menu-item-23576" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23576"><a title="Internal Cables" href="https://pcshop.ge/product-category/pc-hardware/internal-cables/">Internal Cables</a></li>
		<li id="menu-item-23577" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23577"><a title="Other Desktop Option" href="https://pcshop.ge/product-category/pc-hardware/other-desktop-option/">Other Desktop Option</a></li>
	</ul>
</li>
	<li id="menu-item-23578" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23578 dropdown-submenu"><a title="Monitors" href="https://pcshop.ge/product-category/monitors/">Monitors</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-23579" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23579"><a title="LCD 18.5&quot;" href="https://pcshop.ge/product-category/monitors/lcd-18-5/">LCD 18.5&#8243;</a></li>
		<li id="menu-item-23581" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23581"><a title="LCD 20&quot;" href="https://pcshop.ge/product-category/monitors/lcd-20/">LCD 20&#8243;</a></li>
		<li id="menu-item-23582" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23582"><a title="LCD 22&quot;" href="https://pcshop.ge/product-category/monitors/lcd-22/">LCD 22&#8243;</a></li>
		<li id="menu-item-23583" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23583"><a title="LCD 23&quot;" href="https://pcshop.ge/product-category/monitors/lcd-23/">LCD 23&#8243;</a></li>
		<li id="menu-item-23584" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23584"><a title="LCD 24&quot; +" href="https://pcshop.ge/product-category/monitors/lcd-24/">LCD 24&#8243; +</a></li>
		<li id="menu-item-23585" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23585"><a title="Multimedia Projector" href="https://pcshop.ge/product-category/monitors/multimedia-projector/">Multimedia Projector</a></li>
		<li id="menu-item-23586" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23586"><a title="Projector Screen" href="https://pcshop.ge/product-category/monitors/projector-screen/">Projector Screen</a></li>
	</ul>
</li>
	<li id="menu-item-23557" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23557"><a title="PCShop Desktop" href="https://pcshop.ge/product-category/computers/pcshop-desktop/">PCShop Desktop</a></li>
	<li id="menu-item-23558" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23558"><a title="Brand Mainstream Desktop" href="https://pcshop.ge/product-category/computers/brand-mainstream-desktop/">Brand Mainstream Desktop</a></li>
	<li id="menu-item-23559" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23559"><a title="Brand Power Desktop" href="https://pcshop.ge/product-category/computers/brand-power-desktop/">Brand Power Desktop</a></li>
	<li id="menu-item-23560" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23560"><a title="All-In-One PC" href="https://pcshop.ge/product-category/computers/all-in-one-pc/">All-In-One PC</a></li>
</ul>
</li>
<li id="menu-item-23587" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23587 dropdown"><a title="Notebooks" href="https://pcshop.ge/product-category/notebooks/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Notebooks</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23588" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23588"><a title="Entry Notebook" href="https://pcshop.ge/product-category/notebooks/entry-notebook/">Entry Notebook</a></li>
	<li id="menu-item-23589" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23589"><a title="Mainstream Notebook" href="https://pcshop.ge/product-category/notebooks/mainstream-notebook/">Mainstream Notebook</a></li>
	<li id="menu-item-23590" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23590"><a title="Power Notebook" href="https://pcshop.ge/product-category/notebooks/power-notebook/">Power Notebook</a></li>
	<li id="menu-item-23591" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23591"><a title="Large Screen Notebook" href="https://pcshop.ge/product-category/notebooks/large-screen-notebook/">Large Screen Notebook</a></li>
	<li id="menu-item-23592" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23592"><a title="Ultraslim and Tablet NB" href="https://pcshop.ge/product-category/notebooks/ultraslim-and-tablet-nb/">Ultraslim and Tablet NB</a></li>
	<li id="menu-item-23593" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23593 dropdown-submenu"><a title="Notebook Accessories" href="https://pcshop.ge/product-category/notebook-accessories/">Notebook Accessories</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-80310" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80310"><a title="Notebook Charger" href="https://pcshop.ge/product-category/notebook-accessories/notebook-charger/">Notebook Charger</a></li>
		<li id="menu-item-80311" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80311"><a title="Notebook Battery" href="https://pcshop.ge/product-category/notebook-accessories/notebook-battery/">Notebook Battery</a></li>
		<li id="menu-item-23594" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23594"><a title="Notebook Memory" href="https://pcshop.ge/product-category/notebook-accessories/notebook-memory/">Notebook Memory</a></li>
		<li id="menu-item-23597" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23597"><a title="Docking Station" href="https://pcshop.ge/product-category/notebook-accessories/docking-station/">Docking Station</a></li>
		<li id="menu-item-23598" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23598"><a title="Notebook Cases" href="https://pcshop.ge/product-category/notebook-accessories/notebook-cases/">Notebook Cases</a></li>
		<li id="menu-item-23599" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23599"><a title="Other NB Option" href="https://pcshop.ge/product-category/notebook-accessories/other-nb-option/">Other NB Option</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-62693" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-62693 dropdown"><a title="Smartphones &amp; Tablets" href="https://pcshop.ge/product-category/smartphones-tablets/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Smartphones &#038; Tablets</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-62695" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62695"><a title="Smartphones" href="https://pcshop.ge/product-category/smartphones-tablets/smartphones/">Smartphones</a></li>
	<li id="menu-item-62711" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62711"><a title="Tablet PCs" href="https://pcshop.ge/product-category/smartphones-tablets/tablet-pcs/">Tablet PCs</a></li>
	<li id="menu-item-62694" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62694"><a title="E-Book Readers" href="https://pcshop.ge/product-category/smartphones-tablets/e-book-readers/">E-Book Readers</a></li>
	<li id="menu-item-62696" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62696"><a title="Wall Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/wall-chargers/">Wall Chargers</a></li>
	<li id="menu-item-62697" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62697"><a title="Wireless Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/wireless-chargers/">Wireless Chargers</a></li>
	<li id="menu-item-62698" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62698"><a title="Car Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/car-chargers/">Car Chargers</a></li>
	<li id="menu-item-62700" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62700"><a title="Charger Cables" href="https://pcshop.ge/product-category/smartphones-tablets/charger-cables/">Charger Cables</a></li>
	<li id="menu-item-62701" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62701"><a title="Power Banks" href="https://pcshop.ge/product-category/smartphones-tablets/power-banks/">Power Banks</a></li>
	<li id="menu-item-62699" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62699"><a title="Car Cradles &amp; Mounts" href="https://pcshop.ge/product-category/smartphones-tablets/car-cradles-mounts/">Car Cradles &#038; Mounts</a></li>
	<li id="menu-item-62702" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62702"><a title="Selfie Sticks" href="https://pcshop.ge/product-category/smartphones-tablets/selfie-sticks/">Selfie Sticks</a></li>
	<li id="menu-item-62703" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62703"><a title="Bluetooth Mono Headsets" href="https://pcshop.ge/product-category/smartphones-tablets/bluetooth-mono-headsets/">Bluetooth Mono Headsets</a></li>
	<li id="menu-item-62704" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62704"><a title="Smartphone &amp; Tab Cases" href="https://pcshop.ge/product-category/smartphones-tablets/smartphone-tab-cases/">Smartphone &#038; Tab Cases</a></li>
	<li id="menu-item-62710" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62710"><a title="Smartwatches &amp; Fit Trackers" href="https://pcshop.ge/product-category/smartphones-tablets/smartwatches-fit-trackers/">Smartwatches &#038; Fit Trackers</a></li>
	<li id="menu-item-62709" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62709"><a title="Other Accessories" href="https://pcshop.ge/product-category/smartphones-tablets/other-accessories-smartphones-tablets/">Other Accessories</a></li>
</ul>
</li>
<li id="menu-item-80303" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-80303 dropdown"><a title="TV &amp; Accessories" href="https://pcshop.ge/product-category/tv-accessories/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">TV &#038; Accessories</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-80308" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80308"><a title="Android Mini PC" href="https://pcshop.ge/product-category/tv-accessories/android-mini-pc-tv-accessories/">Android Mini PC</a></li>
	<li id="menu-item-80304" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80304"><a title="TV 22&quot;-32&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-22-32-tv-accessories/">TV 22&#8243;-32&#8243;</a></li>
	<li id="menu-item-80305" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80305"><a title="TV 33&quot;-43&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-33-43/">TV 33&#8243;-43&#8243;</a></li>
	<li id="menu-item-80306" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80306"><a title="TV 44&quot;-54&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-44-54/">TV 44&#8243;-54&#8243;</a></li>
	<li id="menu-item-80307" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80307"><a title="TV 55&quot;-65&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-55-65/">TV 55&#8243;-65&#8243;</a></li>
	<li id="menu-item-80309" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80309"><a title="Wall Mounting" href="https://pcshop.ge/product-category/tv-accessories/wall-mounting/">Wall Mounting</a></li>
</ul>
</li>
<li id="menu-item-23629" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23629 dropdown"><a title="Connectivity" href="https://pcshop.ge/product-category/connectivity/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Connectivity</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23605" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23605"><a title="USB Hub" href="https://pcshop.ge/product-category/connectivity/usb-hub/">USB Hub</a></li>
	<li id="menu-item-23606" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23606"><a title="Hub Switch" href="https://pcshop.ge/product-category/connectivity/hub-switch/">Hub Switch</a></li>
	<li id="menu-item-23607" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23607"><a title="Wireless Devices" href="https://pcshop.ge/product-category/connectivity/wireless-devices/">Wireless Devices</a></li>
	<li id="menu-item-23608" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23608"><a title="Wireless Adapters" href="https://pcshop.ge/product-category/connectivity/wireless-adapters/">Wireless Adapters</a></li>
	<li id="menu-item-23609" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23609"><a title="Wireless Antennas" href="https://pcshop.ge/product-category/connectivity/wireless-antennas/">Wireless Antennas</a></li>
	<li id="menu-item-23610" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23610"><a title="Router" href="https://pcshop.ge/product-category/connectivity/router/">Router</a></li>
	<li id="menu-item-23611" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23611"><a title="Bluetooth" href="https://pcshop.ge/product-category/connectivity/bluetooth/">Bluetooth</a></li>
	<li id="menu-item-23612" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23612"><a title="Phone" href="https://pcshop.ge/product-category/connectivity/phone/">Phone</a></li>
	<li id="menu-item-23614" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23614"><a title="USB Adapters" href="https://pcshop.ge/product-category/connectivity/usb-adapters/">USB Adapters</a></li>
	<li id="menu-item-23615" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23615"><a title="USB Cable" href="https://pcshop.ge/product-category/connectivity/usb-cable/">USB Cable</a></li>
	<li id="menu-item-23617" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23617"><a title="Audio Video Cable" href="https://pcshop.ge/product-category/connectivity/audio-video-cable/">Audio Video Cable</a></li>
	<li id="menu-item-23618" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23618"><a title="VGA &amp; DVI Cable" href="https://pcshop.ge/product-category/connectivity/vga-dvi-cable/">VGA &#038; DVI Cable</a></li>
	<li id="menu-item-23619" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23619"><a title="HDMI Cable" href="https://pcshop.ge/product-category/connectivity/hdmi-cable/">HDMI Cable</a></li>
	<li id="menu-item-23620" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23620"><a title="IEEE1394 (i-Link)" href="https://pcshop.ge/product-category/connectivity/ieee1394-i-link/">IEEE1394 (i-Link)</a></li>
	<li id="menu-item-23621" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23621"><a title="VGA &amp; HDMI Splitters" href="https://pcshop.ge/product-category/connectivity/vga-hdmi-splitters/">VGA &#038; HDMI Splitters</a></li>
	<li id="menu-item-23622" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23622"><a title="Other Cable" href="https://pcshop.ge/product-category/connectivity/other-cable/">Other Cable</a></li>
	<li id="menu-item-23623" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23623"><a title="Patch Cable" href="https://pcshop.ge/product-category/connectivity/patch-cable/">Patch Cable</a></li>
	<li id="menu-item-23624" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23624"><a title="LAN Cable" href="https://pcshop.ge/product-category/connectivity/lan-cable/">LAN Cable</a></li>
	<li id="menu-item-23625" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23625"><a title="LAN Connector &amp; Outlet" href="https://pcshop.ge/product-category/connectivity/lan-connector-outlet/">LAN Connector &#038; Outlet</a></li>
	<li id="menu-item-23626" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23626"><a title="Racks" href="https://pcshop.ge/product-category/connectivity/racks/">Racks</a></li>
	<li id="menu-item-23627" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23627"><a title="Tools" href="https://pcshop.ge/product-category/connectivity/tools/">Tools</a></li>
	<li id="menu-item-23628" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23628"><a title="Connection Other" href="https://pcshop.ge/product-category/connectivity/connection-other/">Connection Other</a></li>
</ul>
</li>
<li id="menu-item-23630" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23630 dropdown"><a title="Periphery" href="https://pcshop.ge/product-category/periphery/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Periphery</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23631" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23631"><a title="Ink Printers" href="https://pcshop.ge/product-category/periphery/ink-printers/">Ink Printers</a></li>
	<li id="menu-item-23632" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23632"><a title="Ink Multifunction" href="https://pcshop.ge/product-category/periphery/ink-multifunction/">Ink Multifunction</a></li>
	<li id="menu-item-23633" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23633"><a title="Photo Printer" href="https://pcshop.ge/product-category/periphery/photo-printer/">Photo Printer</a></li>
	<li id="menu-item-23634" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23634"><a title="Laser Printer" href="https://pcshop.ge/product-category/periphery/laser-printer/">Laser Printer</a></li>
	<li id="menu-item-23635" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23635"><a title="Laser Multifunction" href="https://pcshop.ge/product-category/periphery/laser-multifunction/">Laser Multifunction</a></li>
	<li id="menu-item-23636" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23636"><a title="Color Laser Printer" href="https://pcshop.ge/product-category/periphery/color-laser-printer/">Color Laser Printer</a></li>
	<li id="menu-item-23637" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23637"><a title="Color Laser Multifunction" href="https://pcshop.ge/product-category/periphery/color-laser-multifunction/">Color Laser Multifunction</a></li>
	<li id="menu-item-23638" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23638"><a title="Scanner" href="https://pcshop.ge/product-category/periphery/scanner/">Scanner</a></li>
</ul>
</li>
<li id="menu-item-23639" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23639 dropdown"><a title="Power Products" href="https://pcshop.ge/product-category/power-products/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Power Products</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23644" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23644"><a title="Power Cables" href="https://pcshop.ge/product-category/power-products/power-cables/">Power Cables</a></li>
	<li id="menu-item-23642" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23642"><a title="Surge Protection" href="https://pcshop.ge/product-category/power-products/surge-protection/">Surge Protection</a></li>
	<li id="menu-item-23640" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23640"><a title="UPS" href="https://pcshop.ge/product-category/power-products/ups/">UPS</a></li>
	<li id="menu-item-23641" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23641"><a title="Invertor" href="https://pcshop.ge/product-category/power-products/invertor/">Invertor</a></li>
	<li id="menu-item-23643" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23643"><a title="Battery and Chargers" href="https://pcshop.ge/product-category/power-products/battery-and-chargers/">Battery and Chargers</a></li>
	<li id="menu-item-23645" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23645"><a title="Other Power Option" href="https://pcshop.ge/product-category/power-products/other-power-option/">Other Power Option</a></li>
</ul>
</li>
<li id="menu-item-23646" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23646 dropdown"><a title="Accessories" href="https://pcshop.ge/product-category/accessories/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Accessories</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23647" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23647"><a title="Keyboard" href="https://pcshop.ge/product-category/accessories/keyboard/">Keyboard</a></li>
	<li id="menu-item-23648" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23648"><a title="Mouse" href="https://pcshop.ge/product-category/accessories/mouse/">Mouse</a></li>
	<li id="menu-item-23649" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23649"><a title="Speaker" href="https://pcshop.ge/product-category/accessories/speaker/">Speaker</a></li>
	<li id="menu-item-23650" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23650"><a title="Headphone" href="https://pcshop.ge/product-category/accessories/headphone/">Headphone</a></li>
	<li id="menu-item-23651" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23651"><a title="Microphone" href="https://pcshop.ge/product-category/accessories/microphone/">Microphone</a></li>
	<li id="menu-item-23652" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23652"><a title="Joystick" href="https://pcshop.ge/product-category/accessories/joystick/">Joystick</a></li>
	<li id="menu-item-23653" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23653"><a title="Wheel" href="https://pcshop.ge/product-category/accessories/wheel/">Wheel</a></li>
	<li id="menu-item-23654" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23654"><a title="Web Camera" href="https://pcshop.ge/product-category/accessories/web-camera/">Web Camera</a></li>
	<li id="menu-item-23655" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23655"><a title="USB Flash Drive" href="https://pcshop.ge/product-category/accessories/usb-flash-drive/">USB Flash Drive</a></li>
	<li id="menu-item-23656" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23656"><a title="Flash Card" href="https://pcshop.ge/product-category/accessories/flash-card/">Flash Card</a></li>
	<li id="menu-item-23657" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23657"><a title="Card Reader" href="https://pcshop.ge/product-category/accessories/card-reader/">Card Reader</a></li>
	<li id="menu-item-23658" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23658"><a title="External HDD" href="https://pcshop.ge/product-category/accessories/external-hdd/">External HDD</a></li>
	<li id="menu-item-23659" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23659"><a title="External Optical Drive" href="https://pcshop.ge/product-category/accessories/external-optical-drive/">External Optical Drive</a></li>
	<li id="menu-item-23660" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23660"><a title="Presenter" href="https://pcshop.ge/product-category/accessories/presenter/">Presenter</a></li>
	<li id="menu-item-23661" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23661"><a title="Other Accessories" href="https://pcshop.ge/product-category/accessories/other-accessories/">Other Accessories</a></li>
</ul>
</li>
<li id="menu-item-23662" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23662 dropdown"><a title="Consumables" href="https://pcshop.ge/product-category/consumables/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Consumables</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23663" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23663"><a title="Cartridge HP LJ" href="https://pcshop.ge/product-category/consumables/cartridge-hp-lj/">Cartridge HP LJ</a></li>
	<li id="menu-item-23664" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23664"><a title="Cartridge HP Ink" href="https://pcshop.ge/product-category/consumables/cartridge-hp-ink/">Cartridge HP Ink</a></li>
	<li id="menu-item-23665" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23665"><a title="Cartridge Canon Laser" href="https://pcshop.ge/product-category/consumables/cartridge-canon-laser/">Cartridge Canon Laser</a></li>
	<li id="menu-item-23666" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23666"><a title="Cartridge Canon Ink" href="https://pcshop.ge/product-category/consumables/cartridge-canon-ink/">Cartridge Canon Ink</a></li>
	<li id="menu-item-23667" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23667"><a title="Cartridge Epson" href="https://pcshop.ge/product-category/consumables/cartridge-epson/">Cartridge Epson</a></li>
	<li id="menu-item-23668" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23668"><a title="Cartridge Panasonic" href="https://pcshop.ge/product-category/consumables/cartridge-panasonic/">Cartridge Panasonic</a></li>
	<li id="menu-item-23669" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23669"><a title="Cartridge ITD" href="https://pcshop.ge/product-category/consumables/cartridge-itd/">Cartridge ITD</a></li>
	<li id="menu-item-23670" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23670"><a title="Optical Disk" href="https://pcshop.ge/product-category/consumables/optical-disk/">Optical Disk</a></li>
	<li id="menu-item-23671" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23671"><a title="Paper" href="https://pcshop.ge/product-category/consumables/paper/">Paper</a></li>
	<li id="menu-item-23672" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23672"><a title="Cleaners" href="https://pcshop.ge/product-category/consumables/cleaners/">Cleaners</a></li>
</ul>
</li>
<li id="menu-item-23673" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23673 dropdown"><a title="Electronics" href="https://pcshop.ge/product-category/electronics/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Electronics</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23678" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23678"><a title="Car Electronics" href="https://pcshop.ge/product-category/electronics/car-electronics/">Car Electronics</a></li>
	<li id="menu-item-23679" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23679"><a title="Drone" href="https://pcshop.ge/product-category/electronics/drone/">Drone</a></li>
	<li id="menu-item-23680" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23680"><a title="Gaming Hardware" href="https://pcshop.ge/product-category/electronics/gaming-hardware/">Gaming Hardware</a></li>
	<li id="menu-item-23681" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23681"><a title="Digital Photo Camera" href="https://pcshop.ge/product-category/electronics/digital-photo-camera/">Digital Photo Camera</a></li>
	<li id="menu-item-23682" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23682"><a title="CamCorder" href="https://pcshop.ge/product-category/electronics/camcorder/">CamCorder</a></li>
	<li id="menu-item-23683" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23683"><a title="Camera Case" href="https://pcshop.ge/product-category/electronics/camera-case/">Camera Case</a></li>
	<li id="menu-item-23684" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23684"><a title="Other Electronics Option" href="https://pcshop.ge/product-category/electronics/other-electronics-option/">Other Electronics Option</a></li>
</ul>
</li>
<li id="menu-item-23685" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23685 dropdown"><a title="Software" href="https://pcshop.ge/product-category/software/" data-toggle="dropdown-hover" class="dropdown-toggle" aria-haspopup="true">Software</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23686" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23686"><a title="Software MicroSoft" href="https://pcshop.ge/product-category/software/software-microsoft/">Software MicroSoft</a></li>
	<li id="menu-item-23687" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23687"><a title="Software Kaspersky" href="https://pcshop.ge/product-category/software/software-kaspersky/">Software Kaspersky</a></li>
	<li id="menu-item-80312" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80312"><a title="Symantec Software" href="https://pcshop.ge/product-category/software/symantec-software/">Symantec Software</a></li>
	<li id="menu-item-80313" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80313"><a title="Software ESET" href="https://pcshop.ge/product-category/software/software-eset/">Software ESET</a></li>
	<li id="menu-item-80314" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80314"><a title="Adobe" href="https://pcshop.ge/product-category/software/adobe/">Adobe</a></li>
	<li id="menu-item-80315" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80315"><a title="Other" href="https://pcshop.ge/product-category/software/other/">Other</a></li>
</ul>
</li>
</ul>            </div>
        </div>
<form class="navbar-search" method="get" action="https://pcshop.ge/" autocomplete="off">
	<label class="sr-only screen-reader-text" for="search">Search for:</label>
	<div class="input-group">
    	<div class="input-search-field">
    		<input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for Products" autocomplete="off" />
    	</div>
    			<div class="input-group-addon search-categories">
			<select  name='product_cat' id='electro_header_search_categories_dropdown' class='postform resizeselect' >
	<option value='0' selected='selected'>All Categories</option>
	<option class="level-0" value="computers">Computers</option>
	<option class="level-1" value="pcshop-desktop">&nbsp;&nbsp;&nbsp;PCShop Desktop</option>
	<option class="level-1" value="brand-mainstream-desktop">&nbsp;&nbsp;&nbsp;Brand Mainstream Desktop</option>
	<option class="level-1" value="brand-power-desktop">&nbsp;&nbsp;&nbsp;Brand Power Desktop</option>
	<option class="level-1" value="all-in-one-pc">&nbsp;&nbsp;&nbsp;All-In-One PC</option>
	<option class="level-1" value="server">&nbsp;&nbsp;&nbsp;Server</option>
	<option class="level-0" value="pc-hardware">PC Hardware</option>
	<option class="level-1" value="cpu">&nbsp;&nbsp;&nbsp;CPU</option>
	<option class="level-1" value="cpu-cooler">&nbsp;&nbsp;&nbsp;CPU Cooler</option>
	<option class="level-1" value="motherboard">&nbsp;&nbsp;&nbsp;Motherboard</option>
	<option class="level-1" value="ram">&nbsp;&nbsp;&nbsp;RAM</option>
	<option class="level-1" value="hdd">&nbsp;&nbsp;&nbsp;HDD</option>
	<option class="level-1" value="ssd">&nbsp;&nbsp;&nbsp;SSD</option>
	<option class="level-1" value="optical-drive">&nbsp;&nbsp;&nbsp;Optical Drive</option>
	<option class="level-1" value="graphics-adapter">&nbsp;&nbsp;&nbsp;Graphics Adapter</option>
	<option class="level-1" value="lan-card">&nbsp;&nbsp;&nbsp;LAN Card</option>
	<option class="level-1" value="case">&nbsp;&nbsp;&nbsp;Case</option>
	<option class="level-1" value="power-supply-atx">&nbsp;&nbsp;&nbsp;Power Supply ATX</option>
	<option class="level-1" value="case-fan">&nbsp;&nbsp;&nbsp;Case Fan</option>
	<option class="level-1" value="internal-cables">&nbsp;&nbsp;&nbsp;Internal Cables</option>
	<option class="level-1" value="other-desktop-option">&nbsp;&nbsp;&nbsp;Other Desktop Option</option>
	<option class="level-0" value="monitors">Monitors</option>
	<option class="level-1" value="lcd-18-5">&nbsp;&nbsp;&nbsp;LCD 18.5&#8243;</option>
	<option class="level-1" value="lcd-20">&nbsp;&nbsp;&nbsp;LCD 20&#8243;</option>
	<option class="level-1" value="lcd-22">&nbsp;&nbsp;&nbsp;LCD 22&#8243;</option>
	<option class="level-1" value="lcd-23">&nbsp;&nbsp;&nbsp;LCD 23&#8243;</option>
	<option class="level-1" value="lcd-24">&nbsp;&nbsp;&nbsp;LCD 24&#8243; +</option>
	<option class="level-1" value="multimedia-projector">&nbsp;&nbsp;&nbsp;Multimedia Projector</option>
	<option class="level-1" value="projector-screen">&nbsp;&nbsp;&nbsp;Projector Screen</option>
	<option class="level-1" value="lcd-19">&nbsp;&nbsp;&nbsp;LCD 19&#8243;</option>
	<option class="level-0" value="notebooks">Notebooks</option>
	<option class="level-1" value="entry-notebook">&nbsp;&nbsp;&nbsp;Entry Notebook</option>
	<option class="level-1" value="mainstream-notebook">&nbsp;&nbsp;&nbsp;Mainstream Notebook</option>
	<option class="level-1" value="power-notebook">&nbsp;&nbsp;&nbsp;Power Notebook</option>
	<option class="level-1" value="ultraslim-and-tablet-nb">&nbsp;&nbsp;&nbsp;Ultraslim and Tablet NB</option>
	<option class="level-0" value="notebook-accessories">Notebook Accessories</option>
	<option class="level-1" value="notebook-memory">&nbsp;&nbsp;&nbsp;Notebook Memory</option>
	<option class="level-1" value="docking-station">&nbsp;&nbsp;&nbsp;Docking Station</option>
	<option class="level-1" value="notebook-cases">&nbsp;&nbsp;&nbsp;Notebook Cases</option>
	<option class="level-1" value="other-nb-option">&nbsp;&nbsp;&nbsp;Other NB Option</option>
	<option class="level-1" value="notebook-charger">&nbsp;&nbsp;&nbsp;Notebook Charger</option>
	<option class="level-0" value="connectivity">Connectivity</option>
	<option class="level-1" value="usb-hub">&nbsp;&nbsp;&nbsp;USB Hub</option>
	<option class="level-1" value="hub-switch">&nbsp;&nbsp;&nbsp;Hub Switch</option>
	<option class="level-1" value="wireless-devices">&nbsp;&nbsp;&nbsp;Wireless Devices</option>
	<option class="level-1" value="wireless-adapters">&nbsp;&nbsp;&nbsp;Wireless Adapters</option>
	<option class="level-1" value="wireless-antennas">&nbsp;&nbsp;&nbsp;Wireless Antennas</option>
	<option class="level-1" value="router">&nbsp;&nbsp;&nbsp;Router</option>
	<option class="level-1" value="bluetooth">&nbsp;&nbsp;&nbsp;Bluetooth</option>
	<option class="level-1" value="phone">&nbsp;&nbsp;&nbsp;Phone</option>
	<option class="level-1" value="usb-adapters">&nbsp;&nbsp;&nbsp;USB Adapters</option>
	<option class="level-1" value="usb-cable">&nbsp;&nbsp;&nbsp;USB Cable</option>
	<option class="level-1" value="audio-video-cable">&nbsp;&nbsp;&nbsp;Audio Video Cable</option>
	<option class="level-1" value="vga-dvi-cable">&nbsp;&nbsp;&nbsp;VGA &amp; DVI Cable</option>
	<option class="level-1" value="hdmi-cable">&nbsp;&nbsp;&nbsp;HDMI Cable</option>
	<option class="level-1" value="ieee1394-i-link">&nbsp;&nbsp;&nbsp;IEEE1394 (i-Link)</option>
	<option class="level-1" value="vga-hdmi-splitters">&nbsp;&nbsp;&nbsp;VGA &amp; HDMI Splitters</option>
	<option class="level-1" value="other-cable">&nbsp;&nbsp;&nbsp;Other Cable</option>
	<option class="level-1" value="patch-cable">&nbsp;&nbsp;&nbsp;Patch Cable</option>
	<option class="level-1" value="lan-cable">&nbsp;&nbsp;&nbsp;LAN Cable</option>
	<option class="level-1" value="lan-connector-outlet">&nbsp;&nbsp;&nbsp;LAN Connector &amp; Outlet</option>
	<option class="level-1" value="racks">&nbsp;&nbsp;&nbsp;Racks</option>
	<option class="level-1" value="tools">&nbsp;&nbsp;&nbsp;Tools</option>
	<option class="level-1" value="connection-other">&nbsp;&nbsp;&nbsp;Connection Other</option>
	<option class="level-0" value="periphery">Periphery</option>
	<option class="level-1" value="ink-printers">&nbsp;&nbsp;&nbsp;Ink Printers</option>
	<option class="level-1" value="ink-multifunction">&nbsp;&nbsp;&nbsp;Ink Multifunction</option>
	<option class="level-1" value="photo-printer">&nbsp;&nbsp;&nbsp;Photo Printer</option>
	<option class="level-1" value="laser-printer">&nbsp;&nbsp;&nbsp;Laser Printer</option>
	<option class="level-1" value="laser-multifunction">&nbsp;&nbsp;&nbsp;Laser Multifunction</option>
	<option class="level-1" value="color-laser-printer">&nbsp;&nbsp;&nbsp;Color Laser Printer</option>
	<option class="level-1" value="color-laser-multifunction">&nbsp;&nbsp;&nbsp;Color Laser Multifunction</option>
	<option class="level-1" value="scanner">&nbsp;&nbsp;&nbsp;Scanner</option>
	<option class="level-0" value="power-products">Power Products</option>
	<option class="level-1" value="power-cables">&nbsp;&nbsp;&nbsp;Power Cables</option>
	<option class="level-1" value="surge-protection">&nbsp;&nbsp;&nbsp;Surge Protection</option>
	<option class="level-1" value="ups">&nbsp;&nbsp;&nbsp;UPS</option>
	<option class="level-1" value="invertor">&nbsp;&nbsp;&nbsp;Invertor</option>
	<option class="level-1" value="battery-and-chargers">&nbsp;&nbsp;&nbsp;Battery and Chargers</option>
	<option class="level-1" value="other-power-option">&nbsp;&nbsp;&nbsp;Other Power Option</option>
	<option class="level-0" value="accessories">Accessories</option>
	<option class="level-1" value="keyboard">&nbsp;&nbsp;&nbsp;Keyboard</option>
	<option class="level-1" value="mouse">&nbsp;&nbsp;&nbsp;Mouse</option>
	<option class="level-1" value="speaker">&nbsp;&nbsp;&nbsp;Speaker</option>
	<option class="level-1" value="headphone">&nbsp;&nbsp;&nbsp;Headphone</option>
	<option class="level-1" value="microphone">&nbsp;&nbsp;&nbsp;Microphone</option>
	<option class="level-1" value="joystick">&nbsp;&nbsp;&nbsp;Joystick</option>
	<option class="level-1" value="wheel">&nbsp;&nbsp;&nbsp;Wheel</option>
	<option class="level-1" value="web-camera">&nbsp;&nbsp;&nbsp;Web Camera</option>
	<option class="level-1" value="usb-flash-drive">&nbsp;&nbsp;&nbsp;USB Flash Drive</option>
	<option class="level-1" value="flash-card">&nbsp;&nbsp;&nbsp;Flash Card</option>
	<option class="level-1" value="card-reader">&nbsp;&nbsp;&nbsp;Card Reader</option>
	<option class="level-1" value="external-hdd">&nbsp;&nbsp;&nbsp;External HDD</option>
	<option class="level-1" value="external-optical-drive">&nbsp;&nbsp;&nbsp;External Optical Drive</option>
	<option class="level-1" value="presenter">&nbsp;&nbsp;&nbsp;Presenter</option>
	<option class="level-1" value="other-accessories">&nbsp;&nbsp;&nbsp;Other Accessories</option>
	<option class="level-0" value="consumables">Consumables</option>
	<option class="level-1" value="cartridge-hp-lj">&nbsp;&nbsp;&nbsp;Cartridge HP LJ</option>
	<option class="level-1" value="cartridge-hp-ink">&nbsp;&nbsp;&nbsp;Cartridge HP Ink</option>
	<option class="level-1" value="cartridge-canon-laser">&nbsp;&nbsp;&nbsp;Cartridge Canon Laser</option>
	<option class="level-1" value="cartridge-canon-ink">&nbsp;&nbsp;&nbsp;Cartridge Canon Ink</option>
	<option class="level-1" value="cartridge-epson">&nbsp;&nbsp;&nbsp;Cartridge Epson</option>
	<option class="level-1" value="cartridge-panasonic">&nbsp;&nbsp;&nbsp;Cartridge Panasonic</option>
	<option class="level-1" value="cartridge-itd">&nbsp;&nbsp;&nbsp;Cartridge ITD</option>
	<option class="level-1" value="optical-disk">&nbsp;&nbsp;&nbsp;Optical Disk</option>
	<option class="level-1" value="paper">&nbsp;&nbsp;&nbsp;Paper</option>
	<option class="level-1" value="cleaners">&nbsp;&nbsp;&nbsp;Cleaners</option>
	<option class="level-0" value="electronics">Electronics</option>
	<option class="level-1" value="car-electronics">&nbsp;&nbsp;&nbsp;Car Electronics</option>
	<option class="level-1" value="drone">&nbsp;&nbsp;&nbsp;Drone</option>
	<option class="level-1" value="gaming-hardware">&nbsp;&nbsp;&nbsp;Gaming Hardware</option>
	<option class="level-1" value="digital-photo-camera">&nbsp;&nbsp;&nbsp;Digital Photo Camera</option>
	<option class="level-1" value="camcorder">&nbsp;&nbsp;&nbsp;CamCorder</option>
	<option class="level-1" value="camera-case">&nbsp;&nbsp;&nbsp;Camera Case</option>
	<option class="level-1" value="other-electronics-option">&nbsp;&nbsp;&nbsp;Other Electronics Option</option>
	<option class="level-0" value="software">Software</option>
	<option class="level-1" value="software-microsoft">&nbsp;&nbsp;&nbsp;Software MicroSoft</option>
	<option class="level-1" value="software-kaspersky">&nbsp;&nbsp;&nbsp;Software Kaspersky</option>
	<option class="level-1" value="symantec-software">&nbsp;&nbsp;&nbsp;Symantec Software</option>
	<option class="level-1" value="software-eset">&nbsp;&nbsp;&nbsp;Software ESET</option>
	<option class="level-1" value="adobe">&nbsp;&nbsp;&nbsp;Adobe</option>
	<option class="level-1" value="other">&nbsp;&nbsp;&nbsp;Other</option>
	<option class="level-0" value="smartphones-tablets">Smartphones &amp; Tablets</option>
	<option class="level-1" value="smartphones">&nbsp;&nbsp;&nbsp;Smartphones</option>
	<option class="level-1" value="wall-chargers">&nbsp;&nbsp;&nbsp;Wall Chargers</option>
	<option class="level-1" value="wireless-chargers">&nbsp;&nbsp;&nbsp;Wireless Chargers</option>
	<option class="level-1" value="car-chargers">&nbsp;&nbsp;&nbsp;Car Chargers</option>
	<option class="level-1" value="charger-cables">&nbsp;&nbsp;&nbsp;Charger Cables</option>
	<option class="level-1" value="power-banks">&nbsp;&nbsp;&nbsp;Power Banks</option>
	<option class="level-1" value="car-cradles-mounts">&nbsp;&nbsp;&nbsp;Car Cradles &amp; Mounts</option>
	<option class="level-1" value="selfie-sticks">&nbsp;&nbsp;&nbsp;Selfie Sticks</option>
	<option class="level-1" value="bluetooth-mono-headsets">&nbsp;&nbsp;&nbsp;Bluetooth Mono Headsets</option>
	<option class="level-1" value="smartphone-tab-cases">&nbsp;&nbsp;&nbsp;Smartphone &amp; Tab Cases</option>
	<option class="level-1" value="other-accessories-smartphones-tablets">&nbsp;&nbsp;&nbsp;Other Accessories</option>
	<option class="level-1" value="tablet-pcs">&nbsp;&nbsp;&nbsp;Tablet PCs</option>
	<option class="level-1" value="smartwatches-fit-trackers">&nbsp;&nbsp;&nbsp;Smartwatches &amp; Fit Trackers</option>
	<option class="level-0" value="tv-accessories">TV &amp; Accessories</option>
	<option class="level-1" value="tv-22-32-tv-accessories">&nbsp;&nbsp;&nbsp;TV 22&#8243;-32&#8243;</option>
	<option class="level-1" value="tv-33-43">&nbsp;&nbsp;&nbsp;TV 33&#8243;-43&#8243;</option>
	<option class="level-1" value="tv-44-54">&nbsp;&nbsp;&nbsp;TV 44&#8243;-54&#8243;</option>
	<option class="level-1" value="tv-55-65">&nbsp;&nbsp;&nbsp;TV 55&#8243;-65&#8243;</option>
	<option class="level-1" value="wall-mounting">&nbsp;&nbsp;&nbsp;Wall Mounting</option>
	<option class="level-1" value="android-mini-pc-tv-accessories">&nbsp;&nbsp;&nbsp;Android Mini PC</option>
</select>
		</div>
				<div class="input-group-btn">
			<input type="hidden" id="search-param" name="post_type" value="product" />
			<button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
		</div>
	</div>
	</form>
<div class="header-icons"><div class="header-icon" data-toggle="tooltip" data-placement="bottom" data-title="Compare">
            <a href="https://pcshop.ge/compare/">
                <i class="ec ec-compare"></i>
                            </a>
        </div><div class="header-icon" data-toggle="tooltip" data-placement="bottom" data-title="Wishlist">
        <a href="https://pcshop.ge/wishlist/">
            <i class="ec ec-favorites"></i>
                    </a>
    </div><div class="header-icon header-icon__cart animate-dropdown dropdown"data-toggle="tooltip" data-placement="bottom" data-title="Cart">
            <a href="https://pcshop.ge/cart/" data-toggle="dropdown">
                <i class="ec ec-shopping-bag"></i>
                <span class="cart-items-count count header-icon-counter">0</span>
                <span class="cart-items-total-price total-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#x20be;</span>0.00</bdi></span></span>
            </a>
                                <ul class="dropdown-menu dropdown-menu-mini-cart">
                        <li>
                            <div class="widget_shopping_cart_content">
                              

	<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


                            </div>
                        </li>
                    </ul>        </div></div><!-- /.header-icons -->                </div>
            </div>
        </div>
        </div>

                    <div class="handheld-header-wrap container hidden-xl-up">
                <div class="handheld-header-v2 handheld-stick-this ">
                            <div class="off-canvas-navigation-wrapper ">
            <div class="off-canvas-navbar-toggle-buttons clearfix">
                <button class="navbar-toggler navbar-toggle-hamburger " type="button">
                    <i class="ec ec-menu"></i>
                </button>
                <button class="navbar-toggler navbar-toggle-close " type="button">
                    <i class="ec ec-close-remove"></i>
                </button>
            </div>

            <div class="off-canvas-navigation" id="default-oc-header">
                <ul id="menu-pcshop-menu-2" class="nav nav-inline yamm"><li id="menu-item-23556" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23556 dropdown"><a title="Computers" href="https://pcshop.ge/product-category/computers/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23563" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23563 dropdown-submenu"><a title="PC Hardware" href="https://pcshop.ge/product-category/pc-hardware/">PC Hardware</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-23564" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23564"><a title="CPU" href="https://pcshop.ge/product-category/pc-hardware/cpu/">CPU</a></li>
		<li id="menu-item-23565" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23565"><a title="CPU Cooler" href="https://pcshop.ge/product-category/pc-hardware/cpu-cooler/">CPU Cooler</a></li>
		<li id="menu-item-23566" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23566"><a title="Motherboard" href="https://pcshop.ge/product-category/pc-hardware/motherboard/">Motherboard</a></li>
		<li id="menu-item-23567" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23567"><a title="RAM" href="https://pcshop.ge/product-category/pc-hardware/ram/">RAM</a></li>
		<li id="menu-item-23568" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23568"><a title="HDD" href="https://pcshop.ge/product-category/pc-hardware/hdd/">HDD</a></li>
		<li id="menu-item-23569" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23569"><a title="SSD" href="https://pcshop.ge/product-category/pc-hardware/ssd/">SSD</a></li>
		<li id="menu-item-23570" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23570"><a title="Optical Drive" href="https://pcshop.ge/product-category/pc-hardware/optical-drive/">Optical Drive</a></li>
		<li id="menu-item-23571" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23571"><a title="Graphics Adapter" href="https://pcshop.ge/product-category/pc-hardware/graphics-adapter/">Graphics Adapter</a></li>
		<li id="menu-item-23572" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23572"><a title="LAN Card" href="https://pcshop.ge/product-category/pc-hardware/lan-card/">LAN Card</a></li>
		<li id="menu-item-23573" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23573"><a title="Case" href="https://pcshop.ge/product-category/pc-hardware/case/">Case</a></li>
		<li id="menu-item-23574" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23574"><a title="Power Supply ATX" href="https://pcshop.ge/product-category/pc-hardware/power-supply-atx/">Power Supply ATX</a></li>
		<li id="menu-item-23575" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23575"><a title="Case Fan" href="https://pcshop.ge/product-category/pc-hardware/case-fan/">Case Fan</a></li>
		<li id="menu-item-23576" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23576"><a title="Internal Cables" href="https://pcshop.ge/product-category/pc-hardware/internal-cables/">Internal Cables</a></li>
		<li id="menu-item-23577" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23577"><a title="Other Desktop Option" href="https://pcshop.ge/product-category/pc-hardware/other-desktop-option/">Other Desktop Option</a></li>
	</ul>
</li>
	<li id="menu-item-23578" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23578 dropdown-submenu"><a title="Monitors" href="https://pcshop.ge/product-category/monitors/">Monitors</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-23579" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23579"><a title="LCD 18.5&quot;" href="https://pcshop.ge/product-category/monitors/lcd-18-5/">LCD 18.5&#8243;</a></li>
		<li id="menu-item-23581" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23581"><a title="LCD 20&quot;" href="https://pcshop.ge/product-category/monitors/lcd-20/">LCD 20&#8243;</a></li>
		<li id="menu-item-23582" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23582"><a title="LCD 22&quot;" href="https://pcshop.ge/product-category/monitors/lcd-22/">LCD 22&#8243;</a></li>
		<li id="menu-item-23583" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23583"><a title="LCD 23&quot;" href="https://pcshop.ge/product-category/monitors/lcd-23/">LCD 23&#8243;</a></li>
		<li id="menu-item-23584" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23584"><a title="LCD 24&quot; +" href="https://pcshop.ge/product-category/monitors/lcd-24/">LCD 24&#8243; +</a></li>
		<li id="menu-item-23585" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23585"><a title="Multimedia Projector" href="https://pcshop.ge/product-category/monitors/multimedia-projector/">Multimedia Projector</a></li>
		<li id="menu-item-23586" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23586"><a title="Projector Screen" href="https://pcshop.ge/product-category/monitors/projector-screen/">Projector Screen</a></li>
	</ul>
</li>
	<li id="menu-item-23557" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23557"><a title="PCShop Desktop" href="https://pcshop.ge/product-category/computers/pcshop-desktop/">PCShop Desktop</a></li>
	<li id="menu-item-23558" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23558"><a title="Brand Mainstream Desktop" href="https://pcshop.ge/product-category/computers/brand-mainstream-desktop/">Brand Mainstream Desktop</a></li>
	<li id="menu-item-23559" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23559"><a title="Brand Power Desktop" href="https://pcshop.ge/product-category/computers/brand-power-desktop/">Brand Power Desktop</a></li>
	<li id="menu-item-23560" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23560"><a title="All-In-One PC" href="https://pcshop.ge/product-category/computers/all-in-one-pc/">All-In-One PC</a></li>
</ul>
</li>
<li id="menu-item-23587" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23587 dropdown"><a title="Notebooks" href="https://pcshop.ge/product-category/notebooks/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Notebooks</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23588" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23588"><a title="Entry Notebook" href="https://pcshop.ge/product-category/notebooks/entry-notebook/">Entry Notebook</a></li>
	<li id="menu-item-23589" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23589"><a title="Mainstream Notebook" href="https://pcshop.ge/product-category/notebooks/mainstream-notebook/">Mainstream Notebook</a></li>
	<li id="menu-item-23590" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23590"><a title="Power Notebook" href="https://pcshop.ge/product-category/notebooks/power-notebook/">Power Notebook</a></li>
	<li id="menu-item-23591" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23591"><a title="Large Screen Notebook" href="https://pcshop.ge/product-category/notebooks/large-screen-notebook/">Large Screen Notebook</a></li>
	<li id="menu-item-23592" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23592"><a title="Ultraslim and Tablet NB" href="https://pcshop.ge/product-category/notebooks/ultraslim-and-tablet-nb/">Ultraslim and Tablet NB</a></li>
	<li id="menu-item-23593" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23593 dropdown-submenu"><a title="Notebook Accessories" href="https://pcshop.ge/product-category/notebook-accessories/">Notebook Accessories</a>
	<ul role="menu" class=" dropdown-menu">
		<li id="menu-item-80310" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80310"><a title="Notebook Charger" href="https://pcshop.ge/product-category/notebook-accessories/notebook-charger/">Notebook Charger</a></li>
		<li id="menu-item-80311" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80311"><a title="Notebook Battery" href="https://pcshop.ge/product-category/notebook-accessories/notebook-battery/">Notebook Battery</a></li>
		<li id="menu-item-23594" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23594"><a title="Notebook Memory" href="https://pcshop.ge/product-category/notebook-accessories/notebook-memory/">Notebook Memory</a></li>
		<li id="menu-item-23597" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23597"><a title="Docking Station" href="https://pcshop.ge/product-category/notebook-accessories/docking-station/">Docking Station</a></li>
		<li id="menu-item-23598" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23598"><a title="Notebook Cases" href="https://pcshop.ge/product-category/notebook-accessories/notebook-cases/">Notebook Cases</a></li>
		<li id="menu-item-23599" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23599"><a title="Other NB Option" href="https://pcshop.ge/product-category/notebook-accessories/other-nb-option/">Other NB Option</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-62693" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-62693 dropdown"><a title="Smartphones &amp; Tablets" href="https://pcshop.ge/product-category/smartphones-tablets/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Smartphones &#038; Tablets</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-62695" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62695"><a title="Smartphones" href="https://pcshop.ge/product-category/smartphones-tablets/smartphones/">Smartphones</a></li>
	<li id="menu-item-62711" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62711"><a title="Tablet PCs" href="https://pcshop.ge/product-category/smartphones-tablets/tablet-pcs/">Tablet PCs</a></li>
	<li id="menu-item-62694" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62694"><a title="E-Book Readers" href="https://pcshop.ge/product-category/smartphones-tablets/e-book-readers/">E-Book Readers</a></li>
	<li id="menu-item-62696" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62696"><a title="Wall Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/wall-chargers/">Wall Chargers</a></li>
	<li id="menu-item-62697" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62697"><a title="Wireless Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/wireless-chargers/">Wireless Chargers</a></li>
	<li id="menu-item-62698" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62698"><a title="Car Chargers" href="https://pcshop.ge/product-category/smartphones-tablets/car-chargers/">Car Chargers</a></li>
	<li id="menu-item-62700" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62700"><a title="Charger Cables" href="https://pcshop.ge/product-category/smartphones-tablets/charger-cables/">Charger Cables</a></li>
	<li id="menu-item-62701" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62701"><a title="Power Banks" href="https://pcshop.ge/product-category/smartphones-tablets/power-banks/">Power Banks</a></li>
	<li id="menu-item-62699" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62699"><a title="Car Cradles &amp; Mounts" href="https://pcshop.ge/product-category/smartphones-tablets/car-cradles-mounts/">Car Cradles &#038; Mounts</a></li>
	<li id="menu-item-62702" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62702"><a title="Selfie Sticks" href="https://pcshop.ge/product-category/smartphones-tablets/selfie-sticks/">Selfie Sticks</a></li>
	<li id="menu-item-62703" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62703"><a title="Bluetooth Mono Headsets" href="https://pcshop.ge/product-category/smartphones-tablets/bluetooth-mono-headsets/">Bluetooth Mono Headsets</a></li>
	<li id="menu-item-62704" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62704"><a title="Smartphone &amp; Tab Cases" href="https://pcshop.ge/product-category/smartphones-tablets/smartphone-tab-cases/">Smartphone &#038; Tab Cases</a></li>
	<li id="menu-item-62710" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62710"><a title="Smartwatches &amp; Fit Trackers" href="https://pcshop.ge/product-category/smartphones-tablets/smartwatches-fit-trackers/">Smartwatches &#038; Fit Trackers</a></li>
	<li id="menu-item-62709" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-62709"><a title="Other Accessories" href="https://pcshop.ge/product-category/smartphones-tablets/other-accessories-smartphones-tablets/">Other Accessories</a></li>
</ul>
</li>
<li id="menu-item-80303" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-80303 dropdown"><a title="TV &amp; Accessories" href="https://pcshop.ge/product-category/tv-accessories/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &#038; Accessories</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-80308" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80308"><a title="Android Mini PC" href="https://pcshop.ge/product-category/tv-accessories/android-mini-pc-tv-accessories/">Android Mini PC</a></li>
	<li id="menu-item-80304" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80304"><a title="TV 22&quot;-32&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-22-32-tv-accessories/">TV 22&#8243;-32&#8243;</a></li>
	<li id="menu-item-80305" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80305"><a title="TV 33&quot;-43&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-33-43/">TV 33&#8243;-43&#8243;</a></li>
	<li id="menu-item-80306" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80306"><a title="TV 44&quot;-54&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-44-54/">TV 44&#8243;-54&#8243;</a></li>
	<li id="menu-item-80307" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80307"><a title="TV 55&quot;-65&quot;" href="https://pcshop.ge/product-category/tv-accessories/tv-55-65/">TV 55&#8243;-65&#8243;</a></li>
	<li id="menu-item-80309" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80309"><a title="Wall Mounting" href="https://pcshop.ge/product-category/tv-accessories/wall-mounting/">Wall Mounting</a></li>
</ul>
</li>
<li id="menu-item-23629" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23629 dropdown"><a title="Connectivity" href="https://pcshop.ge/product-category/connectivity/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Connectivity</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23605" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23605"><a title="USB Hub" href="https://pcshop.ge/product-category/connectivity/usb-hub/">USB Hub</a></li>
	<li id="menu-item-23606" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23606"><a title="Hub Switch" href="https://pcshop.ge/product-category/connectivity/hub-switch/">Hub Switch</a></li>
	<li id="menu-item-23607" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23607"><a title="Wireless Devices" href="https://pcshop.ge/product-category/connectivity/wireless-devices/">Wireless Devices</a></li>
	<li id="menu-item-23608" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23608"><a title="Wireless Adapters" href="https://pcshop.ge/product-category/connectivity/wireless-adapters/">Wireless Adapters</a></li>
	<li id="menu-item-23609" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23609"><a title="Wireless Antennas" href="https://pcshop.ge/product-category/connectivity/wireless-antennas/">Wireless Antennas</a></li>
	<li id="menu-item-23610" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23610"><a title="Router" href="https://pcshop.ge/product-category/connectivity/router/">Router</a></li>
	<li id="menu-item-23611" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23611"><a title="Bluetooth" href="https://pcshop.ge/product-category/connectivity/bluetooth/">Bluetooth</a></li>
	<li id="menu-item-23612" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23612"><a title="Phone" href="https://pcshop.ge/product-category/connectivity/phone/">Phone</a></li>
	<li id="menu-item-23614" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23614"><a title="USB Adapters" href="https://pcshop.ge/product-category/connectivity/usb-adapters/">USB Adapters</a></li>
	<li id="menu-item-23615" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23615"><a title="USB Cable" href="https://pcshop.ge/product-category/connectivity/usb-cable/">USB Cable</a></li>
	<li id="menu-item-23617" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23617"><a title="Audio Video Cable" href="https://pcshop.ge/product-category/connectivity/audio-video-cable/">Audio Video Cable</a></li>
	<li id="menu-item-23618" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23618"><a title="VGA &amp; DVI Cable" href="https://pcshop.ge/product-category/connectivity/vga-dvi-cable/">VGA &#038; DVI Cable</a></li>
	<li id="menu-item-23619" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23619"><a title="HDMI Cable" href="https://pcshop.ge/product-category/connectivity/hdmi-cable/">HDMI Cable</a></li>
	<li id="menu-item-23620" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23620"><a title="IEEE1394 (i-Link)" href="https://pcshop.ge/product-category/connectivity/ieee1394-i-link/">IEEE1394 (i-Link)</a></li>
	<li id="menu-item-23621" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23621"><a title="VGA &amp; HDMI Splitters" href="https://pcshop.ge/product-category/connectivity/vga-hdmi-splitters/">VGA &#038; HDMI Splitters</a></li>
	<li id="menu-item-23622" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23622"><a title="Other Cable" href="https://pcshop.ge/product-category/connectivity/other-cable/">Other Cable</a></li>
	<li id="menu-item-23623" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23623"><a title="Patch Cable" href="https://pcshop.ge/product-category/connectivity/patch-cable/">Patch Cable</a></li>
	<li id="menu-item-23624" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23624"><a title="LAN Cable" href="https://pcshop.ge/product-category/connectivity/lan-cable/">LAN Cable</a></li>
	<li id="menu-item-23625" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23625"><a title="LAN Connector &amp; Outlet" href="https://pcshop.ge/product-category/connectivity/lan-connector-outlet/">LAN Connector &#038; Outlet</a></li>
	<li id="menu-item-23626" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23626"><a title="Racks" href="https://pcshop.ge/product-category/connectivity/racks/">Racks</a></li>
	<li id="menu-item-23627" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23627"><a title="Tools" href="https://pcshop.ge/product-category/connectivity/tools/">Tools</a></li>
	<li id="menu-item-23628" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23628"><a title="Connection Other" href="https://pcshop.ge/product-category/connectivity/connection-other/">Connection Other</a></li>
</ul>
</li>
<li id="menu-item-23630" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23630 dropdown"><a title="Periphery" href="https://pcshop.ge/product-category/periphery/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Periphery</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23631" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23631"><a title="Ink Printers" href="https://pcshop.ge/product-category/periphery/ink-printers/">Ink Printers</a></li>
	<li id="menu-item-23632" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23632"><a title="Ink Multifunction" href="https://pcshop.ge/product-category/periphery/ink-multifunction/">Ink Multifunction</a></li>
	<li id="menu-item-23633" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23633"><a title="Photo Printer" href="https://pcshop.ge/product-category/periphery/photo-printer/">Photo Printer</a></li>
	<li id="menu-item-23634" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23634"><a title="Laser Printer" href="https://pcshop.ge/product-category/periphery/laser-printer/">Laser Printer</a></li>
	<li id="menu-item-23635" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23635"><a title="Laser Multifunction" href="https://pcshop.ge/product-category/periphery/laser-multifunction/">Laser Multifunction</a></li>
	<li id="menu-item-23636" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23636"><a title="Color Laser Printer" href="https://pcshop.ge/product-category/periphery/color-laser-printer/">Color Laser Printer</a></li>
	<li id="menu-item-23637" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23637"><a title="Color Laser Multifunction" href="https://pcshop.ge/product-category/periphery/color-laser-multifunction/">Color Laser Multifunction</a></li>
	<li id="menu-item-23638" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23638"><a title="Scanner" href="https://pcshop.ge/product-category/periphery/scanner/">Scanner</a></li>
</ul>
</li>
<li id="menu-item-23639" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23639 dropdown"><a title="Power Products" href="https://pcshop.ge/product-category/power-products/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Power Products</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23644" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23644"><a title="Power Cables" href="https://pcshop.ge/product-category/power-products/power-cables/">Power Cables</a></li>
	<li id="menu-item-23642" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23642"><a title="Surge Protection" href="https://pcshop.ge/product-category/power-products/surge-protection/">Surge Protection</a></li>
	<li id="menu-item-23640" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23640"><a title="UPS" href="https://pcshop.ge/product-category/power-products/ups/">UPS</a></li>
	<li id="menu-item-23641" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23641"><a title="Invertor" href="https://pcshop.ge/product-category/power-products/invertor/">Invertor</a></li>
	<li id="menu-item-23643" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23643"><a title="Battery and Chargers" href="https://pcshop.ge/product-category/power-products/battery-and-chargers/">Battery and Chargers</a></li>
	<li id="menu-item-23645" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23645"><a title="Other Power Option" href="https://pcshop.ge/product-category/power-products/other-power-option/">Other Power Option</a></li>
</ul>
</li>
<li id="menu-item-23646" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23646 dropdown"><a title="Accessories" href="https://pcshop.ge/product-category/accessories/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Accessories</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23647" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23647"><a title="Keyboard" href="https://pcshop.ge/product-category/accessories/keyboard/">Keyboard</a></li>
	<li id="menu-item-23648" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23648"><a title="Mouse" href="https://pcshop.ge/product-category/accessories/mouse/">Mouse</a></li>
	<li id="menu-item-23649" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23649"><a title="Speaker" href="https://pcshop.ge/product-category/accessories/speaker/">Speaker</a></li>
	<li id="menu-item-23650" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23650"><a title="Headphone" href="https://pcshop.ge/product-category/accessories/headphone/">Headphone</a></li>
	<li id="menu-item-23651" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23651"><a title="Microphone" href="https://pcshop.ge/product-category/accessories/microphone/">Microphone</a></li>
	<li id="menu-item-23652" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23652"><a title="Joystick" href="https://pcshop.ge/product-category/accessories/joystick/">Joystick</a></li>
	<li id="menu-item-23653" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23653"><a title="Wheel" href="https://pcshop.ge/product-category/accessories/wheel/">Wheel</a></li>
	<li id="menu-item-23654" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23654"><a title="Web Camera" href="https://pcshop.ge/product-category/accessories/web-camera/">Web Camera</a></li>
	<li id="menu-item-23655" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23655"><a title="USB Flash Drive" href="https://pcshop.ge/product-category/accessories/usb-flash-drive/">USB Flash Drive</a></li>
	<li id="menu-item-23656" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23656"><a title="Flash Card" href="https://pcshop.ge/product-category/accessories/flash-card/">Flash Card</a></li>
	<li id="menu-item-23657" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23657"><a title="Card Reader" href="https://pcshop.ge/product-category/accessories/card-reader/">Card Reader</a></li>
	<li id="menu-item-23658" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23658"><a title="External HDD" href="https://pcshop.ge/product-category/accessories/external-hdd/">External HDD</a></li>
	<li id="menu-item-23659" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23659"><a title="External Optical Drive" href="https://pcshop.ge/product-category/accessories/external-optical-drive/">External Optical Drive</a></li>
	<li id="menu-item-23660" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23660"><a title="Presenter" href="https://pcshop.ge/product-category/accessories/presenter/">Presenter</a></li>
	<li id="menu-item-23661" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23661"><a title="Other Accessories" href="https://pcshop.ge/product-category/accessories/other-accessories/">Other Accessories</a></li>
</ul>
</li>
<li id="menu-item-23662" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23662 dropdown"><a title="Consumables" href="https://pcshop.ge/product-category/consumables/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Consumables</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23663" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23663"><a title="Cartridge HP LJ" href="https://pcshop.ge/product-category/consumables/cartridge-hp-lj/">Cartridge HP LJ</a></li>
	<li id="menu-item-23664" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23664"><a title="Cartridge HP Ink" href="https://pcshop.ge/product-category/consumables/cartridge-hp-ink/">Cartridge HP Ink</a></li>
	<li id="menu-item-23665" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23665"><a title="Cartridge Canon Laser" href="https://pcshop.ge/product-category/consumables/cartridge-canon-laser/">Cartridge Canon Laser</a></li>
	<li id="menu-item-23666" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23666"><a title="Cartridge Canon Ink" href="https://pcshop.ge/product-category/consumables/cartridge-canon-ink/">Cartridge Canon Ink</a></li>
	<li id="menu-item-23667" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23667"><a title="Cartridge Epson" href="https://pcshop.ge/product-category/consumables/cartridge-epson/">Cartridge Epson</a></li>
	<li id="menu-item-23668" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23668"><a title="Cartridge Panasonic" href="https://pcshop.ge/product-category/consumables/cartridge-panasonic/">Cartridge Panasonic</a></li>
	<li id="menu-item-23669" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23669"><a title="Cartridge ITD" href="https://pcshop.ge/product-category/consumables/cartridge-itd/">Cartridge ITD</a></li>
	<li id="menu-item-23670" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23670"><a title="Optical Disk" href="https://pcshop.ge/product-category/consumables/optical-disk/">Optical Disk</a></li>
	<li id="menu-item-23671" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23671"><a title="Paper" href="https://pcshop.ge/product-category/consumables/paper/">Paper</a></li>
	<li id="menu-item-23672" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23672"><a title="Cleaners" href="https://pcshop.ge/product-category/consumables/cleaners/">Cleaners</a></li>
</ul>
</li>
<li id="menu-item-23673" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23673 dropdown"><a title="Electronics" href="https://pcshop.ge/product-category/electronics/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Electronics</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23678" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23678"><a title="Car Electronics" href="https://pcshop.ge/product-category/electronics/car-electronics/">Car Electronics</a></li>
	<li id="menu-item-23679" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23679"><a title="Drone" href="https://pcshop.ge/product-category/electronics/drone/">Drone</a></li>
	<li id="menu-item-23680" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23680"><a title="Gaming Hardware" href="https://pcshop.ge/product-category/electronics/gaming-hardware/">Gaming Hardware</a></li>
	<li id="menu-item-23681" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23681"><a title="Digital Photo Camera" href="https://pcshop.ge/product-category/electronics/digital-photo-camera/">Digital Photo Camera</a></li>
	<li id="menu-item-23682" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23682"><a title="CamCorder" href="https://pcshop.ge/product-category/electronics/camcorder/">CamCorder</a></li>
	<li id="menu-item-23683" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23683"><a title="Camera Case" href="https://pcshop.ge/product-category/electronics/camera-case/">Camera Case</a></li>
	<li id="menu-item-23684" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23684"><a title="Other Electronics Option" href="https://pcshop.ge/product-category/electronics/other-electronics-option/">Other Electronics Option</a></li>
</ul>
</li>
<li id="menu-item-23685" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-23685 dropdown"><a title="Software" href="https://pcshop.ge/product-category/software/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Software</a>
<ul role="menu" class=" dropdown-menu">
	<li id="menu-item-23686" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23686"><a title="Software MicroSoft" href="https://pcshop.ge/product-category/software/software-microsoft/">Software MicroSoft</a></li>
	<li id="menu-item-23687" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-23687"><a title="Software Kaspersky" href="https://pcshop.ge/product-category/software/software-kaspersky/">Software Kaspersky</a></li>
	<li id="menu-item-80312" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80312"><a title="Symantec Software" href="https://pcshop.ge/product-category/software/symantec-software/">Symantec Software</a></li>
	<li id="menu-item-80313" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80313"><a title="Software ESET" href="https://pcshop.ge/product-category/software/software-eset/">Software ESET</a></li>
	<li id="menu-item-80314" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80314"><a title="Adobe" href="https://pcshop.ge/product-category/software/adobe/">Adobe</a></li>
	<li id="menu-item-80315" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-80315"><a title="Other" href="https://pcshop.ge/product-category/software/other/">Other</a></li>
</ul>
</li>
</ul>            </div>
        </div>
                    <div class="header-logo">
                <a href="http://127.0.0.1:8000/" class="header-logo-link">
                    <img src="//pcshop.ge/wp-content/uploads/2019/04/mmmbbb.png" alt="PCShop.ge" class="img-header-logo" width="115" height="34" />
                </a>
            </div>
                    <div class="handheld-header-links">
            <ul class="columns-3">
                                    <li class="search">
                        <a href="">Search</a>			<div class="site-search">
				<div class="widget woocommerce widget_product_search"><form role="search" method="get" class="woocommerce-product-search" action="https://pcshop.ge/">
	<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
	<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
	<button type="submit" value="Search">Search</button>
	<input type="hidden" name="post_type" value="product" />
</form>
</div>			</div>
		                    </li>
                                    <li class="my-account">
                        <a href="http://127.0.0.1:8000/my-account"><i class="ec ec-user"></i></a>                    </li>
                                    <li class="cart">
                        			<a class="footer-cart-contents" href="https://pcshop.ge/cart/" title="View your shopping cart">
				<i class="ec ec-shopping-bag"></i>
				<span class="cart-items-count count">0</span>
			</a>
			                    </li>
                            </ul>
        </div>
                        </div>
            </div>
            
    </header><!-- #masthead -->

    
    
    <div id="content" class="site-content" tabindex="-1">
        <div class="container">
        <nav class="woocommerce-breadcrumb"><a href="https://pcshop.ge">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>My Account</nav><div class="site-content-inner">
<div id="primary" class="content-area">
	<main id="main" class="site-main">

	
<article id="post-3854" class="post-3854 page type-page status-publish hentry">

			<div class="entry-content">
			<div class="woocommerce">		<div class="customer-login-form">
		<span class="or-text">or</span><div class="woocommerce-notices-wrapper"></div>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">


		<h2>Login</h2>

		<form class="woocommerce-form woocommerce-form-login login" method="post">

					<p class="before-login-text">
			Welcome back! Sign in to your account.		</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Username or email address&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="" />			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Password&nbsp;<span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
			</p>

			
			<p class="form-row">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
				</label>
				<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="d198e09ae0" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="https://pcshop.ge/my-account/lost-password/">Lost your password?</a>
			</p>

			
		</form>


	</div>

	<div class="u-column2 col-2">

		<h2>Register</h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register"  >

			<p class="before-register-text">
			Create new account today to reap the benefits of a personalized shopping experience.		</p>
			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="" />			</p>

			
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password">Password&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			
			<div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="https://pcshop.ge/privacy-policy/" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
</div>
			<p class="woocommerce-form-row form-row">
				<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="5e76c1fa28" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />				<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Register">Register</button>
			</p>

			<div class="register-benefits">
			<h3>Sign up today and you will be able to :</h3>			<ul>
								<li>Speed your way through checkout</li>
								<li>Track your orders easily</li>
								<li>Keep a record of all your purchases</li>
							</ul>
		</div>
		</form>

	</div>

</div>

		</div><!-- /.customer-login-form -->
		</div>
		</div><!-- .entry-content -->
			
</article><!-- #post-## -->

	</main><!-- #main -->
</div><!-- #primary -->

			</div>		</div><!-- .col-full -->
	</div><!-- #content -->

	
	
	<footer id="colophon" class="site-footer footer-v2">

		<div class="desktop-footer container">
                        <div class="footer-newsletter">
                <div class="container">
                    <div class="footer-newsletter-inner">
                        <div class="newsletter-content">

                            <h5 class="newsletter-title">Sign up to Newsletter</h5>

                            
                            <span class="newsletter-marketing-text">...and be the first to receive <strong>Special Offers</strong></span>

                            
                        </div>
                        <div class="newsletter-form">

                            <script>(function() {
	window.mc4wp = window.mc4wp || {
		listeners: [],
		forms: {
			on: function(evt, cb) {
				window.mc4wp.listeners.push(
					{
						event   : evt,
						callback: cb
					}
				);
			}
		}
	}
})();
</script><!-- Mailchimp for WordPress v4.8.1 - https://wordpress.org/plugins/mailchimp-for-wp/ --><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-23835" method="post" data-id="23835" data-name="mailchimpform" ><div class="mc4wp-form-fields"><div class="input-group">
	<input type="email" name="EMAIL" class="form-control" placeholder="Enter your email address" autocomplete="off" required>
	<span class="input-group-btn">
		<button class="btn btn-secondary" type="submit">Sign Up</button>
	</span>
</div></div><label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp" value="1606648936" /><input type="hidden" name="_mc4wp_form_id" value="23835" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" /><div class="mc4wp-response"></div></form><!-- / Mailchimp for WordPress Plugin -->
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="footer-bottom-widgets">
            <div class="container">
                <div class="footer-bottom-widgets-inner">
                                            <div class="footer-contact">
                            			<div class="footer-logo">
				<img src="//pcshop.ge/wp-content/uploads/2019/04/try.png" alt="PCShop.ge" width="168" height="34" />
			</div>
			
			<div class="footer-call-us">
				<div class="media">
					<span class="media-left call-us-icon media-middle"><i class="ec ec-support"></i></span>
					<div class="media-body">
						<span class="call-us-text">Got Questions ? Call Us</span>
						<span class="call-us-number"> (+995) 322 05 20 75</span>
					</div>
				</div>
			</div>

		
			<div class="footer-address">
				<strong class="footer-address-title">Address</strong>
				<address>16a Vazha-Pshavela Avenue, Tbilisi 0160<br />
2 Marjanishvili Street, Tbilisi 0102</address>
			</div>

					<div class="footer-social-icons">
				<ul class="social-icons list-unstyled">
					<li><a class="fab fa-facebook" target="_blank" href="https://www.facebook.com/PCShopOfficial/"></a></li><li><a class="fab fa-linkedin" target="_blank" href="https://www.linkedin.com/company/pcshop-ge/about/"></a></li><li><a class="fab fa-youtube" target="_blank" href="https://www.youtube.com/channel/UC6wtqAskyJFoBCQ2J1a4zqQ"></a></li>				</ul>
			</div>
			                        </div>
                                                                <div class="footer-bottom-widgets-menu">
                            <div class="footer-bottom-widgets-menu-inner columns-3">
                                <div class="columns"><aside id="nav_menu-2" class="widget clearfix widget_nav_menu"><div class="body"><h4 class="widget-title">Popular Categories</h4><div class="menu-footer-menu-2-container"><ul id="menu-footer-menu-2" class="menu"><li id="menu-item-41992" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41992"><a href="https://pcshop.ge/product-category/notebooks/">Notebooks</a></li>
<li id="menu-item-41994" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41994"><a href="https://pcshop.ge/product-category/electronics/">Electronics</a></li>
<li id="menu-item-41996" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41996"><a href="https://pcshop.ge/product-category/computers/">Computers</a></li>
<li id="menu-item-41995" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41995"><a href="https://pcshop.ge/product-category/monitors/">Monitors</a></li>
<li id="menu-item-63123" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-63123"><a href="https://pcshop.ge/product-category/smartphones-tablets/e-book-readers/">E-Book Readers</a></li>
</ul></div></div></aside></div><div class="columns"><aside id="nav_menu-1" class="widget clearfix widget_nav_menu"><div class="body"><h4 class="widget-title">PC Components</h4><div class="menu-footer-menu-1-container"><ul id="menu-footer-menu-1" class="menu"><li id="menu-item-41997" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41997"><a href="https://pcshop.ge/product-category/pc-hardware/cpu/">CPU</a></li>
<li id="menu-item-42000" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-42000"><a href="https://pcshop.ge/product-category/pc-hardware/motherboard/">Motherboard</a></li>
<li id="menu-item-41998" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41998"><a href="https://pcshop.ge/product-category/pc-hardware/graphics-adapter/">Graphics Adapter</a></li>
<li id="menu-item-42002" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-42002"><a href="https://pcshop.ge/product-category/pc-hardware/ram/">RAM</a></li>
<li id="menu-item-42001" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-42001"><a href="https://pcshop.ge/product-category/pc-hardware/ssd/">SSD</a></li>
</ul></div></div></aside></div><div class="columns"><aside id="nav_menu-3" class="widget clearfix widget_nav_menu"><div class="body"><h4 class="widget-title">Help</h4><div class="menu-footer-menu-3-container"><ul id="menu-footer-menu-3" class="menu"><li id="menu-item-23831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23831"><a href="https://pcshop.ge/terms-and-conditions/">Terms and Conditions</a></li>
<li id="menu-item-23830" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-23830"><a href="https://pcshop.ge/privacy-policy/">Privacy Policy</a></li>
<li id="menu-item-41991" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41991"><a href="https://pcshop.ge/contact/">Contact Us</a></li>
</ul></div></div></aside></div>                            </div>
                        </div>
                                    </div>
            </div>
        </div>
        <div class="copyright-bar">
            <div class="container">
                <div class="copyright">&copy; <a href="#top">PCShop.ge</a> - All Rights Reserved</div>
                <div class="payment">		<div class="footer-payment-logo">
			<ul class="cash-card card-inline">
												<li class="card-item"><img src="//pcshop.ge/wp-content/uploads/2019/04/patment-ico3231n.png" alt="" width="324" height="38"></li>
							</ul>
		</div><!-- /.payment-methods -->
		</div>
            </div>
        </div></div>
        <div class="handheld-footer v1 "><div class="handheld-widget-menu">
        <div class="columns"><aside id="nav_menu-4" class="widget widget_nav_menu"><div class="body"><h4 class="widget-title">Popular Categories</h4><div class="menu-footer-menu-2-container"><ul id="menu-footer-menu-4" class="menu"><li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41992"><a href="https://pcshop.ge/product-category/notebooks/">Notebooks</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41994"><a href="https://pcshop.ge/product-category/electronics/">Electronics</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41996"><a href="https://pcshop.ge/product-category/computers/">Computers</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-41995"><a href="https://pcshop.ge/product-category/monitors/">Monitors</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-63123"><a href="https://pcshop.ge/product-category/smartphones-tablets/e-book-readers/">E-Book Readers</a></li>
</ul></div></div></aside></div><div class="columns"><aside id="nav_menu-6" class="widget widget_nav_menu"><div class="body"><h4 class="widget-title">Help</h4><div class="menu-footer-menu-3-container"><ul id="menu-footer-menu-5" class="menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23831"><a href="https://pcshop.ge/terms-and-conditions/">Terms and Conditions</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-23830"><a href="https://pcshop.ge/privacy-policy/">Privacy Policy</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41991"><a href="https://pcshop.ge/contact/">Contact Us</a></li>
</ul></div></div></aside></div></div>
                    <div class="footer-social-icons">
                <ul class="social-icons-color">
                    <li><a class="fab fa-facebook" target="_blank" href="https://www.facebook.com/PCShopOfficial/"></a></li><li><a class="fab fa-linkedin-square" target="_blank" href="https://www.linkedin.com/company/pcshop-ge/about/"></a></li><li><a class="fab fa-youtube" target="_blank" href="https://www.youtube.com/channel/UC6wtqAskyJFoBCQ2J1a4zqQ"></a></li>                </ul>
            </div>
                    <div class="handheld-footer-bar">
            <div class="handheld-footer-bar-inner">
                    <div class="footer-logo">
                <img src="//pcshop.ge/wp-content/uploads/2019/04/ratooh.png" alt="PCShop.ge" width="220" height="69" />
            </div>
            
            <div class="footer-call-us">
                <span class="call-us-text">Got Questions ? Call Us</span>
                <span class="call-us-number"> (+995) 322 05 20 75</span>
            </div>

                    </div>
        </div>
        </div>
        
	</footer><!-- #colophon -->

	
	
</div><!-- #page -->
</div>

            <div class="electro-overlay"></div>
        
<script>(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();</script><script type="application/ld+json">{"@context":"http:\/\/schema.org\/","@type":"WebPage","url":"https:\/\/pcshop.ge\/my-account\/","name":"My Account","description":""}</script><!--Enhanced Ecommerce Google Analytics Plugin for Woocommerce by Tatvic Plugin Version:2.3.6.1-->			<!-- Facebook Pixel Code -->
			<noscript>
				<img
					height="1"
					width="1"
					style="display:none"
					alt="fbpx"
					src="https://www.facebook.com/tr?id=344549603018226&ev=PageView&noscript=1"
				/>
			</noscript>
			<!-- End Facebook Pixel Code -->
			<a href="tel:+995322052075" id="rum_sst_tab" class="rum_sst_contents rum_sst_right">☏ Contact Us</a>	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})()
	</script>
	<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0' id='jquery-selectBox-js'></script>
<script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
/* <![CDATA[ */
var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/pcshop.ge\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","time_to_close_prettyphoto":"3000","fragments_index_glue":".","reload_on_found_variation":"1","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"}};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=3.0.16' id='jquery-yith-wcwl-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/pcshop.ge\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.3' id='contact-form-7-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.6' id='selectWoo-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="//pcshop.ge/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="//pcshop.ge/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="//pcshop.ge/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="//pcshop.ge/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="//pcshop.ge/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="//pcshop.ge/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );
</script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/dist/i18n.min.js?ver=bb7c3c45d012206bfcd73d6a31f84d9e' id='wp-i18n-js'></script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
/* <![CDATA[ */
var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
/* ]]> */
</script>
<script type='text/javascript' id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' src='https://pcshop.ge/wp-admin/js/password-strength-meter.min.js?ver=5.5.3' id='password-strength-meter-js'></script>
<script type='text/javascript' id='wc-password-strength-meter-js-extra'>
/* <![CDATA[ */
var wc_password_strength_meter_params = {"min_password_strength":"3","stop_checkout":"","i18n_password_error":"Please enter a stronger password.","i18n_password_hint":"Hint: The password should be at least twelve characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? $ % ^ & )."};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=4.7.1' id='wc-password-strength-meter-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.7.1' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_3ac2c3f71f9c98fe4ef9701736329d5a","fragment_name":"wc_fragments_3ac2c3f71f9c98fe4ef9701736329d5a","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.7.1' id='wc-cart-fragments-js'></script>
<script type='text/javascript' id='yith-woocompare-main-js-extra'>
/* <![CDATA[ */
var yith_woocompare = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","actionreload":"yith-woocompare-reload-product","added_label":"Added","table_title":"Product Comparison","auto_open":"yes","loader":"https:\/\/pcshop.ge\/wp-content\/plugins\/yith-woocommerce-compare\/assets\/images\/loader.gif","button_text":"Compare","cookie_name":"yith_woocompare_list","close_label":"Close"};
/* ]]> */
</script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/yith-woocommerce-compare/assets/js/woocompare.min.js?ver=2.4.2' id='yith-woocompare-main-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/yith-woocommerce-compare/assets/js/jquery.colorbox-min.js?ver=1.4.21' id='jquery-colorbox-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6' id='prettyPhoto-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/tether.min.js?ver=2.7.0' id='tether-js-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/bootstrap.min.js?ver=2.7.0' id='bootstrap-js-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/jquery.waypoints.min.js?ver=2.7.0' id='waypoints-js-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/typeahead.bundle.min.js?ver=2.7.0' id='typeahead-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/handlebars.min.js?ver=2.7.0' id='handlebars-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/bootstrap-hover-dropdown.min.js?ver=2.7.0' id='bootstrap-hover-dropdown-js-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js?ver=2.7.0' id='jquery-mCustomScrollbar-js-js'></script>
{{-- <script type='text/javascript' id='electro-js-js-extra'>
// /* <![CDATA[ */
// var electro_options = {"rtl":"0","ajax_url":"https:\/\/pcshop.ge\/wp-admin\/admin-ajax.php","ajax_loader_url":"https:\/\/pcshop.ge\/wp-content\/themes\/electro\/assets\/images\/ajax-loader.gif","enable_sticky_header":"","enable_hh_sticky_header":"","enable_live_search":"1","live_search_limit":"10","live_search_template":"<a href=\"{{url}}\" class=\"media live-search-media\"><img src=\"{{image}}\" class=\"media-left media-object flip pull-left\" height=\"60\" width=\"60\"><div class=\"media-body\"><p>{{{value}}}<\/p><\/div><\/a>","live_search_empty_msg":"Unable to find any products that match the current query","deal_countdown_text":{"days_text":"Days","hours_text":"Hours","mins_text":"Mins","secs_text":"Secs"},"typeahead_options":{"hint":false,"highlight":true},"offcanvas_mcs_options":{"axis":"y","theme":"minimal-dark","contentTouchScroll":100,"scrollInertia":1500},"compare_page_url":"https:\/\/pcshop.ge\/compare\/"};
// /* ]]> */
</script> --}}
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/electro.min.js?ver=2.7.0' id='electro-js-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/owl.carousel.min.js?ver=2.7.0' id='owl-carousel-js-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/themes/electro/assets/js/pace.min.js?ver=2.7.0' id='pace-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/woocommerce/assets/js/jquery-tiptip/jquery.tipTip.min.js?ver=4.7.1' id='jquery-tiptip-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-includes/js/wp-embed.min.js?ver=5.5.3' id='wp-embed-js'></script>
<script type='text/javascript' src='//pcshop.ge/wp-content/plugins/mailchimp-for-wp/assets/js/forms.min.js?ver=4.8.1' id='mc4wp-forms-api-js'></script>
<!-- WooCommerce JavaScript -->
<script type="text/javascript">
jQuery(function($) { 
tvc_lc="GEL";

homepage_json_ATC_link=[];

tvc_fp=[];

tvc_rcp=[];

tvc_rdp=[];

prodpage_json_ATC_link=[];

tvc_pgc=[];

catpage_json_ATC_link=[];

tvc_smd={"tvc_wcv":"4.7.1","tvc_wpv":"5.5.3","tvc_eev":"2.3.6.1","tvc_cnf":{"t_ee":"on","t_df":false,"t_gUser":true,"t_UAen":"on","t_thr":"6","t_IPA":false,"t_OptOut":false,"t_PrivacyPolicy":true}};
 });
</script>
<script type='text/javascript'>
document.tidioChatCode = "jlobj0qofbndy4fme6sur7lbcfjwac6b";
(function() {
  function asyncLoad() {
    var tidioScript = document.createElement("script");
    tidioScript.type = "text/javascript";
    tidioScript.async = true;
    tidioScript.src = "//code.tidio.co/jlobj0qofbndy4fme6sur7lbcfjwac6b.js";
    document.body.appendChild(tidioScript);
  }
  if (window.attachEvent) {
    window.attachEvent("onload", asyncLoad);
  } else {
    window.addEventListener("load", asyncLoad, false);
  }
})();
</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"a9f623b65c","applicationID":"407411982","transactionName":"MlxUbRdWWhZXUhJcDgsWd1oRXlsLGUEHUgQ=","queueTime":0,"applicationTime":707,"atts":"HhtXG19MSRg=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
"ace"in window||(window.ace={}),ace.config={cookie_expiry:604800,cookie_path:"",storage_method:2},"vars"in window.ace||(window.ace.vars={}),ace.vars.very_old_ie=!("querySelector"in document.documentElement),ace.settings={is:function(e,a){return 1==ace.data.get("settings",e+"-"+a)},exists:function(e,a){return null!==ace.data.get("settings",e+"-"+a)},set:function(e,a){ace.data.set("settings",e+"-"+a,1)},unset:function(e,a){ace.data.set("settings",e+"-"+a,-1)},remove:function(e,a){ace.data.remove("settings",e+"-"+a)},navbar_fixed:function(e,a,t,n){if(ace.vars.very_old_ie)return!1;var e=e||"#navbar";if("string"==typeof e&&(e=document.querySelector(e)),!e)return!1;if(a=a||!1,t=t&&!0,!a&&n!==!1){var s=null;(ace.settings.is("sidebar","fixed")||(s=document.getElementById("sidebar"))&&ace.hasClass(s,"sidebar-fixed"))&&ace.settings.sidebar_fixed(s,!1,t)}a?(ace.hasClass(e,"navbar-fixed-top")||ace.addClass(e,"navbar-fixed-top"),t!==!1&&ace.settings.set("navbar","fixed")):(ace.removeClass(e,"navbar-fixed-top"),t!==!1&&ace.settings.unset("navbar","fixed"));try{document.getElementById("ace-settings-navbar").checked=a}catch(i){}window.jQuery&&jQuery(document).trigger("settings.ace",["navbar_fixed",a,e])},sidebar_fixed:function(e,a,t,n){if(ace.vars.very_old_ie)return!1;var e=e||"#sidebar";if("string"==typeof e&&(e=document.querySelector(e)),!e)return!1;if(a=a||!1,t=t&&!0,!a&&n!==!1){var s=null;(ace.settings.is("breadcrumbs","fixed")||(s=document.getElementById("breadcrumbs"))&&ace.hasClass(s,"breadcrumbs-fixed"))&&ace.settings.breadcrumbs_fixed(s,!1,t)}if(a&&n!==!1&&!ace.settings.is("navbar","fixed")&&ace.settings.navbar_fixed(null,!0,t),a){if(!ace.hasClass(e,"sidebar-fixed")){ace.addClass(e,"sidebar-fixed");var i=document.getElementById("menu-toggler");i&&ace.addClass(i,"fixed")}t!==!1&&ace.settings.set("sidebar","fixed")}else{ace.removeClass(e,"sidebar-fixed");var i=document.getElementById("menu-toggler");i&&ace.removeClass(i,"fixed"),t!==!1&&ace.settings.unset("sidebar","fixed")}try{document.getElementById("ace-settings-sidebar").checked=a}catch(r){}window.jQuery&&jQuery(document).trigger("settings.ace",["sidebar_fixed",a,e])},breadcrumbs_fixed:function(e,a,t,n){if(ace.vars.very_old_ie)return!1;var e=e||"#breadcrumbs";if("string"==typeof e&&(e=document.querySelector(e)),!e)return!1;a=a||!1,t=t&&!0,a&&n!==!1&&!ace.settings.is("sidebar","fixed")&&ace.settings.sidebar_fixed(null,!0,t),a?(ace.hasClass(e,"breadcrumbs-fixed")||ace.addClass(e,"breadcrumbs-fixed"),t!==!1&&ace.settings.set("breadcrumbs","fixed")):(ace.removeClass(e,"breadcrumbs-fixed"),t!==!1&&ace.settings.unset("breadcrumbs","fixed"));try{document.getElementById("ace-settings-breadcrumbs").checked=a}catch(s){}window.jQuery&&jQuery(document).trigger("settings.ace",["breadcrumbs_fixed",a,e])},main_container_fixed:function(e,a,t){if(ace.vars.very_old_ie)return!1;a=a||!1,t=t&&!0;var e=e||"#main-container";if("string"==typeof e&&(e=document.querySelector(e)),!e)return!1;var n=document.getElementById("navbar-container");a?(ace.hasClass(e,"container")||ace.addClass(e,"container"),n&&!ace.hasClass(n,"container")&&ace.addClass(n,"container"),t!==!1&&ace.settings.set("main-container","fixed")):(ace.removeClass(e,"container"),n&&ace.removeClass(n,"container"),t!==!1&&ace.settings.unset("main-container","fixed"));try{document.getElementById("ace-settings-add-container").checked=a}catch(s){}if(navigator.userAgent.match(/webkit/i)){var i=document.getElementById("sidebar");ace.toggleClass(i,"menu-min"),setTimeout(function(){ace.toggleClass(i,"menu-min")},0)}window.jQuery&&jQuery(document).trigger("settings.ace",["main_container_fixed",a,e])},sidebar_collapsed:function(e,a,t){if(ace.vars.very_old_ie)return!1;var e=e||"#sidebar";if("string"==typeof e&&(e=document.querySelector(e)),!e)return!1;if(a=a||!1,a?(ace.addClass(e,"menu-min"),t!==!1&&ace.settings.set("sidebar","collapsed")):(ace.removeClass(e,"menu-min"),t!==!1&&ace.settings.unset("sidebar","collapsed")),window.jQuery&&jQuery(document).trigger("settings.ace",["sidebar_collapsed",a,e]),!window.jQuery){var n=document.querySelector('.sidebar-collapse[data-target="#'+(e.getAttribute("id")||"")+'"]');if(n||(n=e.querySelector(".sidebar-collapse")),!n)return;var s,i,r=n.querySelector("[data-icon1][data-icon2]");if(!r)return;s=r.getAttribute("data-icon1"),i=r.getAttribute("data-icon2"),a?(ace.removeClass(r,s),ace.addClass(r,i)):(ace.removeClass(r,i),ace.addClass(r,s))}}},ace.settings.check=function(e,a){if(ace.settings.exists(e,a)){var t=ace.settings.is(e,a),n={"navbar-fixed":"navbar-fixed-top","sidebar-fixed":"sidebar-fixed","breadcrumbs-fixed":"breadcrumbs-fixed","sidebar-collapsed":"menu-min","main-container-fixed":"container"},s=document.getElementById(e);t!=ace.hasClass(s,n[e+"-"+a])&&ace.settings[e.replace("-","_")+"_"+a](null,t)}},ace.data_storage=function(e,a){var t="ace_",n=null,s=0;(1==e||e===a)&&"localStorage"in window&&null!==window.localStorage?(n=ace.storage,s=1):null==n&&(2==e||e===a)&&"cookie"in document&&null!==document.cookie&&(n=ace.cookie,s=2),this.set=function(e,a,i,r,c){if(n)if(i===c)i=a,a=e,null==i?n.remove(t+a):1==s?n.set(t+a,i):2==s&&n.set(t+a,i,ace.config.cookie_expiry,r||ace.config.cookie_path);else if(1==s)null==i?n.remove(t+e+"_"+a):n.set(t+e+"_"+a,i);else if(2==s){var o=n.get(t+e),d=o?JSON.parse(o):{};if(null==i){if(delete d[a],0==ace.sizeof(d))return void n.remove(t+e)}else d[a]=i;n.set(t+e,JSON.stringify(d),ace.config.cookie_expiry,r||ace.config.cookie_path)}},this.get=function(e,a,i){if(!n)return null;if(a===i)return a=e,n.get(t+a);if(1==s)return n.get(t+e+"_"+a);if(2==s){var r=n.get(t+e),c=r?JSON.parse(r):{};return a in c?c[a]:null}},this.remove=function(e,a,t){n&&(a===t?(a=e,this.set(a,null)):this.set(e,a,null))}},ace.cookie={get:function(e){var a,t,n=document.cookie,s=e+"=";if(n){if(t=n.indexOf("; "+s),-1==t){if(t=n.indexOf(s),0!=t)return null}else t+=2;return a=n.indexOf(";",t),-1==a&&(a=n.length),decodeURIComponent(n.substring(t+s.length,a))}},set:function(e,a,t,n,s,i){var r=new Date;"object"==typeof t&&t.toGMTString?t=t.toGMTString():parseInt(t,10)?(r.setTime(r.getTime()+1e3*parseInt(t,10)),t=r.toGMTString()):t="",document.cookie=e+"="+encodeURIComponent(a)+(t?"; expires="+t:"")+(n?"; path="+n:"")+(s?"; domain="+s:"")+(i?"; secure":"")},remove:function(e,a){this.set(e,"",-1e3,a)}},ace.storage={get:function(e){return window.localStorage.getItem(e)},set:function(e,a){window.localStorage.setItem(e,a)},remove:function(e){window.localStorage.removeItem(e)}},ace.sizeof=function(e){var a=0;for(var t in e)e.hasOwnProperty(t)&&a++;return a},ace.hasClass=function(e,a){return(" "+e.className+" ").indexOf(" "+a+" ")>-1},ace.addClass=function(e,a){if(!ace.hasClass(e,a)){var t=e.className;e.className=t+(t.length?" ":"")+a}},ace.removeClass=function(e,a){ace.replaceClass(e,a)},ace.replaceClass=function(e,a,t){var n=new RegExp("(^|\\s)"+a+"(\\s|$)","i");e.className=e.className.replace(n,function(e,a,n){return t?a+t+n:" "}).replace(/^\s+|\s+$/g,"")},ace.toggleClass=function(e,a){ace.hasClass(e,a)?ace.removeClass(e,a):ace.addClass(e,a)},ace.isHTTMlElement=function(e){return window.HTMLElement?e instanceof HTMLElement:"nodeType"in e?1==e.nodeType:!1},ace.data=new ace.data_storage(ace.config.storage_method);
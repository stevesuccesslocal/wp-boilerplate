!function($){function a(){i=!1;for(var a=0;a<t.length;a++){var e=$(t[a]).filter(function(){return $(this).is(":appeared")});if(e.trigger("appear",[e]),o){var n=o.not(e);n.trigger("disappear",[n])}o=e}}var t=[],e=!1,i=!1,n={interval:250,force_process:!1},d=$(window),o;$.expr[":"].appeared=function(a){var t=$(a);if(!t.is(":visible"))return!1;var e=d.scrollLeft(),i=d.scrollTop(),n=t.offset(),o=n.left,r=n.top;return r+t.height()>=i&&r-(t.data("appear-top-offset")||0)<=i+d.height()&&o+t.width()>=e&&o-(t.data("appear-left-offset")||0)<=e+d.width()},$.fn.extend({appear:function(d){var o=$.extend({},n,d||{}),r=this.selector||this;if(!e){var s=function(){i||(i=!0,setTimeout(a,o.interval))};$(window).scroll(s).resize(s),e=!0}return o.force_process&&setTimeout(a,o.interval),t.push(r),$(r)}}),$.extend({force_appear:function(){return!!e&&(a(),!0)}})}(jQuery),function($){"$:nomunge";function a(a){function e(){a?o.removeData(a):u&&delete t[u]}function n(){r.id=setTimeout(function(){r.fn()},c)}var d=this,o,r={},s=a?$.fn:$,f=arguments,l=4,u=f[1],c=f[2],p=f[3];if("string"!=typeof u&&(l--,u=a=0,c=f[1],p=f[2]),a?(o=d.eq(0),o.data(a,r=o.data(a)||{})):u&&(r=t[u]||(t[u]={})),r.id&&clearTimeout(r.id),delete r.id,p)r.fn=function(a){"string"==typeof p&&(p=s[p]),!0!==p.apply(d,i.call(f,l))||a?e():n()},n();else{if(r.fn)return void 0===c?e():r.fn(!1===c),!0;e()}}var t={},e="doTimeout",i=Array.prototype.slice;$[e]=function(){return a.apply(window,[0].concat(i.call(arguments)))},$.fn[e]=function(){var t=i.call(arguments),n=a.apply(this,[e+t[0]].concat(t));return"number"==typeof t[0]||"number"==typeof t[1]?this:n}}(jQuery),$(".animatedParent").appear(),$(".animatedClick").click(function(){var a=$(this).attr("data-target");if(void 0!=$(this).attr("data-sequence")){var t=$("."+a+":first").attr("data-id"),e=$("."+a+":last").attr("data-id"),i=t;$("."+a+"[data-id="+i+"]").hasClass("go")?($("."+a+"[data-id="+i+"]").addClass("goAway"),$("."+a+"[data-id="+i+"]").removeClass("go")):($("."+a+"[data-id="+i+"]").addClass("go"),$("."+a+"[data-id="+i+"]").removeClass("goAway")),i++,delay=Number($(this).attr("data-sequence")),$.doTimeout(delay,function(){if(console.log(e),$("."+a+"[data-id="+i+"]").hasClass("go")?($("."+a+"[data-id="+i+"]").addClass("goAway"),$("."+a+"[data-id="+i+"]").removeClass("go")):($("."+a+"[data-id="+i+"]").addClass("go"),$("."+a+"[data-id="+i+"]").removeClass("goAway")),++i<=e)return!0})}else $("."+a).hasClass("go")?($("."+a).addClass("goAway"),$("."+a).removeClass("go")):($("."+a).addClass("go"),$("."+a).removeClass("goAway"))}),$(document.body).on("appear",".animatedParent",function(a,t){var e=$(this).find(".animated"),i=$(this);if(void 0!=i.attr("data-sequence")){var n=$(this).find(".animated:first").attr("data-id"),d=n,o=$(this).find(".animated:last").attr("data-id");$(i).find(".animated[data-id="+d+"]").addClass("go"),d++,delay=Number(i.attr("data-sequence")),$.doTimeout(delay,function(){if($(i).find(".animated[data-id="+d+"]").addClass("go"),++d<=o)return!0})}else e.addClass("go")}),$(document.body).on("disappear",".animatedParent",function(a,t){$(this).hasClass("animateOnce")||$(this).find(".animated").removeClass("go")}),$(window).on("load",function(){$.force_appear()});
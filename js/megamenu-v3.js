var USPS=USPS||{};USPS.Require=USPS.Require||{},document.addEventListener("touch",{passive:!0}),global_elements_jq=$.noConflict(!0),global_elements_jq(document).ready(function(c){for(c(".mobile-hamburger").on("touch click",function(e){e.preventDefault(),c(".search--wrapper-hidden,.mobile-search").removeClass("active"),c(".global--navigation nav,.mobile-hamburger").toggleClass("active")}),c(".mobile-search").on("touch click",function(e){e.preventDefault(),c(".global--navigation nav,.mobile-hamburger").removeClass("active"),c(".search--wrapper-hidden,.mobile-search").toggleClass("active")}),c(window).on("load resize",function(e){c("input").is(":focus")||(c(window).width()<959?(c("nav ul.nav-list li a").off("touch click"),c("nav ul.nav-list li").off("touch click"),c(".g-alert").off("touch click"),c(".g-alert").on("touch click",function(e){e.preventDefault(),c(this).toggleClass("expand")}),c(".g-alert a").on("touch click",function(e){return window.open(c(this).attr("href")),!1}),c(".menuheader").off("mouseenter mouseleave"),c("nav ul.nav-list li, nav ul.nav-list li a").on("touch click",function(e){e.preventDefault(),e.stopPropagation(),c(this).is("a")?(e.preventDefault(),e.stopPropagation(),c(this).parents(".nav-list div.active").length?(c("nav ul.nav-list .active").removeClass("active"),window.location.href=c(this).attr("href")):c(this).parent().hasClass("active")?c(this).parent().hasClass("active")&&(c("nav ul.nav-list .active").removeClass("active"),window.location.href=c(this).attr("href")):(c(".nav-list .active").removeClass("active"),c(this).parents("li.menuheader").addClass("active"),c(this).parent().children("div").addClass("active"),0<c(".menuheader div.active").length?setTimeout(function(){tpOff=c(".menuheader div.active").offset().top-60,c("html, body").animate({scrollTop:tpOff},100)},350):window.location.href=c(this).attr("href"))):c(this).is("li")&&(c(this).hasClass("active")&&c(this).children("div").hasClass("active")?(c(".menuheader.active").removeClass("active"),c(".menuheader div.active").removeClass("active"),c("html, body").animate({scrollTop:0},70)):!c(this).hasClass("active")&&c(this).children("div").hasClass("active")?(c(this).removeClass("active"),c(this).children("div").removeClass("active"),c("html, body").animate({scrollTop:0},70)):c(this).parent().hasClass("nav-list")&&c(this).hasClass("active")?(c(this).removeClass("active"),c(this).children("div").removeClass("active"),c("html, body").delay(10).animate({scrollTop:0},70)):c(this).parent().hasClass("nav-list")&&!c(this).hasClass("active")&&(c("nav ul.nav-list .active").removeClass("active"),c(this).addClass("active"),c(this).children("div").addClass("active"),setTimeout(function(){tpOff=c(".menuheader div.active").offset().top-60,c("html, body").animate({scrollTop:tpOff},100)},350)))})):(c("nav ul.nav-list li a").off("touch click"),c("nav ul.nav-list li").off("touch click"),c("nav ul.nav-list li a").on("touch click"),c("nav ul.nav-list li").on("touch click"),c(".g-alert").off("touch click"),c(".menuheader").hover(function(e){c(".menuheader").removeClass("active"),c(".menuheader .active").removeClass("active"),c(".menuheader").find("div a").attr("tabindex","-1"),c(".menuheader").find("ul").attr("aria-hidden","true")},function(e){c(".menuheader").removeClass("active"),c(".menuheader .active").removeClass("active"),c(".menuheader").find("div a").attr("tabindex","-1"),c(".menuheader").find("ul").attr("aria-hidden","true"),a()})),c("html").hasClass("touch")&&!c(".mobile-header").is(":visible")&&c(".global--navigation li.menuheader>a:not(.hidden-skip)").on("click touch",function(e){c(this).parent().children("div").height()<100&&(e.preventDefault(),c(this).parent().addClass("active"))}))}),c(".nav-list>.menuheader>.menuitem").focus(function(e){c(this).addClass("active")}),c(".nav-list>.menuheader>.menuitem").focusout(function(e){c(this).parents(".menuheader").removeClass("active"),c(this).removeClass("active")}),c("nav .nav-list div a,nav .nav-list div input").focus(function(e){t=c(this).parents(".menuheader").addClass("active"),c(".menuitem",t).addClass("active").attr("aria-expanded","true")}),c(".global--navigation nav li.nav-search .input--wrap input").on("change paste keyup",function(e){0<c(".global--navigation nav li.nav-search .autocorrect li").length?(c(".global--navigation nav li.nav-search.menuheader div.autocorrect").css("height","145px"),c(".global--navigation nav li.nav-search form.search .input--wrap").css("overflow","visible")):(c(".global--navigation nav li.nav-search.menuheader div.autocorrect").css("height","auto"),c(".global--navigation nav li.nav-search form.search .input--wrap").css("overflow","hidden"))}),c(".menuheader *").keydown(function(e){switch($this=c(this).parents(".menuheader"),e.keyCode){case 9:c(".menuheader .focused").removeClass("focused"),c(".menuheader .active").removeClass("active");break;case 13:$this.hasClass("active")||(e.preventDefault(),e.stopPropagation(),$this.find("div a").attr("tabindex","0"),$this.find("ul"),$this.addClass("active"),$this.children(".menuitem")&&$this.children(".menuitem").attr("aria-expanded","true"));break;case 27:$this.find(".active").removeClass("active"),$this.removeClass("active"),$this.find("div a").attr("tabindex","-1"),$this.find("ul").attr("aria-hidden","true"),c(".focused").removeClass("focused");break;case 37:$this.find(".active").removeClass("active"),$this.removeClass("active"),$this.find("div a").attr("tabindex","-1"),$this.find("ul").attr("aria-hidden","true"),c(".focused").removeClass("focused"),$this.prev().find(".menuitem").focus();break;case 38:e.preventDefault(),e.stopPropagation(),$this.find("div a, div input").attr("tabindex","0"),$this.addClass("active"),$this.find("ul").attr("aria-hidden","false"),$this.children(".menuitem")&&$this.children(".menuitem").attr("aria-expanded","true"),0<c(".menuheader.active div .focused").length?($cur=c(".menuheader.active div .focused"),tub=$cur.closest("div:not(.desktop-only)").find("a, input"),it=tub.index($cur),$cur.closest("div").find("a, input").removeClass("focused"),0==it||it<0?($this.removeClass("active"),$this.find("div a, div input").attr("tabindex","-1"),$this.find("ul").attr("aria-hidden","true"),c(".focused").removeClass("focused"),$this.find(".menuitem").focus()):(--it,$cur.closest("div:not(.desktop-only)").find("a,input").eq(it).addClass("focused").focus())):c(".menuheader.active div a").eq(0).addClass("focused").focus();break;case 39:$this.find(".active").removeClass("active"),$this.removeClass("active"),$this.find("div a,div input").attr("tabindex","-1"),$this.find("ul").attr("aria-hidden","true"),c(".focused").removeClass("focused"),$this.next().find(".menuitem").focus();break;case 40:e.preventDefault(),e.stopPropagation(),$this.find("div a, div input").attr("tabindex","0"),$this.addClass("active"),$this.find("ul").attr("aria-hidden","false"),$this.children(".menuitem")&&$this.children(".menuitem").attr("aria-expanded","true"),0<c(".menuheader.active div a.focused").length?($cur=c(".menuheader.active div a.focused"),tub=$cur.closest("div:not(.desktop-only)").find("a"),it=tub.index($cur),$cur.closest("div").find("a, input").removeClass("focused"),it+=1,$cur.closest("div:not(.desktop-only)").find("a,input").eq(it).addClass("focused").focus()):c(".menuheader.active div a").eq(0).addClass("focused").focus()}}),c(".lang-select").keydown(function(e){switch($this=c(this),e.keyCode){case 9:(c(".chinese").is(":focus")||0<c(".chinese.focused"))&&($this.find("a").attr("tabindex","-1"),c(this).removeClass("active"),c(".lang-select .focused").removeClass("focused"),c("#link-lang").attr("tabindex","0").focus());break;case 13:it=0,e.preventDefault(),e.stopPropagation(),c(".lang-select").addClass("active"),c(".lang-select").focus(),c(".lang-select a").not("#link-lang").attr("tabindex","0");break;case 27:$this.find("a").attr("tabindex","-1"),c(this).removeClass("active"),c(".lang-select .focused").removeClass("focused"),c("#link-lang").attr("tabindex","0").focus();break;case 38:e.preventDefault(),e.stopPropagation(),tub=$this.find("a").not("#link-lang"),c(".lang-select .focused")?($cur=c(".lang-select .focused"),it=tub.index($cur),it<1?(c(".lang-select").removeClass("active"),c(".lang-select .focused").removeClass("focused"),$this.find("a").attr("tabindex","-1")):(--it,c(".lang-select .focused").removeClass("focused"),$this.find("a:not(#link-lang)").eq(it).addClass("focused").focus())):(it=0,c(".lang-select .focused").removeClass("focused"),$this.find("a:not(#link-lang)").eq(it).addClass("focused").focus());break;case 40:e.preventDefault(),e.stopPropagation(),c(".lang-select").addClass("active"),c(".lang-select").focus(),c(".lang-select a").not("#link-lang").attr("tabindex","0"),tub=$this.find("a:not(#link-lang)"),c(".lang-select .focused")?($cur=c(".lang-select .focused"),it=tub.index($cur),it+=1,c(".lang-select .focused").removeClass("focused"),$this.find("a:not(#link-lang)").eq(it).addClass("focused").focus()):(it=0,$this.find("a").not("#link-lang").attr("tabindex","0")),2<it&&($this.find("a").attr("tabindex","-1"),c(this).removeClass("active"),c(".lang-select .focused").removeClass("focused"),c("#link-lang").attr("tabindex","0").focus())}}),c(".nav-tool-header .chinese").on("blur",function(e){c(".nav-tool-header").removeClass("active"),c(".nav-tool-header").find("a").attr("tabindex","-1")}),c(".lang-select").hover(function(e){c("#link-lang").css("background","#ededed")},function(e){c("#link-lang").css("background","")}),c(".lang-select").blur(function(e){c(".lang-select.active").removeClass("active"),c(".lang-select .focused").removeClass("focused"),$this.find("a").attr("tabindex","-1")}),options=["boxes","bulk mail","buy stamps","careers","certified mail","change of address","claim","claims","complaint","customs form","duck stamps","every door direct mail","eddm","employment","federal duck stamps","file a claim","file claim","find a post office","first-class","first-class mail","flat rate","flat rate box","flat rate boxes","flat rate envelope","flat rate shipping","forever stamps","forms","forward mail","forwarding","history","hold mail","hours","informed delivery","insurance","insurance claim","intercept a package","jobs","locations","lost package","lost mail","mail forwarding","mail hold","mailbox","media mail","missing mail","money order","money orders","moving","my usps","overnight","parcel select","passport","passport application","passport renewal","passports","pay po box","po box","po boxes","post office box","post office locator","postage rates","postcard","postcard stamp","postcard stamps","postcards","priority","prices","price of stamps","priority mail","priority mail international","priority mail express","priority mail express international","rates","redelivery","refund","registered mail","return receipt","schedule a pickup","service alerts","service performance results","shipping history","stamp prices","stop mail","supplies","tracking","usps tracking","vacation hold","wedding stamps","ZIP code","ZIP codes"],o=[],i=0;i<options.length;i++)o.push(options[i]);function a(){switch(pathArray=window.location.pathname.split("/"),navBucket=pathArray[1],navBucket){case"international":c("li.menuheader a.menuitem").eq(5).addClass("active");break;case"ship":c("li.menuheader a.menuitem").eq(1).addClass("active");break;case"manage":c("li.menuheader a.menuitem").eq(2).addClass("active");break;case"help":c("li.menuheader a.menuitem").eq(6).addClass("active");break;case"shop":c("li.menuheader a.menuitem").eq(3).addClass("active");case"store":c("li.menuheader a.menuitem").eq(3).addClass("active");break;case"business":c("li.menuheader a.menuitem").eq(4).addClass("active")}}c(".search--track-input").on("keyup",function(e){var a=c(this).val(),t=[];for(oLen=o.length,i=0;i<oLen;i++){var s=o[i].toUpperCase(),n=a.toUpperCase();-1<s.indexOf(n)&&null!=n&&""!=n&&t.push(o[i])}var r="",l=t.length;for(5<l&&(l=5),i=0;i<l;i++)regEx=new RegExp(a,"igm"),replaceMask="<strong>"+a+"</strong>",t[i]=t[i].replace(regEx,replaceMask),r=r+"<li><a>"+t[i]+"</a></li>";c(this).parents("form").find(".autocorrect ul").html(r),0<r.length?c(this).parents("form").find(".autocorrect").addClass("active"):c(this).parents("form").find(".autocorrect").removeClass("active")}),c("body").on("click",".autocorrect a",function(e){c(this).parents("form").find("input.q").val(c(this).text()),c(this).parents("form").find(".autocorrect").removeClass("active"),c(this).parents("form").find(".autocorrect ul").html(""),c(this).parents("form").find("input.q").eq(0).focus(),setTimeout(function(e){c(this).parents("form").find(".autocorrect.active").removeClass("active"),c(this).parents("form").find("input.q").eq(0).focus()},100),c(this).parents("form").find(".autocorrect").removeClass("active")}),c(".menuheader div").hover(function(e){c(this).parents(".menuheader").children(".menuitem").addClass("active")},function(e){}),a(),c("li.menuheader:nth-of-type(4) .search--submit").on("click touchstart touch submit",function(e){e.stopPropagation(),e.preventDefault(),c("li.menuheader:nth-of-type(4) .search--submit").off("click"),c("li.menuheader:nth-of-type(4) input").val()&&(window.location="https://store.usps.com/store/results?_dyncharset=UTF-8&Dy=1&Nty=1&siteScope=ok&_D%3AsiteScope=+&Ntt="+c("li.menuheader:nth-of-type(4) input").val()+"&search=&_D%3Asearch=+&_DARGS=%2Fstore%2Fcartridges%2FSearchBox%2FSearchBox.jsp")})});
"use strict";$(function(){$.ajax("",{url:"goods.php",type:"get",success:function(t){!function(t){for(var n=JSON.parse(t),i="",a=0;a<n.length;a++)i+="<li>\n\t\t\t\t\t\t\t<div class='img'>\n\t\t\t\t\t\t\t\t<img src='img/section/ia_"+n[a].img+".png' alt="+n[a].img+">\n\t\t\t\t\t\t\t\t<span></span>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<b>"+n[a].p+"</b>\n\t\t\t\t\t\t\t<div class='text'>\n\t\t\t\t\t\t\t<a>"+n[a].tag+"</a>\n\t\t\t\t\t\t\t\t<h1>"+n[a].name+"</h1>\n\t\t\t\t\t\t\t\t<p>\n\t\t\t\t\t\t\t\t\t<span>￥<i>"+n[a].num+"</i></span>\n\t\t\t\t\t\t\t\t</p>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t\t<div class='color'>"+n[a].con+"</div>\n\t\t\t\t\t\t</li>";$(".Section ul").html(i),$(".Section ul").find("li").click([$(this).find("img").attr("alt")],function(){var t=$(this).find("img").attr("alt");console.log(t),$.ajax("",{url:"page.php",type:"get",data:"alt="+t,success:function(t){var n=JSON.parse(t),i=[];i.push(n[0]),sessionStorage.dat=JSON.stringify(i),$(location).prop("href","page.html")},error:function(){console.log("失败data")}})})}(t)},error:function(){console.log("失败data")}})});
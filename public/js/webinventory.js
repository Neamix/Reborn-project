function updateGold(e,t,a,n,l,s){let r=t.html();t.html('<i class="fas fa-spin fa-circle-notch"></i>');let o=e,i=n;$.post({url:l,data:{_token:s,amount:o.val(),characterId:$("#selectedCharacter").val(),action:a},headers:{"X-CSRF-TOKEN":s}}).done(function(e){i.html('<span class="text-success small">'+e.data+"</span>"),o.attr({max:e.gold.nonFormatted}),$("#inventoryGoldGame").html(e.gold.formatted),$("#inventoryGoldWeb").html(e.goldWeb.formatted),o.val("")}).error(function(e){const t=e.responseJSON;let a='<div class="fade show text-danger small" role="alert"><ul class="list-unstyled">';$.each(t.error,function(e,t){a+="<li>"+t+"</li>"}),a+="</ul></di>",i.html(a)}).always(function(){t.html(r)})}function selectCharacterWebInventory(e,t,a){let n=e.html();e.html('<i class="fas fa-spin fa-circle-notch"></i>');let l=$("#selectedCharacterState");$.get({url:t,data:{_token:a,characterId:$("#selectedCharacter").val()},headers:{"X-CSRF-TOKEN":a}}).done(function(e){$("#buttonGoldAmountGameWeb").removeAttr("disabled"),$("#buttonGoldAmountWebGame").removeAttr("disabled"),$("#gameInventory").html(e.accountInventory),$("#webInventory").html(e.accountWebInventory),$("#inventoryGoldGame").html(e.accountGoldFormatted),$("#goldAmountGameWeb").attr({max:e.accountGold}),l.text(""),itemInfo()}).error(function(e){l.text(JSON.parse(e.responseText).error).addClass("text-danger")}).always(function(){$(".inventorySpinner").attr("hidden","hidden"),e.html(n)})}function itemInfo(){$(document).tooltip({items:"[data-itemInfo], [title]",position:{my:"left+5 center",at:"right center"},content:function(){let e=jQuery(this);if("IFRAME"!==jQuery(this).prop("tagName").toUpperCase()){if(e.is("[data-itemInfo]")){if(""===e.parent().parent().find(".itemInfo").html())return;return e.parent().parent().find(".itemInfo").html()}return e.is("[title]")?e.attr("title"):void 0}},close:function(e,t){$(".ui-helper-hidden-accessible").remove()}});let e=null;$("#gameInventory [id^=selectInventory]").on("click",function(){e&&e.attr("hidden",!0),e=$(this).find(".fa-check"),$(this).find(".fa-check").removeAttr("hidden"),$("#selectedItemGame").html($(this).clone()).find(".fa-check").attr("hidden",!0),$("#buttonTransferItemToWeb").removeAttr("disabled")});let t=null;$("#webInventory [id^=selectInventory]").on("click",function(){t&&t.attr("hidden",!0),t=$(this).find(".fa-check"),$(this).find(".fa-check").removeAttr("hidden"),$("#selectedItemWeb").html($(this).clone()).find(".fa-check").attr("hidden",!0),$("#buttonTransferItemToGame").removeAttr("disabled")})}function transferItemToWeb(e,t,a,n){let l=e.html();e.html('<i class="fas fa-spin fa-circle-notch"></i>');let s=$('#gameInventory *[data-serial64="'+t+'"]');$.post({url:a,data:{_token:n,serial64:t,characterId:$("#selectedCharacter").val()},headers:{"X-CSRF-TOKEN":n}}).done(function(e){$("#transferItemStateGame").html('<span class="text-success small">'+e.data+"</span>"),$("#webInventory").find("[class^='col']").append(s.clone()).find(".fa-check").attr("hidden",!0),s.remove(),$("#selectedItemGame").html('<div class="empty-slot"><div class="itemslot"><div class="image"> </div> </div> <div class="itemInfo"></div></div>')}).error(function(e){const t=e.responseJSON;let a='<div class="fade show text-danger small" role="alert"><ul class="list-unstyled">';$.each(t.error,function(e,t){a+="<li>"+t+"</li>"}),a+="</ul></di>",$("#transferItemStateGame").html(a)}).always(function(){e.html(l)})}function transferItemToGame(e,t,a,n){let l=e.html();e.html('<i class="fas fa-spin fa-circle-notch"></i>');let s=$('#webInventory *[data-serial64="'+t+'"]');$.post({url:a,data:{_token:n,serial64:t,characterId:$("#selectedCharacter").val()},headers:{"X-CSRF-TOKEN":n}}).done(function(e){$("#transferItemStateWeb").html('<span class="text-success small">'+e.data+"</span>"),$("#gameInventory").find("[class^='col']").append(s.clone()).find(".fa-check").attr("hidden",!0),s.remove(),$("#selectedItemWeb").html('<div class="empty-slot"><div class="itemslot"><div class="image"> </div> </div> <div class="itemInfo"></div></div>')}).error(function(e){const t=e.responseJSON;let a='<div class="fade show text-danger small" role="alert"><ul class="list-unstyled">';$.each(t.error,function(e,t){a+="<li>"+t+"</li>"}),a+="</ul></di>",$("#transferItemStateWeb").html(a)}).always(function(){e.html(l)})}

/*!
 * business - v1.0.0
 * @author undefined - http://pixelperfection.in
 * Copyright (c) 2018
 */
var Product=function(){var e=function(){$(".js-product-image-main-div .js-product-image-li").length>1?$(".js-product-image-main-div .js-product-image-li .js-remove-product-image").show():$(".js-product-image-main-div .js-product-image-li .js-remove-product-image").hide()};return{init:function(){$(".js-frm-create-product, .js-frm-edit-product").validate({ignore:[],debug:!1,messages:{},rules:{name:{required:!0},category:{required:!0},description:{required:!0}},errorPlacement:function(e,i){i.hasClass("js-product-file")?i.closest(".js-product-image-li").find(".js-error").append(e):i.parent().append(e)},submitHandler:function(e){if($(".js-frm-edit-product").length){var i=[],a=0,t=[],d=0;$(".js-product-image-main-div .js-product-image-li.js-existing-product-image").each(function(){var e=$(this).data("index"),s=$(this).data("id");$(this).find(".js-product-file").val()&&(i[a]=new Object,i[a].index=e,i[a].id=s,a++),t[d]=new Object,t[d].index=e,t[d].id=s,d++}),$("#updated_product_images").val(JSON.stringify(i)),$("#existing_images_order").val(JSON.stringify(t))}var s=$("#sortable").sortable("toArray",{attribute:"data-index"});$("#image_order").val(JSON.stringify(s)),e.submit()}}),$(document).on("click",".js-add-product-image",function(i){var a=0;if($(".js-product-image-li").length){var t=$(".js-product-image-main-div .js-product-image-li").map(function(){return $(this).data("index")}).get();a=Math.max.apply(Math,t)+1}var d="";d=' <li class="panel ui-state-default liSort js-product-image-li" data-index="{index}" data-id="">',d+='<div class="form-group sorter panel-body img-block">',d+='<div class="col-sm-3"><img src="'+Site.no_image_url+'" width="150" class="center-block js-preview-image" data-index="{index}" /></div>',d+='<div class="col-sm-9">',d+='<div class="row">',d+='<div class="col-sm-9"><div class="input-group js-file-input-group"><label class="input-group-btn"><span class="btn green">Browse&hellip; <input type="file" style="display: none;" class="form-control js-product-file" type="file" name="product_image[{index}]" multiple></span></label><input type="text" value="" class="form-control js-file-name" readonly></div></div>',d+='<div class="col-sm-3"><a class="js-remove-product-image btn green" data-index="{index}" href="javascript:void(0)">Remove</a></div>',d+="</div>",d+="</div>",d+="</div>",d+='<div class="product-image-error js-error"></div>';var s=(d+="</li>").replace(/{index}/g,a);$("#sortable").append(s),$('[name="product_image['+a+']"]').each(function(){$(this).rules("add",{required:!0,messages:{required:"This field is required."}})});var r=$("#newly_added_images").val()+(""==$("#newly_added_images").val()?a:","+a);$("#newly_added_images").val(r),e()}),$(document).on("click",".js-remove-product-image",function(){if($(".js-frm-edit-product").length){var i=$(this).closest(".js-product-image-li"),a=i.data("index");if(""!=i.data("id")){var t=$("#removed_images").val()+(""==$("#removed_images").val()?a:","+a);$("#removed_images").val(t)}else{var d=$("#newly_added_images").val().split(","),s=d.indexOf(a);d.splice(s,1),$("#newly_added_images").val(d.join())}}$(".js-product-image-main-div .js-product-image-li").filter('[data-index="'+$(this).data("index")+'"]').remove(),e()}),$(document).on("change",".js-product-file",function(e){$(this).closest(".js-file-input-group").find(".js-file-name").val($(this).val().replace(/C:\\fakepath\\/i,""));var i=$(this).closest(".js-product-image-li").data("index");this.files&&this.files[0]&&$.each(this.files,function(){var e=new FileReader;e.onload=function(e){$(".js-preview-image").filter("[data-index="+i+"]").prop("src",e.target.result)},e.readAsDataURL(this)})})}}}();$(document).ready(function(){Product.init(),$("input[type='file']").on("change",function(e){$("input[type='submit']").prop("disabled","disabled")}),$("input[type='file']").on("fileloaded",function(e,i,a,t,d){$("input[type='submit']").prop("disabled","")})});
/*!
 * business - v1.0.0
 * @author undefined - http://pixelperfection.in
 * Copyright (c) 2018
 */
var Gallery={init:function(){$(".js-frm-create-gallery, .js-frm-edit-gallery").validate({ignore:[],debug:!1,messages:{},rules:{title:{required:!0},gallery_image:{required:!0}},errorPlacement:function(e,i){"gallery_image"==i.prop("id")?i.closest(".js-image-div").append(e):i.parent().append(e)},submitHandler:function(e){e.submit()}}),$(document).on("change","#gallery_image",function(e){console.log("this.files",this.files),this.files&&this.files[0]&&$.each(this.files,function(){var e=new FileReader;e.onload=function(e){$(".js-preview-image").prop("src",e.target.result)},e.readAsDataURL(this)})})}};$(document).ready(function(){Gallery.init()});
/*!
 * business - v1.0.0
 * @author undefined - http://pixelperfection.in
 * Copyright (c) 2018
 */
var Gallery={init:function(){$(".js-frm-create-gallery, .js-frm-edit-gallery").validate({ignore:[],debug:!1,messages:{},rules:{title:{required:!0},gallery_image:{required:!0}},errorPlacement:function(e,a){"gallery_image"==a.prop("id")?a.closest(".js-image-div").append(e):a.parent().append(e)},submitHandler:function(e){e.submit()}}),$(document).on("change","#gallery_image",function(e){console.log("this.files",this.files),this.files&&this.files[0]&&$.each(this.files,function(){var e=new FileReader;e.onload=function(e){$(".js-preview-image").prop("src",e.target.result)},e.readAsDataURL(this)})})}};$(document).ready(function(){Gallery.init()}),jQuery(function(){jQuery(".js-dataTable-full-pagination").dataTable({pagingType:"full_numbers",columnDefs:[{orderable:!1,targets:[1]}],pageLength:8,lengthMenu:[[5,8,15,20],[5,8,15,20]],autoWidth:!1})});
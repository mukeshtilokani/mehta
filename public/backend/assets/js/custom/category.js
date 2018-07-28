/*!
 * business - v1.0.0
 * @author undefined - http://pixelperfection.in
 * Copyright (c) 2018
 */
var Category={init:function(){$(".js-frm-create-category, .js-frm-edit-category").validate({ignore:[],debug:!1,messages:{},rules:{name:{required:!0},category_image:{required:!0},description:{required:!0}},errorPlacement:function(e,i){"category_image"==i.prop("id")?i.closest(".js-image-div").append(e):i.parent().append(e)},submitHandler:function(e){e.submit()}}),$(document).on("change","#category_image",function(e){console.log("this.files",this.files),this.files&&this.files[0]&&$.each(this.files,function(){var e=new FileReader;e.onload=function(e){$(".js-preview-image").prop("src",e.target.result)},e.readAsDataURL(this)})})}};$(document).ready(function(){Category.init()});
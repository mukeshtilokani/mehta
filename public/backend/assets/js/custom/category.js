/*!
 * business - v1.0.0
 * @author undefined - http://pixelperfection.in
 * Copyright (c) 2018
 */
var Category={init:function(){$(".js-frm-create-category, .js-frm-edit-category").validate({ignore:[],debug:!1,messages:{},rules:{name:{required:!0},category_image:{required:function(){return 0==$(".js-frm-edit-category").length}},description:{required:!0}},errorPlacement:function(e,t){"category_image"==t.prop("id")?t.closest(".js-image-div").append(e):t.parent().append(e)},submitHandler:function(e){e.submit()}}),$(document).on("change","#category_image",function(e){console.log("this.files",this.files),this.files&&this.files[0]&&$.each(this.files,function(){var e=new FileReader;e.onload=function(e){$(".js-preview-image").prop("src",e.target.result)},e.readAsDataURL(this)})})}};$(document).ready(function(){Category.init()}),jQuery(function(){jQuery(".js-dataTable-full-pagination").dataTable({pagingType:"full_numbers",columnDefs:[{orderable:!1,targets:[2]}],pageLength:8,lengthMenu:[[5,8,15,20],[5,8,15,20]],autoWidth:!1})});
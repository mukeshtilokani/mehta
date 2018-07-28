/*!
 * business - v1.0.0
 * @author undefined - http://pixelperfection.in
 * Copyright (c) 2018
 */
$(document).ready(function(){$(document).on("click",".js-delete-button",function(e){var t=$(this).data("delete-url"),o=$(this).data("confirm-msg")||"Are you sure?";$(".js-delete-confirmation-msg").html(o),$(".js-delete-modal-form").prop("action",t)}),$("#sortable").sortable({placeholder:"droppable"})});
$(document).ready(function() {
    $(document).on('click', '.js-delete-button', function(e) {
        var action = $(this).data('delete-url');
        var confirmationMsg = $(this).data('confirm-msg') || 'Are you sure?';
        $(".js-delete-confirmation-msg").html(confirmationMsg);
        $(".js-delete-modal-form").prop('action', action);
    });

    $("#sortable").sortable({
        placeholder: "droppable"
    });

	jQuery(function () {
    // Init page helpers (SimpleMDE plugin)
    	Codebase.helpers('simplemde');
    });

    // $('.js-simplemde').SimpleMDE();
});
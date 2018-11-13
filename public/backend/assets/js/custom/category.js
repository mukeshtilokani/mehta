var Category = function() {
    var handleValidation = function() {
        $('.js-frm-create-category, .js-frm-edit-category').validate({
            ignore: [],
            debug: false,
            messages: {},
            rules: {
                name: {
                    required: true
                },
                category_image: {
                    required: function() {
                        return $('.js-frm-edit-category').length == 0 ? true : false;
                    }
                },
                description: {
                    required: true
                }
            },
            errorPlacement: function(error, element) { // render error placement for each input type
                if (element.prop('id') == 'category_image') {
                    element.closest('.js-image-div').append(error);
                } else {
                    element.parent().append(error);
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    };
    var formInitialization = function() {

    };
    var formEvents = function() {
        $(document).on('change', '#category_image', function(e) {
            if (this.files && this.files[0]) {
                $.each(this.files, function() {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(".js-preview-image").prop("src", e.target.result);
                    }
                    reader.readAsDataURL(this);
                });
            }
        });
    };

    return {
        init: function() {
            handleValidation();
            formInitialization();
            formEvents();
        }
    }
}();

$(document).ready(function() {
    Category.init();
    $('.js-show-on-home-page').change(function() {
        var isChecked = $(this).is(":checked") ? 1 : 0;
        var categoryId = $(this).data('category');
        var limit = 4;
        if($(".js-show-on-home-page:checked").length > limit) {
            this.checked = false;
            $('#category_selection_alert_modal').modal('show');
            return;
        }
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/admin/categories/changeDisplayOnHomePageStatus',
            type: 'POST',
            data: {isChecked: isChecked, categoryId: categoryId},
            success: function(response){
                console.log('response', response);
            }
        });
    });
});

jQuery(function () {
    jQuery('.js-dataTable-full-pagination').dataTable({
        pagingType: "full_numbers",
        columnDefs: [ { orderable: false, targets: [ 2 ] } ],
        pageLength: 8,
        lengthMenu: [[5, 8, 15, 20], [5, 8, 15, 20]],
        autoWidth: false
    });
});
<div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="modal-fromright">
    <div class="modal-dialog modal-dialog-fromright" role="document">
        <div class="modal-content">
            {!! Form::open(['method' => 'delete', 'class' => 'js-delete-modal-form']) !!}
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Confirmation</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content js-delete-confirmation-msg">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Delete it!
                    </button>
                    <input name="_method" value="DELETE" type="hidden" />
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="create">
    <div class="modal-dialog modal-lg {{-- modal-dialog-centered --}}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="" action="{{ url('Admin/blog_tags') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <small>Title*</small>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title" required="">
                    </div>
                    
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
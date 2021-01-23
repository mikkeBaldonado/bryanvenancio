<div class="modal fade" tabindex="-1" role="dialog" id="update{{ $value->id }}">
    <div class="modal-dialog modal-lg {{-- modal-dialog-centered --}}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="" action="{{ url('Admin/Slider/'.$value->id) }}" enctype="multipart/form-data">
                    @csrf @method('put')
                    <div class="form-group">
                        <small>Title*</small>
                        <input type="text" name="title" class="form-control" value="{{ $value->title }}" placeholder="Title" required="">
                    </div>
                    
                    <div class="form-group">
                        <small>Tags</small>
                        <select class="form-control" name="tag" required="">
                            <option value="{{ $value->tag }}">{{ $value->category->title }}</option>
                            @foreach(App\Models\BlogCategory::all() as $tag)
                            @if($tag->id != $value->tag)
                            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <small>Images Should be less than 1mb  and dimension is (1845 x 773)*</small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="file" accept=".png,.jpeg,.jpg" >
                                <label class="custom-file-label light_gray" for="exampleInputFile">UPLOAD ONE(1) IMAGE</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
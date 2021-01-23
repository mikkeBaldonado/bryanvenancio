<div class="modal fade" tabindex="-1" role="dialog" id="update{{ $value->id }}">
    <div class="modal-dialog modal-lg {{-- modal-dialog-centered --}}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="" action="{{ url('Admin/Portfolio/'.$value->id) }}" enctype="multipart/form-data">
                    @csrf @method('put')
                    <div class="form-group">
                        <small>Title*</small>
                        <input type="text" name="title" class="form-control" value="{{ $value->title }}" placeholder="Title" required="">
                    </div>
                    <div class="form-group">
                        <small>Category*</small>
                        <select name="category_id" class="form-control" required="">
                            <option value="{{ $value->category_id }}">{{ $value->category->title }}</option>
                            @foreach(App\Models\PortfolioCategory::get() as $cat)
                            @if($value->category_id != $cat->id)
                            <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endif
                            @endforeach
                            <option>- Select Category</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <small>Tags</small>
                        <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" required="">

                            @foreach(App\Models\BlogCategory::all() as $tag)
                            @if(in_array($tag->id, json_decode($value->tags)))
                            <option value="{{ $tag->id }}" selected="">{{ $tag->title }}</option>
                            @else
                            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <small>Images Should be less than 1mb  and dimension is (575 x 366)*</small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="file" accept=".png,.jpeg,.jpg" >
                                <label class="custom-file-label light_gray" for="exampleInputFile">UPLOAD ONE(1) IMAGE</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <small>Location*</small>
                        <input type="text" name="location" class="form-control" value="{{ $value->location }}" placeholder="Location" required="">
                    </div>
                    <div class="form-group">
                        <small>Caption</small>
                        <textarea name="caption" class="form-control" placeholder="Caption" rows="3" required="">{{ $value->caption }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
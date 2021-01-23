        {{-- 'title', 'image', 'more_images' , 'location', 'blog_date', 'author', 'description', 'description_2', 'tags' --}}
<div class="modal fade" tabindex="-1" role="dialog" id="create">
    <div class="modal-dialog modal-lg {{-- modal-dialog-centered --}}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Portfolio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="" action="{{ url('Admin/Portfolio') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <small>Title*</small>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title" required="">
                    </div>
                    <div class="form-group">
                        <small>Category*</small>
                        <select name="category_id" class="form-control" required="">
                            <option>- Select Category</option>
                            @foreach(App\Models\PortfolioCategory::get() as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <small>Tags*</small>
                        <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" required="">
                            @foreach(App\Models\BlogCategory::all() as $value)
                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <small>Images Should be less than 1mb  and dimension is (575 x 366)*</small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="file" accept=".png,.jpeg,.jpg" required>
                                <label class="custom-file-label light_gray" for="exampleInputFile">UPLOAD ONE(1) IMAGE</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <small>Location*</small>
                        <input type="text" name="location" class="form-control" value="{{ old('location') }}" placeholder="Location" required="">
                    </div>
                    <div class="form-group">
                        <small>Caption</small>
                        <textarea name="caption" class="form-control" placeholder="Caption" rows="3" required="">{{ old('caption') }}</textarea>
                    </div>
                    
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
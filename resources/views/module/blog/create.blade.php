        {{-- 'title', 'image', 'more_images' , 'location', 'blog_date', 'author', 'description', 'description_2', 'tags' --}}
<div class="modal fade" tabindex="-1" role="dialog" id="create">
    <div class="modal-dialog modal-lg {{-- modal-dialog-centered --}}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="" action="{{ url('Admin/Blog') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <small>Title*</small>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title" required="">
                    </div>
                    <div class="form-group">
                        <small>Location*</small>
                        <input type="text" name="location" class="form-control" value="{{ old('location') }}" placeholder="Location" required="">
                    </div>
                    <div class="form-group">
                        <small>Date*</small>
                        <input type="date" name="blog_date" class="form-control" value="{{ old('blog_date') }}" placeholder="Date" required="">
                    </div>
                    <div class="form-group">
                        <small>Author*</small>
                        <input type="text" name="author" class="form-control" value="{{ old('author') }}" placeholder="Author" required="">
                    </div>
                    <div class="form-group">
                        <small>Tags</small>
                        <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                            @foreach(App\Models\BlogCategory::all() as $value)
                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <small>Images Should be less than 1mb and dimension is (1770 x 533) *</small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="file" accept=".png,.jpeg,.jpg" required>
                                <label class="custom-file-label light_gray" for="exampleInputFile">UPLOAD ONE(1) IMAGE</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <small>More Images Should be less than 2mb  and dimension is (582 x 608)*</small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="more_images[]" id="file" accept=".png,.jpeg,.jpg" required multiple="">
                                <label class="custom-file-label light_gray" for="exampleInputFile">UPLOAD ONE(1) IMAGE</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <small>Description 1</small>
                        <textarea name="description" rows="5" class="form-control" required="" placeholder="Description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <small>Description 2</small>
                        <textarea name="description_2" rows="5" class="form-control" placeholder="Description">{{ old('description_2') }}</textarea>
                    </div>
                    
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
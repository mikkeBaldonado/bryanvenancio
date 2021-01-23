<div class="modal fade" tabindex="-1" role="dialog" id="update{{ $value->id }}">
    <div class="modal-dialog modal-lg {{-- modal-dialog-centered --}}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" class="" action="{{ url('Admin/Blog/'.$value->id) }}" enctype="multipart/form-data">
                    @csrf @method('put')
                    <div class="form-group">
                        <small>Title*</small>
                        <input type="text" name="title" class="form-control" value="{{ $value->title }}" placeholder="Title" required="">
                    </div>
                    <div class="form-group">
                        <small>Location*</small>
                        <input type="text" name="location" class="form-control" value="{{ $value->location }}" placeholder="Location" required="">
                    </div>
                    <div class="form-group">
                        <small>Date*</small>
                        <input type="date" name="blog_date" class="form-control" value="{{ $value->blog_date }}" placeholder="Date" required="">
                    </div>
                    <div class="form-group">
                        <small>Author*</small>
                        <input type="text" name="author" class="form-control" value="{{ $value->author }}" placeholder="Author" required="">
                    </div>
                    <div class="form-group">
                        <small>Tags</small>
                        <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">

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
                        <small>Images Should be less than 1mb  and dimension is (1770 x 533)*</small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="file" accept=".png,.jpeg,.jpg" >
                                <label class="custom-file-label light_gray" for="exampleInputFile">UPLOAD ONE(1) IMAGE</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <small>More Images Should be less than 2mb  and dimension is (582 x 608)*</small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="more_images[]" id="file" accept=".png,.jpeg,.jpg"  multiple="">
                                <label class="custom-file-label light_gray" for="exampleInputFile">UPLOAD ONE(1) IMAGE</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <small>Description 1</small>
                        <textarea name="description{{ $value->id }}" rows="5" class="form-control" required="" placeholder="Description">{{ $value->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <small>Description 2</small>
                        <textarea name="description_2{{ $value->id }}" rows="5" class="form-control" placeholder="Description">{{ $value->description_2 }}</textarea>
                    </div>
                    
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
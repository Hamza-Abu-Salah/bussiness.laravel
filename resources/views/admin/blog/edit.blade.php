
@extends('admin.layout.master')
@section('title')
Blogs
@endsection

@section('contentheader')
    Blogs
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.blogs.index') }}"> Blogs </a>
@endsection

@section('contentheaderactive')
    create
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header ">
                <div>
                    <h3 class="card-title card_title_center">Add Blogs Data </h3>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.blogs.update',$data['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title1 </label>
                                <input type="title1" name="title1" id="title1" class="form-control"
                                value="{{ old('title1',$data['title1']) }}">
                                @error('ttitle1ext')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>content</label>
                                <input type="text" name="content" id="content" class="form-control"
                                    value="{{ old('content',$data['content']) }}">
                                @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Image</label>
                            <input type="file" required name="image"  class="form-control">
                            <img width="80" src="{{ asset('uploads/blog/'.$data['image']) }}" alt="">                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Active</label>
                                <select name="active" id="active" class="form-control">
                                    <option value="">--select--</option>
                                    <option {{ (old('active',$data['active']) == 1 || old('active',$data['active']) == '' ? 'selected':'') }} value="1">Yes
                                    </option>
                                    <option {{ (old('active',$data['active']) == 0 || old('active',$data['active']) != '' ? 'selected':'')   }} value="0">No
                                    </option>
                                </select>
                                @error('active')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-sm">updated</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{ asset('adminassets/js/blogs.js') }}"></script>

@endsection

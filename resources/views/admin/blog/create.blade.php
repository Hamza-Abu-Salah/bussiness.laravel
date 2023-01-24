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
                    <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">


                            <div class="col-md-6">
                                <label>Image</label>
                                <input type="file" name="image" required  class="form-control">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>title1</label>
                                    <input type="text" name="title1" id="title1" class="form-control"
                                        value="{{ old('title1') }}">
                                        @error('title1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>content</label>
                                    <input type="text" name="content" id="content" class="form-control"
                                        value="{{ old('content') }}">
                                    @error('content')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Active</label>
                                    <select name="active" id="active" class="form-control">
                                        <option value="">--select--</option>
                                        <option @if (old('active') == 1 || old('active') == '') selected="selected" @endif value="1">
                                            Yes
                                        </option>
                                        <option @if (old('active') == 0 || old('active') != '') selected="selected" @endif value="0">
                                            No
                                        </option>
                                    </select>
                                    @error('active')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm">Add</button>
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

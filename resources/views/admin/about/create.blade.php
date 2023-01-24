@extends('admin.layout.master')
@section('title')
    About
@endsection

@section('contentheader')
    About
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.about.index') }}"> About </a>
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
                        <h3 class="card-title card_title_center">Add About Data </h3>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>title </label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> content1</label>
                                    <input name="content1" id="content1" class="form-control"
                                        value="{{ old('content1') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>content2</label>
                                    <input type="text" name="content2" id="content2" class="form-control"
                                        value="{{ old('content2') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>content3</label>
                                    <input type="text" name="content3" id="content3" class="form-control"
                                        value="{{ old('content3') }}">
                                    @error('content3')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>




                            <div class="col-md-6">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
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
    <script src="{{ asset('adminassets/js/about.js') }}"></script>
@endsection


@extends('admin.layout.master')
@section('title')
Home
@endsection

@section('contentheader')
    Home
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.home.index') }}"> Home </a>
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
                    <h3 class="card-title card_title_center">Add Home Data </h3>
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.home.store') }}" method="post" enctype="multipart/form-data">
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
                                <label>text </label>
                                <input type="text" name="text" id="text" class="form-control"
                                value="{{ old('text') }}">
                                @error('text')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label> btn_text</label>
                                <input name="btn_text" id="btn_text" class="form-control" value="{{ old('btn_text') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>btn-link</label>
                                <input type="text" name="btn_link" id="btn_link" class="form-control"
                                    value="{{ old('btn_link') }}">
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
                                <label>Phone</label>
                                <input type="text" name="phones" id="phones" class="form-control"
                                    value="{{ old('phones') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>Image</label>
                            <input type="file" name="image"  class="form-control">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Active</label>
                                <select name="active" id="active" class="form-control">
                                    <option value="">--select--</option>
                                    <option @if (old('active') == 1 || old('active') == '') selected="selected" @endif value="1">Yes
                                    </option>
                                    <option @if (old('active') == 0 || old('active') != '') selected="selected" @endif value="0">No
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

<script src="{{ asset('adminassets/js/home.js') }}"></script>

@endsection

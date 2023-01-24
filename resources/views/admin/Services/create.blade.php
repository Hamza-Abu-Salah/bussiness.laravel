@extends('admin.layout.master')
@section('title')
    Services
@endsection

@section('contentheader')
    Services
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.services.index') }}"> Services </a>
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
                        <h3 class="card-title card_title_center">Add Services Data </h3>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>icon</label>
                                    <select name="icon" id="icon" class="form-control">
                                        <option value="">--select--</option>
                                        <option @if (old('icon') == 1) selected="selected" @endif value="1">
                                            lni lni-capsule</option>
                                        <option @if (old('icon') == 2) selected="selected" @endif value="2">
                                            lni lni-bootstrap</option>
                                        <option @if (old('icon') == 3) selected="selected" @endif value="3">
                                            lni lni-shortcode</option>
                                        <option @if (old('icon') == 4) selected="selected" @endif value="4">
                                            lni lni-dashboard</option>
                                        <option @if (old('icon') == 5) selected="selected" @endif value="5">
                                            lni lni-layers</option>
                                            <option @if (old('icon') == 6) selected="selected" @endif value="6">
                                            lni lni-reload</option>
                                    </select>
                                    @error('icon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}">
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
    <script src="{{ asset('adminassets/js/services.js') }}"></script>
@endsection

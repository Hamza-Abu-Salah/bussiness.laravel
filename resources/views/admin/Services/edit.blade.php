
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
                <form action="{{ route('admin.services.update',$data['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>icon</label>
                                <select name="icon" id="icon" class="form-control">
                                    <option value="">--select--</option>
                                    <option {{ old('icon',$data['icon'])==1 ?'selected' :'' }} value="1">
                                        lni lni-capsule</option>
                                    <option {{ old('icon',$data['icon'])==2 ?'selected' :'' }} value="2">
                                        lni lni-bootstrap</option>
                                    <option {{ old('icon',$data['icon'])==3 ?'selected' :'' }} value="3">
                                        lni lni-shortcode</option>
                                    <option {{ old('icon',$data['icon'])==4 ?'selected' :'' }} value="4">
                                        lni lni-dashboard</option>
                                    <option {{ old('icon',$data['icon'])==5 ?'selected' :'' }} value="5">
                                        lni lni-layers</option>
                                        <option {{ old('icon',$data['icon'])==6 ?'selected' :'' }} value="6">
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
                                    value="{{ old('name',$data['name']) }}">
                            </div>
                        </div>
                    </div>


                    <div class="row">
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
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
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

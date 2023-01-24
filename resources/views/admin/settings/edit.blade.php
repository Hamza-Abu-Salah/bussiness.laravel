@extends('admin.layout.master')
@section('title')
    Settings
@endsection

@section('contentheader')
    Settings
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.settings.index') }}"> Settings </a>
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
                        <h3 class="card-title card_title_center">Add Settings Data </h3>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.settings.update',$data['id']) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Logo Header</label>
                                <input type="file" required name="logo_header" class="form-control">
                                <img width="80" src="{{ asset('uploads/settings/' . $data['logo_header']) }}" alt="">
                            </div>
                            <div class="col-md-6">
                                <label>Logo Footer</label>
                                <input type="file" required name="logo_footer" class="form-control">
                                <img width="80" src="{{ asset('uploads/settings/' . $data['logo_footer']) }}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>title_service </label>
                                    <input type="text" name="title_service" id="title_service" class="form-control"
                                        value="{{ old('title_service',$data['title_service']) }}">
                                    @error('title_service')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>text_service </label>
                                    <input type="text" name="text_service" id="text_service" class="form-control"
                                        value="{{ old('text_service',$data['text_service']) }}">
                                    @error('text_service')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>title_blogs </label>
                                    <input type="text" name="title_blogs" id="title_blogs" class="form-control"
                                        value="{{ old('title_blogs',$data['title_blogs']) }}">
                                    @error('title_blogs')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>text_blogs </label>
                                    <input type="text" name="text_blogs" id="text_blogs" class="form-control"
                                        value="{{ old('text_blogs',$data['text_blogs']) }}">
                                    @error('text_blogs')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>btn_Services </label>
                                    <input type="btn_Services" name="btn_Services" id="btn_Services" class="form-control"
                                        value="{{ old('btn_Services',$data['btn_Services']) }}">
                                    @error('btn_Services')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>btn_blogs </label>
                                    <input type="btn_blogs" name="btn_blogs" id="btn_blogs" class="form-control"
                                        value="{{ old('btn_blogs',$data['btn_blogs']) }}">
                                    @error('btn_blogs')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> phones</label>
                                    <input name="phones" id="phones" class="form-control"
                                        value="{{ old('phones',$data['phones']) }}">
                                        @error('phones')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>emails</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email',$data['email']) }}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>date</label>
                                    <input type="date" name="date" id="date" class="form-control"
                                        value="{{ old('date',$data['date']) }}">
                                    @error('date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>hour</label>
                                    <input type="number" name="hour" id="hour" class="form-control"
                                        value="{{ old('hour',$data['hour']) }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>from_the_hour</label>
                                    <input type="text" name="from_the_hour" id="from_the_hour" class="form-control"
                                        value="{{ old('from_the_hour',$data['from_the_hour']) }}">
                                    @error('from_the_hour')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>to_the_hour</label>
                                    <input type="text" name="to_the_hour" id="to_the_hour" class="form-control"
                                        value="{{ old('to_the_hour',$data['to_the_hour']) }}">
                                    @error('to_the_hour')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        value="{{ old('address',$data['address']) }}">
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
                            <button type="submit" class="btn btn-success btn-sm">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('adminassets/js/settings.js') }}"></script>
@endsection

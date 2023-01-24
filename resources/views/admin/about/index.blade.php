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
    Show
@endsection




@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ">
                    <div>
                        <h3 class="card-title card_title_center"> About Data </h3>
                    </div>
                    <div>
                        <a href="{{ route('admin.about.create') }}" class="btn btn-sm btn-success">Add About </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <div id="ajax_responce_serarchDiv" class="col-md-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Content1 </th>
                                        <th>Content2 </th>
                                        <th>Content3 </th>
                                        <th>Image</th>
                                        <th>Active</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $info)
                                        <tr>
                                            <td>{{ $info->id }}</td>
                                            <td>{{ $info->title }}</td>
                                            <td>{{ $info->content1 }}</td>
                                            <td>{{ $info->content2 }}</td>
                                            <td>{{ $info->content3 }}</td>
                                            <td><img width="80" src="{{ asset('uploads/about/'.$info->image) }}" alt=""></td>                                            <td>
                                                @if ($info->active == 1)
                                                    Enabled
                                                @else
                                                    Disabled
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('admin.about.edit', $info->id) }}"><i class="fas fa-edit"></i></a>
                                                <form class="d-inline" action="{{ route('admin.about.delete', $info->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade  " id="MoreDetailsModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h4 class="modal-title text-center"> Show Delegates</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="MoreDetailsModalBody" style="background-color: white !important; color:black;">



                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">اغلاق</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

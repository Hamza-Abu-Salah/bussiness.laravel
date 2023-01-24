@extends('admin.layout.master')
@section('title')
    Blog
@endsection

@section('contentheader')
    Blog
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.blogs.index') }}"> Blog </a>
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
                        <h3 class="card-title card_title_center"> Blog Data </h3>
                    </div>
                    <div>
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-success">Add Blog </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <div id="ajax_responce_serarchDiv" class="col-md-12">
                            <table id="example2" class="table table-bordered table-hover table-responsive">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>image</th>
                                        <th>Title 1</th>
                                        <th>Content </th>
                                        <th>Active</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $info)
                                        <tr>
                                            <td>{{ $info->id }}</td>
                                            <td><img width="80" src="{{ asset('uploads/blog/'.$info->image) }}" alt=""></td>
                                            <td>{{ $info->title1 }}</td>
                                            <td>{{ $info->content }}</td>
                                            <td>
                                                @if ($info->active == 1)
                                                    Enabled
                                                @else
                                                    Disabled
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ route('admin.blogs.edit', $info->id) }}"><i class="fas fa-edit"></i></a>
                                                <form class="d-inline" action="{{ route('admin.blogs.delete', $info->id) }}" method="POST">
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

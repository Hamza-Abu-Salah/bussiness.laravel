@extends('admin.layout.master')
@section('title')
    Content
@endsection

@section('contentheader')
    Content
@endsection

@section('contentheaderlink')
    <a href="{{ route('admin.content.index') }}"> Content </a>
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
                        <h3 class="card-title card_title_center"> Content Data </h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                    <div id="ajax_responce_serarchDiv" class="col-md-12">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone </th>
                                        <th>Subject</th>
                                        <th>Text</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $info)
                                        <tr>
                                            <td>{{ $info->id }}</td>
                                            <td>{{ $info->name }}</td>
                                            <td>{{ $info->email }}</td>
                                            <td>{{ $info->phone }}</td>
                                            <td>{{ $info->subject }}</td>
                                            <td>{{ $info->text }}</td>
                                            <td>
                                                <form class="d-inline" action="{{ route('admin.content.delete', $info->id) }}" method="POST">
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

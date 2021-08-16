@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-3">
            <nav class="navbar navbar-dark text-wrap bg-dark mb-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('permissions.index') }}">All Permissions</a>
                </div>
            </nav>
            @if(Session::has('status'))
            <div class="alert alert-success">
                {{ Session::get('status') }}
            </div>
            @endif
            <table class="table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                </thead>
                <tbody>
                    @if(count($permissions)>0)
                    @foreach ($permissions as $key => $permission)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$permission->role->name}}</td>
                        <td><a href="{{ route('permissions.edit', [$permission->id]) }}"><i class="fas fa-edit"></i></a>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                        class="fas fa-trash"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('permissions.destroy', [$permission->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">You Sure ?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Make Sure You really Want To Delete!
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">I'm
                                                        Sure</button>
                                                    <button type="button" class="btn btn-primary">Cancel</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                </td>
                    </div>
        </tr>
        @endforeach
        @else
        <td> No Permission to display </td>
        @endif
        </tbody>
        </table>
    </div>
</div>
</div>
@endsection

@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-3">
            <nav class="navbar navbar-dark text-wrap bg-dark mb-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('users.index') }}">All Employees</a>
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
                        <th>SM</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Designation</th>
                        <th>Start Date</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                </thead>
                <tbody>
                    @if(count($users)>0)
                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->mobile_number}}</td>
                        <td>{{$user->designation}}</td>
                        <td>{{$user->start_from}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('users.edit',$user->id)}}"> <i class="fas fa-edit"></i></a>
                        </td>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                    class="fas fa-trash"></i></a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ route('users.destroy', [$user->id]) }}" method="post">
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
                    </div>
            </td>
        </tr>
        @endforeach
        @else
        <td> No user to display </td>
        @endif
        </tbody>
        </table>
    </div>
</div>
</div>
@endsection

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
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Edit</th>
                    </tr>

                </thead>
                <tbody>
                    @if(count($permissions)>0)
                    @foreach ($permissions as $key => $permission)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$permission->role->name}}</td>
                        <td><a href="{{route('permissions.edit',$permission->id)}}"> <i class="fas fa-edit"></i></a>
                        </td>

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

@extends('admin.layouts.master')
@section('content')
<div class="container mt-5">
    <nav class="navbar navbar-dark text-wrap bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('users.create') }}">Register Employee</a>
        </div>
    </nav>
    @if(Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
        </div>
    @endif
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        General Information
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="firstname" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lastname" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Designation</label>
                            <input type="text" name="designation" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Department</label>
                            <select name="department_id"  class="form-control" required>
                                @foreach(App\Models\Department::all() as $department)

                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Start Date</label>
                            <input placeholder="dd-mm-yy" name="start_from" class="form-control" required id="datepicker">

                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" accept="image/*" name="image" class="form-control" value="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Login Informations
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="role_id"  class="form-control" required>
                                @foreach(App\Models\Role::all() as $role)

                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" value="submit" class="btn btn-primary mt-2">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

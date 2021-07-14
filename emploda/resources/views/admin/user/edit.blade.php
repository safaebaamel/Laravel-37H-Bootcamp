@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Session::has('status'))
                <div class="alert alert-success">
                    {{ Session::get('status') }}
                </div>
            @endif
            <form action="{{ route('users.update', [$user->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header"> Update Users </div>

                    <div class="card-body">
                    <div class="form-group">
                            <label for=""> First Name </label>
                            <input type="text" name="firstname" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $user->firstname }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Last Name </label>
                            <input type="text" name="lastname" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $user->lastname }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Address </label>
                            <input type="text" name="address" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $user->address }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Mobile </label>
                            <input type="text" name="mobile_number" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $user->mobile_number }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Designation </label>
                            <input type="text" name="designation" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $user->designation }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Department </label>
                            <input type="text" name="department_id" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $user->department_id }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Email </label>
                            <input type="text" name="email" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $user->email }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Password </label>
                            <input type="text" name="address" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $user->password }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" >Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

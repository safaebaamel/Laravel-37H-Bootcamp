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
            <form action="{{ route('departments.update', [$department->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header"> Update Department </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Name </label>
                            <input type="text" name="name" class="form-control mb-2 @error('name') is-invalid @enderror" value="{{ $department->name }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Description </label>
                            <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror mb-2" >{{ $department->description }} </textarea>

                            @error('description')
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

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
            <form action="{{ route('notices.update', [$notice->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header"> Update Notice </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Title  </label>
                            <input type="text" name="title" value="{{ $notice->title }}" class="form-control mb-2 @error('title') is-invalid @enderror" >
                            @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> Description </label>
                            <textarea type="text" name="description" value="{{ $notice->description }}" class="form-control @error('description') is-invalid @enderror mb-2">{{ $notice->description }} </textarea>
                            @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for=""> From Date</label>
                            <input type="text" name="date" id="datepicker" class="form-control @error('date') is-invalid @enderror" required >
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        </div>
                        <div class="form-group">
                            <label for=""> Created By</label>
                            <input type="text" name="name" value="{{ $notice->name }}" class="form-control @error('name') is-invalid @enderror" required value="{{ auth()->user()->firstname }}" >
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
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

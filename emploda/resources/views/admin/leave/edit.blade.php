@extends('admin.layouts.master')
@section('content')
<div class="container mt-5">
    <nav class="navbar navbar-dark text-wrap bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Leave Form</a>
        </div>
    </nav>
    @if(Session::has('status'))
    <div class="alert alert-success">
        {{ Session::get('status') }}
    </div>
    @endif
    <form action="{{ route('leaves.update', [$leave->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create Leave
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">From</label>
                            <input type="text" name="from" class="form-control" id="datepicker" required value="{{ $leave->from }}">
                            @error('from')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">To Date</label>
                            <input type="text" name="to" class="form-control" id="datepicker1" required value="{{ $leave->to }}">
                            @error('to')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Type Of Leave</label>
                            <select name="type" id="" class="form-control">
                                <option value="annualleave">Annual Leave</option>
                                <option value="sickleave">Sick Leave</option>
                                <option value="parental">Parental Leave</option>
                                <option value="other">Other Leave</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" value="{{ $leave->description }}" id="" cols="20" rows="5" class="form-control">{{ $leave->description }}</textarea>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" value="submit" class="btn btn-primary mt-2">Update</button>
                </div>
            </div>
    </form>
</div>
@endsection

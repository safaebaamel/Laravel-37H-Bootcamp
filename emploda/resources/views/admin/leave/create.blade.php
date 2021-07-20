@extends('admin.layouts.master')
@section('content')
<div class="container mt-5">
    <nav class="navbar navbar-dark text-wrap bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('leaves.create') }}">Leave Form</a>
        </div>
    </nav>
    @if(Session::has('status'))
    <div class="alert alert-success">
        {{ Session::get('status') }}
    </div>
    @endif
    <form action="{{ route('leaves.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create Leave
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">From</label>
                            <input type="text" name="from" class="form-control" id="datepicker" required value="">
                            @error('from')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">To Date</label>
                            <input type="text" name="to" class="form-control" id="datepicker1" required value="">
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
                            <textarea name="description" id="" cols="20" rows="5" class="form-control"></textarea>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" value="submit" class="btn btn-primary mt-2">Submit</button>
                </div>
            </div>
</form>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date From</th>
                        <th scope="col">Date To</th>
                        <th scope="col">Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Reply</th>
                        <th scope="col">Edit</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leaves as $leave)
                    <tr>
                        <th scope="row">{{ $leave->id }}</th>
                        <td>{{ $leave->from }}</td>
                        <td>{{ $leave->to }}</td>
                        <td>{{ $leave->type }}</td>
                        <td>{{ $leave->description }}</td>
                        <td>
                            @if($leave->status==0)
                                <span class="alert alert-danger m-0 p-1"> Pending </span>
                            @else
                                <span class="alert alert-danger m-0 p-1"> Approved </span>
                            @endif
                        </td>
                        <td>{{ $leave->reply }}</td>
                        <td><a href="{{route('leaves.edit',[$leave->id])}}"> <i class="fas fa-edit"></i></a></td>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i
                                        class="fas fa-trash"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('leaves.destroy', [$leave->id]) }}" method="post">
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
                </tbody>
            </table>
    </form>
</div>
@endsection

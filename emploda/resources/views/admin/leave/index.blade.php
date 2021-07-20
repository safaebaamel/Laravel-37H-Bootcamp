@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
    @if(Session::has('status'))
    <div class="alert alert-success">
        {{ Session::get('status') }}
    </div>
    @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Leaves Approving') }}</div>

                <div class="card-body">
                <table class="table mt-1">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Date From</th>
                        <th scope="col">Date To</th>
                        <th scope="col">Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Reply</th>
                        <th scope="col">Status</th>
                        <th scope="col">Approve/Reject</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leaves as $leave)
                    <tr>
                        <th scope="row">{{ $leave->user->firstname }}</th>
                        <td>{{ $leave->from }}</td>
                        <td>{{ $leave->to }}</td>
                        <td>{{ $leave->type }}</td>
                        <td>{{ $leave->description }}</td>
                        <td>{{ $leave->message }}</td>
                        <td>
                            @if($leave->status==0)
                                <span class="alert alert-danger m-0 p-1"> Pending </span>
                            @elseif($leave->status==1)
                                <span class="alert alert-success m-0 p-1"> Approved </span>
                            @else
                                <span class="alert alert-primary m-0 p-1"> Rejected </span>
                            @endif
                        </td>
                        <td><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Approve/Reject </a>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('accept.reject', [$leave->id]) }}" method="post">
                                            @csrf
                                            method('PUT')
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Confirm Leave</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for=""> Status</label>
                                                        <select name="status" class="form-control" id="">
                                                            <option value="0"> Pending</option>
                                                            <option value="1"> Accept</option>
                                                            <option value="2"> Rejected</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for=""> Message</label>
                                                        <textarea name="message" class="form-control" id="" cols="10" rows="1"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger" >Confirm Leave</button>
                                                </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

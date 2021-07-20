@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav class="navbar navbar-light text-wrap bg-light mb-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('notices.index') }}">All Notices</a>
                </div>
            </nav>
            @if(count($notices)> 0)
            @foreach($notices as $notice)
            <div class="card alert alert-info">
                <div class="card-header alert alert-warning">{{ $notice->title }}</div>
                <div class="card-body mt-2">
                    <p> {{ $notice->description }} </p>
                    <p class="badge rounded-pill bg-success"> Data:{{$notice->date}} </p>
                    <p class="badge rounded-pill bg-warning"> Owner:{{$notice->name}} </p>
                </div>

                <div class="card-footer">
                    <td><a href="{{route('notices.edit',$notice->id)}}"> <i class="fas fa-edit"></i></a>
                    </td>
                    <span class="d-flex justify-content-end"><a href="#" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop"><i class="fas fa-trash"></i></a>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('notices.destroy', [$notice->id]) }}" method="post">
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
                </span>
            </div>
        </div>
        @endforeach
        @else
        <p> No Notices Yet </p>
        @endif
    </div>
</div>
</div>
@endsection

@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
            Send Email
            <div class="card-header">
                <div class="card-body">
                    <form action="{{ route('mails.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for=""> Select </label>
                            <select name="mail" id="mail" class="form-control">
                                <option value="0"> Mail to all staff </option>
                                <option value="1"> Choose Department </option>
                                <option value="2"> Choose Person </option>
                            </select>
                            <br>
                            <select name="department" class="form-control" id="department">
                                @foreach(App\Models\Department::all() as $department)
                                <option value="{{ $department->id }}"> {{ $department->name }} </option>
                                @endforeach
                            </select>
                            <br>
                            <select name="person" class="form-control" id="person">
                                @foreach(App\Models\User::all() as $user)
                                <option value="{{ $user->id }}"> {{ $user->firstname }} </option>
                                @endforeach
                            </select>
                            <div class="form-group ">
                                <label for=""> body</label>
                                <textarea name="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                                @error('body')
                                    <span class="invalid-feedback" rol="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  mt-3">
                                <label for=""> File</label>
                                <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" value="">
                                @error('file')
                                    <span class="invalid-feedback" rol="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<style type="text/css">
    #department {
        display:none;
    }
    #person {
        display:none;
    }
</style>
@endsection

<section class="Form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-5 p-0">
                <img src="https://images.unsplash.com/photo-1471897488648-5eae4ac6686b?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <h1 class="font-weight-bold py-3">{{ __('Login') }}</h1>
                <h4>Sign In to your account</h4>
                <form method="POST" action="{{ route('auth.check') }}">
                    @csrf
                    <div class="form-row">
                        @if(Session::has('message'))
                        <div class="alert alert-danger col-lg-7">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                        <div class="col-lg-7">
                            <input type="email" id="email" name="email" placeholder="Email Address"
                                value="{{ old('email') }}" placeholder="Email Address"
                                class="form-control my-3 p-3 @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" id="password" name="password" placeholder="********"
                                    class="form-control my-3 p-3 @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="login" id="btnn" class="btn1 btn btn-primary mt-3 mb-4">Login</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

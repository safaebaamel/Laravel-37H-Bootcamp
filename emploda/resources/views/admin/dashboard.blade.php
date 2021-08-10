@include('admin.layouts.navbar')

@include('admin.layouts.sidebar')
<div id="layoutSidenav_content">
    <main>
        @if(session('is_admin') == 1)
        <div class="container-fluid px-4">
            <h1 class="mt-4">Admin Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Welcome Back Admin</li>
            </ol>
            <div class="row">
                <div class="container">

                    <div class="form-group col-md-12">
                        <div class="alert alert-success" role="alert">
                            <h5 class="alert-heading">You Have No new Declarations!</h5
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4 border dark border-2 ">
                        <div class="card-body fs-3 text-center">Departments</div>
                        <div class="card-footer d-flex justify-content-between text-end">
                            <a class="small text-white  btn-outline-primary text-decoration-none text-end"
                                href={{ route('departments.index') }}>View All Departments</a>
                            <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4 border dark border-2">
                        <div class="card-body fs-3 text-center">Users</div>
                        <div class="card-footer d-flex justify-content-between text-end">
                            <a class="small text-white  btn-outline-primary text-decoration-none text-end"
                                href={{ route('users.index') }}>View All Users</a>
                            <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4 border dark border-2">
                        <div class="card-body fs-3 text-center">Vacation Leaves</div>
                        <div class="card-footer d-flex justify-content-between text-end">
                            <a class="small text-white  btn-outline-primary text-decoration-none text-end"
                                href={{ route('leaves.index') }}>View All Vacations Leaves</a>
                            <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-secondary text-white mb-4 border dark border-2">
                        <div class="card-body fs-3 text-center">Declarations</div>
                        <div class="card-footer d-flex justify-content-between text-end">
                            <a class="small text-white  btn-outline-primary text-decoration-none text-end"
                                href={{ route('notices.index') }}>View All Declarations</a>
                            <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img src="..." class="img-fluid" alt="..."> -->
            @else
            <div class="container-fluid px-4">
                <h1 class="mt-4">User Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Welcome Back {{ session('firstname') }}</li>
                </ol>
                <div class="container">
                    <div class="form-group col-md-12">
                        <div class="alert alert-success" role="alert">
                            <h5 class="alert-heading text-center">Have a Good Day {{ session('firstname') }}!</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @yield('content')
    </main>

    @include('admin.layouts.footer')

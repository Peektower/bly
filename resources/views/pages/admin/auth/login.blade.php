@extends('layouts.admin-auth')
@section('content')
    <div class="main p-2 py-3 p-xl-5 ">

        <!-- Body: Body -->
        <div class="body d-flex p-0 p-xl-5">
            <div class="container-xxl">

                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                        <div style="max-width: 25rem;">
                            <div class="text-center mb-5">
                                <i class="bi bi-bag-check-fill  text-primary" style="font-size: 90px;"></i>
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">A few clicks is all it takes.</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="{{asset('admin/images/login-img.svg')}}" alt="login-img">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 shadow-sm" style="max-width: 32rem;">
                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}" class="row g-1 p-3 p-md-4">
                                @csrf
                                <div class="col-12 text-center mb-5">
                                    <h1>Sign in</h1>
                                    <span>Only Admin can access Dashboard</span>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email address</label>
                                        <input type="email" name="email" required class="form-control form-control-lg" placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password
                                                    <a class="text-secondary" href="#">Forgot Password?</a>
                                                </span>
                                        </div>
                                        <input type="password" name="password" class="form-control form-control-lg" placeholder="***************" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin">SIGN IN</button>
                                </div>

                            </form>
                            <!-- End Form -->

                        </div>
                    </div>
                </div> <!-- End Row -->

            </div>
        </div>

    </div>
@endsection

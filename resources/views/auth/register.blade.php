@extends('layouts.auth')

@section('content')
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create Account</h1>
                                    </div>
                                    <form class="user" action="{{ route('account.registerUser') }}" method="POST">

                                        @include('layouts.alerts_block')

                                        @csrf

                                        <div class="form-group">

                                            <input type="email"
                                                class="form-control form-control-user h-45px fs-13px @error('email') is-invalid @enderror"
                                                name="email" id="email" value="{{ old('email') }}"
                                                placeholder="Email" />



                                            @error('email')
                                                <div class="invalid-feedback text-bold" style="color: #f50909;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            {{-- <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address..."> --}}
                                            <input type="text"
                                                class="form-control form-control-user h-45px fs-13px @error('username') is-invalid @enderror"
                                                name="username" id="username" value="{{ old('username') }}"
                                                placeholder="Full Name" />

                                            {{-- <span class="input-group-text">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span> --}}

                                            @error('username')
                                                <div class="invalid-feedback text-bold" style="color: #f40505;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-user h-45px fs-13px @error('password') is-invalid @enderror"
                                                name="password" id="password" value="{{ old('password') }}"
                                                placeholder="Password" />

                                                @error('password')
                                                <div class="invalid-feedback text-bold" style="color: #f40505;">{{ $message }}
                                                </div>
                                            @enderror

                                            {{-- <span class="input-group-text password-toggle mr-3"
                                                onclick="togglePasswordVisibility()">
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                            </span>
                                            <span class="input-group-text border-primary text-white"
                                                style="background-color: #12089b" data-bs-toggle="tooltip"
                                                data-bs-html="true" data-bs-placement="right"
                                                title="Password Guidelines <hr><li>Must be 8 characters long</li><li>Must contain lowercase and uppercase</li><li>Must have atleast a number</li>">
                                                <i class="fa fa-question" aria-hidden="true"></i>
                                            </span> --}}
                                        </div>

                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-user h-45px fs-13px @error('confirm_password') is-invalid @enderror"
                                                name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}"
                                                placeholder="Confirm Password" />

                                                @error('confirm_password')
                                                <div class="invalid-feedback text-bold" style="color: #f40505;">{{ $message }}
                                                </div>
                                            @enderror


                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Create Account
                                        </button>
                                        <hr>

                                    </form>
                                    {{-- <form action="{{ route('login.user') }}" method="POST" class="fs-13px user">

                                        @include('layouts.portal.alerts_block')

                                        @csrf

                                        <div class="input-group mb-15px">
                                            <input type="text"
                                                class="form-control h-45px fs-13px @error('username') is-invalid @enderror"
                                                name="username" id="username" value="{{ old('username') }}"
                                                placeholder="Username" />

                                            <span class="input-group-text">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>

                                            @error('username')
                                                <div class="invalid-feedback text-bold" style="color: #fff;">{{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group mb-15px">
                                                    <input type="password"
                                                        class="form-control h-45px fs-13px @error('password') is-invalid @enderror"
                                                        name="password" id="password" value="{{ old('password') }}"
                                                        placeholder="Password" />

                                                    <span class="input-group-text password-toggle mr-3"
                                                        onclick="togglePasswordVisibility()">
                                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                    </span>
                                                    <span class="input-group-text border-primary text-white"
                                                        style="background-color: #12089b" data-bs-toggle="tooltip"
                                                        data-bs-html="true" data-bs-placement="right"
                                                        title="Password Guidelines <hr><li>Must be 8 characters long</li><li>Must contain lowercase and uppercase</li><li>Must have atleast a number</li>">
                                                        <i class="fa fa-question" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>

                                        </div>



                                        <div class="form-check mb-30px">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        name="remember" id="remember" />
                                                    <label class="form-check-label text-white" for="remember">
                                                        Remember Me
                                                    </label>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <label class="form-check-label text-white" for="remember">
                                                        <i class="fa fa-lock"></i> <a
                                                            href="{{ route('account.forgotPassword') }}"
                                                            style="color: #fff;">Forgot Password</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-15px">
                                            <button type="submit" style="background-color: #12089b;"
                                                class="btn d-block h-45px w-100 btn-lg fs-14px text-white">Sign me
                                                in <i class="fa fa-sign-in-alt"></i> </button>
                                        </div>
                                        <div class="mb-10px pb-40px text-white">
                                            Don't have an account ? Click <a href="{{ route('account.register') }}"
                                                style="color: #fff;">here</a> to
                                            register.
                                        </div>
                                        <hr class="text-white" />
                                        <div class="text-white text-center  mb-0">
                                            &copy; Smart Parking System <?= date('Y') ?> -
                                        </div>
                                    </form> --}}
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('account.login')}}">Already have an account? Login</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection()

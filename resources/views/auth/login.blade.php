@extends('layouts.auth')
@section('title','Login')
@section('content')
    <div class="card">
        <div class="card-header text-center bg-primary">
            <a href="{{route('lading')}}">
                <span><img src="{{asset('assets/images/mbttlogo.png')}}" alt=""
                           style="border-radius: 50%;max-height: 120px"></span>
                <h2 style="color: #fff">{{env('APP_NAME')}}</h2>
            </a>
        </div>
        <div class="card-body p-4">
            <div class="text-center w-75 m-auto">
                <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
            </div>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="emailaddress" class="form-label">Email address</label>
                    <input value="{{old('email')}}" name="email"
                           class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress"
                           placeholder="Enter your email">
                    @error('email')
                    <div class="invalid-feedback d-block" role="alert">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group input-group-merge">
                        <input name="password" type="password" id="password"
                               class="form-control @error('password') is-invalid @enderror"
                               placeholder="Enter your password">
                        <div class="input-group-text" data-password="false">
                            <span class="password-eye"></span>
                        </div>
                    </div>
                    @error('password')
                    <div class="invalid-feedback d-block" role="alert">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 mb-3">
                    <div class="form-check">
                        <input name="remember" type="checkbox" class="form-check-input" id="checkbox-signin" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="checkbox-signin">Remember Me</label>
                    </div>
                </div>

                <div class="mb-3 mb-0 text-center">
                    <button class="btn btn-primary" type="submit"> Log In</button>
                </div>

            </form>
        </div> <!-- end card-body -->
    </div>
    <div class="row mt-3">
        <div class="col-12 text-center">
            <p class="text-muted">Don't have an account? <a href="{{route('register')}}" class="text-muted ms-1"><b>Sign
                        Up</b></a></p>
        </div>
    </div>
@endsection

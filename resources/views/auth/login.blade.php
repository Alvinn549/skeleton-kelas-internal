@extends('layouts.auth.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('do-login') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" id="inputEmail" type="email"
                                placeholder="name@example.com" />
                            <label for="inputEmail">Email address</label>
                        </div>
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-floating mb-3">
                            <input class="form-control" name="password" id="inputPassword" type="password"
                                placeholder="Password" />
                            <label for="inputPassword">Password</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="1" />
                            <label class="form-check-label" for="inputRememberPassword">Remember
                                Password</label>
                        </div>
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="mt-4 mb-0">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="/register">Need an account? Sign up!</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection

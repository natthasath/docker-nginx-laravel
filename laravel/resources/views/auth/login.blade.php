@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row justify-content-center mh-100" style="min-height: 750px; align-items: center;">
        <div class="col-md-5">
            <div class="card border-light bg-white py-xs-2 my-xs-2"  style="padding: 2rem 0rem 2rem 0rem; margin: 5rem 2rem 5rem 2rem; ">
                <div class="card-body ">
                    <h4 class="py-4"><center>ลงชื่อเข้าใช้งาน</center></h4>
                    <form method="POST" action="{{ route('authenticate') }}">
                        @csrf

                        <div class="row mb-4 justify-content-center">
                            <div class="col-sm-10">
                                <input id="email" type="email" class="form-control-lg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="บัญชีผู้ใช้งาน" style="flex: 1;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2 justify-content-center">
                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control-lg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="รหัสผ่าน" style="flex: 1;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-sm-10 offset-sm-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __(' จดจำรหัสผ่าน') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2 justify-content-center">
                            <div class="col-sm-12">
                                <center>
                                    <button type="submit" class="btn btn-block btn-primary col-sm-10 ">
                                        {{ __('เข้าสู่ระบบ') }}
                                    </button>
                                </center>
                            </div>
                        </div>
                        <div class="row mb-2 justify-content-center">
                            <div class="col-sm-12">
                                {{-- @if (Route::has('password.request')) --}}
                                <center>
                                    <a class="btn btn-block btn-white col-sm-10" href="">
                                        {{ __('ลืมรหัสผ่าน') }}
                                    </a>
                                {{-- @endif --}}
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

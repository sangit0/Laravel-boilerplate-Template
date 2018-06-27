@extends('layouts.app')
@section('content')
<div class="login-box">
        <div class="login-box-body">
                <div class="login-logo">
                        <a href="/login"><b>{{ config('app.name') }} </b>{{ config('app.name_last') }} </a>
                </div>    
                
                @if ($message = Session::get('error'))
                @alert(['type' => 'danger'])
                    {{$message}} 
                @endalert
                @endif                    
                <p class="login-box-msg">Sign in to start your session</p>

                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
               
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif                        
                        </div>
                        
                        <div class="checkbox icheck">
                                <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="flat-red" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                </div>
                        </div>
                            <br><br>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <br><br>
 
                    </form> 
            </div>
</div>
@endsection

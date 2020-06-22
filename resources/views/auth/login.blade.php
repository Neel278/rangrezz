@extends('layouts.master')

@section('content')
<div class="container box-shadow p-5 m-5">
    <div class="row">
     
      <div class="col-md-6">
         <form class="form p-5" action="{{route('login')}}" method="post">
            @csrf
         <i class="fas fa-user fa-5x" style="color: #0099ff;"></i>
         <br>
         <br>
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} > Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="buyer">Sign in</button>
              <p>Don't have an Account?<a href="{{route('register')}}" title="">click here.</a></p>
              <p>Forgot Password?<a href="{{ route('password.request') }}" title="">click here.</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
      </form>
        
      </div>
    
       <div class="col-md-6 text-center " style=" background-color: #0099ff; color:white;" >
        <div class="align-self-center">
          <br>
          <br>
        <h1 style="font-size: 2rem;text-decoration: underline;">Login for Buyer</h1>
        <br>
        <br>
        <p>The login page  having two login  forms ,<br>(1)Login for seller : for those, who wants to sell their artworks.<br>(2)login for Buyer : for those, who wants to buy artworks from art auctions.</p>
      </div>
      </div>
        
      </div>
  </div>
  <br>
  <br>
  <br>
@endsection

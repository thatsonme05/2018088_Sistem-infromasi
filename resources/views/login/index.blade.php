@extends('layouts.main')

@section('container')

@if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
  </div>
@endif 

<div class="row justify-content-center">
  <div class="col-md-4">
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif 

    <main class="form-signin w-100 m-auto">
      <img class="mb-4" src="img/logo.jpg" alt="" width="100" height="80">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Name@example.com" autofocus required value="{{ old('email')}}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <small>Not Registered? <a href="/register">Register Now!</a></small>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2023</p>
      </form>
    </main>
  </div>
</div>

@endsection

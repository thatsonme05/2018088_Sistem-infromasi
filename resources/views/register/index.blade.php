@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
<main class="form-registration w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">From Registeration</h1>
  <form action="/register" method="post">
    @csrf
  <div class="form-floating">
        <label for="username">Username</label>
      <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" 
      id="username"placeholder="Username" required value="{{ old('username') }}">
    </div>
  <div class="form-floating">
        <label for="name">Name</label>
      <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" 
      id="name" placeholder="Name"required value="{{ old('name') }}">
    </div>
    <div class="form-floating">
        <label for="floatingInput">Email address</label>
      <input type="email" name="email" class="form-control @error('email')is-invalid @enderror"
      id="email"placeholder="name@example.com"required value="{{ old('email') }}">
    </div>
    <div class="form-floating">
        <label for="floatingPassword">Password</label>
      <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" 
      id="password" placeholder="Password">
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
    <small>Already Registered? <a href="/login">Login</a></small>
  </form>
</main>
    </div>
</div>

@endsection
@extends('layouts.mainAuth')

@section('title', 'Login')

@section('content')

   <div class="main d-flex justify-content-center align-items-center">
    <div class="login-box">

      <form action="" method="POST">
        @csrf
        <div>
          <h1>Login</h1>
            @if (Session('status'))
            <div class="alert alert-danger">
                {{Session('message')}}
            </div>
            @endif
        </div>
        <div >
          <label for="username"> Username </label>
          <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div >
          <label for="password"> Password </label>
          <input type="Password" name="password" id="password" class="form-control" required>
        </div>
        <div >
          <button type="submit" class="btn btn-primary form-control" > Login</button>
        </div>
        <div class="text-center">
            don't have acount?
          <a href="/register" style="text-decoration: none;"> sign up</a>
        </div>
      </form>
    </div>
   </div>

@endsection

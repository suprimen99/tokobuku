@extends('layouts.mainAuth')

@section('title', 'Register')
@section('content')



   <div class="main d-flex justify-content-center align-items-center">
    <div class="register-box">

      <form action="" method="POST">
        @csrf
        <div>
          <h1>Register</h1>
          @if (Session('status'))
          <div class="alert alert-success form-control">
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
            <label for="phone"> Phone </label>
            <input type="text" name="phone" id="phone" class="form-control" required>
          </div>
        <div >
        <div >
            <label for="address"> Address </label>
            <textarea name="address" id="address" class="form-control" ></textarea>
          </div>
        <div >
          <button type="submit" class="btn btn-primary form-control" > Registrasi</button>
        </div>
        <div class="text-center">
            Have Acount?
          <a href="/login" style="text-decoration: none;" > Login</a>
        </div>
      </form>
    </div>
   </div>
@endsection

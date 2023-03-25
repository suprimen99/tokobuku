<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <style>

    .main{
      height: 100vh;
      box-sizing: border-box;
    }

    .login-box{
      width: 500px;
      border: solid 1px;
      border-radius: 20px;
      padding: 20px;
    }

    .login-box form div{
      padding: 5px;
    }

    .login-box form div h1{
      display: block;
      text-align: center;
    }
  </style>
  <body>

   <div class="main d-flex justify-content-center align-items-center">
    <div class="login-box">
      @if (Session('status'))
      <div class="alert alert-danger">
        {{Session('message')}}
      </div>
      @endif
      <form action="" method="POST">
        @csrf
        <div>
          <h1>Login</h1>
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
        <div>
          <a href="#"> sign up</a>
        </div>
      </form>
    </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
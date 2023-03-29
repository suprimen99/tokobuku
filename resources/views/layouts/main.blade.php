<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">

    <title>Halaman | @yield('title')</title>
  </head>
  <body>

    <div class="main d-flex flex-column justify-content-between">

        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Perpustakaan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            </div>
          </nav>

          <div class="body-content h-100">
                <div class="row g-0 h-100">
                        <div class="sidebar col-2">
                            <ul>
                                @if (Auth::user()->role_id == 1 )
                                     <li><a href="#">Dashboard</a></li>                           <li><a href="#">Books</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Users</a></li>
                                    <li><a href="#">Rent Log</a></li>
                                    <li><a href="#">Logout</a></li>
                                @endif

                                @if (Auth::user()->role_id == 2)
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Logout</a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="content col-10 p-5">
                            @yield('content')
                        </div>
                </div>
          </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>

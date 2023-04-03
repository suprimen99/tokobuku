<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">

    <title>Halaman | @yield('title')</title>
  </head>
  <body>

    <div class="main d-flex flex-column justify-content-between">

        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Perpustakaan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>

          <div class="body-content h-100 ">
                <div class="row g-0 h-100 ">
                        <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo01">
                                @if (Auth::user()->role_id == 1 )
                                     <li><a href="dashboard" @if (request()->Route()->uri == 'dashboard')
                                    class="active"
                                     @endif >Dashboard</a></li>
                                     <li><a href="books" @if (request()->Route()->uri == 'books')
                                        class="active"
                                         @endif >Books</a></li>
                                    <li><a href="categories"  @if (request()->Route()->uri == 'categories' || request()->Route()->uri == 'category-add' || request()->Route()->uri == 'category-delete/{slug}' || request()->Route()->uri == 'category-edit/{slug}')
                                        class="active"
                                         @endif >Categories</a></li>
                                    <li><a href="users"  @if (request()->Route()->uri == 'users')
                                        class="active"
                                         @endif >Users</a></li>
                                    <li><a href="rent_logs"  @if (request()->Route()->uri == 'rent_logs')
                                        class="active"
                                         @endif>Rent Log</a></li>
                                    <li><a href="logout">Logout</a></li>
                                @endif

                                @if (Auth::user()->role_id == 2)
                                    <li><a href="profile" @if (request()->Route()->uri == 'profile')
                                        class="active"
                                         @endif>Profile</a></li>
                                    <li><a href="logout">Logout</a></li>
                                @endif
                        </div>
                        <div class="content col-lg-10 p-5">
                            @yield('content')
                        </div>
                    </div>
          </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
  </body>
</html>

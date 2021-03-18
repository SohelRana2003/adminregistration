<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('assets\darktheme\css\bootstrap.min.css') }}">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets\darktheme\css\fontawesome-icon\css\all.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets\darktheme\scss\custom.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto flex-nowrap">
              <li class="nav-item">
                <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#Singin">Sing in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#Singin">Sing up</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Settings
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="darkSwitch">
                        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                    </div>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    

    <!-- jQuery -->
    <script src="{{ asset('assets\darktheme\js\jquery-3.5.1.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets\darktheme\js\bootstrap.bundle.min.js') }}"></script>
    <!-- Dark Mode -->
    <script src="{{ asset('assets\darktheme\js\Dark Mode\dark-mode-switch.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('assets\darktheme\js\main.js') }}" defer></script>

</body>
</html>
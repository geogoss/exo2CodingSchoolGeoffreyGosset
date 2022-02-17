<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}} ">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('classe')}} ">Classe</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')

 
      <footer class="bg-dark text-white fixed-bottom d-flex justify-content-around align-items-center">
          <p class="fs-3 fw-bold ">Footer</p>
          <p class="fs-3 fw-bold ">Exo2CodingSchool</p>
          <p class="fs-3 fw-bold ">copy right GG company</p>

      </footer>


      <script src="{{asset('js/app.js')}} "></script>
</body>
</html>
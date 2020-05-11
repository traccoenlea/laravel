<!DOCTYPE html>
<html>
<head>
    <title>Comparateur d'ordi</title>
    <meta charset="utf-8">
    <!-- css ???? -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- bootstrapp -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <!-- quote -->
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet"> 

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/">LOGO</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ordinateurs"><i class="fas fa-desktop"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/search/{$s}"><i class="fas fa-desktop"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/marques"><i class="fas fa-desktop"></i></a>
              </li>
            </ul>
            <form method="POST" id="search" class="form-inline my-2 my-lg-0">
              <input name="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button name="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>

        @yield('content')
    </div>

    <footer class="content"
      style="
        background-color: grey;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
        margin-top: 100px;
      ">
      footer
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

</body>
</html>






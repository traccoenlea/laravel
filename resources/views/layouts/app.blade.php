<style type="text/css">
    *{
        font-family: 'Varela Round', sans-serif;
        margin: 0;
        padding:0;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;

    }

    h1, h2, h3{
        padding-top: 50px;
        padding-bottom: 50px;
        text-align:center;
    }


    /*liste des ordinateurs*/
    .ordinateurs{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }


    /*comparateur*/
    .comparateur{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
        .comparateur .list-item-ordi{
            display: flex;
        }



</style>

<!DOCTYPE html>
<html>
<head>
    <title>Comparateur d'ordi</title>
    <meta charset="utf-8">
    <!-- css ???? -->
    <link rel="stylesheet" type="text/css" href="/public/css/app.css"> 
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
          <a class="navbar-brand" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/ordinateurs">Ordinateurs</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>

        @yield('content')
    </div>

</body>
</html>






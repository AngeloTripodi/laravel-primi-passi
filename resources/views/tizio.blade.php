<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tizio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid justify-content-center">
                <div id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('tizio') }}">Tizio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('caio') }}">Caio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pippo') }}">Pippo</a>
                    </li>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="m-5">
            <div class=" container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.litalianovero.it/wp/wp-content/uploads/2019/11/pinco-pallino-490x460.jpg" class="card-img-top" alt="tizio">
                            <div class="card-body">
                              <h3 class=" card-title"> Tizio</h3>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
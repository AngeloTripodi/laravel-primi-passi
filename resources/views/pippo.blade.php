<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pippo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid justify-content-center">
                <div id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{!! route('homepage') !!}">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('tizio') !!}">Tizio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{!! route('caio') !!}">Caio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{!! route('pippo') !!}">Pippo</a>
                    </li>
                </div>
            </div>
        </nav>
    </header>

    <main>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
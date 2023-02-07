<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid justify-content-center">
                <div id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{!! route('homepage') !!}">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('tizio') !!}">Tizio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{!! route('caio') !!}">Caio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('pippo') !!}">Pippo</a>
                    </li>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1 class=" m-5 text-center">HOMEPAGE!!!!</h1>

    <main>
        <div class="m-5">
            <div class=" container">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.litalianovero.it/wp/wp-content/uploads/2019/11/pinco-pallino-490x460.jpg" class="card-img-top" alt="tizio">
                            <div class="card-body">
                              <h3 class=" card-title"> Tizio</h3>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/342afac0-d9d1-4032-a984-a0da66c6a493/dfi2xft-b0fa037c-4337-4137-a601-3bedbfa66c7b.png/v1/fill/w_1280,h_1363,strp/re_kaio_by_19onepiece90_dfi2xft-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTM2MyIsInBhdGgiOiJcL2ZcLzM0MmFmYWMwLWQ5ZDEtNDAzMi1hOTg0LWEwZGE2NmM2YTQ5M1wvZGZpMnhmdC1iMGZhMDM3Yy00MzM3LTQxMzctYTYwMS0zYmVkYmZhNjZjN2IucG5nIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.70i5EL7tdMwdCCp7XgsDl62eNkjmYdwZzVy0IWjctPc" class="card-img-top" alt="Caio">
                            <div class="card-body">
                              <h3 class=" card-title"> Caio</h3>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                        </div>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://it.wikifur.com/w/images/thumb/e/e5/Goofy.png/404px-Goofy.png" alt="Pippo">
                            <div class="card-body">
                              <h3 class=" card-title"> Pippo</h3>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
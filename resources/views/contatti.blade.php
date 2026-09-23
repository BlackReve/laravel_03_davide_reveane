<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MediaBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder" href="#">MEDIABOOK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chiSiamo') }}">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Servizi
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('book.list') }}">I nostri libri</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container-fluid header">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="col-12 h-25 justify-content-center align-items-center d-flex">
                    <h2 class="text-danger display-4 fw-bold">CONTATTI</h2>
                </div>
                <div
                    class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                    <div class="row">
                        <div class="col-12">
                            <i class="icon bi bi-whatsapp"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Scrivici su whatsapp</p>
                        </div>
                    </div>


                </div>
                <div
                    class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                    <div class="row">
                        <div class="col-12">
                            <i class="icon bi bi-instagram"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Seguici su instagram</p>
                        </div>
                    </div>


                </div>
                <div
                    class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                    <div class="row">
                        <div class="col-12">
                            <i class="icon bi bi-facebook"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>Seguici su facebook</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </header>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>

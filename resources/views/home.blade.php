<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/home">PF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Головна</a>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Вихід</button>
            </form>
        </div>
    </div>
</nav>

<div class="container py-5">
    <h1> Welcome, {{ Auth::user()->name }}</h1>

    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 py-4">
        <div class="card border-0 bg-light rounded shadow">
            <div class="card-body p-4">
                <span class="badge rounded-pill bg-danger float-md-end mb-3 mb-sm-0">Видалити</span>
                <h5>Назва бюджету</h5>

                <div class="mt-3 pt-5 mt-5">
                    <a href="#" class="btn btn-primary">Деталі</a>
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('budgetCreationForm') }}">
        <button type="button" class="btn btn-lg btn-outline-primary">Створити новий бюджет</button>
    </a>

</div>






</body>
</html>

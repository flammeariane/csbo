<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title') </title>
</head>
<body>
<header>
    <section class="container">
            <div class="row">
                    <div class="col-8 mt-4 pl-5"><h2>@yield('title')</h2></div>
                    <div class="col-4"><img src="{{ asset('logo2.png') }}" alt="logo"></div>
            </div>
    </section>
</header>

@yield ('content')

    <button type="submit" value="retour" class="btn btn-outline-danger">
        <a href="/">Retour</a>
    </button>

</body>
</html>
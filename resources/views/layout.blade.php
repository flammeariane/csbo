<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title') </title>
    @stack('style')
    
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
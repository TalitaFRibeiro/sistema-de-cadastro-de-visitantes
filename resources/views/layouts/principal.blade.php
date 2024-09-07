<!doctype html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" lang="pt-br" dir="ltr"> <![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" lang="pt-br" dir="ltr"> <![endif]-->
<!--[if IE 8]><html class="lt-ie9" lang="pt-br" dir="ltr"> <![endif]-->
<!--[if IE 9]><html class="lt-ie10" lang="pt-br" dir="ltr"> <![endif]-->
<html lang="pt-br" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Projeto DER</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" integrity="sha256-Q9c+RVayp4Y4gEKE3jaABDEwnMlDf6cFEWEQSzFaOB8=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asap+Condensed|Roboto+Condensed|Nunito:200,600|Iceland&display=swap">

    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}" type="text/css">


    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</head>
<body style="background-image: url(http://cdn.der.rj/Imagens/background-estrada.jpg);">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



{{--<nav class="navbar bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><p> SISTEMA DE CADASTRO DE ACESSO DE VISITANTES</p></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Registrar Acesso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Visitantes</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link active" href="#">Trocar Senha</a>
                </li>


            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>--}}


<nav class="navbar navbar-dark p-1 mb-2 text-white" style="background-color: #066820;" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand link-light" href="{{route('visitante.index')}}"><h2 style="font-family: 'Iceland', cursive">DER // SISTEMA DE CONTROLE DE ACESSO DE VISITANTES</h2></a>

    <ul class = "nav justify-content-end">
        <li class="nav-item ">
            <a class="nav-link active link-light" aria-current="page" href="{{route('visitante.create')}}">Cadastrar Visitante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active link-light" href="{{route('visitante.index')}}">Visitantes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active link-light" href="{{route('relatorio.index')}}">Relatório</a>
        </li>
        <li class="nav-item">
            @if (Route::has('password.request'))
                <a class="nav-link active link-light" href="{{ route('password.request') }}">
                    Trocar senha </a>
            @endif
        </li>

        <li class="nav-item">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link active link-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link active link-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link link-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest

    </ul>
    </div>

</nav>
    <div style="width: fit-content; height: fit-content; position: absolute; top: 50%;left: 50%;transform: translate(-50%, -50%);">
        @yield('content')
    </div>
</>
</html>


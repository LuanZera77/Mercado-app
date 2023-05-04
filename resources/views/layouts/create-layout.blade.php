<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

</head>
<body>
    
    <main class="container d-flex justify-content-center">

        <section class="row d-flex justify-content-center align-items-center">
            <section class='card col-12 my-5'>    
    
                <section class="card-body">
    
                    <h1 class="card-title">@yield('form')</h1>
    
                    <hr>
    
                    @yield('content')
    
                </section>
            </section>
        </section>

    </main>

</body>
</html>
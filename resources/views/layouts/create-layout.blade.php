<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/e1b86b0aaa.js" crossorigin="anonymous"></script>

</head>
<body>
    
    <main class="container">

        <section class="row d-flex justify-content-center align-items-center">
            <section class='card col-4 '>    
    
                <section class="card-body">
    
                    <h2 class="card-title text-center">@yield('form')</h2>
    
                    <hr>
    
                    @yield('content')
    
                </section>
            </section>
        </section>

    </main>

</body>
</html>
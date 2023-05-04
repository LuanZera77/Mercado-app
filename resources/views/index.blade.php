<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e1b86b0aaa.js" crossorigin="anonymous"></script>

</head>
<body>
    <main>
        <div class="row">
        
            <!-- Card 1 -->
            <div   class="btn col d-flex align-content-center justify-content-center">              
                <a href="{{route('produtos.index')}}">
                        <div class="card">
                        <i class="fa-sharp fa-solid fa-boxes-stacked"></i>
                            <div class="card-body">
                                <h5 class="card-title">Produtos</h5>
                            </div>
                        </div>
                </a>
            </div>
            <!-- End Card 1 -->
    
            <!-- Card 2 -->
            <div class="btn col d-flex align-content-center justify-content-center">              
               <a href="{{route('categoria.index')}}">
                    <div class="card">
                        <i class="fa-solid fa-book"></i>
                        <div class="card-body">
                            <h5 class="card-title">Categoria</h5>
                        </div>
                    </div>
               </a>
            </div>
            <!-- End Card 2 -->
        </div>
    </main>
</body>
</html>
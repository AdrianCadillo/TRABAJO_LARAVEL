
{{--- CDN DE BOOTSTRAP ------}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
      body{
        background-image: linear-gradient(65deg, #b0bfdf 0, #878a91 50%, #5d584a 100%);
      }  
    </style>

</head>
<body>
    <x-navbar></x-navbar>
    <div class="container mt-5">
       <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 col-md-7 col-sm-10 col-12">
            <div class="card border-primary">
                <div class="card-header bg-info text-white">
                    <h4><b>L</b>ogín</h4>
                </div>
    
                <div class="card-body">
                   <div class="col">
                                         
                    <form action="" method="post">
                        @csrf {{--- TOKEN DE ENVIO DE DATOS (SEGURIDAD)----}}
                        <label for="username" class="form-label"><b>Username</b></label>
                        <input type="text" name="username" id="username" class="form-control"
                        placeholder="nombre de usuario" autofocus>

                        <label for="pasword" class="form-label"><b>Password(*)</b></label>
                        <input type="password" class="form-control" name="pasword" id="pasword"
                        placeholder="Password">

                        <div class="mt-2">
                            <button class="btn btn-primary col-12" ><i class="fas fa-sign-in"></i> Entrar</button>
                        </div>
                    </form>
                    <div class="mt-1">
                        <button class="btn btn-danger btn-blok col-12" onclick="location.href='/register'">Registrate <i class="fas fa-user"></i></button>
                    </div>

                   </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</body>
</html>
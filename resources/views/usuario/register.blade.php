
{{--- CDN DE BOOTSTRAP ------}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container mt-5">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <div class="float-start"><h4>Registro de usuarios</h4></div>

                <div class="float-end">
                    <button class="btn btn-warning" onclick="location.href='/login'"><b><i class="fas fa-sign-in"></i>Login</b></button>
                </div>
            </div>

            <div class="card-body">
                <div class="col">
                    <form action="" method="post">
                        @csrf {{--- TOKEN DE ENVIO DE DATOS (SEGURIDAD)----}}

                        <label for="username" class="form-label"><b>Username (*)</b></label>
                        <input type="text" class="form-control" name="username" id="username"
                        placeholder="Ingrese nombre de usuario" autofocus autocomplete="username" required>

                        <label for="email" class="form-label"><b>Email (*)</b></label>
                        <input type="email" class="form-control" name="email" id="email"
                        placeholder="Ingrese un email [email@gmail.com]"  autocomplete="username" required>

                        <label for="pasword" class="form-label"><b>Password(*)</b></label>
                        <input type="password" class="form-control" name="pasword" id="pasword"
                        placeholder="Ingrese una contraseña"  autocomplete="username" required>

                        <div class="text-center mt-3">
                            <button class="btn btn-outline-success"><b>Registrarme</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
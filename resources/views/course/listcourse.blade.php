
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <x-navbar></x-navbar>
    <div class="container mt-1">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <div class="float-start"><h4>Listado de cursos</h4></div>

                 
            </div>

            <div class="card-body">
                <div class="col">
                    <table id="tabla-usuarios" class="table table-striped" style="width:100%"> 
                         <thead>
                            <tr>
                                <th>ITEM</th>
                                <th>Nombre curso</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                            </tr>
                         </thead>

                         <tbody>
                            @foreach ($cursos as $curso)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$curso->name_curso}}</td>
                                    <td>{{$curso->categoria}}</td>
                                    <td>{{$curso->precio}}</td>
                                </tr>
                            @endforeach
                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{--- datatable js ---}}

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#tabla-usuarios').DataTable({})
        })
    </script>
</body>
</html>
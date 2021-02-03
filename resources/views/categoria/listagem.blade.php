<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Categorias</title>
  </head>
  <div class="container">
    <body>

        <h1>Categorias</h1>
        <a class="btn btn-primary" href="categoria/novo">Novo</a>
        <table class="table table-striped table-bordered">
            <thead class="table table-striped table-bordered">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    {{-- <th scope="col" style="width:5rem"></th> --}}
                </tr>
            </thead>
            <tbody>

            @foreach ($categorias as $categoria)
                <tr>
                    <th scope='row'>{{ $categoria['id']}}</th>
                    <td>{{ $categoria['descricao']}}</td>

                    <td>
                        <a class="btn btn-success" href="categoria/editar/{{$categoria['id']}}">Editar</a>

                        <a class="btn btn-danger" href="categoria/excluir{{$categoria['id']}}">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        -->
    </body>
</div> 
</html>


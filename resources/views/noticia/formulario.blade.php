<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Nova Notícia</title>
  </head>
  <div class="container">
    <body>


            <form action="categoria/salvar" method="POST">

                <div class="form-group">
                    <label for="id">ID</label>
                    <input readonly type="text" class="form-control" name="id" id="id" value="{{ $noticia['id']}}">
                </div>
                
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $noticia['titulo']}}">
                </div>

                <div class="form-group">
                    <label for="titulo">Descricao</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $noticia['descricacao']}}">
                </div>

                <div class="form-group">
                    <label for="titulo">data</label>
                    <input type="date" class="form-control" name="data" id="data" value="{{ $noticia['data']}}">
                </div>

                <div class="form-group">
                    <label for="titulo">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" value="{{ $noticia['cidade']}}">
                </div>

                <div class="form-group">
                    <label for="categoria_id">Categoria</label>
                    <select class="form-control" id="categoria_id" name="categoria_id">
                        <option value="">selecione</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria['id'] }}">{{ $categoria['descricao'] }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>

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


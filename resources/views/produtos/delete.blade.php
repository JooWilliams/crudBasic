<!-- resources/views/produtos/excluir.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produto</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Excluir Produto</h1>
        <p>Tem certeza que deseja excluir o produto <strong>{{ $produto->nome }}</strong>?</p>

        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="mb-3">
            @csrf
            @method('DELETE')
            <p>Você tem certeza que deseja excluir o produto: <strong>{{ $produto->nome }}</strong>?</p>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>

        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>

    </div>

    <!-- Script do Bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
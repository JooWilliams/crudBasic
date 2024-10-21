<!-- resources/views/produtos/show.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Produto</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Ver Produto</h1>

        <form action="" method="POST">
            @csrf

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" value="{{ $produto->nome }}" readonly>
            </div>

            <div class="form-group">
                <label for="custo">Custo</label>
                <input type="text" name="custo" class="form-control" value="{{ $produto->custo }}" readonly>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="text" name="preco" class="form-control" value="{{ $produto->preco }}" readonly>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" class="form-control" value="{{ $produto->quantidade }}" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

            @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
            @endif
        </form>

        <!-- Botão para retornar ao índice de produtos -->
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-3">Voltar para a Lista de Produtos</a>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
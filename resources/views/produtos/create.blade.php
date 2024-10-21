<!-- resources/views/produtos/cadastrar.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar um Novo Produto</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cadastrar um Novo Produto</h1>

        <form action="{{ route('registrar_produto') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="custo">Custo</label>
                <input type="number" name="custo" step="0.01" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" name="preco" step="0.01" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button> <!-- Botão estilizado -->
        </form>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
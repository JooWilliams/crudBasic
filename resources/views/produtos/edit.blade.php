<!-- resources/views/produtos/editar.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Produto</h1>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Adiciona o método PUT para atualização -->
            
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" value="{{ $produto->nome }}" required>
            </div>

            <div class="form-group">
                <label for="custo">Custo</label>
                <input type="number" name="custo" class="form-control" step="0.01" value="{{ $produto->custo }}" required>
            </div>

            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" name="preco" class="form-control" step="0.01" value="{{ $produto->preco }}" required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" value="{{ $produto->quantidade }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button> <!-- Botão estilizado -->
        </form>

    
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

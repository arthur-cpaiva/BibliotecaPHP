<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="container">

        <h1>Cadastro de Livros</h1>

        <form action="salvar.php" method="POST">

            <label for="titulo">Título do Livro:</label>
            <input
                type="text"
                id="titulo"
                name="titulo"
                required>
            <br><br>

            <label for="autor">Autor:</label>
            <input
                type="text"
                id="autor"
                name="autor"
                required>
            <br><br>

            <label for="editora">Editora:</label>
            <input
                type="text"
                id="editora"
                name="editora"
                required>
            <br><br>

            <label for="ano">Ano de Publicação:</label>
            <input
                type="number"
                id="ano"
                name="ano"
                required>
            <br><br>

            <button type="submit">Cadastrar Livro</button>

        </form>

        <p>
            <a href="listar.php">Ver livros cadastrados</a>
        </p>

    </div>

</body>

</html>
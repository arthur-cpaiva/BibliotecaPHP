<?php
require_once "conexao.php";
$sql = "SELECT id, titulo, autor, editora, ano_publicacao FROM livros ORDER BY id DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$livros = $stmt->fetchALL(PDO::FETCH_ASSOC);/*Puxar informações do banco de dados*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>
    <div class="container">
        <h1>Livros cadastrados</h1>
        <p>
            Total de pessoas:
            <strong><?= count($livros) ?></strong>
        </p>

        <table> 
            <thead>
                <th>ID</th>
                <th>Titulo do Livro</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>Ano de publicação</th>
            </thead>
            <tbody>
            <?php if (count($livros)>0):?>
                <?php foreach($livros as $livro): ?>
                    <tr>
                        <td><?= (int)$livro["id"]?></td>
                        <td>
                        <?= htmlspecialchars($livro["titulo"],ENT_QUOTES,"UTF-8")?>
                        </td>
                        <td><?= htmlspecialchars($livro["autor"],ENT_QUOTES,"UTF-8")?></td>
                        <td><?= htmlspecialchars($livro["editora"],ENT_QUOTES,"UTF-8")?></td>
                        <td><?= htmlspecialchars($livro["ano"],ENT_QUOTES,"UTF-8")?></td>
                        </tr>
                    <?php endforeach;?>
                    <?php else:?>
                        <tr>
                            <td colspan="4">Nenhum livro cadastrado</td>
                        </tr>
                        <?php endif; ?>
            </tbody>
        </table>
        <a href="index.php">Voltar ao cadastro</a>
    </div>





</body>

</html>
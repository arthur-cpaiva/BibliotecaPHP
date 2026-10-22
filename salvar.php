<?php
require_once "conexao.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = trim($_POST["titulo"] ?? "");
    $autor = trim($_POST["autor"] ?? "");
    $editora = trim($_POST["editora"] ?? "");
    $ano = trim($_POST["ano"] ?? "");
    if ($titulo == "" || $autor == "" || $editora == "" || $ano == "") {
        die("Preencha os campos.");
    }
    try {
        $sql = "INSERT INTO livros
        (Titulo,Autor,Editora,Ano_publicacao)
        VALUES
        (:titulo,:autor,:editora,:ano)";
        $smtp = $pdo->prepare($sql);
        $smtp->execute([
            ":titulo" => $titulo,
            ":autor" => $autor,
            ":editora" => $editora,
            ":ano" => $ano
        ]);
        echo "<h2>Cadastro realizado com sucesso</h2>";
        echo '<a href="index.php">Cadastrar outro livro</a>';
    } catch (PDOException $e) {
        echo ("Erro ao cadastrar o livro");
    }
} else {
    header("location:index.php");
    exit;
}

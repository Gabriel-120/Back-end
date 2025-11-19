<?php
require_once __DIR__ . '/../controller/Controller.php';

$controller = new LivrosController();
$acao = $_POST['acao'] ?? '';
$editarLivros = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($acao === 'criar') {
        $controller->criar(
            trim($_POST['$Titulo']),
            trim($_POST['Autor']),
            (int) $_POST['Ano'],
            trim($_POST['Genero']),
            (int) $_POST['Quantidade']
        );
        header('Location' . $_SERVER['REQUEST_URI']);
        exit;
    }

    if ($acao === 'deletar') {
        $controller->deletar(trim($_POST['Titulo']));
        exit;
    }

    if ($acao === 'editar') {
        $editarLivros = $controller->buscarPorTitulo(trim($_POST['Titulo']));
    }

    if ($acao === 'atualizar') {
        $controller->atualizar(
            trim($_POST['titulo_Original']),
            trim($_POST['Titulo']),
            trim($_POST['Autor']),
            (int) $_POST['Ano'],
            trim($_POST['Genero']),
            (int) $_POST['Quantidade']
        );
        header('Location' . $_SERVER['REQUEST_URI']);
        exit;
    }
}

$lista = $controller->ler();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciamento de Livros</title>
</head>
<body>

<div class="container">
    <div class="header">
        <div class="logo">
            <div class="mark">B</div>
            <div>
                <div class="title">Genrenciamento de Livros</div>
                <div class="subtitle">Painel de Controle - Somativa</div>
            </div>
        </div>
    </div>

<?php if ($editarLivros): ?>

    <form method="post">
        <input type="hidden" name="acao" value="atualizar">
        <input type="hidden" name="titulo_Original" value="<?= htmlspecialchars($editarLivros->getTitulo()) ?>">

        <input type="text" name="Titulo" placeholder="Título do livro" required velue="<?= htmlspecialchars($editarLivros->getTitulo()) ?>">
        <input type="text" name="Autor" placeholder="Nome do autor" required value="<?= htmlspecialchars($editarLivros->getAutor()) ?>">
        <input type="number" name="Ano" placeholder="Ano do lançamento" required value="<?= htmlspecialchars($editarLivros->getAno_publicacao()) ?>">
        <input type="text" name="Genero" placeholder="Genero do livro" required value="<?= htmlspecialchars($editarLivros->getGenero()) ?>">
        <input type="number" name="Quantidade" placeholder="Qunatidade disponivel" required value="<?= htmlspecialchars($editarLivros->getQuantidade()) ?>">

        <button type="submit">Atualizar</button>
    </form>

<?php else: ?>
    <form method="post">
        <input type="hidden" name="acao" value="criar">
        <input type="text" name="Titulo" placeholder="Título do livro" required>
        <input type="text" name="Autor" placeholder="Nome do autor" required>
        <input type="number" name="Ano" placeholder="Ano do lançamento" required>
        <input type="text" name="Genero" placeholder="Genero do livro" required>
        <input type="number" name="Quantidade" placeholder="Qunatidade disponivel" required>

        <button type="submit">Cadastrar</button>
    </form>

<?php endif; ?>

<hr>
<br><br>

<h2>Lista de Livros</h2>

<table border="1" callpadding="5" cellspacing="0">
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Ano Lançamento</th>
        <th>Genero</th>
        <th>Quantidade</th>
        <th>Ações</th>
    </tr>

    <?php if (!empty($lista)): ?>
        <?php foreach ($lista as $livros): ?>
            <tr>
                <td><?= htmlspecialchars($livros->getTitulo()) ?></td>
                <td><?= htmlspecialchars($livros->getAutor()) ?></td>
                <td><?= htmlspecialchars($livros->getAno_publicacao()) ?></td>
                <td><?= htmlspecialchars($livros->getGenero()) ?></td>
                <td><?= htmlspecialchars($livros->getQuantidade()) ?></td>
                <td>

                    <form method="post" style="display: inline;">
                        <input type="hidden" name="acao" value="editar">
                        <input type="hidden" name="Titulo" value="<?= htmlspecialchars($editarLivros->getTitulo()) ?>">
                        <input type="submit" class="edit" value="Editar">
                    </form>

                    <form method="post" style="display: inline;">
                        <input type="hidden" name="acao" value="deletar">
                        <input type="hidden" name="Titulo" value="<?= htmlspecialchars($editarLivros->getTitulo()) ?>">
                        <input type="submit" class="delete" value="Deletar" onclick="return confirm('Tem certeza que deseja deletar esta bebida?');">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="6">Nenhum livro cadastrado.</td></tr>
    <?php endif; ?>
</table>
</div>
</body>
</html>
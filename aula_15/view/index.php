<?php
namespace aula_15;

require_once __DIR__ . '/../controller/bebidasController.php';

$controller = new BebidasController();

// ações da página
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'salvar') {
        $controller->criar($_POST['nome'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'editar') {
        // Atualiza usando o nome original (chave) — o campo 'nome' ficará como readOnly durante a edição
        $controller->atualizar($_POST['nome_original'], $_POST['categoria'], $_POST['volume'], $_POST['valor'], $_POST['qtde']);
    } elseif ($_POST['acao'] === 'deletar') {
        $controller->deletar($_POST['nome']);
    }
}

$lista = $controller->ler();
?>

<!-- Formulário em HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de bebidas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Gerenciamento de bebidas</h1>
<br>
<hr>
    <div class="container">
    <form id="bebidaForm" method="POST">
        <input type="hidden" name="acao" id="acao" value="salvar">
        <input type="hidden" name="nome_original" id="nome_original" value="">
        <input type="text" name="nome" id="nome" placeholder="Nome da bebida:" required>
        <select name="categoria" id="categoria" required>
            <option value="">Selecione a categoria</option>
            <option value="Refrigerante">Refrigerante</option>
            <option value="Cerveja">Cerveja</option>
            <option value="Vinho">Vinho</option>
            <option value="Destilado">Destilado</option>
            <option value="Água">Água</option>
            <option value="Suco">Suco</option>
            <option value="Energético">Energético</option>
        </select>
        <input type="text" name="volume" id="volume" placeholder="Volume (ex: 300ml):" required>
        <input type="number" name="valor" id="valor" step="0.01" placeholder="Valor em Reais (R$):" required>
        <input type="number" name="qtde" id="qtde" placeholder="Quantidade em estoque:" required>
        <button type="submit" id="submitBtn">Cadastrar</button>
        <button type="button" id="cancelBtn" class="btn btn-cancel hidden" onclick="resetForm()">Cancelar</button>
    </form>

    <h2>Lista de bebidas cadastradas</h2>
    <?php if ($lista && count($lista) > 0): ?>
        <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Volume</th>
                    <th>Valor (R$)</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lista as $nome => $bebida): ?>
                <tr>
                    <td><?php echo htmlspecialchars($bebida->getNome()); ?></td>
                    <td><?php echo htmlspecialchars($bebida->getCategoria()); ?></td>
                    <td><?php echo htmlspecialchars($bebida->getVolume()); ?></td>
                    <td><?php echo htmlspecialchars($bebida->getValor()); ?></td>
                    <td><?php echo htmlspecialchars($bebida->getQtde()); ?></td>
                    <td class="actions">
                        <button type="button" class="btn btn-edit" onclick="editarBebida('<?php echo addslashes($bebida->getNome()); ?>','<?php echo addslashes($bebida->getCategoria()); ?>','<?php echo addslashes($bebida->getVolume()); ?>','<?php echo addslashes($bebida->getValor()); ?>','<?php echo addslashes($bebida->getQtde()); ?>')">Editar</button>
                        <form method="POST" onsubmit="return confirm('Confirma exclusão de <?php echo addslashes($bebida->getNome()); ?>?')">
                            <input type="hidden" name="acao" value="deletar">
                            <input type="hidden" name="nome" value="<?php echo htmlspecialchars($bebida->getNome()); ?>">
                            <button type="submit" class="btn btn-delete">Remover</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    <?php else: ?>
        <p>Nenhuma bebida cadastrada.</p>
    <?php endif; ?>

    <div class="footer-space"></div>
    </div>

    <script>
        function editarBebida(nome, categoria, volume, valor, qtde) {
            document.getElementById('acao').value = 'editar';
            document.getElementById('nome_original').value = nome;
            document.getElementById('nome').value = nome;
            // impedir alteração do nome (chave) durante edição
            document.getElementById('nome').readOnly = true;
            document.getElementById('categoria').value = categoria;
            document.getElementById('volume').value = volume;
            document.getElementById('valor').value = valor;
            document.getElementById('qtde').value = qtde;
            document.getElementById('submitBtn').textContent = 'Salvar alterações';
            document.getElementById('cancelBtn').style.display = 'inline-block';
            // rolar para o formulário
            document.getElementById('bebidaForm').scrollIntoView({behavior: 'smooth'});
        }

        function resetForm() {
            document.getElementById('acao').value = 'salvar';
            document.getElementById('nome_original').value = '';
            document.getElementById('nome').value = '';
            document.getElementById('nome').readOnly = false;
            document.getElementById('categoria').value = '';
            document.getElementById('volume').value = '';
            document.getElementById('valor').value = '';
            document.getElementById('qtde').value = '';
            document.getElementById('submitBtn').textContent = 'Cadastrar';
            document.getElementById('cancelBtn').style.display = 'none';
        }
    </script>
</body>
</html>
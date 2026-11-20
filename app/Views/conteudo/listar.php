<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdos</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">

</head>
<body>

<nav class="navbar">

<a href="<?= site_url('admin') ?>" class="nav-link active">
    Painel
</a>

<a href="<?= site_url('conteudos') ?>" class="nav-link">
    Conteúdos
</a>

<form action="<?= site_url('admin/sair') ?>" method="post" class="logout-form">

    <?= csrf_field() ?>

    <button type="submit" class="nav-link logout-button">
        Sair
    </button>

</form>

</nav>

<main class="container">

    <h1>Conteúdos cadastrados</h1>

    <?php if ($mensagem = session()->getFlashdata('mensagem')): ?>
        <p class="mensagem"><?= esc($mensagem) ?></p>
    <?php endif; ?>

    <?php if (empty($conteudos)): ?>
        <p>Nenhum conteúdo encontrado.</p>
    <?php else: ?>
        <div class="tabela-wrapper">
            <table class="tabela">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($conteudos as $item): ?>
                        <tr>
                            <td><?= esc($item['Id']) ?></td>
                            <td><?= esc($item['Titulo']) ?></td>
                            <td><?= nl2br(esc($item['Texto'] ?? '')) ?></td>
                            <td>
                                <a href="<?= site_url('conteudos/editar/' . $item['Id']) ?>" class="botao-editar">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>

</main>

</body>
</html>
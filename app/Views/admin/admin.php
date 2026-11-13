<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel administrativo</title>

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

        <h1>Painel administrativo</h1>

        <p>Escolha uma opção no menu para continuar.</p>

    </main>

</body>

</html>
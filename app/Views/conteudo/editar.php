
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar conteúdo</title>
</head>
<body>
    <h1>Editar conteúdo #<?= esc($conteudo['Id']) ?></h1>

    <?php if (!empty($erros)): ?>
        <div>
            <p>Verifique os campos:</p>
            <ul>
                <?php foreach ($erros as $erro): ?>
                    <li><?= esc($erro) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form
        method="post"
        action="<?= site_url('conteudos/atualizar/' . $conteudo['Id']) ?>"
    >
        <?= csrf_field() ?>

        <div>
            <label for="Titulo">Título</label>
            <input
                type="text"
                id="Titulo"
                name="Titulo"
                maxlength="255"
                value="<?= esc($conteudo['Titulo'] ?? '') ?>"
                required
            >
        </div>

        <div>
            <label for="Texto">Texto</label>
            <textarea
                id="Texto"
                name="Texto"
                rows="10"
                required
            ><?= esc($conteudo['Texto'] ?? '') ?></textarea>
        </div>

        <button type="submit">Salvar</button>
        <a href="<?= site_url('conteudos') ?>">Cancelar</a>
    </form>
</body>
</html>
<?= $this->extend('admin/main') ?>

<?= $this->section('conteudo') ?>

    <h1>Editar conteúdo #<?= esc($conteudo['Id']) ?></h1>

    <?php if (!empty($erros)): ?>
        <div class="mensagem">
            <p>Verifique os campos:</p>
            <ul>
                <?php foreach ($erros as $erro): ?>
                    <li><?= esc($erro) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form
        class="form-conteudo"
        method="post"
        action="<?= site_url('conteudos/atualizar/' . $conteudo['Id']) ?>"
    >
        <?= csrf_field() ?>

        <div class="form-conteudo__campo">
            <label class="form-conteudo__label" for="Titulo">Título</label>
            <input
                class="form-conteudo__input"
                type="text"
                id="Titulo"
                name="Titulo"
                maxlength="255"
                value="<?= esc($conteudo['Titulo'] ?? '') ?>"
                required
            >
        </div>

        <div class="form-conteudo__campo">
            <label class="form-conteudo__label" for="Texto">Texto</label>
            <textarea
                class="form-conteudo__textarea"
                id="Texto"
                name="Texto"
                rows="10"
                required
            ><?= esc($conteudo['Texto'] ?? '') ?></textarea>
        </div>

        <div class="form-conteudo__acoes">
            <button class="form-conteudo__botao" type="submit">Salvar</button>
            <a class="form-conteudo__cancelar" href="<?= site_url('conteudos') ?>">
                Cancelar
            </a>
        </div>
    </form>

<?= $this->endSection() ?>
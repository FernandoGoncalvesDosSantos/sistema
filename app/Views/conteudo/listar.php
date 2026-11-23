<?= $this->extend('admin/main') ?>

<?= $this->section('conteudo') ?>

    <h1>Conteúdos cadastrados</h1>

    <?php if ($mensagem = session()->getFlashdata('mensagem')): ?>
        <p class="mensagem"><?= esc($mensagem) ?></p>
    <?php endif; ?>

    <?php if (empty($conteudos)): ?>
        <p>Nenhum conteúdo encontrado.</p>
    <?php else: ?>
        <table class="tabela-estilizada">
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
                        <td><?= esc(mb_strimwidth($item['Texto'] ?? '', 0, 120, '…')) ?></td>
                        <td>
                            <a href="<?= site_url('conteudos/editar/' . $item['Id']) ?>" class="botao-editar">
                                Editar
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

<?= $this->endSection() ?>
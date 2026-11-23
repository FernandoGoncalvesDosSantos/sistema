<nav class="navbar">
    <a href="<?= site_url('admin') ?>" class="nav-link <?= url_is('admin') ? 'active' : '' ?>">
        Painel
    </a>

    <a href="<?= site_url('conteudos') ?>" class="nav-link <?= url_is('conteudos*') ? 'active' : '' ?>">
        Conteúdos
    </a>

    <form action="<?= site_url('admin/sair') ?>" method="post" class="logout-form">

        <?= csrf_field() ?>

        <button type="submit" class="nav-link logout-button">
            Sair
        </button>

    </form>
</nav>
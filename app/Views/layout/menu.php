<nav class="navbar">
    <a href="<?= site_url('home') ?>" class="nav-link <?= url_is('home') ? 'active' : '' ?>">Início</a>
    <a href="<?= site_url('fernando') ?>" class="nav-link <?= url_is('fernando') ? 'active' : '' ?>">Minha História</a>
    <a href="<?= site_url('quemsou') ?>" class="nav-link <?= url_is('quemsou') ? 'active' : '' ?>">Quem sou</a>
    <a href="<?= site_url('produtos') ?>" class="nav-link <?= url_is('produtos') ? 'active' : '' ?>">Produtos</a>
    <a href="<?= site_url('contato') ?>" class="nav-link <?= url_is('contato') ? 'active' : '' ?>">Contato</a>
</nav>
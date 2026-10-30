<?=$this->extend('layout/main') ?>

<?=$this->section('conteudo') ?>
    <h1> <?= $conteudo['Titulo']; ?> </h1>
    <p><?= $conteudo['Texto']; ?> </p>
<?=$this->endSection()?>
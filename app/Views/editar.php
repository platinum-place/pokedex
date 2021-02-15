<?= $this->extend('app') ?>

<?= $this->section('content') ?>

<h1>Registrar Pokemon</h1>

<?= $this->include('menu') ?>

<form method="POST" action="<?= base_url("home/editar/$id") ?>">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required value="<?= $pokemon["nombre"] ?>">
    </div>

    <div class="mb-3">
        <label for="tipo1" class="form-label">Tipo primario</label>
        <input type="text" class="form-control" id="tipo1" name="tipo1" required value="<?= $pokemon["tipo1"] ?>">
    </div>

    <div class="mb-3">
        <label for="tipo2" class="form-label">Tipo secundario</label>
        <input type="text" class="form-control" id="tipo2" name="tipo2" value="<?= $pokemon["tipo2"] ?>">
    </div>

    <div class="mb-3">
        <label for="info" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="info" name="info" required value="<?= $pokemon["info"] ?>">
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
</form>

<?= $this->endSection() ?>
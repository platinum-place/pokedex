<?= $this->extend('app') ?>

<?= $this->section('content') ?>

<h1>Bienvenido a la pokedex</h1>

<?= $this->include('menu') ?>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($db as $id => $pokemon) : ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title">
                        No.: <?= $id ?>
                    </h5>

                    <p class="card-text">
                        <b>Nombre:</b> <?= $pokemon["nombre"] ?>
                    </p>

                    <p class="card-text">
                        <b>Tipo primario:</b> <?= $pokemon["tipo1"] ?>
                    </p>

                    <p class="card-text">
                        <b>Tipo secundario:</b> <?= $pokemon["tipo2"] ?>
                    </p>

                    <p class="card-text">
                        <b>Descripción:</b> <?= $pokemon["info"] ?>
                    </p>

                    <a href="<?= base_url("home/editar/$id") ?>" class="btn btn-warning">Modificar</a>
                    |
                    <a href="<?= base_url("home/eliminar/$id") ?>" class="btn btn-danger" onclick="return confirm('¿Continuar?')">Eliminar</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?>
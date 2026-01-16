<h1>Editar Asignatura</h1>

<form method="post" action="">
    <label>Código:<br>
        <input type="text" name="codigo" value="<?= $producto->getCodigo(); ?>" readonly>
    </label><br><br>

    <label>Nombre:<br>
        <input type="text" name="nombre" value="<?= $producto->getNombre(); ?>" required>
    </label><br><br>

    <label>Créditos:<br>
        <input type="number" name="creditos" value="<?= $producto->getCreditos(); ?>" required>
    </label><br><br>

    <label>Aula:<br>
        <input type="text" name="aula" value="<?= method_exists($producto,'getAula') ? $producto->getAula() : ''; ?>">
    </label><br><br>

    <button type="submit">Guardar Cambios</button>
</form>

<br>
<a href="index.php">Volver a la lista</a>
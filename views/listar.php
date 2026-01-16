<h1>Lista de Asignaturas</h1>

<a href="index.php?accion=crear">Crear Nueva Asignatura</a>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Créditos</th>
            <th>Horas</th>
            <th>Aula</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($productos)) : ?>
            <?php foreach ($productos as $key) : ?>
                <tr>
                    <td><?= $key->getCodigo(); ?></td>
                    <td><?= $key->getNombre(); ?></td>
                    <td><?= $key->getCreditos(); ?></td>
                    <td><?= $key->getHoras(); ?></td>
                    <td><?= $key->getAula(); ?></td>
                    <td>
                        <a href="index.php?accion=editar&id=<?= $key->getCodigo(); ?>">Editar</a> |
                        <a href="index.php?accion=eliminar&id=<?= $key->getCodigo(); ?>" onclick="return confirm('¿Eliminar esta asignatura?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="5">No hay asignaturas</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
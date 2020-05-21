<h1>Listado de Usuarios</h1>

<?php while($usersl = $users->fetch_object()): ?>

<ul>Usuario ID: <?=$usersl->id?>
    <li>Nombre: <?=$usersl->nombre?></li>
    <li>Apellidos: <?=$usersl->apellidos?></li>
    <li>E-mail: <?=$usersl->email?></li>
    <li>Fecha de Registro: <?=$usersl->fecha?></li>
</ul>

<?php endwhile; ?>

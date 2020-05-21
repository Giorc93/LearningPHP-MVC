<h1>Listado de Notas</h1>

<?php while($nota = $notas->fetch_object()): ?>

<h3>Titulo: <?=$nota->titulo;?></h3>
<p><?=$nota->descripcion?></p>

<?php endwhile; ?>
<div class="page-header">
  <h1>Mis Tarjetas <small>registra las todas</small></h1>
</div>
<button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> <span>Añadir</span></button>
<table class="table table-striped" align="center">
<thead class="thead">
<tr>
    <th>Numero</td>
    <th>Tipo</td>
    <th>&nbsp;</td>
</tr>
</thead>

<?php foreach ($card as $row): ?>    

    <tr>
        <td><?php echo $row['number']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><a href="#" class="btn btn-sm btn-danger" target="_blank"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>

<?php endforeach; ?>

</table>
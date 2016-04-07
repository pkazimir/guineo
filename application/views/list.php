<table class="table table-striped" align="center">
<thead class="thead">
<tr>
    <th>ID</td>
    <th>Fecha</td>
    <th>Compañía</td>
    <th>Precio</td>
    <th class=" hidden-xs hidden-sm">Propina</td>
    <th class=" hidden-xs hidden-sm">Forma de Pago</td>
    <th>Concepto</td>
    <th>&nbsp;</td>
</tr>
</thead>
    
<?php foreach ($fact_list as $row): ?>    
    
    <tr>
        <td><?php echo $row['fact_id']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['company']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td class="hidden-xs hidden-sm"><?php echo $row['tip']; ?></td>
        <td class="hidden-xs hidden-sm"><?php echo $row['card']; ?></td>
        <td><?php echo $row['comment']; ?></td>
        <td><a href="uploads/<?php echo $row['fact_id']; ?>.<?php echo $row['ext']; ?>" class="btn btn-sm btn-info" target="_blank"><span class="glyphicon glyphicon-camera"></span></a></td>
    </tr>

<?php endforeach; ?>
    
</table>
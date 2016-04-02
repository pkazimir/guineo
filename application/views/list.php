<table class="table table-striped" align="center">
<thead class="thead">
<tr>
    <th>fact_id</td>
    <th>company_name</td>
    <th>price</td>
    <th class=" hidden-xs hidden-sm">tip</td>
    <th class=" hidden-xs hidden-sm">card</td>
    <th>concept</td>
    <th>&nbsp;</td>
</tr>
</thead>
    
<?php foreach ($fact_list as $row): ?>    
    
    <tr>
        <td><?php echo $row['fact_id']; ?></td>
        <td><?php echo $row['company_name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td class="hidden-xs hidden-sm"><?php echo $row['tip']; ?></td>
        <td class="hidden-xs hidden-sm"><?php echo $row['card']; ?></td>
        <td><?php echo $row['concept']; ?></td>
        <td><span class="glyphicon glyphicon-zoom-in"></span></td>
    </tr>

<?php endforeach; ?>
    
</table>
<div class="page-header">
  <h1>Mis Tarjetas <small>registra las todas</small></h1>
</div>
<button id="addBtn" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> <span>Añadir</span></button>
<table class="table table-striped" align="center" id="cardTable">
<thead class="thead">
<tr id="cardHeader">
    <th>Numero</td>
    <th>Tipo</td>
    <th>&nbsp;</td>
</tr>
</thead>

<?php foreach ($card as $row): ?>    

    <tr class>
        <td id="card_number"><?php echo $row['number']; ?></td>
        <td id="card_type"><?php echo $row['name']; ?></td>
        <td><a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>

<?php endforeach; ?>

<tr class="newCardRecord">
        <td><input type="text" class="input form-control" name="icardnumber" id="icardnumber"></td>
        <td><select class="form-control" name="icardtype" id="icardtype">
            <?php foreach($card_type as $row): ?>
            <option value="<?php echo $row['payment_id']; ?>"><?php echo $row['name']; ?></option>
            <?php endforeach; ?>
          </select></td>
        <td><a href="#" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span></a> <a class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>

</table>

<script>
$(document).ready(function() {
    $(".btn-danger").on("click", function(){
        $(this).closest('tr').fadeOut(300, function() {
            $(this).closest('tr').remove();
        });
    });

    $("#addBtn").on("click", function(){
        var $clone = $("#cardTable").find("tr").last().clone(true, true).removeClass();
        
        $("#cardTable").find("tbody").prepend($clone);
    });
    
    $(".btn-success").on('click', function(){
        var card_num = $(this).closest("tr").find('#icardnumber').val();
        var card_type = $(this).closest("tr").find('#icardtype').val();
        var element = this;
        
        $.ajax({
            type: 'POST',
            data: {icardnumber: card_num, icardtype: card_type},
            url: '<?php echo base_url('perfil/anadirTarjeta'); ?>',
            context: this,
            success: function(json){
                $(element).closest("tr").find('#icardnumber').parent().text(card_num);
                $(element).closest("tr").find('#icardnumber').remove();
                $(element).closest("tr").find('#icardtype').parent().text($(element).closest("tr").find('#icardtype option:selected').text());
                $(element).closest("tr").find('#icardtype').remove();
                $(element).next().find("span").addClass('glyphicon-trash');
                $(element).next().find("span").removeClass('glyphicon-remove');
                $(element).remove();
                
            }
        })
    })
});
</script>
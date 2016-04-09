<div class="page-header">
  <h1>Mis Tarjetas <small>registralas todas</small></h1>
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
        <td class="fixW"><a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>

<?php endforeach; ?>

<tr class="newCardRecord">
        <td id="card_number"><input type="number" pattern="^\d*\.?\d*$" class="input form-control" name="icardnumber" id="icardnumber" required></td>
        <td><select class="form-control" name="icardtype" id="icardtype">
            <?php foreach($card_type as $row): ?>
            <option value="<?php echo $row['payment_id']; ?>"><?php echo $row['name']; ?></option>
            <?php endforeach; ?>
          </select></td>
        <td class="fixW"><a class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span></a> <a class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>

</table>

<script>
$(document).ready(function() {
    //*****
    // REMOVE FRESHLY CREATED CARD (that was not saved yet)
    //*****
    $(".glyphicon-remove").closest(".btn-danger").on("click", function(){
        $(this).closest('tr').fadeOut(300, function() {
                    $(this).closest('tr').remove();
                });
    });
    
    //*****
    // DELETE AN ALREADY STORED CARD FROM DB
    //*****
    $("a").on("click", ".glyphicon-trash", function(event){
        var card_num = $(this).closest("tr").find('#card_number').text();
        var element = this;
        
        $.ajax({
            type: 'POST',
            data: {icardnumber: card_num},
            url: '<?php echo base_url('tarjetas/borrarTarjeta'); ?>',
            success: function(json){
                $(element).closest('tr').fadeOut(300, function() {
                    $(element).closest('tr').remove();
                });
            }
        });
        return false;
    });

    //*****
    // OPEN NOW CARD INPUTS
    //*****
    $("#addBtn").on("click", function(){
        var $clone = $("#cardTable").find("tr").last().clone(true, true).removeClass();
        
        $("#cardTable").find("tbody").prepend($clone);
        $("#cardTable").find("tbody").find("tr").first().find("#icardnumber").focus();
    });
    
    //*****
    // SAVE NEW CARD
    //*****
    $(".btn-success").on('click', function(){
        
        var card_num = $(this).closest("tr").find('#icardnumber').val();
        var card_type = $(this).closest("tr").find('#icardtype').val();
        var element = this;
        
        if (card_num == '') {
            alert("Falta numero de la tarjeta!"); //This will be changed in the future. Asama task is: https://app.asana.com/0/107606695759661/110611554770515
            return;
        }
        
        $.ajax({
            type: 'POST',
            data: {icardnumber: card_num, icardtype: card_type},
            url: '<?php echo base_url('tarjetas/anadirTarjeta'); ?>',
            context: this,
            success: function(json){
                $(element).closest("tr").find('#icardnumber').parent().text(card_num);
                $(element).closest("tr").find('#icardnumber').remove();
                $(element).closest("tr").find('#icardtype').parent().text($(element).closest("tr").find('#icardtype option:selected').text());
                $(element).closest("tr").find('#icardtype').remove();
                $(element).next().find("span").addClass('glyphicon-trash');
                $(element).next().find("span").removeClass('glyphicon-remove');
                $(element).remove();
                return false;
                
            }
        })
    })
});
</script>
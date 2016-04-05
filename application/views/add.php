<div class="center-block alert">

<?php

if (isset($insertStatus))
    if ($insertStatus == 'success'): ?>
    
        <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Good, got another one?
        </div>
    
    <?php else: ?>
       
        <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> Could not save invoice. Error code: 1
        </div>

<?php endif; ?>

</div>

<div class="form-group add-form center-block">    
    
<form action="" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" data-toggle="validator">

<div class="col-sm-6 form-padding">
    
<div class="form-group">
    <label for="usr">Fecha:</label>
    <div class='input-group date' id='datetimepicker1'>
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
        <input type='text' class="form-control" name="idate" pattern="^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$" placeholder="YYYY-MM-DD" required>
    </div>
    <div class="help-block with-errors"></div>
</div>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            showTodayButton: true,
            format: 'YYYY-MM-DD'
        });
    });
</script>

    
<div class="form-group">
    <label for="usr">Campañía:</label>
    <input type="text" class="input form-control" name="icompany" required>
    <div class="help-block with-errors"></div>
</div>
    
<div class="form-group">
    <label for="usr">Precio:</label>
    <span class="input-group">
    <span class="input-group-addon">RD$</span>
    <input class="input form-control" name="iprice" type="number" step="0.00001" min="0.1" pattern="^\d*\.?\d*$" required>
    </span>
    <div class="help-block with-errors"></div>
</div>
    
<div class="form-group">
    <label for="usr">Propina:</label>
    <span class="input-group">
    <span class="input-group-addon">RD$</span>
    <input type="number" class="input form-control" name="itip" step="0.00001" min="0.1">
    </span>
</div>
    
</div>
<div class="col-sm-6 form-padding">
    
<div class="form-group">
  <label for="sel1">Forma de Pago:</label>
  <select class="form-control" id="sel1" name="icard">
    <option value="2136">2136 - Business</option>
    <option value="9674">9674 - Personal</option>
  </select>
</div>
    
<div class="form-group">
    <label for="comment">Concepto:</label>
    <textarea class="form-control" rows="5" id="comment" name="icomment" required></textarea>
    <div class="help-block with-errors"></div>
</div>

<div class="form-group">
    <span>
    <label for="sel1">Factura:</label>
    </span>
    <input class="form-control" type="file" name="userfile">
</div>
    
<button type="submit" class="btn btn-default">Guardar</button>
    
</div>

    </form> 
    
</div>
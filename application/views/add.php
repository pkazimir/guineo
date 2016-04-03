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
    
<form action="" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

<div class="col-sm-6 form-padding">
    
<div class="form-group">
    <label for="usr">Date:</label>
    <div class='input-group date' id='datetimepicker1'>
        <input type='text' class="form-control" name="idate">
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
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
    <label for="usr">Company:</label>
    <input type="text" class="input form-control" name="icompany">
</div>
    
<div class="form-group">
    <label for="usr">Price:</label>
    <span class="input-group">
    <input type="text" class="input form-control" name="iprice">
    <span class="input-group-addon">RD$</span>
    </span>    
</div>
    
<div class="form-group">
    <label for="usr">Tip:</label>
    <span class="input-group">
    <input type="text" class="input form-control" name="itip">
    <span class="input-group-addon">RD$</span>
    </span>
</div>
    
</div>
<div class="col-sm-6 form-padding">
    
<div class="form-group">
  <label for="sel1">Card:</label>
  <select class="form-control" id="sel1" name="icard">
    <option value="2136">2136 - Business</option>
    <option value="9674">9674 - Personal</option>
  </select>
</div>
    
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name="icomment"></textarea>
</div>

<div class="form-group">
    <span>
    <label for="sel1">Invoice:</label>
    </span>
    <input class="form-control" type="file" name="userfile">
</div>
    
<button type="submit" class="btn btn-default">Submit</button>
    
</div>

    </form> 
    
</div>
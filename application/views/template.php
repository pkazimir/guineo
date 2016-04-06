<!DOCTYPE html>
<html lang="en">
    <header>
        <?php $this->load->view('header'); ?>
    </header>
    
<body>
        
<?php $this->load->view('menu'); ?>
    
<div class="container">
  <div class="row">

    <div class="col-sm-12">
        
        <?php $this->load->view($screen); ?>

    </div>
  </div>
</div>
        
<?php $this->load->view('footer'); ?>
</body>
</html>

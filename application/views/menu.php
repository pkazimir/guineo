<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
        </button>
        <span class="navbar-brand">Guineo</span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li <?php if ($screen=='list') echo 'class="active active-color"'; ?>><a href="/guineo/listado"><span class="glyphicon glyphicon-th-list"></span> Lista</a></li>
            <li <?php if ($screen=='inbox') echo 'class="active active-color"'; ?>><a href="/guineo/entrada"><span class="glyphicon glyphicon-inbox"></span> Entrada</a></li>
            <li <?php if ($screen=='add') echo 'class="active active-color"'; ?>><a href="/guineo/nuevo"><span class="glyphicon glyphicon-plus"></span> Nuevo</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
          <li><a><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?>@brugal.com.do</a></li>
        </ul>
    </div>
  </div>
</nav>
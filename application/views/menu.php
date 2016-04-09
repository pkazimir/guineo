<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
        </button>
        <span class="navbar-brand"><img src="img/guineo-logo.png" width="150px" class="logo-img"></span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li <?php if ($screen=='list') echo 'class="active active-color"'; ?>><a href="/guineo/listado"><span class="glyphicon glyphicon-th-list"></span> Lista</a></li>
            <li <?php if ($screen=='inbox') echo 'class="active active-color"'; ?>><a href="/guineo/entrada"><span class="glyphicon glyphicon-inbox"></span> Entrada <span class="badge">2</span></a></li>
            <li <?php if ($screen=='add') echo 'class="active active-color"'; ?>><a href="/guineo/nuevo"><span class="glyphicon glyphicon-plus"></span> Nuevo</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs hidden-sm">
          <li></li>
          <li <?php if ($screen=='cards') echo 'class="active active-color"'; ?> class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/guineo/tarjetas">Mis Tarjetas</a></li>
          </li>
        </ul>
        </ul>
    </div>
  </div>
</nav>
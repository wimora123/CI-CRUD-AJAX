<div class="preloader">
      <center><p style="font-weight: bold; font-size: 40px; margin-top:200px;color:red; font-family: arial; font-style: italic; font-weight: 850; text-shadow: 0 0 20px  #ffff80, 0 0 20px #66ff99,  0 0 20px #33ff77, 0 0 10px #33ff77, 0 0 20px #33ff77;">L O A D I N G ......</p></center>
      <div class="outerCircle"></div>
      <div class="innerCircle"></div>
      <div class="icon"></div>

</div>

<div class="navigationArea" style="border-radius: 0;width: 100%;position: fixed;top: 0px;z-index: 1;">

    <nav class="navbar navbar-default navbarNav">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><span class="badge badgeNotif" id="countAnime"></span></li>
            <li><span class="glyphicon glyphicon-bell bellSymbol"></span></li>
            <li><a href="<?php echo site_url('Home') ?>" class="liNav">Home</a></li>
            <li><a href="<?php echo site_url('About') ?>" class="liNav">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle liNav" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Supports <span class="caret"></span></a>
              <ul class="dropdown-menu ulNavDropdown">
                <li><a href="<?php echo site_url('Character') ?>" class="liDrop">Characters</a></li>
                <li role="separator" class="divider navDivider1"></li>
                <li><a href="#" class="liDrop">Contact</a></li>
                <li role="separator" class="divider navDivider2"></li>
                <li><a href="#" class="liDrop">Others</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>      

</div>

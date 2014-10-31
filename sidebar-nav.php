<div class="navbar navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php home_url( $path, $scheme ); ?>">Razberi</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li> <?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right"> 
              	<li><a href="<?php echo wp_login_url(); ?>"> <span class="glyphicon glyphicon-log-in"></span> Log in</a> </li>
              </ul>
            </div>
          </div>
        </div>
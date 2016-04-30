<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title_for_layout; ?></title>
    <?php 
      echo $this->Html->css(array(
        '/admin_assets/css/bootstrap.min.css',
        '/admin_assets/Admin-lte/AdminLTE.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        '/admin_assets/Admin-lte/skins/_all-skins.min.css',
        '/admin_assets/Admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        ));
     // echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
      echo $this->Html->script('/admin_assets/Admin-lte/plugins/jQuery/jQuery-2.1.4.min.js');
     ?>
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 
          $app = array();
          $app['basePath'] = Router::url('/');
          $app['params'] = array(
            'controller' => $this->params['controller'],
            'action' => $this->params['action'],
            'named' => $this->params['named'],
          );
          echo $this->Html->scriptBlock('var App = ' . $this->Js->object($app) . ';');
     ?>
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
	  <?php echo $this->element('admin/header');?>
	  
	  <?php echo $this->element('admin/left');?>
	  
	    <div class="content-wrapper">
		 <?php echo $this->element('admin/breadcumb');?>
		<section class="content">
		 <?php echo $this->fetch('content'); ?>

		</div>
		 <?php echo $this->element('admin/footer');?>
	</div>
  
  <?php 
      echo $this->Html->script( array(
      '/admin_assets/js/bootstrap.min.js',

	  '/admin_assets/Admin-lte/bootstrap/js/bootstrap.min.js',
	  '/admin_assets/Admin-lte/plugins/slimScroll/jquery.slimscroll.min.js',
	  '/admin_assets/Admin-lte/plugins/fastclick/fastclick.min.js',
	  '/admin_assets/Admin-lte/app.min.js',
	  '/admin_assets/Admin-lte/demo.js',

	  )
	  );
    ?>
  

  <?php /*
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->webroot; ?>/admin">CakePHP Admin Plugin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo $this->Html->link(__d('admin', 'Dashboard'), '/admin'); ?></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __d('admin', 'Languages'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <?php
                   echo $this->Html->image("Admin.flags/por.png", array(
                       "alt" => __d('admin', "Brazilian"),
                       'url' => '/admin/languages/pt-br',
                       'class' => 'lang-flag'
                   ));
                   ?>
                </li>
                <li>
                  <?php 
                    echo $this->Html->image("Admin.flags/eng.png", array(
                        "alt" => __d('admin', "English"),
                        'url' => '/admin/languages/eng',
                        'class' => 'lang-flag'
                    ));
                   ?>
                </li>                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __d('admin', 'User control'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <?php echo $this->Html->link(__d('admin', 'Users'), array('plugin' => 'admin', 'controller' => 'users', 'action' => 'index', 'admin' => true)); ?>
                </li>
                <li class="divider"></li>
                <li>
                  <?php echo $this->Html->link(__d('admin', 'Logout'), array('plugin' => 'admin', 'controller' => 'users', 'action' => 'logout', 'admin' => true)); ?>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-12 main">
          <!-- <h1 class="page-header">Dashboard</h1> -->

          <div class="row-fluid">
            <?php 
              echo $this->Session->flash();
              echo $this->Session->flash('auth');
              ?>
            <h2 class="sub-header"><?php echo $title_for_layout; ?></h2>
            <?php echo $this->fetch('content'); ?>
          </div>
      </div>
    </div>
    <?php 
      echo $this->Html->script('/admin/js/bootstrap.min.js');
     ?>
     <script type="text/javascript">
      $(function(){
        $('.lang-flag').each(function(i, val){
          $alt = val.alt;
          $(this).parent('a').append(' '+$alt);
        });
      });
     </script>*/ ?>
  </body>
</html> 

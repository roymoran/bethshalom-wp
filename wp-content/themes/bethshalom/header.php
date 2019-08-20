<!DOCTYPE html>

<html>

    <head>
        <?php wp_head();?>
    </head>

<body <?php body_class();?>>
<div class="header">
  <img src="http://bethshalombz.org/blog2/wp-content/uploads/2010/02/brotherhood_logo1.jpg" alt="Beth Shalom Logo" align="left">
  <h1>Beth Shalom B'Nai Zaken</h1>

</div>
<!-- Navigation Bar --> 
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => '','menu_class' => 'nav-list' ) ); ?>

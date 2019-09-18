<!DOCTYPE html>

<html>

    <head>
        <?php wp_head();?>
    </head>

<body <?php body_class();?>>
<div class="header">
  <a href="/">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/brotherhood_logo1.jpg" alt="Beth Shalom Logo" align="left">
    <h1>Beth Shalom B'Nai Zaken EHC</h1>
  </a>
</div>
<!-- Navigation Bar --> 
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'nav', 'container_class' => '','menu_class' => 'nav-list' ) ); ?>

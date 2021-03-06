<?php
/**
 * Header template
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>
  <header>
    <?php do_action( 'scaffold/navigation' ); ?>
  </header>
    <main class="site-main" role="main">
      <div class="site-wrapper">
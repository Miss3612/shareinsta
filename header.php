<?php
/**
 * Header template.
 * 
 * @package shareinsta
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>
<body>
    <header>Shareinsta</header>
    <footer>Footer</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Romain.W && Valentin.G">
    <title>Exemple de thème WordPress</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
            
            
<?php       wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'navbar-collapse',
                    'container_id'    => 'navbarNav',
                    'menu_class'      => 'd-flex list-unstyled offset-1',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                    
                ) );
?>

                <?php get_search_form();  ?> 
            </nav>
        </div>
    </header>
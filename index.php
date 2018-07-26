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

            
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Exemple de thème WordPress</h1>
            <p class="lead blog-description">Création d’un thème WordPress à titre de tutoriel sur WP Pour Les Nuls.</p>
        </div>
        <?php if (have_posts()): ?>
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                         

                    <?php while( have_posts()): ?>

                    <div class="home-articles">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                        <p><a href="<?php the_permalink(); ?>"> 
                            <?php 
                            the_title();                            
                            the_post(); ?>
                        
                        </p>
                    
                    <?php
                    endwhile;

                    
                    endif;

                    ?>
                </div>
            </div>
            
                    
            
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>À Propos</h4>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="blog-footer">
        <?php wp_footer(); ?>
    </footer>


</body>
</html>

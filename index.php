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
            <nav class="navbar navbar-expand-lg navbar-light bg-color1 op-7 col-12">
            
<?php       wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'navbar-collapse col-6',
                    'container_id'    => 'navbarNav',
                    'menu_class'      => 'd-flex list-unstyled offset-1',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
?>
<?php 
            get_search_form(); 
            
?>
                <div class="col-2  d-flex justify-content-center">
                    <a href="connexion" class="btn btn-outline-secondary">CONNEXION</a>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Exemple de thème WordPress</h1>
            <p class="lead blog-description">Création d’un thème WordPress à titre de tutoriel sur WP Pour Les Nuls.</p>
        </div>
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">Un article de blog</h2>
                    <p class="blog-post-meta">20 décembre 2017 par <a href="#">Louis-Philippe</a></p>
                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
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

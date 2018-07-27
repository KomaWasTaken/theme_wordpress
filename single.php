<?php get_header(); ?>
    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Exemple de thème WordPress</h1>
            <p class="lead blog-description">Création d’un thème WordPress à titre de tutoriel sur WP Pour Les Nuls.</p>
        </div>
        <?php if (have_posts()): ?>
        <div class="row">
            <div class="col-sm-12 blog-main">
                <div class="blog-post">                

                   <?php  echo give_me_meta(esc_attr( get_the_date( 'c' ) ),
                                esc_html( get_the_date()),
                                get_the_category_list(', '),
                                single_tag_title());                         ?>
                        <p>
                            <?php the_title(); ?>
                        </p>

                        <p>
                            <?php the_content(); ?>                      
                        </p>

                    <?php
                    endif;

                    ?>
                
            </div>
            
                    
            
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>À Propos</h4>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                <div class="col-12">
                    <nav>
                        <ul>
                            <li class=''><?php previous_post_link(); ?></li>
                            <li class=''><?php next_post_link(); ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
    <?php get_footer(); ?>
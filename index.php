    <?php get_header(); ?>
    <div class="container-fluid">
        <div class="blog-header">
            <h1 class="blog-title">Exemple de thème WordPress</h1>
            <p class="lead blog-description">Création d’un thème WordPress à titre de tutoriel sur WP Pour Les Nuls.</p>
        </div>
        <?php if (have_posts()): ?>
        <div class="row d-flex">
            <div class="col-8 blog-main">
                <div class="d-flex blog-post grid-container">
                         

<?php           while( have_posts()): the_post();
                    
                    $id = get_post_thumbnail_id ($post->ID ); 
                    $post_id = get_the_id();
                    $my_thumb = wp_get_attachment_image_src($id, 'thumbnail'); 

?>

                    <div class="col-3 home-articles h-400px text-center border-1 d-flex flex-column align-items-center card-grid" id="hover-articles">
                        <div class="front ">
                            <a href="<?php the_permalink(); ?>" class="color-1"> 
                                <?php 
                                the_title();  
                                    
                                    ?>
                            </a>
                            <div class="col-12">
                                <img src="<?php echo my_image_display(); ?>" class="img-thumbnail" />
                            </div>
                            <p class="color-1">
                            <?php echo give_me_meta(esc_attr( get_the_date( 'c' ) ),
                                    esc_html( get_the_date()),
                                    get_the_category_list(', '),
                                    single_tag_title());           ?>
                            </p>                   
                        </div>
                        <div class="back text-left">
                            <?php echo get_excerpt(200); ?>
                        </div>          
                        
                    </div>
                    <?php
                    endwhile;

                    
                    endif;

                    ?>
                </div>
            </div>
            <hr class="separator" />
                    
            
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    Article le plus populaire :
                    <?php if (have_posts()): the_post()?>
                   <?php wpb_set_post_views(get_the_ID()); ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
<?php
/*
Template Name: Zone de connexion
*/ 
?>

<?php get_template_part('header', 'breadcrumb'); ?>

<h1>CONNEXION</h1>

<div class="container">
	<div class="row">
        <div class="d-flex m-auto">             
            <?php include('formulaire_template.php'); ?>
        </div>		
    </div>
</div>
<?php get_footer(); ?>
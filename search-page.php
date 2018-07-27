<?php
/*
Template Name: Search Page
*/
?>
<?php 
    get_header();
?>

<div id="content" class="">
    <div class="global">
        <div id="colleft">
            <?php WP_Advanced_Search(); ?>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>
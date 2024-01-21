<?php
    /*Template Name: Mentions_legales */

    get_header();
?>

<?php
    $mentions_legales = get_field('mentions_legales');
    
    
?>

<h1 class="mentions_legales_titre">Mentions Légales</h1>

<div class="mentions_legales">
<p class="mentions_legales_texte"> <?php echo($mentions_legales);?></p>
</div>

<?php
get_footer();
?>
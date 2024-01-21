<?php
    /*Template Name: Contenu */

    get_header();
?>

<?php
    $contenus = get_field('contenus');

    $contenu_titre_page = get_field('contenu_titre_page');
    $contenu_intitule_info_page = get_field('contenu_intitule_info_page');
    $contenu_txt_info_page = get_field('contenu_txt_info_page');

    $illustration = get_field('illustration');
    $lien_tarif = get_field('lien_tarifs');

    $lien_doctolib = get_field('lien_doctolib','options');
?>

<div class="contenu_div_parent">
    <div class="contenu_div_txt">
        <h1 class="contenu_titre"><?php echo($contenu_titre_page); ?></h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="29" viewBox="0 0 350 29" fill="none">
            <path d="M4 19.4337C44.4162 19.4337 88.7422 4 129.861 4C181.26 4 216.185 25 286.913 25C313.931 25 328.647 22.7229 346 19.4337" stroke="#AD5555" stroke-width="8" stroke-linecap="round"/>
        </svg>
        <p class="contenu_info_titre"><?php echo($contenu_intitule_info_page); ?></p>
        <p class="contenu_info_txt"><?php echo($contenu_txt_info_page); ?></p>
        <a href="<?php echo($lien_tarif); ?>" class="contenu_info_txt"> lien vers les tarifs </a>
    </div>
    <div class="contenu_div_illu">
      <img class="illustration_contenu"
        src="<?php echo($illustration['sizes']['square']); ?>"  
        alt="<?php echo($illustration['alt']); ?>"  loading="lazy">
    </div>
</div>


<main>
	<?php foreach ($contenus as $index => $contenu) { ?>


    <div class="accordion">
    <input type="checkbox" id="section<?php echo($index)?>">
    <label for="section<?php echo($index)?>" class="accordion-label" style="background-color:<?php echo($contenu['color'])?>40;">
        <?php if (($index % 2) === 1) { ?>
            <svg class="rotate180" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="white" fill-opacity="0.5"/>
                <path d="M71.3555 64.4131L50.1776 35.7913L28.9996 64.4131" stroke="#AD5555" stroke-width="11" stroke-linecap="round"/>
            </svg>
        <?php } ?>
        <img class="img_accordion"
            src="<?php echo($contenu['image_contenu']['sizes']['square']); ?>"  
            alt="<?php echo($contenu['image_contenu']['alt']); ?>"  loading="lazy">
        <div class="intitule_accorion">
            <h2 style="color:<?php echo($contenu['color']); ?>;" class="title_accordion"><?php echo($contenu['titre_contenu']); ?></h2>
            <p class="txt_accordion"><?php echo($contenu['explication']); ?></p>
        </div>  
        <?php if (($index % 2) === 0) { ?>
            <svg class="rotate180" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="white" fill-opacity="0.5"/>
                <path d="M71.3555 64.4131L50.1776 35.7913L28.9996 64.4131" stroke="#AD5555" stroke-width="11" stroke-linecap="round"/>
            </svg>
        <?php } ?>
    </label>
    <div style="background-color:<?php echo($contenu['color'])?>40;" class="content">
        <p class="accorion_content_txt accorion_content_li"><?php echo($contenu['contenu']); ?></p>
        <ul>
            <li class="accorion_content_li"><span style="color:<?php echo($contenu['color']); ?>;" class="accorion_content_titre_li">Durée :</span>   <?php echo($contenu['duree']); ?></li>
            <li class="accorion_content_li"><span style="color:<?php echo($contenu['color']); ?>;" class="accorion_content_titre_li">Notes :</span>   <?php echo($contenu['notes']); ?></li>
        </ul>
    </div>
    <!-- Ajoutez d'autres sections si nécessaire -->
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var checkboxes = document.querySelectorAll('.accordion input[type="checkbox"]');
    
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var svg = this.nextElementSibling.querySelector('.rotate180'); // Récupérez le SVG à l'intérieur du label
            if (this.checked) {
                svg.style.transform = 'rotate(0deg)';
            } else {
                svg.style.transform = 'rotate(180deg)';
            }
        });
    });
});



</script>

      
    <?php } ?>
</main>

  


<?php
get_footer();
?>
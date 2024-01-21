<?php
    /*Template Name: Apropos */
    get_header();
?>

<?php
    $img_profil_apropos = get_field('img_profil_apropos');
    //var_dump($img_profil_apropos);
    $photo_apropos = get_field('photoApropos');
    $banner_mse = get_field('bannermse');

    $grid_mes_services = get_field('grid_mes_services');

    $mes_services = get_field('mes_services');

    $nom_apropos = get_field('nom_apropos');
    $profession_apropos = get_field('profession_apropos');
    $rpps_apropos = get_field('rpps_apropos');

    $tel_apropos = get_field('tel_apropos');
    $mail_apropos = get_field('mail_apropos');
    $adv_apropos = get_field('adv_apropos');

    $carte1_liste = get_field('carte1_liste');
    $carte2_liste = get_field('carte2_liste');
    $carte3_liste = get_field('carte3_liste');
    $carte1_info = get_field('carte1_info');


     $formules = get_field('formules');
?>

<div>
    <h1 class="titre_apropos"><?php echo($nom_apropos); ?><h1>
    <div class="presentation_apropos">
        <div class="div_presentation_apropos">
            <p class="profession_apropos"><?php echo($profession_apropos); ?></p>
            <p class="num_rpps_apropos"><?php echo($rpps_apropos); ?></p>
        </div>
        <img class="photo_apropos"
        src="<?php echo($photo_apropos['sizes']['square']); ?>" 
        alt="<?php echo($photo_apropos['alt']); ?>"  loading="lazy">
        <div  class="div_presentation_apropos">
            <p class="num_tel_apropos"><?php echo($tel_apropos); ?></p>
            <p class="mail_apropos"><?php echo($mail_apropos); ?></p>
            <!--<p class="adv_contact_apropos"><?php echo($adv_apropos); ?></p>-->
        </div>
    </div>

    <svg class=nuages_apropos viewBox="0 0 1440 1027" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M190.296 856.405C72.4604 826.656 36.5902 723.911 33.3845 676.257L21.7427 460.575L1508.85 460.574C1517.46 491.839 1524.75 578.745 1485.06 676.257C1445.38 773.768 1296.1 760.133 1226.41 741.127C1245.65 773.08 1251.93 851.282 1123.16 908.467C994.389 965.651 895.72 867.286 862.482 810.955C827.388 868.388 726.628 974.163 604.338 937.803C482.049 901.443 456.538 791.535 459.069 741.127C418.576 791.949 308.131 886.155 190.296 856.405Z" fill="#FFDBE4" fill-opacity="0.49"/>
        <path d="M288.979 937.494C161.058 907.77 122.118 805.112 118.638 757.499L106 542L1720.4 542C1729.74 573.238 1737.65 660.07 1694.57 757.499C1651.49 854.927 1489.43 841.304 1413.78 822.313C1434.66 854.239 1441.48 932.375 1301.69 989.511C1161.9 1046.65 1054.78 948.365 1018.7 892.082C980.602 949.466 871.217 1055.15 738.461 1018.82C605.705 982.493 578.01 872.679 580.758 822.313C536.799 873.092 416.9 967.218 288.979 937.494Z" fill="#FFDBE4" fill-opacity="0.24"/>
        <path d="M-3.34897 815.107C-131.271 787.853 -170.212 693.725 -173.692 650.067L-186.33 452.474L1428.08 452.474C1437.42 481.116 1445.34 560.734 1402.26 650.067C1359.18 739.401 1197.11 726.909 1121.46 709.497C1142.35 738.77 1149.16 810.413 1009.37 862.802C869.577 915.191 762.462 825.075 726.379 773.469C688.28 826.085 578.895 922.989 446.137 889.678C313.379 856.367 285.685 755.678 288.432 709.497C244.473 756.056 124.573 842.362 -3.34897 815.107Z" fill="#FFDBE4"/>
        <path d="M1439.5 3.05176e-05C879.9 141.2 224 58.8334 -34 3.05176e-05V420.5H1439.5V3.05176e-05Z" fill="#FFDBE4"/>
        <rect x="-15" y="301" width="1485" height="299" fill="#FFDBE4"/>
    </svg>
</div>

<div class="div_carte_apropos">
    <div class="carte_apropos">
        <h2 class="titre_carte1_apropos">Expériences</h2>
        <p class="intro_carte1_apropos"><?php echo($carte1_info);?></p>
        <ul class="list_carte1_apropos">
            <?php foreach ($carte1_liste as $index => $carte1_point) {?> 
                <li <?php if (($index % 2) === 0) { echo "style='color:#D27033'"; } ?> class="paire_carte_apropos">
                    <?php echo ($carte1_point['ligne']); ?>
                </li> 
            <?php } ?>
        </ul>
    </div>
    <div class="carte_apropos">
        <h2 class="titre_carte2_apropos">Diplômes</h2>
        <ul class="list_carte2_apropos">
            <?php foreach ($carte2_liste as $index => $carte2_point) {?> 
                <li <?php if (($index % 2) === 0) { echo "style='color:#92619A'"; } ?> class="paire_carte_apropos">
                    <?php echo ($carte2_point['ligne']); ?>
                </li> 
            <?php } ?>
        </ul>
    </div>
    <div class="carte_apropos">
        <h2 class="titre_carte3_apropos">Expertises et actes</h2>
        <ul class="list_carte3_apropos">
            <?php foreach ($carte3_liste as $index => $carte3_point) {?> 
                <li <?php if (($index % 2) === 0) { echo "style='color:#78C2CB'"; } ?> class="paire_carte_apropos">
                    <?php echo ($carte3_point['ligne']); ?>
                </li> 
            <?php } ?>
        </ul>
    </div>
</div>

<h2 class="mes_services_titre">Mes services</h2>

<div class="mes_services">
    <?php foreach ($mes_services as $service) { ?> 
        <a href="<?php echo($service['page_link']); ?>" class="service">
            <img class="service_img"
                src="<?php echo($service['service_img']['sizes']['square']); ?>" 
                alt="<?php echo($service['service_img']['alt']); ?>"  loading="lazy">
                <p class="service_nom"> <?php echo($service['service_nom']); ?></p>
        </a>
    <?php } ?>
</div>


<div class="formules">

        <?php 
            $carte1_info = get_field('carte1_info');
        ?>

        <h2 class="formules_titre">Cabinet conventionné</h2>
        <p class="formules_p2">Tiers payant, 100% maternité (du 6ème mois de grossesse à 12 jours après la naissance) CSS et AME</p>
        <p class="formules_p3">Chèque, espèce ou carte bancaire</p>
        <p class="formules_p2">(prix) = Tiers Payant*</p>
        <div class="formules_container">
            
            <?php foreach ($formules as $formule) {?>
                <div class="formule_container">
                    <h3 class="formule_titre"><?php echo ($formule['titre']); ?></h3>
                    <ul style="background-color:<?php echo($formule['color_formule']);?>50;" class="ul_formule">
                        <?php foreach ($formule['formule'] as $index => $liste) {?>
                            <li style="background-color:<?php if (($index % 2) === 0) { echo('#00000000');} else {echo($formule['color_formule']);}?>;"
                            
                                <?php if (($index % 2) === 0) { echo "style='background-color: #555555'"; } ?> class="liste_formule">
                                <p class="description_formule"><?php echo ($liste['description_formule']); ?></p>
                                <p class="prix_formule"><?php echo ($liste['prix_formule']); ?></p>
                            </li> 
                        <?php } ?>
                    </ul> 
                </div>
            <?php } ?>

        </div>
        <p class="formules_p2">Tout avis, conseils, prescription, duplicata d'ordonnance engagent ma responsabilité : 
            ils feront soit l'objet d'une consultation en urgence au cabinet, soit l'objet d'une téléconsultation.</p>
        <p class="formules_p2">Pour plus d’informations, contactez-moi.</p>
        <p class="formules_p2">25€ pris en charge.</p>
</div>


<div class="mes_supports_existant">
    <svg class="vague_mse" viewBox="0 0 1450 75" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M947.206 71.1104C1185.27 71.1104 1297.5 30.8465 1450 30.8465V0.648697L0 0.648697V71.1104C43.1158 57.6891 170.517 30.8465 335.196 30.8465C541.045 30.8465 709.146 71.1104 947.206 71.1104Z" fill="#FFFAF8"/>
        <path d="M1304.55 58.0245C1350.45 58.0245 1420.31 46.2809 1449.5 40.4091V9.70792L1.50989 9.70792V63.0575C10.9048 66.9161 60.6978 74.6333 184.71 74.6333C339.726 74.6333 766.019 40.4091 926.571 40.4091C1087.12 40.4091 1247.17 58.0245 1304.55 58.0245Z" fill="#FFFAF8" fill-opacity="0.4"/>
        <path d="M1021.19 44.2834C1133.93 44.2834 1354.04 52.6364 1450 56.8128V1L2 1V44.2834C103.667 53.5223 344.245 72 493.223 72C679.445 72 880.262 44.2834 1021.19 44.2834Z" fill="#FFFAF8" fill-opacity="0.5"/>
        </svg>
        
    <img class="banner_mse"
        src="<?php echo($banner_mse['sizes']['banner']); ?>" 
        alt="<?php echo($banner_mse['alt']); ?>"  loading="lazy">

    <div class="div_mse">
        <h2 class="mse_titre">Mes supports existants</h2>
        <div class="mse_buttons">
            <a  href="<?php echo($lien_doctolib); ?>"><button class="mse_button">Doctolib</button></a>
            <a  href="https://www.youtube.com/watch?v=bpNnu4lUHRk"><button class="mse_button">Youtube</button></a>
            <a  href="https://www.facebook.com/people/Aerts-Marie-H%C3%A9l%C3%A8ne-Sage-femme/pfbid024dJSXVoGyier2b4uMhCJM1XbuBQFKxLevL6VtMxTRgNrDkrekdYCvJwckB7ZWmtel/?locale=fr_FR"><button class="mse_button">Facebook</button></a>
        </div>
        
        <p class="mse_info">La prise de RV via Doctolib est bloquée à
             partir de 2 RV pris non suivis de votre présence.</p>
    </div>
</div>



<?php
get_footer();
?>

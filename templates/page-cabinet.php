<?php
    /*Template Name: Cabinet */

    get_header();
?>

<?php
    $banner_cabinet = get_field('bannerCabinet');
    //var_dump($banner_cabinet);
    $map_cabinet = get_field('img_map_cabinet');
    //var_dump($map_cabinet);
?>

<div class="banner_home">
    <img class="banner_home_img"
        src="<?php echo($banner_cabinet['sizes']['banner']); ?>" 
        height="<?php echo($banner_cabinet['sizes']['banner-height']); ?>" 
        width="<?php echo($banner_cabinet['sizes']['banner-width']); ?>" 
        alt="<?php echo($banner_cabinet['alt']); ?>"  loading="lazy">

    <svg class="mask_banner" width="100%" viewBox="0 0 1440 152" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1440 0.999878C953.6 269.159 276.333 112.733 -1.5 0.999878V151H8H1440V0.999878Z" fill="#FFDBE4" stroke="#FFDBE4"/>
    </svg>
    <h1 class="titre white">
    Cabinet
    </h1>
</div>

<p class="p_cabinet paragraphe_1_cabinet">
    Pour votre 1er rendez-vous, merci de compléter le dossier <a href="">médical suivant</a>
</p>
<p class="p_cabinet">
    Il est préférable de confier vos enfants pour tous les rendez-vous, 
sauf pour les rendez-vous postnataux bien sûr.
</p>
<p class="p_cabinet">
    Ce cabinet n’a pas de secrétaire.
Lorsque que vous arrivez, <a href="">dirigez vous directement dans la salle d’attente</a>.
</p>

<svg class="clouds_cabinet" viewBox="0 0 1440 770" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M241.063 648.597C112.306 622.464 64.3889 501.567 56.5253 444.385L24 185.343L1614 62.5595C1626.11 99.5379 1638.35 281.674 1605 402.5C1519.27 522.814 1369.34 519.597 1307.61 472.498C1319.15 524.938 1316.37 590.415 1243.31 634.335C1110.96 713.903 996.307 603.471 955.525 538.308C923.35 610.441 825.464 746.271 691.329 712.536C557.194 678.801 519.687 548.415 517.701 487.439C479.137 552.047 369.82 674.731 241.063 648.597Z" fill="#F7C4D0" fill-opacity="0.3"/>
    <path d="M200.128 554.231C112.5 565.5 162.5 434 154.5 422.5C147.526 494 39.9999 585.543 -41.5003 453C-73.63 298.778 83.9996 38.0006 83.9996 38.0006H1382.09C1389.6 75.8017 1475.08 190.651 1416 274C1515.5 412.043 1382.09 479.5 1280 377.211C1264.5 533.304 1208.5 500 1150 412.043C1162.5 460.043 1194.5 541.5 1128 600.5C1015.6 669.641 846.887 529.748 817.874 461.639C787.241 531.08 735 579.539 592.543 615.009C490.518 589.177 463.529 438.159 465.738 377.211C430.392 438.659 302.985 590.2 200.128 554.231Z" fill="#F7C4D0" fill-opacity="0.7"/>
    <path d="M1477 17.5005V142.001L1138.5 85.0005L754 47.5005L1477 17.5005Z" fill="#FFDBE4"/>
    <path d="M103.735 526.119C-15.3216 485.899 -47.5683 360.351 -48.8096 302.605L-51.4998 41.3481C-51.4998 41.3481 1458.6 3.1439 1467.03 94.8938C1475.47 186.644 1539.5 349 1418 349C1418 452.5 1371.5 470 1215.5 452.5C1068.5 482.5 1172 539 1054.09 622.669C920.159 687.19 823.6 564.678 792.062 495.357C666.5 424.013 679.5 661.5 477.337 648.217C362.219 619.054 369.348 485.853 379.606 417.294C354.821 511.859 214.851 563.658 103.735 526.119Z" fill="#FFDBE4"/>
</svg>

<div class="calendar_div">
    <div class="calendar">
        <div class="date_div">
            <p class="date">Lundi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires">8h45 - 13h</p>
            <p class="horaires">13h30 - 18h30</p>
        </div> 
    </div>
    <div class="calendar">
        <div class="date_div">
            <p class="date">Mardi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires">8h45 - 13h</p>
            <p class="horaires">13h30 - 18h30</p>
        </div> 
    </div>
    <div class="calendar">
        <div class="date_div">
            <p class="date">Mercredi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires">9h - 12h</p>
            <p class="horaires">-</p>
        </div> 
    </div>
    <div class="calendar">
        <div class="date_div">
            <p class="date">Jeudi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires">8h45 - 13h</p>
            <p class="horaires">13h30 - 18h30</p>
        </div> 
    </div>
    <div class="calendar">
        <div class="date_div">
            <p class="date">Vendredi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires">8h45 - 13h</p>
            <p class="horaires">13h30 - 18h30</p>
        </div> 
    </div>
</div>
<p class="horaires_w">Horaires pouvant varier <br>
    si visite à domicile.</p>

<div class="wrap map_div">
    <div class="map_cabinet">
        <img class="img_map_cabinet"
        src="<?php echo($map_cabinet['sizes']['square']); ?>" 
        alt="<?php echo($map_cabinet['alt']); ?>"  loading="lazy">
    </div>
    <div class="infos_map_cabinet">
        <h2 class="titre_map">Adresse</h2>
        <p class="map_cabinet_rue">25 Rue de Ploemeur <br>
            « Cabinet d’échographie » <br>
            56100 LORIENT</p>
        <p class="map_cabinet_parking">Parking gratuit « cabinet d’échographie »</p>
        <p class="map_cabinet_warning">Bien qu’il soit indiqué « Cabinet d’échographie », je ne suis pas diplômée en échographie. <br>
            Je pratique juste des échographies « plaisir » durant la grossesse sans fin diagnostic.</p>
        <p class="map_cabinet_rpps">N° RPPS = 10 000 431 055   |   N° SIRET = 91945842200012</p>
    </div>
</div>

<div>
    <svg xmlns="http://www.w3.org/2000/svg" width="1440" height="1152" viewBox="0 0 1440 1152" fill="none">
        <path d="M1449 0C1175.5 125.017 297 119.648 -7 0V965.106C583.603 1319.11 1209.75 1082.84 1449 965.106V0Z" fill="#78C2CB" fill-opacity="0.71"/>
    </svg>

    <div>

    </div>
    <div>
        
    </div>
</div>

 <!---------------- CAROUSEL ------------------------------------------------>
  <h2 class="titre_carousel">Mes Services En Image</h2>
 
 <div class="items">
		<div class="item active">
			<img src="http://via.placeholder.com/500x500">
		</div>
		<div class=" item next">
			<img src="http://via.placeholder.com/500x500">
		</div>
		<div class="item">
			<img src="http://via.placeholder.com/500x500">
		</div>
		<div class="item">
			<img src="http://via.placeholder.com/500x500">
		</div>
		<div class="item prev">
			<img src="http://via.placeholder.com/500x500">
		</div>
		<div class="button-container">
			<div class="button"><i class="fas fa-angle-left"></i></div>
			<div class="button"><i class="fas fa-angle-right"></i></div>
		</div>
	</div>

    <script>
        const slider = document.querySelector(".items");
		const slides = document.querySelectorAll(".item");
		const button = document.querySelectorAll(".button");

		let current = 0;
		let prev = 4;
		let next = 1;

		for (let i = 0; i < button.length; i++) {
			button[i].addEventListener("click", () => i == 0 ? gotoPrev() : gotoNext());
		}

		const gotoPrev = () => current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);

		const gotoNext = () => current < 4 ? gotoNum(current + 1) : gotoNum(0);

		const gotoNum = number => {
			current = number;
			prev = current - 1;
			next = current + 1;

			for (let i = 0; i < slides.length; i++) {
				slides[i].classList.remove("active");
				slides[i].classList.remove("prev");
				slides[i].classList.remove("next");
			}

			if (next == 5) {
				next = 0;
			}

			if (prev == -1) {
				prev = 4;
			}

			slides[current].classList.add("active");
			slides[prev].classList.add("prev");
			slides[next].classList.add("next");
		}
    </script>
    
<?php
get_footer();
?>
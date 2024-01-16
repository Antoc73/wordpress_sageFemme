<?php
    /*Template Name: Home */

    get_header();
?>

<?php
    $banner_home = get_field('bannerHome');
    //var_dump($banner_home);
    $photo_home = get_field('photoHome');
    //var_dump($banner_home);
    $photo_bulle1 = get_field('img1');
    $photo_bulle2 = get_field('img2');
    $photo_bulle3 = get_field('img3');
    
?>

<div class="banner_home">
    <img class="banner_home_img"
        src="<?php echo($banner_home['sizes']['banner']); ?>" 
        height="<?php echo($banner_home['sizes']['banner-height']); ?>" 
        width="<?php echo($banner_home['sizes']['banner-width']); ?>" 
        alt="<?php echo($banner_home['alt']); ?>"  loading="lazy">

    <svg class="mask_banner" width="100%" viewBox="0 0 1440 152" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1440 0.999878C953.6 269.159 276.333 112.733 -1.5 0.999878V151H8H1440V0.999878Z" fill="#FFFAF8" stroke="white"/>
    </svg>
    <h1 class="titre white">
    Votre Sage-femme <br>
        à Lorient
    </h1>
</div>

<div class="presentation">
    <svg class="bg_photo_home" viewBox="0 0 599 599" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_i_50_604)">
        <rect width="599" height="599" rx="299.5" fill="#E8A7B7"/>
        </g>
        <defs>
        <filter id="filter0_i_50_604" x="-109" y="0" width="708" height="711.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
        <feMorphology radius="42" operator="dilate" in="SourceAlpha" result="effect1_innerShadow_50_604"/>
        <feOffset dx="-109" dy="179"/>
        <feGaussianBlur stdDeviation="77.4"/>
        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
        <feColorMatrix type="matrix" values="0 0 0 0 0.968627 0 0 0 0 0.847059 0 0 0 0 0.768627 0 0 0 1 0"/>
        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_50_604"/>
        </filter>
        </defs>
    </svg>

    <img class="photo_home"
        src="<?php echo($photo_home['sizes']['square']); ?>" 
        alt="<?php echo($photo_home['alt']); ?>"  loading="lazy">
    <svg class="mask_photo_accueil" viewBox="0 0 580 201" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M175.848 5.7796C107.108 5.7796 29.9742 26.6123 0 37.0286V201H580V0C543.032 17.6762 451.211 37.0286 379.673 37.0286C290.25 37.0286 261.774 5.7796 175.848 5.7796Z" fill="#FFFAF8"/>
    </svg>
    <h2 class="MHA_presentation_accueil">Marie-Hélène Aerts</h2>
    <p class="profession_presentation_accueil">Sage-femme libérale </p>
    <p class="phrase_presentation_accueil"> « Passionnée par mon métier depuis plus de 20 ans,
        je peux vous accueillir au cabinet à tout moment 
        de votre vie de femme et à toutes les étapes 
        de votre maternité. » </p>

        <img class="bulle_home1"
        src="<?php echo($photo_bulle1['sizes']['square']); ?>" 
        alt="<?php echo($photo_bulle1['alt']); ?>"  loading="lazy">
        <img class="bulle_home2"
        src="<?php echo($photo_bulle2['sizes']['square']); ?>" 
        alt="<?php echo($photo_bulle2['alt']); ?>"  loading="lazy">
        <img class="bulle_home3"
        src="<?php echo($photo_bulle3['sizes']['square']); ?>" 
        alt="<?php echo($photo_bulle3['alt']); ?>"  loading="lazy">

</div>

 <!----------------CAROUSEL------------------------------------------------>
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
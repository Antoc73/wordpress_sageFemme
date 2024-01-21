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

    $profession = get_field('profession'); /* <?php echo($profession);?> */
    $citation = get_field('citation');

    
    $questions = get_field('questions');
    
?>

<div class="banner_home">
    <img class="banner_home_img"
        src="<?php echo($banner_home['sizes']['banner']); ?>" 
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
    <p class="profession_presentation_accueil"><?php echo($profession);?></p>
    <p class="phrase_presentation_accueil"><?php echo($citation);?></p>

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

<div class="besoin_aide">
<svg class="besoin_aide_svg_top" viewBox="0 0 1441 74" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M499.5 3.5C263 3.5 151.5 43.5 0 43.5V73.5H1440.5V3.5C1397.67 16.8333 1271.1 43.5 1107.5 43.5C903 43.5 736 3.5 499.5 3.5Z" fill="#FFEADD"/>
<path d="M144.5 16.5C98.9 16.5 29.5 28.1667 0.5 34V64.5H1439V11.5C1429.67 7.66667 1380.2 0 1257 0C1103 0 679.5 34 520 34C360.5 34 201.5 16.5 144.5 16.5Z" fill="#FFEADD" fill-opacity="0.4"/>
<path d="M426.148 30.7166C314.109 30.7166 95.3665 22.3636 0 18.1872V74H1439V30.7166C1337.96 21.4777 1098.88 3 950.83 3C765.766 3 566.197 30.7166 426.148 30.7166Z" fill="#FFEADD" fill-opacity="0.5"/>
</svg>

    <h2 class="besoin_aide_titre">Besoin d'aide ?</h2>

    <div class="questions">
        <?php foreach ($questions as $question) { ?> 
            <a href="<?php echo($question['question_lien']); ?>" class="question_div">
                <div style="border:15px solid <?php echo($question['question_color']); ?>;" class="question">
                    <p class="question_txt"> <?php echo($question['question_txt']); ?></p>
                    <p class="question_reponse"  style="color:<?php echo($question['question_color']); ?>;"> <?php echo($question['question_reponse']); ?></p> 
                </div>
                <svg class="fleche_question_bulle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 115" fill="none">
                    <path d="M100.419 108.743C100.419 114.318 93.4795 116.879 89.8578 112.641L2.14214 9.99469C-1.1853 6.10086 1.58164 0.0967712 6.70353 0.0967712H94.4194C97.7331 0.0967712 100.419 2.78307 100.419 6.09679L100.419 108.743Z" 
                    fill="<?php echo($question['question_color']); ?>"/>
                </svg>
            </a>
        <?php } ?>
    </div>

<svg class="besoin_aide_svg_bottom" viewBox="0 0 1441 74" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M499.5 3.5C263 3.5 151.5 43.5 0 43.5V73.5H1440.5V3.5C1397.67 16.8333 1271.1 43.5 1107.5 43.5C903 43.5 736 3.5 499.5 3.5Z" fill="#FFEADD"/>
<path d="M144.5 16.5C98.9 16.5 29.5 28.1667 0.5 34V64.5H1439V11.5C1429.67 7.66667 1380.2 0 1257 0C1103 0 679.5 34 520 34C360.5 34 201.5 16.5 144.5 16.5Z" fill="#FFEADD" fill-opacity="0.4"/>
<path d="M426.148 30.7166C314.109 30.7166 95.3665 22.3636 0 18.1872V74H1439V30.7166C1337.96 21.4777 1098.88 3 950.83 3C765.766 3 566.197 30.7166 426.148 30.7166Z" fill="#FFEADD" fill-opacity="0.5"/>
</svg>

</div>

 <!---------------- CAROUSEL ------------------------------------------------>
<h2 class="titre_carousel">Mes services en image</h2>
 
 <?php
     $img_carousel1 = get_field('img_carousel_1');
     $img_carousel2 = get_field('img_carousel_2');
     $img_carousel3 = get_field('img_carousel_3');
     $img_carousel4 = get_field('img_carousel_4');
     $img_carousel5 = get_field('img_carousel_5');
 ?>
 
  <div class="items">
     <svg class="nuage_carousel" viewBox="0 0 1440 704" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M1549.66 149.89C1729.49 190.627 1784.23 331.317 1789.12 396.571L1806.89 691.908L-462.613 691.908C-475.745 649.097 -486.868 530.095 -426.307 396.571C-365.746 263.047 -137.92 281.717 -31.5778 307.743C-60.9314 263.99 -70.5099 156.906 126.005 78.6022C322.52 0.298225 473.099 134.992 523.824 212.126C577.382 133.483 731.154 -11.3569 917.781 38.4317C1104.41 88.2204 1143.34 238.718 1139.48 307.743C1201.28 238.152 1369.83 109.154 1549.66 149.89Z" fill="white"/>
         <path d="M1845.12 161.668C2040.34 202.37 2099.77 342.941 2105.08 408.138L2124.37 703.224L-339.382 703.224C-353.638 660.45 -365.714 541.549 -299.969 408.139C-234.224 274.728 13.1016 293.383 128.546 319.387C96.6802 275.67 86.2816 168.678 299.617 90.4408C512.952 12.2035 676.42 146.782 731.486 223.851C789.628 145.275 956.562 0.55833 1159.16 50.3046C1361.76 100.051 1404.03 250.42 1399.84 319.387C1466.92 249.855 1649.9 120.967 1845.12 161.668Z" fill="white" fill-opacity="0.62"/>
         <path d="M1401.75 89.8125C1596.97 119.889 1656.4 223.765 1661.71 271.944L1681 490L-782.777 490.001C-797.033 458.392 -809.109 370.529 -743.363 271.944C-677.618 173.359 -430.29 187.144 -314.844 206.36C-346.71 174.055 -357.109 94.9925 -143.772 37.1783C69.5656 -20.636 233.035 78.8123 288.102 135.763C346.244 77.6983 513.18 -29.2413 715.783 7.51919C918.386 44.2797 960.651 155.397 956.458 206.36C1023.55 154.979 1206.53 59.7357 1401.75 89.8125Z" fill="white" fill-opacity="0.27"/>
     </svg>
         
         <div class="item active">
             <img class=""
             src="<?php echo($img_carousel1['sizes']['square']); ?>" 
             alt="<?php echo($img_carousel1['alt']); ?>"  loading="lazy">
         </div>
         <div class=" item next">
             <img class=""
             src="<?php echo($img_carousel2['sizes']['square']); ?>" 
             alt="<?php echo($img_carousel2['alt']); ?>"  loading="lazy">
         </div>
         <div class="item">
             <img class=""
             src="<?php echo($img_carousel3['sizes']['square']); ?>" 
             alt="<?php echo($img_carousel3['alt']); ?>"  loading="lazy">
         </div>
         <div class="item">
             <img class=""
             src="<?php echo($img_carousel4['sizes']['square']); ?>" 
             alt="<?php echo($img_carousel4['alt']); ?>"  loading="lazy">
         </div>
         <div class="item prev">
             <img class=""
             src="<?php echo($img_carousel5['sizes']['square']); ?>" 
             alt="<?php echo($img_carousel5['alt']); ?>"  loading="lazy">
         </div>
         <div class="button-container">
            <svg  class="button fas fa-angle-right" width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect x="77.5239" y="39.1702" width="54.2403" height="55.3948" transform="rotate(135 77.5239 39.1702)" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_102_307" transform="matrix(0.0106384 0 0 0.0104167 -0.0106426 0)"/>
                </pattern>
                <image id="image0_102_307" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                </defs>
            </svg>
              
            <svg  class="button fas fa-angle-right" width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect y="38.3538" width="54.2403" height="55.3948" transform="rotate(-45 0 38.3538)" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_102_307" transform="matrix(0.0106384 0 0 0.0104167 -0.0106426 0)"/>
                </pattern>
                <image id="image0_102_307" width="96" height="96" xlink:href="data:image/png;base64,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"/>
                </defs>
            </svg>
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
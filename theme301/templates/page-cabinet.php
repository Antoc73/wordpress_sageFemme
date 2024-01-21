<?php
    /*Template Name: Cabinet */

    get_header();
?>

<?php
    $banner_cabinet = get_field('bannerCabinet');
    //var_dump($banner_cabinet);
    $map_cabinet = get_field('img_map_cabinet');
    //var_dump($map_cabinet);

    $adresse = get_field('adresse');
    $parkingfree = get_field('parkingfree');
    $infosupmap = get_field('infosupmap');
    $rpps = get_field('rpps');
    
    $h_lun_m = get_field('h_lun_m');
    $h_lun_a = get_field('h_lun_a');
    $h_mar_m = get_field('h_mar_m');
    $h_mar_a = get_field('h_mar_a');
    $h_mer_m = get_field('h_mer_m');
    $h_mer_a = get_field('h_mer_a');
    $h_jeu_m = get_field('h_jeu_m');
    $h_jeu_a = get_field('h_jeu_a');
    $h_ven_m = get_field('h_ven_m');
    $h_ven_a = get_field('h_ven_a');
    
    $bus_acces1 = get_field('bus_acces1');
    $bus_acces2 = get_field('bus_acces2');

    $p_cab = get_field('p_cab');
    
    $dossier = get_field('dossier','options');
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
    <p class="sous_titre_cabinet">
        Conventionné <br> Accès PMR
    </p>
</div>

<p class="p_cabinet paragraphe_1_cabinet">
    Si c'est votre 1er RV au cabinet et dans la mesure du possible, merci de compléter le <a href="<?php echo($dossier['url']);?>" download> dossier médical suivant</a>.
</p>
<div class="div_p_cabinet">
<p class="p_cabinet">
    <?php echo($p_cab);?>
</p>
</div>

<svg class="clouds_cabinet" viewBox="0 0 1440 575" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M190.296 404.405C72.4604 374.656 36.5902 271.911 33.3845 224.257L21.7427 8.57452L1508.85 8.57439C1517.46 39.8387 1524.75 126.745 1485.06 224.257C1445.38 321.768 1296.1 308.133 1226.41 289.127C1245.65 321.08 1251.93 399.282 1123.16 456.467C994.389 513.651 895.72 415.286 862.482 358.955C827.388 416.388 726.628 522.163 604.338 485.803C482.049 449.443 456.538 339.535 459.069 289.127C418.576 339.949 308.131 434.155 190.296 404.405Z" fill="#FFDBE4" fill-opacity="0.49"/>
<path d="M288.979 485.494C161.058 455.77 122.118 353.112 118.638 305.499L106 90.0001L1720.4 90C1729.74 121.238 1737.65 208.07 1694.57 305.499C1651.49 402.927 1489.43 389.304 1413.78 370.313C1434.66 402.239 1441.48 480.375 1301.69 537.511C1161.9 594.647 1054.78 496.365 1018.7 440.082C980.602 497.466 871.217 603.151 738.461 566.822C605.705 530.493 578.01 420.679 580.758 370.313C536.799 421.092 416.9 515.218 288.979 485.494Z" fill="#FFDBE4" fill-opacity="0.24"/>
<path d="M-3.34897 363.107C-131.271 335.853 -170.212 241.725 -173.692 198.067L-186.33 0.473694L1428.08 0.473553C1437.42 29.1158 1445.34 108.734 1402.26 198.067C1359.18 287.401 1197.11 274.909 1121.46 257.497C1142.35 286.77 1149.16 358.413 1009.37 410.802C869.577 463.191 762.462 373.075 726.379 321.469C688.28 374.085 578.895 470.989 446.137 437.678C313.379 404.367 285.685 303.678 288.432 257.497C244.473 304.056 124.573 390.362 -3.34897 363.107Z" fill="#FFDBE4"/>
</svg>


<div class="calendar_div">
    <div class="calendar">
        <div class="date_div">
            <p class="date">Lundi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires"><?php echo($h_lun_m);?></p>
            <p class="horaires"><?php echo($h_lun_a);?></p>
        </div> 
    </div>
    <div class="calendar">
        <div class="date_div">
            <p class="date">Mardi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires"><?php echo($h_mar_m);?></p>
            <p class="horaires"><?php echo($h_mar_a);?></p>
        </div> 
    </div>
    <div class="calendar">
        <div class="date_div">
            <p class="date">Mercredi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires"><?php echo($h_mer_m);?></p>
            <p class="horaires"><?php echo($h_mer_a);?></p>
        </div> 
    </div>
    <div class="calendar">
        <div class="date_div">
            <p class="date">Jeudi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires"><?php echo($h_jeu_m);?></p>
            <p class="horaires"><?php echo($h_jeu_a);?></p>
        </div> 
    </div>
    <div class="calendar">
        <div class="date_div">
            <p class="date">Vendredi</p>
        </div>
        <div class="horaires_div">
            <p class="horaires"><?php echo($h_ven_m);?></p>
            <p class="horaires"><?php echo($h_ven_a);?></p>
        </div> 
    </div>
</div>
<p class="horaires_w">Horaires pouvant varier <br>
    si visite à domicile.</p>

<div class="wrap map_div">
    <a href=" <?php echo($map_lien); ?>" class="map_cabinet">
        <img class="img_map_cabinet"
        src="<?php echo($map_cabinet['sizes']['square']); ?>" 
        alt="<?php echo($map_cabinet['alt']); ?>"  loading="lazy">
    </a>
    <div class="infos_map_cabinet">
        <h2 class="titre_map">Adresse</h2>
        <p class="map_cabinet_rue"><?php echo($adresse);?></p>
        <p class="map_cabinet_parking"><?php echo($parkingfree);?></p>
        <p class="map_cabinet_warning"><?php echo($infosupmap);?></p>
        <p class="map_cabinet_rpps"><?php echo($rpps);?></p>
    </div>
</div>

<div class="bus_div">
    <svg class="fond_bus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 1152" fill="none">
        <path d="M1449 0C1175.5 125.017 297 119.648 -7 0V965.106C583.603 1319.11 1209.75 1082.84 1449 965.106V0Z" fill="#78C2CB" fill-opacity="0.71"/>
    </svg>

    <div class="info_bus">
        <h2>Accès bus</h2>
        <p><?php echo($bus_acces1);?></p>
        <p><?php echo($bus_acces2);?></p>
    </div>

    <svg class="bus_svg" viewBox="0 0 604 604" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.968" fill-rule="evenodd" clip-rule="evenodd" d="M129.176 61.9336C243.607 61.737 358.036 61.9336 472.465 62.5235C488.261 66.1285 498.288 75.7625 502.547 91.4258C503.137 106.757 503.334 122.093 503.137 137.434C512.975 137.238 522.806 137.434 532.629 138.023C535.971 139.793 538.527 142.349 540.297 145.691C541.084 190.912 541.084 236.135 540.297 281.355C538.453 285.164 535.504 287.72 531.449 289.023C522.02 289.613 512.583 289.809 503.137 289.613C503.334 346.632 503.137 403.651 502.547 460.668C499.348 473.502 491.68 482.545 479.543 487.801C478.721 496.48 477.738 505.13 476.594 513.754C472.216 528.357 462.581 537.205 447.691 540.297C433.928 541.084 420.166 541.084 406.402 540.297C382.231 532.286 372.4 515.573 376.91 490.16C326.576 490.16 276.244 490.16 225.91 490.16C230.42 515.573 220.59 532.286 196.418 540.297C182.655 541.084 168.892 541.084 155.129 540.297C140.239 537.205 130.604 528.357 126.227 513.754C125.082 505.13 124.1 496.48 123.277 487.801C111.141 482.545 103.473 473.502 100.273 460.668C99.6836 403.651 99.487 346.632 99.6836 289.613C90.238 289.809 80.8005 289.613 71.3711 289.023C67.3164 287.72 64.3672 285.164 62.5235 281.355C61.737 236.135 61.737 190.912 62.5235 145.691C64.293 142.349 66.849 139.793 70.1914 138.023C80.0143 137.434 89.845 137.238 99.6836 137.434C99.4871 122.093 99.6837 106.757 100.273 91.4258C104.618 76.2685 114.252 66.4378 129.176 61.9336ZM135.074 87.8867C245.966 87.6901 356.857 87.8867 467.746 88.4766C472.268 89.8529 475.217 92.8021 476.594 97.3242C477.184 110.688 477.381 124.058 477.184 137.434C360.002 137.434 242.819 137.434 125.637 137.434C125.44 124.058 125.637 110.688 126.227 97.3242C127.823 92.7823 130.772 89.6364 135.074 87.8867ZM87.8867 163.387C91.819 163.387 95.7514 163.387 99.6836 163.387C99.6836 196.811 99.6836 230.236 99.6836 263.66C95.7514 263.66 91.819 263.66 87.8867 263.66C87.8867 230.236 87.8867 196.811 87.8867 163.387ZM125.637 163.387C242.819 163.387 360.002 163.387 477.184 163.387C477.184 221.978 477.184 280.569 477.184 339.16C360.002 339.16 242.819 339.16 125.637 339.16C125.637 280.569 125.637 221.978 125.637 163.387ZM503.137 163.387C507.069 163.387 511.002 163.387 514.934 163.387C514.934 196.811 514.934 230.236 514.934 263.66C511.002 263.66 507.069 263.66 503.137 263.66C503.137 230.236 503.137 196.811 503.137 163.387ZM125.637 365.113C242.819 365.113 360.002 365.113 477.184 365.113C477.381 395.002 477.184 424.887 476.594 454.77C475.78 457.95 474.01 460.506 471.285 462.438C414.757 463.808 358.132 464.398 301.41 464.207C244.688 464.398 188.063 463.808 131.535 462.438C128.81 460.506 127.041 457.95 126.227 454.77C125.637 424.887 125.44 395.002 125.637 365.113ZM184.621 402.863C198.354 403.585 202.483 410.271 197.008 422.918C188.493 428.648 181.808 427.074 176.953 418.199C175.786 411.094 178.343 405.982 184.621 402.863ZM411.121 402.863C424.854 403.585 428.983 410.271 423.508 422.918C414.993 428.648 408.308 427.074 403.453 418.199C402.286 411.094 404.843 405.982 411.121 402.863ZM150.41 490.16C166.926 490.16 183.441 490.16 199.957 490.16C203.233 509.495 195.171 517.753 175.773 514.934C156.228 518 147.774 509.742 150.41 490.16ZM402.863 490.16C419.379 490.16 435.895 490.16 452.41 490.16C455.047 509.742 446.592 518 427.047 514.934C407.649 517.753 399.587 509.495 402.863 490.16Z" fill="#FFFAF8"/>
        <path opacity="0.961" fill-rule="evenodd" clip-rule="evenodd" d="M208.215 99.6836C270.347 99.487 332.476 99.6836 394.605 100.273C403.095 105.379 404.864 112.261 399.914 120.918C398.482 122.745 396.712 124.121 394.605 125.047C332.475 125.834 270.345 125.834 208.215 125.047C197.269 116.596 197.269 108.141 208.215 99.6836Z" fill="#FFFAF8"/>
        <path opacity="0.949" fill-rule="evenodd" clip-rule="evenodd" d="M178.723 376.91C212.306 374.906 227.838 390.635 225.32 424.098C217.823 446.439 202.29 455.68 178.723 451.82C156.382 444.323 147.14 428.79 151 405.223C154.94 390.469 164.182 381.032 178.723 376.91ZM184.621 402.863C178.343 405.982 175.786 411.094 176.953 418.199C181.808 427.074 188.493 428.648 197.008 422.918C202.483 410.271 198.354 403.585 184.621 402.863Z" fill="#FFFAF8"/>
        <path opacity="0.949" fill-rule="evenodd" clip-rule="evenodd" d="M405.223 376.91C438.806 374.906 454.338 390.635 451.82 424.098C444.323 446.439 428.79 455.68 405.223 451.82C382.882 444.323 373.64 428.79 377.5 405.223C381.44 390.469 390.682 381.032 405.223 376.91ZM411.121 402.863C404.843 405.982 402.286 411.094 403.453 418.199C408.308 427.074 414.993 428.648 423.508 422.918C428.983 410.271 424.854 403.585 411.121 402.863Z" fill="#FFFAF8"/>
        <path opacity="0.956" fill-rule="evenodd" clip-rule="evenodd" d="M258.941 401.684C287.256 401.487 315.569 401.684 343.879 402.273C351.079 405.86 353.634 411.562 351.547 419.379C349.777 422.721 347.221 425.277 343.879 427.047C315.566 427.834 287.254 427.834 258.941 427.047C250.785 422.599 248.623 416.111 252.453 407.582C254.494 405.338 256.656 403.372 258.941 401.684Z" fill="#FFFAF8"/>
    </svg>
</div>


 <!---------------- CAROUSEL ------------------------------------------------>
<h2 class="titre_carousel">Mon cabinet</h2>
 
<?php
    $img_carousel1 = get_field('img_carousel_1');
    $img_carousel2 = get_field('img_carousel_2');
    $img_carousel3 = get_field('img_carousel_3');
    $img_carousel4 = get_field('img_carousel_4');
    $img_carousel5 = get_field('img_carousel_5');
    $link_carousel1 = get_field('link_img_carousel_1');
    $link_carousel2 = get_field('link_img_carousel_2');
    $link_carousel3 = get_field('link_img_carousel_3');
    $link_carousel4 = get_field('link_img_carousel_4');
    $link_carousel5 = get_field('link_img_carousel_5');
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
                <image id="image0_102_307" width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAADYBJREFUeF7tXX2QW1UV/52Xbd7L0vLRgoDyPZTS7uZlqQw43bytCIXy/eE4AwwzKlAq8iXSosxIAUdnVD4t+AGUwgwMHQuCSmmtRTtN0kpHbJuka4UCFeRLKKXbbbvJ7uYduUlWlnXz7n3v5SVZzZvZv/bce849v3vuxznnnhCaX101QHXl3mSOJgB1ngRNAJoA1FkDdWbftIAmAHXWQJ3ZNy2gCUBlDXAyc0AefDKAKQBNBmMyCIeDEAFjPwDjy613g9ADxl4w3gJhK8BbAbysg9aTZX5UZz1XZN9QFsDLt+r94/tms4ZTwZgJoB2A5lN5NoAswGtA+KO+q3UlnTU577PPqjWvOwDMrOVT2S8RcAkDFwHYv2qjG72jnQQ8YzM/aVjmaiISANXtqxsA3N0dzu0YvJhAtwA4vk4aeB3ghXpoz0M0Y0ZfPWSoOQC8epvRH+q9ngk3AjikHoMehed7YL5H3926sNbLU00ByCXT5wJ0H4BjGkTxI8V4jYBbdMt8qlby1QSAvmT3EYTCLwGcWauB+eLDWM4Uujpitb3pqx+FxoEDkE9kzrcJiwmYqCBPI5H0ENFVejy6NEihAgNArPX5lt67AFzjcwAfAEgRYxOItxJpWwsDg9uNllAPIv27i333hcfnBgv7hcLjDmK2J4NpMoM7AIoDfKAP/gzCA/quyPyg9oZAAChfoJ4DqNPj4DcA9CSxtiJsTdtCROylH2am/rXpaYzQmWC+BMB0L/0ASOrA+UFc6KoOwN7V6cO0Fvo9gDaXgxW32YcBftCIx1522VaJPL8uczzbuAqMOcNu0UptAWy2Q/bs1hkdb6s2UKGrKgC5VHoKmP4A4AgV5mWanQS+Kwz6eRAzbDQ5eF33xP5C4ZsMzAOKLg3V703AnmVYHa+oNpDRVQ2Aves2fU4r0FqAjpQxLf+fCfzEwDht/vgvRP+l2KaqZLvWb5kU7u9fANC1LlwebzFCndU6IVUFgNKaj6SLZed1W8NlrZ3mn6uqUY+d7U1s7tQ0+wkwjlLsYrM+WLDolBN2KtJXJPMNQOm0s+sF1Q2XmX9l5Afm0qwTe/wKX832vOql/fJG+GEAX1HsN6n3Rmb5PR35BiCXzDygeNQUJ5l5hmXeozjAupDlEun5IPoxoJCwQLjfiJvX+xHUFwC5ZPYcgH+nIOwgg+ZGrOhiP8LWqm1fInsZEQtZx0l4MjEu0rvM33iVzTMAZffCJgAHSJgPgOlCoyv6vFch69Eul8ieDeJnZSAwsINt6midGf2nFzk9A5BLZJ4H4SzZDGHG5ZEu8zEvwtW7TT6ZvoRBT8hPSLzMsGLnepHXEwC5VPo8MP1WzpDmGVb0bjld41LkUtl5YL5TKiHTOV6s3DUAImyYn5ATIb7JEqGeNixT9UQhHV89CfqSmSdFxE4iw2v64IR2OuXonBtZXQOQT2RuZoI4JTh9r+u5/umNdtR0o5jhtLx64/75ltAGAEc79kE034hHhQNS+XMFQNnDuU0SybJtm6zWmdF1ylKMAcLiZY1scdl00tm7em/kaDd3A1cA5FKZuWCIwIrDx48YVuzKMaBT1yLmU5lHmfE1x9Ezz4l0xRapdq4MAC9dGsofOnWLZO3fOaDxlAmdsfdVBRhJV7yR6uGlNvGCViu23ms/QbTb/WL24JYBFp5aJwfeK3o8OlU120IZgFwycxqAVU4DI/D3dCv2Q6+DF8rvN8IrGRDJWD02+IxGAyGfytzKjO87WoHNp0Zmxv6kogdlAPLJzGIGvu7Q6Z7+8Lgj9z156ocqjEeb+cOUP/TvHpt4dms89qKXPoNoI1zZ+ULhDcd4AtEiIx4VMQfppwRAefN91zFpinCvETe/LeU4CsGImT+SouEsIZfI3AvCtxzG+pE+MXQItbX1y/ShBIAIrDPB2d9BfLyXSJZE+Z9YgsflKJfMOIYzDctU0sFwRRYjawVscVYunWtY0WVVASCXyiwE4zqHzv5qWOaJMmaj/T+XyKwE4XSFtp4sIQgAhKy5VGYDGCdUlpt+alhRJyspNlVCP5fMCKdbzIGZZ5fD3mT6ZA20UjE06BqEwAAoua1/UlEnhI1G3JQmAUgBKEe7tjs5pIhDbXpX298UZvGoJP2J9PQC0SrF3CFXG3NQAOTXptvZpqzDmG19sDBJFjWTApBLpmcDtMKB0Qd6PHqw19SRoX6DsoSgABApL/nU5vcd8440OsPojIokBQdDkUzbXDJ9QzmfswIlP2NYsS97nf3D2wUBQlAAFPeBZOYZABdWHDvT9UZX9H6fADiHHIlxm95lOl5M3IBT7eUoSAD6kunbCXRb5fHxQsOK3eAXAGFCsyp1QuBLdSu2xI2SZbTVBCFQAEqhy8cdxrPCsEzHoJXCHpDpBjCtEhNN004Kd7b/RaZUt/+v1nIUJAD9iU0n2aRV9lcRskbcNP1agEjRPrxSJ4zQkdVKUhrJoxqWECQAfas3HkUtIeGeH/0j/MOIm44xBBUL2OEUeNdDoUk0o03QBPL5BSFIAHatfunAcEtYZG9XQmC7YUUP8msBwp9RMT1DnxjSVXweftDxA0KQAJTCs31OIci8YZmGXwDEk85wpU5qAYDg7RWEQAEovYFwetyXMywz4guAvmTmQ6cbatBL0HDhvYCgMTnmn3pxxg3JVKslSPi+K6abB7kJjzZz3J6OZD4mPwDUahOuyzHUyWxdguC4/fgBoCxH5WBRVY6hEndxEBcxlQ3b5XJUsUs/AJRzSCtfxBjLjS7zbF97gCz7mUC361b0DhWlVZumGiD4AiCVuYMYCxyOodKYgMI9QOaMw7OGZYoaD3X5/C5HfgDIJTMiefeCytcAXGfETZG+70AiUZvcHU3b9Xj7Z/y6o/2g5wcErwCIIiP9yez7TJhUUfZquKOVAjJkt+vxDrFZ+/5k53bfDEZ04BWA/JpMlDVkHOQp6IOFA30HZAQDaUiS+WajKybPIFbQ3pgBQJ4ju8GwzM/LhizdA4oAyILyivFPmTBlsD09ylbpezQarxYgnZSKaTqKAMjfA1AIU/UZ5t+9KmKo3ViwgPya7FTW2DkGrvheQAmAstPpPcfELMZ9RpcpagD5+sYCALlk9j6AK0a6xLMlY2LoUBUnpRIApaUhvQigKxy06ys1caxYgFJqIvCQYZlzVWaiMgB9ifSpRPSC5Ex7q26ZP1BhXImm0S0gn8gsYILjxZODSM4tF9cT6XjHOSi4Z3AcTfFTeqCRAdi9uvuQlpaCSE/f10EHL39cY2ha1dPTBcO+RGYOER6SWMGjumVe7scKGrVtPpF5jAlfdZKPQVe4eQ+tvAQJpuXNWMRAD3UQgm3WrNau9rWNqkgvcvUlN8UJWkKSzvmO3hs5JrAnSsXNWJYTWRrdNn2wMF12C/SiiHq0KT7SGxfaqFDM4ya3pRhcWUDRCrq7w/kdBZET6bQXCNL/oWeq2SUEvtgRfMar+u5Iu5vZL/pzDUDpSFqsEfGcdDZW0UUh5RUQgeKzXKHJs424udytGJ4AKIKQyiwDwzHYIAxmTJcqSGUuZYYoVSDREz1nWNHz3CrfswWIhnvXZA8njTcppJQPAHSRymsRLwMIqk3ZykXyrWPFFGJ8WChwR+spsbe8yOLZAkobcrGiiFiKZP0MMtE3IvHoI16ErHUbl+VqLtS7TIW6GaOPQqY46dilntJPemAQ3ez2Kb9UgCoTlNf8HylMKkEiDTnKxPMNQPluIN4PWzJm5f8/pef65zRaHYnSUbNlEZhV3zqs0XsjZ7g99YzUkW8AikfTUtE+cUkRP7ig8m2zbbqsUepJFC9ZpD2ucM4vjY2Q1QcKXdW451QFACHTntSGz4bQslZ5EMCYLVtp2zTDa4WsQCxgqNNcctNxgCaWIzeFW3uIcHdYC/0syCzr4QMX9UL1/MA1TLhJ4lgboS9+A+DTG7Jw65CkpQKumihdrLocDTXdDcYiasGD1YisjbYOliJZmAuwqOayj8pa+R8aQraAwdn7xKe/46qdhLhqS9BwPuU9QRzNVDfmT4tJ2Aibl1AIK8IzzG6vKS/F4t2JbDsIZzKJ4t3U4VF5a/TBwgXVWPMDXYI+BYLInd+3704wRFlgH0DTdoBTDE5rRFvJtrfapG3XgY/QG9lb5DmhrzUPHGCDDwoRHWszTyaiDrIRd8zbkaPBAC3Ue43v+D3tVGLlQzFy6QWFKPBHNi32qQg1ZtWl6iHmK/Wu2NPV7XaksQfZe7lv4bbQQvwLBd9RDaRRYcHL7EFc7dW9oMJhiCZwCxguTLno00IAU90IWTNaxqsgurGWfquaAiAUWS57eS3A4gjoFFmrmd4BiJPN3frE0AMqqSTVFKzmAAwJP+yH3L5bR4t4DeD7/69+yG3k7BHZFrlE5ouk4VLhtlaoRe1rAoqkKQJ+zaQtMTrb1qhmL/hi6tC4bhYwmkylcKctijedBuIuMMQr85DPwRc+LqiRBgtfFb2gT9JW1XqZcZK/oQD4L+sQHspwy0lgFvHn48A4FoTDwNiHgf2pfJtlYA8B4tcsxM9avV38KVsi8feKvje/vtE8r8PH2dAA+Jz5Y6J5E4A6w9QEoAlAnTVQZ/ZNC2gCUGcN1Jl90wKaANRZA3Vm/28KvcGsvLx2NQAAAABJRU5ErkJggg=="/>
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
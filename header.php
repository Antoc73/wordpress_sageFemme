<!DOCTYPE html>
<html>
    <head>
        <?php wp_head() ?>
    </head>
<body>
<header>

<div class="full_header">
    <div class=" header_background"> <!--bg header-->
        <svg width="100%" height="auto" viewBox="0 0 1440 155" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1451 0H-8.00049V60H1451V0Z" fill="#F7C4D0"/>
        <path d="M155.08 144.359L-20.5004 144.359C-108 144.359 -73.47 7.78222 -73.47 7.78222C-86.8635 -8.09941 -51.0666 -38.8085 192.094 -76.809C496.044 -124.31 308.867 51.0472 255.603 59.7223C218.921 65.6967 233.5 135 155.08 144.359Z" fill="#F7C4D0"/>
        </svg>
        <div class="header_blur">

        </div>
    </div>
    <div class=" logo_header_div"> <!--Logo-->

    </div>
    <div class="header_and_subheader ">
        <div class=" header"><!--heder-->

            <h3 class="white MHA">
                Marie-Hélène AERTS
            </h3> 

            <div class=" header_right">
                <a href="" class="red margin_header document">DOCUMENTS</a>
                <?php wp_nav_menu('menu')?>
                <a href="" class="red margin_header a_propos">A PROPOS</a>



                
                <div class="recherche">
                    <form class="margin_header" action="" method="get"> <!--recherche-->
                    <input class=" recherche_form" type="text" name="s" placeholder="recherche...">
                        
                    </form>
                    <button class="button_search">
                        <svg width="auto" height="100%" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.2678 28.3033L27.8034 24.7678L35.9351 32.8995C36.9114 33.8758 36.9114 35.4587 35.9351 36.435V36.435C34.9588 37.4114 33.3759 37.4114 32.3996 36.435L24.2678 28.3033Z" fill="black"/>
                            <circle cx="17.9037" cy="18.4038" r="10.5" transform="rotate(-45 17.9037 18.4038)" stroke="black" stroke-width="4"/>
                        </svg>
                    </button>
                </div>

                <button id="toggleButton" class="Mburger">
                    <svg width="50px" height="50px" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 17H33.1502" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    <path d="M4 4H33.1502" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    <path d="M4 30H33.1502" stroke="white" stroke-width="7" stroke-linecap="round"/>
                    </svg>
                </button>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    const toggleButton = document.getElementById('toggleButton');
                    const burger = document.getElementById('burger');
                  
                    toggleButton.addEventListener('click', function() {
                      // Change la classe pour basculer entre visible et invisible
                        toggleButton.classList.toggle('invisible');
                            if (toggleButton.classList.contains('invisible')) {
                            burger.style.opacity = '100%';
                            burger.style.right = '2vw';
                            toggleButton.style.width = '100%';
                            toggleButton.style.height = '100%';
                            
                            toggleButton.style.right = '-5px';
                            toggleButton.style.top = '0px';
                            } else {
                            // Ajoutez la valeur souhaitée pour la propriété right lorsque le bouton est visible
                            burger.style.opacity = '0%';
                            burger.style.right = '-100vw';
                            toggleButton.style.width = '50px';
                            toggleButton.style.height = '50px';
                            toggleButton.style.right = '35px';
                            toggleButton.style.top = '0px';
                            }
                        });
                    });
                </script>
            </div>
        
        </div>
        <div class="subheader" id="burger"><!--sub header-->
            <a href="" class="categories">GROSSESSE</a>
                <svg class="lines_header" width="2" height="24" viewBox="0 0 2 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="0.499878" x2="0.999999" y2="23.4999" stroke="white"/>
                </svg>
            <a href="" class="categories">POSTNATALE</a>
                <svg class="lines_header" width="2" height="24" viewBox="0 0 2 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="0.499878" x2="0.999999" y2="23.4999" stroke="white"/>
                </svg>
            <a href="" class="categories">GYNECOLOGIE</a>
                <svg class="lines_header" width="2" height="24" viewBox="0 0 2 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="0.499878" x2="0.999999" y2="23.4999" stroke="white"/>
                </svg>
            <a href="" class="categories">NUTRITION</a>
                <svg class="lines_header" width="2" height="24" viewBox="0 0 2 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="0.499878" x2="0.999999" y2="23.4999" stroke="white"/>
                </svg>
            <a href="" class="categories">VACCINATION</a>
        </div>
    </div>
    
</div>



</header>
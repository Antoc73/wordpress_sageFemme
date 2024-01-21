<?php
    /*Template Name: Documents */

    get_header();
?>

<?php
    $banner_doc = get_field('bannerDoc');
    $documents = get_field('documents');
    $prevue = get_field('prevue');
?>

<div class="banner_home">
    <img class="banner_home_img"
        src="<?php echo($banner_doc['sizes']['banner']); ?>" 
        height="<?php echo($banner_doc['sizes']['banner-height']); ?>" 
        width="<?php echo($banner_doc['sizes']['banner-width']); ?>" 
        alt="<?php echo($banner_doc['alt']); ?>"  loading="lazy">

    <svg class="mask_banner" width="100%" viewBox="0 0 1440 152" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1440 0.999878C953.6 269.159 276.333 112.733 -1.5 0.999878V151H8H1440V0.999878Z" fill="#FFFAF8" stroke="white"/>
    </svg>
    <h1 class="titre white">
        Documents
    </h1>
</div>

<div class="documents">
    <?php foreach ($documents as $document) { ?> 
        <div class="document">
            <img class="document_prevue"
                src="<?php echo($document['prevue']['sizes']['square']); ?>" 
                alt="<?php echo($document['prevue']['alt']); ?>"  loading="lazy">
            <div class="document_bandeau">
                <p class="nom_document"> <?php echo($document['nom_du_document']); ?></p>
                <a download href="<?php echo($document['document']['url']); ?>">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="19" cy="19" r="19" transform="rotate(-90 19 19)" fill="white" fill-opacity="0.5"/>
                    <path d="M18.1176 24.7988C18.5081 25.1893 19.1413 25.1893 19.5318 24.7988L25.8958 18.4348C26.2863 18.0443 26.2863 17.4111 25.8958 17.0206C25.5053 16.6301 24.8721 16.6301 24.4816 17.0206L18.8247 22.6775L13.1679 17.0206C12.7773 16.6301 12.1442 16.6301 11.7536 17.0206C11.3631 17.4111 11.3631 18.0443 11.7536 18.4348L18.1176 24.7988ZM17.8247 7V24.0917H19.8247V7H17.8247Z" fill="#AD5555"/>
                    <line x1="11" y1="27" x2="27" y2="27" stroke="#AD5555" stroke-width="2"/>
                    <line x1="11" y1="28" x2="11" y2="21" stroke="#AD5555" stroke-width="2"/>
                    <line x1="26" y1="28" x2="26" y2="21" stroke="#AD5555" stroke-width="2"/>
                    </svg>
                </a>
            </div>
            
        </div>
    <?php } ?>
</div>

<?php
get_footer();
?>
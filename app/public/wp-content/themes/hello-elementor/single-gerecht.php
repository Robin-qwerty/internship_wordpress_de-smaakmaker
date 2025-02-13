<?php
get_header();
?>

<main id="primary" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('gerecht-single'); ?>>
            <div class="gerecht-container">
                <?php if (get_field('afbeelding')) : ?>
                    <div class="gerecht-afbeelding">
                        <?php 
                        $afbeelding = get_field('afbeelding');
                        echo wp_get_attachment_image($afbeelding['ID'], 'large');
                        ?>
                    </div>
                <?php endif; ?>

                <div class="gerecht-content">
                    <h1 class="gerecht-titel"><?php the_field('gerechtnaam'); ?></h1>
                    
                    <?php if (get_field('categorie')) : ?>
                        <div class="gerecht-categorie">
                            <span class="label">Categorie:</span>
                            <?php the_field('categorie'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('prijs')) : ?>
                        <div class="gerecht-prijs">
                            <span class="label">Prijs:</span>
                            €<?php the_field('prijs'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (get_field('beschrijving')) : ?>
                        <div class="gerecht-beschrijving">
                            <?php the_field('beschrijving'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
?> 
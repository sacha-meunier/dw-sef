<section class="hero">
    <div class="hero__content">
        <div class="hero__text">
            <h1 class="hero__title"><?= get_field('home_hero_title'); ?></h1>
            <p class="hero__copy">
                <?= get_field('home_hero_copy'); ?>
            </p>
        </div>

        <div class="hero__image-container">
            <img class="hero__image" src="<?= get_field('home_hero_image'); ?>" alt="Image d'introduction">
        </div>
    </div>

    <div class="hero__cta">
        <p class="hero__subtext"><?= get_field('home_hero_subtext'); ?></p>
        <a class="hero__link" href="#"><?= get_field('home_hero_cta'); ?></a>
    </div>
</section>
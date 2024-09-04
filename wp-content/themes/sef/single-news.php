<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()):
    the_post(); ?>

    <main class="single__post">
        <section class="single">
            <div class="single__header">
                <h2 class="single__title"><?= get_field('article_title'); ?></h2>
                <span class="single__date"><?= get_field('article_date'); ?></span>
            </div>
            <div class="single__content">
                <?php if (have_rows('article_paragraphs')):
                    while (have_rows('article_paragraphs')):
                        the_row(); ?>
                        <p class="single__copy"><?= get_sub_field('article_paragraph'); ?></p>
                    <?php endwhile;endif; ?>
            </div>
        </section>

        <section class="news">
            <div class="news__info">
                <h2 class="news__title">
                    D'autres articles
                </h2>
                <a class="button button--secondary news__cta news__cta--desktop" href="<?= get_page_url_by_slug('news') ?>">Tout les articles</a>
            </div>
            <div class="news__container">

                <?php
                $articles = [
                    'post_type' => 'news',
                    'posts_per_page' => 3,
                ];

                $posts = get_posts($articles);

                foreach ($posts as $post) :
                    $title = get_field('article_title');
                    $image = get_field('article_image');
                    $intro_text = get_field('article_intro');
                    $date = get_field('article_date');
                    ?>

                    <article class="post">
                        <a class="post__link" href="<?= get_permalink(); ?>">
                            <div class="post__image-wrapper">
                                <img class="post__image" src="<?= $image; ?>" alt="Image de l'article">
                            </div>

                            <div class="post__content">
                                <div class="post__header">
                                    <h3 class="post__title"><?= esc_html($title); ?></h3>
                                    <p class="post__copy"><?= esc_html($intro_text); ?></p>
                                </div>

                                <div class="post__footer">
                                    <p class="post__date"><?= esc_html($date); ?></p>
                                </div>
                            </div>
                        </a>
                    </article>

                <?php endforeach; ?>
                <a class="button button--secondary news__cta news__cta--mobile" href="<?= get_page_url_by_slug('news') ?>">Tout les articles</a>
            </div>
        </section>
    </main>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>
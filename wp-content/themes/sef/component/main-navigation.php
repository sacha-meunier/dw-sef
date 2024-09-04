<header class="header" role="banner">
    <div class="header__wrapper">
        <a class="header__logo" href="<?= esc_url(home_url('/')); ?>" aria-label="Zekiah - homepage">
            <span class="header__logo-text">SEF Huy</span>
        </a>

        <nav class="header__nav" role="navigation" aria-label="Primary">
            <h2 class="sro">Navigation</h2>
            <ul class="header__nav-list">
                <li class="header__nav-item">
                    <a class="header__nav-link hover-text" href="<?= get_page_url_by_slug('sef'); ?>">Le SEF</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link hover-text" href="<?= get_page_url_by_slug('news'); ?>">Actualités</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link hover-text" href="<?= get_page_url_by_slug('shops'); ?>">Magasins</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link hover-text" href="<?= get_page_url_by_slug('faq'); ?>">FAQ</a>
                </li>
                <li class="header__nav-item">
                    <a class="header__nav-link hover-text" href="<?= get_page_url_by_slug('contact'); ?>">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="header__buttons">
            <a class="button header__cta" href="<?= get_page_url_by_slug('support'); ?>">Nous soutenir</a>

            <div class="nav-toggler">
                <input class="nav-toggler__input" id="toggler" type="checkbox" aria-controls="primary-nav"
                       aria-expanded="false"/>

                <label class="button nav-toggler__label" for="toggler" aria-label="Toggle navigation">
                    <span class="nav-toggler__line"></span>
                    <span class="nav-toggler__line"></span>
                </label>

                <nav class="nav-toggler__nav" id="primary-nav" role="navigation" aria-label="Mobile navigation">
                    <h2 class="sro">Navigation</h2>
                    <ul class="nav-toggler__list">
                        <li class="nav-toggler__item">
                            <a class="nav-toggler__link hover-text" href="<?= get_page_url_by_slug('sef'); ?>">Le SEF</a>
                        </li>
                        <li class="nav-toggler__item">
                            <a class="nav-toggler__link hover-text" href="<?= get_page_url_by_slug('news'); ?>">Actualités</a>
                        </li>
                        <li class="nav-toggler__item">
                            <a class="nav-toggler__link hover-text" href="<?= get_page_url_by_slug('shop'); ?>">Magasins</a>
                        </li>
                        <li class="nav-toggler__item">
                            <a class="nav-toggler__link hover-text" href="<?= get_page_url_by_slug('faq'); ?>">FAQ</a>
                        </li>
                        <li class="nav-toggler__item">
                            <a class="nav-toggler__link hover-text" href="<?= get_page_url_by_slug('contact'); ?>">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<footer class="footer" aria-label="Footer">
    <div class="footer__wrapper">
        <div class="footer__about">
            <div class="footer__links">
                <a class="footer__logo" href="<?= esc_url(home_url('/')); ?>" aria-label="Zekiah - homepage">
                    <span class="footer__logo-text">SEF Huy</span>
                </a>
                <a class="button footer__cta" href="<?= get_page_url_by_slug('support'); ?>"
                   aria-label="Zekiah - contact">Nous soutenir</a>
            </div>
        </div>

        <div class="footer__accordion">
            <div class="footer__accordion-item accordion">
                <input class="footer__accordion-input accordion__input" id="accordion-nav" type="checkbox"
                       aria-controls="primary-nav"
                       aria-expanded="false"/>

                <label class="footer__accordion-label accordion__label" for="accordion-nav"
                       aria-label="Toggle navigation">
                    Navigation
                </label>

                <nav class="footer__nav accordion__content" id="primary-nav" role="navigation"
                     aria-label="Mobile navigation">
                    <h2 class="sro">Navigation</h2>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item"><a class="footer__nav-link hover-text"
                                                        href="<?= get_page_url_by_slug('sef'); ?>">Le SEF</a></li>
                        <li class="footer__nav-item"><a class="footer__nav-link hover-text"
                                                        href="<?= get_page_url_by_slug('news'); ?>">Actualités</a></li>
                        <li class="footer__nav-item"><a class="footer__nav-link hover-text"
                                                        href="<?= get_page_url_by_slug('shops'); ?>">Magasins</a></li>
                        <li class="footer__nav-item"><a class="footer__nav-link hover-text"
                                                        href="<?= get_page_url_by_slug('faq'); ?>">FAQ</a></li>
                        <li class="footer__nav-item"><a class="footer__nav-link hover-text"
                                                        href="<?= get_page_url_by_slug('contact'); ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__accordion-item accordion">
                <input class="footer__accordion-input accordion__input" id="accordioncoordinates" type="checkbox"
                       aria-controls="coordinates"
                       aria-expanded="false"/>

                <label class="footer__accordion-label accordion__label" for="accordioncoordinates"
                       aria-label="Toggle navigation">
                    Coordonnées
                </label>

                <aside class="footer__nav accordion__content" id="coordinates" role="complementary">
                    <h2 class="sro">Coordonnées</h2>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item"><span class="footer__nav-link">contact@sefasbl.com</span></li>
                        <li class="footer__nav-item"><span class="footer__nav-link">Huy, Waremme</span></li>
                    </ul>
                </aside>
            </div>
            <div class="footer__accordion-item accordion footer__accordion-item-legal">
                <input class="footer__accordion-input accordion__input" id="accordion-legal" type="checkbox"
                       aria-controls="legal"
                       aria-expanded="false"/>

                <label class="footer__accordion-label accordion__label" for="accordion-legal"
                       aria-label="Toggle navigation">
                    Légal
                </label>

                <aside class="footer__nav accordion__content" id="legal" role="complementary">
                    <h2 class="sro">Informations légales</h2>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item"><span class="footer__nav-link">&copy; <?= date('Y'); ?> SEF. Tous droits réservés.</span></li>
                        <li class="footer__nav-item"><a class="footer__nav-link hover-text" href="#">Mentions
                                légales</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>

    <section class="footer__legal footer__legal-desktop" aria-labelledby="social-media-heading">
        <h2 id="social-media-heading" class="sro">Informations légales</h2>
        <ul class="footer__nav-list">
            <li class="footer__nav-item"><span class="footer__nav-link">&copy; <?= date('Y'); ?> SEF. Tous droits
                    réservés.</span></li>
            <li class="footer__nav-item"><a class="footer__nav-link hover-text" href="#">Mentions légales</a></li>
        </ul>
    </section>
</footer>
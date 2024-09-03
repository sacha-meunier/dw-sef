<?php
$errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_errors']);
?>

<?php if (have_rows('form')) :
    while (have_rows('form')) :
        the_row();
        ?>

        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="form">
            <input type="hidden" name="action" value="contact_form">
            <fieldset class="form__container">
                <legend class="sro">Formulaire de contact</legend>

                <div class="form__row">
                    <div class="form__field">
                        <label class="form__label" for="lastname"><?= get_sub_field('form_lastname_label'); ?></label>
                        <input class="form__input" type="text" id="lastname" name="lastname" placeholder="<?= get_sub_field('form_lastname_placeholder'); ?>">
                        <?php if (!empty($errors)): ?>
                            <p class="form__error"><?php echo $errors['lastname'] ?? ''; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="form__field">
                        <label class="form__label" for="firstname"><?= get_sub_field('form_firstname_label'); ?></label>
                        <input class="form__input" type="text" id="firstname" name="firstname" placeholder="<?= get_sub_field('form_firstname_placeholder'); ?>">
                        <?php if (!empty($errors)): ?>
                            <p class="form__error"><?php echo $errors['firstname'] ?? ''; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form__row">
                    <div class="form__field">
                        <label class="form__label" for="email"><?= get_sub_field('form_email_label'); ?></label>
                        <input class="form__input" type="email" id="email" name="email" placeholder="<?= get_sub_field('form_email_placeholder'); ?>">
                        <?php if (!empty($errors)): ?>
                            <p class="form__error"><?php echo $errors['email'] ?? ''; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form__row">
                    <div class="form__field">
                        <label class="form__label" for="phone"><?= get_sub_field('form_phone_label'); ?></label>
                        <input class="form__input" type="tel" id="phone" name="phone" placeholder="<?= get_sub_field('form_phone_placeholder'); ?>">
                        <?php if (!empty($errors)): ?>
                            <p class="form__error"><?php echo $errors['phone'] ?? ''; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form__row">
                    <div class="form__field">
                        <label class="form__label" for="subject"><?= get_sub_field('form_subject_label'); ?></label>
                        <input class="form__input" type="text" id="subject" name="subject" placeholder="<?= get_sub_field('form_subject_placeholder'); ?>">
                        <?php if (!empty($errors)): ?>
                            <p class="form__error"><?php echo $errors['subject'] ?? ''; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form__row">
                    <div class="form__field">
                        <label class="form__label" for="message"><?= get_sub_field('form_message_label'); ?></label>
                        <textarea class="form__input" rows="5" id="message" name="message" placeholder="<?= get_sub_field('form_message_placeholder'); ?>"></textarea>
                        <?php if (!empty($errors)): ?>
                            <p class="form__error"><?php echo $errors['message'] ?? ''; ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <button class="button" type="submit"><?= get_sub_field('form_cta'); ?></button>
            </fieldset>
        </form>

    <?php endwhile;
endif; ?>

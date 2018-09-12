      </div>
      <div class="siteFooter">
        <div class="section footer contact" id="contact">
          <div class="container container--narrow">
            <div class="contact-title"><?php the_field('contact_title', 'option'); ?></div>
            <div class="contact-subTitle">
              <?php the_field('contact_sub_title', 'option'); ?>
            </div>

            <div class="lightBlueDivider"></div>

            <div class="contactLinks">
              <?php if (get_field('contact_phone', 'option')): ?>
                <div class="contactLinks-phone">
                  <?php the_field('contact_phone', 'option'); ?>
                </div>
              <?php endif; ?>
              <?php if (get_field('contact_email', 'option')): ?>
                <div class="contactLinks-email <?php if (!get_field('contact_phone', 'option')): ?>u-alignLeft<?php endif; ?>">
                  <?php the_field('contact_email', 'option'); ?>
                </div>
              <?php endif; ?>
            </div>

            <div class="contact-form">
              <?php
                $contact_form_code = get_field('contact_form_code', 'option');
                echo do_shortcode($contact_form_code);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>

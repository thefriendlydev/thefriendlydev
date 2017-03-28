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
              <div class="contactLinks-phone">
                <?php the_field('contact_phone', 'option'); ?>
              </div>
              <div class="contactLinks-email">
                <?php the_field('contact_email', 'option'); ?>
              </div>
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

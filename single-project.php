<?php get_header(); ?>

<div class="section projectHero" style="background-color: <?php the_field('project_hero_bg_color'); ?>">
  <div class="container">
    <div class="grid grid--rev grid--middle">
      <div class="grid-4of10 grid-1of2--lap grid-1of1--palm">
        <div class="projectHero-name"><?php the_field('project_name'); ?></div>
        <div class="projectHero-shortDescription">
          <?php the_field('project_short_description'); ?>
        </div>
      </div>
      <div class="grid-6of10 grid-1of2--lap grid-1of1--palm">
        <img class="projectHero-thumbnail" src="<?php the_field('project_thumbnail'); ?>">
      </div>
    </div>
  </div>
</div>

<div class="section projectDetails">
  <div class="container container--medium">
    <div class="grid">
      <div class="grid-6of10 grid-1of2--lap grid-1of1--palm">
        <?php if( get_field('project_light_text') ): ?>
          <div class="projectDetails-lightText">
            <?php the_field('project_light_text'); ?>
          </div>
        <?php endif; ?>

        <?php if( get_field('project_paragraph_text') ): ?>
          <div class="projectDetails-paragraphText">
            <?php the_field('project_paragraph_text'); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="grid-4of10 grid-1of2--lap grid-1of1--palm">
        <div class="rolesContainer">
          <?php if( have_rows('project_roles') ): ?>
            <div class="projectRoleTitle"><?php the_field('project_role_title'); ?></div>
            <?php while( have_rows('project_roles') ): the_row(); ?>
              <div class="projectRole"><?php the_sub_field('project_role'); ?></div>
            <?php endwhile; ?>
          <?php endif; ?>

          <?php if( get_field('project_cta_text') && get_field('project_cta_link') ): ?>
            <a class="button projectCta" href="<?php the_field('project_cta_link'); ?>">
              <?php the_field('project_cta_text'); ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php if( have_rows('project_photos') ): ?>
      <div class="projectPhotos">
        <div class="grid">
          <?php while( have_rows('project_photos') ): the_row(); ?>
            <div class="grid-1of2 grid-1of1--palm">
              <img class="projectPhoto" src="<?php the_sub_field('project_photo'); ?>">
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php $testimonials = get_field('testimonials'); if( $testimonials ): ?>
  <div class="section projectTestimonials">
    <div class="container">
      <div class="grid grid--middle testimonials">
        <?php foreach( $testimonials as $post): setup_postdata($post); ?>
          <div class="grid-1of2 grid-1of1--palm">
            <div class="testimonial">
              <div class="testimonial-text"><?php the_field('testimonial_text'); ?></div>
              <div class="combo combo--middle">
                <div class="combo-first">
                  <div class="testimonial-photo">
                    <img src="<?php the_field('testimonial_photo'); ?>">
                  </div>
                </div>
                <div class="combo-last">
                  <div class="testimonial-name"><?php the_field('testimonial_name'); ?></div>
                  <div class="testimonial-title"><?php the_field('testimonial_title'); ?></div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php $next_project = get_field('next_project'); if( $next_project ):
  $post = $next_project;
  setup_postdata( $post );
?>
  <div class="section nextProject">
    <div class="container container--medium u-relative">
      <a href="<?php echo get_permalink(); ?>">
        <div class="combo combo--middle">
          <div class="combo-first">
            <img class="nextProject-thumbnail" src="<?php the_field('project_thumbnail'); ?>">
          </div>
          <div class="combo-last">
            <div class="nextProject-topText">Next Project</div>
            <div class="nextProject-name"><?php the_field('project_name'); ?></div>
            <div class="nextProject-short"><?php the_field('project_short_description'); ?></div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>

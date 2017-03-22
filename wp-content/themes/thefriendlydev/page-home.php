<?php
/*
 Template Name: Home Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div class="section hero hero--home">
  <div class="container">
    <div class="welcome">
      <img class="wow rotateInDownRight" data-wow-duration="2s" src="<?php echo get_template_directory_uri() ?>/dist/img/hand.png">
    </div>
    <div class="mainTagline"><?php the_field('main_tagline'); ?></div>
    <div class="subTagline"><?php the_field('sub_tagline'); ?></div>
    <?php if( have_rows('ctas') ): ?>
      <div class="ctas">
        <?php while( have_rows('ctas') ): the_row(); ?>
          <a class="button" href="<?= the_sub_field('cta_button_link'); ?>">
            <?= the_sub_field('cta_button_text'); ?>
          </a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<div class="section about">
  <div class="container">
    <div class="aboutTitle"><?php the_field('about_title'); ?></div>
    <div class="aboutText"><?php the_field('about_text'); ?></div>
    <div class="testimonailTitle"><?php the_field('testimonial_title'); ?></div>
    <?php $testimonials = get_field('testimonials'); if( $testimonials ): ?>
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
    <?php endif; ?>
  </div>
</div>

<div class="section myWork" id="myWork">
  <div class="container">
    <div class="myWorkTitle myWorkTitle--home"><?php the_field('my_work_title'); ?></div>
    <div class="myWorkSubTitle"><?php the_field('my_work_sub_title'); ?></div>

    <?php $projects = get_field('projects'); if( $projects ): ?>
      <div class="grid grid--middle projects projects--home">
        <?php foreach( $projects as $post): setup_postdata($post); ?>
          <div class="grid-1of2 grid-1of1--palm">
            <div class="project">
              <a href="<?php echo get_permalink(); ?>" class="project-thumbnail" style="background-color:<?php the_field('project_bg_color'); ?>">
                <img src="<?php the_field('project_thumbnail'); ?>">
                <div class="projectHover">
                  <div class="projectHover-container">
                    <div class="projectHover-text">View Project</div>
                    <i class="icon icon-chevron-with-circle-right"></i>
                  </div>
                </div>
              </a>

              <div class="project-name"><?php the_field('project_name'); ?></div>
              <div class="project-shortDescription">
                <?php the_field('project_short_description'); ?> <a class="darkLink" href="<?php echo get_permalink(); ?>">View project »</a>
              </div>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    <?php endif; ?>

    <a href="<?php the_field('my_work_cta_link'); ?>" class="button"><?php the_field('my_work_cta_text'); ?></a>
  </div>
</div>

<?php get_footer(); ?>

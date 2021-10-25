<?php get_header(); ?>
<main>
  <?php if (have_posts()) : the_post(); ?>
    <div class="single__container">
      <div class="article__header">
        <span class="single__cat"><a href="" rel="category tag"><?php the_tags('', '  '); ?></a></span>
        <h1><?php echo get_the_title(); ?></h1>
        <ul class="flex__item tag__ul">
          <li class="single__tag"><?php echo get_the_date('Y-m-d'); ?></li>
        </ul>
      </div>
      <div class="article__eyecatch">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
        <?php endif; ?>
      </div>
      <div class="article__content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
<?php
// Template Name: Blog Single
get_header();
?>

<main id="pg-single" role="main">
  <section class="section-intro">
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post();
        ?>

        <div class="blog-card-top">
          <?php
          $categories = get_the_category();
          if ($categories): ?>
            <span class="blog-card-category"><?php echo esc_html($categories[0]->name); ?></span>
          <?php endif; ?>

          <?php if (get_field('data_do_post')): ?>
            <span class="blog-card-date"><?php the_field('data_do_post'); ?></span>
          <?php endif; ?>
        </div>

        <h1 class="single-post-title"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()): ?>
          <div class="single-post-img">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
      </section>

      <section class="section-content">
        <div class="single-post-content">
          <?php the_content(); ?>
        </div>
      </section>

      <section class="section-blog-navigation">
        <a href="/blog">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/blog.svg" alt="icone arrow">
          <span>volte ao blog</span>
        </a>
      </section>

      <?php
      endwhile;
    else:
      ?>
    <p>Post não encontrado.</p>
    <?php
    endif;
    ?>
</main><?php get_footer(); ?>
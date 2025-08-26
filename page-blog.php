<?php
// Template Name: Blog
?>

<?php get_header(); ?>

<main id="pg-blog" role="main">
    <section class="section-intro">
        <h1>Tendências, lançamentos e novidades do setor</h1>
    </section>

    <section class="blog-search container">
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="search" name="s" placeholder="O que você procura?" value="<?php echo get_search_query(); ?>"
                required>
            <button type="submit">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/search.svg" alt="Buscar">
            </button>
        </form>
    </section>

    <section class="section-blog container">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'post',
            'posts_per_page' => 5,
            'paged' => $paged,
        ];
        $loop = new WP_Query($args);
        ?>

        <?php if ($loop->have_posts()): ?>
            <div class="blog-cards">
                <?php while ($loop->have_posts()):
                    $loop->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="blog-card">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="blog-card-img">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="blog-card-infos">
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

                            <h3 class="blog-card-title"><?php the_title(); ?></h3>

                            <?php if (get_field('descricao_do_post')): ?>
                                <p class="blog-card-description"><?php the_field('descricao_do_post'); ?></p>
                            <?php endif; ?>

                            <p class="blog-card-btn">
                                <span>Leia mais</span>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-blog.svg" alt="icone arrow">
                            </p>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>

            <div class="blog-pagination">
                <?php if ($loop->max_num_pages > 1): ?>
                    <div class="prev">
                        <?php
                        echo get_previous_posts_link('← Anterior', $loop->max_num_pages);
                        ?>
                    </div>

                    <div class="current-page">
                        <?php
                        $current_page = max(1, get_query_var('paged'));
                        echo $current_page . ' / ' . $loop->max_num_pages;
                        ?>
                    </div>

                    <div class="next">
                        <?php
                        echo get_next_posts_link('Próximo →', $loop->max_num_pages);
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php wp_reset_postdata(); ?>

        <?php else: ?>
            <p>Nenhuma postagem encontrada.</p>
        <?php endif; ?>
    </section>

</main>

<?php get_footer(); ?>
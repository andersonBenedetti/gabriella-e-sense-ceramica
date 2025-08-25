<?php
// Template Name: Home
?>

<?php get_header(); ?>

<?php
function gabriella_show_products($args = [])
{
    $products_query = wc_get_products($args);
    if (empty($products_query)) {
        echo '<p>Nenhum produto encontrado.</p>';
        return;
    }
    $products_formatted = format_products($products_query);
    gabriella_product_list($products_formatted);
}
?>

<main id="pg-home" role="main">
    <section class="main-carousel swiper" aria-label="Carrossel de destaque">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'carrossel',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'order' => 'DESC',
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()):
                while ($the_query->have_posts()):
                    $the_query->the_post();

                    $link = get_field('link_da_imagem');
                    $img_desktop = get_field('imagem_-_desktop');
                    $img_mobile = get_field('imagem_-_mobile');
                    $title = get_the_title();

                    $alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
                    if (!$alt_text) {
                        $alt_text = $title;
                    }
                    ?>
                    <a class="swiper-slide" href="<?php echo esc_url($link); ?>" aria-label="<?php echo esc_attr($title); ?>">
                        <img class="dkp" src="<?php echo esc_url($img_desktop); ?>" alt="<?php echo esc_attr($alt_text); ?>"
                            loading="lazy" width="1200" height="auto">
                        <img class="mbl" src="<?php echo esc_url($img_mobile); ?>" alt="<?php echo esc_attr($alt_text); ?>"
                            loading="lazy" width="600" height="auto">
                    </a>
                <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p><?php _e('Desculpe, nenhum slide encontrado.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination" aria-hidden="true"></div>
    </section>

    <section class="section-categories">
        <h2 class="title-section">Ambientes</h2>
        <h3>Encontre o revestimento ideal para o seu espaço</h3>

        <div class="cat-carousel-wrapper">
            <div class="cat-carousel swiper">
                <div class="swiper-wrapper">
                    <?php
                    $product_categories = get_terms([
                        'taxonomy' => 'product_cat',
                        'hide_empty' => false,
                    ]);

                    if (!empty($product_categories) && !is_wp_error($product_categories)):
                        foreach ($product_categories as $category):
                            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                            $image_url = wp_get_attachment_url($thumbnail_id);
                            $image_url = $image_url ? $image_url : get_stylesheet_directory_uri() . '/img/default-category.webp';
                            ?>
                            <a class="swiper-slide" href="<?php echo get_term_link($category); ?>"
                                aria-label="<?php echo esc_attr($category->name); ?>">
                                <img class="img-slide" src="<?php echo esc_url($image_url); ?>"
                                    alt="<?php echo esc_attr($category->name); ?>" loading="lazy" width="400" height="400">
                                <div class="btn-bottom">
                                    <?php echo esc_html($category->name); ?>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/ph_arrow-up-right-thin.svg"
                                        alt="icone arrow">
                                </div>
                            </a>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination secondary" aria-hidden="true"></div>
        </div>

        <a class="btn" href="#">
            <span>Veja a coleção completa</span>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-btn.svg" alt="icone arrow">
        </a>
    </section>

    <section class="section-about container">
        <div class="content-top">
            <div>
                <p class="subtitle">Sobre nós</p>
                <h2>Revestimentos artísticos em pequenos formatos, feitos para transformar espaços em obras de arte</h2>
            </div>

            <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sobre-nos-home.webp"
                alt="Sobre nós">
        </div>

        <div class="content-bottom">
            <div class="gallery">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-1.webp" alt="Sobre nós">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-2.webp" alt="Sobre nós">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-3.webp" alt="Sobre nós">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-4.webp" alt="Sobre nós">
            </div>

            <p>Somos uma fábrica de revestimentos cerâmicos, especializada em pequenos formatos e produtos decorativos,
                situada na tradicional cidade de Criciúma, Santa Catarina. Ao longo das duas últimas décadas, dedicamos
                nossa expertise ao refinamento estético, à inovação e à qualidade, resultando em criações que
                transcendem a função para se tornarem verdadeiras obras de arte.</p>
        </div>
    </section>

    <section class="section-story container">
        <div class="story-content">
            <div class="story-counter">
                <p>+ DE</p>
                <p class="counter" data-target="25">0</p>
                <p class="text">Anos de tradição no mercado cerâmico de pequenos formatos</p>
            </div>

            <div class="story-counter">
                <p>+ DE</p>
                <p class="counter" data-target="20">0</p>
                <p class="text">Coleções ativas no catálogo</p>
            </div>

            <div class="story-counter">
                <p>+ DE</p>
                <p class="counter" data-target="4000">0</p>
                <p class="text">Revendedores parceiros</p>
            </div>
        </div>

        <a class="btn secondary" href="#">
            <span>Conheça nossa história</span>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-btn-secondary.svg" alt="icone arrow">
        </a>
    </section>

    <section class="section-gallery container">
        <h2 class="title-section">Ambientes</h2>
        <h3>Encontre o revestimento ideal para o seu espaço</h3>

        <div class="gallery-content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-7.webp" alt="foto">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-5.webp" alt="foto">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-9.webp" alt="foto">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-10.webp" alt="foto">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-8.webp" alt="foto">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-6.webp" alt="foto">
        </div>
    </section>

    <section class="section-find">
        <div class="container">
            <h2 class="title-section">onde encontrar</h2>
            <h3>Saiba onde encontrar nossas peças.</h3>
            <a class="btn secondary" href="#">
                <span>Encontre</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-btn-secondary.svg"
                    alt="icone arrow">
            </a>
        </div>
    </section>

    <section class="section-blog container">
        <div class="blog-top">
            <div>
                <h2 class="title-section">Blog</h2>
                <h3>Tendências, lançamentos e novidades do setor</h3>
            </div>
            <a class="btn" href="#">
                <span>leia todas</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-btn.svg" alt="icone arrow">
            </a>
        </div>

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        );
        $loop = new WP_Query($args);

        if ($loop->have_posts()):
            echo '<div class="blog-cards">';
            while ($loop->have_posts()):
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
            <?php endwhile;
            echo '</div>';
            wp_reset_postdata();
        endif;
        ?>
    </section>

    <section class="section-social container">
        <h2 class="title-section">instagram</h2>
        <h3>@gabriellarevestimentos_oficial</h3>
        <a class="btn" href="#">
            <span>siga-nos</span>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-btn.svg" alt="icone arrow">
        </a>
    </section>
</main>

<?php get_footer(); ?>
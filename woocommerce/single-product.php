<?php get_header(); ?>

<main id="single-product">

    <section class="section-content container">
        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                global $product; ?>

        <div class="product-gallery">
            <?php echo do_shortcode('[wcgs_gallery_slider]'); ?>
        </div>

        <div class="product-detail">
            <?php
                    $terms = get_the_terms($product->get_id(), 'product_cat');
                    if (!empty($terms) && !is_wp_error($terms)) {
                        $main_cat = $terms[0];
                        echo '<span class="product-category">' . esc_html($main_cat->name) . '</span>';
                    }
                    ?>

            <h1><?php the_title(); ?></h1>

            <div class="short-description">
                <?php echo apply_filters('woocommerce_short_description', $product->get_short_description()); ?>
            </div>

            <div class="product-btns">
                <?php
                        $baixar_jpg = get_field('baixar_jpg');
                        $baixar_3d = get_field('baixar_3d');

                        if ($baixar_jpg) {
                            echo '<a href="' . esc_url($baixar_jpg) . '" class="btn" target="_blank" rel="noopener">
                                <span>Baixar JPG</span>
                                <img src="' . get_stylesheet_directory_uri() . '/icons/baixar-jpg.svg" alt="Baixar JPG">
                            </a>';
                        }

                        if ($baixar_3d) {
                            echo '<a href="' . esc_url($baixar_3d) . '" class="btn" target="_blank" rel="noopener">
                                <span>Baixar 3D</span>
                                <img src="' . get_stylesheet_directory_uri() . '/icons/baixar-3d.svg" alt="Baixar 3D">
                            </a>';
                        }
                        ?>
            </div>

            <div class="product-description">
                <h3>Locais de uso:</h3>
                <?php the_content(); ?>
            </div>

            <a class="btn-infos" href="#informacoes-tecnicas">
                <span>Informações técnicas</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-down.svg" alt="icone arrow">
            </a>
        </div>

        <?php endwhile; endif; ?>
    </section>

    <section class="section-tech" id="informacoes-tecnicas">
        <div class="container">
            <h2>Informações Técnicas</h2>

            <div class="tech-table">
                <ul>
                    <?php if ($tamanho = get_field('tamanho_de_fabricacao')): ?>
                    <li><span>Tamanho de Fabricação:</span> <?php echo esc_html($tamanho); ?></li>
                    <?php endif; ?>

                    <?php if ($monocalibre = get_field('monocalibre')): ?>
                    <li><span>Monocalibre:</span> <?php echo esc_html($monocalibre); ?></li>
                    <?php endif; ?>

                    <?php if ($pecas = get_field('pecas_por_caixa')): ?>
                    <li><span>Peças por Caixa:</span> <?php echo esc_html($pecas); ?></li>
                    <?php endif; ?>

                    <?php if ($peso = get_field('peso_por_caixa')): ?>
                    <li><span>Peso por Caixa:</span> <?php echo esc_html($peso); ?></li>
                    <?php endif; ?>

                    <?php if ($rodape = get_field('rodape')): ?>
                    <li><span>Rodapé:</span> <?php echo esc_html($rodape); ?></li>
                    <?php endif; ?>

                    <?php if ($colecao = get_field('colecao')): ?>
                    <li><span>Coleção:</span> <?php echo esc_html($colecao); ?></li>
                    <?php endif; ?>

                    <?php if ($cor = get_field('cor')): ?>
                    <li><span>Cor:</span> <?php echo esc_html($cor); ?></li>
                    <?php endif; ?>

                    <?php if ($superficie = get_field('superficie')): ?>
                    <li><span>Superfície:</span> <?php echo esc_html($superficie); ?></li>
                    <?php endif; ?>

                    <?php if ($m2 = get_field('m²_por_caixa')): ?>
                    <li><span>M² por Caixa:</span> <?php echo esc_html($m2); ?></li>
                    <?php endif; ?>

                    <?php if ($espessura = get_field('espessura')): ?>
                    <li><span>Espessura:</span> <?php echo esc_html($espessura); ?></li>
                    <?php endif; ?>

                    <?php if ($relevo = get_field('relevo')): ?>
                    <li><span>Relevo:</span> <?php echo esc_html($relevo); ?></li>
                    <?php endif; ?>

                    <?php if ($unidade = get_field('unidade_de_medida')): ?>
                    <li><span>Unidade de Medida:</span> <?php echo esc_html($unidade); ?></li>
                    <?php endif; ?>

                    <?php if ($faces = get_field('numero_de_faces')): ?>
                    <li><span>Número de Faces:</span> <?php echo esc_html($faces); ?></li>
                    <?php endif; ?>

                    <?php if ($categoria = get_field('categoria')): ?>
                    <li><span>Categoria:</span> <?php echo esc_html($categoria); ?></li>
                    <?php endif; ?>

                    <?php if ($junta = get_field('junta_de_assentamento')): ?>
                    <li><span>Junta de Assentamento:</span> <?php echo esc_html($junta); ?></li>
                    <?php endif; ?>

                    <?php if ($acabamento = get_field('acabamento')): ?>
                    <li><span>Acabamento:</span> <?php echo esc_html($acabamento); ?></li>
                    <?php endif; ?>

                    <?php if ($polo = get_field('polo')): ?>
                    <li><span>Pólo:</span> <?php echo esc_html($polo); ?></li>
                    <?php endif; ?>

                    <?php if ($estilo = get_field('estilo_')): ?>
                    <li><span>Estilo:</span> <?php echo esc_html($estilo); ?></li>
                    <?php endif; ?>

                    <?php if ($laudo_texto = get_field('laudo_tecnico_iso')): ?>
                    <li><span>Laudo Técnico ISO:</span> <?php echo esc_html($laudo_texto); ?></li>
                    <?php endif; ?>

                    <?php if ($laudo_link = get_field('laudo_tecnico_iso_link')): ?>
                    <li><span>Laudo Técnico ISO:</span> <a href="<?php echo esc_url($laudo_link); ?>" target="_blank"
                            rel="noopener">Baixar PDF</a></li>
                    <?php endif; ?>
                </ul>

                <div class="btns-laudos">
                    <?php
                    $texto_iso = get_field('laudo_tecnico_iso');
                    $link_iso = get_field('link_laudo_tecnico_iso');
                    if ($link_iso): ?>
                    <a href="<?php echo esc_url($link_iso); ?>" class="btn secondary" target="_blank">
                        <span><?php echo $texto_iso ? esc_html($texto_iso) : 'Laudo Técnico ISO'; ?></span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/download.svg"
                            alt="icone download">
                    </a>
                    <?php endif; ?>

                    <?php
                    $texto_astm = get_field('laudo_tecnico_astm');
                    $link_astm = get_field('link_laudo_tecnico_astm');
                    if ($link_astm): ?>
                    <a href="<?php echo esc_url($link_astm); ?>" class="btn secondary" target="_blank">
                        <span><?php echo $texto_astm ? esc_html($texto_astm) : 'Laudo Técnico ASTM'; ?></span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/download.svg"
                            alt="icone download">
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    $upsell_ids = $product->get_upsell_ids();
    if (!empty($upsell_ids)) {
        $upsell_products = array_map('wc_get_product', $upsell_ids);
        $formatted_upsells = format_products($upsell_products);
        ?>
    <section class="section-products">
        <div class="container">
            <div class="products-top">
                <h2 class="title-section">Conheça outras peças</h2>
            </div>

            <?php gabriella_product_list($formatted_upsells); ?>

            <a class="btn secondary" href="#">
                <span>Ver todas as peças</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/arrow-btn-secondary.svg"
                    alt="icone arrow">
            </a>
        </div>
    </section>
    <?php } ?>

</main>

<?php get_footer(); ?>
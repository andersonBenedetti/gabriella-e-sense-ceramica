<?php get_header(); ?>

<main id="archive-product">

  <section class="section-intro">
    <h2 class="title-section">Produtos</h2>
    <h1>Linha completa de revestimentos cerâmicos de pequenos formatos</h1>
  </section>

  <section class="section-filters">
    <div class="container">
      <div class="filters-content">
        <?php echo do_shortcode('[fibosearch]'); ?>

        <div class="custom-select">
          <?php
          $product_categories = get_categories(array(
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
          ));

          if (!empty($product_categories)) {
            echo '<select class="category-select" onchange="location = this.value;">';
            echo '<option value="">Selecione uma coleção</option>';
            foreach ($product_categories as $category) {
              echo '<option value="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</option>';
            }
            echo '</select>';
          } else {
            echo '<p>Não foram encontradas categorias de produtos.</p>';
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="products-store">
    <div class="container">
      <?php
      $products = [];

      if (have_posts()) {
        while (have_posts()) {
          the_post();
          $product = wc_get_product(get_the_ID());

          if (!current_user_can('administrator') && $product && $product->get_status() !== 'publish') {
            continue;
          }

          $products[] = $product;
        }
      }

      $formatted_products = format_products($products);
      ?>

      <div id="products-container">
        <?php if (!empty($formatted_products)) {
          gabriella_product_list($formatted_products);
        } ?>
      </div>

      <?php if (empty($formatted_products)): ?>
        <section class="no-results">
          <div class="container">
            <p>Nenhum resultado encontrado.</p>
            <p>Confira outras categorias ou redefina os filtros para encontrar o produto ideal.</p>
          </div>
        </section>
      <?php endif; ?>

      <?php if ($wp_query->max_num_pages > 1): ?>
        <div class="pagination-wrap">
          <div class="prev">
            <?php echo get_previous_posts_link('← Anterior'); ?>
          </div>

          <div class="current-page">
            <?php
            $current_page = max(1, get_query_var('paged'));
            echo $current_page . ' / ' . $wp_query->max_num_pages;
            ?>
          </div>

          <div class="next">
            <?php echo get_next_posts_link('Próximo →'); ?>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>
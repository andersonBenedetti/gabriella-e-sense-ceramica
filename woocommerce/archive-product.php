<?php get_header(); ?>

<main id="archive-product">

  <section class="section-intro">
    <div class="container">
      <h1>
        <?php
        if (is_shop()) {
          echo 'Últimas novidades';
        } else {
          single_cat_title();
        }
        ?>
      </h1>
    </div>
  </section>

  <section class="section-filters">
    <div class="container">
      <div class="filters-content">
        <div class="filters-left">
          <div class="custom-select">
            <?php
            $product_categories = get_categories(array(
              'taxonomy' => 'product_cat',
              'hide_empty' => false,
            ));

            if (!empty($product_categories)) {
              echo '<select class="category-select" onchange="location = this.value;">';
              echo '<option value="">Filtre por categoria</option>';
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

        <div class="filters-right">
          <p class="products-count">
            <?php
            global $wp_query;
            echo "<span>" . $wp_query->found_posts . "</span>" . " Resultados encontrados ";
            ?>
          </p>
          <div class="custom-select">
            <?php
            $orderby_options = apply_filters(
              'woocommerce_catalog_orderby',
              array(
                'menu_order' => 'Ordenação padrão',
                'popularity' => 'Mais populares',
                'rating' => 'Melhor avaliação',
                'date' => 'Mais recentes',
              )
            );

            $current_orderby = isset($_GET['orderby']) ? wc_clean($_GET['orderby']) : 'menu_order';

            $base_url = get_permalink(wc_get_page_id('shop'));

            $query_args = $_GET;
            unset($query_args['orderby']);

            echo '<select class="orderby-select" onchange="if(this.value) window.location.href=this.value">';
            echo '<option value="">Ordenar por</option>';

            foreach ($orderby_options as $value => $label) {
              $query_args['orderby'] = $value;
              $url = esc_url(add_query_arg($query_args, $base_url));

              echo '<option value="' . $url . '" ' . selected($current_orderby, $value, false) . '>' . esc_html($label) . '</option>';
            }

            echo '</select>';
            ?>
          </div>
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
          flore_product_list($formatted_products);
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

      <?php if ($wp_query->max_num_pages > 1 && empty($_GET['scroll'])): ?>
        <div class="pagination-wrap">
          <?php
          echo paginate_links(array(
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'total' => $wp_query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'format' => '?paged=%#%',
            'show_all' => false,
            'type' => 'plain',
            'end_size' => 2,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => __('Anterior'),
            'next_text' => __('Próximo'),
            'add_args' => false,
            'add_fragment' => '',
          ));
          ?>
        </div>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>
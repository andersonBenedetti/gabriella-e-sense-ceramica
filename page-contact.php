<?php
// Template Name: Entre em contato
?>

<?php get_header(); ?>

<main id="pg-policy">
  <section class="section-intro contact">
    <div class="container">
      <div class="intro-content">
        <h1 class="title">Entre em contato</h1>

        <div class="container-contact">
          <div class="contact-item">
            <span>Telefone</span>
            <p>+55 (48) 3431-7000</p>
            <p>0800 480 0888</p>
          </div>

          <div class="contact-item">
            <span>E-mail</span>
            <p>contato@gabcer.com.br</p>
          </div>

          <div class="contact-item">
            <span>endereço</span>
            <p>Rodovia Governador Jorge Lacerda 10300, Km 20, Bairro Verdinho, Criciúma/SC,</p>
            <p>88814-552</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-content">
    <div class="content-work">
      <div class="contact-form">
        <h2>venha fazer parte do nosso time!</h2>
        <?php echo do_shortcode('[contact-form-7 id="67c5b12" title="Formulário de Entre em contato"]'); ?>
      </div>

      <div class="gallery">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-1.webp" alt="Sobre nós">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-2.webp" alt="Sobre nós">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-3.webp" alt="Sobre nós">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery-4.webp" alt="Sobre nós">
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
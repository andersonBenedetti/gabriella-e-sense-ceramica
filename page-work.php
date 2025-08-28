<?php
// Template Name: Trabalhe conosco
?>

<?php get_header(); ?>

<main id="pg-policy">
  <section class="section-intro">
    <h1 class="title">Trabalhe conosco</h1>
  </section>


  <section class="section-content">
    <div class="content-work">
      <div class="contact-form">
        <h2>venha fazer parte do nosso time!</h2>
        <?php echo do_shortcode('[contact-form-7 id="bcfc188" title="Formulário de Trabalhe conosco"]'); ?>
      </div>

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
  </section>

</main>

<?php get_footer(); ?>
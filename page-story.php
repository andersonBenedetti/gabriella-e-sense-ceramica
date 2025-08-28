<?php
// Template Name: Nossa história
?>

<?php get_header(); ?>

<main id="pg-story" role="main">
  <section class="section-about container">
    <div class="content-top">
      <div>
        <p class="subtitle">Sobre nós</p>
        <h2>Revestimentos artísticos em pequenos formatos, feitos para transformar espaços em obras de arte</h2>
      </div>

      <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sobre-nos-home.webp" alt="Sobre nós">
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

  <section class="section-content">
    <div class="container">
      <div class="content-top">
        <div class="content-text">
          <h2>Nossa história</h2>

          <p>Há 25 anos, nossa paixão por transformar espaços ganhou vida em cada peça única que produzimos.
            Somos uma fábrica de revestimentos cerâmicos, especializada em pequenos formatos e produtos
            decorativos, situada na tradicional cidade de Criciúma, Santa Catarina. Ao longo das duas
            últimas décadas, dedicamos nossa expertise ao refinamento estético, à inovação e à qualidade,
            resultando em criações que transcendem a função para se tornarem verdadeiras obras de arte.</p>
        </div>

        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/empresa.webp" alt="Sobre nós">
      </div>

      <div class="content-bottom">
        <img class="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sobre-nos-home.webp" alt="Sobre nós">

        <div class="content-text">
          <p>Nossos produtos são mais do que meros revestimentos; são expressões de estilo, sofisticação e
            personalidade. Cada azulejo conta a história de uma tradição que se aprimora com o tempo,
            capturando a essência da beleza atemporal. Aprendemos que a verdadeira excelência está na
            atenção aos detalhes. Das linhas delicadas aos padrões intrincados, cada peça é meticulosamente
            elaborada por mãos habilidosas que entendem a importância de criar ambientes que encantam.</p>

          <p>Ao explorar este catálogo, convidamos você a mergulhar em um universo de possibilidades. Desde
            designs contemporâneos até clássicos reinventados, oferecemos uma gama diversificada que atende
            aos gostos mais exigentes. Permita que nossos revestimentos cerâmicos se tornem a tela em branco
            para suas inspirações, transformando seus projetos em espaços que contam a sua história única.
          </p>

          <p>Estamos ansiosos para continuar a embelezar seus ambientes e compartilhar a paixão que nos
            impulsiona desde o coração de Criciúma para o mundo.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
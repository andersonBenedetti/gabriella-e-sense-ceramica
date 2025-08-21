<?php $footer_menu_institucional = [
    ['label' => 'Nossa História', 'url' => '#'],
    ['label' => 'SGI', 'url' => '#'],
    ['label' => 'Sustentabilidade', 'url' => '#'],
    ['label' => 'Blog', 'url' => '#'],
    ['label' => 'Trabalhe Conosco', 'url' => '#'],
    ['label' => 'Entre em contato', 'url' => '#'],
];

$footer_menu_politicas = [
    ['label' => 'Política de Cookies', 'url' => '#'],
    ['label' => 'Política de Privacidade', 'url' => '#'],
    ['label' => 'Termos de uso', 'url' => '#'],
    ['label' => 'Solicitação de Privacidade', 'url' => '#'],
];

$footer_menu_produtos = [
    ['label' => 'Coleções', 'url' => '#'],
    ['label' => 'Refratários', 'url' => '#'],
];
?>

<footer id="footer">
    <div class="footer-top container">
        <a href="/" class="header-logo" aria-label="Voltar para página inicial Gabriella">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.webp"
                alt="Gabriella Cerâmica - Logo rodapé" loading="lazy" width="180" height="60">
        </a>

        <p>Sofisticação, tradição e inovação em cada detalhe.</p>
    </div>

    <div class="footer-main container">
        <div class="footer-column">
            <address>
                <a href="https://maps.google.com/?q=Rodovia+Governador+Jorge+Lacerda+10300,+Criciúma" target="_blank"
                    rel="noopener" aria-label="Ver endereço no Google Maps">
                    Rodovia Governador Jorge Lacerda 10300, Km 20, Bairro Verdinho, Criciúma/SC, </br>88814-552
                </a>
                <div class="footer-contact">
                    <a href="mailto:contato@gabcer.com.br">contato@gabcer.com.br</a>
                    <a href="tel:+554834317000">+55 (48) 3431-7000</a>
                    <a href="tel:08004800888">0800 480 0888</a>
                </div>
            </address>
        </div>

        <nav class="footer-column" aria-labelledby="footer-institucional">
            <h3 id="footer-institucional">Institucional</h3>
            <ul>
                <?php foreach ($footer_menu_institucional as $item): ?>
                    <li>
                        <a class="link-footer" href="<?php echo esc_url($item['url']); ?>">
                            <?php echo esc_html($item['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <nav class="footer-column" aria-labelledby="footer-politicas">
            <h3 id="footer-politicas">Políticas</h3>
            <ul>
                <?php foreach ($footer_menu_politicas as $item): ?>
                    <li>
                        <a class="link-footer" href="<?php echo esc_url($item['url']); ?>">
                            <?php echo esc_html($item['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <nav class="footer-column" aria-labelledby="footer-produtos">
            <h3 id="footer-produtos">Produtos</h3>
            <ul>
                <?php foreach ($footer_menu_produtos as $item): ?>
                    <li>
                        <a class="link-footer" href="<?php echo esc_url($item['url']); ?>">
                            <?php echo esc_html($item['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="items-language">
            <a href="/" hreflang="pt-BR" lang="pt">PT</a>
            <a href="/en/" hreflang="en" lang="en">EN</a>
            <a href="/es/" hreflang="es" lang="es">ES</a>
        </div>
    </div>

    <div class="footer-bottom container">
        <p>&copy; <?php echo date("Y"); ?> Gabriella. Todos os direitos reservados.</p>

        <div class="footer-social">
            <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram Gabriella">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/qlementine-icons_instagram-24.svg"
                    alt="Instagram Gabriella">
            </a>
            <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook Gabriella">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/qlementine-icons_facebook-16.svg"
                    alt="Facebook Gabriella">
            </a>
            <a href="https://pinterest.com" target="_blank" rel="noopener" aria-label="Pinterest Gabriella">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/hugeicons_pinterest.svg"
                    alt="Pinterest Gabriella">
            </a>
            <a href="https://wa.me/554834317000" target="_blank" rel="noopener" aria-label="WhatsApp Gabriella">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/ic_baseline-whatsapp.svg"
                    alt="WhatsApp Gabriella">
            </a>
        </div>

        <p>
            Desenvolvido por
            <a href="https://blumewebstudio.com.br" target="_blank" rel="nofollow noopener">Blume Web Studio</a>
        </p>
    </div>
</footer>

<a href="https://wa.me/5548999999999" class="whatsapp-float" target="_blank" aria-label="Fale conosco no WhatsApp">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/icons/whatsapp-float.svg" alt="WhatsApp" width="60"
        height="60">
</a>

<div id="popup-imagem" class="popup">
    <div class="popup-conteudo">
        <span class="fechar">&times;</span>
        <img src="" alt="Imagem ampliada" id="imagem-popup">
    </div>
</div>

<script>
    const app = new Vue({
        el: '#app',
        data: {
            activeMenu: false,
        },
        created() { },
        methods: {}
    });
</script>

</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popup.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/toggle.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/quantity.js"></script>

<?php wp_footer(); ?>
</body>

</html>
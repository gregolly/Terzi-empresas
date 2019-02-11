<footer class="rodape">
  
    <div class="rodape-itens">
      <div class="rodape-wrap">
        <ul class="phones">
          <li><i class="fas fa-phone"></i><?php the_field('phone-rodape'); ?></li>
          <li><i class="far fa-clock"></i><?php the_field('horario-rodape'); ?></li>
        </ul>
      </div>

      <div class="rodape-wrap rodape-wrap-adress">
        <p><i class="fas fa-map-marker-alt"></i><?php the_field('endereco-rodape'); ?></p>
        <p><i class="fas fa-envelope"></i><?php the_field('email-rodape'); ?></p>
      </div>

      <div class="rodape-wrap">
        <div class="rodape-form">
          <form action="">
            <input type="text" placeholder="Nome">
            <input type="text" placeholder="(65) 99999-9999">
            <textarea type="text" placeholder="Mensagem"></textarea>
            <button><?php the_field('button-form'); ?></button>
          </form>
        </div>
      </div>

        <div class="rodape-wrap">
            <img src="<?php the_field('rodape-logo'); ?>" alt="<?php the_field('rodape-logo-alt'); ?>">   
        </div>
    </div>

</div>  
</footer>

<div class="copy-dev">
  <div class="container">
    <div class="justify">
      <p>&#169; Todos os direitos reservados à Terzi Empresas <?php echo date('Y'); ?></p>
      
      <a href="#">
        <img src="<?= get_template_directory_uri(); ?>/img/lr-branca.png" alt="">     
      </a>
    </div>
  </div>
</div>
  <?php wp_footer(); ?>
</body>
</html>
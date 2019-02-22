<footer class="rodape" id="contato">
  
    <div class="rodape-itens">
      <div class="rodape-wrap">
        <ul class="phones">
          <li><i class="fas fa-phone"></i><?php the_field('phone-rodape', 31); ?></li>
          <li><i class="far fa-clock"></i><?php the_field('horario-rodape', 31); ?></li>
        </ul>
      </div>

      <div class="rodape-wrap rodape-wrap-adress">
        <p><i class="fas fa-map-marker-alt"></i><?php the_field('endereco-rodape', 31); ?></p>
        <p class="font-size"><i class="fas fa-envelope"></i><?php the_field('email-rodape', 31); ?></p>
      </div>

      <div class="rodape-wrap">
        <div class="rodape-form">
        <form action="<?= get_template_directory_uri(); ?>/enviar-email.php" id="form1" method="post">
            <input type="text" name="name" id="name" placeholder="Nome">
            <input type="text" name="telefone" id="telefone" placeholder="(65) 99999-9999">
            <textarea type="text" name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
            <button type="submit" form="form1"><?php the_field('button-form', 31); ?></button>
          </form>
        </div>
      </div>

        <div class="rodape-wrap">
            <img src="<?php the_field('rodape-logo', 31); ?>" alt="<?php the_field('rodape-logo-alt', 31); ?>">   
        </div>
    </div>

</div>  
</footer>

<div class="copy-dev">
  <div class="container">
    <div class="justify">
      <p>&#169; Todos os direitos reservados à Terzi Empresas <?php echo date('Y'); ?></p>
      
      <a href="https://www.instagram.com/lrmarketingdigital/">
        <img src="<?= get_template_directory_uri(); ?>/img/lr-branca.png" alt="">     
      </a>
    </div>
  </div>
</div>
<a href="#" class="gotopbtn"><i class="fas fa-arrow-up"></i></a>
  <?php wp_footer(); ?>
</body>
</html>
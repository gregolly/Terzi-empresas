<footer class="rodape">
  
    <div class="rodape-itens">
      <div class="rodape-wrap">
        <ul class="phones">
          <li><i class="far fa-clock"></i>(65) 3326-2055</li>
          <li><i class="fas fa-phone"></i>08h - 12h</li>
          <li><span></span>13h - 18h</li>
        </ul>
      </div>

      <div class="rodape-wrap rodape-wrap-adress">
        <p><i class="fas fa-map-marker-alt"></i>Rua Antônio Hortolani,
          157 N centro 
          Tangará da Serra/MT</p>
        <p><i class="fas fa-envelope"></i>contato@terziempresas.com.br</p>
      </div>

      <div class="rodape-wrap">
        <div class="rodape-form">
          <form action="">
            <input type="text" placeholder="Nome">
            <input type="text" placeholder="(65) 99999-9999">
            <textarea type="text" placeholder="Mensagem"></textarea>
            <button>enviar e-mail</button>
          </form>
        </div>
      </div>

        <div class="rodape-wrap">
            <img src="<?= get_template_directory_uri(); ?>/img/logo-rodape.png" alt="">   
        </div>
    </div>

</div>  
</footer>

<div class="copy-dev">
  <div class="container">
    <div class="justify">
      <p>Todos os direitos reservados à Terzi Empresas</p>
      
      <a href="#">
        <img src="<?= get_template_directory_uri(); ?>/img/lr-branca.png" alt="">     
      </a>
    </div>
  </div>
</div>
  <?php wp_footer(); ?>
</body>
</html>
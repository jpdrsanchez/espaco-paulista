<!DOCTYPE html>
<html lang="pt-BR">

<?php $title = 'Casamento'; ?>
<?php require_once './includes/head.php'; ?>

<body>
  <?php require_once './includes/header.php'; ?>
  <?php 
    $coverBg = './assets/images/events/page-cover.jpg';
    $coverTitle = 'Casamento';
    $coverText = 'Todo dia é dia de celebrar o amor! Aqui no Buffet Espaço Paulista, as cerimônias de casamento são regadas de paixão e muito afeto em todos os sentidos. Faça a troca das alianças em nosso espaço e torne esse dia ainda mais especial realizando seu evento conosco.';
  ?>
  <?php require_once './includes/page-cover.php'; ?>
  <?php 
    $imageOne = './assets/images/event/casamento-1.jpg';
    $imageTwo = './assets/images/event/casamento-2.jpg';
    $imageThree = './assets/images/event/cta-1.jpg';
    $imageFour = './assets/images/event/cta-2.jpg';
    $subtitleOne = 'Seu felizes para sempre'; 
    $titleOne = 'Começa aqui';
    $textOne = 'Para que sua comemoração de casamento seja ilustre, faça sua cerimônia no mais requintado espaço de eventos da Zona Leste, localizado no coração do Tatuapé, no Jardim Anália Franco. Somos especialistas em realizar os mais ousados sonhos, independente do porte.';
    $subtitleTwo = 'Faça sua';
    $titleTwo = 'Celebração Agora';
    $textTwo = 'Tenha à sua disposição uma infraestrutura de brilhar os olhos e aquecer corações, em um espaço completamente diferente do que você já viu, dispondo de uma arquitetura monumental e grandiosa. Aqui no Buffet Espaço Paulista, tudo aqui acontece!';
    $gallerySubtitle = 'Galeria de fotos';
    $galleryTitle = 'Dos Nossos Casamentos';
    $galleryText = 'Confira a sessão de fotos das mais diversas celebrações realizadas aqui no Buffet Espaço Paulista e veja as inúmeras possibilidades de decoração e versatilidade de nosso espaço para a realização do seu evento.';
    $images = [];
    for($i = 1; $i <= 18; $i++) {
      $images[] = [
        'link' => './assets/images/galleries/space-gallery/img-' . $i . '.jpg',
        'image' => './assets/images/galleries/space-gallery/img-' . $i . '.jpg',
        'title' => 'Image' . $i,
      ];
    }
  ?>
  <?php require_once './includes/event.php'; ?>
  <?php require_once './includes/page-cta.php'; ?>
  <?php require_once './includes/footer.php'; ?>
</body>

</html>
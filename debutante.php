<!DOCTYPE html>
<html lang="pt-BR">

<?php $title = 'Debutante'; ?>
<?php require_once './includes/head.php'; ?>

<body>
  <?php require_once './includes/header.php'; ?>
  <?php 
    $coverBg = './assets/images/events/page-cover.jpg';
    $coverTitle = 'Debutante';
    $coverText = 'Ser debutante não acontece todo dia. É uma única vez. É para sempre. Por isso, faça desse momento ainda mais especial do que ele já é. Viva seus 15 anos intensamente e aproveite demais esse dia.';
  ?>
  <?php require_once './includes/page-cover.php'; ?>
  <?php 
    $imageOne = './assets/images/event/debutante-1.jpg';
    $imageTwo = './assets/images/event/debutante-2.jpg';
    $imageThree = './assets/images/event/cta-1.jpg';
    $imageFour = './assets/images/event/cta-3.jpg';
    $subtitleOne = 'O debutante que você'; 
    $titleOne = 'Sempre Sonhou';
    $textOne = 'Para que sua festa de debutante seja digna de um dia de princesa, faça sua celebração no mais requintado espaço de eventos da Zona Leste, localizado no coração do Tatuapé, no Jardim Anália Franco. Somos especialistas em realizar os mais ousados sonhos, independente do porte.';
    $subtitleTwo = 'Faça sua';
    $titleTwo = 'Celebração Agora';
    $textTwo = 'Tenha à sua disposição uma infraestrutura de brilhar os olhos e aquecer corações, em um espaço completamente diferente do que você já viu, dispondo de uma arquitetura monumental e grandiosa. Aqui no Buffet Espaço Paulista, tudo aqui acontece!';
    $gallerySubtitle = 'Galeria de fotos';
    $galleryTitle = 'Dos Nossos Debutantes';
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
<!DOCTYPE html>
<html lang="pt-BR">

<?php $title = 'Aniversário'; ?>
<?php require_once './includes/head.php'; ?>

<body>
  <?php require_once './includes/header.php'; ?>
  <?php 
    $coverBg = './assets/images/events/page-cover.jpg';
    $coverTitle = 'Aniversário';
    $coverText = 'Comemore esta data tão especial no Buffet Espaço Paulista! Iremos oferecer as melhores soluções para que sua festa de aniversário seja completamente personalizada e projetada especialmente para você! Assopre as velinhas em nosso espaço e torne esse dia ainda mais especial realizando seu evento conosco.';
  ?>
  <?php require_once './includes/page-cover.php'; ?>
  <?php 
    $imageOne = './assets/images/event/aniversario-1.jpg';
    $imageTwo = './assets/images/event/aniversario-2.jpg';
    $imageThree = './assets/images/event/cta-1.jpg';
    $imageFour = './assets/images/event/cta-2.jpg';
    $subtitleOne = 'O aniversário que você'; 
    $titleOne = 'Sempre Sonhou';
    $textOne = 'Para que você comemore mais um ano de vida de forma esplêndida, ao lado das pessoas que ama, faça sua celebração no mais requintado espaço de eventos da Zona Leste, localizado no coração do Tatuapé, no Jardim Anália Franco. Somos especialistas em realizar os mais ousados sonhos, independente do porte.';
    $subtitleTwo = 'Faça sua';
    $titleTwo = 'Celebração Agora';
    $textTwo = 'Tenha à sua disposição uma infraestrutura de brilhar os olhos e aquecer corações, em um espaço completamente diferente do que você já viu, dispondo de uma arquitetura monumental e grandiosa. Aqui no Buffet Espaço Paulista, tudo aqui acontece!';
    $gallerySubtitle = 'Galeria de fotos';
    $galleryTitle = 'Dos Nossos Aniversários';
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
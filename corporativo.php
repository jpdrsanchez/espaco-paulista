<!DOCTYPE html>
<html lang="pt-BR">

<?php $title = 'Corporativo'; ?>
<?php require_once './includes/head.php'; ?>

<body>
  <?php require_once './includes/header.php'; ?>
  <?php 
    $coverBg = './assets/images/events/page-cover.jpg';
    $coverTitle = 'Corporativo';
    $coverText = 'Se você é empreendedor ou trabalha em uma empresa de sucesso, seu evento corporativo deve ser tão grandioso quanto. Conheça o Espaço Paulista, e realize seus eventos no lugar que mais valoriza e honra sua jornada empresarial. Se sua empresa se preocupa com o respeito ao cliente, qualidade de serviço e geração de valores, o Espaço Paulista é o lugar certo para comemorar suas conquistas e realizar suas solenidades.';
  ?>
  <?php require_once './includes/page-cover.php'; ?>
  <?php 
    $imageOne = './assets/images/event/corporativo-1.jpg';
    $imageTwo = './assets/images/event/corporativo-2.jpg';
    $imageThree = './assets/images/event/cta-1.jpg';
    $imageFour = './assets/images/event/cta-2.jpg';
    $subtitleOne = 'O evento corporativo ideal'; 
    $titleOne = 'Para sua Empresa';
    $textOne = 'Para que seu evento corporativo possua uma estrutura completa e seja impecável, faça sua celebração no mais requintado espaço de eventos da Zona Leste, localizado no coração do Tatuapé, no Jardim Anália Franco. Somos especialistas em realizar os mais ousados sonhos, independente do porte.';
    $subtitleTwo = 'Faça sua';
    $titleTwo = 'Celebração Agora';
    $textTwo = 'Tenha à sua disposição uma infraestrutura de brilhar os olhos e aquecer corações, em um espaço completamente diferente do que você já viu, dispondo de uma arquitetura monumental e grandiosa. Aqui no Buffet Espaço Paulista, tudo aqui acontece!';
    $gallerySubtitle = 'Galeria de fotos';
    $galleryTitle = 'Dos Eventos Corporativos';
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
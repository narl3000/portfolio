

</html>

<?php
  $page = filter_input(INPUT_GET, 'page');
  if (!isset($page)) {
    $page = "accueil";
  }
  ?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naël GATAT</title>
    <link rel="icon" href="nael.ico" />
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="portfolio.css">
   
</head>
 <body>
   <?php
    include_once '../portfolio-master/common/header.php';
   
    switch ($page) {
      case 'home':
        include '../portfolio-master/content/home.php';
        break;
      case 'cv':
        include '../portfolio-master/content/cv.php';
        break;
      case 'veilles':
        include '../portfolio-master/content/veilles.php';
        break;
      case 'realisations':
        include '../portfolio-master/content/realisations.php';
        break;
    case 'bootstrap':
        include '../portfolio-master/content/bootstrap.php';
        break;
        case 'orm':
            include '../portfolio-master/content/orm.php';
            break;
            case 'chat_gpt':
                include '../portfolio-master/content/chat_gpt.php';
                break;
      
    }
    include '../portfolio-master/common/footer.php';
    ?>

 </body>

 <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> -->
 </html>
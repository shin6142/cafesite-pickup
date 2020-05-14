<?php 
require_once('menu.php');
require_once('data.php');
$menuName = $_GET['name'];
$menu = Menu::findByName($menus,$menuName);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>COFFEE SHOP(PICK UP)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/responsive.min.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<div class="section top" id="1">
  <header>
   <div class="container">
      <div class="header-logo">
          <a href="#">
          <div class="header-logo-icon"><i class="fas fa-mug-hot"></i></div>
          <div class="header-logo-text"><p>BUT<br>FIRST<br>COFFEE.</p></div>
          <div class="clear"></div>
          </a>
      </div>
      <div class="header-menubar" id="menu-show">
        <i class="fas fa-bars"></i>
      </div>
    <div class="clear"></div>
    
    <div class="header-menu-list">
        <ul>
        <li><a href="#2"><i class="fas fa-seedling"></i>HOME</a></li>
        <li><a href="./index.php"><i class="fas fa-walking"></i>Pick Up</a></li>
        <li id="menu-close"><i class="fas fa-window-close"></i></li>
        </ul>
    </div>
      <div class="clear"></div>
   </div>
  </header>
</div>


<div class="container">
  <div class="detail-wrapper">
    <img class="detail-image" src="<?php echo $menu->getImage() ?>" >
      <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
        <?php if($menu instanceof Drink):?>
         <p>(<?php echo $menu->getType();?>)</p>
        <?php else:?>
         <p><?php echo $menu->getAllegy();?></p>
         <?php endif?>
         <p><?php echo $menu->getDetail() ?></p>
         <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?></p>
         <h3><a class="back" href="index.php">← Back</a></h3>
  </div>
        
</div>



<script type="text/javascript" src="main.js"></script>
</body>
</html>
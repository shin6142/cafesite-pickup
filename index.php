<?php require_once('data.php') ?>
<?php require_once('menu.php')?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>COFFEE SHOP(PICK UP)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/responsive.css">
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
        <li><a href=""><i class="fas fa-seedling"></i>HOME</a></li>
        <li><a href="2"><i class="fas fa-walking"></i>Pick Up</a></li>
        <li id="menu-close"><i class="fas fa-window-close"></i></li>
        </ul>
    </div>
      <div class="clear"></div>
  </div>
  </header>
</div>

<div class="section news-wrapper container" id="1">
  <div class="heading2"><h2>~What's New~</h2><p>新作情報</p></div>
    <div class="news">
      <div class="news1">
              <img src="img/cafelatte.jpg">
      </div>
          <div class="news2">
            <h2>Our New Latte</h2>
            <p class="text">後味で実感する、カフェのようなミルク感ミルクを注ぎ入れた直後のような豊かな味わいを実現するために、独自の「ミルクブースト技術」を新開発。これまでのカフェラテでは実現できなかった、口の中にやさしく広がる、なめらかなミルクの後味をお楽しみいただけます。</p>
            <a class="pickUp-btn" href="#2"><i class="fas fa-walking"></i>Pick Up</a>
          </div>
        <div class="clear"></div>
    </div>
</div>






  <div class="section menu-wrapper container" id="2">
    <p>〜Preorder to pick up〜</p>
    <h2>ピックアップを予約する。</h2>
    <h2><i class="fas fa-book-open"></i>MENU</h2>
    <p><?php echo Menu::getCount()?>品</p>

    <form method="post" action="confirm.php">
        <div class="menu-items">

          <?php foreach ($menus as $menu):?>
             <div class="menu-item">
             <a href="show.php?name=<?php echo $menu->getName()?>">
                <img src="<?php echo $menu->getImage()?>" class="menu-item-image">
                <h3>
                 <?php echo $menu->getName()?>
                </h3>
                 <?php if ($menu instanceof Drink):?>
                <p>(<?php echo $menu->getType() ?>)</p>
                 <?php else:?>
                 <p>アレルギー：<?php echo $menu->getAllegy() ?></p>
                 <?php endif?>
                 <p>税込<?php echo $menu->getTaxIncludedPrice()?>円</p>
                <input type="text" value="0" name="<?php echo $menu->getName() ?>">
                <spam>個</span>
                 </a>
              </div>
          <?php endforeach?>
        </div>
      <input class="submit" type="submit" value="注文を確認">
    </form>
  </div>
 
  <footer>
      <h4 id="top-btn">TOPへ</h4>
    </footer>



  <script type="text/javascript" src="main.js"></script>
</body>
</html>

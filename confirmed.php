<?php 
require_once('data.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>COFFEE SHOP(PICK UP)</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
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
      <div class="container">
        <ul>
        <li><a href="#2"><i class="fas fa-seedling"></i>Menu</a></li>
        <li><a href="#3"><i class="fas fa-seedling"></i>About</a></li>
        <li><a href="#4"><i class="fas fa-seedling"></i>Contact</a></li>
        <li><a href="./index.php"><i class="fas fa-walking"></i>Pick Up</a></li>
        <li id="menu-close"><i class="fas fa-window-close"></i></li>
        </ul>
      </div>
    </div>
      <div class="clear"></div>
  </div>
  </header>
</div>


<div class="confirmed-wrapper container">
    <div class="heading">
        <h3>ご注文ありがとうございました。</h3>
        <p>予約番号をお控えください。</p>
        <?php 
        $min = 0;
        $max = 100;
        ?>
        <h3>予約番号：<?php echo mt_rand($min,$max);?></h3>
    </div>
</div>

<script type="text/javascript" src="main.js"></script>
</body>
</html>
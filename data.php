<?php
require_once('drink.php');
require_once('food.php');

$coffee = new Drink ('Coffee',300,'../img/menu-coffee.jpg','酸味の少ないスッキリとした味わい、挽きたての豆が深い薫りを生み出します。','Hot'); 
$latte = new Drink ('Latte',300,'img/menu-latte.jpg','オリジナルブレンドコーヒーと濃厚なミルクの柔らかな味わい。','Hot');
$cuppchinno = new Drink ('Cuppchinno',300,'img/menu-cuppcinno.jpg','キレのあるエスプレッソと濃密なスチームドミルク、目覚めの1杯にどうぞ。','Hot');
$tea = new Drink ('Tea',300,'img/menu-tea.jpg','癖のない香りとさっぱりとした後味のストレートティー。','Hot');
$icoffee = new Drink ('ColdBlue',300,'img/menu-icoffee.jpg','熱を加えずに14時間かけてゆっくりと水で抽出したコールドブリューコーヒー。香り高い風味が引き出されるよう、特別にブレンド、ローストしたコーヒー豆を使用しています。豊かな味わいとなめらかな口あたりをお楽しみください','Iced');
$ilatte = new Drink ('IcedLatte',300,'img/menu-ilatte.jpg','エスプレッソに氷と冷たいミルクを加えたもの。濃厚で香り豊かなエスプレッソならではの人気のアイスドリンクです。','Iced');
$itea = new Drink ('IcedTea',300,'img/menu-itea.jpg','癖のない香りとさっぱりとした後味のストレートティー。自然冷却方でより美味しく仕上げました。','Iced');
$vegges = new Food ('Vegges',300,'img/sandwhiches-vegge&ham.png','新鮮な野菜を使ったシャキシャキサンドイッチ','小麦');
$bagle = new Food ('Bagle',300,'img/sandwiches-bagle.jpg','焼き立てもちもちのベーグルを使ったサンドイッチ','小麦');
$cheese = new Food ('CheeseSand',300,'img/sandwiches-cheese.jpg','溶けたチーズとサクサクふわふわの食パンの相性バツグン','小麦、牛乳');
$fruite = new Food ('FruiteSand',300,'img/sandwiches-fruite.jpg','　フレッシュフルーツと甘すぎない生クリームサンド。','小麦、牛乳');
$cheesecake = new Food ('CheeseCake',300,'img/snack-cake-cheese.jpg','甘さ控えめの自家製チーズケーキ','小麦、牛乳');
$chocolatecake = new Food ('ChocolateCake',300,'img/snack-cake-chocolate.jpg','甘さ控えめの自家製チョコレートケーキ','小麦、牛乳');
$dounut = new Food ('Dounuts',300,'img/snack-dounut.jpg','外はカリッと香ばしく中はふんわり。','小麦、牛乳');
$scone = new Food ('Scone',300,'img/snack-scone.jpg','外はさっくり、中はもっふりの定番スコーン。','小麦、牛乳');

$menus = array ($coffee, $latte, $cuppchinno,$tea,$icoffee,$ilatte,$itea,$vegges,$bagle,$cheese,$fruite,$cheesecake,$chocolatecake,$dounut,$scone);



?>

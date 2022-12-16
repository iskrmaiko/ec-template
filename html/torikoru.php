<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/torikoru/top.png');
$smarty->assign('intro', '1936年（昭和11年）に銀座5丁目あづま通りに 柴田文次氏が創業。
当時は洒落たモダンな喫茶店として多くのお客様がご来店になりました。以来80余年にわたり培われた、
味を大切にするその精神は今もなお受け継がれております。1階カウンター席ではネルドリップ抽出の香りと音が心地良く。
2階席の天窓からは銀座の空がすぐそこに。ネルドリップで丁寧に抽出したコーヒーと特製デザートと共に、
安らぎと心和む憩いのひと時をお過ごしいただければ幸いです。 

');

$smarty->assign('img01', '/img/pages/torikoru/01.png');
$smarty->assign('desc01', 'トリコロール本店<br>
東京都中央区銀座5-9-17<br>
8:00～18:00 (L.O.17:30)<br>
03-3571-1811<br>
<br>
銀座トリコロール<br>
・仙台三越店　TEL：022-221-3206 <br>
・名古屋松坂屋店　TEL：052-251-3466<br>
・玉川高島屋SC店　TEL：03-3707-3880<br>
');

$smarty->assign('img02', '/img/pages/torikoru/02.png');
$smarty->assign('desc02', 'サックリとした皮を味わっていただく為にご注文を伺ってからクリームを挟みます。
サックリと、そしてフワっとした食感は、どこか＜儚さ＞を感じさせ、 後を引くおいしさです。 
');

$smarty->assign('img03', '/img/pages/torikoru/03.png');
$smarty->assign('desc03', 'アップルパイ<br>
りんごは一つひとつ丁寧に皮をむき、　大きな鍋でしっかりと味が染みるまで煮上げています。
');

$smarty->assign('img04', '/img/pages/torikoru/04.png');
$smarty->assign('desc04', '「最高の中南米ブレンド」を目指して作り上げたトリコロールオリジナルのブレンドコーヒーです。
 メープルのような甘さと、ライムのごとく明るい酸味が口の中を包み込みます。 <br>
 <br> アイスカフェ・オ・レ
ネルドリップで一杯ごとに抽出した濃いめのコーヒーを新鮮なミルクと調和させました。
');

$smarty->assign('co', '/img/pages/torikoru/co.png');


$smarty->assign('company', '株式会社トリコロール');
$smarty->assign('phone', '03-3562-0025');
$smarty->assign('address', '東京都中央区銀座 3-8-12 大広朝日ビル 4 階');
$smarty->assign('homepage', 'https://models-store.torikoru.co.jp/ ');
$smarty->assign('instagram', 'https://www.instagram.com/tricolore_koushiki');
$smarty->assign('twitter', 'https://twitter.com/torikoru_models');
$smarty->assign('facebook', 'https://www.facebook.com/mokei.torikoru/');





$smarty->display('ec.tpl');

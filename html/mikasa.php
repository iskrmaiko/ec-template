<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/mikasan/top.png');
$smarty->assign('intro', '特別な記念日からカジュアルなシーンまでご利用いただけるようさまざまなコンセプトのレストランを展開しています。
中央区銀座（本店）をはじめ、新宿、池袋、世田谷、横浜、市川、柏、浦和をはじめ首都圏及でレストランを営業しています。');

$smarty->assign('img01', '/img/pages/mikasan/01.png');
$smarty->assign('desc01', '三笠会館 本店（銀座）<br>
7階Teppanyaki 大和<br>
5階パーティールーム<br>
6階パーティールーム<br>
4階揚州名菜　秦淮春<br>
3階Japanese 吉野<br>
2階French 榛名<br>
2階 Trattoria Mezzanino<br>
1階 Italian Bar LA VIOLA<br>
地下1階 Bar 5517<br>');

$smarty->assign('img02', '/img/pages/mikasan/02.png');
$smarty->assign('desc02', '最高級神戸牛や各地の厳選した高品質の黒毛和牛などと新鮮な魚介類の鉄板焼き。
お客様の一人ひとりの目の前でベテランコックが絶妙に焼き上げます。
緑のテラスガーデンを眺めながら、ごゆっくりお過ごしください。');

$smarty->assign('img03', '/img/pages/mikasan/03.png');
$smarty->assign('desc03', '吉野<br>
コース料理食べ放題もご好評いただいております。<br>
<br>
プレミアム和牛をはじめ、10種類のお肉や16種類のこだわり野菜、具材を食べ放題にてご用意しております。
〆のトリュフ玉子かけごはんもお楽しみください。
うなぎ専門店 斑鳩（いかるが）・氷処 みかさを併設しております。');


$smarty->assign('co', '/img/pages/mikasan/co.png');


$smarty->assign('company', '株式会社 三笠会館');
$smarty->assign('phone', '03-3289-5654');
$smarty->assign('address', '〒104-0061　東京都中央区銀座5-5-17');
$smarty->assign('homepage', 'https://www.mikasakaikan.co.jp/');
$smarty->assign('instagram', 'https://www.instagram.com/mikasakaikan/');





$smarty->display('ec.tpl');

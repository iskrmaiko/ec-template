<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/swiss/top.png');
$smarty->assign('intro', '銀座の洋食屋 銀座スイス<br>
昭和22年の創業時から忠実に守り続けた銀座スイス伝統の洋食。
75周年を迎える銀座スイスが挑戦する次なるテーマは、「古くて懐か 
しいけど新しい味！！」親子、三世代・四世代と続くお客様にどなた からも愛され
「美味しい体験」をしていただけるよう、全社員精力を 傾けて取り組んで参ります。
');

$smarty->assign('img01', '/img/pages/swiss/01.png');
$smarty->assign('desc01', 'スイス5つのお約束<br>
先代から受け継ぐレシピを忠実に守り、 伝統の味を継承していきます。
手作りでひとつひとつの食材にこだわ り、素早く出来たてのご提供を目指し ます。<br>
常にお客様のニーズにお応えするため、 新メニューに挑戦しつづけます。
国内外から人々が集まる銀座の地で日 本食としての洋食を体験、実感しても らいます。<br>
“まじめで丁寧な”商品とサービスを心 がけます。
');

$smarty->assign('img02', '/img/pages/swiss/02.png');
$smarty->assign('desc02', '銀座本店（ガス灯通り）
東京都中央区銀座３丁目４−４ 
大倉別館 2F    03-3563-3206<br>
<br>
営業時間<br>
11:00～21:00(20:30L.O)<br>
（月・水曜日15:00～17:00準備中）<br>
<br>
休業日 火曜日
');

$smarty->assign('img03', '/img/pages/swiss/03.png');
$smarty->assign('desc03', 'メニューのご紹介<br>
<br>
・千葉さんのカツカレー<br>
・ハンバーグステーキ<br>
・オムライス<br>
・カツサンド<br>
・昭和のグラタン<br>
・カニクリームコロッケ　他　多数<br>
');

$smarty->assign('img04', '/img/pages/swiss/04.png');
$smarty->assign('desc04', 'トウキョウカレーカルテット 銀座スイス八重洲店<br>
カレー専門店<br>
東京都中央区八重洲2-1 B1F<br>
八重洲地下街南1号<br>
電話番号 03-6225-2090<br>
営業時間 11：00～22：00<br>
休業日 元旦のみ<br>
');

$smarty->assign('co', '/img/pages/swiss/co.png');


$smarty->assign('company', '株式会社天賞堂エムエス');
$smarty->assign('phone', '03-3562-0025');
$smarty->assign('address', '東京都中央区銀座 3-8-12 大広朝日ビル 4 階');
$smarty->assign('homepage', 'https://models-store.swiss.co.jp/ ');
$smarty->assign('instagram', 'https://www.instagram.com/mokei.swiss/?hl=ja');
$smarty->assign('twitter', 'https://twitter.com/swiss_models');
$smarty->assign('facebook', 'https://www.facebook.com/mokei.swiss/');





$smarty->display('ec.tpl');

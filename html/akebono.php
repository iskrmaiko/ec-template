<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/akebono/top.png');
$smarty->assign('intro', '銀座あけぼのは銀座で育った菓子屋です。まだ焼跡の匂いが残る終戦直後、
銀座四丁目交差点近くに冬はおしるこ　夏はカキ氷の店として
誕生しました。「新しい日本の夜明け」を願う気持ちが「あけぼの」という名前に込められております。
創業以来　時代やお客様の好みの変化とともにつねに新しいことに挑戦し喜んでいただくことで今日までやって参りました。
お菓子が満たすのはお腹ではなく心、今を生きるお客様の心を満たしつづけること、それが私ども銀座あけぼのの仕事です
');

$smarty->assign('img01', '/img/pages/akebono/01.png');
$smarty->assign('desc01', '二十四節花 36入箱<br>
<br>
宮城県産みやこがねもち米でつくった
八つの味わいのおかきを
二十四節気に咲く
花の小袋でお包しました
小袋の裏には花にちなんだ
俳句を載せています
');

$smarty->assign('img02', '/img/pages/akebono/02.png');
$smarty->assign('desc02', '味の民藝 93個入 <br>
<br>
素材から装いの細部まで、全てに心を配った銀座あけぼのの自信作です。
チーズ・チョコなど個性的なおかきも入ったこだわり12種のおかきを93個詰合せました
');

$smarty->assign('img03', '/img/pages/akebono/03.png');
$smarty->assign('desc03', '銀座本店<br>
<br>
住所	東京都中央区銀座5-7-19<br>
電話	03-3571-3640　<br>
営業時間	10:00～21:00（月～土）<br>
　　　　10:00～20:00（日・祝）<br>
アクセス	<br>
東京メトロ銀座線・丸の内線・日比谷線「銀座」A1出口<br>
有楽町線「銀座一丁目」9番出口<br>
都営浅草線「東銀座」A2出口<br>
');
 

$smarty->assign('co', '/img/pages/akebono/co.png');


$smarty->assign('company', '株式会社　曙');
$smarty->assign('phone', '不要');
$smarty->assign('address', '東京都中央区日本橋浜町2－39－2');
$smarty->assign('homepage', 'https://www.ginza-akebono.co.jp');
$smarty->assign('instagram', 'https://www.instagram.com/ginza.akebono/');
$smarty->assign('facebook', 'https://www.facebook.com/ginzaakebono.wagashi');





$smarty->display('ec.tpl');

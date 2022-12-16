<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/west/top.png');
$smarty->assign('intro', '昭和22年銀座にオープンした「ウエスト」の出発点はレストランでありました。
船旅全盛時代の郵船よりシェフを招いて、街でコーヒー一杯10円の当時、コース1,000円の料理を出していたウエストは、
開店後わずか半年余りで施行された都条例により「75円以上のメニュー」が禁止されたため、やむなく製菓部門のみを残し、
喫茶に変身いたしました。');

$smarty->assign('img01', '/img/pages/west/01.png');
$smarty->assign('desc01', '銀座本店<br>
東京都中央区銀座7-3-6<br>
TEL：03-3571-1554<br>
FAX：03-3289-1885<br>
営業時間<br>
［月〜金曜日］<br>
　通常　AM9:00～PM10:00<br>
［土曜・日曜・祝日］<br>
　AM11:00～PM8:00<br>');

$smarty->assign('img02', '/img/pages/west/02.png');
$smarty->assign('desc02', '銀座本店
１９４７年の創業以来、銀座ウエストとしてたくさんのお客様に愛され続けてまいりましたウエストの本店です。
喫茶入り口左手キャビネットには昭和２０年代に演奏されていたＳＰ盤クラシックレコードがぎっしり。
店内には外と違う空気が流れているとおっしゃるお客様もいらっしゃいます。');

$smarty->assign('img03', '/img/pages/west/03.png');
$smarty->assign('desc03', 'リーフパイLeaf Pie<br>
<br>
東北地方の原乳を使用したフレッシュバターと小麦粉生地を２５６層に折りたたみ、
一つ一つ職人の手作業により木の葉のかたちに成形されたウエストの代表作です。
サックリとしたパイの食感と白ザラメ糖の歯ごたえが特徴です。');

$smarty->assign('img04', '/img/pages/west/04.png');
$smarty->assign('desc04', 'ギフトセット（一例）<br>
GS-G リーフパイ20枚+バタークッキー4袋+ヴィクトリア8個（個包装）
特定原材料等28品目：小麦・乳・卵・カシューナッツ・リンゴ
5,400 円（税込）');

$smarty->assign('co', '/img/pages/west/co.png');


$smarty->assign('company', '株式会社洋菓子舗ウエスト ');
$smarty->assign('phone', '03-3571-1554');
$smarty->assign('address', '〒104-0061　東京都中央区銀座7丁目3番6号');
$smarty->assign('homepage', 'https://www.ginza-west.co.jp/index.html');
$smarty->assign('instagram', 'https://www.instagram.com/ginzawest_official');
$smarty->assign('twitter', 'https://twitter.com/ginzawest/');





$smarty->display('ec.tpl');

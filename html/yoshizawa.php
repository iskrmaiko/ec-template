<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/yoshizawa/top.png');
$smarty->assign('intro', '創業大正十三年。精肉店として創業し、東京食肉市場の仲卸でもある「吉澤」では、店主自らが目利きしたこだわりの雌牛のみを一頭仕入。<br>
落ち着いた個室のお座敷となっておりますので、ご商談・ご会合・ご宴会に、ご家族での楽しい団欒のひとときにご利用ください。');

$smarty->assign('img01', '/img/pages/yoshizawa/01.png');
$smarty->assign('desc01', '肉づくしコース<br><br>
牛肉の様々な部位を、多彩なスタイルでお出しいたします。<br><br>
銀座吉澤の“牛肉”を存分にお楽しみいただけるコースとなっております。');

$smarty->assign('img02', '/img/pages/yoshizawa/02.png');
$smarty->assign('desc02', '上すき焼鍋御膳<br><br>お昼のお品書き一例銀座吉澤の看板料理である
「すき焼」。お昼の定番料理「すき焼鍋御膳」のお肉をさらにボリュームアップしました。');

$smarty->assign('img03', '/img/pages/yoshizawa/03.png');
$smarty->assign('desc03', '4名様用の個室から３５名様のご宴会場までゆっくりおくつろぎいただける
全１２室のお部屋をご用意致しました。<br>大切なお客様のおもてなしに、ご宴会にどうぞ…');

$smarty->assign('img04', '/img/pages/yoshizawa/04.png');
$smarty->assign('desc04', '東京都中央区銀座3丁目9-19<br>03（3542）2981<br>
銀座駅より徒歩３分（A12・A13）<br>銀座一丁目駅より徒歩２分（A11）<br>
東銀座駅より徒歩２分（A8）<br><br>平日：昼11：00～14：00<br>
　　　夜17：00～22：00<br>土曜：11:00～15：00<br>
　　　（12月は夜も営業）<br>休日：日曜日・祝日<br>');

$smarty->assign('co', '/img/pages/yoshizawa/co.png');


$smarty->assign('company', '株式会社吉澤商店');
$smarty->assign('phone', '03-3542-2981');
$smarty->assign('address', '東京都中央区銀座3-9-19');
$smarty->assign('homepage', 'http://www.ginza-yoshizawa.com');
$smarty->assign('instagram', 'https://www.instagram.com/ginzayoshizawa_official/');
$smarty->assign('facebook', 'https://business.facebook.com/ginzayoshizawa.official/');





$smarty->display('ec.tpl');

<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/tenshodo/top.png');
$smarty->assign('intro', '銀座天賞堂はおかげさまで創業140余年、模型を始めて70年以上が経 ちました。
その製品群は、こだわりや楽しさを追求してきたあまり多 岐にわたります。銀座本店は天賞堂製品だけでなく、
より充実した鉄 道模型の世界をご提案できるよう品揃えと情報発信をして参ります。 
皆様のホビーライフが一層楽しくなるお手伝いができましたら幸いで す。');

$smarty->assign('img01', '/img/pages/tenshodo/01.png');
$smarty->assign('desc01', '◇銀座本店（鉄道模型） <br>
東京都中央区  銀座 3-8-12 <br>
大広朝日ビル 4 階 <br>
<br>営業時間 <br>
11:00  ～  19:00（月曜～土曜） <br>
11:00  ～  18:30（日曜・祝日） <br>
定休日：木曜日 <br>
');

$smarty->assign('img02', '/img/pages/tenshodo/02.png');
$smarty->assign('desc02', '◇みなとみらい店 <br>
神奈川県横浜市西区  高島 1-1-2 <br>
横浜三井ビルディング 1 階 <br>
（原鉄道模型博物館直下） <br>
<br>営業時間 <br>
10:30  ～  18:30（月曜・金曜） <br>
10:00  ～  18:00（土日・祝日） <br>
定休日：火、水、木曜日 
');

$smarty->assign('img03', '/img/pages/tenshodo/03.png');
$smarty->assign('desc03', 'C61 形 20 号機  JR 東日本タイプ <br>
<br>C61 形は、戦後急増した旅客輸送のために貨物用D51 のボイラー等を流用のうえ製造されたもので、
日本初のハドソン形(2-C-2)蒸機となりました。東北本線や九州方面での優等列車牽引に活躍し、
現在は 2 号機が JR 西日本に、20 号機が JR 東日本に在籍しています。 
');

$smarty->assign('img04', '/img/pages/tenshodo/04.png');
$smarty->assign('desc04', 'EH500 形 30 号機 <br>
<br>EH500 形は首都圏と函館・五稜郭間を機関車を付け替えることなく通しで牽引できるよう開発された 
2 車体の貨物用交直流電気機関車で、青函トンネル内に対応するため ATC を搭載して登場しました。
3 次型として製造された 30 号機は、JR 発足30 周年を記念したツアーで「カシオペア」の牽引にあたりました。 
');

$smarty->assign('co', '/img/pages/tenshodo/co.png');


$smarty->assign('company', '株式会社天賞堂エムエス');
$smarty->assign('phone', '03-3562-0025');
$smarty->assign('address', '東京都中央区銀座 3-8-12 大広朝日ビル 4 階');
$smarty->assign('homepage', 'https://models-store.tenshodo.co.jp/ ');
$smarty->assign('instagram', 'https://www.instagram.com/mokei.tenshodo/?hl=ja');
$smarty->assign('twitter', 'https://twitter.com/tenshodo_models');
$smarty->assign('facebook', 'https://www.facebook.com/mokei.tenshodo/');





$smarty->display('ec.tpl');

<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/senbikiya/top.png');
$smarty->assign('intro', '明治27年に千疋屋総本店から暖簾分けを許され、京橋千疋屋に次いで、果物専門店「銀座千疋屋」を創業いたしました。大正2年には、国内初（※当社調べ）の「フルーツパーラー」を開業し、大正12年は、フルーツポンチを考案するなど伝統を守りながらも果物の新しい形を提案してまいりました。専門の目利きが触感と味覚を元に一点一点商品を厳選し、「数を求めず、質を尊ぶ」という創業当時からの思いは今も脈々と受け継がれています。これからもこの思いと共に、最上級の果物で多くの人に喜びと感動をお届けしてまいります。
');

$smarty->assign('img01', '/img/pages/senbikiya/01.png');
$smarty->assign('desc01', '銀座本店 フルーツショップ<br>
東京都中央区銀座5-5-1 1F<br>
［月～金］11:00～19:00<br>
［土・日・祝］11:00～18:00<br>
〈定休日〉年末年始<br>
〈TEL〉03-3572-0101<br>
◎東京メトロ 日比谷線、銀座線、丸ノ内線「銀座駅」 B5出口すぐです。<br>
◎JR「有楽町」駅 銀座口より徒歩5分です。<br>
');

$smarty->assign('img02', '/img/pages/senbikiya/02.png');
$smarty->assign('desc02', '銀座本店 フルーツパーラー<br>
東京都中央区銀座5-5-1 2F<br>
［日〜木・祝］11:00〜18:00<br>
［金・土］11:00〜19:00<br>
〈定休日〉年末年始<br>
〈TEL〉03-3572-0101<br>
');

$smarty->assign('img03', '/img/pages/senbikiya/03.png');
$smarty->assign('desc03', '新宿店 フルーツショップ<br>
東京都新宿区西新宿1-1-4　京王百貨店・のれん街<br>
［月～土］10:00～20:30<br>
［日・祝］10:00～20:00<br>
〈定休日〉年末年始<br>
〈TEL／FAX〉03-5321-5029<br>
※京王百貨店の営業時間に準ずる為、営業時間が変更になる場合がございます。<br>
');

$smarty->assign('img04', '/img/pages/senbikiya/04.png');
$smarty->assign('desc04', '築地店 スイーツショップ<br>
東京都中央区築地3-7-2 1F<br>
営業時間〉10:30〜18:30<br>
〈TEL〉03-6264-7440<br>
〈FAX〉03-6264-7450<br>
〈定休日〉日曜日・祝日・年末年始<br>
');

$smarty->assign('co', '/img/pages/senbikiya/co.png');


$smarty->assign('company', '株式会社天賞堂エムエス');
$smarty->assign('phone', '03-3562-0025');
$smarty->assign('address', '東京都中央区銀座 3-8-12 大広朝日ビル 4 階');
$smarty->assign('homepage', 'https://models-store.senbikiya.co.jp/ ');
$smarty->assign('instagram', 'https://www.instagram.com/mokei.senbikiya/?hl=ja');
$smarty->assign('twitter', 'https://twitter.com/senbikiya_models');
$smarty->assign('facebook', 'https://www.facebook.com/mokei.senbikiya/');





$smarty->display('ec.tpl');

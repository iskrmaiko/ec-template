<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/bunmeido/top.png');
$smarty->assign('intro', '株式会社文明堂銀座店<br>
1900年（明治33年）甚左衛門の兄・中川安五郎が「文明堂」を長崎に創業。文明堂銀座店は皆様におなじみのカステラだけでなく和菓子、
洋菓子もご用意しております。きめ細やかな口どけ、卵の風味を生かした黄色い生地が特徴の「カステラ屋さんのブッセ」、
発酵バターを贅沢に使い、一層一層手作りで丹念に焼き上げた、コクとしっとり感のあるバームクーヘンもお楽しみください。');

$smarty->assign('img01', '/img/pages/bunmeido/01.png');
$smarty->assign('desc01', '銀座五丁目店<br><br>
東京都中央区銀座5-7-10 <br>
中村積善会ビル EXITMELSA 1F<br>
TEL：03-3574-0002<br>
最寄り駅：銀座駅<br>
営業時間：営業時間:11:00〜20:00<br>');

$smarty->assign('img02', '/img/pages/bunmeido/02.png');
$smarty->assign('desc02', '天下文明カステラ
芳醇な味わいの栃木県産「蛍の里 地たまご」など、素材にこだわってじっくり丁寧に焼き上げたカステラです。<br>
銀座五丁目店を中心とした一部の限られた店舗と、当オンラインショップのみで販売している限定商品でございます。');

$smarty->assign('img03', '/img/pages/bunmeido/03.png');
$smarty->assign('desc03', 'カステラ・三笠山詰合せ
文明堂の王道お菓子、カステラと三笠山をお詰め合わせいたしました。<br>
<br>三笠山は北海道大納言小豆の風味を活かしながら炊き上げた粒あんを、ふんわりと焼き上げた皮で包みこんだどら焼きです。');

$smarty->assign('img04', '/img/pages/bunmeido/04.png');
$smarty->assign('desc04', 'BUNMEIDO CAFE GINZA <br>
東京都中央区銀座5-7-10 <br>
中村積善会ビル EXITMELSA 1F<br>
TEL：03-3574-7202<br>
最寄り駅：銀座駅<br>
営業時間：営業時間:11:00〜23:00<br>
(ラストオーダー22:00)<br>
※当面の間、下記営業時間に変更致します。<br>
　11：00～20：00<br>
（ラストオーダー19：00）<br>');

$smarty->assign('co', '/img/pages/bunmeido/co.png');


$smarty->assign('company', '株式会社文明堂銀座店');
$smarty->assign('phone', '0120-400-002（お客様相談室）');
$smarty->assign('address', '〒160-0022　東京都新宿区新宿 1丁目17番11号');
$smarty->assign('homepage', 'https://www.bunmeido.co.jp/');
$smarty->assign('instagram', 'https://www.instagram.com/bunmeido_tokyo/');





$smarty->display('ec.tpl');

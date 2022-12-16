<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';


$smarty->assign('banner', '/img/pages/ginza-senbei/top.png');
$smarty->assign('intro', 'Ginza Matsuzaki Senbei松崎煎餅とは
美味しいものをお客様にお召し上がりいただくために、丁寧に作ることで材料を無駄にしないために、
お客様お一人ごとに真心を込め販売するために。材料を吟味し、心を込め正直な商いを日々心がけております。
食の文化も時の流れと共に変化しておりますが、積み重ねられた弊店の特徴を大切にすると共に将来の変化を捉えた新しい製品の開発・
販売へも挑戦して参ります。</p>
<p style="text-align: right;">8代目店主松崎宗平（まつざきそうへい）');

$smarty->assign('img01', '/img/pages/ginza-senbei/01.png');
$smarty->assign('desc01', '
MATSUZAKI SHOTEN<br>
(銀座 松崎煎餅 本店)<br>
<br>
営業時間<br>
10:00〜19:00<br>
住所<br>
東京都中央区銀座4-13-8<br>
岩藤ビル1階<br>
03-6264-6703<br>');

$smarty->assign('img02', '/img/pages/ginza-senbei/02.png');
$smarty->assign('desc02', '詰合せ<br>
<br>松崎煎餅を代表するお煎餅を詰め合わせた、松崎のこだわりをお分かりいただける「大江戸松崎 顔見世」や、
松崎煎餅自慢の瓦煎餅の集大成ともいうべき詰合せ「大江戸松崎 道成寺」といった、
豊富な種類のお煎餅を一度にお楽しみいただける詰合せをご用意しております。');

$smarty->assign('img03', '/img/pages/ginza-senbei/03.png');
$smarty->assign('desc03', ' 松崎煎餅を代表する瓦煎餅「大江戸松崎 三味胴」は、滑らかに仕上げた表面に、職人が一枚一枚ていねいに、四季折々の風情を砂糖蜜で描いております。
卵をふんだんに使用した、心地よい食感とコクのある柔らかな甘さで、
老若男女幅広くお楽しみいただける瓦煎餅です。
「大江戸松崎 三味胴」のほか、
そら豆や落花生など多彩な味わいの瓦煎餅をご用意しております。');

$smarty->assign('img04', '/img/pages/ginza-senbei/04.png');
$smarty->assign('desc04', '煎餅の生地作りからこだわり、一枚一枚丁寧に焼き上げた松崎一推しの「江戸草加 本丸」をはじめとした厚焼きの草加煎餅から、
「江戸草加 西の丸」などの薄焼き草加煎餅まで、幅広く取り揃えております。うるち米の美味しさをお楽しみいただけます。');

$smarty->assign('co', '/img/pages/ginza-senbei/co.png');


$smarty->assign('company', '株式会社吉澤商店');
$smarty->assign('phone', '03-6264-6703');
$smarty->assign('address', '東京都中央区銀座４丁目１３−８');
$smarty->assign('homepage', 'https://matsuzaki-senbei.com');
$smarty->assign('instagram', 'https://www.instagram.com/matsuzakisenbei/');
$smarty->assign('twitter', 'https://twitter.com/matsuzakisenbei/');
$smarty->assign('line', 'https://page.line.me/769wxckr?openQrModal=true#~');





$smarty->display('ec.tpl');

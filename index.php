<?php

$pas_after = array('キュアブラック',
'キュアホワイト',
'シャイニールミナス',
'キュアブルーム',
'キュアイーグレット',
'キュアドリーム',
'キュアルージュ',
'キュアレモネード',
'キュアミント',
'キュアアクア',
'ミルキィローズ',
'キュアピーチ',
'キュアベリー',
'キュアパイン',
'キュアパッション',
'キュアブロッサム',
'キュアマリン',
'キュアサンシャイン',
'キュアムーンライト',
'キュアメロディ',
'キュアリズム',
'キュアビート',
'キュアミューズ',
'キュアハッピー',
'キュアサニー',
'キュアピース',
'キュアマーチ',
'キュアビューティ',
//'キュアエコー',
'キュアハート',
'キュアダイヤモンド',
'キュアロゼッタ',
'キュアソード',
'キュアエース',
'キュアラブリー',
'キュアプリンセス',
'キュアハニー',
'キュアフォーチュン',
'キュアフローラ',
'キュアマーメイド',
'キュアトゥインクル',
'キュアスカーレット',
'キュアミラクル',
'キュアマジカル',
'キュアフェリーチェ',
//'キュアモフルン',
'キュアホイップ',
'キュアカスタード',
'キュアジェラート',
'キュアマカロン',
'キュアショコラ',
'キュアパルフェ',
'キュアエール',
'キュアアンジュ',
'キュアエトワール',
'キュアマシェリ',
'キュアアムール',
'キュアスター',
'キュアミルキー',
'キュアソレイユ',
'キュアセレーネ');

$pas_before = array('キュアブラック' => '美墨なぎさ',
'キュアホワイト' => '雪城ほのか',
'シャイニールミナス' => '九条ひかり',
'キュアブルーム' => '日向咲',
'キュアイーグレット' => '美翔舞',
'キュアドリーム' => '夢原のぞみ',
'キュアルージュ' => '夏木りん',
'キュアレモネード' => '春日野うらら',
'キュアミント' => '秋元こまち',
'キュアアクア' => '水無月かれん',
'ミルキィローズ' => '美々野くるみ',
'キュアピーチ' => '桃園ラブ',
'キュアベリー' => '蒼乃美希',
'キュアパイン' => '山吹祈里',
'キュアパッション' => '東せつな',
'キュアブロッサム' => '花咲つぼみ',
'キュアマリン' => '来海えりか',
'キュアサンシャイン' => '明堂院いつき',
'キュアムーンライト' => '月影ゆり',
'キュアメロディ' => '北条響',
'キュアリズム' => '南野奏',
'キュアビート' => '黒川エレン',
'キュアミューズ' => '調辺アコ',
'キュアハッピー' => '星空みゆき',
'キュアサニー' => '日野あかね',
'キュアピース' => '黄瀬やよい',
'キュアマーチ' => '緑川なお',
'キュアビューティ' => '青木れいか',
//'キュアエコー' => '坂上あゆみ',
'キュアハート' => '相田マナ',
'キュアダイヤモンド' => '菱川六花',
'キュアロゼッタ' => '四葉ありす',
'キュアソード' => '剣崎真琴',
'キュアエース' => '円亜久里',
'キュアラブリー' => '愛乃めぐみ',
'キュアプリンセス' => '白雪ひめ',
'キュアハニー' => '大森ゆうこ',
'キュアフォーチュン' => '氷川いおな',
'キュアフローラ' => '春野はるか',
'キュアマーメイド' => '海藤みなみ',
'キュアトゥインクル' => '天ノ川きらら',
'キュアスカーレット' => '紅城トワ',
'キュアミラクル' => '朝日奈みらい',
'キュアマジカル' => '十六夜リコ',
'キュアフェリーチェ' => '花海ことは',
//'キュアモフルン' => 'モフルン',
'キュアホイップ' => '宇佐美いちか',
'キュアカスタード' => '有栖川ひまり',
'キュアジェラート' => '立神あおい',
'キュアマカロン' => '琴爪ゆかり',
'キュアショコラ' => '剣城あきら',
'キュアパルフェ' => 'キラ星シエル',
'キュアエール' => '野乃はな',
'キュアアンジュ' => '薬師寺さあや',
'キュアエトワール' => '輝木ほまれ',
'キュアマシェリ' => '愛崎えみる',
'キュアアムール' => 'ルールーアムール',
'キュアスター' => '星奈ひかる',
'キュアミルキー' => '羽衣ララ',
'キュアソレイユ' => '天宮えれな',
'キュアセレーネ' => '香久矢まどか');

$after_list = $_POST['after'];
$before_list = $_POST['before'];

$start = $_POST['start'];

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"></head>
        <title>プリキュアいえるかな</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
        <br /><br /><br />
        <div class="row">
	        <div class="col-md-offset-3 col-md-6"><img src="logo.png" class="img-responsive"></div>
		</div>
		<br /><br /><br />
        <h2>歴代プリキュア<? echo sizeof($pas_after); ?>人の変身後と変身前の名前、何人いえるかな？<br />
        (入力は順不同です。変身後と変身前の両方が一致した場合のみ正解とします。)</h2>
  		<br /><br /><br />
        <div class="row">
<?php

if($start != "")
{
	
	$time = time() - $start;
	
	$point = 0;
	
	for($j = 0; $j < sizeof($pas_after) ; $j++)
	{
		$before_list[$j] = str_replace("・", "", $before_list[$j]);
		$before_list[$j] = str_replace("･", "", $before_list[$j]);
		if($after_list[$j] == 'キュアブライト') $after_list[$j] = 'キュアブルーム';
		if($after_list[$j] == 'キュアウィンディ') $after_list[$j] = 'キュアイーグレット';
		if($before_list[$j] == 'ミルク') $before_list[$j] = '美々野くるみ';
		if($before_list[$j] == 'ヒメルダウインドウキュアクイーンオブザブルースカイ') $before_list[$j] = '白雪ひめ';
		if($before_list[$j] == 'プリンセスホープディライトトワ') $before_list[$j] = '紅城トワ';
		if($before_list[$j] == 'リコ') $before_list[$j] = '十六夜リコ';
		if($before_list[$j] == 'はーちゃん') $before_list[$j] = '花海ことは';
		if($before_list[$j] == 'キラリン') $before_list[$j] = 'キラ星シエル';
	}


    $after_check = [];
    
	for($i = 0; $i < sizeof($pas_after); $i++)
	{
		for($j = 0; $j < sizeof($pas_after); $j++)
		{
			if($pas_after[$i] == $after_list[$j])
            {
                $after_check[$j] = 1;
				if($pas_before[$pas_after[$i]] == $before_list[$j])
				{
					$point += 1;
					break;
				}
                else
                    echo '<p>変身前の' . ($j+1) .'番目があやしいわね…。</p>';
            }
		}
	}
    
    for($i = 0; $i < sizeof($pas_after); $i++)
        if($after_check[$i] == 0 && $after_list[$i] != '')
            echo '<p>変身後の' . ($i+1) .'番目が匂うモフ。</p>';
    
	
echo '            <h1>' . $point .'人言えました！(' . ceil($point * 100 / sizeof($pas_after)) .'/100点:所要時間' . floor($time / 60) . '分' . $time % 60 . '秒)</h1>
			<a href="http://twitter.com/share?url=http://as.precure.tv/&text=プリキュア、' . $point .'人言えました！(' . ceil($point * 100 / sizeof($pas_after)) .'/100点:所要時間' . floor($time / 60) . '分' . $time % 60 . '秒)&hashtags=プリキュアいえるかな" target="_blank">ツイートする</a>
	';
}
	
else
{
echo '    	<form method="post" action="/" class="form-horizontal" id="pas_form">
			<input name="start" type="hidden" value="' . time() .'" />
            <div class="form-horizontal">';


for($i = 1; $i <= sizeof($pas_after); $i++)
echo '
            <div class="form-group" id="name">
                <label class="control-label col-md-2">' . $i . '. 変身後</label>
                <div class="col-md-4"><input name="after[]" type="text" class="form-control" maxlength="60"/></div>
                <label class="control-label col-md-2">' . $i . '. 変身前</label>
                <div class="col-md-4"><input name="before[]" type="text" class="form-control" maxlength="60"/></div>
            </div>';

echo '		
           	</div>
			<br /><br /><br />
            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="submit();">確認</button>
			<br /><br /><br />
        </form>';
}
		
		?>
       
        </div>
        </div>
    </body>
</html>
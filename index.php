<?php

//プリキュアオールスターズ連想配列
$pas = array('キュアブラック' => '美墨なぎさ',
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
'キュアセレーネ' => '香久矢まどか',
'キュアコスモ' => 'ユニ');

//変身後入力配列
$after_list = $_POST['after'];

//変身前入力配列
$before_list = $_POST['before'];

//開始時刻
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
        <h2>歴代プリキュア<? echo sizeof($pas); ?>人(エコモフ抜き)の変身後と変身前の名前、何人いえるかな？<br />
        (入力は順不同です。変身後と変身前の両方が一致した場合のみ正解とします。)</h2>
  		<br /><br /><br />
        <div class="row">
<?php

//POSTで値が渡った場合
if($start != '')
{
	//経過時間
	$time = time() - $start;
	
    //ポイント初期化
	$point = 0;
	
    //表記揺れ吸収(普通に書けや！)
    for($i = 0; $i < sizeof($pas) ; $i++)
    {
        $before_list[$i] = str_replace('・', '', $before_list[$i]);
        $before_list[$i] = str_replace('･', '', $before_list[$i]);
        if($before_list[$i] == 'ミルク') $before_list[$i] = '美々野くるみ';
        if($before_list[$i] == 'イース') $before_list[$i] = '東せつな';
        if($before_list[$i] == 'ヒメルダウインドウキュアクイーンオブザブルースカイ') $before_list[$i] = '白雪ひめ';
        if($before_list[$i] == 'プリンセスホープディライトトワ') $before_list[$i] = '紅城トワ';
        if($before_list[$i] == 'リコ') $before_list[$i] = '十六夜リコ';
        if($before_list[$i] == 'はーちゃん') $before_list[$i] = '花海ことは';
        if($before_list[$i] == 'キラリン') $before_list[$i] = 'キラ星シエル';
        if($before_list[$i] == 'RUR-9500') $before_list[$i] = 'ルールーアムール';
        if($before_list[$i] == 'マオ') $before_list[$i] = 'ユニ';
        if($before_list[$i] == 'マオたん') $before_list[$i] = 'ユニ';
        if($before_list[$i] == 'ブルーキャット') $before_list[$i] = 'ユニ';
        if($before_list[$i] == '宇宙怪盗ブルーキャット') $before_list[$i] = 'ユニ';
        if($before_list[$i] == 'バケニャーン') $before_list[$i] = 'ユニ';
    }
    
    //変身後チェック配列
    $after_check = [];
    
    //変身前チェック配列
    $before_check = [];
    
    //プリキュアオールスターズ大ループ
    foreach($pas as $key => $value)
    {
        //一人ずつ変身後入力配列ループを回す
        for($i = 0; $i < sizeof($pas); $i++)
        {
            //変身後入力配列のどれかと一致したら処理
            if($after_list[$i] == $key)
            {
                //変身後チェックフラグを立てる
                $after_check[$i] = 1;

                //変身前入力配列と一致したら処理
                if($value == $before_list[$i])
                {
                    //変身前チェックフラグを立てる
                    $before_check[$i] = 1;

                    //ポイント加算
                    $point += 1;

                    //変身後入力排列ループを抜けて次の子へ
                    break;
                }
            }
        }
    }
    
    //変身後チェック
    for($i = 0; $i < sizeof($pas); $i++)
        if($after_check[$i] == 0 && $after_list[$i] != '')
            echo '<p>変身後の' . ($i+1) .'番目が匂うモフ。</p>';
    
    //変身前チェック
    for($i = 0; $i < sizeof($pas); $i++)
        if($before_check[$i] == 0 && $before_list[$i] != '')
            echo '<p>変身前の' . ($i+1) .'番目があやしいわね…。</p>';
	
    //結果表示
    echo '            <h1>' . $point .'人言えました！(' . ceil($point * 100 / sizeof($pas)) .'/100点:所要時間' . floor($time / 60) . '分' . $time % 60 . '秒:1人あたり' . round(($time / $point), 1, PHP_ROUND_HALF_DOWN) . '秒)</h1>
			<a href="http://twitter.com/share?url=http://as.precure.tv/&text=プリキュア、' . $point .'人言えました！(' . ceil($point * 100 / sizeof($pas)) .'/100点:所要時間' . floor($time / 60) . '分' . $time % 60 . '秒:1人あたり' . round(($time / $point), 1, PHP_ROUND_HALF_DOWN) . '秒)&hashtags=プリキュアいえるかな" target="_blank">ツイートする</a>
	';
}
//POSTで値が渡っていない場合(初期状態)
else
{
    //人数分のフォームを生成
    echo '    	<form method="post" action="/" class="form-horizontal" id="pas_form">
			<input name="start" type="hidden" value="' . time() .'" />
            <div class="form-horizontal">';

    for($i = 0; $i < sizeof($pas); $i++)
        echo '
            <div class="form-group" id="name">
                <label class="control-label col-md-2">' . ($i+1) . '. 変身後</label>
                <div class="col-md-4"><input name="after[]" type="text" class="form-control" maxlength="60"/></div>
                <label class="control-label col-md-2">' . ($i+1) . '. 変身前</label>
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
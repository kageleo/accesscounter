<?php
    $datafile='accesscounter.txt';
    // dt[アクセスをカウント, 前回の時間を記録]
    $dt = file($datafile);
    $dt_int = (int)$dt[0] + 1;
    date_default_timezone_set('Asia/Tokyo');
    $time = date('Y/m/d H:i:s');

    // JavaScriptを埋め込み
    header('Content-type: application/x-javascript; charset=UTF-8');
    echo 'document.write("';
    echo 'あなたは'.$dt_int.'番目のお客さんです<br>';
    echo '只今の到着時刻は'.$time.'です<br>';
    echo '(前回の到着時刻は'.$dt[1].'でした)<br>';
    echo '");'."\n";

    // 新しいデータをファイルに書き込み
    $fp=fopen($datafile,'w');
    fwrite($fp, $dt_int."\n".$time);
    fclose($fp);
?>


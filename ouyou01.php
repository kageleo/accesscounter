<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=Shift_JIS">
        <title>応用01PHPページ</title>
    </head>
    <body>
    <?php
        $datafile='accesscounter.txt'; //データファイルを指定
        $dt = file($datafile);
        $dt[0] = $dt[0] + 1;
        echo 'あなたは'.$dt[0].'番目のお客さんです。'; //変数$datafileを表示
        $fp = fopen($datafile, 'w');
        fwrite($fp, $dt[0]);
        fclose($fp);
    ?>
    </body>
</html>
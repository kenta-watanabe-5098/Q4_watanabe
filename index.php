<?php
require('car.php');
require('honda.php');
require('nissan.php');
require('ferrari.php');

if(isset($_POST['honda']) && $_POST['honda'] >= 0 && $_POST['nissan'] >= 0 && $_POST['ferrari'] >= 0) {
    $honda = new Honda();
    $nissan = new Nissan();
    $ferrari = new Ferrari();

    $nissan->defect();

    $a = $_POST['honda'];
    $b = $_POST['nissan'];
    $c = $_POST['ferrari'];

    $honda_obj = $honda->increasePassenger($a);
    $nissan_obj = $nissan->increasePassenger($b);
    $ferrari_obj = $ferrari->increasePassenger($c);

} else {
    echo '0以上の数字を入力ください';
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q4</title>
</head>
<body>
<h1>Q4. オブジェクト指向問題　課題</h1>
<table border="1">
    <tr>
        <th>メーカー</th>
        <th>加速</th>
        <th>乗員数</th>
    </tr>
    <tr>
        <th>HONDA</th>
            <td><?php if(isset($honda_obj)) {print($honda_obj);} ?></td>
            <td><?php if(isset($_POST['honda'])) {print($_POST['honda']);} ?></td>
    </tr>
    <tr>
        <th>NISSAN</th>
            <td><?php if(isset($nissan_obj)) {print($nissan_obj);} ?></td>
            <td><?php if(isset($_POST['nissan'])) {print($_POST['nissan']);} ?></td>
    </tr>
    <tr>
        <th>FERRARI</th>
            <td><?php if(isset($ferrari_obj)) {print($ferrari_obj);} ?></td>
            <td><?php if(isset($_POST['ferrari'])) {print($_POST['ferrari']);} ?></td>
    </tr>
</table>

<form method="post" action="">
    <span>HONDA車への乗員数</span>
    <input type="number" name="honda" value="0"><br/>

    <span>NISSAN車への乗員数</span>
    <input type="number" name="nissan" value="0"><br/>

    <span>FERRARI車への乗員数</span>
    <input type="number" name="ferrari" value="0"><br/>

    <input type="submit" value="登録">
</form>

    
</body>
</html>
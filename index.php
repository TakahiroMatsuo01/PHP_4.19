<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $data = ['高江'=>'男','掛谷'=>'女','日尾'=>'男','薄井'=>'女','和田'=>'男'];
    foreach($data as $key => $value){
        print "{$key}:{$value}<br/>";
    }
    ?>
</body>
</html>
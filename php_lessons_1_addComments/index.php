
<?php
$connect = new PDO("mysql:host=localhost; dbname=myforum; charset=utf8", 'root', '');

echo "<pre>";
var_dump($_POST);
echo "</pre>";

if (isset($_POST['username'])) {
    echo $username = $_POST['username'];
    echo "<br>";
    echo $comment = $_POST['comment'];
    echo "<br>";
    ECHO $date = date('Y-m-d H:i:s');
    echo "<br>";
    ECHO $date = date('r');

    $query = $connect->query("INSERT INTO myforum.comments (username, comment, date) VALUES ('$username',
 '$comment', '$date')");
    if($query) {
        echo "<br> Запись успешно сохранена";
    } else {
        echo "<pre>";
        var_dump($connect->errorInfo());
        echo "</pre>";
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        input, textarea {
            width: 300px;
            margin: 5px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
    </style>
<body>
    <form action="" method="POST">
        <input type="text" name="username" plaeholder="Ваше имя" required>
        <textarea name="comment" id="" cols="10" rows="10" placeholder="Ваш комментарий" required></textarea>
        <input type="submit">
    </form>
    <hr>
    <h2>Форум</h2>
    <?php
        $comments = $connect->query("SELECT * FROM myforum.comments ORDER BY date DESC");
        $comments = $comments->fetchAll(PDO::FETCH_ASSOC);


        if($comments) {
        foreach($comments as $comment) {?>
            <p><?= "{$comment['username']} leave comment: '{$comment['comment']}'  {$comment['date']}" ?></p>
            <? }} else {?>
                <p>Здесь пока нет комментариев :(</p>
    <?php } ?>



</body>
</html>
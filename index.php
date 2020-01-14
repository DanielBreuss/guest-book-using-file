<?php
require_once 'funcs.php';
define('COMMENTS', 'comments.txt');
if(!empty($_POST)){
    save_comm();
}

$comments = get_comm();
$comments = arr_comm($comments);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
    <style>

        .comment{
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
<h1>Гостевая книга</h1>
<hr>
<form action="" method="post" >
    <input  required size="40" type="text" placeholder="Ваше имя" name="name">
    <br>
    <textarea required rows="3" cols="40" placeholder="Введите комментарий" name="comment"></textarea>
    <br>
    <button type="submit">Отправить</button>
</form>
<?php if(!empty($comments)) : ?>
    <?php foreach ($comments as $comment) : ?>
        <?php $comment = get_format_comm($comment); ?>
        <div class="comment">
            <p>Автор: <?= $comment[0]?> | Дата : <?=$comment[2]?></p>
            <div><?= nl2br(htmlspecialchars($comment[1]));?></div>
        </div>
    <?php endforeach;?>
<?php endif;?>
</body>
</html>


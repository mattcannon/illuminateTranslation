<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $localiser->get('page.title');?></title>
</head>
<body>
<div class="container">
    <ul>
        <li><a href="?locale=en">English</a></li>
        <li><a href="?locale=fr">French</a></li>
        <li><a href="?locale=es">Spanish</a></li>
    </ul>
    <hr>
    <h1>
        <?= $localiser->get('page.heading');?>
    </h1>
    <p>
        <em>
            <?= $localiser->get('page.abstract');?>
        </em>
    </p>
    <p>
        <?= $localiser->get('page.body');?>
    </p>
</div>
<style>
    body{
        font-family:helvetica;
        line-height: 140%;
    }
    .container{
        width:960px;
        margin:0 auto;
    }
    ul{
        width:100%;
        list-style:none;
    }
    li{
        float: left;
        width:33.3%;

    }
</style>
</body>
</html>
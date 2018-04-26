<?php

/* @var $this yii\web\View */


use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to Guest Book!</h1>

        <p class="lead">Web Aplication</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::toRoute('/guestbook/') ?>">Go to Guestbook List</a></p>
    </div>

    <div class="body-content">


    </div>
</div>

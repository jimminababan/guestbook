<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This application is a Guest Book application. You can enter your name, email and content to fill the guest book.</p>
    <p>Features :</p>

    <ul>
        <li>Add Guestbook</li>
        <li>Update Guestbook</li>
        <li>List Guestbook</li>
        <li>Delete Guestbook</li>
    </ul>

</div>

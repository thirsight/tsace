<?php

use tsace\NavBar;
use yii\bootstrap\Nav;

NavBar::begin([
    'options' => [
        'tag' => 'div',
        'id' => 'navbar',
        'class' => 'navbar-inverse navbar-fixed-top navbar-default',
    ],
    'innerContainerOptions' => [
        'id' => 'navbar-container',
        'class' => 'navbar-container',
    ],
    'containerOptions' => [
        'class' => 'navbar-buttons navbar-header pull-right hidden-xs',
    ],
    'brandLabel' => '<small><i class="ace-icon fa fa-dollar"></i> ' . (isset(Yii::$app->params['siteName']) ? Yii::$app->params['siteName'] : '') . '</small>',
    'brandUrl' => Yii::$app->homeUrl,
]);

$menuItems = [
    [
        'label' => '<i class="ace-icon fa fa-home"></i> Home',
        'url' => (isset(Yii::$app->params['frontUrl']) ? Yii::$app->params['frontUrl'] : '###'),
        'linkOptions' => ['target' => '_blank']
    ],
    [
        'label' => '<i class="ace-icon fa fa-sign-out"></i> Logout (' . (isset(Yii::$app->user->identity->username) ? Yii::$app->user->identity->username : '') . ')',
        'url' => ['/fuckme/logout'],
        'linkOptions' => ['data-method' => 'post'],
    ],
];

echo Nav::widget([
    'encodeLabels' => false,
    'options' => ['class' => 'ace-nav'],
    'items' => $menuItems,
]);

NavBar::end();

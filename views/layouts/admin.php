<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

tsace\AceAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title><?= Html::encode($this->title. ' - ' . (isset(Yii::$app->params['siteName']) ? Yii::$app->params['siteName'] : '')) ?></title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body class="no-skin">
    <?php $this->beginBody() ?>

    <?= $this->render('_navbar') ?>

    <div id="main-container" class="main-container">

        <?= $this->render('_sidebar') ?>

        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs" id="breadcrumbs">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>

                <div class="page-content">
                    <div class="page-header">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->render('_footer') ?>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

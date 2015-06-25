# ts-ace
Ace admin theme for yii2

bootstrap configuration

\Yii::$container->set('yii\grid\GridView', [
    'tableOptions' => ['class' => 'table table-striped table-bordered table-hover dataTable'],
    'layout' => <<<EOD

<div class="dataTables_wrapper form-inline">
    {items}
    <div class="row">
        <div class="dataTables_info pull-left">
            {summary}
        </div>
        <div class="dataTables_paginate pull-right">
            {pager}
        </div>
    </div>
</div>
EOD
]);

\Yii::$container->set('yii\widgets\DetailView', [
    'template' => '<tr><th class="active col-sm-2">{label}</th><td>{value}</td></tr>',
    'options' => [
        'class' => 'table table-bordered detail-view'
    ],
]);

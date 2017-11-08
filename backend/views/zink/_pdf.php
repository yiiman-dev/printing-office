<?php
/*******************************************************************************
 * Copyright (c) 2017.
 * this file created in printing-office project
 * framework: Yii2
 * license: GPL V3 2017 - 2025
 * Author:amintado@gmail.com
 * Company:shahrmap.ir
 * Official GitHub Page: https://github.com/amintado/printing-office
 * All rights reserved.
 ******************************************************************************/

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\base\Zink */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Zinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zink-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Zink'.' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'visible' => false],
        'name',
        'mode',
        'status',
        'width',
        'height',
        'max_width',
        'max_height',
        'tag',
        'description:ntext',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>

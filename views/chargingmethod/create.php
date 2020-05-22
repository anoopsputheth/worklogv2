<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChargingMethod */

$this->title = 'Create Charging Method';
$this->params['breadcrumbs'][] = ['label' => 'Charging Methods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="charging-method-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

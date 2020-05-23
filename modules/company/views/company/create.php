<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\company\models\Company */

//$this->title = 'Create Company';
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-create">

   <!-- <h1><?php // echo Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

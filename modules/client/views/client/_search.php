<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\client\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'client_type_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'contact_person_1') ?>

    <?php // echo $form->field($model, 'contact_person_2') ?>

    <?php // echo $form->field($model, 'contact_person_3') ?>

    <?php // echo $form->field($model, 'contact_person_1_role') ?>

    <?php // echo $form->field($model, 'contact_person_2_role') ?>

    <?php // echo $form->field($model, 'contact_person_3_role') ?>

    <?php // echo $form->field($model, 'phone_1') ?>

    <?php // echo $form->field($model, 'phone_2') ?>

    <?php // echo $form->field($model, 'cell_no') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'email_1') ?>

    <?php // echo $form->field($model, 'email_2') ?>

    <?php // echo $form->field($model, 'email_3') ?>

    <?php // echo $form->field($model, 'client_referral') ?>

    <?php // echo $form->field($model, 'office_working_day_start') ?>

    <?php // echo $form->field($model, 'office_working_day_end') ?>

    <?php // echo $form->field($model, 'office_working_hour_start') ?>

    <?php // echo $form->field($model, 'office_working_hour_end') ?>

    <?php // echo $form->field($model, 'charging_method_id') ?>

    <?php // echo $form->field($model, 'charging_rate') ?>

    <?php // echo $form->field($model, 'business_category_id') ?>

    <?php // echo $form->field($model, 'network_structure') ?>

    <?php // echo $form->field($model, 'daily_backup') ?>

    <?php // echo $form->field($model, 'weekly_backup') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

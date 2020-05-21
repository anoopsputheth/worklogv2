<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\client\models\Client */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="client-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'client_type_id',
            'company_id',
            'address',
            'zip',
            'city',
            'state',
            'contact_person_1',
            'contact_person_2',
            'contact_person_3',
            'contact_person_1_role',
            'contact_person_2_role',
            'contact_person_3_role',
            'phone_1',
            'phone_2',
            'cell_no',
            'fax',
            'email_1:email',
            'email_2:email',
            'email_3:email',
            'client_referral',
            'office_working_day_start',
            'office_working_day_end',
            'office_working_hour_start',
            'office_working_hour_end',
            'charging_method_id',
            'charging_rate',
            'business_category_id',
            'network_structure',
            'daily_backup',
            'weekly_backup',
            'description:ntext',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>

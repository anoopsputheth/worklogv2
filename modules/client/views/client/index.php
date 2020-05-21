<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\client\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Client', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'client_type_id',
            'company_id',
            'address',
            //'zip',
            //'city',
            //'state',
            //'contact_person_1',
            //'contact_person_2',
            //'contact_person_3',
            //'contact_person_1_role',
            //'contact_person_2_role',
            //'contact_person_3_role',
            //'phone_1',
            //'phone_2',
            //'cell_no',
            //'fax',
            //'email_1:email',
            //'email_2:email',
            //'email_3:email',
            //'client_referral',
            //'office_working_day_start',
            //'office_working_day_end',
            //'office_working_hour_start',
            //'office_working_hour_end',
            //'charging_method_id',
            //'charging_rate',
            //'business_category_id',
            //'network_structure',
            //'daily_backup',
            //'weekly_backup',
            //'description:ntext',
            //'created_at',
            //'updated_at',
            //'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

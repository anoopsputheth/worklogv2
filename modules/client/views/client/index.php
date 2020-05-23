<?php

use yii\helpers\Html;
use yii\helpers\Url;

use yii\grid\GridView;
use yii\widgets\Pjax; 

use yii\bootstrap\Modal;

use app\modules\client\models\Client;

?>


<?php

   yii\bootstrap\Modal::begin([

            'header'=>'<h4>Create Client</h4>',
            'id'=>'modal_create_client',
            'size'=>'modal-lg',
   ]);

?>


 <div  id="div_content_modal_create_client"> </div>



<?php

 yii\bootstrap\Modal::end();

?>


<?php


/* @var $this yii\web\View */
/* @var $searchModel app\modules\client\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-index">

    <div id="div_flash_success" class="alert alert-success" style="display: none;background-color: #5cb85c; color: #fff;"></div>

    <div id="div_flash_error" class="alert alert-warning" style="display: none;background-color: red; color: #fff;"></div>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Client', ['create'], ['value' => Url::to('index.php?r=client/client/create'), 'class' => 'btn btn-success', 'id' => 'a_create_client']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?php 
           Pjax::begin([

             'id' => 'div_pjax_clients_container', 
             'enablePushState' => false

           ]) 
    ?>


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


    <?php Pjax::end() ?>



</div>



<?php

    $this->registerJs(

        '$("document").ready(function(){ 


            $("#a_create_client").click(function(event){   

               event.preventDefault();

               $("#modal_create_client").modal("show")
               .find("#div_content_modal_create_client")
               .load($(this).attr("value"));

            });

             
        });


 
        '
    );


?>


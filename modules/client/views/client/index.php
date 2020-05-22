<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\widgets\ActiveForm;
use yii\widgets\Pjax; 

use yii\helpers\Url;
use yii\helpers\ArrayHelper;

use app\models\ClientType;
use app\models\ChargingMethod;
use app\models\BusinessCategory;
use app\modules\company\models\Company;
use app\modules\client\models\Client;


?>


<?php

   yii\bootstrap\Modal::begin([

            'header'=>'<h4>Create Client</h4>',
            'id'=>'modal_create_client',
            'size'=>'modal-lg',
   ]);

?>


<div class="client-form">


    <?php $form = ActiveForm::begin([ 

        'id' => 'form_create_client',
        'validationUrl' => Url::toRoute('/client/client/validate'),
        'enableAjaxValidation' => true, 
        'action' => Url::toRoute('/client/client/create')
    ]);  


    $model = new Client(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_type_id')

       ->dropDownList(

                    ArrayHelper::map(ClientType::find()->orderBy(['name'=>SORT_ASC])->all(), 'id', 'name'), ['prompt' => 'Select Type of Client']

                   )
    ?>


    <?= $form->field($model, 'company_id')

     ->dropDownList(

             ArrayHelper::map(Company::find()->orderBy(['name'=>SORT_ASC])->all(), 'id', 'name') , ['prompt' => 'Select Company']

            )
    ?>


    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person_1_role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person_2_role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person_3_role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cell_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_referral')->textInput(['maxlength' => true]) ?>

   

    <?= $form->field($model, 'office_working_day_start')->dropDownList([ 'sunday' => 'Sunday', 'monday' => 'Monday', 'tuesday' => 'Tuesday', 'wednesday' => 'Wednesday', 'thursday' => 'Thursday', 'friday' => 'Friday', 'saturday' => 'Saturday'], ['prompt' => 'Select']) ?>

    

    <?= $form->field($model, 'office_working_day_end')->dropDownList([ 'sunday' => 'Sunday', 'monday' => 'Monday', 'tuesday' => 'Tuesday', 'wednesday' => 'Wednesday', 'thursday' => 'Thursday', 'friday' => 'Friday', 'saturday' => 'Saturday'], ['prompt' => 'Select']) ?>


    <?= $form->field($model, 'office_working_hour_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_working_hour_end')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'charging_method_id')

     ->dropDownList(

             ArrayHelper::map(ChargingMethod::find()->orderBy(['name'=>SORT_ASC])->all(), 'id', 'name') , ['prompt' => 'Select Charging Method']

            )
    ?>

    <?= $form->field($model, 'charging_rate')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'business_category_id')

     ->dropDownList(

             ArrayHelper::map(BusinessCategory::find()->orderBy(['name'=>SORT_ASC])->all(), 'id', 'name') , ['prompt' => 'Select Business Category']

            )
    ?>

    <?= $form->field($model, 'network_structure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'daily_backup')->dropDownList([ 'no' => 'No', 'yes' => 'Yes', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'weekly_backup')->dropDownList([ 'no' => 'No', 'yes' => 'Yes', ], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>



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
        <?= Html::a('Create Client', ['create'], ['class' => 'btn btn-success', 'id' => 'create_client']) ?>
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


            $("#create_client").click(function(event){   

               event.preventDefault();

               $("#modal_create_client").modal("show");

            });


             
        });


        $("form#form_create_client").on("beforeSubmit", function (e) { 

            var form = $(this);
             // submit form


          $.post(

              form.attr("action"),
              form.serialize(),

          )


          .done(function(response){  

               let alertMsg = "";

               $("#modal_create_client").modal("hide"); 

               if(response === "1")
               {
                 

                 var url = $("#div_pjax_clients_container li.active a").attr("href");

                 $.pjax.reload({container: "#div_pjax_clients_container", url: url, enablePushState: false});

                 alertMsg = "Client Created Successfully!";

                 $("#div_flash_success").html(alertMsg).fadeIn(3000).animate({opacity: 1.0}, 3000).fadeOut(3000); 
               }

               else
               {
                 alertMsg = "Some error occured while creating client";
                 $("#div_flash_error").html(alertMsg).fadeIn().animate({opacity: 1.0}, 3000).fadeOut("slow"); 
               }

           });

           return false;


         });

        '
    );


?>


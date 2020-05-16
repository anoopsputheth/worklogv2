<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

use yii\helpers\Url;

use app\modules\company\models\Company;

?>




<?php

   yii\bootstrap\Modal::begin([

            'header'=>'<h4>Create Company</h4>',
            'id'=>'modal_create_company',
            'size'=>'modal-lg',
   ]);

?>




<div class="company-form">

    <?php $form = ActiveForm::begin([ 

        'id' => 'form_create_company',
        'validationUrl' => Url::toRoute('/company/company/validate'),
        'enableAjaxValidation' => true, 
        'action' => Url::toRoute('/company/company/create')
    ]);  


        $model = new Company(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'contact_person')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

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
/* @var $searchModel app\modules\company\models\CompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-index">


    <div id="div_flash_success" class="alert alert-success" style="display: none;background-color: #5cb85c; color: #fff;"></div>

    <div id="div_flash_error" class="alert alert-warning" style="display: none;background-color: red; color: #fff;"></div>
    

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Company', ['create'], ['class' => 'btn btn-success', 'id' => 'create_company']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'contact_person',
            'address',
            'phone',
            //'fax',
            //'email:email',
            //'zip',
            //'city',
            //'state',
            //'description:ntext',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>



<?php

    $this->registerJs(

        '$("document").ready(function(){ 


            $("#create_company").click(function(event){   

               event.preventDefault();

               $("#modal_create_company").modal("show");

            });


             
        });


        $("form#form_create_company").on("beforeSubmit", function (e) { 

            var form = $(this);
             // submit form


          $.post(

              form.attr("action"),
              form.serialize(),

          )


          .done(function(response){  

               let alertMsg = "";

               $("#modal_create_company").modal("hide"); 

               if(response === "1")
               {
                 alertMsg = "Company Created Successfully!";
                 $("#div_flash_success").html(alertMsg).fadeIn(3000).animate({opacity: 1.0}, 3000).fadeOut(3000); 
               }

               else
               {
                 alertMsg = "Some error occured while creating company";
                 $("#div_flash_error").html(alertMsg).fadeIn().animate({opacity: 1.0}, 3000).fadeOut("slow"); 
               }

           });

           return false;


         });

        '
    );


?>

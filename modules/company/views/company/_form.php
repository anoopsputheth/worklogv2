<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\company\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin([ 

        'id' => 'form_create_company',
        'validationUrl' => Url::toRoute('/company/company/validate'),
        'enableAjaxValidation' => true, 
        'action' => Url::toRoute('/company/company/create')
    ]);  

    ?>

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


    $this->registerJs(

        '$("document").ready(function(){ 


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
                              
                                 var url = $("#div_pjax_companies_container li.active a").attr("href");

                                 $.pjax.reload({container: "#div_pjax_companies_container", url: url, enablePushState: false});

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


             
        }); '

    );


?>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;

use app\modules\company\models\Company;
use app\models\ClientType;
use app\models\ChargingMethod;
use app\models\BusinessCategory;


/* @var $this yii\web\View */
/* @var $model app\modules\client\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

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

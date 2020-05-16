<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

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

    <?php $form = ActiveForm::begin([ 'enableAjaxValidation' => true, 'action' => ['create'] ]);  

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


             
        });'
    );


?>

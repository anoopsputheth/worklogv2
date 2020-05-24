<?php

use yii\helpers\Html;
use yii\helpers\Url;

use yii\grid\GridView;
use yii\widgets\Pjax; 

use yii\bootstrap\Modal;

use app\modules\company\models\Company;

?>




<?php

   Modal::begin([

            'header'=>'<h4>Create Company</h4>',
            'id'=>'modal_create_company',
            'size'=>'modal-lg',
   ]);

?>

    <div  id="div_content_modal_create_company"></div>

<?php

   Modal::end();

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
        <?= Html::a('Create Company', ['create'], ['value' => Url::to('index.php?r=company/company/create'), 'class' => 'btn btn-success', 'id' => 'a_create_company']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?php 

           Pjax::begin([

             'id' => 'div_pjax_companies_container', 
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


     <?php 

          Pjax::end() 

     ?>


</div>



<?php

    $this->registerJs(

        '$("document").ready(function(){ 


            $("#a_create_company").click(function(event){   

               event.preventDefault();

               $("#modal_create_company").modal("show")
               .find("#div_content_modal_create_company")
               .load($(this).attr("value"));

            });

             
        });'
    );


?>

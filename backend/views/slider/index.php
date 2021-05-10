<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo LangsWidgets::widget(); ?>
<div class="slider-index panel">
    <div class="panel-body">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= Html::a('Create Slider', ['create'], ['class' => 'btn btn-success']) ?>

                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' =>'title',
                'value' =>    function($data) {
                    return Html::a($data->title, ['slider/update', 'id' => $data->id]);
                },
                'format'    => 'html'
            ],
            [
                'label' => __('Image'),
                'format' => 'raw',
                'value' => function($data){
                    $image = $data->allFiles('image');
                    if (!empty($image)) {
                        return Html::img($image[0]->src('small'),[
                            'style' => 'width:50px;'
                        ]);
                    }
                },
            ],
           // 'link',
       //     'status',
            //'order',
            //'lang',
            //'lang_hash',
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',

                'headerOptions' => ['style' => 'width:10%;'],
                'contentOptions' => ['style' => 'width:10%;'],
            ],
            ],
            ]); ?>
                    </div>

</div>
<?php

use kartik\form\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\Html;

$this->title = 'Upload widget demonstration';

/**
 * @var yii\web\View $this
 * @var ActiveForm $form
 * @var \app\models\File $model
 */
?>
<div class="site-index">
    <?= \kartik\widgets\AlertBlock::widget([

    ]);?>
    <div class="body-content">

        <div class="row">
            <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data'] // important options, without that you can't upload files
            ]) ?>
            <div class="col-lg-12">
                <?= $form->field($model, 'description') ?>
                <?= $form->field($model, 'image')->widget(FileInput::classname(), [
                    'options' => ['accept' => 'image/*'],
                    'pluginOptions' => ['allowedFileExtensions' => ['jpg', 'gif', 'png']
                    ]
                ]); ?>
                <?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Update', [
                        'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
                ); ?>
            </div>
            <?php $form::end() ?>
        </div>
    </div>
</div>

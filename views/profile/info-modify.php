<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Info Modify';
$this->params['breadcrumbs'][] = ['label' => 'Personal Info', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'realName')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'email') ?>

<div class="form-group">
    <?= Html::submitButton('Modify', ['class' => 'btn btn-success']) ?>
    <?= Html::a('Cancel', \Yii::$app->request->referrer, ['class' => 'btn btn-warning cancel']) ?>
</div>
<?php ActiveForm::end(); ?>
<?php 
    $this->registerJs("
        $(document).on('click', '.cancel', function(){
            window.history.back();
        });
    ");
?>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Url;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-group'],
]) ?>
    <div class="col-lg-6">
    <?= $form->field($model, 'title')->Label('Введите название статьи') ?>
    <?= $form->field($model, 'description')->Label('Введите описание статьи') ?>
    <?= $form->field($model, 'keys')->Label('Введите ключи статьи') ?>
    <?= $form->field($model, 'content')->Label('Введите текст статьи')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]) ?>
    </div>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-8">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
            <a href="<?php  echo Url::to(['blog/index']); ?>" class="btn btn-primary" role="button">Назад</a>
        </div>
    </div>
<?php ActiveForm::end() ?>
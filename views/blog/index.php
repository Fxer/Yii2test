<?php   use yii\helpers\Url;
        use yii\widgets\Pjax;
        use yii\widgets\LinkPager;
?>
<?php
if(!(Yii::$app->user->isGuest)):?>
    <a href="<?php echo Url::to(['blog/add']); ?>" class="btn btn-primary" role="button">Добавить Статью</a>
<?php endif ?>

<?php Pjax::begin(); ?>
    <?php foreach ($models as $item) : ?>
    <h1><a href="<?php echo Url::to(['blog/view', 'id' => $item['id']]);?>"><?php echo $item['title']?></a></h1>
    <p><?php echo $item['description']?></p>
        <hr>
    <?php endforeach  ?>

<?php echo LinkPager::widget([
'pagination' => $pages,
]);

Pjax::end(); ?>



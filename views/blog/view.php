<?php   use yii\helpers\Url; ?>


    <h1><?php echo $item['title']?></h1>
    <p><?php echo $item['description']?></p>
    <p><?php echo $item['keys']?></p>
    <p><?php echo $item['content']?></p>

    <a href="<?php  echo Url::to(['blog/index']); ?>" class="btn btn-primary" role="button">Назад</a>


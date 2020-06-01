<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class BlogPost extends ActiveRecord{

    public static function tableName()
    {
        return 'blog_posts';
    }



}
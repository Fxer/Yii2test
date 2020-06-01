<?php

namespace app\models;


use yii\db\ActiveRecord;

class addForm extends ActiveRecord
{


    public static function tableName()
    {
        return 'blog_posts';
    }

    public function rules()
    {
        return [
            [['title', 'description', 'keys', 'content'], 'required'],
        ];
    }


}
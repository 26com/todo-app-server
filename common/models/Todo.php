<?php

namespace common\models;

use Yii;

class Todo extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'todo';
    }

    public function rules()
    {
        return [
            [['title'], 'string'],
            [['completed'], 'boolean'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'completed' => 'Completed',
        ];
    }
}

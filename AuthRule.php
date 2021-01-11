<?php

namespace denis909\yii;

class AuthRule extends \denis909\yii\ActiveRecord
{

    public static function tableName()
    {
        return '{{%auth_rule}}';
    }

}
<?php

namespace denis909\yii;

class AuthItem extends \denis909\yii\ActiveRecord
{

    const TYPE_ROLE = 'role';

    public static function tableName()
    {
        return '{{%auth_item}}';
    }

    public static function find()
    {
        return new AuthItemQuery(get_called_class());
    }

}
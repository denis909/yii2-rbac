<?php

namespace denis909\yii;

class UserRbacBehavior extends \yii\base\Behavior
{

    public function getRoles()
    {
        return $this->hasMany(AuthItem::class, ['name' => 'item_name'])->viaTable('{{%auth_assignment}}', ['user_id' => 'id']);
    }

    public function getRolesList()
    {
        $query = new AuthItem::find();

        $query->typeRole();

        $query->orderBy('name');

        return ArrayHelper::map($query->all(), 'name', 'name');
    }

}
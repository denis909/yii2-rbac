<?php

namespace denis909\yii;

use yii\helpers\ArrayHelper;

class UserRbacBehavior extends \yii\base\Behavior
{

    public function getRoles()
    {
        return $this->owner->hasMany(AuthItem::class, ['name' => 'item_name'])->viaTable(AuthAssignment::tableName(), ['user_id' => 'id']);
    }

    public function getRolesList()
    {
        $query = AuthItem::find();

        $query->typeRole();

        $query->orderBy('name');

        return ArrayHelper::map($query->all(), 'name', 'name');
    }

    public function getRolesAsString()
    {
        return implode(', ', array_values($this->rolesList));
    }

}
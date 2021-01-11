<?php

namespace denis909\yii;

class AuthItemQuery extends \denis909\yii\ActiveQuery
{

    public function typeRole()
    {
        return $this->andWhere(['type' => \yii\rbac\Item::TYPE_ROLE]);
    }

    public function typePermission()
    {
        return $this->andWhere(['type' => \yii\rbac\Item::TYPE_PERMISSION]);
    }

}
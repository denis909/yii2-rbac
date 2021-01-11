<?php

namespace denis909\yii;

class AuthItemQuery extends \denis909\yii\ActiveQuery
{

    public function typeRole()
    {
        return $this->andWhere(['type' => AuthItem::TYPE_ROLE]);
    }

}
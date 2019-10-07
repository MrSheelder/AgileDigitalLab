<?php
$cat = StoreCategory::getMenuItemsIt();
$cat_str = implode(", ", $cat);

$massive = StoreProduct::find()
    ->where(['status' => StoreProduct::STATUS_ACTIVE])
    ->andWhere(['in', 'category_id', $cat])
    ->all();

//Получение промо-акций для шин
$promos = StoreProductPromo::find()->select('name')->indexBy('promo')->asArray()->column();

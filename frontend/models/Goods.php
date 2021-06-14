<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property string|null $description
 * @property string|null $photo_url
 * @property int|null $category_id
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price'], 'number'],
            [['category_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 7000],
            [['photo_url'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'description' => 'Description',
            'photo_url' => 'Photo Url',
            'category_id' => 'Category ID',
        ];
    }
}

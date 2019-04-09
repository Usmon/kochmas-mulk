<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sell".
 *
 * @property int $id
 * @property string $title
 * @property string $area
 * @property string $material
 * @property string $cost
 * @property string $address
 * @property string $quality
 * @property int $rooms
 */
class Sell extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sell';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'area', 'material', 'cost', 'address', 'quality', 'rooms'], 'required'],
            [['rooms'], 'integer'],
            [['title', 'area', 'material', 'cost', 'address', 'quality'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'area' => 'Area',
            'material' => 'Material',
            'cost' => 'Cost',
            'address' => 'Address',
            'quality' => 'Quality',
            'rooms' => 'Rooms',
        ];
    }
}

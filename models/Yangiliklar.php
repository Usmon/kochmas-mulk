<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yangiliklar".
 *
 * @property int $id
 * @property string $mavzu
 * @property string $text
 * @property string $vaqti
 * @property string $rasm
 */
class Yangiliklar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yangiliklar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['mavzu', 'text', 'vaqti', 'rasm'], 'required'],
            [['text'], 'string'],
            [['vaqti'], 'safe'],
            [['mavzu'], 'string', 'max' => 128],
            [['rasm'], 'string', 'max' => 111],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mavzu' => 'Mavzu',
            'text' => 'Text',
            'vaqti' => 'Vaqti',
            'rasm' => 'Rasm',
        ];
    }
}

<?php

namespace app\models;

use Yii;
use yii\imagine\Image;

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

    public $file_name;
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
            [['title', 'area', 'material', 'cost', 'address', 'quality'], 'string', 'max' => 255],
            [['rooms'], 'integer'],
            [['image'],'string', 'max' => 100 ],
            [['file_name'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['content'],'string','max' => 300]
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
            'image' => 'Image',
            'content' => 'Content'
        ];
    }


    public function upload()
    {
        if ($this->validate() && $this->file_name != NULL){
            $fileName = Yii::$app->getSecurity()->generateRandomString() . '.' . $this->file_name->extension;
            $name = Yii::$app->params['upload_path'].'/'.$fileName;
            $this->file_name->saveAs($name);
            $this->file_name = NULL;
            
            //Generate thumbnail
             Image::thumbnail('@webroot/'.$name, 300, 300)
            ->save(Yii::getAlias('@webroot/uploads/thumb/'.$fileName), ['quality'=>20]);
            
            return $name;
        }
        
        return false;
    }

}

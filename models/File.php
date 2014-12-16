<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "{{%file}}".
 *
 * @property integer $id
 * @property string $image
 * @property string $description
 * @property string $createdAt
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%file}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            ['image', 'file',
                'extensions' => ['png', 'jpg', 'gif', 'jpeg', 'png'],
                'maxSize' => 1024 * 1024 * 2, // Max 2 Megabytes
                'mimeTypes' => ['image/gif', 'image/jpeg', 'image/png'], // very important for security reasons, look list
                'maxFiles' => 1
            ],
            [['description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'image'),
            'description' => Yii::t('app', 'Description'),
            'createdAt' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => false,
                'value' => new Expression('NOW()'),
            ],
        ];
    }
}

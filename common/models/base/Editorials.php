<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "editorials".
 *
 * @property int $id
 * @property string $editorial_name
 *
 * @property Books[] $books
 */
class Editorials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'editorials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['editorial_name'], 'required'],
            [['editorial_name'], 'string', 'max' => 255],
            [['editorial_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'editorial_name' => Yii::t('app', 'Editorial Name'),
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['editorial_id' => 'id']);
    }
}

<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string $epilogue
 * @property int $editorial_id
 * @property int $author_id
 * @property int $category_id
 *
 * @property Authors $author
 * @property Categories $category
 * @property Editorials $editorial
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'epilogue', 'editorial_id', 'author_id', 'category_id'], 'required'],
            [['editorial_id', 'author_id', 'category_id'], 'integer'],
            [['title', 'epilogue'], 'string', 'max' => 255],
            [['title'], 'unique'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::class, 'targetAttribute' => ['author_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::class, 'targetAttribute' => ['category_id' => 'id']],
            [['editorial_id'], 'exist', 'skipOnError' => true, 'targetClass' => Editorials::class, 'targetAttribute' => ['editorial_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'epilogue' => Yii::t('app', 'Epilogue'),
            'editorial_id' => Yii::t('app', 'Editorial ID'),
            'author_id' => Yii::t('app', 'Author ID'),
            'category_id' => Yii::t('app', 'Category ID'),
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Authors::class, ['id' => 'author_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Editorial]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEditorial()
    {
        return $this->hasOne(Editorials::class, ['id' => 'editorial_id']);
    }
}

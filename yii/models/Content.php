<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property string $content
 * @property string $slug
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $category
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'slug', 'title', 'description', 'keywords', 'category'], 'required'],
            [['content'], 'string'],
            [['slug', 'category'], 'string', 'max' => 100],
            [['title', 'description', 'keywords'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'slug' => 'Slug',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'category' => 'Category',
        ];
    }
}

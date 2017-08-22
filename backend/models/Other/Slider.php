<?php namespace app\models\Other;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/21/17
 * Time: 11:20 PM
 */
use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $picture_path
 * @property int $has_link
 * @property string $link_path
 * @property int $priority
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['has_link', 'priority'], 'integer'],
            [['title'], 'string', 'max' => 40],
            [['content'], 'string', 'max' => 300],
            [['picture_path'], 'string', 'max' => 100],
            [['link_path'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'picture_path' => 'Picture Path',
            'has_link' => 'Has Link',
            'link_path' => 'Link Path',
            'priority' => 'Priority',
        ];
    }
}

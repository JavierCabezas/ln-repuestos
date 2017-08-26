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
    public $imageFile;

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
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png'],
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
            'title' => 'Texto principal',
            'content' => 'Texto secundario',
            'picture_path' => 'Path imagen',
            'has_link' => '¿Tiene link?',
            'link_path' => 'Link',
            'priority' => 'Prioridad',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('web/img/slider' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}

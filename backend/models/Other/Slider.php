<?php namespace app\models\Other;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/21/17
 * Time: 11:20 PM
 */
use app\models\helpers\StringHelper;
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
            [['imageFile'], 'safe']
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
            'imageFile' => 'Imagen'
        ];
    }


    public function upload()
    {
        if ($this->validate()) {
            $name = StringHelper::seo_url($this->title) .'.' . $this->imageFile->extension;
            $this->imageFile->saveAs('img/slider/' . $name );
            $this->picture_path = $name;
            return true;
        }
        return false;
    }

    /**
     * Returns the URL location of the image on the server
     * @return string
     */
    public function getImage(){
        return StringHelper::base_url().'img/slider/'.$this->picture_path;
    }

    public function getImagePath(){
        return Yii::getAlias('@webroot')."/img/slider/".$this->picture_path;
    }

    /**
     * Returns a boolean value indicating if this instance of Slider has a link (stupid mysql witout a real boolean value)
     * @return bool
     */
    public function getLinkBool(){
        return $this->has_link == true;
    }
}

<?php namespace app\models\Product;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/30/17
 * Time: 8:52 PM
 */
use Yii;
use app\models\helpers\StringHelper;

/**
 * This is the model class for table "product_picture".
 *
 * @property int $id
 * @property int $product_id
 * @property string $picture_path
 * @property string $created_on
 *
 * @property Product $product
 */
class ProductPicture extends \yii\db\ActiveRecord
{
    public $imageFile;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_picture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            [['imageFile'], 'safe'],
            [['product_id'], 'integer'],
            [['created_on'], 'safe'],
            [['picture_path'], 'string', 'max' => 128],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Producto',
            'picture_path' => 'Ubicación',
            'created_on' => 'Created On',
            'imageFile' => 'Imagen'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * Returns the URL location of the image on the server
     * @return string
     */
    public function getImage(){
        return StringHelper::base_url().'img/products/'.$this->picture_path;
    }

    public function upload()
    {
        if ($this->validate()) {
            $name = $this->product->seo_name .'_'. hash('md5', time()).'.'. $this->imageFile->extension;
            $this->imageFile->saveAs('img/products/' . $name );
            $this->picture_path = $name;
            return true;
        }
        return false;
    }
}
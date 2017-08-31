<?php namespace app\models\product;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/26/17
 * Time: 3:37 PM
 */
use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $category_id
 * @property string $name
 * @property string $seo_name
 * @property string $description
 * @property int $price
 * @property int $is_featured
 * @property int $is_ready
 * @property string $created_on
 *
 * @property ProductPicture[] $productPictures
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['price', 'is_featured', 'is_ready'], 'integer'],
            [['created_on'], 'safe'],
            [['category_id'], 'string', 'max' => 30],
            [['name', 'seo_name'], 'string', 'max' => 60],
            [['description'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Categoría',
            'name' => 'Nombre',
            'seo_name' => 'Nombre URL',
            'description' => 'Descripción',
            'price' => 'Precio',
            'is_featured' => '¿Se muestra en portada?',
            'is_ready' => 'Is Ready',
            'created_on' => 'Created On',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductPictures()
    {
        return $this->hasMany(ProductPicture::className(), ['product_id' => 'id']);
    }
}

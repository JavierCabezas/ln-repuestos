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
 * @property int $category_id
 * @property string $name
 * @property string $seo_name
 * @property string $description
 * @property int $price
 * @property int $is_featured
 * @property string $created_on
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
            [['category_id', 'price', 'is_featured'], 'integer'],
            [['name', 'description'], 'required'],
            [['created_on'], 'safe'],
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
            'category_id' => 'Category ID',
            'name' => 'Name',
            'seo_name' => 'Seo Name',
            'description' => 'Description',
            'price' => 'Price',
            'is_featured' => 'Is Featured',
            'created_on' => 'Created On',
        ];
    }
}

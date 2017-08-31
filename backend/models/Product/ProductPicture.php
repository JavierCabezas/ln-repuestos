<?php namespace app\models\product;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/30/17
 * Time: 8:52 PM
 */
use Yii;

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
            'product_id' => 'Product ID',
            'picture_path' => 'Picture Path',
            'created_on' => 'Created On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
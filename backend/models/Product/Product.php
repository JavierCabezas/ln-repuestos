<?php namespace app\models\product;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/26/17
 * Time: 3:37 PM
 */
use app\models\helpers\CategoriesHelper;
use app\models\helpers\StringHelper;
use yii2tech\ar\softdelete\SoftDeleteBehavior;
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
 * @property int $upon_request
 * @property string $deleted_at
 * @property int $tutorial_type
 * @property string $tutorial_text
 *
 * @property ProductPicture[] $productPictures
 */
class Product extends \yii\db\ActiveRecord
{
    const TUTORIAL_WITHOUT = 0;
    const TUTORIAL_YOUTUBE = 1;
    const TUTORIAL_TEXT = 2;

    public function behaviors()
    {
        return [
            'softDeleteBehavior' => [
                'class' => SoftDeleteBehavior::className(),
                'softDeleteAttributeValues' => [
                    'deleted_at' => date('Y-m-d h:i:s')
                ],
                'replaceRegularDelete' => true // mutate native `delete()` method
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    public static function find()
    {
        return parent::find()->andWhere(['deleted_at' => null]);
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['price', 'is_featured', 'is_ready', 'upon_request', 'tutorial_type'], 'integer'],
            [['created_on', 'deleted_at'], 'safe'],
            [['tutorial_text'], 'string'],
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
            'is_ready' => '¿Está listo para publicación?',
            'created_on' => 'Fecha de creación',
            'upon_request' => '¿A Pedido?',
            'deleted_at' => 'Deleted At',
            'tutorial_type' => 'Tipo de tutorial',
            'tutorial_text' => 'Tutorial'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductPictures()
    {
        return $this->hasMany(ProductPicture::className(), ['product_id' => 'id']);
    }

    /**
     * @inheritdoc
     */
    public function beforeSave($insert)
    {
        $youtube_id = StringHelper::getYoutubeIdFromUrl($this->tutorial_text);
        if($youtube_id){
            $this->tutorial_text = $youtube_id;
        }

        if (parent::beforeSave($insert)) {
           $this->seo_name = StringHelper::seo_url($this->name);
            return true;
        } else {
            return false;
        }
    }

    /**
     * Gets the current category for this product as a legible string.
     * @return string
     */
    public function getCategory(){
        return CategoriesHelper::full_name($this->category_id);
    }

    public function getTutorialTypetext(){
        switch($this->tutorial_type){
            case self::TUTORIAL_WITHOUT: return 'Sin tutorial';
            case self::TUTORIAL_TEXT: return 'Texto';
            case self::TUTORIAL_YOUTUBE: return 'Youtube';
        }
    }

    /**
     * Returns a legible cause of why the status of the product is not-ready
     * @return string
     */
    public function getReasonNotReady(){
        if($this->is_ready)
            return '';

        if(ProductPicture::find()->where(['product_id'=>$this->id])->count() == 0){
            return 'No se han subido fotos del producto';
        }
    }

    /**
     * Returns an string representing the base64 encoded image of the first image of this product.
     * @return string
     */
    public function getImage(){
        if(count($this->productPictures) > 0){
            return $this->productPictures[0]->image;
        }else{
            return null;
        }
    }

    /**
     * Returns an array with all the products
     *
     * @todo: Implement filter
     * @todo: comment this function when I decide what details to implement
     *
     * @param $filter
     * @param null $start_from
     * @param null $to
     * @return array
     */
    public static function list($filter, $start_from = null, $up_to = null){
        $products = Product::find()->all();
        $out = [];
        foreach($products as $p){
            array_push($out, $p->backend);
        }

        $start_from = $start_from === null ? 0 : intval($start_from) - 1;
        $up_to = $up_to === null ? 0 : $up_to - $start_from;
        array_splice($out, $start_from, $up_to);

        return $out;
    }

    /**
     * Returns the details of an specific product
     * @return array
     */
    public function getBackend(){
        $cp = CategoriesHelper::all_categories_with_parents_flat();
        return [
            'id'                => $this->id,
            'name'              => $this->name,
            'url'               => $this->seo_name,
            'description'       => $this->description,
            'has_tutorial'      => $this->tutorial_text !== null,
            'is_tutorial_video' => $this->tutorial_type == 1,
            'tutorial'          => $this->tutorial_text,
            'price'             => $this->price,
            'upon_request'      => $this->upon_request,
            'picture'           => $this->image,
            'seo_name'          => $this->seo_name,
            'category'          => $cp[$this->category_id]['category'] ?? null,
            'subcategory'       => $cp[$this->category_id]['subcategory'] ?? null,
            'subsubcategory'    => $cp[$this->category_id]['subsubcategory'] ?? null
        ];
    }

    /**
     * Returns an array with all the secondary pictures (skipping the first one) encoded in base64.
     * @return array
     */
    public function getPictures(){
        $out = [];
        if(count($this->productPictures) > 1) {
            foreach ($this->productPictures as $pp) {
                array_push($out, $pp->image);
            }
            array_shift($out);
        }
        return $out;
    }
}
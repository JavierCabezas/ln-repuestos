<?php namespace app\models\Product;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 9/2/17
 * Time: 5:09 PM
 */
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product\ProductPicture;

/**
 * ProductPictureSearch represents the model behind the search form of `app\models\Product\ProductPicture`.
 */
class ProductPictureSearch extends ProductPicture
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id'], 'integer'],
            [['picture_path', 'created_on'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProductPicture::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
            'created_on' => $this->created_on,
        ]);

        $query->andFilterWhere(['like', 'picture_path', $this->picture_path]);

        return $dataProvider;
    }
}
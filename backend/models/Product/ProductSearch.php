<?php namespace app\models\product;
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 8/26/17
 * Time: 3:40 PM
 */
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\product\Product;

/**
 * ProductSearch represents the model behind the search form of `app\models\product\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price', 'is_featured'], 'integer'],
            [['name', 'category_id', 'seo_name', 'description', 'created_on'], 'safe'],
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
        $query = Product::find();

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
            'category_id' => $this->category_id,
            'price' => $this->price,
            'is_featured' => $this->is_featured,
            'created_on' => $this->created_on,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'seo_name', $this->seo_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
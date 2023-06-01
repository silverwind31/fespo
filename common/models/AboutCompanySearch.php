<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AboutCompany;

/**
 * AboutCompanySearch represents the model behind the search form of `common\models\AboutCompany`.
 */
class AboutCompanySearch extends AboutCompany
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'block_left_content', 'block_right_content', 'main_image', 'block_middle_content', 'info_image', 'block_bottom_description'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = AboutCompany::find();

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
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'block_left_content', $this->block_left_content])
            ->andFilterWhere(['like', 'block_right_content', $this->block_right_content])
            ->andFilterWhere(['like', 'main_image', $this->main_image])
            ->andFilterWhere(['like', 'block_middle_content', $this->block_middle_content])
            ->andFilterWhere(['like', 'info_image', $this->info_image])
            ->andFilterWhere(['like', 'block_bottom_description', $this->block_bottom_description]);

        return $dataProvider;
    }
}

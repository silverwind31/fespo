<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MainPage;

/**
 * MainPageSearch represents the model behind the search form of `common\models\MainPage`.
 */
class MainPageSearch extends MainPage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['top_text', 'top_description', 'block_title', 'block_subtitle', 'block_first_image', 'block_feature_1_title', 'block_feature_1_subtitle', 'block_feature_2_title', 'block_feature_2_subtitle', 'block_feature_3_title', 'block_feature_3_subtitle', 'block_content_caption', 'block_content', 'block_second_image', 'about_company_title', 'about_company_content', 'about_company_image'], 'safe'],
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
        $query = MainPage::find();

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

        $query->andFilterWhere(['like', 'top_text', $this->top_text])
            ->andFilterWhere(['like', 'top_description', $this->top_description])
            ->andFilterWhere(['like', 'block_title', $this->block_title])
            ->andFilterWhere(['like', 'block_subtitle', $this->block_subtitle])
            ->andFilterWhere(['like', 'block_first_image', $this->block_first_image])
            ->andFilterWhere(['like', 'block_feature_1_title', $this->block_feature_1_title])
            ->andFilterWhere(['like', 'block_feature_1_subtitle', $this->block_feature_1_subtitle])
            ->andFilterWhere(['like', 'block_feature_2_title', $this->block_feature_2_title])
            ->andFilterWhere(['like', 'block_feature_2_subtitle', $this->block_feature_2_subtitle])
            ->andFilterWhere(['like', 'block_feature_3_title', $this->block_feature_3_title])
            ->andFilterWhere(['like', 'block_feature_3_subtitle', $this->block_feature_3_subtitle])
            ->andFilterWhere(['like', 'block_content_caption', $this->block_content_caption])
            ->andFilterWhere(['like', 'block_content', $this->block_content])
            ->andFilterWhere(['like', 'block_second_image', $this->block_second_image])
            ->andFilterWhere(['like', 'about_company_title', $this->about_company_title])
            ->andFilterWhere(['like', 'about_company_content', $this->about_company_content])
            ->andFilterWhere(['like', 'about_company_image', $this->about_company_image]);

        return $dataProvider;
    }
}

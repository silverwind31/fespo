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
            [['main_top_text', 'main_top_description', 'main_block_title', 'main_block_subtitle', 'main_block_image', 'main_block_feature_1_title', 'main_block_feature_1_subtitle', 'main_block_feature_2_title', 'main_block_feature_2_subtitle', 'main_block_feature_3_title', 'main_block_feature_3_subtitle', 'second_block_content', 'second_block_image', 'about_company_title', 'about_company_content', 'about_company_image'], 'safe'],
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

        $query->andFilterWhere(['like', 'main_top_text', $this->main_top_text])
            ->andFilterWhere(['like', 'main_top_description', $this->main_top_description])
            ->andFilterWhere(['like', 'main_block_title', $this->main_block_title])
            ->andFilterWhere(['like', 'main_block_subtitle', $this->main_block_subtitle])
            ->andFilterWhere(['like', 'main_block_image', $this->main_block_image])
            ->andFilterWhere(['like', 'main_block_feature_1_title', $this->main_block_feature_1_title])
            ->andFilterWhere(['like', 'main_block_feature_1_subtitle', $this->main_block_feature_1_subtitle])
            ->andFilterWhere(['like', 'main_block_feature_2_title', $this->main_block_feature_2_title])
            ->andFilterWhere(['like', 'main_block_feature_2_subtitle', $this->main_block_feature_2_subtitle])
            ->andFilterWhere(['like', 'main_block_feature_3_title', $this->main_block_feature_3_title])
            ->andFilterWhere(['like', 'main_block_feature_3_subtitle', $this->main_block_feature_3_subtitle])
            ->andFilterWhere(['like', 'second_block_content', $this->second_block_content])
            ->andFilterWhere(['like', 'second_block_image', $this->second_block_image])
            ->andFilterWhere(['like', 'about_company_title', $this->about_company_title])
            ->andFilterWhere(['like', 'about_company_content', $this->about_company_content])
            ->andFilterWhere(['like', 'about_company_image', $this->about_company_image]);

        return $dataProvider;
    }
}

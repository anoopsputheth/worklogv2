<?php

namespace app\modules\client\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\client\models\Client;

/**
 * ClientSearch represents the model behind the search form of `app\modules\client\models\Client`.
 */
class ClientSearch extends Client
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'client_type_id', 'company_id', 'charging_method_id', 'business_category_id'], 'integer'],
            [['name', 'address', 'zip', 'city', 'state', 'contact_person_1', 'contact_person_2', 'contact_person_3', 'contact_person_1_role', 'contact_person_2_role', 'contact_person_3_role', 'phone_1', 'phone_2', 'cell_no', 'fax', 'email_1', 'email_2', 'email_3', 'client_referral', 'office_working_day_start', 'office_working_day_end', 'office_working_hour_start', 'office_working_hour_end', 'charging_rate', 'network_structure', 'daily_backup', 'weekly_backup', 'description', 'created_at', 'updated_at', 'deleted_at'], 'safe'],
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
        $query = Client::find();

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
            'client_type_id' => $this->client_type_id,
            'company_id' => $this->company_id,
            'charging_method_id' => $this->charging_method_id,
            'business_category_id' => $this->business_category_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'contact_person_1', $this->contact_person_1])
            ->andFilterWhere(['like', 'contact_person_2', $this->contact_person_2])
            ->andFilterWhere(['like', 'contact_person_3', $this->contact_person_3])
            ->andFilterWhere(['like', 'contact_person_1_role', $this->contact_person_1_role])
            ->andFilterWhere(['like', 'contact_person_2_role', $this->contact_person_2_role])
            ->andFilterWhere(['like', 'contact_person_3_role', $this->contact_person_3_role])
            ->andFilterWhere(['like', 'phone_1', $this->phone_1])
            ->andFilterWhere(['like', 'phone_2', $this->phone_2])
            ->andFilterWhere(['like', 'cell_no', $this->cell_no])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email_1', $this->email_1])
            ->andFilterWhere(['like', 'email_2', $this->email_2])
            ->andFilterWhere(['like', 'email_3', $this->email_3])
            ->andFilterWhere(['like', 'client_referral', $this->client_referral])
            ->andFilterWhere(['like', 'office_working_day_start', $this->office_working_day_start])
            ->andFilterWhere(['like', 'office_working_day_end', $this->office_working_day_end])
            ->andFilterWhere(['like', 'office_working_hour_start', $this->office_working_hour_start])
            ->andFilterWhere(['like', 'office_working_hour_end', $this->office_working_hour_end])
            ->andFilterWhere(['like', 'charging_rate', $this->charging_rate])
            ->andFilterWhere(['like', 'network_structure', $this->network_structure])
            ->andFilterWhere(['like', 'daily_backup', $this->daily_backup])
            ->andFilterWhere(['like', 'weekly_backup', $this->weekly_backup])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}

<?php

namespace app\modules\client\models;

use Yii;
use app\models\BusinessCategory;
use app\models\ClientType;
use app\modules\company\models\Company;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $name
 * @property int $client_type_id
 * @property int $company_id
 * @property string|null $address
 * @property string|null $zip
 * @property string|null $city
 * @property string|null $state
 * @property string|null $contact_person_1
 * @property string|null $contact_person_2
 * @property string|null $contact_person_3
 * @property string|null $contact_person_1_role
 * @property string|null $contact_person_2_role
 * @property string|null $contact_person_3_role
 * @property string|null $phone_1
 * @property string|null $phone_2
 * @property string|null $cell_no
 * @property string|null $fax
 * @property string $email_1
 * @property string|null $email_2
 * @property string|null $email_3
 * @property string|null $client_referral
 * @property string|null $office_working_day_start
 * @property string|null $office_working_day_end
 * @property string|null $office_working_hour_start
 * @property string|null $office_working_hour_end
 * @property int|null $charging_method_id
 * @property string|null $charging_rate
 * @property int $business_category_id
 * @property string|null $network_structure
 * @property string $daily_backup
 * @property string $weekly_backup
 * @property string|null $description
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 *
 * @property BusinessCategory $businessCategory
 * @property ClientType $clientType
 * @property Company $company
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'client_type_id', 'company_id', 'email_1', 'business_category_id'], 'required'],
            [['name'], 'unique'],
            [['name',], 'trim'],
            [['client_type_id', 'company_id', 'charging_method_id', 'business_category_id'], 'integer'],
            [['daily_backup', 'weekly_backup', 'description'], 'string'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['name', 'city', 'state', 'contact_person_1', 'contact_person_2', 'contact_person_3', 'contact_person_1_role', 'contact_person_2_role', 'contact_person_3_role', 'phone_1', 'phone_2', 'cell_no', 'fax', 'email_1', 'email_2', 'email_3', 'client_referral', 'charging_rate', 'network_structure'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 200],
            [['zip', 'office_working_day_start', 'office_working_day_end', 'office_working_hour_start', 'office_working_hour_end'], 'string', 'max' => 50],
            [['name'], 'unique'],
            [['business_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => BusinessCategory::className(), 'targetAttribute' => ['business_category_id' => 'id']],
            [['client_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClientType::className(), 'targetAttribute' => ['client_type_id' => 'id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'client_type_id' => 'Client Type',
            'company_id' => 'Company',
            'address' => 'Address',
            'zip' => 'Zip',
            'city' => 'City',
            'state' => 'State',
            'contact_person_1' => 'Contact Person 1',
            'contact_person_2' => 'Contact Person 2',
            'contact_person_3' => 'Contact Person 3',
            'contact_person_1_role' => 'Contact Person 1 Role',
            'contact_person_2_role' => 'Contact Person 2 Role',
            'contact_person_3_role' => 'Contact Person 3 Role',
            'phone_1' => 'Phone 1',
            'phone_2' => 'Phone 2',
            'cell_no' => 'Cell No',
            'fax' => 'Fax',
            'email_1' => 'Email 1',
            'email_2' => 'Email 2',
            'email_3' => 'Email 3',
            'client_referral' => 'Client Referral',
            'office_working_day_start' => 'Office Working Day Start',
            'office_working_day_end' => 'Office Working Day End',
            'office_working_hour_start' => 'Office Working Hour Start',
            'office_working_hour_end' => 'Office Working Hour End',
            'charging_method_id' => 'Charging Method',
            'charging_rate' => 'Charging Rate',
            'business_category_id' => 'Business Category ID',
            'network_structure' => 'Network Structure',
            'daily_backup' => 'Daily Backup',
            'weekly_backup' => 'Weekly Backup',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[BusinessCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBusinessCategory()
    {
        return $this->hasOne(BusinessCategory::className(), ['id' => 'business_category_id']);
    }

    /**
     * Gets query for [[ClientType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClientType()
    {
        return $this->hasOne(ClientType::className(), ['id' => 'client_type_id']);
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }
}

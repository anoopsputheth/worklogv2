<?php

namespace app\modules\company\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $name
 * @property string $contact_person
 * @property string|null $address
 * @property string $phone
 * @property string|null $fax
 * @property string $email
 * @property string|null $zip
 * @property string|null $city
 * @property string|null $state
 * @property string|null $description
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'contact_person', 'phone', 'email'], 'required'],
            [['name'], 'unique'],
            [['name', 'contact_person', 'address', 'phone', 'fax', 'email', 'zip', 'city', 'state', 'description'], 'trim'],
            [['address', 'fax', 'zip', 'city', 'state', 'description'], 'default', 'value' => null],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'contact_person', 'phone', 'fax', 'email', 'city', 'state'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 200],
            [['zip'], 'string', 'max' => 50],
            [['name'], 'unique'],
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
            'contact_person' => 'Contact Person',
            'address' => 'Address',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'Email',
            'zip' => 'Zip',
            'city' => 'City',
            'state' => 'State',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}

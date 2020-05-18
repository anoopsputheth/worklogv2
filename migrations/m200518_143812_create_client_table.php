<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m200518_143812_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [

            'id' => $this->primaryKey(),

            'name' => $this->string(100)->notNull()->unique(),

            'client_type_id' => $this->integer()->notNull(),

            'company_id' => $this->integer()->notNull(),

            'address' => $this->string(200),

            'zip' => $this->string(50),

            'city' => $this->string(100),

            'state' => $this->string(100),

            'contact_person_1' => $this->string(100),

            'contact_person_2' => $this->string(100),

            'contact_person_3' => $this->string(100),

            'contact_person_1_role' => $this->string(100),

            'contact_person_2_role' => $this->string(100),

            'contact_person_3_role' => $this->string(100),

            'phone_1' => $this->string(100),

            'phone_2' => $this->string(100),

            'cell_no' => $this->string(100),

            'fax' => $this->string(100),

            'email_1' => $this->string(100)->notNull(),

            'email_2' => $this->string(100),

            'email_3' => $this->string(100),

            'client_referral' => $this->string(100),

            'office_working_day_start' => $this->string(50),

            'office_working_day_end' => $this->string(50),

            'office_working_hour_start' => $this->string(50),

            'office_working_hour_end' => $this->string(50),

            'charging_method_id' => $this->integer(),

            'charging_rate' => $this->string(100),

            'business_category_id' => $this->integer()->notNull(),

            'network_structure' => $this->string(100),

            'daily_backup' => "ENUM('no', 'yes') NOT NULL DEFAULT 'no'",

            'weekly_backup' => "ENUM('no', 'yes') NOT NULL DEFAULT 'no'",

            'description' => $this->text(),

            'created_at' => $this->timestamp()->defaultValue(null),

            'updated_at' => $this->timestamp()->defaultValue(null),

            'deleted_at' => $this->timestamp()->defaultValue(null),

 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}

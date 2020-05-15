<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%company}}`.
 */
class m200504_121045_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%company}}', [
            
            
            'id' => $this->primaryKey(),

            'name' => $this->string(100)->notNull()->unique(),

            'contact_person' => $this->string(100)->notNull(),

            'address' => $this->string(200),

            'phone' => $this->string(100)->notNull(),

            'fax' => $this->string(100),

            'email' => $this->string(100)->notNull(),

            'zip' => $this->string(50),

            'city' => $this->string(100),

            'state' => $this->string(100),

            'description' => $this->text(),

            'created_at' => $this->timestamp()->defaultValue(null),

            'updated_at' => $this->timestamp()->defaultValue(null),


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%company}}');
    }
}

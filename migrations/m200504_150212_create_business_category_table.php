<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%business_category}}`.
 */
class m200504_150212_create_business_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%business_category}}', [

 
            'id' => $this->primaryKey(),

            'name' => $this->string(100)->notNull()->unique(),

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
        $this->dropTable('{{%business_category}}');
    }
}

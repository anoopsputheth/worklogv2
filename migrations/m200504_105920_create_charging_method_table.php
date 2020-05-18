<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%charging_method}}`.
 */
class m200504_105920_create_charging_method_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%charging_method}}', [
            
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
        $this->dropTable('{{%charging_method}}');
    }
}

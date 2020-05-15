<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client_type}}`.
 */
class m200504_120208_create_client_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client_type}}', [
            
            'id' => $this->primaryKey(),

            'name' => $this->string(100)->notNull()->unique(),

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
        $this->dropTable('{{%client_type}}');
    }
}

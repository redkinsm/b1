<?php

use yii\db\Migration;

/**
 * Class m210215_163645_create_table_comments
 */
class m210215_163645_create_table_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string(255),
                'date' => $this->dateTime().' DEFAULT NOW()',
                'comment' => $this->text(),
            ]);
    }

    /**Å
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}

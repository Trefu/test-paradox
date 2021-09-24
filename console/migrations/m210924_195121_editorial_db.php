<?php

use yii\db\Migration;

/**
 * Class m210924_195121_editorial_db
 */
class m210924_195121_editorial_db extends Migration
{
    /**
     * {@inheritdoc}
     */
    /*     public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('editorial', [
            'id' => $this->primaryKey(),
            'editorial_name' => $this->string()->notNull()->unique(),
        ], $tableOptions);
    } */

    /**
     * {@inheritdoc}
     */
    /*     public function safeDown()
    {
        echo "m210924_195121_editorial_db cannot be reverted.\n";

        return false;
    }
 */

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('editorial', [
            'id' => $this->primaryKey(),
            'editorial_name' => $this->string()->notNull()->unique(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('editorial');
    }
}

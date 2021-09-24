<?php

use yii\db\Migration;

/**
 * Class m210924_171343_books_db
 */
class m210924_171343_books_db extends Migration
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

        $this->createTable('books', [
            'book_id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->unique(),
            'epilogue' => $this->string()->notNull(),
            'editorial_id' => $this->integer()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ], $tableOptions);
    } */

    /**
     * {@inheritdoc}
     */
    /*    public function safeDown()
    {
        echo "m210924_171343_books_db cannot be reverted.\n";

        return false;
    } */


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('books', [
            'book_id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->unique(),
            'epilogue' => $this->string()->notNull(),
            'editorial_id' => $this->integer()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'category_id' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('books');
    }
}

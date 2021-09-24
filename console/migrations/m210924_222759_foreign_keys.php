<?php

use yii\db\Migration;

/**
 * Class m210924_222759_foreign_keys
 */
class m210924_222759_foreign_keys extends Migration
{
    /**
     * {@inheritdoc}
     */
    /*
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    /*
    public function safeDown()
    {
        echo "m210924_222759_foreign_keys cannot be reverted.\n";

        return false;
    }
*/


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->renameColumn('books', 'book_id', 'id');
        $this->renameTable('author', 'authors');
        $this->renameTable('editorial', 'editorials');
        $this->addForeignKey(
            'fk_book_editorials',
            'books',
            'editorial_id',
            'editorials',
            'id'
        );
        $this->addForeignKey(
            'fk_book_authors',
            'books',
            'author_id',
            'authors',
            'id'
        );
        $this->addForeignKey(
            'fk_book_categories',
            'books',
            'category_id',
            'categories',
            'id'
        );
    }

    public function down()
    {
        $this->dropForeignKey('fk_book_editorial', 'book');
        $this->dropForeignKey('fk_book_author', 'book');
        $this->dropForeignKey('fk_book_category', 'book');
        $this->renameColumn('books', 'id', 'book_id');
        $this->renameTable('authors', 'author');
        $this->renameTable('editorials', 'editorial');
    }
}

<?php

use yii\db\Migration;

/**
 * Class m210926_004600_populate_database
 */
class m210926_004600_populate_database extends Migration
{


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        //name changed to author_name in 'authors' table to keep columns' structure
        $this->renameColumn("authors", "name", "author_name");
        $this->alterColumn('books', 'epilogue', $this->string(1000));
        //editorials
        $this->insert('editorials', ['editorial_name' => 'Varzul']);
        $this->insert('editorials', ['editorial_name' => 'Aguilar']);
        $this->insert('editorials', ['editorial_name' => 'Mer\'Mul']);
        $this->insert('editorials', ['editorial_name' => 'Mil hojas']);
        $this->insert('editorials', ['editorial_name' => 'Soles']);
        //authors
        $this->insert('authors', ['author_name' => 'Stephen King']);
        $this->insert('authors', ['author_name' => 'J.K. Rowling.']);
        $this->insert('authors', ['author_name' => 'Amy Tan']);
        $this->insert('authors', ['author_name' => 'Khaled Hosseini']);
        $this->insert('authors', ['author_name' => 'Tana French']);
        //categories
        $this->insert('categories', ['category_name' => 'Action and Adventure']);
        $this->insert('categories', ['category_name' => 'Classics']);
        $this->insert('categories', ['category_name' => 'Fantasy']);
        $this->insert('categories', ['category_name' => 'Horror']);
        $this->insert('categories', ['category_name' => 'Drama']);
        //books
        $this->insert('books', [
            'title' => 'A Time to Kill',
            'epilogue' => 'Aenean iaculis ligula quis tortor tincidunt mollis. Mauris id ullamcorper nibh. Aliquam rutrum, lectus eget aliquam commodo, nisl enim venenatis lectus, a laoreet metus lectus id metus. In vel magna at nisl laoreet pulvinar consequat sit amet nibh. Vestibulum vel quam eget augue porttitor volutpat. Donec volutpat sapien mollis quam rhoncus interdum. Ut volutpat at diam eu ultricies. Suspendisse eu fermentum tortor.',
            'editorial_id' => '1',
            'author_id' => '1',
            'category_id' => '1'
        ]);
        $this->insert('books', [
            'title' => 'Absalom, Absalom!',
            'epilogue' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat rhoncus tortor, nec ullamcorper tortor maximus eget. Sed a sapien vel mauris ultricies placerat nec at lacus. Mauris id mattis ante, nec ornare quam. Sed iaculis pulvinar dui ut mattis. Phasellus turpis eros, gravida ut dictum et, tristique in nulla. Maecenas sed quam enim. Nulla hendrerit eu justo nec tincidunt. Suspendisse ultrices, sapien vitae iaculis tincidunt, quam metus bibendum libero, maximus aliquam magna ligula a nulla. Nunc ornare auctor nibh in vulputate.',
            'editorial_id' => '2',
            'author_id' => '2',
            'category_id' => '2'
        ]);
        $this->insert('books', [
            'title' => 'The House of Mirth',
            'epilogue' => 'Maecenas sodales massa malesuada tempus ultrices. Quisque quam purus, ultricies a turpis eu, aliquet dictum sem. Vivamus posuere, velit non bibendum sollicitudin, urna nisl pulvinar ante, sed viverra dolor odio placerat arcu. Nam tincidunt nibh et pharetra sollicitudin. Ut pretium nisi sed magna eleifend, non dapibus ipsum tristique. Suspendisse potenti. Aliquam eget lorem fermentum, dignissim sem in, placerat libero. Vestibulum consectetur arcu felis, at aliquet elit luctus eu. Nunc ac dapibus urna, quis consequat est. Morbi quis libero id ante accumsan posuere. In tincidunt consequat nunc, non venenatis diam condimentum nec. Praesent eleifend egestas lacinia.',
            'editorial_id' => '3',
            'author_id' => '3',
            'category_id' => '3'
        ]);
        $this->insert('books', [
            'title' => 'East of Eden',
            'epilogue' => 'Sed non feugiat nulla. Fusce nec consequat ante. Praesent eget sagittis nisi, id auctor libero. Etiam aliquet nisl felis, facilisis condimentum libero sollicitudin eget. Maecenas a est interdum, hendrerit elit nec, vehicula nisi. Sed diam ante, venenatis sit amet neque at, suscipit posuere nisi. Nulla dignissim consectetur tellus, id pharetra elit placerat vel. Curabitur pretium ac tortor ac ornare.',
            'editorial_id' => '4',
            'author_id' => '4',
            'category_id' => '4'
        ]);
        $this->insert('books', [
            'title' => 'The Sun Also Rises',
            'epilogue' => 'Donec vel elementum diam, a imperdiet purus. Integer gravida, neque in suscipit dignissim, tortor nisl ullamcorper nulla, eget commodo ipsum eros ut nisl. Fusce sit amet imperdiet urna, sed convallis dui. Nunc vitae dolor at nibh pellentesque convallis in vitae orci. Nullam in lectus quam. Aenean condimentum nulla dui, ac eleifend libero malesuada sit amet. Suspendisse mauris leo, consequat ac tempor tincidunt, varius in nulla.',
            'editorial_id' => '5',
            'author_id' => '5',
            'category_id' => '5'
        ]);
    }

    public function down()
    {
        $this->renameColumn('authors', 'author_name', 'name');
        $this->alterColumn('books', 'epilogue', $this->string(255));

        //editorials
        $this->delete('editorials', ['editorial_name' => 'Varzul']);
        $this->delete('editorials', ['editorial_name' => 'Aguilar']);
        $this->delete('editorials', ['editorial_name' => 'Mer\'Mul']);
        $this->delete('editorials', ['editorial_name' => 'Mil hojas']);
        $this->delete('editorials', ['editorial_name' => 'Soles']);
        //authors
        $this->delete('authors', ['author_name' => 'Stephen King']);
        $this->delete('authors', ['author_name' => 'J.K. Rowling.']);
        $this->delete('authors', ['author_name' => 'Amy Tan']);
        $this->delete('authors', ['author_name' => 'Khaled Hosseini']);
        $this->delete('authors', ['author_name' => 'Tana French']);
        //categories
        $this->delete('categories', ['category_name' => 'Action and Adventure']);
        $this->delete('categories', ['category_name' => 'Classics']);
        $this->delete('categories', ['category_name' => 'Fantasy']);
        $this->delete('categories', ['category_name' => 'Horror']);
        $this->delete('categories', ['category_name' => 'Drama']);
        //books
        $this->delete('books', ['title' => 'A Time to Kill']);
        $this->delete('books', ['title' => 'Absalom, Absalom!']);
        $this->delete('books', ['title' => 'The House of Mirth']);
        $this->delete('books', ['title' => 'East of Eden']);
        $this->delete('books', ['title' => 'The Sun Also Rises']);
    }
}

<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Books Front-end</h1>

    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach ($books as $book) :     ?>
                <div class="col-lg-4 bg-light ">
                    <h2><?= $book->title ?></h2>
                    <p class="text-muted">editorial: <?= $book->editorial->editorial_name ?></p>
                    <p class="text-muted">category: <?= $book->category->category_name ?></p>
                    <p class="text-muted">author: <?= $book->author->author_name ?> </p>
                    <p class="">Epilogue: <?= $book->epilogue ?></p>


                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index py-5">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-1">Books Front-end</h1>

    </div>

    <div class="body-content ">

        <div class="d-flex justify-content-center flex-wrap">
            <?php foreach ($books as $book) :     ?>
                <div class="col-lg-5 card bg-success m-3 p-2 text-white ">
                    <h2 class="display-4 card-header mb-2"><?= $book->title ?></h2>

                    <p class="">Epilogue: <?= $book->epilogue ?></p>
                    <ul class="list-group list-group-flush mt-auto">
                        <li class="list-group-item">Editorial: <?= $book->editorial->editorial_name ?></li>
                        <li class="list-group-item">Category: <?= $book->category->category_name ?></li>
                        <li class="list-group-item">From: <?= $book->author->author_name ?> </li>
                    </ul>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
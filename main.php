<?php require __DIR__ . "/database.php"; ?>

<?php foreach ($database as $album) { ?>

    <div class="container">

        <div class="container_card">

            <div class="card">

                <div class="container_img">
                    <img src="<?php echo $album['poster']?>" alt="<?php echo $album['title']?>">
                </div>

                <h4><?php echo $album['title']?></h4>
                <span><?php echo $album['author']?></span>
                <span><?php echo $album['year']?></span>
                <span><?php echo $album['genre']?></span>

            </div>

        </div>

    </div>

<?php } ?>
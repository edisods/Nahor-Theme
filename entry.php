<div>
    <div class="box">
        <?php if ( has_post_thumbnail() ):  ?>
            <div class="image fit">
                <?php the_post_thumbnail('mainpostimage') ?>
            </div>
        <?php endif; ?>

        <div class="content">
            <header class="align-center">
                <p><?php the_time('d.F.Y') ?></p>
                <h2><?php the_title() ?></h2>
            </header>
            <p><?php the_excerpt() ?></p>
            <footer class="align-center">
                <a href="<?php the_permalink() ?>" class="button alt">Learn More</a>
            </footer>
        </div>
    </div>
</div>
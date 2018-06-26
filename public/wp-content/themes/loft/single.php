<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="content">
    <h1 class="title-page"><?php the_title(); ?></h1>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image" class="alignleft">
    <div class="single-content">
        <?php the_content(); ?>
    </div>
    <?php $image =  get_field('bottom_image')['url']; ?>
    <?php if ($image) : ?>
        <img src="<?=$image?>" alt="">
    <?php endif; ?>
<?php endwhile; else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>

    <div class="page-navigation">
            <div class="page-navigation-wrap"><a href="#" class="page-navigation__prev-page"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a></div>
            <div class="page-navigation-wrap"><a href="#" class="page-navigation__next-page">Сдедующая статья<i class="icon icon-angle-double-right"></i></a></div>
        </div>
    </div>

<?php get_footer(); ?>
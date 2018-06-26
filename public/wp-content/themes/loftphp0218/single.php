<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="content">
    <div class="article-title title-page">
       <?php the_title(); ?>
    </div>
    <div class="article-image"><img src="img/post-image.jpg" alt="Image поста"></div>
    <div class="article-info">
        <div class="post-date"><?php the_date(); ?></div>
    </div>
    <div class="article-text">
        <?php the_content(); ?>
    </div>
    <div><h2>Price: <?php echo get_field('price'); ?></h2></div>

    <?php endwhile; else: ?>
        <p><?php _e('Ничего не найдено.'); ?></p>
    <?php endif; ?>
    <?php
    $prev = get_previous_post();
    ?>
    <div class="article-pagination">
        <div class="article-pagination__block pagination-prev-left">
            <a href="<?php the_permalink($prev->ID); ?>" class="article-pagination__link">
                <i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
            <div class="wrap-pagination-preview pagination-prev-left">
                <div class="preview-article__img"><img src="<?php echo get_the_post_thumbnail_url($prev->ID); ?>" class="preview-article__image"></div>
                <div class="preview-article__content">
                    <div class="preview-article__info"><a href="<?php the_permalink($prev->ID); ?>" class="post-date">23.07.2016</a></div>
                    <div class="preview-article__text"><?php echo $prev->post_title; ?></div>
                </div>
            </div>
        </div>
        <div class="article-pagination__block pagination-prev-right"><a href="#" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
            <div class="wrap-pagination-preview pagination-prev-right">
                <div class="preview-article__img"><img src="img/2.jpg" class="preview-article__image"></div>
                <div class="preview-article__content">
                    <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                    <div class="preview-article__text">Вылеты из Риги за 0,99 euro</div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- sidebar-->
<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>
        <div class="sidebar-item__content">
            <?php wp_tag_cloud()?>
<!--            <ul class="tags-list">-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">путешествия по россии</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">турция</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">гоа</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">авиабилеты</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">отели</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">европа</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">азия</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">тайланд</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">хостелы</a></li>-->
<!--                <li class="tags-list__item"><a href="#" class="tags-list__item__link">шоппинг</a></li>-->
<!--            </ul>-->
        </div>
        <?php $cats= get_categories(); ?>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <?php foreach ($cats as $cat) : ?>
                <li class="category-list__item"><a href="#" class="category-list__item__link">
                       <?php echo $cat->cat_name; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>

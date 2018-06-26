<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content">
    <h1 class="title-page"><?php the_title(); ?></h1>
    <div class="mycontent">
        <?php the_content(); ?>
    </div>
    <div class="page-navigation">
        <div class="page-navigation-wrap"><a href="#" class="page-navigation__prev-page"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a></div>
        <div class="page-navigation-wrap"><a href="#" class="page-navigation__next-page">Сдедующая статья<i class="icon icon-angle-double-right"></i></a></div>
    </div>
</div>
<?php endwhile; else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>

<!-- sidebar-->


<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>
        <div class="sidebar-item__content">
            <ul class="tags-list">
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">путешествия по россии</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">турция</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">гоа</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">авиабилеты</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">отели</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">европа</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">азия</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">тайланд</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">хостелы</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">шоппинг</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <li class="category-list__item"><a href="#" class="category-list__item__link">
                        Вылеты из
                        столиц</a>
                    <ul class="category-list__inner">
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                    </ul>
                </li>
                <li class="category-list__item"><a href="#" class="category-list__item__link">
                        Вылеты из
                        регионов</a>
                    <ul class="category-list__inner">
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php get_footer(); ?>

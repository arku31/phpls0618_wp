<?php
require "../wp-load.php";

$posts = get_posts([
    'post_type' => 'post',
    'meta_key' => 'price',
]);
$result = [];
foreach ($posts as $post) {
    $result[] = [
        'post_title' => $post->post_title,
        'post_id' => $post->ID
    ];
}

wp_reset_query();
wp_reset_postdata();

echo json_encode($result);
